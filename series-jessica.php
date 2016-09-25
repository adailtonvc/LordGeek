<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- Jessica Jones';
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
    
    
    
    <div class="well"><b>Jessica Jones</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/newjessica.jpg" class=" text-center img-responsive" alt="Jessica Jones">
  <figcaption><span class="hid"> Serie: estreante</span></figcaption>
</figure>
               
               
               
               <p>Jessica Jones, é uma série americana desenvolvida para Netflix pela Melissa Rosenberg, baseado na personagem Jessica Jones da Marvel Comics. Que faz parte do Universo Marvel Cinematográfico (UMC), e partilha continuidade com os filmes da franquia, além de ser a segunda de cinco séries que vão levar até The Defenders, uma minissérie de crossover. A séries é produzida pela Marvel Television em associação com a ABC Studios com Rosenberg servindo como showrunner.

Krysten Ritter estrela como Jones, uma ex super-heroína que abre a sua própria agência de detetives depois de um fim a sua carreira de super-herói. David Tennant, Mike Colter, Rachael Taylor, Carrie-Anne Moss, Eka Darville, Erin Moriarty, e Wil Traval também estrelam. Uma versão da série foi originalmente desenvolvida pela Rosenberg para o ABC em 2010, que acabou por ser repassado. No final de 2013, Rosenberg retrabalha a série, quando entrou em desenvolvimento para Netflix. Ritter foi escalada como Jones em dezembro de 2014, com a produção em A.K.A. Jessica Jones começando em Nova York, em fevereiro de 2015.

Todos os episódios ficaram disponíveis para streaming em 20 Novembro de 2015.</p> 
            
            
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
