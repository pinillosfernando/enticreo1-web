<?php
require('ProcesoConexion.php');
$db= new ConexionSAB();
session_start();
$SesionAgrupacion = $_SESSION['SesionAgrupacion'];  //Para examinar
if(!empty($_POST['NombreAgrupacion'])){
    $NombreAgrupacion = $_POST['NombreAgrupacion'];
    //$insertarDB = "";
}
if(!empty($_POST['NIT'])){
    $NIT = $_POST['NIT'];
    $insertar = "UPDATE `cliente001` SET `NIT`='$NIT' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['Pais'])){
    $Pais = $_POST['Pais'];
    $insertar = "UPDATE `cliente001` SET `Pais`='$Pais' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['Ciudad'])){
    $ciudad = $_POST['Ciudad'];
    $insertar = "UPDATE `cliente001` SET `Ciudad`='$ciudad' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['Barrio'])){
    $Barrio = $_POST['Barrio'];
    $insertar = "UPDATE `cliente001` SET `Barrio`='$Barrio' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['Direccion'])){
    $Direccion = $_POST['Direccion'];
    $insertar = "UPDATE `cliente001` SET `Dirección`='$Direccion' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['Estrato'])){
    $Estrato = $_POST['Estrato'];
    $insertar = "UPDATE `cliente001` SET `Estrato`='$Estrato' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['TelPublico'])){
    $TelPublico = $_POST['TelPublico'];
    $insertar = "UPDATE `cliente001` SET `TelPublico`='$TelPublico' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['TelPrivado'])){
    $TelPrivado = $_POST['TelPrivado'];
    $insertar = "UPDATE `cliente001` SET `TelPrivado`='$TelPrivado' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['TelMovil'])){
    $TelMovil = $_POST['TelMovil'];
    $insertar = "UPDATE `cliente001` SET `Movil`='$TelMovil' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
if(!empty($_POST['CorreoElectronico'])){
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $insertar = "UPDATE `cliente001` SET `CorreElectronico`='$CorreoElectronico' WHERE `id`='$SesionAgrupacion';";
    $resultado = $db->query($insertar);
}
header('location: 01Administrador.php');
?>


            