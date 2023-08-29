<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>@yield('page_title') - {{ env('APP_NAME') }}</title>

    @vite('resources/js/app.js')
</head>

<body>

    {{-- Header --}}
    @include('includes.sections.header')

    {{-- Page Alerts --}}
    @include('includes.components.alert')

    {{-- Main Content --}}
    <main class="text-white">
        @yield('main-content')
    </main>

    {{-- Footer --}}
    @include('includes.sections.footer')

    {{-- Scripts --}}
    @yield('scripts')

</body>

</html>
