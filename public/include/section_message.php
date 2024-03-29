<style>
    .banner {
        background-image: url('./public/img/branding.webp');
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .mapa {
        height: 500px;
        margin-bottom: 50px;
    }

    .map {
        height: 100%;
        width: 100%;
    }

    .principal {
        display: flex;
        justify-content: start;
        height: 100%;
        padding-top: 200px;
    }

    .d {
        color: #9e7fe2;
        font-weight: bold;
        font-size: 4.2rem;
    }

    .creativas {
        color: #FF0080;
        font-weight: 700;
        margin-left: 90px;
    }

    .info {
        margin-top: 120px;

        width: 60%;
        padding: 10px;

    }

    .es {
        text-align: right;
        font-size: 18px;
        font-weight: 550;

    }

    .btu {
        margin-left: 240px;
    }

    .con {
        background-color: #6434d1;
        color: white;
        padding: 9px;
        border: none;
        border-radius: 50px;
        width: 155px;
    }

    .con:hover {
        color: #6434d1;
        background-color: white;
    }

    .ser {
        width: 100%;
        height: 100%;
        padding: 30px;
        padding-left: 80px;
    }

    .co {
        background-color: #6434d1;
        width: 100%;
        height: 400px;
    }

    .mar {

        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 80px;
        width: 100%;
        height: 100%;
        /**/
    }

    .hover {
        width: 25%;
        height: 100%;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        background-position: center;
        background-size: cover;
        transition: all 300ms;

        border-radius: 10px;
    }

    .hover:hover {
        box-shadow: 0px 0px 20px -5px black;
    }

    .hover img {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        transition: all 300ms;
    }

    .hover:hover img {
        transform: scale(1.6) rotate(10deg);
    }

    .hover p {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        color: white;
        z-index: 2;
        transition: all 600ms cubic-bezier(1, 0, 0, 1);
        border: 2px solid white;
        background: black;
        padding: 7px;
    }

    .hover:hover p {
        transform: translate(-50%, -50%) scale(1);
    }

    .hover:before,
    .hover:after {
        content: '';
        width: 500px;
        height: 400px;
        position: absolute;
        top: 0;
        left: 0;
        background: black;
        opacity: 0.6;
        transition: all 600ms cubic-bezier(1, 0, 0, 1);
        border: 4px solid white;
        z-index: 1;
    }

    .hover:before {
        transform: rotate(45deg) translateY(-850px) translateX(0px);
    }

    .hover:after {
        transform: rotate(45deg) translateY(850px) translateX(-60px);
    }

    .hover:hover:before {
        transform: rotate(45deg) translateY(-205px) translateX(-50px);
    }

    .hover:hover:after {
        transform: rotate(45deg) translateY(205px) translateX(-70px);
    }

    .cx {
        background: linear-gradient(to right, rgba(255, 255, 255, 0.164), rgba(0, 0, 0, 0.164));
        width: 100%;
        height: 400px;
    }

    .cp {
        width: 100%;
        height: 300px;
        background-color: #9e7fe2;
    }

    .cpx {
        width: 100%;
        height: 400px;
        background-color: #FF0080;
    }

    .texg {
        width: 100%;
    }

    .tx {
        color: white;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .no {
        font-weight: 600;

    }

    .btr {
        margin-top: 45px;
        margin-left: 160px;
    }

    .b {
        background: linear-gradient(to right, rgb(225, 0, 255), rgb(0, 225, 255));
        color: #ffffff;
        padding: 8px;
        border: none;
        align-items: center;
        border-radius: 50px;
    }

    .texter {
        margin-left: 210px;
    }

    .tx2 {
        color: white;
    }

    .sssa {
        text-align: center;
        padding-top: 80px;
    }

    .btr2 {
        padding-top: 15px;
    }

    .con-anun3 {
        width: 100%;
        background: #6A27B5;
    }

    .con-anun5 {
        background: linear-gradient(to right, rgba(106, 39, 181, 1), rgba(4, 151, 252, 1));
        padding-bottom: 40px;
    }

    .cards-secure {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #84C1E9;
        height: 320px;
        width: 230px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px;
        border-radius: 10px;
        border: 2px solid #F81112;
    }

    .cards-secure div {
        padding-top: 2px;
    }

    .cards-secure img {
        width: 200px;
        height: auto;
    }

    .go-world-digi {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .go-world-digi h5 {
        padding: 40px;
        text-align: center;
        font-size: 50px;
        text-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px;
        color: #009BFF;
    }

    .what-seo {
        background: #009BFF;
        display: flex;
        justify-content: center;
    }

    .container-seo h2 {
        text-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px;
        margin: 20px;
        color: white;
        font-size: 40px;
    }

    .table-seo {
        margin-bottom: 26px;
    }

    .no-search {
        padding: 0;
        padding-top: 40px;
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        color: white;
    }

    .title-nosearch {
        font-size: 45px;
        text-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px;
    }

    .table-nosearch {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .cards-nosearch {
        background: #009BFF;
        width: 323px;
        height: 265px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px;
        border: 2px solid rgba(17, 0, 255, 0.8);
        border-radius: 5px;
    }

    .seconds-titlenosearch {
        font-size: 15px;
        line-height: normal;
        color: white;
    }

    .card-imagenosearch {
        width: 320px;
        height: 202px;
    }

    .table-nosearch td {
        padding-right: 15px;
    }

    .table-secure {
        display: flex;
        justify-content: center;
    }

    .table-secure td {
        padding-right: 20px;
    }

    .contenedor-table-secure {
        padding-bottom: 35px;
    }

    /* ------- MEDIA QUERIE ----------- */
    @media (max-width:920px) {
        .title-nosearch {
            font-size: 30px;
        }

        .table-nosearch {
            display: flex;
            flex-direction: column;
        }

        .table-nosearch tr,
        td {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .table-nosearch td {
            margin-bottom: 15px;
        }

        .table-nosearch tr {
            margin-bottom: 15px;
        }

        .table-seo {
            display: flex;
            justify-content: center;
        }

        .container-seo {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .title-seo {
            font-size: 40px;
            padding: 30px 30px 10px 30px;
            text-align: center;
        }

        .video-seo {
            padding: 10px 0;
            width: 350px;
            height: 270px;
        }

        .video-seo iframe {
            width: 100%;
            height: 100%;
        }

        .cards-secure div {
            padding: 35px 10px 0px 12px;
        }

        .cards-secure {
            background: #84C1E9;
            height: 320px;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px;
            border-radius: 10px;
            border: 2px solid #F81112
        }

        .table-secure {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* .contenedor-table-secure{
        padding-bottom: 35px;
    } */
        .contenedor-table-secure tr {
            display: flex;
            flex-direction: column;
        }

        .contenedor-table-secure td {
            margin-top: 10px;
        }

        .cards-secure img {
            width: 150px;
            height: auto;
        }

        .cards-nosearch {
            width: 260px;
        }

        .card-imagenosearch {
            width: 256px;
            height: 194px;
            object-fit: cover;
        }

        .banner {
            width: 100%;
            height: 55%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .principal {
            padding: 0;
            display: flex;
            text-align: center;
            align-items: center;
        }

        .d {
            font-weight: bold;
            font-size: 2rem;
        }

        .creativas {

            font-weight: 700;
            margin: 0;
            font-size: 1rem;
        }

        .info {
            margin: 0;
            width: 100%;
            padding: 0;
            padding-top: 15px;

        }

        .es {
            text-align: left;
            font-size: 15px;
            font-weight: 550;

        }

        .con {
            background-color: #6434d1;
            color: white;
            padding: 9px;
            border: none;
            border-radius: 50px;
            width: 155px;
        }

        .con {
            background-color: #6434d1;
            color: white;
            padding: 7px;
            border: none;
            border-radius: 50px;
            width: 135px;
        }

        .ser {
            padding: 0;
            padding: 15px;
            padding-left: 40px;

        }

        .co {
            background-color: #6434d1;
            width: 100%;
            height: 800px;
        }

        .cx {
            width: 100%;
            height: 800px;
        }

        .hover {
            width: 100%;
            height: 30%;
        }

        .mar {
            padding: 40px;
        }

        .tx {
            height: 0;
            padding-top: 10px;
            padding-left: 50px;
            padding-right: 50px;


        }

        .tx2 {
            padding: 0;
            margin: 0;

            padding-left: 50px;
            padding-right: 50px;
        }

        .texg {
            width: 100%;
        }

        .no,
        .no2 {
            font-size: 1.2rem;

        }

        .parr,
        .texte2r,
        .parr2,
        .saxc2 {
            font-size: 0.8rem;
        }

        .btr {
            margin: 0;

        }

        .b {
            padding: 5px;
        }

        .cpx {
            width: 100%;
            height: 400px;
            background-color: #FF0080;
        }

        .sssa {
            text-align: center;
            padding: 0;
            padding-top: 58px;
        }
    }

    /* MEDIA QUERIE TABLET */
    @media (min-width:921px) and (max-width:1200px) {
        .cards-secure div {
            padding-top: 20px;
            line-height: initial;
        }

        .banner {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .table-secure {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .contenedor-table-secure td {
            padding-right: 10px;
            padding-bottom: 20px;
        }

        .cards-secure {
            height: 220px;
            width: 200px;
        }

        .cards-secure img {
            width: 150px;
            height: auto;
        }

        .cards-nosearch {
            width: 260px;
            margin-right: 20px;
        }

        .card-imagenosearch {
            width: 256px;
            height: 194px;
            object-fit: cover;
        }
    }
</style>

<div class="con-anun3" style="background: linear-gradient(333deg, rgba(4,151,252,1) 0%, rgba(106,39,181,1) 34%);">
    <table class="table-contact-message">
        <thead>
            <th class="col-3"></th>
            <th class="col-1"></th>
            <th class="col-3"></th>
            <th class="col-3"></th>
            <th class="col-1"></th>
        </thead>
        <tbody>
            <!--Aqui esta la modificacion de dejanos un mensaje-->
            <tr class="contact-message">
                <td class="pyme">
                    <h5 class="titulo1">¡Dejanos un mensaje!</h5>
                </td>
                <td></td>
                <td class="pyme">
                    <br>
                    <div style="background: white; color: black; width:360px; height:140px; border-radius:100px">
                        <img alt="Img no encontrada.." loading="lazy" src="./public/img/circulo1.webp" style="border-radius: 100px;float:left" width="150" height="140">
                        <div style="padding:10px 20px 10px 10px; font-size:20px; text-align:left">
                            <span>Soy una PYME y quiero una asesoría y cotización.</span>
                        </div>
                        <span style="color:blue;" href="https://wa.me/+51936910425"><u>ESCRIBENOS</u></span>
                    </div>
                </td>
                <td class="pyme">
                    <br>
                    <div style="background: white; color: black; width:360px; height:140px; border-radius:100px">
                        <img alt="Img no encontrada.." loading="lazy" src="./public/img/circulo2.webp" style="border-radius: 100px; float:left" width="150" height="140">
                        <div style="padding:10px 20px 10px 10px; font-size:19px; text-align:left">
                            <span>Necesito información de un servicio en especifico.</span>
                        </div>
                        <span style="color:blue;" href="https://wa.me/+51936910425"><u>ESCRIBENOS</u></span>
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>