<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JOMCER CONSTRUCTORA S.A DE C.V es una empresa que ofrece el servicio de suministro de materiales petreos para su contruccion como lo es grava, arena, adobe, block, asfalto, piedra bola, cemento y mucho más.">
    <meta name="keywords" content="material petreo,material para contruccion, suministro de material petreo,cemento,grava,arena,adobe,asfalto,piedra bola">
    <link rel="shortcut icon" type="image/ico" href="img/favicon-96x96.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+527292242272&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <script src="https://kit.fontawesome.com/e954e6d43f.js" crossorigin="anonymous"></script>
    <title>Jomcer - Suministro De Material Pétreo</title>
</head>

<?php include 'includes/nav.php' ?>

<div class="img-banner-petreo">
            <div class="title-banner-petreo">
                <h1>Suministro de material pétreo</h1>
            </div>
            <div class="button-contact">
                <button><a href="#">Contactanos</a></button>
            </div>
        </div>
    </header>

    <section class="contruction-container">
        

        <div class="petreo-container__text">
            <h2>Suminstro de materiales pétreos para tu contrucción</h2>
            <div class="petreo-container__img animacion-abajo">
                <img src="img/builder-zone.jpg" alt="foto de zona de construccion">
            </div>
            <div class="petreo-container__img animacion-abajo">
                <img src="img/suministro-petreo (2).jpeg" alt="foto de zona de construccion">
            </div>
            <p class="animacion-izquierda">En CONSTRUCTORA JOMCER Ponemos a su servicio la venta y el transporte de una gran variedad de productos naturales y procesados para la construcción.</p>
            <p class="animacion-derecha"> Nos enfocamos en la extracción y trituración de materiales pétreos requeridos para la construcción, cuidando siempre los procesos y calidad del producto.</p>
            
            <section class="imagen-petreo animacion-derecha">
        <div class="contenido-contacto">
            <div class="imagen-contacto-text">
            <p>Contamos con entregas de material pétreoa partir de 6 hasta 34 metros cúbicos</p>
            </div>
            <div class="button-contact btn-img">
                <button><a href="#">Contactanos</a></button>
            </div>
        </div>
    </section>

            <div class="img-container-petreo">
            <div class="petreo-container__img-2 animacion-abajo">
                <img src="img/grava.jpg" alt="grava para la construccion">
            </div>
            <div class="petreo-container__img-2 animacion-arriba">
                <img src="img/arena.jpg" alt="arena para la construccion">
            </div>
            </div>
            
            <p>Déjanos tu mensaje</p>
        <p>En breve nos comunicarémos contigo</p>
        </div>

       

    </section>



    <div class="form animacion-abajo">
            
            <form action="enviar.php" method="POST">
                <label for="name">Nombre:*</label>
                <input type="text" name="name" id="name" required>
                <label for="tel">Teléfono:*</label>
                <input type="tel" name="tel" id="tel" required>
                <label for="email">Correo:</label>
                <input type="email" name="email" id="email">
                <label for="mensaje">Mensaje:*</label>
                <textarea id="mensaje" name="mensaje" rows="8" placeholder="Escribe aqui tu mensaje" required=""></textarea>
                <div class="input">
                    <input type="submit" value="Enviar">
                </div>
                
            </form>
            
        </div>


    <?php include 'includes/footer.php' ?>

</html>