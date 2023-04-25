<?php
    class Usuario{
        public function ObtenerUsuario(){
            include 'conexion.php'; //Llama al archivo
            $conecta=new Conectar(); //Crea la instancia
            $consulta="SELECT * FROM usuarios";
            $query=$conecta->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        }
        public function CrearUsuario ($Nombre,$Correo,$Clave,$Telefono,$Estado,$Municipio,$Colonia,$CodigoPostal){
            try{
                include'conexion.php';
                $conecta=new Conectar();
                $consulta= $conecta->prepare("INSERT INTO Usuarios(Nombre,Correo,Clave,Telefono,Estado,Municipio,Colonia,CodigoPostal)
                VALUES(:Nombre,:Correo,:Clave,:Telefono,:Estado,:Municipio,:Colonia,:CodigoPostal)");
                $consulta->bindParam(":Nombre", $Nombre, PDO:: PARAM_STR);
                $consulta->bindParam(":Correo", $Correo, PDO:: PARAM_STR);
                $consulta->bindParam(":Clave", $Clave, PDO:: PARAM_STR);
                $consulta->bindParam(":Telefono", $Telefono, PDO:: PARAM_STR);
                $consulta->bindParam(":Estado", $Estado, PDO:: PARAM_STR);
                $consulta->bindParam(":Municipio", $Municipio, PDO:: PARAM_STR);
                $consulta->bindParam(":Colonia", $Colonia, PDO:: PARAM_STR);
                $consulta->bindParam(":CodigoPostal", $CodigoPostal, PDO:: PARAM_STR);
                $consulta->execute();
                return true;
            }catch(Exception $e){
                return false;
            }
        }
    }
?>