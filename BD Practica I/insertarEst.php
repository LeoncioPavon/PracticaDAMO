<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'conexion.php';
        $nombres= $_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $carrera=$_POST["carrera"];
        $año=$_POST["año"];
        $my_query = "insert into ciudad(nombre, activo) values ('".$nombres."', '".$apellidos."'
        '".$carrera."', '".$año."',)" ;
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "\n Registro realizado con exito";
        }else{
            echo "Error al insertar registro";
        }
    }
?>s