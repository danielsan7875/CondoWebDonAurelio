<?php

use App\Core\View;
use App\Modelos\Configuracion; 

$datos = [
    'titulo' => 'Configuración - CondoWeb',
    'activeModule' => 'configuracion'
];

$objConfig = new Configuracion();

$configuracion = $objConfig->obtenerConfiguracion();

$datos['configuracion'] = $configuracion;

View::render('configuracion', $datos);