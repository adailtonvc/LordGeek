<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- iZombie';
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
    
    
    
    <div class="well"><b>Izombie</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/izombie.jpg" class=" text-center img-responsive" alt="twd">
  <figcaption><span class="hid">Nova temporada</span></figcaption>
</figure>
               
               
               
               <p>Liv Moore era uma médica residente e uma pessoa normal, tinha uma família amorosa e feliz, um noivo muito carinhoso e adorava passar o tempo com seus amigos. Mas toda a sua vida foi por água abaixo em uma festa, em que ela se transformou em um zumbi. Agora ela só tem fome de cérebros. Ela deixou o emprego em que ela tinha uma carreira promissora, e começou a trabalhar no necrotério Seattle PD, não só para satisfazer seu desejo de cérebros, mas para ajudar o Departamento de Polícia a solucionar crimes como consultora "psíquica". Com a ajuda de seu chefe Dr. Ravi Chakrabarti, que é fascinado por sua condição, e do Detective Clive Babineaux, que acredita que Liv é um vidente, ela deve ajudar o povo de Seattle, entender sua condição, descobrir como ela foi transformada em um zumbi, e lutar contra uma ameaça em ascensão.

.</p> 
            
            
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
