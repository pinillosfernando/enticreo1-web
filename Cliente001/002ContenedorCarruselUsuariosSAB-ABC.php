        <section class="main container">
            <div class="row"> 
                <!-- Aquí va logo de SAB  -->
                <section class="post col-md-3 hidden-xs hidden-sm">
                    <img class="d-block w-100" src="../imagenes/001 Logo SAS Colombia sas.gif" height="200" alt="Primero">
                </section>
                <!-- Aquí va el Slideshow  -->
                <section class="post col-md-6">           
                    <div id="carouselSAB" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src=<?php echo "../Cliente001/".$Imagen1Agrupacion;?> height="200" alt="Primero">                                
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=<?php echo "../Cliente001/".$Imagen2Agrupacion;?> height="200" alt="Segundo">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=<?php echo "../Cliente001/".$Imagen3Agrupacion;?>  height="200" alt="Tercero">                                
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselSAB" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselSAB" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Siguiente</span>
                        </a>
                    </div>                                  
                </section>
                <!-- Aquí va logo de SAB-ABC  -->
                <section class="post col-md-3 hidden-xs hidden-sm">
                    <img class="d-block w-100" src=<?php echo "../Cliente001/".$LogoAgrupacion;?> height="200" alt="Primero">
                </section>
            </div>
        </section>

