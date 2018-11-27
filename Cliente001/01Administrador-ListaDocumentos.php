
<?php
require('ProcesoConexion.php');
//Nombre de usuario
session_start();
$nombreUsuario = $_SESSION['SesionUsuario'];
//Apertura de Base de datos de SAB
$db= new ConexionSAB();
$dato=$db->datosUsuario($nombreUsuario);
$idAgrupacion=$dato['Cliente001'];
//Consulta del identificador de la agrupación 

$consulta="SELECT `id`, `Nombre`, `NIT`, `Ciudad`, `Pais`, `Barrio`, `Dirección`, `Estrato`, `CoordX`, `CoordY`, `TelPublico`, `TelPrivado`, `Movil`, `CorreElectronico`, `Imagen1`, `Imagen2`, `Imagen3`, `Logo` FROM `cliente001` WHERE id='$idAgrupacion'";
$resultado = $db->query($consulta);
$row1 = mysqli_fetch_array($resultado);
$Imagen1Agrupacion= $row1['Imagen1'];
$Imagen2Agrupacion= $row1['Imagen2'];
$Imagen3Agrupacion= $row1['Imagen3'];
$LogoAgrupacion= $row1['Logo'];
?>
    
<div class="container">
    <h1>
        Biblioteca de la Agrupación <?php echo $row1['Nombre']?>
    </h1>
    <br>
    <!-- Paginación -->
    
    <!-- Página de documentos -->
    <h2 class="text-danger bg-warning">Documentos de la co-propiedad</h2>
    <h3 class="text-primary">Actas de Consejo</h3>
    <h3 class="text-primary">Actas de Asamblea General</h3>
    <h3 class="text-primary">Informes de Administración</h3>
    <h3 class="text-primary">Informes de Revisoría Fiscal</h3>
    <h3 class="text-primary">Informes de Contabilidad</h3>
    <h3 class="text-primary">Comunicados</h3>
    <h3 class="text-primary">Contratos</h3>
    <h3 class="text-primary">Procesos Legales</h3>
    <h3>Otros</h3>
    <h2 class="text-danger bg-warning">Documentos Generales</h2>
    <h2 class="text-danger bg-warning">Documentos de Procesos</h2>
    
</div>            
            <?php
            
            if (isset($_GET['err'])){
                switch ($_GET['err']):
                    case '1':
                        echo 'Diligencie todos los campos';
                        break;
                    case '2':
                        echo 'Usuario o contraseña no son correctos';
                        break;
                    case '3':
                        echo 'Diligencie el formulario para acceder';
                        break;
                    case '4':
                        echo 'Diligencie primero el formulario';
                        break;        
                endswitch;
                unset($_GET['err']);
            }
            ?>            
</div>
