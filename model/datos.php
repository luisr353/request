<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
$sql="SELECT *  FROM tablaName WHERE id ORDER BY fecha DESC";
$result=  mysqli_query($conexion, $sql);
$nfilas=  mysqli_num_rows($result);