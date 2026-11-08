<?php

use App\Core\View;

$datos = [
    'titulo' => 'Usuario - CondoWeb Don Aurelio',
    'activeModule' => 'usuario'
];





View::render('usuario', $datos);