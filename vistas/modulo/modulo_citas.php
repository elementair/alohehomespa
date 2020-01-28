<!-- FORMULARIO INICIAR CITA -->
<?php 

	$display='none';
?>



<div class="modal" id="Modal_formulario_cita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h6 class="modal-title" id="exampleModalLabel"><strong> <img src="img/logo_blanco.png"></strong></h6>
		</div>
		

		<div class="modal-body formulario_style">
		<div class="row">
		<div class="form">
		<form name="formcitas" id="regForm" action="envio_correo_cita.php" method="POST">
			<!-- =============================
				STEP 1  SELECCIONAR SERVICIO
			===============================-->
			<div class="tab"><h3>Selecciona tu servicio</h3><br>
				<div class="col-md-12">
				 	<div class="form-group">
			        		<ul class="nav nav-tabs opciones">
							<li class="active"><a data-toggle="tab" href="#Todos">TODOS</a></li>
							<?php  
							$contador=1;
							foreach ($grupo_servicios as $grupo) {
								$id_grupo_servicios = $grupo["id"];
								$nombre_grupo_servicio=explode(" ",$grupo['nombre']);		        			
							?>
							<li><a data-toggle="tab" href="#<?php echo 'menu-'.$contador; ?>"><?php  echo $nombre_grupo_servicio[0]; ?></a></li>
							<?php 
								
								$contador+=1;
							} 
							?>
						</ul>
						<div class="tab-content">
							<div id="Todos" class="tab-pane fade in active">
						    		<div class="panel-group intervalo" id="accordion1">

						    			<input type="text" name="intervalo_horas" id="resultado" style="display:none">

							   		<?php
									$valor_grupo_servicios_id=0;
									
									if ($valor_grupo_servicios_id==0) {


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
                                                WHERE s.status=1 AND s.id=$valor_grupo_servicios_id;");
									}

									$cont=2;
									foreach ($servicios as $res) {
									?>

									<div class="captura" style="display: none;">

										<?php echo $res['duracion'];?>

									</div>

						        		<div class="panel panel-default">
										<div class="panel-heading" style="display: flex;">
											<div class="col-xs-12 col-md-10">
												<h5 class="panel-title" style="left: 0;">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#<?php echo 'accordion0_'.$cont; ?>"><?php echo $res['nombre_servicio']; ?></a>
												</h5>
											</div>
										</div>

										<div id="<?php echo 'accordion0_'.$cont; ?>" class="panel-collapse collapse">
						            			<div class="panel-body desc_individual">
												<div class="col-md-12">
													<br>
													<p><?php echo $res['descripcion']; ?><a href="index?pagina=servicio_individual&servicio_id=<?php echo  $res['servicio_id']; ?>&grupo_servicio_servicio_id=<?php echo $res['grupo_servicio_id']; ?>" title=""> Mas detalles</a>
													</p>
													<hr>
													<div class="col-xs-6 col-md-4">
														<label>Precio <p>$<?php echo $res['precio']; ?></p></label>
													</div>

													<div class="col-xs-6 col-md-4">
														<label>Duración <p><?php echo $res['duracion']; ?>min</p></label>
													</div>
													
													<div class="col-xs-12 col-md-4">

														<label class="container"> 
															<input type="radio" class="capturar_valor" name="deacuerdo"   value="<?php echo $res['servicio_id'];?>" recibe_id="<?php echo $res['id'];?>" recibe_precio="<?php echo $res['precio'];?>" recibe_nombre="<?php echo $res['nombre_servicio'];?>" recibe_duracion="<?php echo $res['duracion'];?>" required>

															<div class="respuesta">
															</div>								  													 					
															<span class="checkmark" title="seleccionar y continuar" >seleccionar</span>
														</label>

							             				 </div>
						              				</div>					 						              
						            			</div>
						          			</div>
						        		</div>

						        		<?php 
						        			$cont++;
						        		}
									?>
								

							        
								</div>
								<span class="view-more">ver mas...</span>
						   	</div>
						    	<?php 
						    	$cont2=3;
							foreach ($grupo_servicios as $grupo) {
								$id_grupo_servicios = $grupo["id"];			        			
							?> 
						    	<div id="<?php echo 'menu-'.$id_grupo_servicios?>" class="tab-pane fade">
								<div class="panel-group intervalo" id="accordion<?php echo $id_grupo_servicios.'0'; ?>">

									<?php
									$valor_grupo_servicios_id=$id_grupo_servicios;								   
									
									if ($valor_grupo_servicios_id==-1) {

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
                                                WHERE s.status=1 AND s.id=$valor_grupo_servicios_id;");
									}


									$cont2=2;
									foreach ($servicios as $res) {
									?>
									<div class="panel panel-default">
							          	<div class="panel-heading" style="display: flex;">
							          	
										<div class="col-xs-12 col-md-10">

								            	<h5 class="panel-title">
								              		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion<?php echo $id_grupo_servicios.'0'; ?>" href="#<?php echo 'accordion'.$id_grupo_servicios.'_'.$cont2; ?>"><?php echo $res['nombre_servicio']; ?></a>
								             
								            	</h5>

								        	</div>

							          	</div>

							          <div id="<?php echo 'accordion'.$id_grupo_servicios.'_'.$cont2; ?>" class="panel-collapse collapse">

							            	<div class="panel-body desc_individual">
							                
							               	<div class="col-md-12">
							               		<br>
							               		<p><?php echo $res['descripcion']; ?><a href="index?pagina=servicio_individual&servicio_id=<?php echo  $res['servicio_id']; ?>&grupo_servicio_id=<?php echo $res['grupo_servicio_id']; ?>" title=""> Mas detalles</a></p>
							               		<hr>

												<div class="col-xs-6 col-md-4">
													<label>Precio <p>$<?php echo $res['precio']; ?></p></label>
												</div>

												<div class="col-xs-6 col-md-4">
													<label>Duración <p><?php echo $res['duracion']; ?>min</p></label>
												</div>

												<div class="col-xs-12 col-md-4">

													<label class="container"> 
														<input type="radio" class="capturar_valor" name="deacuerdo"   value="<?php echo $res['servicio_id'];?>" recibe_id="<?php echo $res['servicio_id'];?>" recibe_precio="<?php echo $res['precio'];?>" recibe_nombre="<?php echo $res['nombre_servicio'];?>" recibe_duracion="<?php echo $res['duracion'];?>" required>

														<div class="respuesta">
														</div>								  													 					
														<span class="checkmark" title="seleccionar y continuar" >seleccionar</span>
													</label>

					             				</div>

							               											 
							               	</div>
							                	<br>										   
							            	</div>
							          </div>
								</div>
								<?php 
							        	$cont2++;
								}
								?>
							        
							</div>
						</div>
						<?php 
						} 
						?>
					</div>
					
					</div>
				</div>
			</div>

			<!-- =============================
						STEP 2  DIA
			===============================-->

			<div class="tab"><h3>Seleccione el Dia:</h3><br>
				<div class="col-sm-12 col-md-12">
					<div class="form-group">
					<input id="idxhora" class="form-control id" name="id_xhora" type="text" style="display:<?php echo $display;?>">
					</div>
					<div class="form-group">
						<!-- <label><strong>Selecionar el Día:</strong></label> -->
						
						<input class="form-control dia" type="text" placeholder="Selecionar el Día" class="form-control date-picker hasDatepicker" name="booking_arrival_date" aria-required="true" id="ya" required>
						
						<!-- <input class="form-control dia" type="date" placeholder="Selecionar el Día" class="form-control date-picker hasDatepicker" name="booking_arrival_date" aria-required="true" id="ya"  min="2019-03-27" max="2019-03-30" required> -->
		     		</div>		     
				</div>					
			</div>

			<!-- =============================
						STEP 3  HORA
			===============================-->

			<div class="tab"><h3>Selecciona la hora:</h3><br>
		
				<div class="col-sm-12 col-md-12">

					<div class="form-group">

		        		<!-- input ocultos -->
						<!-- <input type="text" id="id_ser" value=""> -->
		        		<input type="text" id="dia_cita" value=""  style="display:<?php echo $display;?>" >
					   	<div class="respuestaEmp">
						
						
						</div>

					</div>
					<div class="form-group idempleado" style="display:<?php echo $display;?>">
											
					</div>

				</div>
					
			</div>
			
			<!-- =============================
						STEP 3 USUARIO
			===============================-->

			<div class="tab"><h3>Selecciona un usuario:</h3><br>
				<div class="col-md-12">
					
					<!-- SCRIPT PARA CACHAR LOS DATOS DEL USUARIO LOGUEADO -->
					<script>

					function myFunction() {

				    	var x = document.getElementById('user_type');
				    	document.getElementById('nombre_user').value   	= "";
     		    		document.getElementById('email_user').value    	= "";
		     			document.getElementById('telefono_user').value 	= "";

				      	if(x.value=='usuario' || x.value=='usuario_logeado' ) {
			     		    	//ACTIVAMOS LOS CAMPOS A RELLENAR
			     			document.getElementById('nombre_user').disabled 	= false
			     			document.getElementById('email_user').disabled 		= false
			     			document.getElementById('telefono_user').disabled 	= false
			     			//VASIAR LOS CAMPOS
			     			document.getElementById('nombre_user').value   = "";
							document.getElementById('email_user').value    = "";
				     		document.getElementById('telefono_user').value = "";

			     		}else if (x.value=='usuario_session_logeado') {
						    //ACTIVAMOS LOS CAMPOS A RELLENAR
			     			document.getElementById('nombre_user').disabled   = false
			     			document.getElementById('email_user').disabled 	  = false
			     			document.getElementById('telefono_user').disabled = false	     								     		  	
		     			 	document.getElementById('nombre_user').value   = "<?php echo $res_nombre; ?>";
			     			document.getElementById('email_user').value    = "<?php echo $res_email; ?>";
			     			document.getElementById('telefono_user').value = "<?php echo $res_phone; ?>";

			     		}else if (x.value=='usuario_session') {
							//     alert('No has iniciado sesión');
							swal("Algo salio mal", "No has iniciado sesión!", "warning");
						    	//ACTIVAMOS LOS CAMPOS A RELLENAR
			     			document.getElementById('nombre_user').disabled   = true
			     			document.getElementById('email_user').disabled 	  = true
			     			document.getElementById('telefono_user').disabled = true
			     			document.getElementById('nombre_user').value   	= "";
							document.getElementById('email_user').value    	= "";
				     		document.getElementById('telefono_user').value 	= "";
			     		
			     		}
			     		else {
			     			//DESACTIVAMOS LOS CAMPOS A RELLENAR
			     			document.getElementById('nombre_user').disabled    = true
			     			document.getElementById('email_user').disabled 	   = true
			     			document.getElementById('telefono_user').disabled  = true
			     			//VASIAR LOS CAMPOS
			     			document.getElementById('nombre_user').value   	= "";
							document.getElementById('email_user').value    	= "";
				     		document.getElementById('telefono_user').value 	= "";
			     		}
					}
					</script>
								
			        	<div class="form-group">
			        											
		     		    	<select name="usuario"  id="user_type" class="form-control" onchange="myFunction()"
						    required>

				            	<option value="nada"><p>Seleccionar usuario</p></option>
				            	<option value="<?php echo $usuario_session; ?>">Usar datos de mi cuenta</option>
				            	<option value="<?php echo $usuario; ?>">No tengo cuenta / Es un regalo </option>

				        	</select>
				        	
			        	</div>
			   	</div>

			   	<div class="col-sm-12 col-md-4">
			        	<div class="form-group">

        					<input type="text" name="id_cliente" value="<?php  echo $res_id; ?> " style="display: none;">
			        		<input type="text"  id="nombre_user" name="nombre"  placeholder="Ingrese  su Nombre/apellidos" required disabled>
			     
			        	</div>
			   	</div>

			   	<div class="col-sm-12 col-md-4">
					<div class="form-group">
						<!-- <label for="">Coreo electrónico</label> -->
						<input type="email" id="email_user" name="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Ingrese su Coreo electrónico" required disabled>
			     		
			       	</div>
			   	</div>

			   	<div class="col-sm-12 col-md-4">
					<div class="form-group">
						<!-- <label for="">Teléfono/móvil</label> -->
						<input type="text" id="telefono_user" name="telefono"  placeholder="Ingrese su Teléfono/móvil"  required disabled>
						<input type="text" name="dejarenblanco" value="nada" style="display: none;">
						<input type="text" name="nocambiar" value="http://" style="display: none;">

					</div>
			   	</div>
			</div>
			
			<!-- =============================
						STEP 4 RESUMEN
			===============================-->
			
			<div class="tab"><h4>RESUMEN:</h4>
				<div class="col-md-12">
				
					<label>Verifica tus datos antes de confirmar.</label>

					<div class="table-responsive">

						<table class="table">

							<thead>
							<tr class="active">
								<th>Especificaciones del servicio</th>
									<th></th> 
							</tr>
							</thead>
							<tbody class="respuestaResumen">
							<!-------------------------------------
							-- Aquí obtenemos los datos desde Ajax --
							--------------------------------------->
							</tbody>

					  	</table>
					  	
					</div>
												
				</div>

				¿forma de pago?:
				<div class="col-md-12">

				  	<div class="form-group">

						<div class="radio-inline checMoney" >
						<!-- <input type="radio" name="optradio"> -->
						<label class="container" for="oxxo"> 
							<input type="radio" name="opcion_pago" value="oxxo" id="oxxo" disabled>
							<span class="checkmark"></span>
						</label>
						<br>
						<img src="img/forma_de_pago/logopagooxxo.png">							      
						</div>

						<div class="radio-inline checMoney">							    	
						<label class="container" for="paypal"> 
							<input type="radio" name="opcion_pago" value="paypal" id="paypal" required>
							<span class="checkmark"></span>
						</label>
						<br>
						<img src="img/forma_de_pago/paypal.png">															      
						</div>

						<!-- <div class="radio-inline disabled checMoney">							     -->
						<!-- ]<input type="radio" name="optradio" disabled> -->
						<!-- <label class="container">  -->
							<!-- <input type="radio" name="opcion_pago"  disabled required> -->
							<!-- <span class="checkmark"></span> -->
						<!-- </label> -->
						<!-- <br> -->
						<!-- <img src="img/forma_de_pago/americanexpress.png">							      	 -->
						<!-- </div> -->
				 	</div>
				</div>						  
			</div>

			<!-- =============================
						STEP 5
			===============================-->

			<div class="tab"><h4>TÉRMINOS Y CONDICIONES: </h4>
				<div class="terminos">
					
					<h6> RESPONSIVA: </h6>

					Por medio de la presente yo: <span style="text-decoration: underline; text-transform: uppercase; font-weight: 900;"><?php echo $res_nombre; ?></span> certifico que he manifestado la verdad y además estoy ampliamente informado (a) del diagnóstico y plan de tratamiento, así como de las modificaciones que se juzgan necesarias para el mejoramiento del mismo.

					<h6>CONDICIONES DE SALUD:</h6>

					Para otorgar el servicio el cliente deberá proporcionar información en su historia clínica.
					<br><br>
					La empresa NO se hace responsable de negligencias o alteraciones a la verdad que proporcione.

					<h6>RETARDOS:</h6>

					Si usted llega 10 minutos tarde su servicio será recortada si usted llega 15 minutos tarde su servicio será cancelado.
					<br><br>
					Los paquetes tienen vigencia de 6 meses máximo para tomar los servicios, pasando este tiempo se le cobrara una reactivación de servicio tomado.

					<h6>POLÍTICAS DE CANCELACIÓN:</h6>

					En caso de no poder asistir  a su cita, le pedimos haga su cancelación con tres horas de anticipación. De lo contrario se toma como servicio tomado. Así mismo si desea cambiar su tratamiento debe avisar con mínimo de 2 horas de anticipación.

					<h6>DURANTE SU VISITA</h6>

					El cliente deberá mostrar un comportamiento adecuado y respetuoso hacia el personal, evitando insinuaciones o faltas a la moral. 
					De presentarse algunos de estos casos el servicio será suspendido.
					<br><br>
					Shifra Spa NO se hace responsable de objetos olvidados dentro de las instalaciones.
					<br><br>
					No hay devoluciones. Sin excepción.
					<br><br>
					Es mi decisión libre aceptar el servicio que he adquirido, deslindando a ANDARES SPA & MEDICAL CENTER S DE RL DE CV  de cualquier responsabilidad Civil, contractual y extracontractual que surja durante la realización de los servicios así como el pago de cualquier indemnización.
					
				</div>

				<br>
		     	<!-- <input type="radio" name="optradio" placeholder="" style="width: 20px;">He leído y acepto los términos		 -->
	     	 	<div class="radio-inline checTermin" >He leído y acepto los términos	
		     	 	<label for="terminos" class="container" >
					  	<input type="radio" name="terminos" id="terminos" value="deacuerdo" required>
					  	<span class="checkmark"></span>
					</label>
	      		</div>

	      		<!-- <a class="btnPagar"> pagar</a> -->
			</div>
			   
			<!-- INDICADORES DE LOS PASOS: -->
			<div class="col-md-12" style="text-align:center;margin-top:40px;">

			  	<!-- SERVICIO -->
		  	   	<span class="step"></span>
		  	   	<!-- DIA -->
			  	<span class="step"></span>
			  	<!-- HORA -->
			  	<span class="step"></span>
			  	<!-- USUARIO -->
			  	<span class="step"></span>
			  	<!-- RESUMEN/METODO PAGO -->
		  		<span class="step"></span>
		  		<!-- TERMINOS -->
		  		<span class="step"></span>			  	

			</div>

		</form>
			
		</div>
    	<div class="col-sm-12 modal-footer">
    		<?php echo $MJEerror; ?>

    		<button type="button" class="btn" id="prevBtn" onclick="nextPrev(-1)">Regresar</button>
	    	<button type="button" name="siguiente" class="btn" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
        	<button type="button" class="btn" data-dismiss="modal">Salir</button>
        
		</div> 		
		</div>
		</div>	
		</div>
	</div>
</div>


