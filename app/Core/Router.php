<?php

namespace App\Core;

class Router {
    public function dispatch(): void {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $scriptName = dirname($_SERVER['SCRIPT_NAME']); // /CondoWebDonAurelio/public
        $baseDir = dirname($scriptName); // /CondoWebDonAurelio
        
        $path = str_replace([$scriptName, $baseDir], '', $uri);
        $path = trim($path, '/');

        $segments = $path !== '' ? explode('/', $path) : [];

        if (!empty($segments[0]) && strtolower($segments[0]) === 'public') {
            array_shift($segments);
        }

        // Si no hay segmento en la URL, por defecto cargamos 'login'
        $ctrlSegment = !empty($segments[0]) ? strtolower($segments[0]) : 'login';
        
        // Apuntamos directamente al archivo físico en app/Controladores/
        $file = __DIR__ . '/../Controladores/' . strtolower($ctrlSegment) . '.php';

        if (file_exists($file)) {
            require_once $file;
            return;
        }

        // Si no existe el archivo, mostramos el error indicando la ruta que buscó
        http_response_code(404);
        View::render('404');
    }
}