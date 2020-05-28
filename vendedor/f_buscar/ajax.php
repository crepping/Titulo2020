<?php
//  include '../config/config.php';
// // include '../../login/session.php';
// $cnn=Conectar();
// if (!empty($_POST)){
//     if ($_POST['action']=='infoProducto'){
        
//  $variable=$_POST['codigo'];
//  $sql ="select *from vehiculo where id_cliente ='$variable'" ;
//  //"rut_apoderado='$variable'
// $rs = mysqli_query($cnn,$sql);

//             if ( $row = mysqli_fetch_assoc($rs) ) {
                
              
//                echo json_encode($row,JSON_UNESCAPED_UNICODE);
//                   exit;
//             }
//             echo "error";
//             exit;
//         }
//     }
$conexion = mysqli_connect("localhost","root","","proyecto");
if (!empty($_POST)){
         if ($_POST['action']=='infoProducto'){
            $variable=$_POST['codigo'];
            $query = mysqli_query($conexion,"select * from vehiculo where id_cliente='$variable'");
            while ($dat=mysqli_fetch_assoc($query)){
                $arr[]=$dat;
            }
            echo json_encode($arr);
         }
    }
 ?>


 
 