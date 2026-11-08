<?php

use App\Core\View;

$datos = [
    'titulo' => 'Cargo - CondoWeb Don Aurelio',
    'activeModule' => 'cargo'
];





View::render('cargo', $datos);