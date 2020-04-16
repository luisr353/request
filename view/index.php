<?php

  session_start();

  // Validamos que exista una session y ademas que el nivel que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] < 0){
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
	  <h1>Dashboard</h1>	
	</div>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
       
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i>Bar Chart Example</div>
            <div class="card-body">
              <canvas id="myBarChart" width="100" height="50"></canvas>
            </div>
            
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
          
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
       
    <script src="../js/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-charts.min.js"></script>
    <!-- fin de los javascript--> 
	
   
    <?php include "inc/footer.php"?>
    
