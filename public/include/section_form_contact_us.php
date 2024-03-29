<style>
    .contenedor-form {
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 40%;
        bottom: 3%;
        right: 2%;
        z-index: 1030;

    }

    .registration-form.inactive {
        display: none;
    }

    .desktop-contact.inactive {
        display: none;
    }

    .registration-form form i {
        display: flex;
        justify-content: end;
        cursor: pointer;
    }

    .form-group input {
        border: 1.6px solid #df76d5;
    }

    .form-group textarea {
        resize: none;
        border: 1.6px solid #df76d5;
    }

    .form-group label {
        color: black;
        font-weight: 500;
    }

    .registration-form form {
        animation-name: mianimacion;
        animation-timing-function: linear;
        animation-duration: 1s;
        position: fixed;
        right: 3%;
        opacity: 1;
        margin-top: -120px;
        background: white;
        padding: 30px;
        border: 1px solid #df76d5;
        border-radius: 20px 20px 0 0;
        height: auto;
        width: 360px;
        box-shadow: 0 5px 15px #df76d5;
    }

    @keyframes mianimacion {
        0% {
            right: 3%;
            top: 900px;
        }

        100% {
            right: 3%;
            top: 500px;
        }
    }

    .desktop-contact {
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: space-around;
        background: #df76d5;
        width: 260px;
        height: 55px;
        bottom: 0%;
        right: 3%;
        border-radius: 3px;
        box-shadow: 4px 4px 4px #fc9cff;
        cursor: pointer;
    }

    .desktop-contact h5 {
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 800;
        color: white;
        margin-bottom: 0 !important;
    }

    .go-button {
        background: #df76d5;
        width: 100%;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 500;
        border-radius: 3px;
        cursor: pointer;
        padding: 5px 7px;
        border: none;
    }

    .btn-mobile {
        top: 562px;
        display: flex;
        justify-content: flex-end;
        position: fixed;
        opacity: 0;
    }

    .btn-mobile.inactive {
        display: none;
    }

    .btn-mobile button {
        width: 75px;
        height: 75px;
        border-radius: 40px;
        background: #FF0080;
    }

    .btn-mobile button img {
        width: 45px;
        height: 45px;
    }

    @media only screen and (min-width: 300px) and (max-width: 767px) {
        .desktop-contact {
            display: none;
        }

        .btn-mobile {
            right: 2%;
            opacity: 1;
        }

        .registration-form.inactive {
            display: none;
        }

        .registration-form {
            margin-top: 80px;
        }

        .registration-form form {
            border-radius: 20px;
            right: 10%;
            margin-top: -85%;
            width: 300px;
            animation-duration: 0s;
        }

        @keyframes mianimacion {
            0% {
                right: 6%;
                top: 900px;
            }

            100% {
                right: 6%;
                top: 680px;
            }
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 913px) {
        .contenedor-form {
            align-items: flex-start;
        }

        .desktop-contact {
            display: none;
        }

        .btn-mobile {
            right: 4%;
            opacity: 1;
        }

        .registration-form.inactive {
            display: none;
        }

        .registration-form {
            margin-top: 30px;
            display: flex;
            align-items: center;
        }

        .registration-form form {
            border-radius: 20px;
            animation-duration: 0s;
        }
    }
</style>


<div class="contenedor-form">
    <div class="registration-form">
        <p class="text-success text-center"></p>
        <form action="../email/enviar-prueba.php" method="post">
            <div class="btn-cerrar">
                <i class="fa solid fa-xmark fa-lg"></i>
            </div>
            <!--//Nombre//-->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" placeholder="Ingresar Nombre Completo" name="name" id="name">
                <p class="err-msg"></p>
            </div>
            <!--//Telefono//-->
            <div class="form-group">
                <label for="phone">Telefono:</label>
                <input type="text" class="form-control" placeholder="Ingresar Telefono Personal" name="phone"
                    id="phone">
                <p class="err-msg"></p>
            </div>
            <!--//Correo//-->
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="text" class="form-control" placeholder="Ingresar Correo" name="email" id="email">
                <p class="err-msg"></p>
            </div>
            <button type="submit" class="go-button" name="submit">Enviar</button>
        </form>
    </div>
    <div class="desktop-contact inactive">
        <h5>Contactanos</h5>
        <i class="fa-solid fa-minus" style="color: #ffffff;"></i>
    </div>
    <div class="btn-mobile">
        <button><img src="./public/img/mensaje.png" style="color:white;" alt=""></button>
        <!-- <button><img src="../img/mensaje.png" style="color:white;" alt=""></button> -->
    </div>


</div>



<script>
    const desktopContact = document.querySelector('.desktop-contact');
const registrationForm = document.querySelector('.registration-form');
const btnCerrar = document.querySelector('.btn-cerrar');
const mobile = document.querySelector('.btn-mobile')

desktopContact.addEventListener('click', toggleDesktopContact);
btnCerrar.addEventListener('click',toggleCerarForm);
mobile.addEventListener('click',toggleOpenForm);

function toggleDesktopContact() {
    registrationForm.classList.toggle('inactive');
    desktopContact.classList.toggle('inactive');
}
function toggleCerarForm() {
    registrationForm.classList.toggle('inactive');
    desktopContact.classList.toggle('inactive');
    mobile.classList.toggle('inactive');
}
function toggleOpenForm(){
    registrationForm.classList.toggle('inactive');
    mobile.classList.toggle('inactive');
}

var x = window.matchMedia("(max-width:913px)")
myFunction(x);
x.addEventListener(myFunction)
function myFunction(x) {
    if(x.matches){
        registrationForm.classList.toggle('inactive');
    }else{
        registrationForm.classList.toggle('');
    }
}


</script>