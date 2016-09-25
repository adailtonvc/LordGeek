<!DOCTYPE html>
<html lang="PT">
    <?php 
        $title = 'Lord Geek - Series - Canceladas';
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
    
    
    
    <div class="well"><b>Series Canceladas</b> </div>
    
   
    
            
               <!--inicio conteudo -->
 
    
    <article>
    

      <div class="container">
    <div class="row">
        <article class="col-md-12 ">
    <section class="col-md-6 col-sm-6 col-lg-6 thumbnail"><a href="series-two.php"> <figure>
  <img src="./img/series/two.jpg" class="img-responsive" alt="two and half man">
  <figcaption><span class="hid">two and half man Cancelada 12ª Temporada </span></figcaption>
</figure></section>
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 thumbnail"><a href="series-constatine.php"> <figure>
  <img src="./img/series/Constantine.jpg" class="img-responsive" alt="Constatine">
  <figcaption><span class="hid">Constantine Cancelada 1ª Temporada </span></figcaption>
</figure></section>
            
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 thumbnail"><a href="series-forever.php"> <figure>
  <img src="./img/series/forever.jpg" class="img-responsive" alt="Forever">
  <figcaption><span class="hid">Forever Cancelada 1ª Temporada</span></figcaption>
</figure></section>
            
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 thumbnail"><a href="series-executor.php"> <figure>
  <img src="./img/series/executorn.jpg" class="img-responsive" alt="The bastard">
  <figcaption><span class="hid">Bastard Executor Cancelada 1ª Temporada</span></figcaption>
</figure></section>
                        
            </div>

            </div>
            
            
        
    
    </article>
   
                        
   <aside>
        
       
        
        </aside>

    
        
            <!-- Fim  conteudo   -->
         
        
         
        
         
         
         
         
         
            
    
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
