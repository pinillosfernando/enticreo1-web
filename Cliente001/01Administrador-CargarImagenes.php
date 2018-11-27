
<?php
require('ProcesoConexion.php');
//Nombre de usuario
session_start();
$nombreUsuario = $_SESSION['SesionUsuario'];
$idAgrupacionSesion = $_SESSION['SesionAgrupacion'];
//Apertura de Base de datos de SAB
$db= new ConexionSAB();
$datosAgrupacion = $db->datosAgrupación($idAgrupacionSesion);
?>
    
<div class="container">
    <h1>
        Configuración de página de la Agrupación
    </h1>
    <br>
    <!-- Paginación -->
    <nav>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Datos Generales</a></li>
            <li class="page-item"><a class="page-link" href="#">Propietarios</a></li>
            <li class="page-item"><a class="page-link" id="CargarImagenes" href="#">Imagenes</a></li>
            <li class="page-item"><a class="page-link" href="#">Localidad</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
        </ul>
    </nav>
    
    <!-- Formulario -->
    <form action="15ListaAgrupaciones.php" method="POST">
        <h3>Logo de la agrupación</h3>
        <div class="col-md-2">            
            <img src="<?php echo $datosAgrupacion['Logo'];  ?>">
            <input type="submit" class="btn btn-primary" value="Cambiar">                
        </div>
        <br><br>
        <h3>Imagenes de la página de la agrupación</h3>
        <div class="col-md-2">            
            <img src="<?php echo $datosAgrupacion['Imagen1'];  ?>">
            <input type="submit" class="btn btn-primary" value="Cambiar">
            <img src="<?php echo $datosAgrupacion['Imagen2'];  ?>">
            <input type="submit" class="btn btn-primary" value="Cambiar">
            <img src="<?php echo $datosAgrupacion['Imagen3'];  ?>">
            <input type="submit" class="btn btn-primary" value="Cambiar">            
        </div>
        <br><br>
        <h3>Álbum de fotos</h3>
        <img src="">
        <input type="submit" class="btn btn-primary" value="Cambiar">
        <img src="">
        <input type="submit" class="btn btn-primary" value="Cambiar">
    </form>  
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


