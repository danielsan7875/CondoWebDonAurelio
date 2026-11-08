<?php

use App\Core\View;

$datos = [
    'titulo' => 'Configuracion - CondoWeb Don Aurelio',
    'activeModule' => 'configuracion'
];





View::render('configuracion', $datos);