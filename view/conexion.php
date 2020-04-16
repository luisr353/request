<?php
function Conectarse()//Método para conectarse a la base de datos
{
	$objConexion = new mysqli("localhost","root","","contact");//Se envia la ubicación, el usuario, la contraseña y el nombre de la base de datos
$acentos = $objConexion->query("SET NAMES 'utf8'");
	if ($objConexion->connect_errno)
	{
		echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;//Mesaje de error de conexion
		exit();
	}
	else
	{
		return $objConexion;
	}
}
?> 
