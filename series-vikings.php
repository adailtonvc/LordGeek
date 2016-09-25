<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- Vikings';
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
    
    
    
    <div class="well"><b>Vikings</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/vikingss.jpg" class=" text-center img-responsive" alt="Vikings">
  <figcaption><span class="hid"> Serie: Estreante</span></figcaption>
</figure>
               
               
               
               <p>A série teve como inspiração as narrativas acerca das incursões saqueatórias, comerciais e exploratórias dos nórdicos da Escandinávia da Alta Idade Média. Ela aborda especificamente os feitos do lendário chefe tribal viking Ragnar Lothbrok e de sua tripulação e família, tais como narrados por sagas do século XIII como a Ragnars saga Loðbrókar e a Ragnarssona þáttr, assim como na obra Gesta Danorum, de Saxão Gramático, do século XII. As sagas lendárias nórdicas eram narrativas parcialmente fictícias baseadas na tradição oral escandinava, que foram escritas cerca de 200 a 400 anos após os eventos que elas descrevem. Entre outras inspirações utilizadas para a série estão fontes históricas do período, como os registros do saque viking feito a Lindisfarne, mostrado no segundo episódio da primeira temporada, ou o relato feito no século X pelo autor árabe Ahmad ibn Fadlan dos vikings do Volga. A série se passa no início da Era Viking, que teve com um dos seus marcos justamente o saque a Lindisfarne, em 793.</p> 
            
            
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
