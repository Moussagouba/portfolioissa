<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion - Administration</title>
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
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-darkBg text-white">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-8 bg-darkCard rounded-xl shadow-lg">
            <div class="text-center mb-8">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-10 h-10 text-neonGreen" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold">Connexion à l'administration</h1>
                <p class="text-grayText mt-2">Entrez vos identifiants pour accéder au panneau d'administration</p>
            </div>
            
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password" required
                           class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-neonGreen focus:ring-neonGreen border-darkCard rounded">
                        <label for="remember" class="ml-2 block text-sm text-grayText">Se souvenir de moi</label>
                    </div>
                </div>
                
                <button type="submit" class="w-full bg-neonGreen text-black py-3 rounded-lg font-medium hover:bg-opacity-90 transition-all">
                    Se connecter
                </button>
                
                <div class="mt-6 text-center">
                    <a href="{{ route('home') }}" class="text-sm text-grayText hover:text-neonGreen transition-colors">
                        Retour au site
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
