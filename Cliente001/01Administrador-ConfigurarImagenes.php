
<?php
require('ProcesoConexion.php');
//Nombre de usuario
session_start();
$nombreUsuario = $_SESSION['SesionUsuario']; //id="CargarImagenes"
$idAgrupacionSesion = $_SESSION['SesionAgrupacion'];
//Apertura de Base de datos de SAB y datos de la Agrupación
$db= new ConexionSAB();
$datosAgrupacion = $db->datosAgrupación($idAgrupacionSesion);
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,  maximum-scale=1.0, minimum-scale =1.0">
        <title>Administración de Propiedad Horizontal</title>        
        <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilosSAB.css">
        <link rel="icon" href="../imagenes/Icono SAB.ico">
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/AreaTrabajoAdministradorConfiguracion.js"></script>       
    </head>
    
    <body>
        <div class="container">
            <h6>
                Configuración de página de la Agrupación
            </h6>
            <br>    
            
            <!-- Formulario de Imagenes -->
            <form action="ProcesoDatosGenerales.php" method="POST">        
                <!-- Formulario de Datos Generales -->
                <h6 class="text-success">Imagenes de la Agrupación</h6>
                <div class="row">
                    <div class="col-md-3">
                        <h6 class="text-danger">Logo de la agrupación</h6>            
                        <img src="<?php echo $datosAgrupacion['Logo'];  ?>"  width="100%">                        
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-danger">Imagen de presentación</h6>            
                        <img src="<?php echo $datosAgrupacion['Imagen1'];  ?>" width="100%">                        
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-danger">Imagen de presentación</h6>            
                        <img src="<?php echo $datosAgrupacion['Imagen2'];  ?>" width="100%">                                        
                    </div> 
                    <div class="col-md-3">
                        <h6 class="text-danger">Imagen de presentación</h6>            
                        <img src="<?php echo $datosAgrupacion['Imagen3'];  ?>" width="100%">                                       
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <input type="submit" class="btn btn-primary float-right" value="Cambiar">
                    </div>
                    <div class="col-md-3 ">
                        <input type="submit" class="btn btn-primary float-right" value="Cambiar">                
                    </div>
                    <div class="col-md-3 ">
                        <input type="submit" class="btn btn-primary float-right" value="Cambiar">
                    </div>
                    <div class="col-md-3 ">
                        <input type="submit" class="btn btn-primary float-right" value="Cambiar">
                    </div>                    
                </div>
                <hr>
                <h6 class="text-success">Álbum de fotos de la Agrupación</h6>
                
            </form>         
        </div>         
    </body>            




