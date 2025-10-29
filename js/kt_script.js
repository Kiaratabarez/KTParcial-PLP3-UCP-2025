const productos = [
{ id: 1, nombre: "Pizza Cuatro Quesos", precio: 1500, categoria: "pizzas" },
{ id: 2, nombre: "Pizza Napolitana", precio: 1600, categoria: "pizzas" },
{ id: 3, nombre: "Pizza Fugazzeta", precio: 1700, categoria: "pizzas" },
{ id: 4, nombre: "Coca-Cola", precio: 800, categoria: "bebidas" },
{ id: 5, nombre: "Agua", precio: 500, categoria: "bebidas" },
{ id: 6, nombre: "Helado", precio: 1000, categoria: "postres" },
{ id: 7, nombre: "Brownie", precio: 900, categoria: "postres" },
{ id: 8, nombre: "Empanadas", precio: 1400, categoria: "pizzas" },
{ id: 9, nombre: "Sprite", precio: 800, categoria: "bebidas" },
{ id: 10, nombre: "Flan Casero", precio: 950, categoria: "postres" }
];

let carrito = [];

function mostrarProductos(lista) {
const menu = document.getElementById('menu');
menu.innerHTML = "";
lista.forEach(p => {
menu.innerHTML += `
    <div class="kt-item">
    <h3>${p.nombre}</h3>
    <p>$${p.precio}</p>
    <button onclick="kt_agregar(${p.id})">Agregar</button>
    </div>`;
});
}

function kt_agregar(id) {
const prod = productos.find(p => p.id === id);
carrito.push(prod);
actualizarCarrito();
}

function kt_vaciarCarrito() {
carrito = [];
actualizarCarrito();
}

function actualizarCarrito() {
const lista = document.getElementById('lista-carrito');
const total = document.getElementById('total');
const pedidoInput = document.getElementById('pedidoInput');

lista.innerHTML = "";
let totalCompra = 0;

carrito.forEach(p => {
lista.innerHTML += `<li>${p.nombre} - $${p.precio}</li>`;
totalCompra += p.precio;
});

total.innerText = totalCompra;
pedidoInput.value = JSON.stringify(carrito);
}

function kt_filtrarCategoria() {
const cat = document.getElementById('categoria').value;
if (cat === "todas") {
mostrarProductos(productos);
} else {
mostrarProductos(productos.filter(p => p.categoria === cat));
}
}

mostrarProductos(productos);
