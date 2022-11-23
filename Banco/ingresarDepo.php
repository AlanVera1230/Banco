<?php

$ingreso=$_POST['ingreso'];
$nipSesion = $_POST['nip']; 

require_once 'usuario.php';
$nuevaPub=new Usuario();
$resultado=$nuevaPub->ModificarPub($ingreso,$nipSesion);
if($resultado){
    
    header("Location: vistas/ingreso.php");
}
else{
    //echo $resultado; 
    header("Location: vistas/menuprincipal.php");
}
?>