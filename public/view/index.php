<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: DigiMedia ::.</title>
    <link rel="shortcut icon" href="./public/img/logo.png" type="image/x-icon">
    <meta name="description" content="Digimedia un mundo innovador">
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/inicio.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/section.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Stylos Css propios -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php include_once './public/assets/header.php' ?>

    <section class="hero">
        <img src="./public/img/inicio.webp" alt="hero imagen">
        <div class="container-hero">
            <div>
                <h1>¿No sabes por dónde empezar?</h1>
                <p>Contáctanos e impulsa tu presencia en la web con una <span>asesoría gratuita</span></p>
                <button class="hero-buttom">Comienza hoy mismo</button>
            </div>
        </div>
        <div class="hero-redes-sociales">
            <a href="#">Red Social</a>
            <a href="#">Red Social</a>
            <a href="#">Red Social</a>
            <a href="#">Red Social</a>
        </div>
    </section>

    <!-- modal principal -->
    <?php include_once './public/include/modal_main.php'?>


    <div class="banner-imag">
        <div class="container">
            <div class="pt-4"></div>
            <center>
                <div class="our-services">
                    <span>
                        <div class="pt-2"></div>
                        <b>Nuestros Servicios</b>
                    </span>
                </div>
            </center>
            <table class="table-ourservices">
                <thead>
                    <th class="col-2"></th>
                    <th class="col-3"></th>
                    <th class="col-2"></th>
                    <th class="col-5"></th>
                    <th></th>
                </thead>
                <tbody>
                    <tr class="container-ourservices">
                        <td></td>
                        <td>
                            <div class="img_cuadro2">
                                <a data-testid="linkElement" href="View/ds-web.php" target="_self">
                                    <img href="View/ds-web.php" loading="lazy" title="Diseño y desarrollo web"
                                        src="./public/img/ds_web.webp" alt="Img no encontrada.." fetchpriority="high"
                                        class="img_cuadro1">
                                </a>
                                <a href="View/ds-web.php" target="_self">
                                    <span style="font-size:20px;">
                                        <center><span class="texto_cuadro1"><b class="texto_cuadro">DISEÑO
                                                    Y DESARROLLO WEB</b></span>
                                        </center>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="img_cuadro2">
                                <a href="View/rd-sociales.php" data-testid="linkElement" target="_self">
                                    <img loading="lazy" title="Gestion de redes sociales"
                                        src="./public/img/gestion_redes.webp" alt="Img no encontrada.."
                                        fetchpriority="high" class="img_cuadro1">
                                </a>
                                <a href="View/rd-sociales.php" target="_self">
                                    <span style="font-size:20px;">
                                        <center><span class="texto_cuadro1"><b class="texto_cuadro">
                                                    GESTIÓN DE REDES SOCIALES</b></span></center>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="container-ourservices">
                        <td></td>
                        <td>
                            <div class="img_cuadro2">
                                <a data-testid="linkElement" href="View/marketing-digital.php" target="_self">
                                    <img href="View/marketing-digital.php" loading="lazy"
                                        src="./public/img/marketing_gestion.webp" alt="Img no encontrada.."
                                        title="Marketing y gestion de digital" fetchpriority="high" class="img_cuadro1">
                                </a>
                                <a href="View/marketing-digital.php" target="_self">
                                    <span style="font-size:20px;">
                                        <center><span class="texto_cuadro1"><b class="texto_cuadro">MARKETING
                                                    Y GESTIÓN DIGITAL</b></span></center>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <div class="img_cuadro2">
                                <a data-testid="linkElement" href="View/branding.php" target="_self">
                                    <img loading="lazy" title="Branding y diseño" src="./public/img/branding.webp"
                                        alt="Img no encontrada.." fetchpriority="high" class="img_cuadro1">
                                </a>
                                <a href="View/branding.php" target="_self">
                                    <span style="font-size:20px;">
                                        <center><span class="texto_cuadro1"><b class="texto_cuadro">BRANDING
                                                    & DISEÑO</b></span></center>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="pt-4"></div>
        </div>
    </div>

    <?php include_once './public/include/section_message.php' ?>

    <div class="con-anun3" style="background: linear-gradient(to right,#0199FE,#672BB7);">
        <div class="parrafos1">
            <h5 class="title-go" style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><Big><Big>¿Quieres iniciarte en el
                        mundo digital?</Big></Big></h5>
            <div class="pt-3"></div>
            <p><b>En DIGIMEDIA te ayudamos a emprender o hacer crecer tu negocio.</b></p>
        </div>
        <!-- <div class="pt-3"></div> -->
        <div class="bota1">
            <a href="View/preguntas.php" class="boton__2"
                style="box-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><b>Contactar</b></a>
        </div>
        <div class="pt-3"></div>
    </div>

    <?php include_once './public/include/section_maps.php' ?>

    <?php include_once './public/assets/footer.php' ?>

</body>

</html>