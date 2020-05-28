<?php
include "../config/config.php";
$cnn = Conectar();
$codigo = $_POST['id'];
$nom = $_POST['car'];

$hoy = date("Y-m-d H:i:s");

$ver ="SELECT * FROM mis_productos WHERE Barra ='$codigo' ";
$busqueda= mysqli_query($cnn,$ver);
if(mysqli_num_rows($busqueda)>0) { 
   echo"<br>"."<br>";
echo"<script>alert('El producto ya Existe')</script>";
echo"<script type='text/javascript'>window.location='../pages/ingresoproductos.php'</script>";
} else {
$in="insert into reserva(id_cliente,id_vehiculo) values ('$codigo','$nom')";   
$dato=mysqli_query($cnn,$in); 
if (!$dato) {
echo"<br>"."<br>";
  echo"<script>alert('Error de ingresar producto')</script>";
}else{
echo"<br>"."<br>";
echo"<script>alert('Producto Ingreso')</script>";
echo"<script type='text/javascript'>window.location='../pages/ingresoproductos.php'</script>";
//echo"<script type='text/javascript'>window.location='alumnotodos.php'</script>";
}
}
?>