<!--
Proyecto SAB 
Autor:      Luis Fernando Pinillos Gómez
Fecha:      Abril de 2018 
Objetivos:  
1. Crear la página web principal (index.php) de SAB         CUMPLIDO
2. Menú superior rediseñado.                                CUMPLIDO
3. Jumbotron de la empresa.                                 CUMPLIDO
4. Un carrucel informativo.                                 CUMPLIDO
5. Un acceso para ingresar.                                 CUMPLIDO
6. Un acceso para registrarse.                              CUMPLIDO
7. Pie de página.                                           CUMPLIDO
8. Botón de búsqueda para buscar conjuntos.                 PENDIENTE
Referencias y observaciones: 
A. No se ha logrado tener el header fijo.
B. Los accesos de ingresar y registrarse mejor con botones de colores.
C. Prudente poner en el pié de página, la dirección de la empresa, 
   correo de contacto, etc.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,  maximum-scale=1.0, minimum-scale =1.0">
        <title>Administración de Propiedad Horizontal</title>
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilosSAB.css">
        <link rel="icon" href="imagenes/Icono SAB.ico">
    </head>    
    
    <body>
        <!-- Aquí está la barra de navegación superior -->
        <div class="container">
            <header> <!-- style="position: fixed;" El problema es que me daña la forma del menú -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- navbar-light bg-light -->                    
                    <a class="navbar-brand" href="#"><img src="imagenes/001 Logo SAS Colombia sas.gif" width="100"></a>
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
                                <a class="nav-link" href="11informacionComoFuncionaSABP.php">Cómo funciona SABP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="12Contacto.php">Contacto</a>
                            </li>
                        </ul>
                        <div class="align-content-end">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="14Ingreso.php">Ingresar <span class="sr-only">(current)</span></a>
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
        
        <!-- Aquí va el Jumbotron -->
        <div class="container">
            <div class="jumbotron">
                <h1 class="titulo-blog">Conjunto ABC</h1>
                <p>Bienvenido Residente Pepito Perez</p>
            </div>    
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
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
