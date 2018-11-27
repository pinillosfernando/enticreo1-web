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
if(isset($_SESSION['SesionUsuario'])&&(isset($_SESSION['SesionUsuario']))){ 
    $nombreUsuario = $_SESSION['SesionUsuario'];
    require('ProcesoConexion.php');          
    $db= new ConexionSAB(); 
    //Datos del usuario
    $dato=$db->datosUsuario($_SESSION['SesionUsuario']);
    //Datos del cliente001: la agrupación
    
}else{
    session_destroy();
    header('location: 00MiCuenta.php?err=4');
} 
    //
    $idAgrupacion=$dato['Cliente001'];
    echo $idAgrupacion;
    $consulta="SELECT `Nombre`, `Imagen1`, `Imagen2`, `Imagen3`, `Logo` FROM `cliente001` WHERE `id`='$idAgrupacion'";
    $resultado = $db->query($consulta);
    $row1 = mysqli_fetch_array($resultado);
    $Imagen1Agrupacion= $row1['Imagen1'];
    $Imagen2Agrupacion= $row1['Imagen2'];
    $Imagen3Agrupacion= $row1['Imagen3'];
    $LogoAgrupacion= $row1['Logo'];
    $NombreAgrupacion= $row1['Nombre'];

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
        <!-- Contenedor con logo SAB - Carrucel imagenes de agrupación - Logo Agrupación  -->
        <?php 
        require_once '002ContenedorCarruselUsuariosSAB-ABC.php';
        ?>
        
        <!-- Barra de navegación de la Agrupación --> 
        <?php 
        require_once '003MenuPrincipalSAB-ABC.php';
        ?>
                
        <section class="main container">
            <div class="row">
                <!-- Aside con menús de listas laterales -->
                <aside class="post col-md-3 hidden-xs hidden-sm">
                    <h4><?php echo $dato['Apellidos'].', '.$dato['Nombres']?></h4>
                    <img src="<?php echo $dato['Foto'] ?>">
                    <h6>Administrador</h6>
                    <div class="container">
                        <div class="row">
                            <div class="list-group">
                                <br>
                                <a href="#" class="list-group-item active"><?php echo $NombreAgrupacion;?></a>
                                <a id="CargarEstadoCuenta" class="list-group-item" href="#">Cargar estados de cuenta</a>
                                <a id="PQRComunidad" class="list-group-item" href="#">PQR</a>
                                <a class="list-group-item" href="#">Calendario</a>
                                <a id="CargarListaMiembros" class="list-group-item" href="#">Lista de usuarios</a>
                                <a class="list-group-item" href="#sub_categoria_4" data-toggle="collapse" data-parent="#sub_categoria_4" >Configuración</a>
                                <span class="menu-ico-collapse"><i class="fa fa-chevron-down"></i></span>                                                                                 
                                <div class="collapse list-group-submenu" id="sub_categoria_4">
                                    <a id ="ConfigurarAgrupacion" class="list-group-item sub-item" style="background: #f7f700;" href="#" data-parent="#sub_categoria_4"> Datos generales</a>
                                    <a id ="ConfigurarEspacioFisico" class="list-group-item sub-item" style="background: #f7f700;" href="#" data-parent="#sub_categoria_4"> Espacio físico</a>
                                    <a id ="ConfigurarImagenes" class="list-group-item sub-item" style="background: #f7f700;" href="#" data-parent="#sub_categoria_4"> Imagenes</a>
                                    <a id ="ConfigurarLocalidad" class="list-group-item sub-item" style="background: #f7f700;" href="#" data-parent="#sub_categoria_4"> Localidad</a>
                                </div>
                                <a id ="CargarListaDocumentos" class="list-group-item" href="#">Biblioteca</a>
                                <a class="list-group-item" href="#">Mi perfil</a>
                                <a class="list-group-item" href="#">Cerrar sesión</a>
                            </div>
                        </div>
                        
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
                    <h4>Menu con submenú</h4>

                </aside> 
                
                

                <section class="post col-md-9">                    
                    <!-- Migas de pan -->
                    <div class="miga-de-pan">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">SAB</a></li>
                            <li class="breadcrumb-item"><a href="#"><?php echo $NombreAgrupacion;?></a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                    
                    <!-- Área de trabajo -->
                    <div id="AreaTrabajo">
                        
                    </div>

                    
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
