<?php
// Obtenemos la variable que viene del controlador de manera segura
$currentActive = $activeModule ?? '';

function isActive(string $module, string $currentActive): string {
    return $currentActive === $module 
        ? 'bg-emerald-400 text-slate-900 font-bold shadow-md' 
        : 'hover:bg-white/5 hover:text-white text-slate-400 font-medium';
}
?>

<!-- Loader -->
<div id="app-loader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500 opacity-100">
    <div class="relative w-20 h-20 flex items-center justify-center">
        <!-- SVG del Loader -->
        <svg class="w-full h-full text-black" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="30" stroke="currentColor" stroke-width="8" />
            <g class="animate-spin origin-center" style="animation-duration: 1.2s;">
                <path d="M 50 10 A 40 40 0 0 1 90 50" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
                <path d="M 50 90 A 40 40 0 0 1 10 50" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
            </g>
        </svg>
    </div>
</div>

<!-- Fullscreen Layout Container -->
<div class="w-full flex-1 flex flex-col lg:flex-row min-h-screen">
    
    <!-- Mobile Top Nav Header -->
    <div class="lg:hidden bg-eduDark text-white p-4 flex items-center justify-between z-30 sticky top-0 shadow-md">
        <div class="flex items-center space-x-3">
            <div class="w-9 h-9 rounded-full bg-eduLime text-eduDark flex items-center justify-center font-bold">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <span class="text-xl font-bold tracking-tight text-white">CondoWeb</span>
        </div>
        <button id="mobileMenuBtn" class="text-white hover:text-eduLime focus:outline-none p-2">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>
    </div>

    <!-- Sidebar Navigation -->
    <aside id="sidebar" class="hidden lg:flex flex-col justify-between w-full lg:w-64 bg-eduDark text-slate-300 p-6 shrink-0 transition-all duration-300 z-20 min-h-screen">
        <div>
            <!-- Brand Logo -->
            <div class="flex items-center space-x-3 mb-10 px-2">
                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white relative">
                    <div class="w-7 h-7 rounded-full border-2 border-eduLime flex items-center justify-center">
                        <div class="w-2 h-2 bg-eduLime rounded-full"></div>
                    </div>
                </div>
                <span class="text-2xl font-bold text-white tracking-tight">CondoWeb</span>
            </div>

            <!-- Navigation Links -->
            <nav class="space-y-2">
                <!-- Inicio -->
                <a href="home" class="flex items-center justify-between px-4 py-3.5 rounded-2xl transition-all <?= isActive('home', $currentActive); ?>">
                    <div class="flex items-center space-x-3">
                        <i class="fa-solid fa-border-all text-lg w-5"></i>
                        <span class="text-sm">Inicio</span>
                    </div>
                </a>

                <!-- Pagos -->
                <a href="pagos" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all <?= isActive('pagos', $currentActive); ?>">
                    <i class="fa-solid fa-shield-halved text-base w-5"></i>
                    <span class="text-sm">Pagos</span>
                </a>

                <!-- Inmuebles -->
                <a href="inmuebles" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all <?= isActive('inmuebles', $currentActive); ?>">
                    <i class="fa-regular fa-clipboard text-base w-5"></i>
                    <span class="text-sm">Inmuebles</span>
                </a>

                <!-- Propietarios -->
                <a href="propietarios" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all <?= isActive('propietarios', $currentActive); ?>">
                    <i class="fa-regular fa-comment-dots text-base w-5"></i>
                    <span class="text-sm">Propietarios</span>
                </a>

                <!-- Recibos Digitales -->
                <a href="recibos" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all <?= isActive('recibos', $currentActive); ?>">
                    <i class="fa-regular fa-comment-dots text-base w-5"></i>
                    <span class="text-sm">Recibos Digitales</span>
                </a>

                <!-- Reportes -->
                <a href="reportes" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all <?= isActive('reportes', $currentActive); ?>">
                    <i class="fa-regular fa-calendar-days text-base w-5"></i>
                    <span class="text-sm">Reportes</span>
                </a>

                <!-- Configuracion -->
                <a href="configuracion" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all pt-4 <?= isActive('configuracion', $currentActive); ?>">
                    <i class="fa-solid fa-gear text-base w-5"></i>
                    <span class="text-sm">Configuracion</span>
                </a>

                <!-- Usuario -->
                <a href="usuario" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all <?= isActive('usuario', $currentActive); ?>">
                    <i class="fa-solid fa-users text-base w-5"></i>
                    <span class="text-sm">Usuario</span>
                </a>

                <!-- Cargos -->
                <a href="cargo" class="flex items-center space-x-3 px-4 py-3.5 rounded-2xl transition-all <?= isActive('cargo', $currentActive); ?>">
                    <i class="fa-solid fa-users text-base w-5"></i>
                    <span class="text-sm">Cargos</span>
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content Wrapper (Contenedor derecho donde fluye el Nav y tu tarjeta blanca) -->
    <div class="flex-1 flex flex-col min-w-0">
    