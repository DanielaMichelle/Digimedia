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
    background-color: rgb(177 13 98);
    color: white;
    padding: 2rem 3rem;
    border-radius: 40px;
    text-align: center;
    position: relative;
    width: 65vw;
    padding-right: 5vw
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
    font-size: 2vw;
    font-weight: bold;
    font-family: "DM Sans", sans-serif;
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
    font-weight: 1000;
    font-style: normal;
    margin-bottom: 1rem;
}

.modal-main .modal-main-title-mobile {
    display: none;
}

.modal-main p {
    font-size: 2vw;
    font-style: italic;
    position: relative;
}

.modal-main .modal-main-form {
    justify-content: center;
    display: flex;
    flex-direction: column;
    padding-top: 3rem;
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
    font-size: 14px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.modal-main .form-inputs .form-group label {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    padding-left: 12px;
    margin-bottom: 4px;
}

.modal-main button {
    font-size: 16px;
    margin: 1rem auto;
    padding: 0 50px;
    width: fit-content;
    border: none;
    color: white;
    font-weight: 600;
    border-radius: 50px;
    background: rgb(25 135 232);
    height: 49px;
    margin-top: 12px;
    margin-bottom: 28px;
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
    width: 60%;
    height: 50%;
}

.modal-main .modal-main-image figcaption {
    margin-top: 1rem;
    font-size: 20px;
    text-transform: uppercase;
}

.modal-main .modal-main-image figcaption span {
    font-weight: bold;
    text-decoration: underline;
}

@media (max-width: 1024px) {

    .modal-main {
        padding: 1rem width: 80vw;
        width: 80vw;
    }

    .modal-main .modal-main-form {
        padding-top: 2rem;
    }

    .modal-main h3 {
        font-size: 2vw;
        padding: 1.3vw;
        padding: 0;
    }

    .modal-main p {
        font-size: 3vw;
        font-size: 18px;
    }

    .modal-main button {
        font-size: 16px;
        padding: 0 50px;
        height: 43px;
        margin-bottom: 12px;
        margin-top: 12px;

    }

    .modal-main .form-inputs {
        row-gap: 0vw;
    }

    .modal-main .form-inputs .form-group {
        text-align: start;
        width: 90%;
        height: 76px;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 12px;
    }

    .modal-main .form-inputs .form-group input,
    .modal-main .form-inputs .form-group .dropdown a {
        padding: 0px 24px;
        height: 43px;
    }

    .modal-main .form-inputs .form-group input::placeholder {
        font-size: 12px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .modal-main .form-inputs .form-group label {
        margin-bottom: 4px;
    }

    .modal-main .form-inputs .form-group .dropdown a,
    .modal-main .form-inputs .form-group .dropdown ul li a {
        font-size: 12px;
    }

    .modal-main .modal-main-image figcaption {
        font-size: 2vw;
    }
}

@media (max-width: 768px) {

    .modal-main {
        width: 70vw;
        padding: 1rem;
    }

    .modal-main .modal-main-form {
        padding-top: 0;
    }

    .modal-main .modal-main-content {
        grid-template-columns: 1fr;
    }

    .modal-main .modal-main-image {
        display: none;
    }

    .modal-main .form-inputs {
        gap: 0;
        grid-template-columns: 1fr;
    }

    .modal-main .form-inputs .form-group input {
        height: 36px;
    }

    .modal-main button {
        height: 36px;
        padding: 0 25px;
        margin-bottom: 12px;
        margin-top: 12px;
        font-size: 16px;
    }

    .modal-main .modal-main-title-mobile {
        display: block;
        font-size: 3vw;
        font-weight: bold;
        font-family: "DM Sans", sans-serif;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        font-weight: 1000;
        font-style: normal;
        margin-bottom: 2vw;
        margin-top: 3vw;
    }

    .modal-main .btn-cerrar {
        right: -10px;
        top: -10px;
    }

    .modal-main .form-inputs .form-group input::placeholder {
        font-size: 10px;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 10px;
    }
}

@media (max-width: 425px) {
    .modal-main {
        border-radius: 15px;
    }

    .modal-main .modal-main-title-mobile {
        font-size: 4.5vw;
        margin-top: 4.5vw;
    }

    .modal-main .form-inputs .form-group label {
        font-size: 8px;
    }

    .modal-main .form-inputs .form-group input {
        padding: 12px 24px;
        height: 36px;
    }

    .modal-main .form-inputs {
        gap: 0rem;
    }

    .modal-main button {
        margin-top: 12px;
        font-size: 14px;
    }
}
</style>

<div class="modal-main-background">
    <div class="modal-main">
        <figure class="btn-cerrar">
            <i class="fa solid fa-xmark fa-lg"></i>
        </figure>
        <div class="modal-main-content">
            <h3 class="modal-main-title-mobile">¡DISEÑA TU CAMINO HACIA EL ÉXITO!</h3>


            <figure class="modal-main-image">
                <h3>¡DISEÑA TU CAMINO HACIA EL ÉXITO!</h3>

                <img src="./public/img/img3.jpg" alt="modal diseno y desarrollo">
                <figcaption>¡Primera asesoría <span>GRATIS!</span></figcaption>
            </figure>

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
                <button type="submit" class="go-button" name="submit">¡Sé la diferencia!</button>
            </form>


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