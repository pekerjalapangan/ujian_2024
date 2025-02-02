<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" class="w-[15rem]" href="{{ asset('logo.png') }}" type="image/x-icn">
    <title>Prabotku.com</title>
    @vite('resources/css/app.css')
</head>
<body>

    {{-- Navbar --}}
    @include('components.navbar')
    {{-- Headear --}}
    @include('components.header')
    {{-- Main --}}
    @include('components.main')
    {{-- Footer --}}
    @include('components.footer')

</body>
</html>