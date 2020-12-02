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
        <div class="page_content">
            <div id="_snow"></div>
            @include('components.errors')
            @include('site.nav')
            @yield('content', "No content to display")
            @include('components.footer')
            {{-- <div class="fixed-bottom m-0 p-1 bg-danger text-white text-center">
                You are in a NON-PRODUCTION environment. VER: {{env('VERSION_NUM')}}. {{ $time }}
            </div> --}}
        </div>
    </body>

    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</html>
