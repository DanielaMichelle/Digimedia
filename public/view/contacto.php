<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <meta name="description" content="Contactate con nosotros!">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/inicio.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/section.css">
    <link rel="stylesheet" href="./public/css/contactos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php include_once './public/assets/header.php' ?>

    <section class="form">
        <div class="cont_form_img">
            <img src="./public/img/creacion de contenido.webp" alt="">
        </div>
        <div class="container">
            <div class="col-lg-11">
                <form action="" method="post" id="formulario">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="pt-3">Nombre</div>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                    placeholder="Nombres y Apellidos">
                                <small></small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="pt-3">Email</div>
                                <input type="email" class="form-control" name="emailPerson" id="emailPerson" placeholder="email"
                                >
                                <small></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="pt-3">Servicio</div>
                                <select class="form-control" name="servicio" id="servicio">
                                    <option selected disabled value="">--Selecciona--</option>
                                    <option value="Marketing Digital">Marketing Digital</option>
                                    <option value="Imagen Corporativa">Imagen Corporativa</option>
                                    <option value="Gestión De Redes Sociales">Gestión De Redes Sociales</option>
                                    <option value="Crea Tu Marca">Crea Tu Marca</option>
                                    <option value="Diseño web">Diseño web</option>
                                    <option value="Diseño Grafico">Diseño Grafico</option>
                                </select>
                                <small></small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="pt-3">Numero</div>
                                <input type="text" class="form-control" name="numero" id="numero" placeholder="Telefono(9 dígitos)">
                                <small></small>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="pt-3">Mensaje</div>
                        <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="4"
                            placeholder="Mensaje"></textarea>
                        <small></small>
                    </div>

                    <div class="mb-3 dist" id="con">
                        <label for="email">Email Marketing:</label>
                        <div class="pt-3"></div>
                        <input type="hidden" name="emailMarck" value="no" id="email">
                        <input type="checkbox" name="emailMarck" value="si" id="email">

                        <label for="new">News & Updates Emails:</label>
                        <div class="pt-3"></div>
                        <input type="hidden" name="new" value="no" id="new">
                        <input type="checkbox" name="new" value="si" id="new">

                        <label for="production">Production Process Emails:</label>
                        <div class="pt-3"></div>
                        <input type="hidden" name="production" value="no" id="production">
                        <input type="checkbox" name="production" value="si" id="production">
                    </div>

                    <div class="pt-3" id="ps"></div>
                    <input type="submit" value="Enviar" class="enviar">
                </form>
        </div>
    </div>
    </section>

    <div class="col">

        <div class="cont">
            <div class="grande">
                <h2 style="font-weight: bold;">Horario de atención</h2>
            </div>
            <div>
                <p>Lunes - Viernes</p>
                <p>Sábado</p>
            </div>
            <div>
                <p>8:00 am - 8:00 pm</p>
                <p>9:00 am - 7:00 pm</p>
            </div>
        </div>

    </div>

    <?php include_once './public/include/section_maps.php' ?>

    <?php include_once './public/assets/footer.php' ?>


    <script>

        const form = document.querySelector("#formulario");
 
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            validarCampos();
        });

        function validarNumero(numero) {
            // Validar que el campo "numero" tenga solo números y exactamente 9 dígitos, empezando por 9
            return /^9\d{8}$/.test(numero);
        }

        function validarCampos() {
            // Obtener valores de los campos
            const nombre = document.querySelector("#nombre").value.trim();
            const numero = document.querySelector("#numero").value.trim();
            const emailPerson = document.querySelector("#emailPerson").value.trim();
            const servicio = document.querySelector("#servicio").value.trim();
            const mensaje = document.querySelector("#mensaje").value.trim();

            // Verificar campos obligatorios
            if (!nombre || !numero || !emailPerson || !servicio || !mensaje) {
                alert("Debe rellenar todos los campos obligatorios.");
                return;
            }

            // Validar el campo "numero"
            if (!validarNumero(numero)) {
                alert("El campo número debe tener exactamente 9 dígitos numéricos y comenzar con el número 9.");
                return;
            }

            const formData = new FormData();


            // Agregar valores al FormData
            formData.append('nombre', nombre);
            formData.append('numero', numero);
            formData.append('email', emailPerson);
            formData.append('servicio', servicio);
            formData.append('mensaje', mensaje);

            // Agregar campos adicionales
            formData.append('emailMarck', obtenerValorCheckbox("emailMarck"));
            formData.append('new', obtenerValorCheckbox("new"));
            formData.append('production', obtenerValorCheckbox("production"));

            formData.append('estado', 0); 

            enviarFormData(formData);
        }   

        function vaciarDatos(){
            const nombre = document.querySelector("#nombre").value = "";
            const numero = document.querySelector("#numero").value = "";
            const emailPerson = document.querySelector("#emailPerson").value = "";
            const servicio = document.querySelector("#servicio").value = "";
            const mensaje = document.querySelector("#mensaje").value = "";
        }
        
        function obtenerValorCheckbox(nombreCheckbox) {
            const checkbox = document.querySelector(`input[name='${nombreCheckbox}']`);
            return checkbox.checked ? 'si' : 'no';
        }

        //ESTO TE LLEVA LOS DATOS AL SERVER Y LE PONE COMO NOMBRE ADD
        function enviarFormData(formData) {
            fetch("./app/trigger/intranet.php?action=ADD", {
                method: "POST",
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                alert("Datos enviados")
                vaciarDatos();
                console.log(data);
            })
            .catch(err => {
                console.error("Error al enviar FormData:", err);
            });
        }

    </script>

</body>

</html>