<?php
$correo=$_POST['usuario'];
$password=$_POST['pass'];

require_once 'usuario.php';
$usuario=new Usuario();
$resultado=$usuario->AutentificarUsuario($correo,$password);
if(count($resultado)>0){
    //echo 'existe';
    foreach ($resultado as $registroEcontrado) {
        session_start();
        $_SESSION['nombreUsuario']=$registroEcontrado['usuario'];
        $_SESSION['nombreBienvenida']=$registroEcontrado['nombre'];
        $_SESSION['nipUsuario']=$registroEcontrado['nip'];
        header("Location: vistas/menuprincipal.php");
    }
}
else{
    header("Location:index.php");
    
}
   
?>