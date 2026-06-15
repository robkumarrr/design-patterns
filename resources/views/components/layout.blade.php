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

{{ $slot }}

</body>
</html>
