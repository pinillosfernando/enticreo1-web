<!--
Proyecto EnTICreo 
Autor:      Luis Fernando Pinillos Gómez
Fecha:      septiembre de 2018 
Objetivos:  
1. Crear la página web principal (index.php) de EnTICreo    CUMPLIDO
2. Menú superior rediseñado.                                CUMPLIDO
3. Jumbotron de la plataforma                               CUMPLIDO
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
        
        <!-- Aquí va el Slideshow del index de la página principal de EnTICreo -->
        <div class="container">            
            <div class="col-md-12">
                <div id="carouselEnTICreo" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="imagenes/002LogoInfo.png" class="city1" alt="Primero">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="imagenes/003LogoDedoArriba.png" alt="Segundo">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="imagenes/004LogoLupa.png"  alt="Tercero">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselEnTICreo" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselEnTICreo" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                </div>    
            </div>               
        </div>        
        
        <!-- Pie de página de EnTICreo -->
        <?php 
        require_once '004FooterEnticreo.php';
        ?>
        
        <!-- Comentarios -->             
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
