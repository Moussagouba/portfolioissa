<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Issa Cissé - Graphiste' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        neonGreen: '#9eff00',
                        darkBg: '#111111',
                        darkCard: '#1a1a1a',
                        grayText: '#a0a0a0',
                        'brand-green': '#9eff00',
                        'brand-dark': '#111111',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                    },
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(145deg, rgba(17,17,17,1) 0%, rgba(26,26,26,1) 100%);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(158, 255, 0, 0.1);
        }
        .neon-shadow {
            box-shadow: 0 0 15px rgba(158, 255, 0, 0.3);
        }
        .text-shadow {
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-darkBg text-white">

    <main>
        @yield('content')
    </main>

</body>
</html>
