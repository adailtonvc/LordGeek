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
            <a href="cw-net-afora.php">Net Afora</a>
        </h2>
        <!-- DIV NOTICIA ESQUERDA -->
        <div class="col-xs-12 col-sm-6 col-md-8">
            <article>
                <h3 class="cw-principal-titulo">Vídeo - Já acabou Jéssica?</h3>
                <img src="img/cultura-web/ja-acabou-jessica_500.jpg" class="col-xs-12 img-responsive">
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
                <iframe width="500" height="315" src="https://www.youtube.com/embed/minpa52ZgIw" frameborder="0" allowfullscreen class="col-xs-12"></iframe>
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
                <p class="texto-justificado">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </article>
        </div>

        <!-- DIV NOTICIA DIREITA -->
        <div class="col-xs-12 col-sm-6 col-md-4 esconde-secoes-home-mobile">
            <aside class="col-md-12">
                <h3 class="cw-principal-titulo"><a href="./cw-news-2.php">News - Anonymous declara guerra ao Estado Islamico.</a></h3>
                <img src="img/cultura-web/anonymous-face_100x67.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent laoreet, nulla eu auctor euismod, neque tellus posuere eros, quis consequat eros sem id lacus. Donec congue purus nec hendrerit bibendum. Mauris felis dolor, lobortis nec rutrum vel, lobortis eu quam. <!--Donec dignissim sapien metus, et rutrum tortor convallis a. In pharetra vulputate enim, ac tincidunt metus sollicitudin at. -->
                    <a href="./cw-news-2.php">Leia mais[...]</a>
                </p>
            </aside>
            <aside class="col-md-12">
                <h3 class="cw-principal-titulo"><a href="./cw-news-3.php">News - Horror na França</a></h3>
                <img src="img/cultura-web/horror-na-franca.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="./cw-news-3.php">Leia mais[...]</a>
                </p>
            </aside>
            <aside class="col-md-12 ">
                <h3 class="cw-principal-titulo"><a href="./cw-news-4.php">News - Uber de Belo Horizonte terá opção para usar o serviço para doar água</a></h3>
                <img src="img/cultura-web/uber-bh.png" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="./cw-news-4.php">Leia mais[...]</a>
                </p>
            </aside>
            <aside class="col-md-12 ">
                <h3 class="cw-principal-titulo"><a href="./cw-news-5.php">News - Proteste faz novo esforço para impedir que operadoras bloqueiem o Watsapp</a></h3>
                <img src="img/cultura-web/whatsapp100x67.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="./cw-news-5.php">Leia mais[...]</a>
                </p>
            </aside>
            <aside class="col-md-12 ">
                <h3 class="cw-principal-titulo"><a href="./cw-news-6.php">Tutorial - Como acelerar o boot no Windows 10</a></h3>
                <img src="img/cultura-web/windows-10-100x67.jpg" class="img-responsive cw-principal-img">
                <p class="texto-justificado ">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis. Nullam dictum ipsum non erat lobortis consequat. <!--Morbi luctus diam velit, id tristique tellus accumsan ut.-->
                    <a href="./cw-news-6.php">Leia mais[...]</a>
                </p>
            </aside>
        </div> <!--FIM DIV NOTICIA DIREITA-->
    </div> <!--FIM ROW NET AFORA-->


    <!--OUTRAS SEÇÕES-->
    <?php
        $inclui_secao='cw';
        include 'includes/secoes.php';
    ?>
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
