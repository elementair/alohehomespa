
<!---------------------------------
|    BANNER HOME
---------------------------------->
<section class="inicio_carousel">

    <div id="carouselInicio" class="carousel slide" data-ride="carousel">


        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="vistas/img/inicio/banner-home.jpg" alt="First slide">
            </div>
            <!-- <div class="carousel-item">
                <img class="d-block w-100" src="vistas/img/inicio/banner-home2.jpg" alt="Second slide">
            </div> -->
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#carouselInicio" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselInicio" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        
       
        <div class="texto-banner">
            <div class="container">

                <p class="txt_sin_espacio">TIME TO &nbsp; &nbsp; &nbsp; 
                <br />
                <span  class="txt_sin_espacio">Relax</span>
                </p> 
                <br />
                <a class="btn-green btn_agendar" href="#" target="_blank">Agenda tu cita</a>
                
            </div>
        </div>
    </div>

</section>

<div class="line"></div>

<!---------------------------------
|     SLIDER PAQUETES 
---------------------------------->  

<section class="section-paquetes">

    <div class="container">

        <div class="row">
            <div class="col-sm img-paquetes">
                    <img src="vistas/img/paquetes/paquete1.png" alt="">
            </div> 
            <div class="col-sm img-paquetes">
                    <img src="vistas/img/paquetes/paquete2.png" alt="">
            </div>
            <div class="col-sm img-paquetes">
                    <img src="vistas/img/paquetes/paquete3.png" alt="">
            </div>  
        </div>

    </div>

</section>

<!---------------------------------
|    CATEGORIAS  
---------------------------------->

<div class="line"></div>

<section class="section-categorias">

    <div class="container">

        <div class="row subtitulo">
            <span class="txt_verde">Consiéntete</span> 
            <span class="txt_azul"> y Vive la experiencia </span> 
            <span class="txt_aloe">Aloe</span>
        </div>
        <div class="row">
            <div class="col-sm img-categoria">
                <img src="vistas/img/categorias/faciales.png" alt="">
                <p>Faciales</p>
            </div>
            <div class="col-sm img-categoria">
                <img src="vistas/img/categorias/masajes.png" alt="">
                <p>Masajes</p>
            </div>
            <div class="col-sm img-categoria">
                <img src="vistas/img/categorias/depilacion.png" alt="">
                <p>Depilacion</p>
            </div>
            <div class="col-sm img-categoria">
                <img src="vistas/img/categorias/pedicure.png" alt="">
                <p>Pedicure</p>
            </div>
            <div class="col-sm img-categoria">
                <img src="vistas/img/categorias/aparatologia.png" alt="">
                <p>Aparatologia</p>
            </div>
            <div class="col-sm img-categoria">
                <img src="vistas/img/categorias/AquaSpa.png" alt="">
                <p>Aqua Spa</p>
            </div>
            <div class="col-sm img-categoria">
                <img src="vistas/img/categorias/coberturas.png" alt="">
                <p>Coberturas</p>
            </div>

        </div>

    </div>  

</section>

<div class="line"></div>

<!---------------------------------
|    NOSOTROS  
---------------------------------->

<section class="nosotros" style="">

    <div class="seccion_nosotros" style="background-image: url(vistas/img/fondo.png);">
       
        <img class="imgnosotros" src="vistas/img/img_nosotros.png" >

        <div class="container">

            <div class="col-sm w-50 imgnosotroslogo">
                <img src="vistas/img/logo/ahlogo.png" alt="">
                <p>
                Aloe Home Spa fue creada en 2016 pensando en el bienestar 
                de las personas y en cómo poder ayudarles a eliminar 
                sus altos niveles de estrés por la vida tan ocupada en su trabajo, 
                oficinas, familia, hogar y problemas de la vida diaria que constantemente 
                afectan nuestra salud física, mental, estética y emocional. 

                La belleza es otra experiencia que puedes vivir en Aloe Home Spa 
                de manera profesional descubriendo a través de los sentidos 
                como disfrutar de masajes de moldeo corporal, eliminación de celulitis, 
                disminución de estrías, notables cambios en desvanecimiento de líneas 
                de expresión facial así como cuidados de la piel en general. 
                </p>

            </div>
            <div class="col-sm">
         
            </div>

        </div>

    </div>
    
</section>  

<div class="line"></div>

<!---------------------------------
|    CITAS  
---------------------------------->

<section class="seccion_citas">

    <div class="container">

            <div class="row subtitulo">
                <span class="txt_verde">Agenda tu cita</span> 
            </div>

      


            <!--Card content-->


                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="#!">
             
                <div class="col-sm w-50">
                    <!-- Subject -->
                    <span>Elige un servicio</span>
                    <select class="browser-default custom-select" >

                        <option value="" disabled >-Elige una opcion-</option>
                        <option value="1" selected >Depilacion definitiva</option>
                        <option value="2">Faciales</option>
                        <option value="3">Masajes Corporales</option>
                        <option value="4">AquaSpa</option>
                        <option value="5">Manicure</option>
                        <option value="6">Pedicure</option>
                        <option value="7">Aparatología Facial</option>
                        <option value="8">Coberturas</option>
                        <option value="9">Aparatología</option>

                    </select>

                    <!--Message-->
                    <div class="md-form">
                        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                        <label for="materialContactFormMessage">Message</label>
                    </div>

                    <!-- Copy -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Terminos y condiciones</label>
                    </div>


                    <!-- Send button -->
                    <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">CONTINUAR</button>
                </div>
                <div class="col-sm w-50">
                    <!-- Name -->
                    <div class="md-form mt-3">
                        <input type="text" id="materialContactFormName" class="form-control">
                        <label for="materialContactFormName">Name</label>
                    </div>
                    <!-- Name -->
                    <div class="md-form mt-3">
                        <input type="text" id="materialContactFormName" class="form-control">
                        <label for="materialContactFormName">Apellido</label>
                    </div>

                    <!-- E-mail -->
                    <div class="md-form">
                        <input type="email" id="materialContactFormEmail" class="form-control">
                        <label for="materialContactFormEmail">E-mail</label>
                    </div>

                     <!-- Celphone -->
                     <div class="md-form mt-3">
                        <input type="text" id="materialContactFormNumber" class="form-control">
                        <label for="materialContactFormName">Teléfono</label>
                    </div>
                </div>

                </form>
                <!-- Form -->

        
    <!-- Material form contact -->    
    </div>
</section>

<div class="line"></div>

<!---------------------------------
|    SUCURSALES  
---------------------------------->

<section>
    <div class="container">

        <div class="row subtitulo">
            <span class="txt_verde"> Conoce</span> 
            <span class="txt_azul"> Nuestras Sucursales</span> 
        </div>

        <div class="row">

            <ul id="flexiselDemo4">
                <li><img src="vistas/img/sucursales/1.jpg" /></li>
                <li><img src="vistas/img/sucursales/2.jpg" /></li>
                <li><img src="vistas/img/sucursales/3.jpg" /></li>
                <li><img src="vistas/img/sucursales/4.jpg" /></li>     
                <li><img src="vistas/img/sucursales/5.jpg" /></li>
                <li><img src="vistas/img/sucursales/6.jpg" /></li>
                <li><img src="vistas/img/sucursales/7.jpg" /></li>
                <li><img src="vistas/img/sucursales/8.jpg" /></li>                                   
            </ul>  

        </div>
    </div>

</section>

<div class="line"></div>

<!---------------------------------
|    OFERTA LABORAL  
---------------------------------->

<section id="oferta_laboral">

    <div class="container">

        <div class="row">

   
            <div class="col-sm w-50 seccion_txt">
                     <div class="line"></div>

                <div class="subtitulo">
                    <span class="txt_azul txt_sin_espacio">Forma parte del equipo de</span> 
                    <span class="txt_verde txt_sin_espacio">Alohe Home Spa</span> 
                    <span class="txt_italica">¡Tenemos un plan de inversión para ti! </span>
                </div>

                <p>

                Aloe Home Spa fue creada en 2016 pensando en el bienestar 
                de las personas y en cómo poder ayudarles a eliminar 
                sus altos niveles de estrés por la vida tan ocupada en su trabajo, 
                oficinas, familia, hogar y problemas de la vida diaria que constantemente 
                afectan nuestra salud física, mental, estética y emocional. 

                </p>

                <a class="btn-green btn_laboral" href="#" target="_blank">Únete a nuestro Equipo</a>
             
            </div>

            <div class="col-sm w-50 seccion_img">
                        

                <img src="vistas/img/laboral/laboral.png" alt="">

            </div>
        
        </div>

    </div>

</section>