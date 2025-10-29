<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FoodExpress</title>
<link rel="stylesheet" href="css/kt_styles.css">
</head>
<body>

<header class="kt-header">
<h1>🍕 FoodExpress</h1>
<button class="kt-menu-toggle" aria-label="Abrir menú">☰</button>
<nav class="kt-nav">
<ul>
    <li><a href="#menu">Menú</a></li>
    <li><a href="#carrito">Carrito</a></li>
    <li><a href="#checkout">Checkout</a></li>
</ul>
</nav>
</header>

</header>

<!--filtros-->
<section class="kt-filtro">
<label for="categoria">Filtrar por categoría:</label>
<select id="categoria" onchange="kt_filtrarCategoria()">
<option value="todas">Todas</option>
<option value="pizzas">Pizzas</option>
<option value="bebidas">Bebidas</option>
<option value="postres">Postres</option>
</select>
</section>

<!-- Menu-->
<section id="menu" class="kt-menu"></section>

<!-- Carrito-->
<section class="kt-carrito">
<h2>Tu Carrito</h2>
<ul id="lista-carrito"></ul>
<p>Total: $<span id="total">0</span></p>
<button onclick="kt_vaciarCarrito()">Vaciar carrito</button>
</section>

<!-- Checkout-->
<section class="kt-checkout">
<h2>Finalizar Pedido</h2>
<form method="POST" action="includes/kt_guardar_pedido.php">
<input type="text" name="nombre" placeholder="Tu nombre" required>
<input type="text" name="direccion" placeholder="Dirección" required>
<input type="hidden" name="pedido" id="pedidoInput">
<button type="submit">Enviar Pedido</button>
</form>
</section>

<script src="js/kt_script.js"></script>
</body>
</html>
