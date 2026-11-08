<?php

use App\Core\View;

$datos = [
    'titulo' => 'Propietarios - CondoWeb Don Aurelio',
    'activeModule' => 'propietarios'
];





View::render('propietarios', $datos);