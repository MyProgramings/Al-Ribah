<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('جمعية الربة التعاونية الزراعية / شبام') }}</title>
        <link rel="icon" href="{!! asset('small_logo.webp') !!}">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Cairo', sans-serif !important;
                background-color: #f4f7eb;
                color: #114f39;
            }
        </style>
        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('build/assets/app.bfe18480.css') }}">
        <script src="{{ asset('build/assets/app.ed79e0aa.js') }}"></script>
        <!-- Scripts -->
    </head>
    <body class="antialiased" dir="rtl">
        <x-jet-banner />

        <div class="min-h-screen ">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
