<?php

namespace App\Modelos;

use App\Core\Conexion;

class Configuracion extends Conexion {

    public function obtenerConfiguracion() {
        $db = $this->getConex1();
        $stmt = $db->query("SELECT * FROM configuracion LIMIT 1");
        return $stmt->fetch();
    }

    public function actualizarConfiguracion(array $data) {
        $db = $this->getConex1();
        $sql = "UPDATE configuracion SET 
                nombre_condominio = :nombre_condominio,
                rif = :rif,
                direccion = :direccion,
                telefono = :telefono,
                correo = :correo,
                mensualidad_base = :mensualidad_base,
                moneda = :moneda,
                logo_url = :logo_url
                WHERE id = 1"; 
        
        $stmt = $db->prepare($sql);
        return $stmt->execute($data);
    }
}