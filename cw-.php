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
        include 'includes/nav-dropdown.php';
    ?>
    <!-- INCLUDE HEADER -->
    <img src="img/logo-cw.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    <!--SEÇÃO NET AFORA-->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="titulo-secao-h2">
            <a href="cw-net-afora.php">Net @fora</a>
        </h2>
        <!-- DIV NOTICIA ESQUERDA -->
        <div class="col-xs-12 col-sm-6 col-md-6">
            <article>
                <h3 class="cw-principal-titulo"><a href="./cw-news.php">Vídeo - Já acabou Jéssica?</a></h3>
                <img src="img/cultura-web/ja-acabou-jessica_500.jpg" class="col-xs-12 img-responsive">
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    <a href="#">Veja o vídeo[...]</a>
                </p>
            </article>
        </div>

        <!-- DIV NOTICIA DIREITA -->
        <div class="col-xs-12 col-sm-6 col-md-6 esconde-secoes-home-mobile">
            <article class="col-md-12">
                <h3 class="cw-principal-titulo"><a href="./cw-news-2.php">News - Anonymous declara guerra ao Estado Islamico</a></h3>
                <img src="img/cultura-web/anonymous-face_100x67.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent laoreet, nulla eu auctor euismod, neque tellus posuere eros, quis consequat eros sem id lacus. Donec congue purus nec hendrerit bibendum. Mauris felis dolor, lobortis nec rutrum vel, lobortis eu quam. <!--Donec dignissim sapien metus, et rutrum tortor convallis a. In pharetra vulputate enim, ac tincidunt metus sollicitudin at. -->
                    <a href="#">Leia mais[...]</a>
                </p>
            </article>
            <article class="col-md-12">
                <h3 class="cw-principal-titulo"><a href="./cw-news-3.php">News - Horror na França</a></h3>
                <img src="img/cultura-web/horror-na-franca.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="#">Leia mais[...]</a>
                </p>
            </article>
            <article class="col-md-12 hidden-sm">
                <h3 class="cw-principal-titulo"><a href="./cw-news-4.php">News - Uber de Belo Horizonte terá opção para usar o serviço para doar água</a></h3>
                <img src="img/cultura-web/uber-bh.png" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="#">Leia mais[...]</a>
                </p>
            </article>
        </div> <!--FIM DIV NOTICIA DIREITA-->
    </div> <!--FIM ROW NET AFORA-->

    <!--SEÇÃO BLOGS-->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="titulo-secao-h2">
            <a href="cw-blogs.php">Blogs</a>
        </h2>
        <!-- DIV BLOG ESQUERDA -->
        <div class="col-xs-12 col-sm-6 col-md-6">
            <article>
                <h3 class="cw-principal-titulo">Gizmodo: Como não ser enganado na Black Friday 2015</h3>
                <img src="img/cultura-web/shopping-cart_500.jpg" class="col-xs-12 img-responsive">
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    <a href="http://gizmodo.uol.com.br/guia-black-friday-2015/">Leia mais[...]</a>
                </p>
            </article>
        </div>

        <!-- DIV BLOG DIREITA -->
        <div class="col-xs-12 col-sm-6 col-md-6 esconde-secoes-home-mobile">
            <article class="col-md-12">
                <h3 class="cw-principal-titulo">Tecnoblog: Estamos no melhor momento para comprar smartphones</h3>
                <img src="img/cultura-web/tecnoblog-smartphone-for-sale.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado">
                    Praesent laoreet, nulla eu auctor euismod, neque tellus posuere eros, quis consequat eros sem id lacus. Donec congue purus nec hendrerit bibendum. Mauris felis dolor, lobortis nec rutrum vel, lobortis eu quam. <!--Donec dignissim sapien metus, et rutrum tortor convallis a. In pharetra vulputate enim, ac tincidunt metus sollicitudin at.-->
                    <a href="https://tecnoblog.net/187789/yelllow-black-friday-saraiva/">Leia mais[...]</a>
                </p>
            </article>
            <article class="col-md-12">
                <h3 class="cw-principal-titulo">Nerdista: Jessica Jones: o que você precisa saber antes de começar a série</h3>
                <img src="img/cultura-web/nerdista-jessica-jones-netflix.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="http://nerdista.com.br/jessica-jones-o-que-voce-precisa-saber-sobre-ela-antes-de-comecar-serie/">Leia mais[...]</a>
                </p>
            </article>
            <article class="col-md-12 hidden-sm">
                <h3 class="cw-principal-titulo">Jovem Nerd: Samurai Jack vai ganhar uma nova temporada</h3>
                <img src="img/cultura-web/jovem-nerd-samurai-jack.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="http://jovemnerd.com.br/nerd-news/samurai-jack-vai-ganhar-uma-nova-temporada/">Leia mais[...]</a>
                </p>
            </article>
        </div> <!--FIM DIV NOTICIA DIREITA-->
    </div> <!--FIM BLOGS-->

    <!--SEÇÃO EVENTOS TECH-->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="titulo-secao-h2">
            <a href="cw-blogs.php">Eventos Tech</a>
        </h2>
        <!-- DIV NOTICIA ESQUERDA -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <article>
                <h3 class="cw-principal-titulo">CCXP – Comic Con Experience</h3>
                <img src="img/cultura-web/evento-ccxp-min.jpg" class="col-xs-12 img-responsive">
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    <a href="http://www.ccxp.com.br/">Leia mais[...]</a>
                </p>
            </article>
        </div>
        <!-- DIV EVENTO CENTRO -->
        <div class="col-xs-12 col-sm-6 col-md-4 hidden-xs">
            <article>
                <h3 class="cw-principal-titulo">Campus Party</h3>
                <img src="img/cultura-web/evento-campus-party-brasil.jpg" class="col-xs-12 img-responsive">
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    <a href="http://brasil.campus-party.org/">Leia mais[...]</a>
                </p>
            </article>
        </div>
        <!-- DIV EVENTO ESQUERDA -->
        <div class="col-xs-12 col-sm-6 col-md-4 hidden-xs hidden-sm">
            <article>
                <h3 class="cw-principal-titulo">BGS - Brasil Game Show</h3>
                <img src="img/cultura-web/evento-brasil-game-show-min.jpg" class="col-xs-12 img-responsive">
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    <a href="http://www.brasilgameshow.com.br/">Leia mais[...]</a>
                </p>
            </article>
        </div>
    </div> <!--FIM EVENTOS TECH-->

    <!--OUTRAS SEÇÕES-->
    <?php
        $inclui_secao='cw';
        include 'includes/secoes.php';
    ?>
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
