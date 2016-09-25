<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Home';
        include 'includes/head.php';
    ?>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- compiled and minified Bootstrap JavaScript -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!--<div class="container">-->
    <!--NAV-->
    <?php 
        $active = '1';
        //NAV DROPDOWN
        include 'includes/nav-dropdown.php';
    ?>
    
    <!-- CONTEUDO DA PÁGINA -->    
    
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide esconde-carrousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <!--<img src="/assets/example/bg_suburb.jpg" style="width:100%" class="img-responsive">-->
          <img src="img/slide-game.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
                <h1 class="titulos-home highlight link-carousel"><a href="./games.php">Games: Novidades em 2016</a></h1>
              <!--<p>...</p>
              <p><a class="btn btn-lg btn-primary" href="./games.php">GAMES</a></p>-->
            </div>
          </div>
        </div>
        
        <div class="item">
         <img src="img/slide-series.jpg" class="img-responsive">
         <div class="container">
            <div class="carousel-caption">
                <h1 class="titulos-home highlight link-carousel"><a href="./series.php">Séries: Ele está chegando</a></h1>
              <!--<p>...</p>
              <p><a class="btn btn-lg btn-primary" href="./series.php">SÉRIES</a></p>-->
            </div>
          </div>
        </div>
        
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
      </a>  
    </div>
    <!-- /.carousel -->    
    
    <article class="col-xs-12 col-sm-12 col-md-12 thumbnail">
        <section class="row">
            <h1 class="col-md-12 titulos-home"><a href="games.php">Games</a></h1>

            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/games/thelast.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Aventura</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/games/fifa16.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Esporte</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
        </section>
    </article>
    
    
	<article class="col-xs-12 col-sm-12 col-md-12 thumbnail">
        <section class="row">
            <h1 class="titulos-home col-md-12"><a href="musica.php">Música</a></h1>

            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/musica/TomorrowlandBrasil.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Nacional</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/musica/Tomorrowland.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Internacional</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
        </section>
    </article>
    
    
	<article class="col-xs-12 col-sm-12 col-md-12 thumbnail">
        <section class="row">
            <h1 class="titulos-home col-md-12"><a href="cinema.php">Cinema</a></h1>

            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/cinema/cinemafotofilme10.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Em Cartaz</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/cinema/cinemacapafilme04.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Filmes</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
        </section>
    </article>
    
    
	<article class="col-xs-12 col-sm-12 col-md-12 thumbnail">
        <section class="row">
            <h1 class="titulos-home col-md-12"><a href="series.php">Séries</a></h1>

            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/cinema/cinemafotofilme10.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Ação</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/cinema/cinemacapafilme04.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Lançamentos</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
        </section>
    </article>
    
    
		<article class="col-xs-12 col-sm-12 col-md-12 thumbnail">
        <section class="row">
            <h1 class="titulos-home col-md-12"><a href="cw-.php">Cultura Web</a></h1>

            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/cultura-web/horror-na-franca500x334.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Net @fora</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
            <aside class="col-xs-12 col-sm-6 col-md-6">
                <img src="./img/cultura-web/evento-ccxp-min.jpg" class="img-responsive col-md-6">
                <p class="subtitulo-home">Eventos Tech</p>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. Vestibulum efficitur leo id orci molestie, vel dapibus tortor eleifend. Pellentesque luctus vitae est ac euismod.
                </p>
            </aside>
            
        </section>
    </article>

 <!-- ################## -->
    
    <!--FOOTER-->
    <?php 
        include 'includes/footer.php'; 
    ?>
    
<!--</div> fim di div container-->
</body>
</html>
