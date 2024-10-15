<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunities</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <a href="/" class="text-xl font-semibold text-gray-800">Embarque Interview</a>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="bg-white shadow-md mt-8">
        <div class="container mx-auto px-4 py-4 text-center text-gray-600">
            &copy; {{ date('Y') }} Embarque - Richard. All rights reserved.
        </div>
    </footer>

    @livewireScripts
</body>
</html>