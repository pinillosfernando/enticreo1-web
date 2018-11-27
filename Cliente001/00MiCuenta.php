<!--
Proyecto SAB: página SAB-ABC 
Autor:      Luis Fernando Pinillos Gómez
Fecha:      Abril de 2018 
Objetivos:  
1. Crear la página principal SAB-ABC                        PENDIENTE
2. Hacer el carrusel con sus respectivas imágenes.          PENDIENTE
3. Hacer la barra de menú con sus respectivos mensajes.     PENDIENTE
4. Hacer zona de Articulos y zona de Aside.                 PENDIENTE
5. Hacer zona de footer.                                    PENDIENTE
6. Página para ingreso a la plataforma.                     PENDIENTE

Referencias y observaciones: 
A. 

-->
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
        <script src="../js/fontawesome-all.js"></script>
        
    </head>    
    
    <body>
        <!-- Barra principal con logos y Carrucel de imagenes del conjunto  -->
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
        
        <!-- Aquí está la barra de navegación principal -->
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
                                    <a class="nav-link" href="14Ingreso.php">Mi cuenta<span class="sr-only">(current)</span></a>
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
        
        <!-- Zona del formulario de ingreso a Mi Cuenta en PSAB -->
       <div class="container">
            <h1>
                Inicio de sesión
            </h1>
            <br>
            <form action="ProcesoIngreso.php" method="POST">
                <div class="form-group">
                    <label><i class="far fa-user"></i> Usuario</label><br>
                    <input type="text" class="form-control" name="usuario" id="nombre" size="50" placeholder="Usuario"><br>
                    <label><i class="fas fa-key"></i> Contraseña</label><br>
                    <input type="text" class="form-control" name="contrasenia" id="correo" size="50" placeholder="Contraseña"><br>                                        
                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>                
            </form>  
            
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



