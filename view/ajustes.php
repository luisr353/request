<?php

  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../index.php');
  }

?>


<?php include "inc/header.php"?> 

  <body style="background-color:#f7f8f9;">
   
  <?php include "inc/cabecera.php"?>  
    
            
<div class="main-content">
	<div class="sesionactiva">
	  <h1>Ajustes</h1>	
	</div>

<h1> I am the main content </h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint assumenda quae aliquid voluptatibus quia, ea, ad natus magni repellat earum, culpa iure tempore. Enim dolor eaque minima voluptas ducimus?</p>
</div>
	
       
   <!-- Llamar los javascript-->
     <script src="../js/doSearch.js"></script>
    <script src="../js/hora.js"></script>
    <script src="../js/vermodal.js"></script>
     <!-- Jquery -->
     
    <?php include "inc/footer.php"?>  
