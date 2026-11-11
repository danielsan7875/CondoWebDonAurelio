<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once 'complementos/head2.php'; ?>
</head>
<body class="min-h-screen bg-[#F7F7FA] text-slate-800 flex flex-col font-sans">

    <?php include_once 'complementos/Sidebar.php'; ?>
    <?php include_once 'complementos/Nav.php'; ?>

    <!-- Main Layout Grid (Content Left + Sidebar Right) -->
    <div class="w-full p-4 lg:p-8">
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-8">
            
            <!-- Center Primary Grid (Cols 8) -->
            <div class="xl:col-span-8 space-y-8">
                
                <!-- Section 1: 3 Stat Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    
                    <!-- Card 1: Total de Mensualidad -->
                    <div class="bg-white p-5 rounded-3xl shadow-sm border border-slate-100 flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-file-invoice-dollar"></i>
                            </div>
                            <span class="text-[10px] font-bold bg-emerald-50 text-emerald-600 px-2 py-0.5 rounded-full">+4% este mes</span>
                        </div>
                        <div>
                            <span class="text-slate-400 text-xs block font-medium">Total de Mensualidad</span>
                            <h3 class="font-extrabold text-slate-900 text-xl mt-0.5">$1,850.00</h3>
                        </div>
                    </div>

                    <!-- Card 2: Cantidad de Deudor -->
                    <div class="bg-white p-5 rounded-3xl shadow-sm border border-slate-100 flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-2xl bg-rose-100 text-rose-600 flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                            </div>
                            <span class="text-[10px] font-bold bg-rose-50 text-rose-600 px-2 py-0.5 rounded-full">Atención</span>
                        </div>
                        <div>
                            <span class="text-slate-400 text-xs block font-medium">Cantidad de Deudores</span>
                            <h3 class="font-extrabold text-slate-900 text-xl mt-0.5">8 Inmuebles</h3>
                        </div>
                    </div>

                    <!-- Card 3: Cantidad Solvente -->
                    <div class="bg-white p-5 rounded-3xl shadow-sm border border-slate-100 flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-sm">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <span class="text-[10px] font-bold bg-indigo-50 text-indigo-600 px-2 py-0.5 rounded-full">Solventes</span>
                        </div>
                        <div>
                            <span class="text-slate-400 text-xs block font-medium">Cantidad Solvente</span>
                            <h3 class="font-extrabold text-slate-900 text-xl mt-0.5">34 Inmuebles</h3>
                        </div>
                    </div>

                </div>

                <!-- Section 2: Gráfica de Cada Mes (Izquierda) + Últimos 4 Recibos Generados (Derecha) -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    
                    <!-- Gráfica de Cada Mes (7 cols) -->
                    <div class="md:col-span-7 bg-white p-6 rounded-3xl shadow-sm border border-slate-100 flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h3 class="font-bold text-slate-900 text-base">Recaudación por Mes</h3>
                                <p class="text-xs text-slate-400">Comportamiento de pagos anuales</p>
                            </div>
                            <div class="relative">
                                <select class="appearance-none bg-slate-50 text-xs font-semibold text-slate-600 px-3 py-1.5 pr-6 rounded-xl border border-slate-200 outline-none cursor-pointer">
                                    <option>2026</option>
                                    <option>2025</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-2 top-1/2 -translate-y-1/2 text-[10px] text-slate-400 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Mini Barras Mensuales -->
                        <div class="relative h-44 flex items-end justify-between px-1 pt-6">
                            <div class="absolute inset-x-0 bottom-0 top-0 flex flex-col justify-between pointer-events-none text-[10px] text-slate-300">
                                <div class="border-b border-slate-100 w-full flex justify-between"><span>$2k</span></div>
                                <div class="border-b border-slate-100 w-full flex justify-between"><span>$1.5k</span></div>
                                <div class="border-b border-slate-100 w-full flex justify-between"><span>$1k</span></div>
                                <div class="border-b border-slate-100 w-full flex justify-between"><span>$500</span></div>
                                <div class="border-b border-slate-100 w-full flex justify-between"><span>$0</span></div>
                            </div>

                            <!-- Meses -->
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-12"></div><span class="text-[10px] font-medium text-slate-400">Ene</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-16"></div><span class="text-[10px] font-medium text-slate-400">Feb</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-20"></div><span class="text-[10px] font-medium text-slate-400">Mar</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-14"></div><span class="text-[10px] font-medium text-slate-400">Abr</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-24"></div><span class="text-[10px] font-medium text-slate-400">May</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-28"></div><span class="text-[10px] font-medium text-slate-400">Jun</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2.5 bg-emerald-400 rounded-full h-32 ring-4 ring-emerald-400/20"></div><span class="text-[10px] font-bold text-slate-900">Jul</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-20"></div><span class="text-[10px] font-medium text-slate-400">Ago</span></div>
                            <div class="flex flex-col items-center space-y-2 z-10"><div class="w-2 bg-slate-200 rounded-full h-16"></div><span class="text-[10px] font-medium text-slate-400">Sep</span></div>
                        </div>
                    </div>

                    <!-- Últimos 4 Recibos Generados (5 cols - Más pequeño) -->
                    <div class="md:col-span-5 bg-white p-5 rounded-3xl shadow-sm border border-slate-100 flex flex-col justify-between">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-bold text-slate-900 text-base">Últimos Recibos</h3>
                            <a href="recibos" class="text-xs font-semibold text-slate-400 hover:text-slate-800 underline">Ver todos</a>
                        </div>
                        
                        <div class="space-y-2.5">
                            <!-- Recibo 1 -->
                            <div class="flex items-center justify-between p-2.5 rounded-2xl bg-slate-50 border border-slate-100">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xs">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800 text-xs">Recibo #1042</h4>
                                        <p class="text-[10px] text-slate-400">Apto 2B • 01 Jul 2026</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-slate-900">$45.00</span>
                            </div>

                            <!-- Recibo 2 -->
                            <div class="flex items-center justify-between p-2.5 rounded-2xl bg-slate-50 border border-slate-100">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xs">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800 text-xs">Recibo #1041</h4>
                                        <p class="text-[10px] text-slate-400">Apto 1A • 01 Jul 2026</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-slate-900">$45.00</span>
                            </div>

                            <!-- Recibo 3 -->
                            <div class="flex items-center justify-between p-2.5 rounded-2xl bg-slate-50 border border-slate-100">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xs">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800 text-xs">Recibo #1040</h4>
                                        <p class="text-[10px] text-slate-400">PH 3 • 01 Jul 2026</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-slate-900">$60.00</span>
                            </div>

                            <!-- Recibo 4 -->
                            <div class="flex items-center justify-between p-2.5 rounded-2xl bg-slate-50 border border-slate-100">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold text-xs">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800 text-xs">Recibo #1039</h4>
                                        <p class="text-[10px] text-slate-400">Apto 4C • 01 Jul 2026</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-slate-900">$45.00</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Section 3: Últimos 5 Pagos del Inmueble (Tabla) -->
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="font-bold text-slate-900 text-base">Últimos Pagos Registrados</h3>
                            <p class="text-xs text-slate-400">Transacciones recientes reportadas por los copropietarios</p>
                        </div>
                        <a href="pagos" class="text-xs font-semibold text-slate-500 hover:text-slate-800 underline">Ver todos</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-slate-100 text-slate-400 text-[11px] uppercase tracking-wider">
                                    <th class="pb-3 font-semibold">Inmueble</th>
                                    <th class="pb-3 font-semibold">Propietario</th>
                                    <th class="pb-3 font-semibold">Referencia</th>
                                    <th class="pb-3 font-semibold">Fecha</th>
                                    <th class="pb-3 font-semibold text-right">Monto</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50 text-xs">
                                <!-- Pago 1 -->
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="py-3 font-bold text-slate-800">Torre A - Apto 12</td>
                                    <td class="py-3 text-slate-600">Carlos Mendoza</td>
                                    <td class="py-3 text-slate-400">Ref-98231</td>
                                    <td class="py-3 text-slate-400">08 Jul 2026</td>
                                    <td class="py-3 font-bold text-emerald-600 text-right">$45.00</td>
                                </tr>
                                <!-- Pago 2 -->
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="py-3 font-bold text-slate-800">Torre B - Apto 04</td>
                                    <td class="py-3 text-slate-600">Mariana Rojas</td>
                                    <td class="py-3 text-slate-400">Ref-98210</td>
                                    <td class="py-3 text-slate-400">07 Jul 2026</td>
                                    <td class="py-3 font-bold text-emerald-600 text-right">$45.00</td>
                                </tr>
                                <!-- Pago 3 -->
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="py-3 font-bold text-slate-800">Torre C - PH 1</td>
                                    <td class="py-3 text-slate-600">Alejandro Silva</td>
                                    <td class="py-3 text-slate-400">Ref-98195</td>
                                    <td class="py-3 text-slate-400">06 Jul 2026</td>
                                    <td class="py-3 font-bold text-emerald-600 text-right">$60.00</td>
                                </tr>
                                <!-- Pago 4 -->
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="py-3 font-bold text-slate-800">Torre A - Apto 02</td>
                                    <td class="py-3 text-slate-600">Carmen Pérez</td>
                                    <td class="py-3 text-slate-400">Ref-98180</td>
                                    <td class="py-3 text-slate-400">05 Jul 2026</td>
                                    <td class="py-3 font-bold text-emerald-600 text-right">$45.00</td>
                                </tr>
                                <!-- Pago 5 -->
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="py-3 font-bold text-slate-800">Torre B - Apto 15</td>
                                    <td class="py-3 text-slate-600">José Gregorio Díaz</td>
                                    <td class="py-3 text-slate-400">Ref-98150</td>
                                    <td class="py-3 text-slate-400">04 Jul 2026</td>
                                    <td class="py-3 font-bold text-emerald-600 text-right">$45.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar Widgets (Cols 4) -->
            <div class="xl:col-span-4 space-y-8">
                
                <!-- Go Premium adaptado a "Total Pagado" -->
                <div class="bg-slate-900 rounded-3xl p-6 text-white relative overflow-hidden flex flex-col justify-between min-h-[170px] shadow-lg">
                    <div class="absolute right-3 top-3 opacity-90 pointer-events-none">
                        <div class="w-24 h-24 bg-emerald-500/20 rounded-full blur-xl"></div>
                        <i class="fa-solid fa-wallet text-7xl text-emerald-400/20"></i>
                    </div>

                    <div class="relative z-10">
                        <div class="flex items-center space-x-2 mb-3">
                            <div class="w-5 h-5 rounded-full border border-emerald-400 flex items-center justify-center text-[10px] text-emerald-400">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <span class="text-xs font-semibold tracking-wider text-slate-300">CondoWeb Don Aurelio</span>
                        </div>
                        <h3 class="text-xl font-extrabold tracking-tight mb-1">Total Pagado</h3>
                        <p class="text-xs text-slate-400 max-w-[180px]">
                            Monto total recaudado durante el periodo actual en curso.
                        </p>
                    </div>

                    <div class="mt-4 relative z-10 flex items-center justify-between">
                        <span class="text-2xl font-black text-emerald-400">$1,425.00</span>
                        <a href="pagos" class="px-4 py-2 bg-emerald-400 text-slate-900 font-bold rounded-xl text-xs hover:bg-emerald-500 transition shadow-md">
                            Ver detalles
                        </a>
                    </div>
                </div>

                <!-- Calendar Widget -->
                <div class="bg-white p-5 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex items-center justify-between mb-4">
                        <button class="text-slate-400 hover:text-slate-700 text-xs px-2 py-1">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <span class="font-bold text-slate-900 text-sm">Julio, 2026</span>
                        <button class="text-slate-400 hover:text-slate-700 text-xs px-2 py-1">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>

                    <div class="grid grid-cols-7 gap-1 text-center text-xs">
                        <span class="text-slate-400 font-bold py-1">D</span>
                        <span class="text-slate-400 font-bold py-1">L</span>
                        <span class="text-slate-400 font-bold py-1">M</span>
                        <span class="text-slate-400 font-bold py-1">M</span>
                        <span class="text-slate-400 font-bold py-1">J</span>
                        <span class="text-slate-400 font-bold py-1">V</span>
                        <span class="text-slate-400 font-bold py-1">S</span>

                        <span class="text-slate-300 py-1.5">28</span>
                        <span class="text-slate-300 py-1.5">29</span>
                        <span class="text-slate-300 py-1.5">30</span>
                        
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">1</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">2</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">3</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">4</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">5</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">6</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">7</span>
                        <!-- Día actual resaltado en esmeralda -->
                        <span class="bg-emerald-400 font-bold text-slate-900 py-1.5 rounded-full shadow-sm">8</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">9</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">10</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">11</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">12</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">13</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">14</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">15</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">16</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">17</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">18</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">19</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">20</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">21</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">22</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">23</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">24</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">25</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">26</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">27</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">28</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">29</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">30</span>
                        <span class="text-slate-600 font-semibold py-1.5 hover:bg-slate-50 rounded-full">31</span>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php include_once 'complementos/Footer.php'; ?>
</body>
</html>