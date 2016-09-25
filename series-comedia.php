<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- Comédia';
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
    
    
    
    <div class="well"><b>Comédia</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
  <section class="col-md-4 col-sm-4 scream thumbnail"><a href="series-two.php"><img src="img/series/two.jpg" class="img-responsive"  alt="Serie two and half man"> </a> <h1 class="caption txt align centrer">Two and half man</h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
      
      
      
      
       </section>
            
            
            
             <section class="col-md-4 col-sm-4 scream thumbnail"><a href="series-friends.php"><img src="img/series/friends.jpg" class="img-responsive"  alt="Serie friends"> </a> <h1 class="caption txt align centrer">Serie Friends</h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
      
      
      
      
      
      
      
      
      
            
                        
                    </section>
            
            
            
             <section class="col-md-4 col-sm-4 scream thumbnail"><a href="series-orange.php"><img src="img/series/orange.jpg" class="img-responsive"  alt="orange"> </a> <h1 class="caption txt align centrer">Orange is the new </h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
      
      
      
      
      
      
      
      
      
            
                        
                    </section>
            
            
            
            
            </div>
             </div>
            
 </article>
        
    
    
    
    
    <article class=" lanc col-md-12 ">
  <section class="col-md-4 col-sm-4 scream thumbnail"><a href="series-newg.php"><img src="img/series/newgril.jpg" class="img-responsive"  alt="Serie new grils"> </a> <h1 class="caption txt align centrer">Nova Garota na area</h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
      
      
      
      
            
                        
                    </section>
        
        
        
        <section class="col-md-4 col-sm-4 scream thumbnail"><a href="series-mkt.php"><img src="img/series/mlk.jpg" class="img-responsive"  alt="Serie "> </a> <h1 class="caption txt align centrer">UM maluco no pedaço</h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
      
      
      
      
            
                        
                    </section>
        
        
        
        
        
        <section class="col-md-4 col-sm-4 scream thumbnail"><a href="series-cris.php"><img src="img/series/cris.jpg" class="img-responsive"  alt="Serie Flash"> </a> <h1 class="caption txt align centrer">Todo mundo odeia o Cris</h1>
            <h3> 
                
                
                
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
                
                
                </h3>
      
      
      
      
            
                        
                    </section>
        
        
            
            </div>
             </div>
            
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
