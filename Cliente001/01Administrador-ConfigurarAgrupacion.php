
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

            <form action="ProcesoDatosGenerales.php" method="POST">        
                <!-- Formulario de Datos Generales -->
                <h6 class="text-success">Identificación y razón social de la agrupación</h6>
                <div class="row">
                    <div class="col-md-8">
                        <label for="NombreAgrupacion" class="control-label "> Nombre de la Agrupación</label>
                        <input type="text" class="form-control" name="NombreAgrupacion" id="nombre" size="50" placeholder="<?php echo $datosAgrupacion['Nombre'];?>">
                    </div>    
                    <div class="col-md-4">    
                        <label for="NIT" class="control-label align-content-end"> NIT</label>
                        <input type="text" class="form-control" name="NIT" id="nombre" size="50" placeholder="<?php echo $datosAgrupacion['NIT'];?>">
                    </div>
                </div>         
                <hr>

                <h6 class="text-success">Localización de la agrupación</h6>
                <div class="row">
                    <div class="col-4">
                        <label for="Pais" class="control-label">País</label>            
                        <input type="text" class="form-control" name="Pais" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['Pais'];?>">                                                       
                    </div>
                    <div class="col-4">
                        <label for="Ciudad" class="control-label">Ciudad</label>
                        <input type="text" class="form-control" name="Ciudad" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['Ciudad'];?>">                                                        
                    </div>            
                    <div class="col-4">
                        <label for="Barrio" class="control-label">Barrio</label>
                        <input type="text" class="form-control" name="Barrio" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['Barrio'];?>">                                                        
                    </div>            
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label for="Direccion" class="control-label">Dirección</label>
                        <input type="text" class="form-control" name="Direccion" id="correo" size="70" placeholder="<?php echo $datosAgrupacion['Dirección'];?>">                                                   </div>
                    <div class="col-md-4">
                        <label for="Estrato" class="control-label">Estrato</label>
                        <input type="text" class="form-control" name="Estrato" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['Estrato'];?>">                                      
                    </div>            
                </div>
                <hr>        

                <h6 class="text-success">Información de contacto</h6>
                <div class="row">
                    <div class="col-md-4">
                        <label for="TelPublico" class="control-label">Teléfono para el público</label>
                        <input type="text" class="form-control" name="TelPublico" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['TelPublico'];?>">                                                        
                    </div>
                    <div class="col-md-4">
                        <label for="TelPrivado" class="control-label">Teléfono de oficina</label>
                        <input type="text" class="form-control" name="TelPrivado" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['TelPrivado'];?>">                                                               
                    </div>
                    <div class="col-md-4">
                        <label for="TelMovil" class="control-label">Teléfono móvil</label>
                        <input type="text" class="form-control" name="TelMovil" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['Movil'];?>">                                       
                    </div>            
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="CorreoElectronico" class="control-label"> Correo electrónico</label>
                        <input type="text" class="form-control" name="CorreoElectronico" id="correo" size="50" placeholder="<?php echo $datosAgrupacion['CorreElectronico'];?>">                                                       
                    </div> 
                </div>
                <hr>

                <div class="float-right">
                    <input type="submit" class="btn btn-primary" value="Aceptar">
                </div>
            </form>         
        </div>         
    </body>
  
        
 
