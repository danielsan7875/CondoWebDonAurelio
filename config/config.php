<?php
    use Dotenv\Dotenv;
    require_once __DIR__ . '/../vendor/autoload.php';
    $dotenv = Dotenv::createImmutable(dirname(__DIR__), 'passconfig.env');
    $dotenv->load();

    define('DB_NAME_1L', $_ENV['DB_NAME_1L']);
    define('DB_NAME_2L', $_ENV['DB_NAME_2L']);
    define('DB_HOSTL', $_ENV['DB_HOSTL']);
    define('DB_USERL', $_ENV['DB_USERL']);
    define('DB_PASSL', $_ENV['DB_PASSL']);

    date_default_timezone_set($_ENV['APP_TIMEZONE'] ?? 'America/Caracas');
?>