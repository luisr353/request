<?php
require_once("../db/db.php");
class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
      /*
        Antes que nada para los que no saben que es parent
        lo que estamos haciendo es llamar un metodo de una clase
        heredada es decir al yo colocar parent::conectar, lo que hago es
        llamar al metodo conectar de la clase patiente en este caso conexion     */


      # Nos conectamos a la base de datos
      parent::conectar();

      /*
        Lo segundo que debemos hacer es filtrar la informacion que el usuario
        ingresa, recuerda nunca debes confiar en los datos que el usuario
        envia, asi que teniendo eso en cuenta usaremos unos metodos de la clase conexion
        que ayudaran a realizar los filtros necesarios
      */

      // El metodo salvar sirve para escapar cualquier comillas doble o simple y otros caracteres que pueden vulnerar nuestra consulta SQL
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);
		
      /*
        Para la validación del usuario podemos hacer dos cosas,
        validar que exista el email solamente y mostrar error en caso
        de que no, o validar ambos campos y mostrar un unico error,
        en este caso validare el usuario con ambos campos.
      */

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $consulta = 'select idusuario, nombre, nivel, clave, area from usuarios where email="'.$user.'" and clave= MD5("'.$clave.'")';
      /*
        Verificamos si el usuario existe, la funcion verificarRegistros
        retorna el número de filas afectadas, en otras palabras si el
        usuario existe retornara 1 de lo contrario retornara 0
      */
      $verificar_usuario = parent::verificarRegistros($consulta);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        /*
          Realizamos la misma consulta de la linea 47 pero esta ves transformaremos el resultado en un arreglo,
          ten mucho cuidado con usar el metodo consultaArreglo ya que devuelve un arreglo de la primera fila encontrada
          es decir, como nosotros solo validamos a un usuario no hay problema pero esta funcion no funciona si
          vas a listar a los usuarios.
        */

        $user = parent::consultaArreglo($consulta);

        /*
          Bien espero ser un poco claro en esta parte, la variable user
          en la linea 69 pasa a ser un arreglo con los campos consultados en la linea
          48, entonces para acceder a los datos utilizamos $user[nombre_del_campo] Ok?
          bueno hagamos el ejercicio.
        */

        /*
          Inicializamos la sessión | Recuerda con las variables de sesión
          podemos acceder a la informacion desde cualquiera pagina siempre y cuando
          exista una sesión y ademas utilicemos el codigo de la linea 84
        */

        session_start();

        /*
          Las variables de sesion son muy faciles de usar, es como
          declarar una variable, lo unico diferente es que obligatoria mente
          debes usar $_SESSION[] y .... el nombre de la variable ya no sera asi
          $miVariable sino entre comillas dentro del arreglo de sesion, haber me
          dejo explicar, $_SESSION['miVariable'], recuerda que como declares la variable
          en este archivo asi mismo lo llamaras en los demas.
        */

        $_SESSION['id']     = $user['idusuario'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['nivel']  = $user['nivel'];
		$_SESSION['area']  = $user['area'];
		  
		  /*
          Recuerda:
          nivel con valor: 1 es: Administrador
          nivel con valor: 2 es: Editor
          
        */

        // Verificamos que cargo tiene el usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['nivel'] < 0){
          echo 'view/index';
        }


      }else{
        // El usuario y la clave son incorrectos
        echo 'error_3';
      }


      # Cerramos la conexion
      parent::cerrar();
    }

    public function registroUsuario($name, $email, $clave, $nivel, $area)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);
	  $nivel = parent::filtrar($nivel);
	  $area = parent::filtrar($area);


      // validar que el correo no existe
      $verificarCorreo = parent::verificarRegistros('select idusuarios from usuarios where email="'.$email.'" ');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('insert into usuarios(nombre, email, clave, nivel, area) values("'.$name.'", "'.$email.'", MD5("'.$clave.'"), "'.$nivel.'", "'.$area.'" )');

      }

      parent::cerrar();
    }
 
    public function get_usuarios()
	{
		parent::conectar();
		
        $consulta=parent::query("SELECT u.idusuario, u.nombre, u.email, u.clave, u.nivel, u.area, ts.tipo_usuario, t.areas FROM usuarios u
		INNER JOIN tipousuarios ts ON u.nivel = ts.id  
		INNER JOIN areas t ON u.area = t.idareas 
		ORDER BY u.idusuario ASC");
        
		while($filas=$consulta->fetch_assoc()){
            $this->usuarios[]=$filas;
        }
        return $this->usuarios;
   	}
		
	public function get_tipousuarios()
	{
		parent::conectar();
        
		$consulta=parent::query("SELECT tipo_usuario, nivel FROM tipousuarios");
        while($filas=$consulta->fetch_assoc()){
            $this->tipousuarios[]=$filas;
        }
        return $this->tipousuarios;
    }
	
}

?>

