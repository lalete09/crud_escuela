<?php
require 'conexion.php';
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);
$verifico_email = mysqli_query($db_connection, "SELECT email FROM usuarios WHERE email = '$email'");
  if(mysqli_num_rows($verifico_email) > 0){    
    echo'<script type="text/javascript">
    alert("Ya existe una cuenta con este email registrada");
    window.location.href="../vistas/registrar.html";
    </script>';
  }else{
   
    // Ahora ingreso los valores previamente preparados
   $inserto_usuario = mysqli_query($db_connection, "INSERT INTO usuarios (fullname, email, password) VALUES ('$fullname', '$email', '$psw')");
   // Verifico errores y preparo mensajes
if($inserto_usuario === TRUE){
    echo'<script type="text/javascript">
    alert("Usuario guardado con exito");
    window.location.href="../vistas/login.php";
    </script>';
}else{
    echo'<script type="text/javascript">
    alert("No se ha podido guardar el usuario");
    window.location.href="../vistas/registrar.html";
    </script>';
}
}
?>

