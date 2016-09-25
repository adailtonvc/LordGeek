<!DOCTYPE html>
<html lang="en">
<?php 
        $title = 'Lord Geek - Cinema';
        include 'includes/head.php'; 
    ?>
    <link rel="stylesheet" href="css/cinema.css">

    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- compiled and minified Bootstrap JavaScript -->
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!--NAV-->
        <?php 
        $active = '4';
        //include 'includes/nav.php'; 
        include 'includes/nav-dropdown.php';
    
        //NAV ESQUERDA TESTE
        //include 'includes/nav-esquerda.php'; 
        //include 'includes/nav-esquerda-2.php'; 
    ?>
            <img src="./img/logo-cinema.jpg" class="img-responsive hidden-xs header-img center-block">
            <hr class="style-four hidden-xs">
            <h1 class="titulo-secao">CINEMA</h1>
            <!-- Começo do corpo da página -->
            <article id="width-cinema">
                <!-- começo do conteúdo -->
                <div class="container-fluid">
                    <div class="row">
                        <aside class="hidden-xs">
                            <div class="col-md-4">
                                <table class="table table-bordered table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th>
                                                TOP Ever
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                De volta para o futuro1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                De volta para o futuro2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                De volta para o futuro3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Star Wars - Ep. 1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Star Wars - Ep. 2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Star Wars - Ep. 3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Star Wars - Ep. 4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Star Wars - Ep. 5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Star Wars - Ep. 6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Veloses e Furiosos 1
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Veloses e Furiosos 2
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Veloses e Furiosos 3
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Veloses e Furiosos 4
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Veloses e Furiosos 5
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Veloses e Furiosos 6
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Veloses e Furiosos 7
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </aside>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-left">Ação</h3>
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero01">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero02">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero03">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-left">Aventura</h3>
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero04">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero05">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero09">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-left">Suspense</h3>
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero07">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero08">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero06">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-left">Terror</h3>
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero10">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero11">
                                    <img src="img/cinema/300-x-500.png" alt="" class="paginafilmescapasporgenero paginafilmescapasporgenero12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- final do conteúdo -->
            </article>
            <!-- final do corpo da página -->
            <?php 
        $inclui_secao='cinema';
        include 'includes/secoes.php';
    ?>
                <!--FOOTER-->
                <?php include 'includes/footer.php'; ?>
    </body>

</html>