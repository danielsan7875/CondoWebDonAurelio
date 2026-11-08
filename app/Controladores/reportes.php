<?php

use App\Core\View;

$datos = [
    'titulo' => 'Reportes - CondoWeb Don Aurelio',
    'activeModule' => 'reportes'
];





View::render('reportes', $datos);