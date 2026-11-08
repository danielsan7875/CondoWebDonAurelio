<?php

declare(strict_types=1);

// 1. Cargar el autoloader generado por Composer
require_once __DIR__ . '/../vendor/autoload.php';

// 2. Configuración de errores (puedes desactivarlo en producción cambiando '1' a '0')
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// 3. Inicializar sesión de forma segura si la aplicación lo requiere
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 4. Despachar la petición a través del Router central con manejo de excepciones
try {
    $router = new App\Core\Router();
    $router->dispatch();
} catch (\Throwable $e) {
    http_response_code(500);
    if (ini_get('display_errors')) {
        echo "<div style='font-family: monospace; padding: 20px; background: #f8d7da; color: #721c24; border-left: 5px solid #dc3545; margin: 20px; border-radius: 4px;'>";
        echo "<h3 style='margin-bottom: 10px;'>Error Crítico del Sistema:</h3>";
        echo "<p><strong>Mensaje:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
        echo "<p><strong>Archivo:</strong> " . htmlspecialchars($e->getFile()) . " (Línea " . $e->getLine() . ")</p>";
        echo "<pre style='margin-top: 10px; background: #f5c6cb; padding: 10px; overflow-x: auto;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
        echo "</div>";
    } else {
        echo "<h1>500 - Error interno del servidor</h1>";
    }
}