<?php
include("conexion.php");//incluimos la pagina conexion.php
include("Cabecera.php");
 
try{
    $usuario = $_POST['usuario'];//cogemos los valores de nombre con el post y los guardamos en una variable
    $password = $_POST['password'];
    $encontrado=false;
if($usuario!='' && $password!='' ){
    $sentencia =("SELECT * FROM registro");

    foreach ($conn->query($sentencia) as $dato){
        if($dato["Usuario"]==$usuario){
            echo json_encode("NOFunciona");
            $encontrado=TRUE;
        }
    }
    if($encontrado==false){
        $sentencia = $conn->prepare("INSERT INTO registro(Usuario,Contraseña) VALUES (?,?)");
        $sentencia->bind_param("ss",$usuario,$password);
        $sentencia->execute();
        echo json_encode("Funciona");
    }

    }else{
        echo "Error";
    }
    }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
    }

 

 

?>