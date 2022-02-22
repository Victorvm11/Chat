<?php

include("conexion.php");
include("Cabecera.php");


    $sentencia =("DELETE  FROM chat");
    $resultado = mysqli_query($conn, $sentencia);

        echo json_encode("Borrado correctamente");
        
                    