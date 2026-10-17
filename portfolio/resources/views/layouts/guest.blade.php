<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Tailwind CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans text-gray-100 antialiased" style="font-family: 'Figtree', sans-serif;">
        <div class="min-h-screen flex flex-col items-center justify-center bg-gray-950 relative overflow-hidden">
            <!-- Background decorative elements -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-1/4 -left-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
            </div>

            <div class="relative z-10 w-full sm:max-w-md px-6 py-8">
                <!-- Logo / Brand -->
                <div class="text-center mb-8">
                    <a href="/" class="inline-block">
                        <span class="text-2xl font-bold">
                            <span class="text-white">&lt;/&gt;</span>
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 to-cyan-400"> Portfolio</span>
                        </span>
                    </a>
                </div>

                <!-- Login Card -->
                <div class="bg-gray-900/80 backdrop-blur-xl border border-white/10 shadow-2xl rounded-2xl p-8">
                    {{ $slot }}
                </div>

                <p class="text-center text-gray-600 text-sm mt-6">
                    &copy; {{ date('Y') }} M. Kurniawan
                </p>
            </div>
        </div>
    </body>
</html>
