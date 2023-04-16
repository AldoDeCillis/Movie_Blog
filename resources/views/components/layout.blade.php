<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Colloquio</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />
    <div class="container-fluid min-vh-100 bg-dark">
        {{$slot}}
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @livewireScripts
</body>
</html>