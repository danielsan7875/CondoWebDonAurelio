<!-- Fullscreen Layout Container (Full Width & Full Height) -->
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

        <!-- Sidebar Navigation (Full Screen Height) -->
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
                    <!-- Dashboard Active -->
                    <a href="#" class="flex items-center justify-between px-4 py-3.5 rounded-2xl bg-eduLime text-eduDark font-bold shadow-md transition-all">
                        <div class="flex items-center space-x-3">
                            <i class="fa-solid fa-border-all text-lg"></i>
                            <span class="text-sm">Inicio</span>
                        </div>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium">
                        <i class="fa-solid fa-shield-halved text-base w-5"></i>
                        <span class="text-sm">Pagos</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium">
                        <i class="fa-regular fa-clipboard text-base w-5"></i>
                        <span class="text-sm">Inmuebles</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium">
                        <i class="fa-regular fa-comment-dots text-base w-5"></i>
                        <span class="text-sm">Propietarios</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium">
                        <i class="fa-regular fa-comment-dots text-base w-5"></i>
                        <span class="text-sm">Recibos Digitales</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium">
                        <i class="fa-regular fa-calendar-days text-base w-5"></i>
                        <span class="text-sm">Reportes</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium pt-4">
                        <i class="fa-solid fa-gear text-base w-5"></i>
                        <span class="text-sm">Configuracion</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium">
                        <i class="fa-solid fa-users text-base w-5"></i>
                        <span class="text-sm">Usuario</span>
                    </a>

                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-2xl hover:bg-white/5 hover:text-white transition-all text-slate-400 font-medium">
                        <i class="fa-solid fa-users text-base w-5"></i>
                        <span class="text-sm">Cargos</span>
                    </a>

                  
                </nav>
            </div>

        
        </aside>