<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <meta name="description" content="Nuestros servicios">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/inicio.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/section.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php include_once './public/assets/header.php' ?>

    <?php 

        $servicio = isset($_GET['id']) ? $_GET['id'] : 1;
        if(is_file("./public/view/servicios/{$servicio}.php")) require_once "./public/view/servicios/{$servicio}.php";
        else require_once "./public/view/servicios/1.php"; 

    ?>

    <div class="con-anun3">
        <div class="parrafos1">
            <h5 class="titulo1" style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><Big><Big>¿Quieres iniciarte en el mundo digital?</Big></Big></h5>
            <div class="pt-3"></div>
            <p style="font-size:20px; line-height:normal;"><b>En DIGIMEDIA te ayudamos a emprender o hacer crecer tu negocio.</b></p>
        </div>
        <div class="pt-3"></div>
        <div class="bota1">
            <a href="contacto.php" title="¡Contactanos!" class="boton__2" style="box-shadow:2px 3px 2px black ">Contactar</a>
        </div>
        <div class="pt-5"></div>
    </div>

    <section class="contenedor_rd_sls_">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="contenedor_gs_web_cont">
                        <br>
                        <h1><b>Te garantizamos</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-4 mb-4">
                    <div class="img-portafolio">
                        <img src="./public/img/t1.webp" loading="lazy" title="DISEÑO UX Y UI" alt="Img no encontrada.." width="100%" height="100%">
                        <div class="porta-po">
                            <div>
                                <h4>DISEÑO UX Y UI</h4>
                                <p>Se trata de la creación y diseño visual de sitios web y aplicaciones móviles, asegurando una navegación y experiencia de usuario óptimas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mb-4">
                    <div class="img-portafolio">
                        <img src="./public/img/t2.webp" loading="lazy" title="Desarrollo web" alt="Img no encontrada.." width="100%" height="100%">
                        <div class="porta-po">
                            <div>
                                <h4>Desarrollo web</h4>
                                <p>
                                    Uso de tecnologías como PHP, JavaScript, HTML5, CSS, Bootstrap, MySQL y más. Estas herramientas nos permiten crear sitios web altamente personalizados y adaptados a las necesidades y objetivos de nuestros clientes,
                                    ofreciendo una experiencia de usuario única y atractiva.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mb-4">
                    <div class="img-portafolio">
                        <img src="./public/img/t3.webp" loading="lazy" title="DOMINIO Y HOSTING" alt="Img no encontrada.." width="100%" height="100%">
                        <div class="porta-po">
                            <div>
                                <h4>DOMINIO Y HOSTING</h4>
                                <p>
                                    Adquirimos tu nombre de dominio y alojamos tu sitio en un servidor seguro y confiable para garantizar que esté siempre accesible. Ofrecemos diferentes planes de hosting para que puedas elegir el que mejor se adapte a tus necesidades.
                                    Tu sitio estará en buenas manos y siempre disponible para tus visitantes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mb-4">
                    <div class="img-portafolio">
                        <img src="./public/img/t4.webp" loading="lazy" title="SEO" alt="Img no encontrada.." width="100%" height="100%">
                        <div class="porta-po">
                            <div>
                                <h4>SEO</h4>
                                <p>Se refiere a la creación de contenidos de calidad que ayuden a posicionar el sitio web o aplicación en los motores de búsqueda, con el objetivo de aumentar la visibilidad y el tráfico hacia el sitio, para que se clasifique mejor
                                    en los motores de búsqueda y atraiga a más clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once './public/include/section_message.php' ?>

    <div class="con-anun5">
        <div class="no-search">
            <h5 class="title-nosearch">¿No encontraste lo que<br> buscabas?</h5>
            <div class="pt-3"></div>
            <p style="font-size: 24px; line-height:normal;"><b>Tenemos más servicios para ti</b></p>
        </div>
        <table class="table-nosearch">
            <thead>
                <th class="col-2"></th>
                <th class="col-3"></th>
                <th class="col-0.5"></th>
                <th class="col-3"></th>
                <th class="col-0.5"></th>
                <th class="col-3"></th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <div style="border-radius: 50px;" class="cards-nosearch" title="GESTIÓN DE REDES SOCIALES">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="rd-sociales.php" src="./public/img/gestion_redes.webp" alt="2 (1).webp" fetchpriority="high">
                            <p style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;" class="">
                                    <a href="rd-sociales.php" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em; "><b class="seconds-titlenosearch">GESTIÓN DE REDES SOCIALES</b></span></center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div style="border-radius: 50px;" class="cards-nosearch" title="BRANDING Y DISEÑO">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="branding.php" src="./public/img/branding.webp" alt="2 (1).webp" fetchpriority="high">
                            <p class=" " style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;">
                                    <a href="branding.php" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em;"><b class="seconds-titlenosearch">BRANDING Y DISEÑO</b></span></center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div style="border-radius: 50px;" class="cards-nosearch" title="MARKETING Y GESTIÓN DIGITAL">
                            <img style="border-radius: 50px;" class="card-imagenosearch" href="marketing-digital.php" src="./public/img/marketing_gestion.webp" alt="2 (1).webp" fetchpriority="high">
                            <p class=" " style="font-size:20px; line-height:normal;">
                                <span style="color:#059EFF;" class="">
                                    <a href="marketing-digital.php" target="_self" class="">
                                        <span style="font-size:20px;">
                                            <center><span style="font-family:avenir-lt-w01_85-heavy1475544,sans-serif; letter-spacing:0.05em; "><b class="seconds-titlenosearch">MARKETING Y GESTIÓN DIGITAL</b></span></center>
                                        </span>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include_once './public/include/section_maps.php' ?>
    <?php include_once './public/include/section_form_contact_us.php' ?>
    

    <?php include_once './public/assets/footer.php' ?>

</body>

</html>