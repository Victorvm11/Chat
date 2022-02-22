<?php
include("conexion.php");//incluimos la pagina conexion.php
include("Cabecera.php");

        $sentencia = "SELECT * FROM chat ";
        $resultado = mysqli_query($conn, $sentencia);
        $resultado = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        echo json_encode($resultado);
        ?>