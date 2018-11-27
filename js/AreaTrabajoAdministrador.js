            $(document).ready(function(){
                $('#CargarEstadoCuenta').click(function(){
                    $("#AreaTrabajo").load("01Administrador01.php");
                });
                $('#PQRComunidad').click(function(){
                    $("#AreaTrabajo").load("Opcion2.html");
                });
                $('#CargarListaMiembros').click(function(){
                    $("#AreaTrabajo").load("01Administrador-CargarUsuarios.php");
                });
                $('#ConfigurarAgrupacion').click(function(){
                    $("#AreaTrabajo").load("01Administrador-ConfigurarAgrupacion.php");
                });
                $('#ConfigurarEspacioFisico').click(function(){
                    $("#AreaTrabajo").load("01Administrador-EspacioFisico.php");
                });              
                $('#ConfigurarImagenes').click(function(){
                    $("#AreaTrabajo").load("01Administrador-ConfigurarImagenes.php");
                });
                $('#ConfigurarLocalidad').click(function(){
                    $("#AreaTrabajo").load("01Administrador-ConfigurarLocalidad.php");
                });
                $('#CargarListaDocumentos').click(function(){
                    $("#AreaTrabajo").load("01Administrador-ListaDocumentos.php");
                });
                
            })

