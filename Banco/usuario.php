<?php
class Usuario {
    public function AutentificarUsuario($correo,$password){
        try {
            include 'conexion.php';
            $conectar= new Conexion();
            $consulta=$conectar->prepare("SELECT * FROM login WHERE 
                      usuario=:correo AND nip=:password");
            $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
            $consulta->bindParam(":password",$password,PDO::PARAM_INT); 
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();         
        } catch (Exception $e) {
            return 0;
        }
    }

    public function ObtenerSaldo($nipSesion){
        include 'conexion.php';
        $conectar=new Conexion();
        $consulta="SELECT * FROM saldos WHERE nip=:nipSesion";
        $query=$conectar->prepare($consulta); //preparas la consulta
        $query->bindParam(":nipSesion",$nipSesion,PDO::PARAM_STR);
        $query->execute(); //ejecutas
        $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query->fetchAll();
    }

    public function ObtenerIngreso($nipSesion){
        include 'conexion.php';
        $conectar=new Conexion();
        $consulta="SELECT * FROM saldos WHERE nip=:nipSesion";
        $query=$conectar->prepare($consulta); //preparas la consulta
        $query->bindParam(":nipSesion",$nipSesion,PDO::PARAM_STR);
        $query->execute(); //ejecutas
        $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query->fetchAll();
    }


    public function ModificarPub($ingreso,$nipSesion){
        include 'conexion.php';
        $conectar=new Conexion();
        $nipSesion = intval($nipSesion);
       
        $consulta=$conectar->prepare("UPDATE saldos SET ingresos=:ingreso
                                      WHERE nip=:nipSesion");
                                     
                $consulta ->bindParam(":ingreso",$ingreso,PDO::PARAM_INT);   
                
                $consulta ->bindParam(":nipSesion", $nipSesion, PDO::PARAM_INT);
                                                           
        $consulta->execute();
        return true;
    }

    public function ModificarEgreso($egreso,$nipSesion){
        include 'conexion.php';
        $conectar=new Conexion();
        $nipSesion = intval($nipSesion);
       
        $consulta=$conectar->prepare("UPDATE saldos SET egresos=:egreso
                                      WHERE nip=:nipSesion");
                                     
                $consulta ->bindParam(":egreso",$egreso,PDO::PARAM_INT);   
                
                $consulta ->bindParam(":nipSesion", $nipSesion, PDO::PARAM_INT);
                                                           
        $consulta->execute();
        return true;
    }

    public function ModificarSaldo($saldo,$nipSesion){
        include 'conexion.php';
        $conectar=new Conexion();
        $nipSesion = intval($nipSesion);
       
        $consulta=$conectar->prepare("UPDATE saldos SET saldo=:saldo
                                      WHERE nip=:nipSesion");
                                     
                $consulta ->bindParam(":saldo",$saldo,PDO::PARAM_INT);   
                
                $consulta ->bindParam(":nipSesion", $nipSesion, PDO::PARAM_INT);
                                                           
        $consulta->execute();
        return true;
    }
}


?>