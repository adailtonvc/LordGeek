<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Música';
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
        //include '../../includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    
        //NAV ESQUERDA TESTE
        //include 'includes/nav-esquerda.php'; 
        //include 'includes/nav-esquerda-2.php'; 
    ?>
    <!-- INCLUDE HEADER -->
    <img src="img/logo-musica.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    <!-- Começando meu código -->
  <section class="row">
            <aside class="col-xs-12 col-sm-6 col-md-4">
                <a href="musica-eletronica.php"><img src="img/musica/electro.png" class="img-responsive col-md-4 col-sm-4 col-xs-4"></a>
                <h4>Puts your hands!!!</h4>
                <p class="texto-secao-home col-md-6">
                    Quisque quis est consequat, egestas eros a, dignissim ipsum. Nullam dictum augue at nunc hendrerit imperdiet consectetur in sapien. Suspendisse scelerisque purus nec erat lobortis tempor. 
                </p>
            </aside>
            <aside class="col-xs-12 col-sm-6 col-md-4 esconde-secoes-home-mobile">
                <a href="musica-rock.php"><img src="img/musica/rock.jpg" class="img-responsive col-md-4 col-sm-4 col-xs-4"></a>
                <h4>Hoje é dia de Rock bebê.</h4>
                <p class="texto-secao-home col-md-6">
                    Praesent laoreet, nulla eu auctor euismod, neque tellus posuere eros, quis consequat eros sem id lacus. Donec congue purus nec hendrerit bibendum. Mauris felis dolor, lobortis nec rutrum vel, lobortis eu quam. 
                </p>
            </aside>
            <aside class="col-xs-12 col-sm-6 col-md-4 esconde-secoes-home-mobile esconde-secoes-home-tablet">
                <a href="musica-nostalgia.php"><img src="img/musica/nostalgia.png" class="img-responsive col-md-4 col-sm-4 col-xs-4"></a>
                <h4>Viva a Nostalgia.</h4>
                <p class="texto-secao-home col-md-6">
                    Praesent sit amet vestibulum neque. Duis in metus maximus, vestibulum est ac, pulvinar lorem. Suspendisse porta velit orci, eget convallis enim tempor viverra. Suspendisse id vehicula turpis.
                </p>
      </aside>
    </section>
    <hr class="style-four">
    <article class="center">
        <h1>Próximos Festivais</h1>
        <div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
        <a href="musica-festint.php">
            <h4>Internacionais</h4>
			<img src="img/musica/Tomorrowland.jpg">
        </a>
		</div>
		<div class="col-md-6">
        <a href="musica-festbr.php">
            <h4>Nacionais</h4>
			<img src="img/musica/TomorrowlandBrasil.jpg">
        </a>
		</div>
	</div>
</div>
    
   
    <section class="center col-xs-12 col-sm-12 col-md-12">
         <hr class="style-four">
          <h1>As mais tocadas</h1>
              <a href="musica-billboard.php"><img src="img/musica/Billboard2.png"></a>
              <a href="musica-itunes.php"><img src="img/musica/itunes1.png" ></a>
    </section>
    
<!--OUTRAS SEÇÕES-->
    <?php 
        $inclui_secao='musica';
        include 'includes/secoes.php';
    ?>
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
