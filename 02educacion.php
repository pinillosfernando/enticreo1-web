<!--
Proyecto EnTICreo 
Autor:      Luis Fernando Pinillos Gómez
Fecha:      Septiembre de 2018 
Objetivos:
1. Actualizar subtítulo en Jumbotron.               CUMPLIDO 
2. Actualizar migas de pan                          CUMPLIDO
3. Actualizar títulos e imagenes de artículos.      PENDIENTE
4. Actualizar títulos en menú de Aside.             PENDIENTE
5. Actualizar menús de Artículos de Aside.          PENDIENTE
  
Referencias y comentarios

-->
<!DOCTYPE html>
<html>
    <?php 
    require_once '001HeadEnticreo.php';
    ?>
    
    <body>
        <!-- Menú principal de EnTICreo -->
        <?php 
        require_once '002MenuPrincipalEnticreo.php';
        ?>
        <!-- Aquí va el Jumbotron de EnTICreo -->
        <?php 
        require_once '003JumbotronEnticreo.php';
        ?>
        
        <section class="main container">
            <div class="row">
                <section class="post col-md-9">
                    
                    <!-- Migas de pan -->
                    <div class="miga-de-pan">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="#">Servicios</a></li>
                            <li class="breadcrumb-item active">Educación</li>
                        </ol>
                    </div>
                    
                    <!-- Zona de Post -->
                    <article class="post clearfix">
                        <a href="#">
                            <img src="imagenes/006 paginaWeb.png" class="rounded float-left" class="img-thumbnail" alt="">
                        </a>
                        <h2 class="post-tittle">
                            <a href="#">Las Universidades del Centro de Bogotá</a>
                        </h2>
                        <p><span class="post-fecha">Septiembre de 2018 </span>por <span class="post-autor"><a href="#">Fernando Pinillos G</a></span></p>
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
                            <a href="#">Colegios de La Candelaria</a>
                        </h2>
                        <p><span class="post-fecha">Agosto de 2018 </span>por <span class="post-autor"><a href="#">Carolina Santos Álvarez</a></span></p>
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
                            <a href="#">La Biblioteca Luis Ángel Arango</a>
                        </h2>
                        <p><span class="post-fecha">Octubre de 2018 </span>por <span class="post-autor"><a href="#">Gladys Gómez Londoño</a></span></p>
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
                        <a href="#" class="list-group-item active">Secretaría de educación</a>
                        <a href="#" class="list-group-item">Programas para colegios</a>
                        <a href="#" class="list-group-item">Veeduría de los colegios públicos</a>
                        <a href="#" class="list-group-item">Indicadores de gestión</a>
                        <a href="#" class="list-group-item">Alta calidad de la educación</a>
                        <a href="#" class="list-group-item">Informes</a>
                        <a href="#" class="list-group-item">Jardines infantiles en concesión</a>
                    </div>
                    <h4>Artículos recientes</h4>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Inicia proyectos</h4>
                        <p class="list-group-item-text">Se construye un nuevo edificio de la Universidad La Gran Colombia</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Oferta educativa del centro de Bogotá</h4>
                        <p class="list-group-item-text">pre escolar, primaria, secundaria y universitaria</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Programas culturales de la BLAA</h4>
                        <p class="list-group-item-text">Conozca los programas culturales de la Biblioteca Luis Ángel Arango y el Banco de la República</p>
                    </a>
                </aside>
                
                
            </div>
        </section>
              
        <!-- Pie de página de EnTICreo -->
        <?php 
        require_once '004FooterEnticreo.php';
        ?>
        
        <!-- Archivos de soporte -->             
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
