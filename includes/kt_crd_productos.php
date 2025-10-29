<?php
include("kt_conexion.php");

// Leer productos
$result = $conexion->query("SELECT * FROM kt_productos ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de Productos | FoodExpress</title>
<link rel="stylesheet" href="kt_styles.css">
</head>
<body>

<div class="kt-header"><h1>Gestión de Productos</h1></div>

<section class="kt-menu">
<h2>Agregar Nuevo Producto</h2>
<form action="kt_guardar_producto.php" method="POST">
<input type="hidden" name="id" id="id">
<input type="text" name="nombre" placeholder="Nombre del producto" required>
<input type="number" name="precio" placeholder="Precio" step="0.01" required>
<select name="categoria" required>
    <option value="pizzas">Pizzas</option>
    <option value="bebidas">Bebidas</option>
    <option value="postres">Postres</option>
</select>
<button type="submit">Guardar</button>
</form>
</section>

<section class="kt-menu">
<h2>Listado de Productos</h2>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr style="background:#ff7043; color:#fff;">
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
    <th>Acciones</th>
</tr>
<?php while($fila = $result->fetch_assoc()): ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td>$<?= $fila['precio'] ?></td>
    <td><?= ucfirst($fila['categoria']) ?></td>
    <td>
    <a href="kt_editar_producto.php?id=<?= $fila['id'] ?>">✏️</a> |
    <a href="kt_eliminar_producto.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Eliminar producto?')">🗑️</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
</section>

</body>
</html>
