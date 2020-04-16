<?php

  session_start();

  if($_SESSION['nivel'] > 0){
    header('location: ../view/index');
  }


 ?>
