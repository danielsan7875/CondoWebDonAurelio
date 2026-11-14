<?php
$currentActive = $activeModule ?? '';

// 1. Para el Sidebar (Escritorio)
function isActive(string $module, string $currentActive): string {
    return $currentActive === $module 
        ? 'bg-sky-500 text-white font-bold shadow-md' 
        : 'hover:bg-white/5 hover:text-white text-slate-400 font-medium';
}

// 2. Para los iconos directos de la TabBar (Móvil)
function isTabActive(string $module, string $currentActive): string {
    return $currentActive === $module 
        ? 'text-sky-500 font-bold' 
        : 'text-slate-500 hover:text-slate-800';
}

// 3. Para el botón "Más" de la TabBar (Se ilumina si estás en cualquiera de los 5 sub-módulos)
function isMoreTabActive(string $currentActive): string {
    $moreModules = ['propietarios', 'reportes', 'configuracion', 'usuario', 'cargo'];
    return in_array($currentActive, $moreModules) 
        ? 'text-sky-500 font-bold' 
        : 'text-slate-500 hover:text-slate-800';
}

// 4. Para las tarjetas dentro del Offcanvas
function isOffcanvasActive(string $module, string $currentActive): string {
    return $currentActive === $module 
        ? 'bg-sky-50/80 border-sky-300 ring-1 ring-sky-200' 
        : 'hover:bg-slate-50 border-slate-100';
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
<div class="w-full flex-1 flex flex-col lg:flex-row min-h-screen pb-20 lg:pb-0">
    
    <!-- Sidebar Navigation (Escritorio) -->
    <aside id="sidebar" class="hidden lg:flex flex-col justify-between w-full lg:w-64 bg-eduDark text-slate-300 p-6 shrink-0 transition-all duration-300 z-20 min-h-screen">
        <div>
            <!-- Brand Logo -->
            <div class="flex items-center space-x-3 mb-8 px-2">
                <div class="w-12 h-12 rounded-2xl bg-white/10 overflow-hidden flex items-center justify-center shrink-0 border border-white/10 shadow-sm">
                    <img src="public/img/iso.png" 
                         alt="Logo CondoWeb" 
                         class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/150'">
                </div>
                <span class="text-2xl font-bold text-white tracking-tight">CondoWeb</span>
            </div>

            <!-- Navigation Links Divididos con Mini Títulos -->
            <nav class="space-y-6">
                
                <!-- SECCIÓN 1: PRINCIPAL -->
                <div>
                    <p class="px-4 text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2">
                        Principal
                    </p>
                    <div class="space-y-1">
                        <a href="home" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('home', $currentActive); ?>">
                            <i class="fa-solid fa-border-all text-base w-5"></i>
                            <span class="text-sm">Inicio</span>
                        </a>
                    </div>
                </div>

                <!-- SECCIÓN 2: OPERACIONES -->
                <div>
                    <p class="px-4 text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2">
                        Operaciones
                    </p>
                    <div class="space-y-1">
                        <a href="pagos" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('pagos', $currentActive); ?>">
                            <i class="fa-solid fa-money-bill-transfer text-base w-5"></i>
                            <span class="text-sm">Pagos</span>
                        </a>

                        <a href="recibos" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('recibos', $currentActive); ?>">
                            <i class="fa-solid fa-file-invoice-dollar text-base w-5"></i>
                            <span class="text-sm">Recibos Digitales</span>
                        </a>

                        <a href="reportes" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('reportes', $currentActive); ?>">
                            <i class="fa-solid fa-chart-line text-base w-5"></i>
                            <span class="text-sm">Reportes</span>
                        </a>
                    </div>
                </div>

                <!-- SECCIÓN 3: COPROPIEDAD -->
                <div>
                    <p class="px-4 text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2">
                        Copropiedad
                    </p>
                    <div class="space-y-1">
                        <a href="inmuebles" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('inmuebles', $currentActive); ?>">
                            <i class="fa-solid fa-building text-base w-5"></i>
                            <span class="text-sm">Inmuebles</span>
                        </a>

                        <a href="propietarios" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('propietarios', $currentActive); ?>">
                            <i class="fa-solid fa-user-tie text-base w-5"></i>
                            <span class="text-sm">Propietarios</span>
                        </a>
                    </div>
                </div>

                <!-- SECCIÓN 4: SISTEMA Y SEGURIDAD -->
                <div class="pt-2 border-t border-white/10">
                    <p class="px-4 text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2 mt-2">
                        Administración
                    </p>
                    <div class="space-y-1">
                        <a href="configuracion" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('configuracion', $currentActive); ?>">
                            <i class="fa-solid fa-gear text-base w-5"></i>
                            <span class="text-sm">Configuración</span>
                        </a>

                        <a href="usuario" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('usuario', $currentActive); ?>">
                            <i class="fa-solid fa-users text-base w-5"></i>
                            <span class="text-sm">Usuarios</span>
                        </a>

                        <a href="cargo" class="flex items-center space-x-3 px-4 py-3 rounded-2xl transition-all <?= isActive('cargo', $currentActive); ?>">
                            <i class="fa-solid fa-user-shield text-base w-5"></i>
                            <span class="text-sm">Cargos y Roles</span>
                        </a>
                    </div>
                </div>

            </nav>
        </div>
    </aside>

    <!-- Main Content Wrapper (Contenedor derecho donde fluye el Nav y tu contenido) -->
    <div class="flex-1 flex flex-col min-w-0">