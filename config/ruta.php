<?php
	/* Rutas universales */
    
  
        // HTTP
        $ruta_universal = "http://localhost/alohehomespa/";
        // BD Local
        $bd_name='creactiv_alohehomespa';
        $bd_user='root';
        $bd_pass='';
 


    $ruta_universal_sistema = $ruta_universal."sistema/";

    $ruta_universal_calendario = $ruta_universal_sistema."calendario/";


    $citas_status=1;    
    /*
    * 
    **************************************
    *
    o = inactivo
    1 = activo
    *
    **************************************
    *
    */
   if ($citas_status==1) {
        /* Ruta citas activas*/
        $modal_cita="#Modal_formulario_cita";
        $modal_cita_individual="#Modal_formulario_cita_individual";

    }
    else{

        /* Ruta citas lanzamiento */
        $modal_cita="#Modal_formulario_cita_lanzamiento";
        $modal_cita_individual="#Modal_formulario_cita_lanzamiento";

    }

?>