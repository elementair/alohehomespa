<div class="container">
   
    <div class="row space_header">
    <!-- Todas las categorias existentes -->
    <div class="opciones_sucursales">
    <ul>
        <a href="">
            <li>
            GDL | Naciones Unidas
            </li>
        </a>
        <a href="">
            <li>
            GDL | Nueva Sucursal
            </li>
        </a>
        <a href="">
            <li>
            MICH | Sahuayo
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
    <h2 class="h1-responsive font-weight-bold text-center my-4">Sucursal Naciones Unidas</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla a provident reprehenderit voluptates nisi necessitatibus est quia quisquam mollitia laudantium?</p>

    <div class="row">
        <div class="col-sm mapa" >

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.5249876284606!2d-103.43031324947529!3d20.688895686115735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428afb64cbb38cf%3A0xa1ed7b9455bb9443!2sAloe%20Home%20Spa!5e0!3m2!1ses!2smx!4v1579187696982!5m2!1ses!2smx" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
        </div>

        <!--Grid column-->
        <div class="col-sm contacto_sucursal">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class=""> Tu nombre </label>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
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
                Av. Naciones Unidas #5528 Local #208 "Plaza Ubika Naciones Unidas Col, Vallarta Universidad, 45110 Zapopan, Jal.<a> </p>
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
        <span class="txt_verde">Galeria </span>&nbsp;
        <span class="txt_azul">  de  </span>&nbsp;
        <span class="txt_aloe">Instalaciones</span>
    </div>
        
    <div class="row">
        <div class="column">
            <img src="vistas/img/sucursales/1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="vistas/img/sucursales/2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="vistas/img/sucursales/3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="vistas/img/sucursales/4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
        <!-- <div class="column">
            <img src="vistas/img/sucursales/5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
        </div> -->
    </div>

    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="vistas/img/sucursales/1.jpg" style="width:100%">
                </div>

            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="vistas/img/sucursales/2.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="vistas/img/sucursales/3.jpg" style="width:100%">
            </div>
            
            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="vistas/img/sucursales/4.jpg" style="width:100%">
            </div>
            <!-- <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="vistas/img/sucursales/5.jpg" style="width:100%">
            </div> -->
            
            <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a class="next" onclick="plusSlides(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>

            <div class="caption-container">
            <p id="caption"></p>
            </div>

        </div>

    </div>
    <div class="line"></div>

    </div>

</div>