<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-200">
    <livewire:show-tickets />
    @livewireScripts
</body>

</html>