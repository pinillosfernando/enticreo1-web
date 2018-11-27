<?php
//Conectarse a la BD.
class ConexionSAB extends mysqli{
    //Constructor que hace la conexión a la Base de Datos de SAB
    public function __construct() {                       
        parent::__construct('127.0.0.1','root','','sab'); //Servidor, super usuario, contraseña, bd
        $this->query("SET NAMES 'utf8';"); //Para tener compatibilidad de caracteres
    }
    //Método que obtiene los datos de un usuario en particular en la Tabla de Usuarios
    public function datosUsuario($NombreUsuario) {        
        $sql= $this->query("SELECT `id`, `Apellidos`, `Nombres`, `Usuario`, `Contrasena`, `Rol`, `CorreoElectronico`, `Foto`, `Cliente001`, `Unidad` FROM `usuarios` WHERE `Usuario`='$NombreUsuario';");
        return mysqli_fetch_array($sql);
    }
    //Método que obtiene los datos de un conjunto en particular en la Tabla de Agrupaciones01
    public function datosAgrupación($idAgr) {        
        $sql= $this->query("SELECT `id`, `Nombre`, `NIT`, `Ciudad`, `Pais`, `Barrio`, `Dirección`, `Estrato`, `CoordX`, `CoordY`, `TelPublico`, `TelPrivado`, `Movil`, `CorreElectronico`, `Imagen1`, `Imagen2`, `Imagen3`, `Logo` FROM `cliente001` WHERE `id`='$idAgr';");
        return mysqli_fetch_array($sql);
    }
}
?>

