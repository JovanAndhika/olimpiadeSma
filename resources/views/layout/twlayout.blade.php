<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- SweetAlerts2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="stylesheet" href="css/sidebar.css">
    @yield('head')
</head>

<body>

    @include('partials.sidebar')

    @yield('content')



    @yield('script')

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
