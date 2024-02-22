// Array de objetos con dos mensajes cada uno
const mensajesDisenoDesarrollo = [
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

const mensajesBrandingDiseno = [
  {
    mensaje1: "Descubre como impulsar tu marca al siguiente nivel",
    mensaje2: "Ofrecemos la primera asesoría",
    mensajeSpan: "Gratis",
    mensajeBtn: "¡Empieza ahora!",
  },
  {
    mensaje1: "Dale vida a tu marca con nuestros expertos en diseño",
    mensaje2: "Primera asesoría",
    mensajeSpan: "Gratis",
    mensajeBtn: "¡Comienza ahora!",
  },
  {
    mensaje1: "Conecta de manera creativa e innovadora con tu audiencia",
    mensaje2: "",
    mensajeSpan: "",
    mensajeBtn: "¡CONTÁCTANOS!",
  },
];

const cambiarMensajeBrandingDiseno = () => {
  // Obtener elementos donde se mostrarán los elementos
  var mensajeP1 = document.querySelector(
    ".anuncio-branding-diseno p:first-child"
  );
  var mensajeP2 = document.querySelector(
    ".anuncio-branding-diseno p:nth-child(2)"
  );

  var mensajeSpan = document.querySelector(".anuncio-branding-diseno span");
  var mensajeBtn = document.querySelector(".anuncio-branding-diseno .bota1 a");

  // Generar un número aleatorio para seleccionar un objeto de mensajes
  var indiceAleatorio = Math.floor(
    Math.random() * mensajesBrandingDiseno.length
  );

  // Mostrar el primer y segundo  mensaje aleatorio en el elemento p
  mensajeP1.textContent = mensajesBrandingDiseno[indiceAleatorio].mensaje1;
  mensajeP2.textContent = mensajesBrandingDiseno[indiceAleatorio].mensaje2;

  // Mostrar el primer mensaje aleatorio en el elemento span
  mensajeSpan.textContent = mensajesBrandingDiseno[indiceAleatorio].mensajeSpan;

  // Mostrar el primer mensaje aleatorio en el elemento btn
  mensajeBtn.textContent = mensajesBrandingDiseno[indiceAleatorio].mensajeBtn;
};

const cambiarMensajeDisenoDesarrollo = () => {
  // Obtener elementos donde se mostrarán los elementos
  var mensajeP = document.querySelector(".anuncio-diseno-desarrollo p");
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

const urlParams = new URLSearchParams(location.search);
const idUrl = urlParams.get("id"); // string

document.addEventListener("DOMContentLoaded", () => {
  if (idUrl == "1") {
    cambiarMensajeDisenoDesarrollo();
  } else if (idUrl == "4") {
    cambiarMensajeBrandingDiseno();
  }
});
