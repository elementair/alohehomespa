<div class="container">
   
    <div class="row space_header">
    <!-- Todas las categorias existentes -->
    <div class="opciones_sucursales">
    <ul>
        <a href="">
            <li>
            Sucursal Naciones Unidas
            </li>
        </a>
        <a href="">
            <li>
            Michoacan
            </li>
        </a>
        <a href="">
            <li>
            Sucursal 3
            </li>
        </a>
        <a href="">
            <li>
            Sucursal 4
            </li>
        </a>
    </ul>
    </div>
    
    </div>

        <!-- Formulario de contacto -->
    

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-left my-6">Sucursal Naciones Unidas</h2>
    <!--Section description-->
    <p class="text-left w-responsive mx-auto mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla a provident reprehenderit voluptates nisi necessitatibus est quia quisquam mollitia laudantium?</p>

    <div class="row">
        <div class="col-sm mapa" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466.4959561678693!2d-103.41198747623476!3d20.711538246202448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af03b8d9c2b5%3A0xba20d3c808e05657!2sShifra+Spa!5e0!3m2!1ses!2smx!4v1525540080187" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    
        </div>

        <!--Grid column-->
        <div class="col-sm contacto_sucursal">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class=""> Tu nombre </label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class=""> Tu correo </label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class=""> Asunto </label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message"> Escribe tu mensaje </label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
    
        <div class="col-sm direccion">
            <ul class="list-unstyled mb-0 redes_sucursales">
                <li><p><a href="#"><img src="vistas/img/iconos/ubicacion.png" alt="">
                    Naciones unidas #3453<a> </p>
                </li>

                <li><p><a href="#"><img src="vistas/img/iconos/telefono.png" alt="">
                    + 01 234 567 89</p>
                </li>

                <li><p><a href="#"><img src="vistas/img/iconos/email.png" alt="">
                    n_unidas@aloehomespa.com</p>
                </li>
                <li><p><a href="#"><img src="vistas/img/iconos/redes/fb.png" alt=""> ALH NacionesUnidas</a></p>
                   
                </li>
                <li><p><a href="#"><img src="vistas/img/iconos/redes/tw.png" alt="">@AloeNacionesUnidas</a>  </p>
                   
                </li>
                <li><p> <a href="#"><img src="vistas/img/iconos/redes/yt.png" alt="">  AloheHomeSpa Oficial</a></p>
                  
                </li>
                
                 
            </ul>
        </div>
        <!--Grid column-->
    </div>
    <div class="line"></div>
    <div class="row subtitulo">
            <span class="txt_verde">Galeria </span> 
            <span class="txt_azul">  Instalaciones </span> 
            <span class="txt_aloe">Aloe</span>
        </div>

    <div class="row">
        <div class="col-sm-12">

            <ul id="flexiselDemo4">

                <?php

                    foreach ($instalaciones as $instalacion) {
                        $id = $instalacion['id'];
                        $nombre = $instalacion['nombre'];
                        $archivo =$ruta_base.$instalacion['archivo'];
                        $dir_img='background-image: url('.$archivo.');';
        
                ?>

                <li data-target="#myCarrusel2" data-slide-to="<?php echo $id; ?>">
                    <div data-toggle="modal" data-target="#exampleModal" class="contenedor_inst" style="<?php echo $dir_img; ?>"><div class="sombreado_galeria_instalaciones"><img src="img/lupa-con-un-ojo-blanco.svg"></div></div>
                </li>
                <?php } ?>
            </ul>
	
        </div>
    </div>
</div>