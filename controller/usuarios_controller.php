<?php
//Llamada al modelo
require_once("../model/usuarios_model.php");
require_once("../view/usuarios.php");
require_once("../model/listas_model.php");

$usua=new Usuario();

$usuarios=$usua->get_usuarios();
$niveles=$usua->get_tipousuarios();

$sol=new listas_model();
$listaareas=$sol->get_areas();
 
if (isset($_POST['eliminarUsuario'])) {
	
	$id = $_POST['eliminarUsuario'];
	echo "-------->".$id;
	$eliminarUsuario=$usua->eliminarUsuario($id);

	}
?>

