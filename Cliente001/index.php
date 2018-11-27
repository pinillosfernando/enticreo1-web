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

<?php
//Programa para crear variables para cargar imagenes de la página    
if (isset($_GET['idAgr'])){
    $NombreAgrupacion=$_GET['idAgr'];
    echo $NombreAgrupacion;     //Esto se debe quitar posteriormente
    unset($_GET['err']);
}
require('ProcesoConexion.php');          
$db= new ConexionSAB();
$consulta="SELECT `Imagen1`, `Imagen2`, `Imagen3`, `Logo` FROM `cliente001` WHERE `Nombre`='$NombreAgrupacion'";
$resultado = $db->query($consulta);
$row1 = mysqli_fetch_array($resultado);
$Imagen1Agrupacion= $row1['Imagen1'];
$Imagen2Agrupacion= $row1['Imagen2'];
$Imagen3Agrupacion= $row1['Imagen3'];
$LogoAgrupacion= $row1['Logo'];
?>

<!DOCTYPE html>
<html>
    <!-- HEAD de la página  -->
    <?php 
    require_once '001HeadSAB-ABC.php';
    ?>
    
    <body>
        <!-- Contenedor con logo SAB - Carrucel imagenes de agrupación - Logo Agrupación  -->
        <?php 
        require_once '002ContenedorCarrucelSAB-ABC.php';
        ?>
        
        <!-- Barra de navegación de la Agrupación -->
        <?php 
        require_once '003MenuPrincipalSAB-ABC.php';
        ?>        
        
        <section class="main container">
            <div class="row">
                <section class="post col-md-9">
                    
                    <!-- Migas de pan -->
                    <div class="miga-de-pan">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">SAB</a></li>
                            <li class="breadcrumb-item"><a href="#"><?php echo $NombreAgrupacion ?></a></li>
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div>
                    
                    <!-- Zona de Post -->
                    <article class="post clearfix">
                        <a href="#">
                            <img src="imagenes/006 paginaWeb.png" class="rounded float-left" class="img-thumbnail" alt="">
                        </a>
                        <h2 class="post-tittle">
                            <a href="#">Los servicios de tu conjunto a un click de distancia</a>
                        </h2>
                        <p><span class="post-fecha">Abril de 2018 </span>por <span class="post-autor"><a href="#">Fernando Pinillos G</a></span></p>
                        <p class="post-contenido text-justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing 
                            elit. Aenean commodo ligula eget dolor. Aenean massa. 
                            Cum sociis natoque penatibus et magnis dis parturient montes, 
                            nascetur ridiculus mus. Donec quam felis, ultricies nec, 
                            pellentesque eu, pretium quis, sem. 
                            Nulla consequat massa quis enim. Donec pede justo, 
                            fringilla vel, aliquet nec, vulputate eget, arcu. 
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
                            justo. Nullam dictum felis eu pede mollis pretium. 
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                            Aenean vulputate eleifend tellus. 
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. 
                            Phasellus viverra nulla ut metus varius laoreet. 
                            Quisque rutrum. Aenean imperdiet. 
                            Etiam ultricies nisi vel augue. 
                            Curabitur ullamcorper ultricies nisi. 
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, 
                            tellus eget condimentum rhoncus, sem quam semper libero, 
                            sit amet adipiscing sem neque sed ipsum. Nam quam nunc, 
                            blandit vel, luctus pulvinar, hendrerit id, lorem. 
                            Maecenas nec odio et ante tincidunt tempus. 
                            Donec vitae sapien ut libero venenatis faucibus. 
                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. 
                            Duis leo. Sed fringilla mauris sit amet nibh. 
                            Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, 
                            augue velit cursus nunc, 
                        </p>
                        <div>
                            <a href="#" class="btn btn-primary">Leer más</a>
                            <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
                        </div>
                    </article>
                    
                    <article class="post clearfix">
                        <a href="#">
                            <img src="imagenes/007 haciendoComunidad.png" class="rounded float-left" class="img-thumbnail" alt="">
                        </a>
                        <h2 class="post-tittle">
                            <a href="#">Construyendo comunidad</a>
                        </h2>
                        <p><span class="post-fecha">Marzo de 2018 </span>por <span class="post-autor"><a href="#">Carolina Santos Álvarez</a></span></p>
                        <p class="post-contenido text-justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing 
                            elit. Aenean commodo ligula eget dolor. Aenean massa. 
                            Cum sociis natoque penatibus et magnis dis parturient montes, 
                            nascetur ridiculus mus. Donec quam felis, ultricies nec, 
                            pellentesque eu, pretium quis, sem. 
                            Nulla consequat massa quis enim. Donec pede justo, 
                            fringilla vel, aliquet nec, vulputate eget, arcu. 
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
                            justo. Nullam dictum felis eu pede mollis pretium. 
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                            Aenean vulputate eleifend tellus. 
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. 
                            Phasellus viverra nulla ut metus varius laoreet. 
                            Quisque rutrum. Aenean imperdiet. 
                            Etiam ultricies nisi vel augue. 
                            Curabitur ullamcorper ultricies nisi. 
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, 
                            tellus eget condimentum rhoncus, sem quam semper libero, 
                            sit amet adipiscing sem neque sed ipsum. Nam quam nunc, 
                            blandit vel, luctus pulvinar, hendrerit id, lorem. 
                            Maecenas nec odio et ante tincidunt tempus. 
                            Donec vitae sapien ut libero venenatis faucibus. 
                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. 
                            Duis leo. Sed fringilla mauris sit amet nibh. 
                            Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, 
                            augue velit cursus nunc, 
                        </p>
                        <div>
                            <a href="#" class="btn btn-primary">Leer más</a>
                            <a href="#" class="btn btn-success">Comentarios <span class="badge">46</span></a>
                        </div>
                    </article>
                    
                    <article class="post clearfix">
                        <a href="#">
                            <img src="imagenes/008 comunidadMundo.jpg" class="rounded float-left" class="img-thumbnail" alt="">
                        </a>
                        <h2 class="post-tittle">
                            <a href="#">Las pequeñas comunidades en la globalización</a>
                        </h2>
                        <p><span class="post-fecha">Enero de 2018 </span>por <span class="post-autor"><a href="#">Gladys Gómez Londoño</a></span></p>
                        <p class="post-contenido text-justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing 
                            elit. Aenean commodo ligula eget dolor. Aenean massa. 
                            Cum sociis natoque penatibus et magnis dis parturient montes, 
                            nascetur ridiculus mus. Donec quam felis, ultricies nec, 
                            pellentesque eu, pretium quis, sem. 
                            Nulla consequat massa quis enim. Donec pede justo, 
                            fringilla vel, aliquet nec, vulputate eget, arcu. 
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
                            justo. Nullam dictum felis eu pede mollis pretium. 
                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                            Aenean vulputate eleifend tellus. 
                            Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
                            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. 
                            Phasellus viverra nulla ut metus varius laoreet. 
                            Quisque rutrum. Aenean imperdiet. 
                            Etiam ultricies nisi vel augue. 
                            Curabitur ullamcorper ultricies nisi. 
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, 
                            tellus eget condimentum rhoncus, sem quam semper libero, 
                            sit amet adipiscing sem neque sed ipsum. Nam quam nunc, 
                            blandit vel, luctus pulvinar, hendrerit id, lorem. 
                            Maecenas nec odio et ante tincidunt tempus. 
                            Donec vitae sapien ut libero venenatis faucibus. 
                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. 
                            Duis leo. Sed fringilla mauris sit amet nibh. 
                            Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, 
                            augue velit cursus nunc, 
                        </p>
                        <div>
                            <a href="#" class="btn btn-primary">Leer más</a>
                            <a href="#" class="btn btn-success">Comentarios <span class="badge">260</span></a>
                        </div>
                    </article>
                    
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
                
                <!-- Aside con menús de listas laterales -->
                <aside class="post col-md-3 hidden-xs hidden-sm">
                    <h4>Categorías</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Edificio Astoria</a>
                        <a href="#" class="list-group-item">La comunidad</a>
                        <a href="#" class="list-group-item">Administración</a>
                        <a href="#" class="list-group-item">El Consejo</a>
                        <a href="#" class="list-group-item">Proveedores</a>
                        <a href="#" class="list-group-item">Convivencia</a>
                        <a href="#" class="list-group-item">Zonas comunes</a>
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
