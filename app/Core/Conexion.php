<?php

namespace App\Core;

require_once dirname(__DIR__, 2) . '/config/config.php';

class Conexion {
    private $conex1;
    private $conex2;

    public function __construct() {
        $this->conex1 = null;
        $this->conex2 = null;
    }

    // Conexión a la primera base de datos (Ej: Negocio)
    protected function getConex1() {
        if ($this->conex1 === null) {
            $this->conex1 = $this->crearConexion(DB_NAME_1L, DB_USERL, DB_PASSL);
        }
        return $this->conex1;
    }

    // Conexión a la segunda base de datos (Ej: Seguridad)
    protected function getConex2() {
        if ($this->conex2 === null) {
            $this->conex2 = $this->crearConexion(DB_NAME_2L, DB_USERL, DB_PASSL);
        }
        return $this->conex2;
    }

    private function crearConexion($baseDatos, $usuario, $clave) {
        try {
            $conexion = new \PDO(
                "mysql:host=" . DB_HOSTL . ";dbname=" . $baseDatos . ";charset=utf8mb4",
                $usuario,
                $clave,
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::ATTR_EMULATE_PREPARES => false
                ]
            );

            return $conexion;
        } catch (\PDOException $e) {
            throw new \PDOException(
                'Conexión Fallida a la base de datos (' . $baseDatos . '): ' . $e->getMessage(),
                (int) $e->getCode(),
                $e
            );
        }
    }
}