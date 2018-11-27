<!--
Proyecto SAB: página del Administrador 
Autor:      Luis Fernando Pinillos Gómez
Fecha:      Mayo de 2018 
Objetivos:  
1. La página debe tener el mismo carrucel y encabezado 
del conjunto                                                PENDIENTE
2. La página también debe tener el mismo pié de página.     PENDIENTE
3. La página debe tener el sistema de migas de pan          PENDIENTE
4. El menú horizontal queda para evaluar                    PENDIENTE
5. El menú vertical al costado izquierdo                    PENDIENTE
6. Zona central de trabajo que se carga dependiendo de lo 
que se presente en el menú principal                        PENDIENTE
7. La barra lateral derecha queda para evaluación           PENDIENTE

Referencias y observaciones: 
A. 

-->
<?php
session_start();
if(isset($_SESSION['SesionUsuario'])){ 
    $nombreUsuario = $_SESSION['SesionUsuario'];
    require('ProcesoConexion.php');      
    //echo 'Bienvenido a la platafoma SEA '.$_SESSION['SesionAbierta'];
    $db= new ConexionSAB(); //Es necesario?
    $dato=$db->datosUsuario($_SESSION['SesionUsuario']);    
}else{
    session_destroy();
    header('location: index.php?err=4');
}
?>

<!DOCTYPE html>
<html>
    <!-- HEAD de la página  -->
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
        <script type="text/javascript" src="../js/AreaTrabajoAdministrador.js"></script>               
    </head>    
    
    <body>
        <section class="main container">
            <div class="row"> 
                <!-- Aquí va logo de SAB  -->
                <section class="post col-md-3 hidden-xs hidden-sm">
                    <img class="d-block w-100" src="../imagenes/001 Logo SAS Colombia sas.gif" height="200" alt="Primero">
                </section>
                <!-- Aquí va el Slideshow  -->
                <section class="post col-md-6">           
                    <div id="carouselSAB" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="imagenes/casa01.png" height="200" alt="Primero">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="imagenes/casa02.png" height="200" alt="Segundo">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="imagenes/casa03.png"  height="200" alt="Tercero">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselSAB" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselSAB" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Siguiente</span>
                        </a>
                    </div>                                  
                </section>
                <!-- Aquí va logo de SAB-ABC  -->
                <section class="post col-md-3 hidden-xs hidden-sm">
                    <img class="d-block w-100" src="imagenes/casa04.png" height="200" alt="Primero">
                </section>
            </div>
        </section>
        
        <!-- Aquí está la barra de navegación superior -->
        <div class="container">
            <header> <!-- style="position: fixed;" El problema es que me daña la forma del menú -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- navbar-light bg-light -->                    
                    <a class="navbar-brand" href="#"><img src="../imagenes/001 Logo SAS Colombia sas.gif" width="100"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Servicios
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="01paginaPropiedadHorizontal.php">Página WEB para su copropiedad</a>
                                    <a class="dropdown-item" href="02informacionPlataformaPSAB.php">Plataforma de usuarios SABP</a>                                    
                                    <a class="dropdown-item" href="03informacionSoftwareEspecializado.php">Software especializado</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="04informacionadministracionPH.php">Administración de Propiedad Horizontal</a>
                                    <a class="dropdown-item" href="05informacionContabilidad.php">Contabilidad</a>
                                    <a class="dropdown-item" href="06informacionRevisoriaFiscal.php">Revisoría Fiscal</a>
                                    <a class="dropdown-item" href="07informacionAsesorias.php">Asesorías</a>
                                    <a class="dropdown-item" href="08informacionCapacitaciones.php">Capacitaciones</a>
                                    <a class="dropdown-item" href="09informacionOrganizacionAsambleas.php">Organización de Asambleas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="10informacionInmobiliariaSAB.php">Venta y alquiler de inmuebles</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="11informacionComoFuncionaSABP.php">Clasificados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="11informacionComoFuncionaSABP.php">Proyectos y eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="11informacionComoFuncionaSABP.php">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="12Contacto.php">Contacto</a>
                            </li>
                        </ul>
                        <div class="align-content-end">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="01MiCuenta.php">Mi cuenta<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Registrarse</a>
                                </li>
                            </ul>    
                        </div>                                                
                    </div>
                </nav>                
            </header>            
        </div>
                
        <section class="main container">
            <div class="row">
                <!-- Aside con menús de listas laterales -->
                <aside class="post col-md-3 hidden-xs hidden-sm">
                    <h4><?php echo $dato['Nombre']?></h4>
                    <?php echo "<img align=center src='data:image/jpeg; base64,". base64_encode($dato['Foto'])."'>";                     
                    ?> 
                    <h6>Residente</h6>
                    <div class="list-group">
                        <br>
                        <a href="#" class="list-group-item active">Edificio Astoria</a>
                        <a href="#" class="list-group-item" id="CargarEstadoCuenta">Ver estados de cuenta</a>
                        <a href="#" class="list-group-item">Presentar un PQR</a>
                        <a href="#" class="list-group-item">Ver eventos</a>
                        <a href="#" class="list-group-item">Otros</a>
                        <a href="#" class="list-group-item">Biblioteca</a>
                        <a href="#" class="list-group-item">Mi perfil</a>
                        <a href="#" class="list-group-item">Cerrar Sesión</a>
                    </div>
                    <h4>Localidad</h4>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Policía</h4>
                        <p class="list-group-item-text">Iniciando proyectos de la Coopropiedad</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Servicio médico</h4>
                        <p class="list-group-item-text">Iniciando proyectos de la Coopropiedad</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Domicilios</h4>
                        <p class="list-group-item-text">Iniciando proyectos de la Coopropiedad</p>
                    </a>
                </aside>    

                <section class="post col-md-9">                    
                    <!-- Migas de pan -->
                    <div class="miga-de-pan">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">SAB</a></li>
                            <li class="breadcrumb-item"><a href="#">Edificio Astoria</a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                    
                    <!-- Área de trabajo -->
                    <div id="AreaTrabajo">
                        
                    </div>
                    
                    <!-- Paginación -->
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>

                    </nav>
                    
                </section>
                

            </div>
        </section>
             
        <!-- Pie de página -->
        <footer>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"> 
                        <p class="small">Visitenos en Bogotá D.C. - Colombia Calle 119 No 19 - 55 Of. 700 Tel. (57)(1)811 86 53 gerencia.sabcolombia@gmail.com SAB - Colombia SAS  © Todos los derechos reservados</p>                                              
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline text-right">
                            <li class="list-inline-item"><a href="#">Opción 1</a></li>
                            <li class="list-inline-item"><a href="#">Opción 2</a></li>
                            <li class="list-inline-item"><a href="#">Contacto</a></li>
                        </ul>
                        
                        
                    </div>
                </div>
                
            </div>
        </footer>
        
        <!-- Comentarios -->             
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>




<?php
?>
