<!DOCTYPE html>
<html lang="en">
<?php 
        $title = 'Lord Geek - Cinema';
        include 'includes/head.php'; 
    ?>
    <link rel="stylesheet" href="css/cinema.css">

    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- compiled and minified Bootstrap JavaScript -->
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!--NAV-->
        <?php 
        $active = '4';
        //include 'includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    
        //NAV ESQUERDA TESTE
        //include 'includes/nav-esquerda.php'; 
        //include 'includes/nav-esquerda-2.php'; 
    ?>
            <img src="./img/logo-cinema.jpg" class="img-responsive hidden-xs header-img center-block">
            <hr class="style-four hidden-xs">
            <h1 class="titulo-secao">CINEMA</h1>
            <!-- Começo do corpo da página -->
            <article id="width-cinema">
                <!-- começo do conteúdo -->

                <div class="container-fluid">
                    <div class="row">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos01">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos02">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos03">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos04">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos05">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos06">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos07">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos08">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos09">
                        <img src="img/cinema/300%5E2.png" alt="" class="paginafotos paginafotos10">
                    </div>
                </div>

                <!-- final do conteúdo -->
            </article>
            <!-- final do corpo da página -->
            <?php 
        $inclui_secao='cinema';
        include 'includes/secoes.php';
    ?>
                <!--FOOTER-->
                <?php include 'includes/footer.php'; ?>
    </body>

</html>