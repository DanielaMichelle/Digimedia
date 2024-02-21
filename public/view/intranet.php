<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <meta name="description" content="Seccion de administrador.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/style.css">

</head>

<body>

    <div style="display: grid; gap:25px; padding: 15px">
        <div>
            <button class="btn btn-primary" id="logout">Cerrar sesion</button>
        </div>

        <table id="exampleTable" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SERVICIO</th>
                    <th scope="col">NUMERO</th>
                    <th scope="col">MENSAJE</th>
                    <th scope="col">EMAIL MARK</th>
                    <th scope="col">NEW</th>
                    <th scope="col">PRODUCTION</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
            <tbody id="tableBody"></tbody>
        </table>
    </div>

    <script>

        const tableBody = document.getElementById('tableBody')

        tableBody.addEventListener('click', e => {
            const button = e.target.closest('button')

            if (button) {
                const tr = button.closest('tr')

                const id = tr.getAttribute('data-id')
                const action = button.getAttribute('data-action')

                if (action == 'eliminar') {
                    tr.remove()

                    fetch(`./app/trigger/intranet.php?action=DELETE&id=${id}`)
                        .then(res => res.json())
                        .then(console.log)
                }

                else if (action == 'canbiarEstado') {

                    const formData = new FormData()
                    formData.append('estado', button.getAttribute('data-estado') == 0 ? 1 : 0)

                    fetch(`./app/trigger/intranet.php?action=UPDATE_STATUS&id=${id}`, { method: 'POST', body: formData })
                        .then(res => res.json())
                        .then(dataRender)
                }
            }
        })
        
        const dataRender = () => {
            fetch('./app/trigger/intranet.php?action=GET')
                .then(res => res.json())
                .then((Data = []) => {

                    tableBody.innerHTML = Data.map(data => {
                        return `
                <tr data-id="${data.id}">
                    <td>${data.id}</td>
                    <td>${data.nombre}</td>
                    <td>${data.email}</td>
                    <td>${data.servicio}</td>
                    <td>${data.numero}</td>
                    <td>${data.mensaje}</td>
                    <td>${data.emailMarck}</td>
                    <td>${data.new}</td>
                    <td>${data.production}</td>
                    <td>${data.fecha_hora}</td>
                    <td>${data.fecha_hora_actualizacion}</td>
                    <td>
                        <span>${data.estado == 0 ? 'pendiente' : 'Atendido'}</span>
                    </td>
                    <td>
                        <button data-action="eliminar" class="btn btn-danger">Eliminar</button>
                        ${data.estado == 0 ? `<button data-action="canbiarEstado" data-estado="${data.estado}" class="btn btn-warning">Cambiar</button>` : ''}
                    </td>
                </tr>
            `
                    }).join('')

                })
        };

        dataRender();


        document.getElementById('logout').addEventListener('click', ()=> {
            fetch('./app/trigger/logout.php')
                .then( res => res.json() )
                .then( ()=> location.reload() )
        })

    </script> 

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!--Este link contiene datos importantes de datatables:v-->
    <script type="text/javascript" src="./public/utils/datatables/datatables.min.js"></script>

    <!--No colocar los enlaces de los botones de datatables ya el mismo lo integra por su cuenta-->
    <script src="./public/js/datosDatatables.js"></script>
    <script src="./public/js/cerrarSesion.js"></script>
    
</body>

</html>