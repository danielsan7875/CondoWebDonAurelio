<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'Complementos/head.php'; ?>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-0 md:p-6 lg:p-10">

<!-- Loader -->
<div id="app-loader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500 opacity-100">
    <div class="relative w-20 h-20 flex items-center justify-center">
        <!-- SVG del Loader (basado en la imagen subida) -->
        <svg class="w-full h-full text-black" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Anillo central grueso -->
            <circle cx="50" cy="50" r="30" stroke="currentColor" stroke-width="8" />

            <!-- Arco exterior giratorio -->
            <g class="animate-spin origin-center" style="animation-duration: 1.2s;">
                <path d="M 50 10 A 40 40 0 0 1 90 50" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
                <path d="M 50 90 A 40 40 0 0 1 10 50" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
            </g>
        </svg>
    </div>
</div>

    <!-- Main Container Card -->
    <div class="w-full max-w-7xl bg-white min-h-screen md:min-h-[720px] md:rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row">
        
        <!-- Left Banner (Hero Section) -->
        <div class="relative w-full lg:w-1/2 min-h-[380px] lg:min-h-full flex flex-col justify-between p-6 sm:p-10 bg-cover bg-center text-white"
             style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1600&auto=format&fit=crop');">
            
            <!-- Dark Overlay -->
            <div class="absolute inset-0 hero-overlay z-0"></div>

            <!-- Top Header Logo -->
            <div class="relative z-10 flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-darkBtn shadow-md">
                    <!-- Home Icon SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tight text-white">CondoWeb Don Aurelio</span>
            </div>

            <!-- Bottom Content -->
            <div class="relative z-10 mt-20 lg:mt-0 space-y-4">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                    Encuentra tu hogar ideal
                </h1>
                <p class="text-gray-200 text-sm sm:text-base font-normal max-w-md leading-relaxed">
                    Gestiona tu condominio y agenda tus visitas<br/>en tan solo unos pocos clics.
                </p>

                <!-- Slider Indicators -->
                <div class="flex items-center space-x-2 pt-4">
                    <span class="w-8 h-2 bg-white rounded-full transition-all"></span>
                    <span class="w-2 h-2 bg-white/50 hover:bg-white rounded-full transition-all cursor-pointer"></span>
                    <span class="w-2 h-2 bg-white/50 hover:bg-white rounded-full transition-all cursor-pointer"></span>
                </div>
            </div>
        </div>

        <!-- Right Side (Form Section) -->
        <div class="w-full lg:w-1/2 bg-white p-6 sm:p-12 lg:p-16 flex flex-col justify-between relative">
            
            <!-- Top Right Sign in Toggle Button -->
            <div class="flex justify-end mb-6 lg:mb-0">
                <span class="px-6 py-2 bg-black text-white text-sm font-semibold rounded-full cursor-default select-none">
                    Inicio de sesión
                </span>
            </div>

            <!-- Main Form Wrapper -->
            <div class="max-w-md w-full mx-auto my-auto py-6">
                
                <!-- Title Header -->
                <div class="mb-8">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight">
                        Te damos la bienvenida!
                    </h2>
                    <p class="text-subtleText text-sm mt-2 font-medium">
                       Ingresa tus credenciales para acceder a tu cuenta
                    </p>
                </div>

                <!-- Form -->
                <form onsubmit="event.preventDefault();" class="space-y-5">
                    
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                            Correo electrónico
                        </label>
                        <div class="relative">
                            <input 
                                type="email" 
                                id="email" 
                                value="info.madhu786@gmail.com"
                                class="w-full px-4 py-3.5 rounded-xl border border-gray-300 text-gray-900 focus:ring-2 focus:ring-black focus:border-black text-sm outline-none transition font-medium"
                                placeholder="name@example.com"
                                required
                            >
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                            constraseña
                        </label>
                        <div class="relative flex items-center">
                            <input 
                                type="password" 
                                id="password" 
                                value="password123"
                                class="w-full px-4 py-3.5 rounded-xl border border-gray-300 text-gray-900 focus:ring-2 focus:ring-black focus:border-black text-sm outline-none transition font-medium pr-10"
                                placeholder="••••••••"
                                required
                            >
                            <!-- Password Toggle Eye Icon -->
                            <button 
                                type="button" 
                                onclick="togglePasswordVisibility()" 
                                class="absolute right-3.5 text-gray-400 hover:text-gray-600 focus:outline-none"
                            >
                                <i id="eyeIcon" class="fa-regular fa-eye text-base"></i>
                            </button>
                        </div>
                    </div>

                    
                    <div class="flex items-center text-xs sm:text-sm pt-1">
                        <a href="recuperar" class="ml-auto text-gray-400 hover:text-gray-700 font-medium transition">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>

                    <!-- Submit Login Button -->
                    <div class="pt-2">
                        <button type="submit" 
                            class="w-full py-4 bg-darkBtn text-white font-bold rounded-xl hover:bg-black transition duration-200 shadow-md text-sm tracking-wide"
                        >
                            INGRESAR
                        </button>
                    </div>

                </form>

                

                <!-- Footer Register Link -->
                <div class="mt-8 text-center text-xs text-gray-500 font-medium">
                    Don't have any acount? 
                    <a href="home" class="text-brandBlue font-bold hover:underline ml-1">
                        Register
                    </a>
                </div>

            </div>

            <!-- Bottom spacing dummy for flex placement -->
            <div></div>
        </div>

    </div>

    <script src="public/js/login.js"> </script>
</body>
</html>