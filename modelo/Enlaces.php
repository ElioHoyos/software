<?php

class EnlacesPaginas{

    static public function enlacesPaginasModel($enlacesModel){

        if($enlacesModel == "registro" || 
           $enlacesModel == "ingreso"  ||
           $enlacesModel == "usuarios" ||
           $enlacesModel == "salir"){

            $module = "vistas/layout/".$enlacesModel.".php";

        }else if($enlacesModel == "index"){
            $module = "vistas/layout/inicio.php";
        }else{
            $module = "vistas/layout/inicio.php";
        }
        return $module;
    }
    
}