</main>

        <!-- FOOTER -->
        <footer class="bg-white border-t border-slate-100 py-4 px-6 text-center text-xs text-slate-400">
            <p>&copy; <?= date('Y'); ?> CondoWeb Don Aurelio. Todos los derechos reservados.</p>
        </footer>
    </div>
</div>

<!-- ========================================== -->
<!-- TABBAR INFERIOR MÓVIL (Única y sin duplicar) -->
<!-- ========================================== -->
<div class="lg:hidden fixed bottom-0 inset-x-0 bg-white border-t border-slate-200 shadow-lg z-40 px-2 py-1 flex justify-around items-center">
    
    <!-- 1. Inicio -->
    <a href="home" class="flex flex-col items-center py-1 px-3 <?= isTabActive('home', $currentActive); ?>">
        <i class="fa-solid fa-border-all text-lg"></i>
        <span class="text-[10px] mt-0.5">Inicio</span>
    </a>

    <!-- 2. Pagos -->
    <a href="pagos" class="flex flex-col items-center py-1 px-3 <?= isTabActive('pagos', $currentActive); ?>">
        <i class="fa-solid fa-shield-halved text-lg"></i>
        <span class="text-[10px] mt-0.5">Pagos</span>
    </a>

    <!-- 3. Inmuebles -->
    <a href="inmuebles" class="flex flex-col items-center py-1 px-3 <?= isTabActive('inmuebles', $currentActive); ?>">
        <i class="fa-regular fa-clipboard text-lg"></i>
        <span class="text-[10px] mt-0.5">Inmuebles</span>
    </a>

    <!-- 4. Recibos -->
    <a href="recibos" class="flex flex-col items-center py-1 px-3 <?= isTabActive('recibos', $currentActive); ?>">
        <i class="fa-regular fa-comment-dots text-lg"></i>
        <span class="text-[10px] mt-0.5">Recibos</span>
    </a>

    <!-- 5. Quinta Opción: Botón "Más" (Abre el Offcanvas de manera limpia) -->
    <button id="openOffcanvasBtn" type="button" class="flex flex-col items-center py-1 px-3 focus:outline-none <?= isMoreTabActive($currentActive); ?>">
        <i class="fa-solid fa-bars text-lg"></i>
        <span class="text-[10px] mt-0.5">Más</span>
    </button>
</div>


<div id="offcanvasBackdrop" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 hidden transition-opacity opacity-0 duration-300"></div>

<div id="offcanvasPanel" class="fixed inset-x-0 bottom-0 max-h-[85vh] bg-white rounded-t-3xl shadow-2xl z-50 transform translate-y-full transition-transform duration-300 ease-in-out flex flex-col lg:hidden">
    
    <!-- Cabecera del Offcanvas -->
    <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-xs font-bold">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
            <h3 class="font-extrabold text-slate-900 text-base">Más Opciones del Sistema</h3>
        </div>
        <button id="closeOffcanvasBtn" type="button" class="w-8 h-8 rounded-full bg-slate-100 text-slate-500 hover:text-slate-800 flex items-center justify-center transition-all focus:outline-none">
            <i class="fa-solid fa-xmark text-sm"></i>
        </button>
    </div>

    <!-- Lista de Opciones Adicionales con su estado activo -->
    <div class="p-6 overflow-y-auto space-y-2.5">
        
        <!-- Propietarios -->
        <a href="propietarios" class="flex items-center justify-between p-3.5 rounded-2xl transition-all border <?= isOffcanvasActive('propietarios', $currentActive); ?>">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                    <i class="fa-regular fa-comment-dots text-base"></i>
                </div>
                <div>
                    <span class="block font-bold text-slate-800 text-sm">Propietarios</span>
                    <span class="block text-xs text-slate-400">Gestión de dueños de inmuebles</span>
                </div>
            </div>
            <?php if ($currentActive === 'propietarios'): ?>
                <span class="text-[10px] font-bold bg-sky-500 text-white px-2.5 py-1 rounded-full">Activo</span>
            <?php endif; ?>
        </a>

        <!-- Reportes -->
        <a href="reportes" class="flex items-center justify-between p-3.5 rounded-2xl transition-all border <?= isOffcanvasActive('reportes', $currentActive); ?>">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center shrink-0">
                    <i class="fa-regular fa-calendar-days text-base"></i>
                </div>
                <div>
                    <span class="block font-bold text-slate-800 text-sm">Reportes</span>
                    <span class="block text-xs text-slate-400">Balances y estadísticas generales</span>
                </div>
            </div>
            <?php if ($currentActive === 'reportes'): ?>
                <span class="text-[10px] font-bold bg-sky-500 text-white px-2.5 py-1 rounded-full">Activo</span>
            <?php endif; ?>
        </a>

        <!-- Configuración -->
        <a href="configuracion" class="flex items-center justify-between p-3.5 rounded-2xl transition-all border <?= isOffcanvasActive('configuracion', $currentActive); ?>">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-gear text-base"></i>
                </div>
                <div>
                    <span class="block font-bold text-slate-800 text-sm">Configuración</span>
                    <span class="block text-xs text-slate-400">Ajustes generales del condominio</span>
                </div>
            </div>
            <?php if ($currentActive === 'configuracion'): ?>
                <span class="text-[10px] font-bold bg-sky-500 text-white px-2.5 py-1 rounded-full">Activo</span>
            <?php endif; ?>
        </a>

        <!-- Usuario -->
        <a href="usuario" class="flex items-center justify-between p-3.5 rounded-2xl transition-all border <?= isOffcanvasActive('usuario', $currentActive); ?>">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-users text-base"></i>
                </div>
                <div>
                    <span class="block font-bold text-slate-800 text-sm">Usuario</span>
                    <span class="block text-xs text-slate-400">Control de cuentas de acceso</span>
                </div>
            </div>
            <?php if ($currentActive === 'usuario'): ?>
                <span class="text-[10px] font-bold bg-sky-500 text-white px-2.5 py-1 rounded-full">Activo</span>
            <?php endif; ?>
        </a>

        <!-- Cargos -->
        <a href="cargo" class="flex items-center justify-between p-3.5 rounded-2xl transition-all border <?= isOffcanvasActive('cargo', $currentActive); ?>">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-users text-base"></i>
                </div>
                <div>
                    <span class="block font-bold text-slate-800 text-sm">Cargos</span>
                    <span class="block text-xs text-slate-400">Definición de roles y funciones</span>
                </div>
            </div>
            <?php if ($currentActive === 'cargo'): ?>
                <span class="text-[10px] font-bold bg-sky-500 text-white px-2.5 py-1 rounded-full">Activo</span>
            <?php endif; ?>
        </a>

    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Dropdown del Perfil (Nav)
        const dropdownBtn = document.getElementById('userDropdownBtn');
        const dropdownMenu = document.getElementById('userDropdownMenu');

        if (dropdownBtn && dropdownMenu) {
            dropdownBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                dropdownMenu.classList.toggle('hidden');
            });
            document.addEventListener('click', (e) => {
                if (!dropdownMenu.contains(e.target) && !dropdownBtn.contains(e.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        }

        // 2. Offcanvas de "Más Opciones" (TabBar Móvil)
        const openBtn = document.getElementById('openOffcanvasBtn');
        const closeBtn = document.getElementById('closeOffcanvasBtn');
        const panel = document.getElementById('offcanvasPanel');
        const backdrop = document.getElementById('offcanvasBackdrop');

        function openOffcanvas(e) {
            if (e) e.stopPropagation();
            if (backdrop && panel) {
                backdrop.classList.remove('hidden');
                setTimeout(() => backdrop.classList.remove('opacity-0'), 10);
                panel.classList.remove('translate-y-full');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeOffcanvas() {
            if (backdrop && panel) {
                panel.classList.add('translate-y-full');
                backdrop.classList.add('opacity-0');
                setTimeout(() => {
                    backdrop.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
            }
        }

        if (openBtn) {
            openBtn.addEventListener('click', openOffcanvas);
        }
        if (closeBtn) {
            closeBtn.addEventListener('click', closeOffcanvas);
        }
        if (backdrop) {
            backdrop.addEventListener('click', closeOffcanvas);
        }

        // 3. Lógica de Modo Oscuro
        const darkBtn = document.getElementById('darkModeToggle');
        if (darkBtn) {
            darkBtn.addEventListener('click', () => {
                const icon = darkBtn.querySelector('i');
                if (icon && icon.classList.contains('fa-moon')) {
                    icon.classList.remove('fa-moon', 'fa-regular');
                    icon.classList.add('fa-sun', 'fa-solid', 'text-amber-500');
                    document.documentElement.classList.add('dark');
                } else if (icon) {
                    icon.classList.remove('fa-sun', 'fa-solid', 'text-amber-500');
                    icon.classList.add('fa-moon', 'fa-regular');
                    document.documentElement.classList.remove('dark');
                }
            });
        }
    });
</script>

<!-- Librerías de soporte -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/3.1.5/css/dataTables.bootstrap5.min.css" />
<script src="https://cdn.datatables.net/3.1.5/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/3.1.5/js/dataTables.bootstrap5.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
</body>
</html>