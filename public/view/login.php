<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <meta name="description" content="Login para administrador">
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/inicio.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
<div class="container-principal">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
              <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body">
                <h5 class="card-title">Iniciar Sesión</h5>
                <center><img class="image-logo" src="./public/img/logo.png" /></center>
                <form a  id="formulario"  autocomplete="off">
                  <div id="formulario_mensaje" style="display:none" class="alert alert-warning alert-dismissible fade show des" role="alert">
                      en el callo matan?
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" placeholder="Usuario">
                    <label for="email">USUARIO</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" autocomplete="off">
                    <label for="password">CONTRASEÑA</label>
                  </div>

                  <div class="butonSub">
                    <button class="btn btn-lg btn-primary btn-login" type="submit">Iniciar Sesion</button>
                  </div>

                  <hr class="my-4">
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="image-reference">
        <img src="./public/img/chica-blnaco-y-negor-01.svg" alt="Personas trabajando">
      </div>
    </div>



    <script>

      const formulario_mensaje = document.getElementById('formulario_mensaje')
      const formulario = document.getElementById('formulario')

      formulario.addEventListener('submit', e => {
        e.preventDefault()
        
        const formData = new FormData()
        formData.append( 'email', formulario.email.value )
        formData.append( 'password', formulario.password.value )

        fetch('./app/trigger/login.php', { method : 'POST', body : formData })
          .then( res => res.json() )
          .then( res => {
            if( !res.estado ) {
              formulario_mensaje.removeAttribute('style')
              formulario_mensaje.textContent = res.mensaje
              setTimeout(()=> formulario_mensaje.setAttribute('style', 'display:none'), 1500)
            } else {
              location.reload() 
            }
          })

      })


    </script>
</body>

</html>