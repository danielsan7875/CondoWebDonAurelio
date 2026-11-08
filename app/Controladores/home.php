<?php

use App\Core\View;

$datos = [
    'titulo' => 'Home - CondoWeb Don Aurelio',
    'activeModule' => 'home'
];





View::render('home', $datos);