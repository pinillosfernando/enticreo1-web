<!--
Proyecto SAB - Página de ingreso a cuenta de usuario
Autor:      Luis Fernando Pinillos Gómez
Fecha:      Mayo de 2018 
Objetivos:  
1. Página estándar de ingreso                               PENDIENTE
2. Usuario                                                  PENDIENTE
3. Contraseña                                               PENDIENTE
4. Recordarme en este equipo                                PENDIENTE
5. Error: no ha introducido los datos                       PENDIENTE
6. Error: ha introducido datos equivocados                  PENDIENTE
7. Error: ha intentado saltarse el ingreso                  PENDIENTE
8.                                                          PENDIENTE
Referencias y observaciones: 
A. 
B. 
C. 
   
-->

<!DOCTYPE html>
<!-- Tratamiento de los errores recibos por el método GET -->
<!-- Archivo 14Ingreso.php -->
<!--  -->
<?php
?>
    <?php 
    require_once '001HeadSAB.php';
    ?>
    
    <body>
        <!-- Menú principal de SAB -->
        <?php 
        require_once '002MenuPrincipalSAB.php';
        ?>
        <!-- Aquí va el Jumbotron de SAB -->
        <?php 
        require_once '003JumbotronSAB.php';
        ?>
        
        <!-- Zona de formulario de Incio de Sesión  -->
        <div class="container">
            <h1>
                Inicio de sesión
            </h1>
            <br>
            <form action="15ListaAgrupaciones.php" method="POST">
                <div class="form-group">
                    <label><i class="far fa-user"></i> Nombre Agrupación</label><br>
                    <input type="text" class="form-control" name="agrupacion" id="nombre" size="50" placeholder="Usuario"><br>
                    <label><i class="far fa-user"></i> País</label><br>
                    <input type="text" class="form-control" name="pais" id="nombre" size="50" placeholder="Usuario"><br>
                    <label><i class="fas fa-key"></i> Ciudad</label><br>
                    <input type="text" class="form-control" name="ciudad" id="correo" size="50" placeholder="Contraseña"><br>                                        
                </div>
                
                <div class="form-group">
                    <input class="btn btn-primary"type="submit" value="Buscar">
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
        
        <!-- Pie de página de SAB -->
        <?php 
        require_once '004FooterSAB.php';
        ?>
        
        <!-- Comentarios -->             
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

