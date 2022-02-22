<?php
    include("conexion.php");
    include("Cabecera.php");
 
$usuario = $_POST['usuario'];//cogemos los valores de nombre con el post y los guardamos en una variable
$password = $_POST['password'];
    $sentencia =("SELECT * FROM registro");
    $resultado = mysqli_query($conn, $sentencia);
    $resultado=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
 
        foreach($resultado as $opcion){
        $nombre=$opcion["Usuario"];
        $pass=$opcion["Contraseña"];
        $id=$opcion["ID_Usuario"];
        if($usuario==$nombre && $password== $pass){
            echo json_encode("Funciona");
           
        }
        }  
   
       
   
    ?>

