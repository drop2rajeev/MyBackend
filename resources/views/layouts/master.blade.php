<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle', config('app.name'))</title>
    <link href="{{ asset('designs/css/bootstrap@5.3.3.min.css') }}" rel="stylesheet">
    <!-- Local Font Awesome -->
    <link rel="stylesheet" href="{{ asset('designs/fontawesome-6.7.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('designs/css/custom.css') }}">
    @stack('addStyle')
</head>
<body>
    {{-- Include Header --}}
    @include('layouts.headers')

    {{-- Main Content --}}
    <main class="pt-20 px-4 max-w-7xl mx-auto">
        @yield('pageContent')
    </main>

    {{-- Optional Footer (create if needed) --}}
    {{-- @include('layouts.footer') --}}

    <script src="{{ asset('designs/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('designs/js/bootstrap@5.3.3.min.js') }}"></script>
    @stack('addScripts')
</body>
</html>