<?php

$egreso=$_POST['egreso'];
$nipSesion = $_POST['nip']; 

require_once 'usuario.php';
$nuevaPub=new Usuario();
$resultado=$nuevaPub->ModificarEgreso($egreso,$nipSesion);
if($resultado){
    
    header("Location: vistas/egreso.php");
}
else{
    //echo $resultado; 
    header("Location: vistas/menuprincipal.php");
}
?>