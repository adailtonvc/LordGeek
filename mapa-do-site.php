<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lork Geek - Mapa do Site';
        include 'includes/head.php';
    ?>
<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- compiled and minified Bootstrap JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!--NAV-->
    <?php include 'includes/nav-dropdown.php'; ?>
    
    <!-- CONTEUDO DA PÁGINA -->
    <img src="img/logo-mapa-do-site.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    <!--<h1 class="titulo-secao">MAPA DO SITE</h1>-->
    <article>
        <aside class="col-xs-6 col-sm-6 col-md-2">
            <strong>Games</strong>
            <ul class="list-unstyled">
                <li><a href="./games.php">Games - Principal</a></li>
                <li><a href="./games-aventura.php">Games - Aventura</a></li>
                <li><a href="./games-esporte.php">Games - Esporte</a></li>
                <li><a href="./games-luta.php">Games - Luta</a></li>
                <li><a href="./games-rpg.php">Games - RPG</a></li>
                <li><a href="./games-tiro.php">Games - Tiro</a></li>
                <li><a href="./games-mobile.php">Games - Mobile</a></li>
            </ul>
        </aside>
        <aside class="col-xs-6 col-sm-6 col-md-2">
            <strong>Música</strong>
            <ul class="list-unstyled">
                <li><a href="./musica.php">Música - Principal</a></li>
                <li><a href="./musica-billboard.php">Música - Billboard</a></li>
                <li><a href="./musica-festbr.php">Música - Festivais BR</a></li>
                <li><a href="./musica-festint.php">Música - Festivais Internacionais</a></li>
                <li><a href="./musica-itunes.php">Música - Itunes</a></li>
                <li><a href="./musica-nostalgia.php">Música - Playlist Nostalgia</a></li>
                <li><a href="./musica-rock.php">Música - Playlist Rock</a></li>
                <li><a href="./musica-eletronica.php">Música - Playlist Eletrônica</a></li>
            </ul>
        </aside>
        <aside class="col-xs-6 col-sm-6 col-md-2">
            <strong>Cinema</strong>
            <ul class="list-unstyled">
                <li><a href="./cinema.php">Cinema - Principal</a></li>
                <li><a href="./cinema-filmes.php">Cinema - Filmes</a></li>
                <li><a href="./cinema-fotos.php">Cinema - Fotos</a></li>
                <li><a href="./cinema-videos.php">Cinema - Videos</a></li>
                <li><a href="./cinema-emcartaz.php">Cinema - Em Cartaz</a></li>
            </ul>
        </aside>
        <aside class="col-xs-6 col-sm-6 col-md-2">
            <strong>Séries</strong>
            <ul class="list-unstyled">
                <li><a href="./series.php">Series - Principal</a></li>
                <li><a href="./series-acao.php">Series - Ação</a></li>
                <li><a href="./series-terror.php">Series - Terror</a></li>
                <li><a href="./series-aventura.php">Series - Aventura</a></li>
                <li><a href="./series-comedia.php">Series - Comédia</a></li>
                <li><a href="./series-lancamento.php">Series - Lançamentos</a></li>
                <li><a href="./series-canceladas.php">Series - Séries Canceladas</a></li>
                <li><a href="./series-renovacoes.php">Series - Séries Renovadas</a></li>
            </ul>
        </aside>
        <aside class="col-xs-6 col-sm-6 col-md-2">
            <strong>Cultura Web</strong>
            <ul class="list-unstyled">
                <li><a href="./cw-.php">Cultura Web - Principal</a></li>
                <li><a href="./cw-net-afora.php">Net @fora</a></li>
                <li><a href="./cw-blogs.php">Blogs</a></li>
                <li><a href="./cw-eventos.php">Eventos Tech</a></li>
            </ul>
        </aside>
        <aside class="col-xs-6 col-sm-6 col-md-2">
            <strong>Outros</strong>
            <ul class="list-unstyled">
                <li><a href="./quem-somos.php">Quem Somos</a></li>
                <li><a href="./contato.php">Contato</a></li>
                <li><a href="./mapa-do-site.php">Mapa do Site</a></li>
            </ul>
        </aside>
    </article>
    <!-- ################## -->
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
