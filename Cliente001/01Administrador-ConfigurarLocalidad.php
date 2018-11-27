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
            
            <!-- Formulario de la Localidad -->
            <form action="ProcesoDatosGenerales.php" method="POST">        
                <!-- Líneas de emergencia -->
                <h6 class="text-success">Líneas de emergencia</h6>
                <div class="row">
                    <div class="col-md-3">
                        <h6 class="text-danger">Emergencias: 123</h6>                                    
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-danger">Policía Nacional: 112</h6>            
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-danger">Bomberos: 119</h6>            
                    </div> 
                    <div class="col-md-3">
                        <h6 class="text-danger">Cruz Roja: 132</h6>            
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Movilidad Bogotá: 195</h6>
                    </div>
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Defensa Civíl: 144</h6>
                    </div>
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Acueducto: 116</h6>
                    </div>
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Codensa: 115</h6>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Gas Natural: 195</h6>
                    </div>
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Pendiente: 144</h6>
                    </div>
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Gaula Policía: 116</h6>
                    </div>
                    <div class="col-md-3 ">
                        <h6 class="text-danger">Gaula Ejército: 115</h6>
                    </div>                    
                </div>                
                <hr>
                <p>
                    Establecimientos de salud
                    Drogerías
                    Establecimientos educativos
                    Centros comerciales
                    Restaurantes
                    Domicilios
                    Vías
                    Recolección de basuras
                </p>
            </form>         
        </div>         
    </body>            





