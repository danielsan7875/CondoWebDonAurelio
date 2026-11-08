<?php

namespace App\Core;

class View {
    public static function render(string $view, array $data = []): void {
        extract($data);

        // Ruta física al archivo de la vista
        $file = dirname(__DIR__) . '/Vistas/' . $view . '.php';

        if (file_exists($file)) {
            require_once $file;
        } else {
            // Si la vista solicitada no existe, lanzamos 404 y cargamos la vista 404
            http_response_code(404);
            
            
            $file404 = dirname(__DIR__) . '/Vistas/404.php';
            if (file_exists($file404)) {
                require_once $file404;
            } else {
                echo "<h1>Error 404: La vista '{$view}' no fue encontrada y tampoco existe la vista de error.</h1>";
            }
        }
    }
}