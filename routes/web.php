<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('visitor')->group(function ($router) {
    Route::group(['prefix' => 'tournoi'], function () use ($router) {
        $router->get('/', [Controllers\Tournament\TournamentController::class, 'show'])->name('tournoi');
        $router->get('/prog', \App\Http\Livewire\Programmation::class)->name('tournoi.prog');
        $router->get('/live', [Controllers\Tournament\TournamentController::class, 'show'])->name('tournoi.live');
    });
});
Route::get('login', [Controllers\Auth\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [Controllers\Auth\CustomAuthController::class, 'customLogin'])->name('login.custom'); 



Route::middleware('auth')->group(function ($router) {
    Route::group(['prefix' => 'dashboard'], function () use ($router) {
        $router->get('/', [Controllers\DashboardController::class, 'show'])->name('dashboard');
        
        $router->get('/match', \App\Http\Livewire\Tournament\MatchesController::class)->name('match');
    
        $router->get('/programmation', \App\Http\Livewire\Tournament\ProgrammationController::class)->name('programmation');

        $router->get('/player', [Controllers\Player\PlayerController::class, 'show'])->name('player');
        $router->post('/add-player', [Controllers\Player\PlayerController::class, 'addPlayer'])->name('player.addPlayer');
        $router->get('/delete-player/{id}', [Controllers\Player\PlayerController::class, 'deletePlayer'])->name('player.deletePlayer');

        $router->get('/stats', \App\Http\Livewire\Dashboard\VisitorController::class)->name('visist');
    });

    Route::get('signout', [Controllers\Auth\CustomAuthController::class, 'signOut'])->name('signout');

});




