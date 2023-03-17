<?php 
$mysql = new mysqli("localhost", "root", "", "UCABD");
if($mysql ->connect_error){
    echo "Error: ";
    die("Error de conexión");
}
else{
    echo "Conexion exitosa"; 
}
?>