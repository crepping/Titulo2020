<?php
include ("../config/config.php");
//$cnn =Conectar();
session_start();
if(!isset($_SESSION['$id_login'])){
  session_destroy();
  header("location:../../index.php");
}
?>