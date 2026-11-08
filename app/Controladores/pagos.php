<?php

use App\Core\View;

$datos = [
    'titulo' => 'Pagos - CondoWeb Don Aurelio',
    'activeModule' => 'pagos'
];





View::render('pagos', $datos);