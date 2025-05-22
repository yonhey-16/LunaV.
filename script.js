document.addEventListener('DOMContentLoaded', () => {
  const botonesAgregar = document.querySelectorAll('.agregar-carrito');

  botonesAgregar.forEach(boton => {
    boton.addEventListener('click', () => {
      const productoDiv = boton.closest('.producto');
      const nombre = productoDiv.getAttribute('data-nombre');
      const precio = parseFloat(productoDiv.getAttribute('data-precio'));

      let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

      // Buscar si ya existe
      const existe = carrito.find(p => p.nombre === nombre);
      if (existe) {
        existe.cantidad += 1;
      } else {
        carrito.push({ nombre, precio, cantidad: 1 });
      }
      
    });
  });
});
// Array para guardar productos en carrito
const carrito = [];

// Función para mostrar mensaje temporal
function mostrarMensaje(msg) {
  const aviso = document.createElement('div');
  aviso.textContent = msg;
  aviso.style.position = 'fixed';
  aviso.style.top = '10px';
  aviso.style.right = '10px';
  aviso.style.background = '#4caf50';
  aviso.style.color = 'white';
  aviso.style.padding = '10px 20px';
  aviso.style.borderRadius = '5px';
  aviso.style.zIndex = 1000;
  document.body.appendChild(aviso);

  setTimeout(() => {
    aviso.remove();
  }, 2000); // se oculta después de 2 segundos
}

// Capturamos todos los botones "Agregar al carrito"
const botonesAgregar = document.querySelectorAll('.agregar-carrito');

botonesAgregar.forEach(boton => {
  boton.addEventListener('click', () => {
    // obtenemos el contenedor padre con los datos del producto
    const productoDiv = boton.closest('.producto');
    const nombre = productoDiv.getAttribute('data-nombre');
    const precio = productoDiv.getAttribute('data-precio');

    // agregamos producto al carrito (aquí podrías agregar cantidad, id, etc.)
    carrito.push({ nombre, precio });

    // mostramos mensaje
    mostrarMensaje(`Producto "${nombre}" agregado al carrito`);

    // Opcional: actualizar UI carrito si tienes un área para mostrarlo
    console.log(carrito); // para probar en consola
  });
});


