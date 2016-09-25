<!DOCTYPE html>
<html lang="PT">
    <?php 
        $title = 'Lord Geek - Series - Renovadas';
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
    
    <div class="well"><b>Series Renovadas</b> </div>
    
   
    
            
               <!--inicio conteudo -->
 
    
    <article>
    

      <div class="container-fluid">
    <div class="row">
       
        <article class="col-md-12 ">
    <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"><a href="series-twd.php"> <figure>
  <img src="./img/series/ntwd.jpg" class="img-responsive" alt="teste">
  <figcaption><span class="hid">The walking dead  7 temporada</span></figcaption>
</figure></section>
            
            
            
            <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"><a href="series-bls.php"> <figure>
  <img src="./img/series/blss.jpg" class="img-responsive" alt="teste">
  <figcaption><span class="hid"> Black Pirata 2 temporada</span></figcaption>
</figure></section>
            
            
            
            
            <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"><a href="series-supernatural.php"> <figure>
  <img src="./img/series/supenatural.jpg" class="img-responsive" alt="Super">
  <figcaption><span class="hid">Supernatural 11 temporada</span></figcaption>
</figure></section>
            
            
            <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"><a href="series-znation.php"> <figure>
  <img src="./img/series/Znation.jpg" class="img-responsive" alt="ZNation">
  <figcaption><span class="hid">serie z nation 11 temporada</span></figcaption>
</figure></section>
            
        </article>
        
        
            
            <div class="well"><b>+ series</b> </div>
            
            
            <article>
            <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"><a href="series-demolidor.php"> <figure>
  <img src="./img/series/demolid.jpg" class="img-responsive" alt="demolidor">
  <figcaption><span class="hid">serie Demolidor 2 temporada</span></figcaption>
</figure></section>
            
            
            <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"><a href="series-bates.php"> <figure>
  <img src="./img/series/bates.jpg" class="img-responsive" alt="Bates">
  <figcaption><span class="hid">Bates motel 3 temporada</span></figcaption>
</figure></section>
            
            
            <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"> <figure>
  <img src="./img/series/newflash.jpg" class="img-responsive" alt="Flash">
  <figcaption><span class="hid">serie THE Flash 3 temporada</span></figcaption>
</figure></section>
            
            
            
           <section class="col-md-5 col-sm-3 col-lg-3 thumbnail"><a href="series-american.php"> <figure>
  <img src="./img/series/american.jpg" class="img-responsive" alt="American">
  <figcaption><span class="hid">serie American 2 temporada</span></figcaption>
</figure></section>           

        
    
    </article>
   
                        
   
    
        
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
