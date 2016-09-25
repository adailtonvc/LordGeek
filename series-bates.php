<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries-Bates Motel';
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
    
    
    
    <div class="well"><b>Bates Motel</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/bates.jpg" class=" text-center img-responsive" alt="Bates Motel">
  <figcaption><span class="hid"> Serie: Bates motel</span></figcaption>
</figure>
               
               
               
               <p>é uma série de televisão americana de drama, mistério e suspense, desenvolvida por Carlton Cuse, Kerry Ehrin e Anthony Cipriano, produzida pela Universal Television e exibida pela AeE
A série é um "prólogo contemporâneo"  para o filme Psycho de 1960 (baseado no romance de mesmo nome escrito por Robert Bloch), que retrata a vida de Norman Bates e de sua mãe Norma antes dos eventos retratados no filme de Alfred Hitchcock. A série começa depois da morte do marido de Norma, quando ela adquire um motel localizado em uma cidade costeira chamada White Pine Bay, localizada no estado de Oregon, nos Estados Unidos, para que ela e Norman possam começar uma nova vida. 

A série foi filmada em Aldergrove, Colúmbia Britanica, Canadá, e estreou em 18 de março de 2013 na A   A rede AeE decidiu encomendar 10 episódios para a primeira temporada da série. Em 8 de abril de 2013, a emissora renovou Bates Motel para uma segunda temporada com mais 10 episódios, depois de críticas favoráveis e grande audiência.</p> 
            
            
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
                
                <a href="series-znation.php"><figure>
  <img  src="./img/series/Znation.jpg" class=" gril text-center img-responsive" alt="Supergril">
</figure>
               
               
               <P> Z-Nation nova temporada </P>
              
            
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
