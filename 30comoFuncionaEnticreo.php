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
        
        <!-- Aquí va zona donde se explica cómo funciona SABP  -->
        <div class="container">
            <h1>
                ¿Cómo funciona la plataforma EnTICreo?
            </h1>
            <br> 
            
            <h2>ORIGEN DEL APLICATIVO</h2>
            <p class="post-contenido text-justify">
                El proyecto surge en respuesta al reto “Veeduría control ciudadano” de la localidad de La Candelaria de la ciudad de Bogotá, 
                en el marco del programa de formación Full Stack desarrollado por Fedesoft y el Ministerio de las TIC. 

                El reto fue seleccionado porque también contribuye a los retos de otras localidades que apuntan a la 
                veeduría ciudadana y la participación ciudadana, y en general, aunque no esté expresamente manifiesto, 
                contribuye a los retos de cualquiera de las localidades de la ciudad de Bogotá. 
                Se ha querido usar el término “Comunidades” en vez de “Localidades” considerando que 
                la idea se puede extrapolar a diferentes escenarios, no solo en Bogotá, sino a cualquier 
                comunidad urbana o rural alrededor del mundo. 
            </p>
            <br> 

            <h2>OBJETIVOS DEL RETO</h2>
            <p class="post-contenido text-justify">
                Se plantea por parte de los actores del reto, que la comunidad cuestiona las actuaciones de sus dirigentes en su gestión como actores públicos, por no contar con la información adecuada, entendiendo además que no existen espacios efectivos de participación ciudadana para el seguimiento y control de sus labores. 

                Entendemos, a partir de este planteamiento, los siguientes objetivos:
                1.	Construir un mecanismo de plataforma digital que cree puentes de confianza entre los actores políticos y los ciudadanos de la localidad, a partir de la información de estos.
                2.	Que a través de esos recursos tecnológicos que forman puentes, los ciudadanos puedan participar en el control de los procesos de interés público, y que desde allí, los ciudadanos puedan controvertir de manera más justa a favor o en contra, las actuaciones de los actores políticos frente a la gestión de los procesos. 
                3.	Que la plataforma tecnológica que se desarrolle no esté en el control público, sino en una administración independiente que no sesgue los contenidos.
                4.	Que a través de la plataforma, se generen proyectos de iniciativa popular. 
            </p>
            <br>

            <h2>SOLUCIÓN PROPUESTA</h2>
            <p class="post-contenido text-justify">
                Se propone crear el sitio web EnTICreco y una aplicación híbrida Enticreo, con las siguientes características:
            </p>
            <br>

            <h3>Nombre del proyecto</h3>
            <p class="post-contenido text-justify">
                EnTICreo parte de la idea de construir puentes de confianza entre actores políticos encargados de gestión pública, y los ciudadanos. La palabra encierra la idea de confianza al descomponerla en En-Ti-Creo. Por otra parte, nos recuerda que es una solución dada desde lo tecnológico al descomponer el nombre en En-TIC-Creo. 
            </p>
            <br>

            <h3>Aplicación web</h3>
            <p class="post-contenido text-justify">
                La aplicación web, adaptiva a cualquier tamaño de dispositivo visor, es como una revista de divulgación de artículos escritos por ciudadanos y actores políticos. Las reglas de publicación de artículos se pueden consultar en el mismo sitio web, y debe ser un actor válido y registrado en el sistema. Los artículos son validados por un comité editorial, y publicados consecutivamente por orden de aceptación del memorial. 

                Entre las funciones del comité editorial están el verificar los formatos y estilos de la escritura, y el cumplimiento de políticas de no agresión personal a otros actores, sin embargo, no es un sistema que pretenda coartar las iniciativas de quienes pretenden publicar en dicho espacio. Esto es consecuente con el lema “En Ti Creo”.

                La aplicación web se encargará de hacer las divisiones de temáticas asociadas al interés público, como lo son salud, educación, transporte, vivienda, urbanismo, juventud, industria, eventos, por solo mencionar algunos. En cada una de estas temáticas, se contará con una página dentro del sitio web, que indicará adicionalmente, los elementos de interés asociados a ella desde los actores públicos con funciones administrativas, de control, o ciudadanos envestidos de veedores. Se indicarán aspectos como entidad responsable, proyectos, indicadores de gestión, etc. 

                De esta manera, el sitio web cumple las condiciones de informar, y de dar espacios de participación, tanto a actores políticos como a ciudadanos en general. 

                Ahora bien. La forma de proponer un artículo es registrándose en la plataforma, desde la página asociada a la comunidad, de modo que se entienda que quien se registra es un actor ciudadano o un actor con funciones públicas, en el marco de esa comunidad. Una vez registrado, la persona puede ingresar a ver sus opciones, entre ellas, terminar de completar su perfil, las de escribir y enviar un artículo (o editarlo o borrarlo), examinar las estadísticas relacionadas con cada uno de sus artículos (comentarios, vistos, etc.), y el listar toda su producción ante esa comunidad. 
            </p>
            <br>

            <h3>Aplicación híbrida</h3>
            <p class="post-contenido text-justify">
                La aplicación híbrida es un acceso al sitio web de modo que se cuenta con una forma más sencilla de hacer seguimiento a los artículos que se están publicando y a las notificaciones que se están generando, en el caso de los usuarios registrados.
            </p>
            <br>        

            <h2>MODELO DEL NEGOCIO</h2>
            <p class="post-contenido text-justify">
                EnTICreo se constituye en el producto manejado por una organización no gubernamental, que trabaja en colaboración directa con las entidades gubernamentales de una localidad. La organización, por ser ajena al gobierno, se constituye en un ente independiente, capaz de juzgar los contenidos de las publicaciones que se realicen el sitio web, tanto las que provengan de funcionarios de entidades gubernamentales, como los que provengan de ciudadanos interesados en el tema.  

                Para cumplir sus fines, la organización nombrará administrador del sitio, y comité editorial. El veto o aval sobre artículos lo proporciona el comité editorial bajo consideraciones netamente técnicas. 

                La financiación del manejo y mantenimiento de la plataforma, se hace mediante procesos de licitación pública o de convenios Empresa – Estado. La financiación estatal incluye cubrir los costos y el margen de ganancia establecido para el oferente ganador en el proceso.

                Para los ciudadanos y actores políticos, el uso de la plataforma no debe representar costos. 
            </p>
            <br>

            <h2>ALCANCE DEL PROYECTO PRESENTADO</h2>
            <p class="post-contenido text-justify">
                El tamaño del proyecto planteado desborda los tiempos del curso de Full Stack, por tanto, se presenta un bosquejo medianamente funcional del proyecto para evaluación por parte de FEDESOFT. Esto incluye: 

                1.	La página web de inicio del sitio web del proyecto EnTICreo, completamente funcional. 
                2.	Una página web a cada uno de los servicios (salud, educación, transporte, seguridad pública, etc.) asociados en este caso, a la localidad de La Candelaria. Es claro que se puede replicar exactamente la idea para cualquier otra localidad o comunidad que así lo desee. 
                3.	En cada página de servicios, se encuentra un sistema de “migas de pan” correctamente construido pero no funcional, artículos con títulos ilustrativos y texto Lorem ipsum, botones de “Leer más” y “Comentarios”, paginación no funcional, aside con categorías indicando la unidad gubernamental del servicio, y los enlaces a “veeduría”, “indicadores de gestión”, “Informes de rendición de cuentas”, etc. y otro aside con más artículos. 
                4.	Desde cualquiera de las páginas del sitio web se puede ingresar a “ingresar” y “Registrese”, el cual lleva a formularios. El primero para solicitar usuario y contraseña, y el segundo para registrarse en la comunidad. Ambas funciones son funcionales, pero no cuentan con un sistema fuerte de respaldo de datos.
                5.	Al ingresar a la plataforma con usuario y contraseña correctas, se puede ver el menú de usuario de acuerdo al rol. Solo se implementa el rol de “funcionario”.
                6.	Se construyó una base de datos con una tabla usuarios de 10 registros. Es claro que se deben implementar más tablas en un sistema de bases de datos relacionales, entre ellas, tablas para guardar la información de perfiles, la información de los artículos, etc.. 
                7.	La aplicación móvil se construyó con el framework IONIC. Implementa una versión más reducida de lo indicado en la página web. No se hace conexión a base de datos. Simplemente se validan los usuarios con valores quemados en la lógica del programa. 
            </p>
            <br>

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
