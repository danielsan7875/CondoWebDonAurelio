<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once 'complementos/head2.php'; ?>
</head>
<body class="min-h-screen bg-[#F7F7FA] text-slate-800 flex flex-col font-sans">

    <?php include_once 'complementos/Sidebar.php'; ?>

    <?php include_once 'complementos/Nav.php'; ?>

    <!-- Main Layout / Content Container -->
    <div class="w-full p-4 lg:p-8">
        <!-- Card Blanca principal -->
        <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
            
            <!-- PORTADA FIJA (No se toca) -->
            <div class="relative h-48 sm:h-64 w-full bg-slate-900">
                <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80&w=1200" 
                     alt="Portada Condominio" 
                     class="w-full h-full object-cover opacity-65">
                
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent flex items-end p-6 sm:p-8">
                    <div>
                        <span class="bg-emerald-400 text-slate-900 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Panel de Ajustes</span>
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-white mt-2">
                            <?= htmlspecialchars($configuracion['nombre_condominio'] ?? 'Condominio Don Aurelio'); ?>
                        </h1>
                        <p class="text-xs sm:text-sm text-slate-300 mt-1">Gestión y parámetros generales de la copropiedad</p>
                    </div>
                </div>
            </div>

            <!-- FORMULARIO GENERAL (Con enctype para aceptar archivos) -->
            <form action="actualizar_configuracion" method="POST" enctype="multipart/form-data" class="p-6 sm:p-8">
                
                <div class="mb-6 border-b border-slate-100 pb-4">
                    <h2 class="text-lg font-bold text-slate-900">Información General del Condominio</h2>
                    <p class="text-sm text-slate-500">Actualiza los datos principales y adjunta el logotipo institucional.</p>
                </div>

                <!-- Campos organizados en grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Nombre del Condominio -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">Nombre del Condominio</label>
                        <input type="text" name="nombre_condominio" 
                               value="<?= htmlspecialchars($configuracion['nombre_condominio'] ?? ''); ?>" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    </div>

                    <!-- RIF -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">RIF</label>
                        <input type="text" name="rif" 
                               value="<?= htmlspecialchars($configuracion['rif'] ?? ''); ?>" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    </div>

                    <!-- Dirección -->
                    <div class="space-y-1 md:col-span-2">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">Dirección</label>
                        <input type="text" name="direccion" 
                               value="<?= htmlspecialchars($configuracion['direccion'] ?? ''); ?>" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    </div>

                    <!-- Teléfono -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">Teléfono</label>
                        <input type="text" name="telefono" 
                               value="<?= htmlspecialchars($configuracion['telefono'] ?? ''); ?>" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    </div>

                    <!-- Correo -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">Correo Electrónico</label>
                        <input type="email" name="correo" 
                               value="<?= htmlspecialchars($configuracion['correo'] ?? ''); ?>" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    </div>

                    <!-- Mensualidad Base -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">Mensualidad Base</label>
                        <input type="text" name="mensualidad_base" 
                               value="<?= htmlspecialchars($configuracion['mensualidad_base'] ?? ''); ?>" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    </div>

                    <!-- Moneda -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">Moneda</label>
                        <input type="text" name="moneda" 
                               value="<?= htmlspecialchars($configuracion['moneda'] ?? ''); ?>" 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-500 focus:bg-white transition-all">
                    </div>

                    <!-- SECCIÓN PARA ADJUNTAR LA FOTO DEL LOGO -->
                    <div class="space-y-2 md:col-span-2 pt-2 border-t border-slate-100">
                        <label class="text-xs font-bold text-slate-600 uppercase tracking-wider">Logotipo del Condominio (Adjuntar Archivo)</label>
                        
                        <div class="flex flex-col sm:flex-row items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                            <!-- Miniatura de Vista Previa -->
                            <div class="w-16 h-16 rounded-xl bg-white border border-slate-200 overflow-hidden shrink-0 flex items-center justify-center shadow-sm">
                                <img id="logoPreviewImg" 
                                     src="<?= !empty($configuracion['logo_url']) ? htmlspecialchars($configuracion['logo_url']) : 'https://via.placeholder.com/150'; ?>" 
                                     alt="Logo Previa" 
                                     class="w-full h-full object-cover"
                                     onerror="this.src='https://via.placeholder.com/150'">
                            </div>

                            <!-- Input File y Botones de Acción -->
                            <div class="flex-1 w-full space-y-2">
                                <input type="file" id="inputFileLogo" name="logo_archivo" accept="image/*" 
                                       class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-slate-900 file:text-white hover:file:bg-emerald-400 hover:file:text-slate-900 file:transition-all cursor-pointer"
                                       onchange="previewUploadedImage(event)">
                                <div class="flex items-center justify-between text-xs text-slate-400">
                                    <span>Formatos permitidos: PNG, JPG, JPEG</span>
                                    <button type="button" onclick="resetLogo()" class="text-rose-500 hover:text-rose-700 font-semibold transition-all">
                                        <i class="fa-solid fa-trash-can mr-1"></i> Quitar Archivo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- BOTÓN GENERAL DE ACTUALIZACIÓN -->
                <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                    <button type="submit" class="bg-emerald-400 hover:bg-emerald-500 text-slate-900 font-bold px-8 py-3.5 rounded-2xl shadow-md transition-all flex items-center space-x-2">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Guardar Cambios</span>
                    </button>
                </div>

            </form>

        </div>
    </div>

    <!-- SCRIPT JAVASCRIPT PARA LA VISTA PREVIA DEL ARCHIVO CARGADO -->
    <script>
        function previewUploadedImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const preview = document.getElementById('logoPreviewImg');
                preview.src = reader.result;
            };
            if(event.target.files[0]){
                reader.readAsDataURL(event.target.files[0]);
            }
        }

        function resetLogo() {
            const inputFile = document.getElementById('inputFileLogo');
            const preview = document.getElementById('logoPreviewImg');
            inputFile.value = ''; // Limpia el input file
            preview.src = 'https://via.placeholder.com/150'; // Vuelve a la imagen por defecto
        }
    </script>

    <?php include_once 'complementos/Footer.php'; ?>
</body>
</html>