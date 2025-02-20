// Array de nombres
const nombres = [
  "Corte de césped",
  "Poda de árboles",
  "Riego automático",
  "Plantación de flores",
  "Eliminación de malas hierbas",
  "Diseño de jardines",
  "Fertilización del suelo",
  "Mantenimiento de césped",
  "Instalación de maceteros"
];


// Selección del elemento donde se mostrarán los nombres
const nombresElement = document.getElementById("invitados");

// Índice para recorrer los nombres
let index = 0;

// Función para mostrar nombres con opacidad dinámica
function mostrarNombre() {
  // Cambiar al nombre actual
  nombresElement.textContent = nombres[index];

  // Aumentar opacidad para que aparezca
  nombresElement.style.opacity = 1;

  // Después de 2 segundos, disminuir opacidad para que desaparezca
  setTimeout(() => {
    nombresElement.style.opacity = 0;

    // Cambiar al siguiente nombre en el array
    index = (index + 1) % nombres.length;

    // Llamar a la función de nuevo después de 2 segundos para completar el bucle
    setTimeout(mostrarNombre, 2000);
  }, 2000);
}

// Iniciar el bucle de animación
mostrarNombre();
