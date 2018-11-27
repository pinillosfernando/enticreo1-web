<?php
require('ProcesoConexion.php');
if (isset($_POST['usuario']) and isset($_POST['contrasenia'])){
    $db= new ConexionSAB();
    $dato=$db->datosUsuario($_POST['usuario']);  
    if(empty($_POST['usuario'])or empty($_POST['contrasenia'])){
        //echo 'Diligencie los campos de Usuario y Contraseña';
        header('location: 00MiCuenta.php?err=1');//
    }else {
        if($_POST['usuario']==$dato['Usuario'] && $_POST['contrasenia']==$dato['Contrasena']){
            session_start();
            $_SESSION['SesionUsuario']=$_POST['usuario'];
            $_SESSION['SesionAgrupacion']=$dato['Cliente001'];
            if($dato['Rol']==1){
                header('location: 01Administrador.php');
            }
            if($dato['Rol']==2){
                header('location: 02Residente.php');
            }
            
        }else {
            //echo 'Usuario y Contraseña no concuerdan';
            header("location: 00MiCuenta.php?err=2");
        }
    }
}else{
    //echo 'No están definidas las variables';
    header('location: 00MiCuenta.php?err=3');
}
?>


            