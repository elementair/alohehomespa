

<div class="container">
	 <?php

	    foreach ($servicios as $servicio) {
	        $id_servicio          = $servicio['id'];
	        $nombre               = $servicio['nombre_servicio'];
	        $archivo_pad          = $servicio['archivo'];
	        $descripcion          = $servicio['descripcion'];
	    	$descripcion_res      = str_replace(".", ".<br>", $descripcion);
	    	$caracteristicas      = $servicio['caracteristicas'];
	        $duracion             = $servicio['duracion'];
	        $precio               = $servicio['precio'];
	    	$precio_formato_comas = number_format($precio);	  
	    	$nombre_grupo         = $servicio['nombre_grupo'];
	    	$grupo_servicio_id    =$servicio['grupo_servicios_id'];
			?>
	<div class="row space_header">
		<div class="col-12 col-sm">
	      	<nav aria-label="breadcrumb">
			  	<ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="index">Home</a></li>
				    <li class="breadcrumb-item">
				    	<a href="index?pagina=servicios&grupo_servicios_id= <?php echo $grupo_servicio_id; ?>">
				    		<?php echo $nombre_grupo; ?>	    		
				    	</a>
				    </li>
				    <li class="breadcrumb-item active" aria-current="page"><?php echo $nombre; ?></li>
			 	 </ol>


			 	
			</nav>
		</div>
	</div>

	<div class="row ">
		<div class="col-sm p_detalle_imagen">
	
			<div class="container">
				<div class="row">
			  <div class="mySlides">
			    <div class="numbertext">1 / 5</div>
			    <img src="vistas/img/servicios/1.jpg" style="width:100%">
			  </div>

			  <div class="mySlides">
			    <div class="numbertext">2 / 5</div>
			    <img src="vistas/img/servicios/2.jpg" style="width:100%">
			  </div>

			  <div class="mySlides">
			    <div class="numbertext">3 / 5</div>
			    <img src="vistas/img/servicios/3.jpg" style="width:100%">
			  </div>
			    
			  <div class="mySlides">
			    <div class="numbertext">4 / 5</div>
			    <img src="vistas/img/servicios/4.jpg" style="width:100%">	
			  </div>

			  <div class="mySlides">
			    <div class="numbertext">5 / 5</div>
			    <img src="vistas/img/servicios/1.jpg" style="width:100%">
			  </div>	
			    
			  <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
			  <a class="next" onclick="plusSlides(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>

			  <div class="row">
			    <div class="column">
			      <img class="demo cursor" src="vistas/img/servicios/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Sensacciones inolvidables">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="vistas/img/servicios/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Procedimiento profecional">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="vistas/img/servicios/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Tu piel luce fantastico">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="vistas/img/servicios/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Sesacion duradera">
			    </div>
			    <div class="column">
			      <img class="demo cursor" src="vistas/img/servicios/1.jpg" style="width:100%" onclick="currentSlide(5)" alt="cuida tu piel">
			    </div>    
			  
			  </div>
			</div>	
			</div>		
		</div>
		<div class="col-sm p_detalle_descriipcion">

			<h3>Depilacion definitiva mujer</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus voluptas atque, omnis non alias porro esse at magnam ab. Ad repellat hic expedita amet quasi numquam possimus sunt, maiores quaerat!</p>
			<br>
			<h5><span class="text-green-aloe">Duracion:</span><strong> 50min </strong></h5>
			<h5><span class="text-green-aloe">Precio:</span><strong> $1499</strong></h5>
			<br>
			<a class="btn-green-aloe" href="#">Agendar</a>
			<hr>
			<span><small>Categoria: Depilacion</small></span>
		   	<div class="redes_sociales rs_s_detalles">
	   
	        	<a href="#"><img src="vistas/img/iconos/redes/fb.png" alt=""></a> 
	        	<a href="#"><img src="vistas/img/iconos/redes/tw.png" alt=""></a> 
	        	<a href="#"><img src="vistas/img/iconos/redes/yt.png" alt=""></a> 
	        	<a href="#"><img src="vistas/img/iconos/redes/gp.png" alt=""></a> 
	      	</div>
						
		</div>

	</div>

	<div class="row detalles_opiniones">

		<div class="container">
			<ul id="tabs" class="nav nav-tabs" role="tablist">
		        <li class="nav-item">
		            <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Descirpcion</a>
		        </li>
		        <li class="nav-item">
		            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Opiniones</a>
		        </li>
		       
		    </ul>

		    <div id="content" class="tab-content" role="tablist">
		        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
		            <div class="card-header" role="tab" id="heading-A">
		                <h5 class="mb-0">
		                    <!-- Note: `data-parent` removed from here -->
		                    <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
		                        Collapsible Group Item Aasdasdasd
		                    </a>
		                </h5>
		            </div>

		            <!-- Note: New place of `data-parent` -->
		            <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
		                <div class="card-body">
		                    <ol>
		                    	<li>item1</li>
		                    	<li>item1</li>
		                    	<li>item1</li>
		                    	<li>item1</li>
		                    	<li>item1</li>
		                    	<li>item1</li>
		                    	<li>item1</li>
		                    	<li>item1</li>
		                    </ol>
		                </div>
		            </div>
		        </div>

		        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
		            <div class="card-header" role="tab" id="heading-B">
		                <h5 class="mb-0">
		                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
		                        Collapsible Group Item Baasdasadasdasd
		                    </a>
		                </h5>
		            </div>
		            <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
		                <div class="card-body">
		                    COMMENT
		                    <!-- https://bootsnipp.com/snippets/Qb5p1 -->
		                </div>
		            </div>
		        </div>		       
		    </div>
		</div>
	</div>
	
	<div class="row">

		<div class="row subtitulo">
            <span class="txt_verde">Servicios</span> 
            <span class="txt_azul"> Relacionados que te pueden</span> 
            <span class="txt_aloe">interesar</span>
        </div>

	 	<ul id="flexiselDemo3">
            <li> 
            	<div class="card">
		            <h5 class="card-header font-weight-bold">Depilación definitiva Mujer</h5>
		            <div class="card-body">
		            	<div class="row">
			            	<div class="col-sm-6">
			            		<div class="img_producto"  style="background-image: url(vistas/img/servicios/banner1.jpg);">
			            			
			            		</div>			            		

			            	</div>
			            	<div class="col-sm-6">			            	       		   
				               	<h6><span class="text-green-aloe" >Duración</span>20min</h6>
				                <h6><span class="text-green-aloe" >Precio</span>$1500</h6>
				                <h6><a href="#" class="btn-green-aloe">Ver detalles</a></h6>
			            	</div>
			            </div>		                
		            </div>
		        </div>
		    </li>

            <li>
            	<div class="card">
		            <h5 class="card-header font-weight-bold">Depilación definitiva Mujer</h5>
		            <div class="card-body">
		            	<div class="row">
			            	<div class="col-sm-6">
			            		<div class="img_producto"  style="background-image: url(vistas/img/servicios/banner1.jpg);">
			            			
			            		</div>			            		

			            	</div>
			            	<div class="col-sm-6">			            	       		   
				               	<h6><span class="text-green-aloe" >Duración</span>20min</h6>
				                <h6><span class="text-green-aloe" >Precio</span>$1500</h6>
				                <h6><a href="#" class="btn-green-aloe">Ver detalles</a></h6>
			            	</div>
			            </div>		                
		            </div>
		        </div>
            </li>
            <li> 
            	<div class="card">
		            <h5 class="card-header font-weight-bold">Depilación definitiva Mujer</h5>
		            <div class="card-body">
		            	<div class="row">
			            	<div class="col-sm-6">
			            		<div class="img_producto"  style="background-image: url(vistas/img/servicios/banner1.jpg);">
			            			
			            		</div>			            		

			            	</div>
			            	<div class="col-sm-6">			            	       		   
				               	<h6><span class="text-green-aloe" >Duración</span>20min</h6>
				                <h6><span class="text-green-aloe" >Precio</span>$1500</h6>
				                <h6><a href="#" class="btn-green-aloe">Ver detalles</a></h6>
			            	</div>
			            </div>		                
		            </div>
		        </div>
		    </li>                               
        </ul>  
	</div>
	<br/>

	<?php
}
	?>

</div>