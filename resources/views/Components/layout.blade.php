<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<!-- blade is just HTML -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ isset($title) ? $title . ' - UniGuide' : 'UniGuide' }}</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">
<nav class="navbar bg-base-100 sticky top-0 z-50">
<div class="navbar-start">
<a href="/" class="btn btn-ghost text-xl">UniGude</a>
<div class="flex space-x-4">
        <a href="{{ route('home') }}"  class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Home</a>
        <a href="{{ route('scholarships') }}" class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md  ">Scholerships</a>
        <a href="{{ route('academic-tests') }}" class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Academic test</a>
    </div>
</div>
<!--<nav class = "bg-white shadow-md">
<div class="navbar-center hidden lg:flex">
    <div class="flex space-x-4">
        <a class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Home</a>
        <a class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md ">Scholerships</a>
        <a class="btn btn-ghost px-3 py-2 font-medium text-gray-700 hover:text-gray-900 shadow-md">Academic test</a>
    </div>
</div>
</nav> -->

<div class="navbar-end gap-2">
<a href="#" class="btn btn-ghost btn-sm">Sign In</a>
<a href="#" class="btn btn-primary btn-sm">Sign Up</a>
</div>
</nav>
<main class="flex-1 container mx-auto px-4 py-8">
    {{ $slot }}
</main>

<footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
    <div>
        <p>©contact info:</p>
    </div>
</footer>
</body> 
</html>