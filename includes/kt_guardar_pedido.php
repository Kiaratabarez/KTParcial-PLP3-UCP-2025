<?php
/*
Este Script recibe los datos del formulario de pedido (nombre, dirección
y lista de productos) desde el frontend, los convierte a JSON
y los guarda en la tabla kt_pedidos de la base de datos.
*/
include("kt_conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$pedido = $_POST['pedido'];

$stmt = $kt_conexion->prepare("INSERT INTO kt_pedidos (nombre, direccion, pedido_json) VALUES (:n, :d, :p)");
$stmt->bindParam(':n', $nombre);
$stmt->bindParam(':d', $direccion);
$stmt->bindParam(':p', $pedido);
$stmt->execute();

echo "<h2>Pedido guardado correctamente </h2>";
echo "<a href='../index.php'>Volver al menú</a>";
}
?>
