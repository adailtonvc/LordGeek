<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- American Horror';
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
    
    
    
    <div class="well"><b>American Horror story</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/american.jpg" class=" text-center img-responsive" alt="twd">
  <figcaption><span class="hid">Nova temporada</span></figcaption>
</figure>
               
               
               
               <p>A série apresenta a família Harmon, Ben (Dylan McDermott), Vivien (Connie Britton) e sua filha Violet (Taissa Farmiga), que se mudam para Los Angeles depois que Vivien sofre um aborto e Ben tem um caso extraconjugal. Na nova casa, a família conhece a misteriosa vizinha Constance Langdon (Jessica Lange) e sua filha Adelaide (Jamie Brewer), que possui um dom paranormal. Ben começa a atender seus pacientes em casa, mas um em particular, Tate (Evan Peters), tem um amor doentio por Violet. Ele faz tudo para protegê-la, apesar de esconder seu lado sombrio e sua real história. Acontecimentos bizarros e violentos passam a ocorrer com maior regularidade, e o que a família não sabe é que houveram mais de 20 mortes violentas na casa ao longo de sua história, sendo assim, conhecida em passeios turísticos como "The Murder House" (A Casa dos Assassinatos). A família luta com suas próprias tribulações pessoais, sem saber que o mal está se aproveitando dos mesmos para gerar o Anti-Cristo.</p> 
            
            
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
