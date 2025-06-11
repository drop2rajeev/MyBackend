<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link href="{{ asset('designs/css/bootstrap@5.3.3.min.css') }}" rel="stylesheet">
    <!-- Local Font Awesome -->
    <link rel="stylesheet" href="{{ asset('designs/fontawesome-6.7.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('designs/css/custom.css') }}">
    <style>
        /* Hover dropdowns */
        .hover-dropdown:hover > .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        /* Nested dropdown to the right */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: 0.1rem;
            display: none;
        }

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }
    </style>
    @stack('styles')
</head>
<body>
    {{-- Include Header --}}
    @include('layouts.header')

    {{-- Main Content --}}
    <main class="pt-20 px-4 max-w-7xl mx-auto">
        @yield('content')
    </main>

    {{-- Optional Footer (create if needed) --}}
    {{-- @include('layouts.footer') --}}

    <script src="{{ asset('designs/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('designs/js/bootstrap@5.3.3.min.js') }}"></script>
    @stack('scripts')
    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
</script>
</body>
</html>