<?php

namespace App\Classes\Player;

use SimpleXLSX;
use voku\helper\ASCII;

class PlayerXlsManager
{
    private $headerLine = 0;
    private $fullpath;
    private $xlsx;
    private $success;
    private $errors = [];
    private $hasErrors;
    private $messages = [];
    public $validation;
    public $column_labels;
    public int $changeCount = 0;
    public array $requiredRefCol = [
       'ref', 'reference', 'ar_ref', 'arref', 'reference produit', 'referenceproduit', 'reference willemse', 'code article', 'ref produit unitaire',
    ];
    public string $productKey;
    public array $base_column;
    public int $errorCount = 0;

    public function __construct($fullpath = null)
    {
        $this->fullpath = $fullpath;
        $this->success = false;
        $this->hasErrors = false;
    }

    public function check(): bool
    {
        $this->success = true;
        if (filesize($this->fullpath) > 1024 * 1024) {
            $this->success = false;
            $this->errors[] = 'Erreur, le fichier XLS fait plus de 1 Mo. ';
        } else {
            if ($this->xlsx = SimpleXLSX::parse($this->fullpath)) {
                $headers = $this->getHeaders();
                $ref = array_intersect($headers, $this->requiredRefCol);
                if (empty($ref)) {
                    $this->success = false;
                    $this->errors[] = 'Il manque des colonnes obligatoire au fichier XLS';
                } else {
                    $ref = implode('', $ref);
                    $this->productKey = $ref;
                }
            } else {
                $this->success = false;
                $this->errors[] = SimpleXLSX::parseError();
            }
        }

        return $this->success;
    }

    public function getHeaders(): array
    {
        $headers = [];
        if ($this->xlsx) {
            $row1 = $this->xlsx->rows()[$this->headerLine];
            for ($i = 0; $i < count($row1); $i++) {
                $name = mb_strtolower(trim($row1[$i]));
                $name = ASCII::to_ascii(($name));
                $headers[] = $name;
            }
        }

        return $headers;
    }

    public function verifyExcel(): array
    {
        $productList = [];
        if ($this->check()) {
            $headers = $this->getHeaders();
            $productRefKey = array_search($this->productKey, $headers);
            $promoKey = array_search('taux de promo', $headers);
            $multipleKey = array_search('reference produit vendue (avec multiples)', $headers);
            $design = array_search('qualite livree multiples', $headers);
            $prix_cession = array_search('prix cession propose a vp multiples', $headers);
            $date_deb = array_search('date debut', $headers);
            $date_fin = array_search('date fin', $headers);
            $comm = array_search('commentaire', $headers);
            $ref = array_intersect($this->getHeaders(), $this->requiredRefCol);
            $listRefProduit = [];
            $productList = [];
            foreach ($this->xlsx->rows() as $i => $exelRow) {
                if ($i < 1) {
                    continue;
                }

                if ($multipleKey !== false && isset($exelRow[$multipleKey])) {
                    $explode = explode('-', $exelRow[$multipleKey]);
                    $multiple = $explode[1] ?? 1;
                } else {
                    $multiple = null;
                }
                $promo = blank($exelRow[$promoKey]) ? null : (float) $exelRow[$promoKey] * 100;
                $productList[] = [
                    'promo'        => $promo,
                    'multiple'     => $multiple ?? null,
                    'designation'  => $design ? $exelRow[$design] : null,
                    'prix_cession' => $prix_cession ? round($exelRow[$prix_cession], 2) : null,
                    'date_debut'   => $date_deb ? $exelRow[$date_deb] : null,
                    'date_fin'     => $date_fin ? $exelRow[$date_fin] : null,
                    'commentaire'  => $comm ? $exelRow[$comm] : null,
                ];
                $listRefProduit[] = "'$ref'";
            }
        }

        return $productList;
    }

    public function isSuccess()
    {
        return $this->success;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @return bool
     */
    public function hasErrors(): bool
    {
        return $this->hasErrors;
    }
}
