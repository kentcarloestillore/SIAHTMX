<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="bg-gray-300">
    <div class="w-full h-screen flex mx-auto bg-white shadow-lg">
        <section class="bg-blue-700 text-white w-64 flex-shrink-0 flex flex-col h-full">
            <div id="brand" class="text-xl py-4 px-6">
                My Awesome App
            </div>
            <nav id="main-nav" class="flex flex-col">
                <a href="/" class="p-3 hover:bg-blue-600">Home</a>
                <a href="/about" class="p-3 hover:bg-blue-600">About</a>
                <a href="/products" class="p-3 hover:bg-blue-600">Products</a>
                <a href="/contact" class="p-3 hover:bg-blue-600">Contact Us</a>
            </nav>
        </section>
    
        <div class="flex-grow flex flex-col">
            <article id="content" class="min-h-[30vh] p-5 flex-grow overflow-auto">
                @yield('content')
            </article>
    
            <footer class="text-center text-gray-500 py-3">
                Copyright &copy; Clab-2 corp. All rights reserved.
            </footer>
        </div>
    </div>
    
    
</body>
</html>