<?php
namespace App\Modelos;

use App\Core\Conexion;

class Home extends Conexion {



    public function consultar() {
        $conex1 = $this->getConex1(); 
        $stmt = $conex1->query("SELECT nombre_condominio FROM configuracion");
        return $stmt->fetch();
    }

}