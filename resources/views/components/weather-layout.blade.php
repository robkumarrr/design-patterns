@props([
    'title' => 'Head First Design Patterns Chapter 2: IObserver Pattern'
])
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> <!-- Tailwind CDN -->
</head>

<body class="p-6 max-w-xl mx-auto">

    <div class="flex flex-col gap-2 p-4 border border-gray-300 bg-neutral-100 rounded-2xl shadow-lg">
        <h1 class="text-lg text-center">{{ $title }}</h1>
        {{ $slot }}
    </div>

</body>
</html>
