
<main class="flex-1 p-6 sm:p-8 lg:p-10 overflow-y-auto">
    
    <!-- Top Header Bar -->
    <header class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        
        <!-- Título de la página / Condominio -->
        <div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                <?= $titulo ?? 'CondoWeb Don Aurelio'; ?>
            </h1>
            <p class="text-xs text-slate-400 mt-0.5">
                <?= htmlspecialchars($registro['nombre_condominio'] ?? 'Panel Principal'); ?>
            </p>
        </div>

        <!-- Right Utility Bar -->
        <div class="flex items-center space-x-4">
            
            <!-- Botón Modo Oscuro -->
            <button id="darkModeToggle" 
                    type="button" 
                    class="w-10 h-10 rounded-full bg-white border border-slate-200/80 text-slate-600 hover:text-slate-900 flex items-center justify-center shadow-sm hover:bg-slate-50 transition-all"
                    title="Modo Oscuro">
                <i class="fa-regular fa-moon text-base"></i>
            </button>

            <!-- Menú de Usuario / Avatar con Dropdown -->
            <div class="relative">
                <!-- Trigger Button (Avatar + Nombre + Fecha) -->
                <button id="userDropdownBtn" 
                        type="button" 
                        class="flex items-center space-x-3 bg-white border border-slate-200/80 p-1.5 pr-4 rounded-full shadow-sm hover:bg-slate-50 transition-all focus:outline-none">
                    
                    <!-- Avatar -->
                    <div class="w-9 h-9 rounded-full overflow-hidden border border-slate-100 shrink-0">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=250&auto=format&fit=crop" 
                             alt="User Avatar" 
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Nombre, Apellido y Fecha -->
                    <div class="text-left hidden md:block">
                        <span class="block text-xs font-bold text-slate-800 leading-tight">
                            <?= htmlspecialchars($usuario_nombre ?? 'Daniel Sánchez'); ?>
                        </span>
                        <span class="block text-[10px] text-slate-400 font-medium">
                            <?= date('d/m/Y'); ?>
                        </span>
                    </div>

                    <!-- Indicador Flecha -->
                    <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 ml-1"></i>
                </button>

                <!-- Menú Desplegable (Dropdown Menu) -->
                <div id="userDropdownMenu" 
                     class="hidden absolute right-0 mt-2 w-52 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50 animate-in fade-in slide-in-from-top-2 duration-150">
                    
                    <!-- Datos de usuario versión móvil -->
                    <div class="px-4 py-2 border-b border-slate-100 md:hidden">
                        <p class="text-xs font-bold text-slate-800"><?= htmlspecialchars($usuario_nombre ?? 'Daniel Sánchez'); ?></p>
                        <p class="text-[10px] text-slate-400"><?= date('d/m/Y'); ?></p>
                    </div>

                    <!-- Opción 1: Editar Perfil -->
                    <a href="usuario" class="flex items-center space-x-3 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-all">
                        <i class="fa-regular fa-user text-sm w-4 text-slate-400"></i>
                        <span>Editar Perfil</span>
                    </a>

                    <!-- Opción 2: Configuración rápida -->
                    <a href="configuracion" class="flex items-center space-x-3 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-all">
                        <i class="fa-solid fa-gear text-sm w-4 text-slate-400"></i>
                        <span>Ajustes del Sistema</span>
                    </a>

                    <div class="my-1 border-t border-slate-100"></div>

                    <!-- Opción 3: Cerrar Sesión -->
                    <a href="login" class="flex items-center space-x-3 px-4 py-2.5 text-xs font-bold text-rose-600 hover:bg-rose-50 transition-all">
                        <i class="fa-solid fa-right-from-bracket text-sm w-4"></i>
                        <span>Cerrar Sesión</span>
                    </a>
                </div>
            </div>

        </div>
    </header>

    <!-- SCRIPT JAVASCRIPT PARA INTERACCIÓN DEL DROPDOWN Y MODO OSCURO -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownBtn = document.getElementById('userDropdownBtn');
            const dropdownMenu = document.getElementById('userDropdownMenu');

            // Abrir / Cerrar Dropdown al hacer click
            dropdownBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                dropdownMenu.classList.toggle('hidden');
            });

            // Cerrar Dropdown si se hace click fuera
            document.addEventListener('click', (e) => {
                if (!dropdownMenu.contains(e.target) && !dropdownBtn.contains(e.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });

            // Lógica para alternar ícono de Modo Oscuro
            const darkBtn = document.getElementById('darkModeToggle');
            darkBtn.addEventListener('click', () => {
                const icon = darkBtn.querySelector('i');
                if (icon.classList.contains('fa-moon')) {
                    icon.classList.remove('fa-moon', 'fa-regular');
                    icon.classList.add('fa-sun', 'fa-solid', 'text-amber-500');
                    document.documentElement.classList.add('dark');
                } else {
                    icon.classList.remove('fa-sun', 'fa-solid', 'text-amber-500');
                    icon.classList.add('fa-moon', 'fa-regular');
                    document.documentElement.classList.remove('dark');
                }
            });
        });
    </script>