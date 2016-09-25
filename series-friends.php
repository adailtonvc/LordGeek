<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- Friends';
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
    <!-- INCLUDE HEADER -->     <img src="img/logo-series.jpg" class="img-responsive hidden-xs header-img center-block">     <hr class="style-four hidden-xs">
    
   
    
      <!--inicio conteudo -->
    
    
    
    <div class="well"><b>Friends</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/friends.jpg" class=" text-center img-responsive" alt="twd">
  <figcaption><span class="hid">Nova temporada</span></figcaption>
</figure>
               
               
               
               <p>Friends foi uma sitcom americana criada por David Crane e Marta Kauffman e apresentada pela rede de televisão NBC entre 22 de setembro de 1994 e 6 de maio de 2004, com um total de 236 episódios. A série girava em torno de um grupo de amigos que vivia no bairro de Greenwich Village, na ilha de Manhattan, na cidade de Nova York. A série foi produzida por Bright, Kauffman, Crane Productions em associação com a Warner Bros Television. Os produtores executivos originais foram Crane, Kauffman e Kevin S. Bright, com muitos outros a serem promovidos posteriormente.</p> 
            
            
        </div>
            
            </section>
        
        
        <article>
        <section class=" col-md-4 col-sm-4 col-lg-4 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <a href="series-executor.php"><figure>
  <img  src="./img/series/executorn.jpg" class=" gril text-center img-responsive" alt="The Bastard Executor">
</figure>
               
               
               <P> The bastard Executor Veja nosso resumo</P>
              
            
            </div>
            
            
            </section>
        
        </article>
        
        
            
            
            <!-- Proxima noticia -->
            
            
            
            <article>
        <section class=" col-md-4 col-sm-4 col-lg-4 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <a href="series-znation.php"> <figure>
  <img  src="./img/series/Znation.jpg" class=" gril text-center img-responsive" alt="Supergril">
</figure>
               
               
               <P> Z-Nation nova temporada </P>
              
            
            </div>
            
            
            </section>
        
        </article>
            
            
            
            
            
            <!-- fim noticia2 -->
            
            
            
            
      
        
            
            
        </article>
        
        
        
        
    
    
    
    
    
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
   
    
    
</body>
</html>
