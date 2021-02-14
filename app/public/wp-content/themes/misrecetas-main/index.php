<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Mis recetas</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <meta name="description" content="Página web sobre mis recetas">
        <meta name="keywords" content="recetas, gastronomía, comer">
        <link rel="icon" href="ico.png">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/style.css">  
        <link rel="stylesheet" href=""> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet"> 
    </head>

    <body>
        <div class="container">

            <header id="header" class="block-center-row mb-3">                
                <img src="<?php echo get_stylesheet_directory_uri() ; ?>/images/logo.png" alt="Mis recetas">
            </header>            

            <nav class="nav-main fnt-lg block-center-row mb-2">
            <ul>
        <li>inicio</li>
        <li class="separator">|</li>
        <li><a href="_recetas.html">recetas</a></li>
        <li class="separator">|</li>
        <li><a href="contactar.html">contactar</a></li>
      </ul>     
            </nav>
    
            <main class="grid">
                
                    <section class="col-desk-10 col-tab-8 col-mob-12 separator-block">  
                        <div class="grid">
                            <div class="col-desk-6 col-tab-6 mb-2">
                                <h2 class="head-strong txt-center mb-05">Lubina con hummus</h2>                            
                                <img class="img-md" src="<?php echo get_stylesheet_directory_uri() ; ?>/imagenes/lubina-con-hummus-de-guisantes.jpg">
                            </div>
                            <div class="col-desk-6 col-tab-6 mb-2">
                                <h2 class="head-strong txt-center mb-05">Tiramisú express</h2>
                                <img class="img-md" src="<?php echo get_stylesheet_directory_uri() ; ?>/imagenes/tiramisu-express.jpg">
                            </div>
                            <div class="col-desk-6 col-tab-6 mb-2">
                                <h2 class="head-strong txt-center mb-05">Espaguettis de calabacín</h2>
                                <img class="img-md" src="<?php echo get_stylesheet_directory_uri() ; ?>/imagenes/espaguetis-de-calabacin.jpg">
                            </div>
                            <div class="col-desk-6 col-tab-6 mb-2">
                                <h2 class="head-strong txt-center mb-05">Vichyssoise de esparragos</h2>
                                <img class="img-md" src="<?php echo get_stylesheet_directory_uri() ; ?>/imagenes/vichyssoise-de-esparragos-blancos.jpg">
                            </div>
                           
                        </div>
                    </section>
                    <aside class="col-desk-2 col-tab-4 col-mob-12">  

                        <h2 class="head-strong txt-center mb-05">Menu del día</h2>

                        <div class="bg-light pad-1 rounded">
                            <div class="grid">
                                <div class="col-mob-4 mb-1">
                                    <h3 class="fnt-md head-strong mb-05 txt-center">Entrante</h3>
                                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri() ; ?>/imagenes/vichyssoise-de-esparragos-blancos.jpg">
                                </div>
                                <div class="col-mob-4 mb-1">
                                    <h3 class="head-strong mb-05 txt-center">Principal</h3>
                                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri() ; ?>/imagenes/lubina-con-hummus-de-guisantes.jpg">
                                </div>
                                <div class="col-mob-4 mb-1">
                                    <h3 class="head-strong mb-05 txt-center">Postre</h3>
                                    <img class="img-md rounded" src="<?php echo get_stylesheet_directory_uri() ; ?>/imagenes/tiramisu-express.jpg">
                                </div>
                            </div>                            
                        </div>    
                    </aside>
               
            </main>

            <div class="mb-3"></div>    
            <footer id="footer" class="pad-2 row-full block-center-row">
                Misrecetas.com © 2021
            </footer>

        </div>
        
       
    </body>

</html>