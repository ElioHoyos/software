<?php

//llamar al controlador
require_once "controlador/controlador.php";

//llamar al modelo
require_once "modelo/Enlaces.php";

//instanciar para poder cargar la página
$plantilla = new PlantillaControlador();
$plantilla ->controlador();