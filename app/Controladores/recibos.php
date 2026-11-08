<?php

use App\Core\View;

$datos = [
    'titulo' => 'Recibos - CondoWeb Don Aurelio',
    'activeModule' => 'recibos'
];





View::render('recibos', $datos);