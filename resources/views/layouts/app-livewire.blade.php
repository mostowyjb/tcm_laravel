<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ secure_asset('img/tcm-logo.png') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>Dashboard TCM</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        @livewireStyles()
        @stack('styles')

    </head>
    <body>
        @include('partials.navbar')

        <div class="content">

            @yield('content')
          </div>
        @livewireScripts()
        @include('partials.footer')

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        @include('partials.scripts')
        @stack('scripts')
    </body>
</html>

   