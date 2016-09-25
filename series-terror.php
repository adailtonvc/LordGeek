<!DOCTYPE html>
<html lang="PT">
    <?php 
        $title = 'Lord Geek - Series - terror';
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
    
    <div class="well"><b>Series de Terror</b> </div>
    
   
    
            
               <!--inicio conteudo -->
               
    
         
         
        <div class="container-fluid">
    <div class="row">
        <article class=" terror col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail"> <a href="series-twd.php"><img src="img/series/ntwd.jpg" class="img-responsive"  alt=""></a><h3 class="caption txt align centrer"> The walking dead</h3> </section>
    
            <section class="col-md-3 col-sm-3 super thumbnail"><a href="series-supernatural.php"><img src="img/series/supenatural.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h3 class="caption txt align centrer">Supernatural</h3> </section>
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-american.php"><img src="img/series/american.jpg" class="img-responsive"  alt="American"> </a> <h3 class="caption txt align centrer">American</h3> </section>
            
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-bates.php"><img src="img/series/bates.jpg" class="img-responsive"  alt="Serie Bates"> </a> <h3 class="caption txt align centrer">Bates MOtel</h3> </section>
            
            
            <section class="col-md-3 col-sm-3 hero-feature thumbnail"><a href="series-znation.php"><img src="img/series/Znation.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h3 class="caption txt align centrer">Z nation</h3> </section>
            
            
            
                
                
                

            
            
                <!-- Nome noticias ---> 
            
                <aside>
                
                 
                    <section class="sele">
                   <ul class=" menu nav nav-tabs">
      <li class="active">
          <a class="noticias" href="#">Noticias</a>
      </li>
                       
                    
      
      
    </ul>
                    
                    </section>
                    
                    <!-- Fim nome noticia---> 
                
            <section class="col-md-3 col-sm-3 scream thumbnail"><a href="series-ash.php"><img src="img/series/ashevil.jpg" class="img-responsive"  alt="Serie ash Evil"> </a> <h1 class="caption txt align centrer">Serie Ash Evil</h1>
            <h3> 
              Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos de nuevosz. 
                
                
                </h3>
            
            
            </section>
                    
                    
                    <!--- noticia --->
                   
                    
                    
                    <section class="col-md-3 col-sm-3 scream thumbnail"><a href="series-peny.php"><img src="img/series/peny.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h1 class="caption txt align centrer">Serie Peny</h1>
            <h3> 
                
               Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos de nuevosz. 

                
                
                </h3>
            
                        
                    </section>
                    
                    
                    
                    
                    
                    <section class="col-md-3 col-sm-3 scream thumbnail"><a href="series-scream.php"><img src="img/series/Scream.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h1 class="caption txt align centrer">Serie Scream</h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
            
                        
                    </section>
                    
                    
                    
                    
                    
                    
                    
                    
                    <section class="col-md-3 col-sm-3 scream thumbnail"><a href="series-izombie.php"><img src="img/series/izombie.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h1 class="caption txt align centrer">Serie izombie</h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
            
                        
                    </section>
                    
                    
                    
                    
                    
                    <!-- FIm noticia --->
                    
                    
                    
                    
                    
                    
                    
                    
                    <!--- Proxima serie -->
                    
                    
                    
                    
                    
                    
                    
            
            
            </aside>
            
            
            
            
            
            
            
                
                    <div class="">
                        
                        
                    
                </div>
            </div>
        
       </article> 
      </div>
    </div>
    
   
             
               
               
               
               
               
            
           
         
         
         
         
         
            
    
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
