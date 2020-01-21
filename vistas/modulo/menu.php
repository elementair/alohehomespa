<style>
.dropdown>.dropdown-menu {
  top: 140%;
  transition: 0.8   s all ease-in-out;
}
.dropdown:hover>.dropdown-menu {
  display: block;
  top: 115%;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
    color:#aaa;
}


.dropdown-menu {
    border: 0px solid rgba(0,0,0,.15);
    box-shadow: 1px 0px 8px #eaeaea; 
    border-radius: 0px !important;
}

.dropdown-menu a {
    padding: 10px 10px !important;
    line-height: 15px;
}

.dropdown-toggle::after {

    display: block;
    width: 5px;
    margin-top: -30px;
    margin-left: 40%;
    color: #ccc;
}


</style>


 <!-- MENU RESPONSIVO MOVIL -->
    <nav class="btn-toggle">
        <div class="brand_container ">
            <a href="index.php"><img src="vistas/img/logo/ahlogo.png" alt="Logo Creactiv Media" class="brand"></a>
        </div>
        <div class="menu-nav">
            <div id="nav">
                <li><a id="inicio" href="index.php">HOME</a></li>
                
                <li class="dropdown dropdown-toggle" id="dropdownMenuButton">
                  <a id="nosotros" href="index.php?pagina=servicios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
               
                    <div class="submenu dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php
                            foreach ($grupo_servicios as $grupo_servicio) {
                                $nombre =$grupo_servicio['nombre'];
                                $id = $grupo_servicio['id'];
                                ?>
                                <a class="dropdown-item" href="index?pagina=servicios&grupo_servicios_id=<?php echo $id; ?>"><?php echo $nombre; ?></a>
                                
                                <?php
                            }
                        ?>
                    </div>

                 </li>
                 <li class="dropdown dropdown-toggle" id="dropdownMenuButton" >
                  <a id="servicios" href="index.php?pagina=sucursales" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SUCURSALES</a>
               
                    <div class="submenu dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="index?pagina=sucursales">GDL | Naciones Unidas</a>
                        <a class="dropdown-item" href="#">GDL | Nueva suc</a>
                        <a class="dropdown-item" href="#">MICH| Sahuayo</a>
                       
                    </div>

                 </li>
                 <li class="dropdown dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <a id="contacto" href="index.php?pagina=productos">PRODUCTOS</a>
               
                    <div class="submenu dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>

                 </li>
                <li><a id="contacto" href="index.php?pagina=inversionistas">INVERSIONISTAS</a></li>
            </div>
        </div>
        <div class="brand-datos">
            <a data-toggle="modal" data-target="<?php echo $modal_cita; ?>"><img src="vistas/img/iconos/user.png"></a>
            <a class="btn-green-aloe btn_agendar" data-toggle="modal" data-target="<?php echo $modal_cita; ?>">Agenda tu cita</a>
            <a href="#" target="_blank"><img src="vistas/img/iconos/cart.png"></a>
        </div>
        <a href="#" onclick="return false" id="btn-toggle"><img src="vistas/img/menu_responsivo.png" class="btn-menu" height="25" width="30" alt=""></a>
    </nav>
    <!-- MENU PANTALLA PC -->
    <section class="seccionToggle"> 
        <div class="wrap">
            <div class="container-fluid">
                <div class="movil">

                    <div class="cont1">
                        <p class="title-men"><a id="inicio" href="index.php">HOME</a></p>
                    </div>

                    <div class="cont1">
                        <p class="title-men"><a id="nosotros" href="index.php?pagina=servicios">SERVICIOS</a></p>
                    </div>

                    <div class="cont1">
                        <p class="title-men"><a id="servicios" href="index.php?pagina=sucursales">SUCURSALES</a></p>
                    </div>
                   
                    <div class="cont1">
                        <p class="title-men"><a id="contacto" href="index.php?pagina=productos">PRODUCTOS</a></p>
                    </div>

                    <div class="cont1">
                        <p class="title-men"><a id="contacto" href="index.php?pagina=inversionistas">INVERSIONISTAS</a></p>
                    </div>
                    
                    <div class="cont1">

                        <div class="brand_datos_reponsivo">
                            <a href="https://www.facebook.com/CreActivMedia/" target="_blank"><img src="vistas/img/redes_sociales/facebook.png"></a>
                            <a href="https://www.instagram.com/creactivmedia/" target="_blank"><img src="vistas/img/redes_sociales/instagram.png"></a>
                            <a href="https://twitter.com/creactivmedia" target="_blank"><img src="vistas/img/redes_sociales/twitter.png"></a>
                        </div>
                      
                    </div>

                </div>
            </div>
        </div>
    </section>
    <a href="https://web.whatsapp.com/send?phone=523328346263&text=Hola,%20te%20contacto%20desde%20tu%20Sitio%20Web." target="_blank" class="icono_whats" >
        <img src="vistas/img/whats.png">
    </a>  