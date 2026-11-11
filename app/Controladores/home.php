<?php

use App\Core\View;
use App\Modelos\Home; 

$datos = [
    'titulo' => 'Home - CondoWeb Don Aurelio',
    'activeModule' => 'home'
];

$objhome = new Home();

$datos['registro'] = $objhome->consultar();


View::render('home', $datos);