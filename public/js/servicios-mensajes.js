console.log("Servicios de mensajeria");

// Array de objetos con dos mensajes cada uno
var mensajesDisenoDesarrollo = [
  {
    mensaje: "Consolida tu presencia web, diseña con nosotros",
    mensajeBtn: "incrementa tus ventas",
  },
  {
    mensaje: "Transforma tu sitio web en una experiencia única",
    mensajeBtn: "¡Descubre cómo!",
  },
  {
    mensaje: "Dale vida a tu sitio web con diseño profesional",
    mensajeBtn: "¡Aumenta tu éxito!",
  },
];

const cambiarMensajeDisenoDesarrollo = () => {
  // Obtener elementos donde se mostrarán los elementos
  var mensajeP = document.querySelector(".anuncio-diseno-desarrollo p");
  console.log(mensajeP);
  var mensajeBtn = document.querySelector(
    ".anuncio-diseno-desarrollo .bota1 a"
  );

  // Generar un número aleatorio para seleccionar un objeto de mensajes
  var indiceAleatorio = Math.floor(
    Math.random() * mensajesDisenoDesarrollo.length
  );

  // Mostrar el primer mensaje aleatorio en el elemento p
  mensajeP.textContent = mensajesDisenoDesarrollo[indiceAleatorio].mensaje;

  // Mostrar el primer mensaje aleatorio en el elemento btn
  mensajeBtn.textContent = mensajesDisenoDesarrollo[indiceAleatorio].mensajeBtn;
};

document.addEventListener("DOMContentLoaded", () => {
  cambiarMensajeDisenoDesarrollo();
});
