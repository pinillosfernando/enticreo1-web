<!--
Proyecto SAB - Cómo funciona SABP
Autor:      Luis Fernando Pinillos Gómez
Fecha:      Mayo de 2018 
Objetivos:  
1. Página estándar (index)                                  CUMPLIDO
2. Nombre                                                   CUMPLIDO
3. Correo electrónico                                       CUMPLIDO
4. Asunto                                                   CUMPLIDO
5. Mensaje                                                  CUMPLIDO
6. Estilos de formulario con Boostrap                       PENDIENTE
7. Gestión de errores al diligenciar formulario             PENDIENTE
8. PHP para enviar por correo                               PENDIENTE
Referencias y observaciones: 
A. No se ha logrado tener el header fijo.
B. Los accesos de ingresar y registrarse mejor con botones de colores.
C. Prudente poner en el pié de página, la dirección de la empresa, 
   correo de contacto, etc.
-->

<!DOCTYPE html>
<!-- Tratamiento de errores recibidos por GET -->
<!-- Archivo 12Contacto.php -->
<!--  -->
<?php
    if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
                $errors[2] = '<span class="error">Ingrese un email correcto</span>';
            }else if($_POST['asunto'] == ''){
                    $errors[3] = '<span class="error">Ingrese un asunto</span>';
                    }else if($_POST['mensaje'] == ''){
                            $errors[4] = '<span class="error">Ingrese un mensaje</span>';
                            }else{
                                $dest = "gerencia.sabcolombia@gmail.com";   //Email de destino
                                $nombre = $_POST['nombre'];                 //Nombre
                                $email =  $_POST['email'];                  //Email
                                $asunto = $_POST['asunto'];                 //Asunto
                                $cuerpo = $_POST['mensaje'];                //Cuerpo del mensaje
                                //Cabeceras del correo
                                $headers = "From: $nombre <$email>\r\n"; //Quien envia?
                                $headers .= "X-Mailer: PHP5\n";
                                $headers .= 'MIME-Version: 1.0' . "\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
 
                                if(mail($dest,$asunto,$cuerpo,$headers)){
                                    $result = '<div class="result_ok">Email enviado correctamente </div>';
                                    // si el envio fue exitoso reseteamos lo que el usuario escribio:
                                    $_POST['nombre'] = '';
                                    $_POST['email'] = '';
                                    $_POST['asunto'] = '';
                                    $_POST['mensaje'] = '';
                                }else{
                                    $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
                                }
                            }
    }
?>

<!DOCTYPE html>
<html>
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
        
        <!-- Zona de formulario de contacto  -->
        <div class="container">
            <h1>
                Contactenos
            </h1>
            <br>
            <form action="13Contacto.php" method="POST">
                <div class="form-group">
                    <label><i class="far fa-user"></i> Nombre</label><br>
                    <input type="text" class="form-control" name="nombre" id="nombre" size="50" placeholder="Nombre"><br>
                    <label><i class="far fa-envelope"></i> Correo electrónico</label><br>
                    <input type="text" class="form-control" name="correo" id="correo" size="50" placeholder="Correo Electrónico"><br>                    
                    <label><i class="far fa-bookmark"></i> Asunto</label><br>
                    <input type="text" class="form-control" name="asunto" id="asunto" size="50" placeholder="Asunto"><br>
                    <label><i class="far fa-edit"></i> Mensaje</label><br>
                    <textarea name="mensaje" class="form-control" rows="10" cols="50" placeholder="Escriba su mensaje aquí"></textarea><br/>
                </div>
                
                <div class="form-group">
                    <input class="btn btn-primary"type="submit" value="Enviar">
                </div>                
            </form>  
            <?php 
            echo 'Mensaje no enviado. Favor diligenciar todos los campos';
            echo 'Mensaje enviado';
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
