<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries-Power';
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
    
    
    
    <div class="well"><b>Power</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/power-starz.jpg" class=" text-center img-responsive" alt="Executor">
  <figcaption><span class="hid"> Serie: Estreante</span></figcaption>
</figure>
               
               
               
               <p>A série apresenta James St. Patrick, apelidado de "Ghost", dono de um popular clube noturno de Nova York. Alem disso, ele comanda uma rede de narcotráfico, usando a boate como fachada. Ele se esforça para equilibrar essas duas vidas, e o equilíbrio desmorona quando ele decide abandonar a carreira de gângster. Ghost coloca em risco sua vida de casado depois que resolve iniciar um relacionamento extraconjugal com uma ex- namorada dos tempos de escola.</p> 
            
            
        </div>
            
            </section>
        
        
        <article>
        <section class=" col-md-4 col-sm-4 col-lg-4 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <a href="series-znation.php"><figure>
  <img  src="./img/series/Znation.jpg" class=" gril text-center img-responsive" alt="The Bastard Executor">
</figure>
               
               
               <P> ZNation nova serie  </P>
              
            
            </div>
            
            
            </section>
        
        </article>
        
        
            
            
            <!-- Proxima noticia -->
            
            
            
            <article>
        <section class=" col-md-4 col-sm-4 col-lg-4 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <a href="series-supergril.php"><figure>
  <img  src="./img/series/nweSuper.jpg" class=" gril text-center img-responsive" alt="Supergril">
</figure>
               
               
               <P> Supergril  </P>
              
            
            </div>
            
            
            </section>
        
        </article>
            
            
            
            
            
            <!-- fim noticia2 -->
            
            
            
            
      
        
            
            
        </article>
        
        
        
        
    
    
    
    <!--OUTRAS SEÇÕES-->
    
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
   
    
    
</body>
</html>
