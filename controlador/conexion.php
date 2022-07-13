

<?php
//archivo de conexión a la base de datos		
$servername="localhost";
$username="root";
$password="";
$dbname="bd_escuela2";

$db_connection = mysqli_connect($servername,$username,$password,$dbname);
////////////////////////////////(host, usuario, clave, basededatos)
// Verificar la conexiòn

if (mysqli_connect_errno()){
    echo "Error al intentar conectarse con MySQL: " . mysqli_connect_error();
}
?>
