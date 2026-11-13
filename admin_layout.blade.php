<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechVolt Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 antialiased min-h-screen flex flex-col">

    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-8">
                    <a href="#" class="text-lg font-bold text-indigo-600 tracking-tight">
                        TechVolt Admin
                    </a>
                    <div class="flex space-x-6">
                        <a href="#"
                           class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-600 text-sm font-medium text-gray-900">
                            Products
                        </a>
                        <a href="#"
                           class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Categories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-6xl w-full mx-auto py-8 px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-6xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-xs text-gray-500 text-center">
            &copy; {{ date('Y') }} TechVold Admin. All rights reserved.
        </div>
    </footer>

</body>
</html>
