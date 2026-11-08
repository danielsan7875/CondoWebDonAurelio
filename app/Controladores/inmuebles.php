<?php

use App\Core\View;

$datos = [
    'titulo' => 'Inmuebles - CondoWeb Don Aurelio',
    'activeModule' => 'inmuebles'
];





View::render('inmuebles', $datos);