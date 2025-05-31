<?php

require_once "vendor/autoload.php";


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;



// Configuración para conectar con MySQL
$connectionOptions = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'empresa',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf8'
];

// Configurar Doctrine
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . "/src"], // Ruta a las entidades
    $isDevMode
);

// Crear el EntityManager
$entityManager = EntityManager::create($connectionOptions, $config);

// Ahora puedes utilizar el EntityManager en todo el proyecto
