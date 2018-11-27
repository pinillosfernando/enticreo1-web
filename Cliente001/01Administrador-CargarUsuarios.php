<?php
require('ProcesoConexion.php');
//Nombre de usuario
session_start();
$nombreUsuario = $_SESSION['SesionUsuario'];
$idAgrupacionSesion = $_SESSION['SesionAgrupacion'];
$db= new ConexionSAB();
$datosUsuario = $db->datosUsuario($nombreUsuario);
$datosAgrupacion = $db->datosAgrupación($idAgrupacionSesion);
//Consulta del nombre de la agrupación
$NombreAgrupacion= $datosAgrupacion['Nombre'];

$consulta="SELECT `Nombre`, `Imagen1`, `Imagen2`, `Imagen3`, `Logo` FROM `cliente001` WHERE `id`=21";
$resultado = $db->query($consulta);
$row1 = mysqli_fetch_array($resultado);
$Imagen1Agrupacion= $row1['Imagen1'];
$Imagen2Agrupacion= $row1['Imagen2'];
$Imagen3Agrupacion= $row1['Imagen3'];
$LogoAgrupacion= $row1['Logo'];
$NombreAgrupacion= $row1['Nombre'];
//Encabezado de la zona de trabajo
echo '<h5>Lista de miembros de la agrupación: '.$NombreAgrupacion.'</h5>';
$encabezadoTabla = '
            <tr>
                <th>No.</th>
                <th>NOMBRE</th>
                <th>ROL</th>
                <th>CORREO ELECTRÓNICO</th>
            </tr>
        ';        
?>

<div class="container">
    <div class="table-responsive">        
        <table class="table table-striped table-hover">
            <?php echo $encabezadoTabla;             
            $consulta="SELECT `Nombres`, `Apellidos`, `Rol`, `CorreoElectronico` FROM `usuarios` WHERE `Cliente001`='$idAgrupacionSesion';";
            $resultado = $db->query($consulta);
            $contador=1;
            while ($row1 = mysqli_fetch_array($resultado)){ 
                echo '<tr>';
                echo '<th>'.$contador.'</th>';
                if($row1['Rol']==1){
                    $rolUsuario = 'Administrador';
                } else {
                    $rolUsuario = 'Residente';
                }
                echo '<th>'.$row1['Apellidos'].", ".$row1['Nombres'].'</th>';        //Nombre
                echo '<th>'.$rolUsuario.'</th>';           //Rol
                echo '<th>'.$row1['CorreoElectronico'].'</th>';
                echo '</tr>';
                $contador++;
            }                  
            ?>
        </table>
    </div>    
</div>