<?php
try {
$kt_conexion = new PDO('mysql:host=localhost;dbname=kt_parcial_plp3', 'root', '');
$kt_conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Error en la conexión: " . $e->getMessage());
}
?>
