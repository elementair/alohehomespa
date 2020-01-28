<?php
// php consultas
session_start();
require_once ('./config/consulta.php');
require_once "./config/ruta.php";
$datos = new consulta();
$conexion = new Conexion();
$conexion->selecciona_base_datos();
$link = $conexion->link;
$mensaje = False;
$m_error="";
$ruta_base_menu='';

$usuario_session='usuario_session';
$usuario='usuario';
$res_nombre='';
$res_email='';
$res_phone='';
$MJEerror='';
$etiqueta="INICIAR";
$SesionModal="#Modal_formulario_login";
$img_inicio_ruta="img/svg/icono_ingresar.svg";
$ruta_base=$ruta_universal.'sistema/';
/*
* 
**************************************
*
Control session
*
**************************************
*
*/
require_once ('./config/controlSession.php');

$grupo_servicios=mysqli_query($link,"SELECT id, nombre, descripcion, archivo FROM grupo_servicios WHERE status=1;");
$promociones = mysqli_query($link, "SELECT id,nombre,descripcion,archivo, descuento,promociones_tipo_id,status FROM promociones WHERE status=1");

$slider_inicio=mysqli_query($link,"SELECT id, nombre, descripcion, boton, url, archivo FROM slider_inicio WHERE status=1;");
$video_inicio=mysqli_query($link,"SELECT archivo FROM video_inicio;");

$nosotros=mysqli_query($link,"SELECT id, descripcion FROM nosotros WHERE id=1;");
$slider_nosotros=mysqli_query($link,"SELECT id, nombre, descripcion, prefijo FROM slider_nosotros WHERE status=1;");
$instalaciones=mysqli_query($link,"SELECT id, nombre, archivo FROM instalaciones WHERE status=1;");
$ajustes=mysqli_query($link,"SELECT id, telefono_1, telefono_2, whatsapp, email_contacto FROM ajustes;");

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
    <link rel="stylesheet" href="vistas/css/buscador.css">
    <link rel="stylesheet" type="text/css" href="vistas/css/flexisel.css">
    <link rel="stylesheet" href="text/css" href="vistas/css/step_form_style.css">
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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

           
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

    // CONSULTAS PADRE
    $grupo_servicios=mysqli_query($link,"SELECT id, nombre, descripcion, archivo FROM grupo_servicios WHERE status=1;");

    
    if ($rutas[0] == "servicios") { 

        /*==============================================================
        CONSULTAS PARA SERVICIOS
        ==============================================================*/
        
        // $ajustes=mysqli_query($link,"SELECT id, telefono_1, telefono_2, whatsapp, email_contacto FROM ajustes;");
        if (isset($_GET['grupo_servicios_id'])) {

          $datosgrupo=$_GET['grupo_servicios_id'];

          if ($datosgrupo==0){
            $servicios = mysqli_query($link, "SELECT  s.id AS 'servicio_id', 
                                                      s.nombre AS 'nombre_servicio', 
                                                      s.descripcion, 
                                                      s.caracteristicas, 
                                                      s.archivo, 
                                                      s.duracion, 
                                                      s.precio, 
                                                      s.status, 
                                                      s.grupo_servicios_id, 
                                                      gs.nombre AS 'nombre_grupo', 
                                                      gs.id AS 'grupo_id'
                                                from(servicios as s 
                                                left outer join grupo_servicios as gs on 
                                                      s.grupo_servicios_id=gs.id) 
                                                WHERE s.status=1;");
          }else{
            $servicios = mysqli_query($link, "SELECT  s.id AS 'servicio_id', 
                                                      s.nombre AS 'nombre_servicio', 
                                                      s.descripcion, 
                                                      s.caracteristicas, 
                                                      s.archivo, 
                                                      s.duracion, 
                                                      s.precio, 
                                                      s.status, 
                                                      s.grupo_servicios_id, 
                                                      gs.nombre AS 'nombre_grupo', 
                                                      gs.id AS 'grupo_id'
                                                from(servicios as s 
                                                left outer join grupo_servicios as gs on 
                                                      s.grupo_servicios_id=gs.id) 
                                                WHERE gs.id=$datosgrupo AND s.status=1;");
          }

        }else{

          $servicios = mysqli_query($link, "SELECT  s.id AS 'servicio_id', 
                                                    s.nombre AS 'nombre_servicio', 
                                                    s.descripcion, 
                                                    s.caracteristicas, 
                                                    s.archivo, 
                                                    s.duracion, 
                                                    s.precio, 
                                                    s.status, 
                                                    s.grupo_servicios_id, 
                                                    gs.nombre AS 'nombre_grupo', 
                                                    gs.id AS 'grupo_id'
                                                from(servicios as s 
                                                left outer join grupo_servicios as gs on 
                                                      s.grupo_servicios_id=gs.id) 
                                                WHERE s.status=1;");
        }

        // include_once $base."servicios.php";
        // include "views/modulos/modulo_cita_individual.php";
        ?>
            <link rel="stylesheet" type="text/css" href="vistas/css/servicios.css">
            <link rel="stylesheet" type="text/css" href="vistas/css/sidebar.css">
            <link rel="stylesheet" href="vistas/css/servicios.css">
            <script src="vistas/js/sidebar.js"></script>

        <?php
        include_once $base."plantilla/servicios.php";
    }   
    if ($rutas[0] == "servicios_detalle") {


        /*==============================================================
        CONSULTAS PARA SERVICIOS
        ==============================================================*/
        $grupo_servicios=mysqli_query($link,"SELECT id, nombre, descripcion, archivo FROM grupo_servicios WHERE status=1;");
        // $ajustes=mysqli_query($link,"SELECT id, telefono_1, telefono_2, whatsapp, email_contacto FROM ajustes;");
        if (isset($_GET['servicio_id'])) {

        $datoservicio=$_GET['servicio_id'];

        if ($datoservicio==0){

            $servicios = mysqli_query($link, "SELECT  s.id  AS 'servicio_id', 
                                                      s.nombre AS 'nombre_servicio', 
                                                      s.descripcion, 
                                                      s.caracteristicas, 
                                                      s.archivo, 
                                                      s.duracion, 
                                                      s.precio, 
                                                      s.status, 
                                                      s.grupo_servicios_id, 
                                                      gs.nombre AS 'nombre_grupo', 
                                                      gs.id AS 'grupo_id'
                                                from(servicios as s 
                                                left outer join grupo_servicios as gs on 
                                                      s.grupo_servicios_id=gs.id) 
                                                WHERE s.status=1;");
          }else{
            $servicios = mysqli_query($link, "SELECT  s.id  AS 'servicio_id', 
                                                      s.nombre AS 'nombre_servicio', 
                                                      s.descripcion, 
                                                      s.caracteristicas, 
                                                      s.archivo, 
                                                      s.duracion, 
                                                      s.precio, 
                                                      s.status, 
                                                      s.grupo_servicios_id, 
                                                      gs.nombre AS 'nombre_grupo', 
                                                      gs.id AS 'grupo_id'
                                                from(servicios as s 
                                                left outer join grupo_servicios as gs on 
                                                      s.grupo_servicios_id=gs.id) 
                                                WHERE s.status=1 AND s.id=$datoservicio;");

            $relacionados = mysqli_query($link, "SELECT    s.id  AS 'servicio_id', 
                                                        s.nombre AS 'nombre_servicio', 
                                                        s.descripcion, 
                                                        s.caracteristicas, 
                                                        s.archivo, 
                                                        s.duracion, 
                                                        s.precio, 
                                                        s.status, 
                                                        s.grupo_servicios_id, 
                                                        gs.nombre AS 'nombre_grupo', 
                                                        gs.id AS 'grupo_id'
                                                from(servicios as s 
                                                left outer join grupo_servicios as gs on 
                                                        s.grupo_servicios_id=gs.id) 
                                                WHERE s.status=1;");
          }

        }else{
          $servicios = mysqli_query($link, "SELECT  s.id  AS 'servicio_id', 
                                                    s.nombre AS 'nombre_servicio', 
                                                    s.descripcion, 
                                                    s.caracteristicas, 
                                                    s.archivo, 
                                                    s.duracion, 
                                                    s.precio, 
                                                    s.status, 
                                                    s.grupo_servicios_id, 
                                                    gs.nombre AS 'nombre_grupo', 
                                                    gs.id AS 'grupo_id'
                                                from(servicios as s 
                                                left outer join grupo_servicios as gs on 
                                                      s.grupo_servicios_id=gs.id) 
                                                WHERE s.status=1;");

        }
      include "vistas/modulo/modulo_citas.php";
      include "vistas/modulo/modulo_login.php";
      include "vistas/modulo/modulo_citas_lanzamiento.php";

    ?>
        <link rel="stylesheet" type="text/css" href="vistas/css/servicios.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/sidebar.css">
        <link rel="stylesheet" href="vistas/css/servicios_detalles.css">
        <link rel="stylesheet" href="vistas/css/slideshow_gallery.css">

        <script src="vistas/js/sidebar.js"></script>
        <script src="vistas/js/slideshow_gallery.js"></script>
        <script>
            
            var slideIndex = 1;
            showSlides(slidIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demo");
              var captionText = document.getElementById("caption");
              if (n > slides.length) {slideIndex = 1}
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";
              dots[slideIndex-1].className += " active";
              captionText.innerHTML = dots[slideIndex-1].alt;
            }
        </script>

    <?php
    include_once $base."plantilla/servicios_detalle.php";
    }
    if ($rutas[0] == "sucursales") {
        ?>
            <link rel="stylesheet" type="text/css" href="vistas/css/sucursales.css">
            <link rel="stylesheet" href="vistas/css/slideshow_gallery.css">
            <script src="vistas/js/slideshow_gallery.js"></script>
            
            <script src="vistas/js/sucursal_galeria.js">             
      

            </script>

        <?php
        include_once $base."plantilla/sucursales.php";
        
    }
    if ($rutas[0] == "productos") {
        ?>
             <link rel="stylesheet" type="text/css" href="vistas/css/productos.css">
        <?php
        include_once $base."plantilla/productos.php";
    }
    if ($rutas[0] == "inversionistas") {
        ?>
             <link rel="stylesheet" type="text/css" href="vistas/css/inversionistas.css">
        <?php
        include_once $base."plantilla/inversionistas.php";
        
    }
    if ($rutas[0] == "citas") {
        ?>
             <link rel="stylesheet" type="text/css" href="vistas/css/citas.css">
        <?php
        include_once $base."plantilla/citas.php";
        
    }
    // else{
    //    include_once $base."plantilla/error.php";
    // }
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<!-- 
    mdb
 -->
<script src="vistas/mdb/js/mdb.min.js"></script>
<script src="vistas/mdb/js/bootstrap.min.js"></script>
<script src="vistas/mdb/js/popper.min.js"></script>
<script src="vistas/mdb/js/jquery.min.js"></script>
<script src="vistas/mdb/js/modules/forms-free.min.js"></script>


<script src="vistas/js/jquery-modal-video.min.js"></script>
    <script>
        $('.datepicker').pickadate({
        editable: true
        })
    </script>

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
<script src="vistas/js/step_form_style.js"></script>

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