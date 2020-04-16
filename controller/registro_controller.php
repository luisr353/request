<?php
$name = $_POST['name'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];
$clave = $_POST['clave'];
$area  = $_POST['area'];	
$clave2 = $_POST['clave2'];

  if(empty($email) || empty($clave) || empty($clave2))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($clave == $clave2){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        require_once('../model/usuarios_model.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($name, $email, $clave, $nivel, $area);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }




?>
