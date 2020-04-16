<!-- Inicio menu lateral -->   
<nav class="navbar-primary">
  <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>  
  
  <?php if($_SESSION['nivel'] == 1){

		include("menu_administrador.html");}
	
	else{
	
		include("menu_usuario.html");} 
		 ?>
</nav>