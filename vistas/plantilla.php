<?php
// php consultas
?>
<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <!--
        meta
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Aloe Home Spa surge como una idea de negocio para crear experiencias inolvidables a nuestros clientes logrando enlazar un modelo de negocio rentable entre el inversionista y los clientes finales garantizando la satisfacción total de nuestros usuarios otorgando siempre los mejores servicios que ellos merecen.">
    <meta name="keywords" content="aloe home spa, diseño, spa guadalajara, masajes, faciales, depilación definitiva">
    <meta name="author" content="Aloe Home Spa">
    <title>Aloe Home Spa</title>
    <!--
        css
     -->
    <link rel="shortcut icon" href="vistas/img/logo/favicon.ico" type="image/x-icon">
    <link rel="icon"  href="vistas/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="vistas/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="vistas/css/menu.css">
    <link rel="stylesheet" type="text/css" href="vistas/css/footer.css">
    <link rel="stylesheet" type="text/css" href="vistas/css/flexisel.css">
    <link rel="stylesheet" href="vistas/aos/aos.css">
    <!-- 
        mdb
     -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <link rel="stylesheet" type="text/css" href="vistas/mdb/css/mdb.min.css">
     <link rel="stylesheet" type="text/css" href="vistas/mdb/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="vistas/mdb/css/mdb.lite.min.css">
     <link rel="stylesheet" type="text/css" href="vistas/mdb/css/addons/datatables-select.min.css">
     <link rel="stylesheet" type="text/css" href="vistas/mdb/css/modules/animations-extended.min.css">
           
</head>
<body id="top">
<header>    
    <?php include ("vistas/modulo/menu.php"); ?>
</header>
<?php
$base="vistas/";
global $rutas;
$rutas = array();
if(isset($_GET["pagina"])){
    $rutas = explode("/", $_GET["pagina"]);
    // Mi perfil
    if ($rutas[0] == "servicios") {
        ?>
            <link rel="stylesheet" type="text/css" href="vistas/css/servicios.css">
        <?php
        include_once $base."plantilla/servicios.php";
    }
    elseif ($rutas[0] == "sucursales") {
        ?>
            <link rel="stylesheet" type="text/css" href="vistas/css/sucursales.css">
        <?php
        include_once $base."plantilla/sucursales.php";
    }
    elseif ($rutas[0] == "productos") {
        ?>
             <link rel="stylesheet" type="text/css" href="vistas/css/productos.css">
        <?php
        include_once $base."plantilla/productos.php";
    }
     elseif ($rutas[0] == "inversionistas") {
        ?>
             <link rel="stylesheet" type="text/css" href="vistas/css/inversionistas.css">
        <?php
        include_once $base."plantilla/inversionistas.php";
        
    }
    elseif ($rutas[0] == "citas") {
        ?>
             <link rel="stylesheet" type="text/css" href="vistas/css/citas.css">
        <?php
        include_once $base."plantilla/citas.php";
        
    }
    else{
       include_once $base."plantilla/error.php";
    }
}else{
    ?>
     <link rel="stylesheet" type="text/css" href="vistas/css/inicio.css">
     
    <?php
    include_once $base."plantilla/inicio.php";
    
}
include_once $base."modulo/footer.php";

?>
<a href="#top" class="to-top"><img src="vistas/img/top.png" alt=""></i></a>

<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="vistas/js/parallax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- 
    mdb
 -->
<script src="vistas/mdb/js/mdb.min.js"></script>
<script src="vistas/mdb/js/bootstrap.min.js"></script>
<script src="vistas/mdb/js/popper.min.js"></script>
<script src="vistas/mdb/js/jquery.min.js"></script>

<script src="vistas/js/jquery-modal-video.min.js"></script>
<script>
    $(".js-video-button").modalVideo({
        youtube:{
            autoplay: 1,
            // controls:0,
            wmode: 'transparent',
            controls: 1,
        theme: 'dark',
            nocookie: true
        }
    });

    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(1000).fadeIn(1000);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(1000).fadeOut(1000);
    });

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-M2C9yZRD7FFdjwjSjJfnsotae_Y8Nk" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="vistas/js/ajax.envia.js"></script>
<script src="vistas/js/scroll_anim.js" ></script>
<script src="vistas/js/mapa-min.js"></script>
<script src="vistas/js/jquery.scrollUp.js"></script>
<script src="vistas/js/menu.js"></script>
<script src="vistas/js/menu_inicio.js"></script>

<!-- 
    flexisel
 -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="vistas/js/jquery.flexisel.js"></script>
<script src="vistas/js/flexisel.js"></script>
<script src="vistas/aos/aos.js"></script>
<script>
    AOS.init(); 
</script>

</body>
</html>