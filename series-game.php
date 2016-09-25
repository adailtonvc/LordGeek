<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Séries- Game of Thones';
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
    
    
    
    <div class="well"><b>Game OF thones</b> </div>
    
    
    
    <div class="container-fluid">
    <div class="row">
        <article class=" lanc col-md-12 ">
    <section class=" col-md-6 col-sm-6 col-lg-6 twd thumbnail">
            
            
           <div class="panel panel-primary">
                
                <figure>
  <img  src="./img/series/gameof.jpg" class=" text-center img-responsive" alt="Vikings">
  <figcaption><span class="hid"> Nova Temporada</span></figcaption>
</figure>
               
               
               
               <p>A série é baseada na série de livros As Crônicas de Gelo e Fogo (A Song of Ice and Fire no original), escritos por George R. R. Martin, com seu título sendo derivado do primeiro livro. Game of Thrones está sendo filmada principalmente no Paint Hall Studios, em Belfast, e em outras localizações na Irlanda do Norte, Espanha, Marrocos, Malta, Croácia e Islândia.

Sua primeira temporada estreou em 17 de abril de 2011. Dois dias depois foi renovada para uma segunda temporada. A segunda temporada estreou em 1 de abril de 2012. Nove dias depois, ela foi renovada para uma terceira temporada. Dois dias depois da estreia da terceira temporada, ela foi renovada para uma quarta temporada, para uma quinta temporada e agora uma sexta temporada.

Muito aguardada desde seus primeiros estágios de desenvolvimento, Game of Thrones foi muito bem recebida pela crítica especializada. Sua primeira temporada foi indicada a vários prêmios, incluindo o Primetime Emmy Award de melhor série dramática e o Globo de Ouro de melhor série - drama; Peter Dinklage venceu o Emmy e o Globo de Ouro de melhor ator coadjuvante. Também conquistou o Emmy de melhor projeto de créditos principais. Possui uma das melhores notas entre os telespectadores para séries em exibição no site IMDb. Possui 26 Emmy Awards.

Game of Thrones entra para o Livro dos Recordes com a marca de Série Dramática com a maior transmissão simultânea ao redor do mundo. O número foi alcançado com o episódio 2 da quinta temporada, intitulado 'The House of Black and White'.</p> 
            
            
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
