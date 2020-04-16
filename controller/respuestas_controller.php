<?php
//Llamada al modelo
require_once("../model/respuestas_model.php");
$resp=new respuestas_model();
$respuestas=$resp->get_respuestas();
 
//Llamada a la vista
require_once("../view/respuestas.php");
?>