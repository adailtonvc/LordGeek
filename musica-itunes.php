<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lord Geek - Música';
        include 'includes/head.php';
    ?>
<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- compiled and minified Bootstrap JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!--NAV-->
    <?php 
        $active = '6';
        //include '../../includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    
        //NAV ESQUERDA TESTE
        //include 'includes/nav-esquerda.php'; 
        //include 'includes/nav-esquerda-2.php'; 
    ?>
    <!-- INCLUDE HEADER -->
    <img src="img/logo-musica.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    <!-- Começando meu código -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            
			<img src="img/musica/itunes1.png" class="col-xs-10 col-sm-4 col-md-4">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Cantor
						</th>
						<th>
							Música
						</th>
						
					</tr>
				</thead>
				<tbody>
					<tr class="active">
                   <td>#1</td>
                   <td>Hello</td>
                   <td>Adele</td>
					</tr>
					<tr class="active">
				   <td>#2</td>
                   <td>Sorry</td>
                   <td>Justin Bieber</td>
					
					</tr>
					<tr class="active">
					<td>#3</td>
                   <td>Love Yourself</td>
                   <td>Justin Bieber</td>
						
					</tr>
					<tr class="active">
					<td>#4</td>
                   <td>Same Old Love</td>
                   <td>Selena Gomez</td>
					
					</tr>
					<tr class="active">
				   <td>#5</td>
                   <td>Hotline Bling</td>
                   <td>Drake</td>
                    <tr class="active">
                   <td>#6</td>
                   <td>Die a Happy Man</td>
                   <td>Thomas Rhett</td>
                </tr>
               <tr class="active">
                   <td>#7</td>
                   <td>Ex's and Oh's</td>
                   <td>Elle King</td>
                </tr>
               <tr class="active">
                   <td>#8</td>
                   <td>Like I'm Gonna Lose You (feat. John Legend)</td>
                   <td>Meghan Trainor</td>
                </tr>
                <tr class="active">
                   <td>#9</td>
                   <td>Adventure of a Lifetime</td>
                   <td>Coldplay</td>
                </tr>
                <tr class="active">
                   <td>#10</td>
                   <td>What Do You Mean?</td>
                   <td>Justin Bieber</td>
                </tr>
					
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
     
    <!--OUTRAS SEÇÕES-->
    <?php 
        $inclui_secao='musica';
        include 'includes/secoes.php';
    ?>
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>

