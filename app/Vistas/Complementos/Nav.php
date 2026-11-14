 <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-w-0">
        
        <!-- NAV: Nombre de página, Modo Oscuro y Perfil en la misma fila -->
        <main class="flex-1 p-4 sm:p-8 lg:p-10 overflow-y-auto">
            <header class="flex items-center justify-between gap-4 mb-8 bg-white p-3 sm:p-4 rounded-2xl shadow-sm border border-slate-100">
                
                <!-- Título de la página / Condominio -->
                <div class="min-w-0">
                    <h1 class="text-lg sm:text-2xl font-extrabold text-slate-900 tracking-tight truncate">
                        <?= $titulo ?? 'CondoWeb Don Aurelio'; ?>
                    </h1>
                    <p class="text-[11px] sm:text-xs text-slate-400 mt-0.5 truncate">
                        <?= htmlspecialchars($registro['nombre_condominio'] ?? 'Panel Principal'); ?>
                    </p>
                </div>

                <!-- Right Utility Bar (Modo Oscuro y Avatar en la misma fila) -->
                <div class="flex items-center space-x-2 sm:space-x-3 shrink-0">
                    
                   <!-- Botón Modo Oscuro (Cuadrado con esquinas redondeadas) -->
                 <button id="darkModeToggle" 
                    type="button" 
                    class="w-12 h-12 sm:w-12 sm:h-12 rounded-2xl bg-slate-50 border border-slate-200/80 text-slate-600 hover:text-slate-900 flex items-center justify-center shadow-sm hover:bg-slate-100 transition-all focus:outline-none shrink-0"
                    title="Modo Oscuro">
                <i class="fa-regular fa-moon text-lg sm:text-xl"></i>
            </button>

                 <!-- Menú de Usuario / Avatar con Dropdown (Cuadrado con esquinas redondeadas) -->
                <div class="relative">
                    <button id="userDropdownBtn" 
                            type="button" 
                            class="flex items-center space-x-3 bg-slate-50 border border-slate-200/80 p-2 pr-4 rounded-2xl shadow-sm hover:bg-slate-100 transition-all focus:outline-none">
                        
                        <!-- Avatar Cuadrado con esquinas redondeadas -->
                        <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl overflow-hidden border border-slate-200 shrink-0 bg-white">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=250&auto=format&fit=crop" 
                                alt="User Avatar" 
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Nombre, Apellido y Fecha -->
                        <div class="text-left hidden sm:block">
                            <span class="block text-xs font-bold text-slate-800 leading-tight">
                                <?= htmlspecialchars($usuario_nombre ?? 'Daniel Sánchez'); ?>
                            </span>
                            <span class="block text-[10px] text-slate-400 font-medium">
                                <?= date('d/m/Y'); ?>
                            </span>
                        </div>

                        <i class="fa-solid fa-chevron-down text-[10px] text-slate-400 ml-1"></i>
                    </button>

                    <!-- Menú Desplegable (Dropdown Menu) -->
                    <div id="userDropdownMenu" 
                        class="hidden absolute right-0 mt-2 w-52 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50">
                        
                        <div class="px-4 py-2 border-b border-slate-100 sm:hidden">
                            <p class="text-xs font-bold text-slate-800"><?= htmlspecialchars($usuario_nombre ?? 'Daniel Sánchez'); ?></p>
                            <p class="text-[10px] text-slate-400"><?= date('d/m/Y'); ?></p>
                        </div>

                        <a href="usuario" class="flex items-center space-x-3 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition-all">
                            <i class="fa-regular fa-user text-sm w-4 text-slate-400"></i>
                            <span>Editar Perfil</span>
                        </a>

                        <a href="configuracion" class="flex items-center space-x-3 px-4 py-2.5 text-xs font-semibold text-slate-700 hover:bg-slate-50 transition-all">
                            <i class="fa-solid fa-gear text-sm w-4 text-slate-400"></i>
                            <span>Ajustes del Sistema</span>
                        </a>

                        <div class="my-1 border-t border-slate-100"></div>

                        <a href="login" class="flex items-center space-x-3 px-4 py-2.5 text-xs font-bold text-rose-600 hover:bg-rose-50 transition-all">
                            <i class="fa-solid fa-right-from-bracket text-sm w-4"></i>
                            <span>Cerrar Sesión</span>
                        </a>
                    </div>
                </div>

                </div>
            </header>

            <!-- CONTENIDO DE LA VISTA (Aquí va tu card blanca o contenido principal) -->