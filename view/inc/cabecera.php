<!-- Inicio cabecera --> 
    <nav class="navbar navbar-default navbar-global navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index">Request</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-user navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo ucfirst($_SESSION['nombre']); ?></a></li>
            <li><a href="../controller/cerrarSesion.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
          </ul>
        </div><!-- nav-collapse -->
      </div>
    </nav>
  <!-- Fin cabecera --> 
  
  <!-- Inicio menu lateral -->   
<nav class="navbar-primary">
  <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>  
  
  <?php if($_SESSION['nivel'] == 1){

    include("menu_administrador.php");}
  
  else{
  
    include("menu_usuario.php");} 
     ?>
</nav>