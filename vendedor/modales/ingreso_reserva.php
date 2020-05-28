<?php
include '../config/config.php';
$cnn=Conectar();
 $variable=$_GET['id_cliente'];
 $sql ="select *from cliente where id_cliente ='$variable'" ;
 //"rut_apoderado='$variable'
$rs = mysqli_query($cnn,$sql);

            if ( $row = mysqli_fetch_array($rs) ) {
               
               $cod=$row["id_cliente"];
                $rut=$row["nombres"];
                $rut_a=$row["apellidos"];
                $alumno=$row["telefono"];
                $id=$row["email_cl"];
                  
            }
		$citado=$_SESSION['$nuestroNombre']." ".$_SESSION['$apellidos'];
 ?>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="Ingresar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="" values="<?php echo $rut; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>