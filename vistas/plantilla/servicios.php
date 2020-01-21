
<div class="container">	
	<div class="row servicios_header">
		<div class="banner_promocion" style="background-image: url(vistas/img/servicios/banner1.jpg);">

			<a class="btn_promo_agendar btn-green-aloe" href="#">Agendar</a>

		</div>
	
	</div>

	<div class="row miga_pan">	
		<div class="col-12 col-sm">
	      	<nav aria-label="breadcrumb">
			  	<ol class="breadcrumb">
				  <?php
		                foreach ($grupo_servicios as $grupo_servicio) {
		                    $nombre =$grupo_servicio['nombre'];
		                    $imagen = $grupo_servicio['archivo'];
							$id = $grupo_servicio['id'];
							if($id==$_GET['grupo_servicios_id']){
		            ?>
				    <li class="breadcrumb-item">HOME</li>
				    <li class="breadcrumb-item"><?php echo $nombre;?></li>
				    <!-- <li class="breadcrumb-item"><a href="#">Depilación</a></li>
					<li class="breadcrumb-item active" aria-current="page">Mujer</li> -->
					<?php
						}
					} 
					?>
				  </ol>
				
			</nav>
		</div>

		 <div class="col-12 col col-sm buscador">
				<div class=" justify-content-center h-100">

			    <div class="searchbar">
		          	<input class="search_input" type="text" name="" placeholder="Buscar servicio...">
		          	<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
		        </div>
	    	</div>
        </div>

	</div>
	
		<!-- Bootstrap row -->
		<div class="row" id="body-row">
		    <!-- Sidebar -->
		    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
		        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
		        <!-- Bootstrap List Group -->

		        <ul class="list-group">
	 

		            <!-- Separator with title -->
		            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
		                <small>CATEGORIAS</small>
		            </li>

		            <a href="index?pagina=servicios&grupo_servicios_id=0"  aria-expanded="false" class="bg-white text-dark list-group-item list-group-item-action flex-column align-items-start">
		                <div class="d-flex w-100 justify-content-start align-items-center">
		                   
		                    <!-- <span class="menu-collapsed"> -->
		                    	&nbsp;&nbsp;TODOS
		                    		
		                    	<!-- </span> -->
		                   
		                </div>
		            </a>

		            <?php
		                foreach ($grupo_servicios as $grupo_servicio) {
		                    $nombre =$grupo_servicio['nombre'];
		                    $imagen = $grupo_servicio['archivo'];
		                    $id = $grupo_servicio['id'];
		            ?>
		   
					
 					<a href="index?pagina=servicios&grupo_servicios_id=<?php echo $id; ?>"  aria-expanded="false" class="bg-white text-dark list-group-item list-group-item-action flex-column align-items-start">
		                <!-- <div class="d-flex w-100 justify-content-start align-items-center"> -->
		                   
		                    <!-- <span class="menu-collapsed"> -->
		                    	<?php echo '&nbsp;&nbsp;'.$nombre; ?>
		                    		
		                    	<!-- </span> -->
		                   
		                <!-- </div> -->
		            </a>
		    		<?php
		    			}
		    		?>

		            <!-- Separator with title -->
		            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
		                <small>PAQUETES</small>
		            </li>

		            <!-- /END Separator -->
		            <a href="#" class="bg-white text-dark list-group-item list-group-item-action">
		                <div class="d-flex w-100 justify-content-start align-items-center">
		                    <span class="fa fa-calendar fa-fw mr-3"></span>
		                    <span class="menu-collapsed">Calendar</span>
		                </div>
		            </a>
		          
		        </ul><!-- List Group END-->
		    </div><!-- sidebar-container END -->
		    <!-- MAIN -->
		    <div class="col p-4 servicio_contenedor">

		        <?php
					// Si no existe un id de grupo de servicio
					if(!isset($_GET['grupo_servicios_id'])){
						?>
								<div class="subgrupos" style="color: #8e8c8a; ">
									<h3>TODOS</h3>                 
								</div>
								<hr>
		
							<?php 
					}else{

						foreach ($grupo_servicios as $grupo){

							$nombre_grupo = $grupo['nombre'];
							$grupo_id = $grupo['id'];

							// Si existe un id de grupo de servicio y es igual a un grupo de servicio
							if ($grupo_id == $_GET['grupo_servicios_id']){
								
							?>
								<div class="subgrupos" style="color: #8e8c8a; ">
									<h3><?php echo $nombre_grupo; ?></h3>                 
								</div>
								<hr>
		
							<?php 
								 }
							}
							// Si el id de grupo de servicio es igual a 0 pintar TODOS
							if($_GET['grupo_servicios_id']==0){
								?>
								<div class="subgrupos" style="color: #8e8c8a; ">
									<h3>TODOS</h3>                 
								</div>
								<hr>
							<?php
								
							}
						
					}
                    
                ?>

			    <?php

				    foreach ($servicios as $servicio) {
				    $id_servicio          = $servicio['servicio_id'];
				    $nombre               = $servicio['nombre_servicio'];
					$archivo              = $servicio['archivo'];
					$descripcion          = $servicio['descripcion'];
					$descripcion_res      = str_replace(".", ".<br>", $descripcion);
                    $caracteristicas      = $servicio['caracteristicas'];
					$duracion             = $servicio['duracion'];
					$precio               = $servicio['precio'];
                    $nombre_grupo         = $servicio['nombre_grupo'];
					$grupo_id         	  = $servicio['grupo_id'];

					// if ($_GET['grupo_servicios_id']==$grupo_id){

					
			    ?>
		        <div class="card">
		           

		             <a href="index?pagina=servicios_detalle&servicio_id=<?php echo $id_servicio; ?>&grupo_servicio_id=<?php echo $grupo_id; ?>">
		             	 <h5 class="card-header font-weight-bold"><?php echo $nombre; ?></h5>
		             </a>

		            <div class="card-body quitar_padding">
		            	<div class="row">

			            	<div class="col-sm-3">
			            		<a href="index?pagina=servicios_detalle&servicio_id=<?php echo $id_servicio; ?>&grupo_servicio_id=<?php echo $grupo_id; ?>">
			            			<img class="img_producto"  src="<?php echo $ruta_base.$archivo; ?>"></img>
			            		</a>     					            		
			            	</div>

			            	<div class="col-sm-9">
							
			            		<h6 class="text-green-aloe">Descripción</h6>
				            		<p>
				            			<?php echo $descripcion; ?>
				            		</p>
				                <div class="table_details table-responsive ">
								    <table class="table">
								        <thead>
								            <tr>
								                <th class="text-green-aloe" scope="col">Precio</th>
								                <th class="text-green-aloe" scope="col">Duración</th>
								                <th class="text-green-aloe" scope="col"></th>							               
								            </tr>
								        </thead>
								        <tbody>
								            <tr >
								                <td><h4><?php echo "$".$precio; ?></h4></td>								            
								                <td><h4><?php echo $duracion."min"; ?></h4></td>
								                <td><div class="d-flex justify-content-center">
			        								<a href="index?pagina=servicios_detalle&servicio_id=<?php echo $id_servicio; ?>&grupo_servicio_id=<?php echo $grupo_id; ?>" class="btn-green-aloe">Ver detalles</a>
												</div></td>							               
								            </tr>
								            
								        </tbody>
								      
								    </table>
								</div>
			            	</div>
			            </div>
		                
		            </div>
		        </div>
		        <br>

				 <?php
                    

				}
                // }
                ?>
		       


		    </div><!-- Main Col END -->
		</div><!-- body-row END -->
	
</div>