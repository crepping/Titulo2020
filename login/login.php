<?php
include "../config/config.php";
session_start();
$cnn = Conectar();
   $user=$_POST['login'];
   $clave=$_POST['pass'];
   $sql="Select * from usuario where user='$user' and pasword='$clave'";
$rs=mysqli_query($cnn,$sql);
if (mysqli_num_rows($rs)!=0) 
   {
   if ($row=mysqli_fetch_array($rs)) 
   {  
$_SESSION['$nuestroNombre']=$row["nombres"];
$_SESSION['$apellidos']=$row["apellidos"];
$_SESSION['$nestroCargo']=$row["cargo"];
$_SESSION['$nuestroTipo']=$row["tipo"];
$_SESSION['$id_login']=$row["id"];

   
   switch ($_SESSION['$nuestrotipo']=$row["tipo"]) 
   {

     case 1:
       echo"<script>alert('Bienvenido(a)')</script>";
       echo"<script type='text/javascript'>window.location='../vendedor/Pages/ingresoproductos.php'</script>";
     break;

     case 2:
      echo"<script>alert('Bienvenido(a)')</script>";
       echo"<script type='text/javascript'>window.location='mecanico/listacar.php';</script>";
       break;
     
     case 3:
      echo"<script>alert('Bienvenido(a)')</script>";
       echo"<script type='text/javascript'>window.location='acp_precitacion1.php';</script>";
       break;

     default:
       echo"<script>alert('Usted no es usuario') </script>";
       echo"<script type='text/javascript'>window.location='index.php';</script>";
       break;
    

    }
    }
    
    }else{

      echo"<script>alert('usuario o clave Incorrecta') </script>";
        
   }


?>