<!DOCTYPE html>

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
    <script type="text/javascript" src="../js/AreaTrabajoAdministradorConfiguracion.js"></script>
</head> 
<html>
    <head>
        <title>Espacio Físico de la Agrupación</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/prefixfree.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui.js"></script>
    </head>
    <body>         
        <div class="container">
            <div div class="form-group">
                <h3>Elementos del espacio físico de la agrupación</h3>
                <hr>
                <form action="01Administrador-EspacioFisico_2.php" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <label> Elemento</label>
                            <select class="custom-select" name="SeleccionarElementoFisico">
                                <option> Edificio</option>
                                <option> Casa</option>
                                <option> Bloque</option>
                                <option> Piscina</option>
                                <option> Recepción</option>
                                <option> Parqueaderos</option>
                                <option> Depósitos</option>
                                <option> Cuarto de máquinas</option>
                                <option> Parque para niños</option>
                            </select>
                        </div>       
                        
                        <div class="col-md-6">
                            <label> Etiqueta</label>
                            <input type="text" class="form-control" name="etiqueta" id="nombre" size="50" placeholder="Torre">
                        </div>                        
                        <div class="col-md-3">
                            <label> Cantidad</label>
                            <input type="text" class="form-control" name="cantidad" id="nombre" size="5" placeholder="numeroTorres">
                        </div> 
                    </div>

                    <div class="float-right"> <!-- Botón para el cálculo y recarga -->
                        <br>
                        <input type="submit" id="AgregarEspacioFisico" class="btn btn-primary" value="Agregar elemento">
                    </div>

                </form>
                <br><br>
                <hr>
                <table class="table table-striped table-hover">
                <?php 
                //Definimos un arreglo 
                $elementos = array();
                $etiquetas = array();
                $cantidades = array();
                //Verficamos si la variable de POST existe
                if(isset($_POST['SeleccionarElementoFisico'])&&isset($_POST['etiqueta'])&&isset($_POST['cantidad'])){    
                    if(!empty($_POST['SeleccionarElementoFisico'])&&!empty($_POST['etiqueta'])&&!empty($_POST['cantidad'])){
                        $elementos[0] = $_POST['SeleccionarElementoFisico']; 
                        $etiquetas[0] = $_POST['etiqueta'];
                        $cantidades[0] = $_POST['cantidad'];
                        $encabezadoTabla = '
                            <tr>                        
                                <th>NOMBRE</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                            ';
                        echo $encabezadoTabla;
                        for($con=0; $con<$_POST['cantidad']; $con++){
                            $etiquetas[$con] = $_POST['etiqueta'];
                            echo '<tr>';
                            echo '<th>'.$etiquetas[$con]." ".($con+1).'</th>';              
                            echo    '<th>
                                        <input type="submit" class="btn-success" value="Editar">
                                    </th>'; 
                            echo    '<th>                                    
                                            <input type="submit" class="btn-danger" value="Borrar">                                
                                    </th>'; 
                            echo '</tr>';
                        }                                                           

                    }    
                }else{
                    echo 'La variable no existe';
                }
                ?>                    
                </table>
                

                
            </div>


        </div>
        
    </body>
</html>



