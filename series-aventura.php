<!DOCTYPE html>
<html lang="PT">
    <?php 
        $title = 'Lord Geek - Series - Aventura';
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
    
    <div class="well"><b>Series de Aventura</b> </div>
    
   
    
            
               <!--inicio conteudo -->
               
    
         
         
        <div class="container-fluid">
    <div class="row">
        <article class="col-md-12">
    <section class=" col-md-3 col-sm-3 col-lg-3 thumbnail"> <a href="series-supergril.php"><img src="img/series/nweSuper.jpg" class="img-responsive"  alt=""></a><h3 class="caption txt align centrer"> supergril!</h3> </section>
    
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-flash.php"><img src="img/series/newflash.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h3 class="caption txt align centrer">Flash</h3> </section>
            
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-vikings.php"><img src="img/series/vikingss.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h3 class="caption txt align centrer"> Os Vickings</h3> </section>
            
            
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-game.php"><img src="img/series/gameof.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h3 class="caption txt align centrer"> Game of Thones</h3> </section>
            
            
             <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-jessica.php"><img src="img/series/newjessica.jpg" class="img-responsive"  alt="Serie Jessica Jones"> </a> <h3 class="caption txt align centrer"> Jessica Jones</h3> </section>
            
            
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-ship.php"><img src="img/series/newthelast.jpg" class="img-responsive"  alt="Serie The last ship"> </a> <h3 class="caption txt align centrer"> The last ship</h3> </section>
            
            
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-bls.php"><img src="img/series/blss.jpg" class="img-responsive"  alt="Serie Black Sails "> </a> <h3 class="caption txt align centrer"> Black Sails </h3> </section>
            
            
            
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-robot.php"><img src="img/series/mrorbot.jpg" class="img-responsive"  alt="Serie Black Sails "> </a> <h3 class="caption txt align centrer"> Mr.Robot </h3> </section>
            
            
            
            
            
            
                
                    <div class="">
                        
                        
                    
                </div>
            </div>
        
       </article> 
      </div>
    </div>
    
   
             
               
               
               
               
               
            
            <!-- Proxima Serie   -->
         
        
         
        
         
         
         
         
         
            
    
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
