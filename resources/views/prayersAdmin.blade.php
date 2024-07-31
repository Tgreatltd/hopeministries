<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOUSE OF POWER</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="navbar">
        @livewire('navbarAdmin')
     </div>

     <div class="prayer">
        @livewire('prayers')
     </div>
</body>
</html>