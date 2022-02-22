<?php
include("conexion.php");//incluimos la pagina conexion.php
include("Cabecera.php");
$comentario = $_POST['comentario'];//cogemos los valores de nombre con el post y los guardamos en una variable
$usuario = $_POST['usuario'];
if($comentario!=''){
        $sentencia = $conn->prepare("INSERT INTO Chat(Usuario,Mensaje) VALUES (?,?)");
        $sentencia->bind_param("ss",$usuario,$comentario);
        $sentencia->execute();
        echo json_encode("Funciona correctamente");
    }else{
        echo "Error";
    }                                       
 

?>
