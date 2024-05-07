<?php 

class PlantillaControlador{

    static public function controlador(){

        include "vistas/template.php";

    }

    #INTERACCION CON EL USUARIO
    static public function enlacesPaginaController(){

        if(isset($_GET["action"])){
            $enlacesController = $_GET["action"];
        }else{
            $enlacesController = "index";
        }
        #instanciar modelo
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }

}