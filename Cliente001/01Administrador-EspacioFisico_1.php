<!DOCTYPE html>
<html>
    <head>
        <title>Arrastrar y Soltar</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/prefixfree.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui.js"></script>
        <script>
            function allowDrop(ev){ //permitirSoltar
                ev.preventDefault()
                document.getElementById("caja3").classList.add("detectar")
            }
            function drag(ev){  //Arrastrar
                ev.dataTransfer.setData("text",ev.target.id)
            }
            function drop(ev){  //Soltar
                ev.preventDefault()
                var data = ev.dataTransfer.getData("text")
                ev.target.appendChild(document.getElementById(data))
                document.getElementById("caja2").classList.remove("detectar")
                document.getElementById("drag1").setAttribute("draggable","true")
            }
        </script>
        <style>
            .box{
                display: inline-block;
                margin: 80px;
                padding: 10px;
                text-align: center;
                vertical-align: top;
                width: 150px;
            }
            #caja1, #caja2{
                border: 1px solid #333;
                height: 150px;
                width: 100%;
            }
            #caja3{
                border: 1px solid #333;
                height: 150px;
                width:  100%;            }
            img{
                width: 100%; 
            }
            .detectar{
                background: #ddd;
                border: 3px dashed #aaa !importat;
            }
        </style>
    </head>
    <body>        
        <div class="container">
            <h1>Drag & Drop API</h1>
            <div class="box">
                <h3>Elementos</h3>
                <div class="img" id="caja1">
                    <img id="drag1" src="imagenes/casa01.png" draggable="true" ondragstart="drag(event)">                    
                </div>  
                <div class="img" id="caja2">
                    <img id="drag1" src="imagenes/casa01.png" draggable="true" ondragstart="drag(event)">                    
                </div>                
            </div>
            <div class="box">
                <h3>Agrupación</h3>
                <div class="img" id="caja3" ondrop="drop(event)" ondragover="allowDrop(event)">
                    
                </div>
            </div>
        </div>
    </body>
</html>


<?php
?>
