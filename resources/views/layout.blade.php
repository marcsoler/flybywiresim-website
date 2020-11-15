<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
        
        <title>{{ config('app.name') }}</title>

        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        @include('components.nav')
        <div class="page_content">
            @include('components.errors')
            @yield('content', "No content to display")
        </div>
    </body>

    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</html>
