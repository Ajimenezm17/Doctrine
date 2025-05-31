<?php

require_once "db_doctrine.php"; // Asegúrate de incluir la configuración de Doctrine

use Entity\Centros;

// Crear una nueva instancia de la entidad Centros
$centro = new Centros();
$centro->setNumCentro(1);
$centro->setNombreCentro("Centro Ejemplo");
$centro->setDireccionCentro("Dirección Ejemplo");

// Persistir la entidad en la base de datos
$entityManager->persist($centro);
$entityManager->flush();

echo "Centro guardado con ID " . $centro->getNumCentro();
