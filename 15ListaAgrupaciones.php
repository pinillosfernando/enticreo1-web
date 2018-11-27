<?php

?>

<?php
require('/Cliente001/ProcesoConexion.php');
$agrupacion = $_POST['agrupacion'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$encabezadoTabla = '
            <tr>
                <th>No.</th>
                <th>NOMBRE</th>
                <th>PAÍS</th>
                <th>CIUDAD</th>
                <th>DIRECCIÓN</th>
                <th>CORREO ELECTRÓNICO</th>
            </tr>
        '; 
if(!empty($_POST['agrupacion'])){
    $consulta="SELECT `Nombre`, `Ciudad`, `Pais`, `Dirección`, `CorreElectronico` FROM `cliente001` WHERE `Nombre`='$agrupacion';";
}else{
    if(!empty($_POST['pais'])&&!empty($_POST['ciudad'])){
        $consulta="SELECT `Nombre`, `Ciudad`, `Pais`, `Dirección`, `CorreElectronico` FROM `cliente001` WHERE `Pais`='$pais' and `Ciudad`='$ciudad'";
    }else{
        if(!empty($_POST['pais'])){
            $consulta="SELECT `Nombre`, `Ciudad`, `Pais`, `Dirección`, `CorreElectronico` FROM `cliente001` WHERE `Pais`='$pais'";            
        }else{
            $consulta="SELECT `Nombre`, `Ciudad`, `Pais`, `Dirección`, `CorreElectronico` FROM `cliente001` WHERE 1";            
        }
    }
}


//echo $agrupacion." de ".$ciudad. " en ". $pais;
/*if (isset($_POST['usuario']) and isset($_POST['contrasenia'])){
    if(empty($_POST['usuario'])or empty($_POST['contrasenia'])){
        //echo 'Diligencie los campos de Usuario y Contraseña';
        header('location: 14Ingreso.php?err=1');
    }else {
        if($_POST['usuario']=='Pepito' && $_POST['contrasenia']=='123'){
            //echo 'Usuario y Contraseña correctos';
            session_start();
            if($_POST['recordar']==1){
                ini_set(session.cookie_lifetime,time()+(30));
            }
            $_SESSION['SesionAbierta']=$_POST['usuario'];
            header('location: indexResidente.php');
        }else {
            //echo 'Usuario y Contraseña no concuerdan';
            header('location: 14Ingreso.php?err=2');
        }
    }
}else{
    //echo 'No están definidas las variables';
    header('location: 14Ingreso.php?err=3');
}*/
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

        <div class="container">
            <div class="table-responsive">        
                <table class="table table-striped table-hover">
                    <?php echo $encabezadoTabla;
                    $db= new ConexionSAB();
                    $resultado = $db->query($consulta);
                    $contador=1;
                    while ($row = mysqli_fetch_array($resultado)){ //
                        echo '<tr>';
                        echo '<th>'.$contador.'</th>';              //No.
                        echo '<th><a href="Cliente001/index.php?idAgr='.$row['Nombre'].'">'.$row['Nombre'].'</a></th>';        //Nombre
                        echo '<th>'.$row['Ciudad'].'</th>';           //Rol
                        echo '<th>'.$row['Pais'].'</th>';
                        echo '<th>'.$row['Dirección'].'</th>';
                        echo '<th>'.$row['CorreElectronico'].'</th>';                        
                        echo '</tr>';
                        $contador++;
                    }                                   
                    ?>
                </table>                
            </div>    
        </div>