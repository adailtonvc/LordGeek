<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Cultura Web';
        include 'includes/head.php';
    ?>
<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- compiled and minified Bootstrap JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!--NAV-->
    <?php 
        $active = '6';
        //include 'includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    ?>
    <img src="img/logo-cw.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    <!--SEÇÃO EVENTOS TECH-->
    <div class="col-xs-12 col-sm-12 col-md-12">
    <h2 class="titulo-secao-h2">
        <a href="cw-eventos.php">Eventos Tech</a>
    </h2> 
        <!-- DIV EVENTO ESQUERDA -->
        <div class="col-xs-12 col-sm-6 col-md-6">
            <article class="col-md-12">
                <h3 class="cw-principal-titulo">CCXP – Comic Con Experience</h3>
                <img src="img/cultura-web/evento-ccxp-min100x67.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent laoreet, nulla eu auctor euismod, neque tellus posuere eros, quis consequat eros sem id lacus. Donec congue purus nec hendrerit bibendum. Mauris felis dolor, lobortis nec rutrum vel, lobortis eu quam. <!--Donec dignissim sapien metus, et rutrum tortor convallis a. In pharetra vulputate enim, ac tincidunt metus sollicitudin at. -->
                    <a href="http://www.ccxp.com.br/">Leia mais[...]</a>
                </p>
            </article>
            <article class="col-md-12">
                <h3 class="cw-principal-titulo">Campus Party</h3>
                <img src="img/cultura-web/evento-campus-party-brasil100x67.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="http://brasil.campus-party.org/">Leia mais[...]</a>
                </p>
            </article>
        </div> <!--FIM DIV EVENTO ESQUERDA-->
        
        <!-- DIV EVENTO DIREITA -->
        <div class="col-xs-12 col-sm-6 col-md-6">
            <article class="col-md-12">
                <h3 class="cw-principal-titulo">BGS - Brasil Game Show</h3>
                <img src="img/cultura-web/evento-brasil-game-show-min100x67.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent laoreet, nulla eu auctor euismod, neque tellus posuere eros, quis consequat eros sem id lacus. Donec congue purus nec hendrerit bibendum. Mauris felis dolor, lobortis nec rutrum vel, lobortis eu quam. <!--Donec dignissim sapien metus, et rutrum tortor convallis a. In pharetra vulputate enim, ac tincidunt metus sollicitudin at. -->
                    <a href="http://www.brasilgameshow.com.br/">Leia mais[...]</a>
                </p>
            </article>
            <article class="col-md-12">
                <h3 class="cw-principal-titulo">Anime Friends - 2016</h3>
                <img src="img/cultura-web/evento-anime-friends-min100x67.png" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="http://www.animefriends.com.br/">Leia mais[...]</a>
                </p>
            </article>
        </div> <!--FIM DIV EVENTO DIREITA-->
    </div> <!--FIM ROW-->
    
    <!--OUTRAS SEÇÕES-->
    <?php 
        $inclui_secao='cw';
        include 'includes/secoes.php';
    ?>    
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
