<?php
//Llamada al modelo
require_once("../model/solicitudes_model.php");
$sol=new solicitudes_model();
$datos=$sol->get_solicitudes();

//Llamada a la vista
require_once("../view/solicitudes.php");



?>