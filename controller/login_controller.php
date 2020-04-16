<?php

  # Leemos las variables enviadas mediante Ajax
  $user = $_POST['user_php'];
  $clave = $_POST['clave_php'];

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if(empty($user) || empty($clave)){

    # mostramos la respuesta de php (echo)
    echo 'error_1';

  }else{
	  	# filter valida si es email en este caso el usuario
	   if(filter_var($user, FILTER_VALIDATE_EMAIL)){

		# Incluimos la clase usuario
		require_once('../model/usuarios_model.php');

		# Creamos un objeto de la clase usuario
		$usuario = new Usuario();

		# Llamamos al metodo login para validar los datos en la base de datos
		$usuario -> login($user, $clave);

    }else{
      echo 'error_2';
    }

  }


?>
