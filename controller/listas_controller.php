<?php
//Llamada al modelo
require_once("../model/listas_model.php");

$sol=new listas_model();

	$listaareas=$sol->get_areas();
	$listaciudades=$sol->get_ciudades();
	$listacategorias=$sol->get_categorias();
	$listaclientes=$sol->get_clientes();
	$listamedios=$sol->get_medios();
	$listatiposolicitudes=$sol->get_tiposolicitudes();
	$listavias=$sol->get_vias();

	if (isset($_POST['eliminarArea'])) {

		$id = $_POST['eliminarArea'];
		echo "-------->".$id;
		$eliminarArea=$sol->eliminarArea($id);

		}

	if (isset($_POST['eliminarCategoria'])) {

		$id = $_POST['eliminarCategoria'];
		echo "-------->".$id;
		$eliminarCategoria=$sol->eliminarCategoria($id);

		}
	if (isset($_POST['eliminarCiudad'])) {

		$id = $_POST['eliminarCiudad'];
		echo "-------->".$id;
		$eliminarCiudad=$sol->eliminarCiudad($id);

		}
	if (isset($_POST['eliminarCliente'])) {

		$id = $_POST['eliminarCliente'];
		echo "-------->".$id;
		$eliminarCliente=$sol->eliminarCliente($id);

		}
		
	if (isset($_POST['eliminarMedio'])) {

		$id = $_POST['eliminarMedio'];
		echo "-------->".$id;
		$eliminarMedio=$sol->eliminarMedio($id);

		}		
	if (isset($_POST['eliminarTipoSolicitud'])) {

		$id = $_POST['eliminarTipoSolicitud'];
		echo "-------->".$id;
		$eliminarTipoSolicitud=$sol->eliminarTipoSolicitud($id);

		}	
	if (isset($_POST['eliminarVias'])) {

		$id = $_POST['eliminarVias'];
		echo "-------->".$id;
		$eliminarVia=$sol->eliminarVias($id);

		}		
	?>