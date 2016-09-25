<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Series-Bates Motel';
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
        //include '../..includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    
        //NAV ESQUERDA TESTE
        //include 'includes/nav-esquerda.php'; 
        //include 'includes/nav-esquerda-2.php'; 
    ?>
    <!-- INCLUDE HEADER -->
    <img src="img/logo-series.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    
    
    <h1 class="titulo-secao"></h1>
   
    <!-- Inicio codigo -->
    
    <div class="well"><b>Atualização Semanal </b></div>
    
    
    
    
     <article>
    

      <div class="container">
    <div class="row">
        <article class="col-md-12 ">
    <section class="col-md-6 col-sm-6 thumbnail"><a href="series-bates.php"> <figure>
  <img src="./img/series/bates.jpg" class="img-responsive" alt="Bates motel">
  <figcaption><span class="hid">Resumo 2ª Temporada</span></figcaption>
</figure></section>
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 thumbnail"><a href="series-bls.php"> <figure>
  <img src="./img/series/blss.jpg" class="img-responsive" alt="Black">
  <figcaption><span class="hid">Black Sails Especial  2ª Temporada </span></figcaption>
</figure></section>
            
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 thumbnail"><a href="series-znation.php"> <figure>
  <img src="./img/series/Znation.jpg" class="img-responsive" alt="Znation">
  <figcaption><span class="hid">Episodio 13ª Resumo</span></figcaption>
</figure></section>
            
            
            
            <section class="col-md-6 col-sm-6 col-lg-6 thumbnail"><a href="series-executor.php"> <figure>
  <img src="./img/series/executorn.jpg" class="img-responsive" alt="The bastard executor">
  <figcaption><span class="hid">Resumo Final da temporada</span></figcaption>
</figure></section>
                        
            </div>

            </div>
            
            
        
    
    </article>
    
    
        
                        
            <div class="well"></div>            
                        
                        
                        
         
         
         <!--teste espaço--->
         

 <section>
        
        
            <div class="col-md-2 col-sm-6 hero-feature ">
                <div class="thumbnail">
                    <a href="series-lancamento.php"><img src="img/series/lan%C3%A7amentos.png" alt="Lançamentos"></a>
                    <div class="caption">
                        <h3 class="tx1"></h3>
        
        
        
        </section>
                    
                     <section>
        
        
            <div class="col-md-2 col-sm-6 hero-feature ">
                <div class="thumbnail">
                    <a href="series-canceladas.php"><img src="img/series/Canceladas.png" alt="Series canceladas"></a>
                    <div class="caption">
                        <h3 class="tx1"></h3>
        
        
        
        </section>
                    
                     <section>
        
        
            <div class="col-md-2 col-sm-6 hero-feature ">
                <div class="thumbnail">
                    <a href="series-comedia.php"><img src="img/series/comedia.png" alt="Serie de humor"></a>
                    <div class="caption">
                        <h3 class="tx1"></h3>
        
        
        
        </section>
                     <section>
        
        
            <div class="col-md-2 col-sm-6 hero-feature ">
                <div class="thumbnail">
                    <a href="series-terror.php"><img src="img/series/terror.png" alt="Genero terror"></a>
                    <div class="caption">
                        <h3 class="tx1"></h3>
        
        
        
        </section>
                    
                     <section>
        
        
            <div class="col-md-2 col-sm-6 hero-feature ">
                <div class="thumbnail">
                    <a href="series-aventura.php"><img src="img/series/aventura.png" alt="Genero aventura"></a>
                    <div class="caption">
                       
                        <h3 class="tx1"></h3>
        
        
        
        </section>
                    
                    
                    
                     <section>
        
        
            <div class="col-md-2 col-sm-6 hero-feature ">
                <div class="thumbnail">
                    <a href="series-acao.php"><img src="img/series/teste.png" alt="Series de ação"></a>
                    <div class="caption">
                        <h3 class="tx1"></h3>
        
        
        
        </section>


<!--teste espaço--->



         
         
        
          <!--------- Fim ---->
        
                    
                    
                    
    
   
               <!--OUTRAS SEÇÕES-->
    <?php 
        $inclui_secao='series';
        include 'includes/secoes.php';
    ?> 
        
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
            </div>
        </div>
</body>
</html>
