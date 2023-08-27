<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reminder</title>

    @vite('resources/js/app.js')

</head>

<body>
    @livewireStyles

    <div class="flex justify-center h-screen">
        <div class="m-auto">
            {{ $slot }}
        </div>
    </div>
    @livewireScripts

</body>

</html>
