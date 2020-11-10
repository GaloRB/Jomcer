<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Jomcer - Nosotros</title>
</head>

<?php include 'includes/nav.php' ?>

<div class="img-banner-contact">
            <div class="title-banner-contact">
                <h1>!Contáctanos¡</h1>
            </div>
            <div class="slogan-contact">
                <span>Haz realidad esa idea que tanto haz tenido en mente</span>
            </div>
            <div class="button-contact">
                <button><a href="#">Contáctanos</a></button>
            </div>
        </div>
    </header>

    <section class="contact-container">
        <div class="contact-container__text">
            <h2>Contacto</h2>
            <p>¡En Constructora JOMCER estamos para servirte!</p>
            <p>No dudes en comunicarte</p>
        </div>
    <div class="datos">
        <div class="datos__tel dat">
            <i class="fas fa-phone-alt"></i>
            <p>Teléfonos:</p>
            <span>7292242272</span>
            <span>7223053867</span>
        </div>
        <div class="datos__correo dat">
            <i class="fas fa-at"></i>
            <p>Correo:</p>
            <span>jomcer@gmail.com</span>
        </div>
       <div class="datos__direcion dat">
            <p>Dirección :</p>
             <span>Carretera Ocoyoacac, Santiago Km 1, Barrio De Santiaguito Ocoyoacac, Estado De México</span>
       </div>
       
    </div>
       
        
        <p>Déjanos tu mensaje</p>
        <span>En breve nos comunicarémos contigo</span>

    </section>

    <div class="form">
            
            <form action="" method="">
                <label for="name">Nombre:*</label>
                <input type="text" name="name" id="name" required>
                <label for="tel">Teléfono:*</label>
                <input type="tel" name="tel" id="tel" required>
                <label for="email">Correo:*</label>
                <input type="email" name="email" id="email" required>
                <label for="mensaje">Mensaje:*</label>
                <textarea id="mensaje" rows="8" placeholder="Escribe aqui tu emnsaje" required=""></textarea>
                <div class="input">
                    <input type="submit" value="Enviar">
                </div>
                
            </form>
            
        </div>


    <?php include 'includes/footer.php' ?>

</html>