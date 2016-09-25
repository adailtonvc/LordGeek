<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- Lançamentos';
        include 'includes/head.php'; 
    ?>
<body>
    
    <!---- começo css series---->
    <link href="series/css/series.css" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link href="series/css/bootstrap.cssbootstrap.css" rel="stylesheet">

    
    <!------- fim series --->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- compiled and minified Bootstrap JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!--NAV-->
    <?php 
        $active = '5';
        //include 'includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    
        //NAV ESQUERDA TESTE
        //include 'includes/nav-esquerda.php'; 
        //include 'includes/nav-esquerda-2.php'; 
    ?>
    
    <!-- INCLUDE HEADER -->
    <img src="img/logo-series.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
   
    
      <!--inicio conteudo -->
    
    
    
    <div class="well"><b>Lançamentos</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" seriess col-md-6 col-sm-6 col-lg-6  thumbnail"> <a href="series-last.php"><img src="img/series/thelast.jpg" class="img-responsive"  alt="The last kingdom"></a><h3 class="caption txt align centrer"> The last kingdom</h3> </section>
            
            <section class="col-md-6 col-sm-6 super thumbnail"><a href="series-power.php"><img src="img/series/power-starz.jpg" class="img-responsive"  alt="Power"> </a> <h3 class="caption txt align centrer">Power</h3> </section>
            
            <section class="col-md-6 col-sm-6 super thumbnail"><a href="series-jessica.php"><img src="img/series/newjessica.jpg" class="img-responsive"  alt="Jessica Jones"> </a> <h3 class="caption txt align centrer">Jessica Jones</h3> </section>
            
            
            <section class="col-md-6 col-sm-6 super thumbnail"><a href="series-flash.php"><img src="img/series/newflash.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h3 class="caption txt align centrer">Flash </h3>
            
            
            
            </section>
            
            
            
             <section class="col-md-6 col-sm-6 super thumbnail"><a href="series-demolidor.php"><img src="img/series/demolid.jpg" class="img-responsive"  alt="Serie Demolidor"> </a> <h3 class="caption txt align centrer">Demolidor</h3> </section>
            
            
            <section class="col-md-6 col-sm-6 super thumbnail"><a href="series-executor.php"><img src="img/series/executorn.jpg" class="img-responsive"  alt="Serie The bastard executor"> </a> <h3 class="caption txt align centrer">The Bastard executor</h3> </section>
            
            
        
            
            
        </article>
        
        
        
        
    
    
    
    <!--OUTRAS SEÇÕES-->
    <?php 
        $inclui_secao='series';
        include 'includes/secoes.php';
    ?>
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
   
    
    
</body>
</html>
