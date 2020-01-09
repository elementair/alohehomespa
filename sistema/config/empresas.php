<?php
class Empresas{
    public $empresas;
    public function __construct(){
        $empresa= array(
            'nombre_empresa'   =>'SHIFRA SPA',

            /*
            * 
            **************************************
            *
            LOCALHOST
            *
            **************************************
            *
            */
           
            // 'nombre_base_datos'=>'creactiv_shifra',
            // 'host'             =>'localhost',
            // 'user'             =>'root',
            // 'pass'             =>'');

            /*
            * 
            **************************************
            *
            SERVER
            *
            **************************************
            *
            */
            'nombre_base_datos'=>'creactiv_aloehomespa',
            'host'             =>'localhost',
            'user'             =>'creactiv_aloe',
            'pass'             =>'aloe2020');
           
        $this->empresas = array('99'=>$empresa);
    }
}