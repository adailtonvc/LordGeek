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
<div class="container">
    <div class="row">
        
        <article>
            <aside class="col-xs-12 col-sm-6 col-md-12">
                <h1 class="col-md-5 col-xs-5">Rock</h1>
                <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/165745231&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
          </aside>
      </article>
</div> 
</div>
     
  <!--OUTRAS SEÇÕES-->
    <?php 
        $inclui_secao='musica';
        include 'includes/secoes.php';
    ?>
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>

