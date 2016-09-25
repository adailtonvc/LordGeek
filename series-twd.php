<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- The walking dead';
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
    
    
    
    <div class="well"><b>The walking Dead</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/ntwd.jpg" class=" text-center img-responsive" alt="twd">
  <figcaption><span class="hid">Nova temporada</span></figcaption>
</figure>
               
               
               
               <p>The Walking Dead é centrada em Rick Grimes, um oficial de polícia de uma cidade no estado da Geórgia/EUA.Também acompanha a trajetória de sua família e uma série de outros sobreviventes que se uniram para manterem-se vivos depois que o mundo foi infestado por zumbis. Com o progresso da série, as personagens tornam-se mais desenvolvidas e suas personalidades são demonstradas sob a tensão de um apocalipse zumbi, especialmente a de Rick.

No início da série, Rick e seu parceiro Shane participam de um tiroteio e Rick é baleado, entrando em coma. Ao acordar em um hospital, ele descobre que os mortos-vivos infestam o edifício e cidade inteira está destruída e deserta. Bem, não completamente deserta afinal... Rick retorna para casa e vê que sua família não está lá. Ao vagar pela rua encontra Morgan e Duane Jones, que lhe explicam tudo o que está acontecendo no mundo desde que que ele entrou em coma. Ao saber de Morgan que em Atlanta foi montada uma base militar de refugiados, decide partir para lá, na esperança de encontrar sua esposa Lori e seu filho Carl. Ao partir para lá, ele então descobre que a base militar não existe mais e que Atlanta está repleta de zumbis. Enquanto é perseguido pelos "zumbis" alguém o puxa para um beco, então descobre-se ser um rapaz chamado Glenn, um entregador de pizzas, que faz parte de um bando de sobreviventes. Com sua ajuda, Rick consegue escapar da cidade, saltando sobre os prédios.</p> 
            
            
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
