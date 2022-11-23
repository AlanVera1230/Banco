<?php

$saldo=$_POST['saldo'];
$nipSesion = $_POST['nip']; 

require_once 'usuario.php';
$nuevaPub=new Usuario();
$resultado=$nuevaPub->ModificarSaldo($saldo,$nipSesion);
if($resultado){
    
    header("Location: vistas/saldo.php");
}
else{
    //echo $resultado; 
    header("Location: vistas/menuprincipal.php");
}
?>