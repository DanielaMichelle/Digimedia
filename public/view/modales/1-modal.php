<style>
.modal-main-background {
    background-color: rgba(0, 0, 0, 0.5);
    width: 100vw;
    height: 100vh;
    position: fixed;
    top: 0;
    z-index: 1050;
    justify-content: center;
    align-items: center;
    display: none;
}

.modal-main {
    background-color: rgba(194, 7, 158, 0.7);
    color: white;
    padding: 2rem 3rem;
    border-radius: 40px;
    text-align: center;
    position: relative;
    width: 65vw;
}

.modal-main .modal-main-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.modal-main .btn-cerrar {
    position: absolute;
    right: 25px;
    top: 25px;
    background-color: rgb(239 21 150);
    width: 40px;
    height: 40px;
    display: grid;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    border: 3px solid white;

    i {
        font-size: x-large;
    }

    i:hover {
        cursor: pointer;
    }
}

.modal-main h3 {
    font-size: 4vw;
    font-weight: bold;
    font-family: "DM Sans", sans-serif;
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    font-weight: 1000;
    font-style: normal;
    margin-bottom: 2rem;
}

.modal-main p {
    font-size: 2vw;
    font-style: italic;
    position: relative;
}


.modal-main .form-inputs {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.modal-main .form-inputs .form-group {
    text-align: start;
    width: 90%;
}

.modal-main .form-inputs .form-group input {
    padding: 14px 24px;
    border: none;
    border-radius: 50px;
}

.modal-main .form-inputs .form-group input::placeholder {
    color: rgb(77 76 76);
    font-size: 20px;
}

.modal-main .form-inputs .form-group label {

    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    padding-left: 12px;
    margin-bottom: 8px;
}

.modal-main button {
    font-size: 23px;
    margin-top: 1rem;
    padding: 15px 50px;
    width: fit-content;
    border: none;
    color: white;
    font-weight: 600;
    border-radius: 50px;
    background: rgb(246 93 194);
}

.modal-main button:hover {
    cursor: pointer;
}

.modal-main .modal-main-image {
    width: 100%;
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 0;

}

.modal-main .modal-main-image img {
    width: 75%;
}

.modal-main .modal-main-image figcaption {
    margin-top: 1rem;
    font-size: 24px;
    text-transform: uppercase;

}

.modal-main .modal-main-image figcaption span {
    font-weight: bold;
    text-decoration: underline;
}

@media (max-width: 1024px) {
    .modal-main {
        padding: 2rem;
        width: 80vw;
    }
}

@media (max-width: 768px) {
    .modal-main {
        padding: 2rem 1rem;
        width: 90vw;
    }

    .modal-main .modal-main-content {
        grid-template-columns: 1fr;
    }

    .modal-main .modal-main-image {
        display: none;
    }

    .modal-main .form-inputs {
        gap: 1rem;
    }

    .modal-main h3 {
        font-size: 6vw;
        margin-top: 2rem
    }

    .modal-main button {
        margin-top: 2rem;
    }

}

@media (max-width: 425px) {

    .modal-main h3 {
        font-size: 6.5vw;
        margin-top: 4rem;
    }

    .modal-main .form-inputs .form-group input {
        padding: 12px 24px;
    }

    .modal-main .form-inputs {
        gap: 0rem;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 14px;
    }

    .modal-main .form-inputs .form-group input::placeholder {
        font-size: 16px;
    }

    .modal-main button {
        padding: 10px 20px;
        margin-top: 1rem;
        font-size: 20px;
    }
}
</style>

<div class="modal-main-background">
    <div class="modal-main">
        <figure class="btn-cerrar">
            <i class="fa solid fa-xmark fa-lg"></i>
        </figure>
        <h3>¡Potencia tu Sitio Web!</h3>
        <div class="modal-main-content">
            <form class="modal-main-form" action="../email/enviar-prueba.php" method="post">
                <div class="form-inputs">
                    <!--//Nombre//-->
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" class="form-control" placeholder="Jimena Vásquez" name="name" id="name">
                        <p class="err-msg"></p>
                    </div>

                    <!--//Correo//-->
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="text" class="form-control" placeholder="hola@sitioincreible.com.ar" name="email"
                            id="email">
                        <p class="err-msg"></p>
                    </div>

                    <!--//Telefono//-->
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" class="form-control" placeholder="987654321" name="phone" id="phone">
                        <p class="err-msg"></p>
                    </div>
                </div>
                <button type="submit" class="go-button" name="submit">¡EMPIEZA YA!</button>
            </form>

            <figure class="modal-main-image">
                <img src="./public/img/modal-img-1.jpeg" alt="modal diseno y desarrollo">
                <figcaption>¡TU PRIMERA ASESORíA ES <span>GRATIS!</span></figcaption>
            </figure>
        </div>
    </div>
</div>

<script>
const btnCerrar = document.querySelector('.btn-cerrar');
const modalContainer = document.querySelector('.modal-main-background')


document.addEventListener("DOMContentLoaded", mostrarModalDespuesDe5Segundos);

// Función para mostrar el modal después de 1 segundos
function mostrarModalDespuesDe5Segundos() {
    setTimeout(() => {
        modalContainer.style.display = 'flex';
    }, 1000); // 1000 milisegundos = 1 segundos
}

// Agregar evento al botón de cerrar
btnCerrar.addEventListener('click', () => {
    console.log("clickeaste");
    modalContainer.style.display = 'none';
});
</script>