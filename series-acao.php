<!DOCTYPE html>
<html lang="PT">
    <?php 
        $title = 'Lord Geek - Series - Ação';
        include 'includes/head.php';
    ?>
<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- compiled and minified Bootstrap JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!--NAV-->
    <?php 
        $active = '5';
        //include '../../includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    
        //NAV ESQUERDA TESTE
        //include 'includes/nav-esquerda.php'; 
        //include 'includes/nav-esquerda-2.php'; 
    ?>
    <!-- INCLUDE HEADER -->
    <img src="img/logo-series.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    
    
    
    <div class="well"><b>Series de ação</b> </div>
    
    
     <div class="container-fluid">
    <div class="row">
        <article class=" lanc1 col-md-12 ">
   <section class="col-md-6 col-sm-6 col-lg-6 post"><a href="series-executor.php"> <figure>
  <img src="./img/series/executorn.jpg" class="img-responsive" alt="teste">
  <figcaption><span class="hid">Bastard executor 2ª Temporada  Episódio 13 resumo</span></figcaption>
</figure>
            
            
            
            </section>
            
            
            
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 post"><a href="series-last.php"> <figure>
  <img src="./img/series/thelast.jpg" class="img-responsive" alt="teste">
  <figcaption><span class="hid">The last Kingdom 2ª Temporada  Episódio 3 resumo</span></figcaption>
</figure>
            
            
            
            </section>
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 post"><a href="series-power.php"> <figure>
  <img src="./img/series/power-starz.jpg" class="img-responsive" alt="teste">
  <figcaption><span class="hid">Power 2ª Temporada  Episódio 6 resumo</span></figcaption>
</figure>
            
            
            
            </section>
            
            
            
                        
<section class="col-md-6 col-sm-6 col-lg-6 post"><a href="series-forever.php"> <figure>
  <img src="./img/series/forever.jpg" class="img-responsive" alt="teste">
  <figcaption><span class="hid">Forever 1ª Temporada  Episódio 6 resumo</span></figcaption>
</figure>
            
            
            
            </section>

                                         
       

            
            
            
            
            
            </div>
            </div>
        </article>
            
    
    <article>
    
    
  
            
            
            
           
    
    
    
    
    
    
    
    <!---->
    
    <!--<hr>
    <hr class="style-four"> -->
    
    <!--OUTRAS SEÇÕES-->
    <?php 
        $inclui_secao='series';
        include 'includes/secoes.php';
    ?>
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
