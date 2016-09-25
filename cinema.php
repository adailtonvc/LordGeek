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
    ?>
            <img src="./img/logo-cinema.jpg" class="img-responsive hidden-xs header-img center-block">
            <hr class="style-four hidden-xs">
            <h1 class="titulo-secao hidden-xs">CINEMA</h1>
            <!-- Começo do corpo da página -->
            <article id="width-cinema">
                <!-- começo do conteúdo -->
                <div class="container-fluid">
                    <div class="row">
                        <section>
                            <!-- começo do conteúdo de vídeos-->
                            <div class="col-md-12">
                                <h3 class="text-center hidden-xs">Vídeos</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="index_galeria_videos">
                                        <img class="index_galeria_videos1" src="img/cinema/playbutton.png" alt="trailer do filme star wars episodeo 7" />
                                        <img class="index_galeria_videos2" src="img/cinema/playbutton.png" alt="" />
                                        <img class="index_galeria_videos3" src="img/cinema/playbutton.png" alt="" />
                                        <img class="index_galeria_videos4" src="img/cinema/playbutton.png" alt="" />
                                        <img class="index_galeria_videos5 hidden-xs" src="img/cinema/playbutton.png" alt="" />
                                        <img class="index_galeria_videos6 hidden-xs" src="img/cinema/playbutton.png" alt="" /></div>
                                </div>
                            </div>
                            <!-- fim do conteúdo de vídeos-->
                        </section>
                        <section>
                            <!-- começo do conteúdo de fotos-->
                            <div class="col-md-12">
                                <h3 class="text-center hidden-xs">Fotos</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="index_galeria_fotos">
                                        <img class="index_galeria_fotos1" src="img/cinema/300%5E2.png" alt="" />
                                        <img class="index_galeria_fotos2" src="img/cinema/300%5E2.png" alt="" />
                                        <img class="index_galeria_fotos3" src="img/cinema/300%5E2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="index_galeria_fotos">
                                        <img class="index_galeria_fotos4" src="img/cinema/300%5E2.png" alt="" />
                                        <img class="index_galeria_fotos5" src="img/cinema/300%5E2.png" alt="" />
                                        <img class="index_galeria_fotos6" src="img/cinema/300%5E2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="index_galeria_fotos">
                                        <img class="index_galeria_fotos7 hidden-xs" src="img/cinema/300%5E2.png" alt="" />
                                        <img class="index_galeria_fotos8 hidden-xs" src="img/cinema/300%5E2.png" alt="" />
                                        <img class="index_galeria_fotos9 hidden-xs" src="img/cinema/300%5E2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- fim do conteúdo de fotos-->
                        </section>
                        <section>
                            <!-- começo do conteúdo de fimes-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <section id="capa-1-esquerda">
                                            <a id="modal-capa-01" href="#modal-container-capa-01" role="button" class="btn" data-toggle="modal">
                                                <div class="index_galeria_filmes1"><img src="img/cinema/300-x-500.png" alt=""></div>
                                            </a>
                                            <div class="modal fade" id="modal-container-capa-01" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel">Lançamento em 2016</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/cinema/cinemacapafilme01.jpg" alt="" class="img-modal-01">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="texto-1-direita" class="hidden-xs">
                                            <h2>Batmam Vs Supermam</h2>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                            <p>Lorem ipsum dolor.</p>
                                            <p>Lorem ipsum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatibus tenetur.</p>
                                            <p>Lorem.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sunt repellat alias, magni cupiditate explicabo facilis eligendi totam similique expedita aut architecto eum iste ratione error vel, veritatis ex, distinctio, assumenda provident libero labore cum quasi. Qui illo ullam nemo excepturi impedit amet sapiente iusto modi, labore voluptatum fuga, doloribus temporibus! Eveniet eligendi, soluta pariatur facere, voluptatem odit laboriosam maxime necessitatibus fugiat placeat explicabo libero nam totam quis, illo cum beatae tempora aut veritatis sint voluptatibus. Et blanditiis, amet asperiores cumque laudantium! Amet ex ad repellat iusto, error, numquam vitae odio, alias est nesciunt deleniti. Cupiditate adipisci cumque, veritatis accusamus!</p>
                                            <p><a id="modal-capa-01" href="#modal-container-capa-01" role="button" class="btn" data-toggle="modal">Ver capa do filme »</a></p>
                                        </section>
                                    </div>
                                </div>
                            </div>


                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <section id="capa-2-esquerda">
                                            <a id="modal-capa-02" href="#modal-container-capa-02" role="button" class="btn" data-toggle="modal">
                                                <div class="index_galeria_filmes2"><img src="img/cinema/300-x-500.png" alt=""></div>
                                            </a>
                                            <div class="modal fade" id="modal-container-capa-02" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel">Lançamento em 2016</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/cinema/cinemacapafilme02.jpg" alt="" class="img-modal-02">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="texto-1-direita" class="hidden-xs">
                                            <h2>Guerra Civil</h2>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                            <p>Lorem ipsum dolor.</p>
                                            <p>Lorem ipsum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatibus tenetur.</p>
                                            <p>Lorem.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sunt repellat alias, magni cupiditate explicabo facilis eligendi totam similique expedita aut architecto eum iste ratione error vel, veritatis ex, distinctio, assumenda provident libero labore cum quasi. Qui illo ullam nemo excepturi impedit amet sapiente iusto modi, labore voluptatum fuga, doloribus temporibus! Eveniet eligendi, soluta pariatur facere, voluptatem odit laboriosam maxime necessitatibus fugiat placeat explicabo libero nam totam quis, illo cum beatae tempora aut veritatis sint voluptatibus. Et blanditiis, amet asperiores cumque laudantium! Amet ex ad repellat iusto, error, numquam vitae odio, alias est nesciunt deleniti. Cupiditate adipisci cumque, veritatis accusamus!</p>
                                            <p><a id="modal-capa-02" href="#modal-container-capa-02" role="button" class="btn" data-toggle="modal">Ver capa do filme »</a></p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <section id="capa-3-esquerda">
                                            <a id="modal-capa-03" href="#modal-container-capa-03" role="button" class="btn" data-toggle="modal">
                                                <div class="index_galeria_filmes3"><img src="img/cinema/300-x-500.png" alt=""></div>
                                            </a>
                                            <div class="modal fade" id="modal-container-capa-03" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel">Lançamento em 2016</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/cinema/cinemacapafilme03.jpg" alt="" class="img-modal-03">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="texto-3-direita" class="hidden-xs">
                                            <h2>Procurando Dory</h2>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                            <p>Lorem ipsum dolor.</p>
                                            <p>Lorem ipsum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatibus tenetur.</p>
                                            <p>Lorem.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sunt repellat alias, magni cupiditate explicabo facilis eligendi totam similique expedita aut architecto eum iste ratione error vel, veritatis ex, distinctio, assumenda provident libero labore cum quasi. Qui illo ullam nemo excepturi impedit amet sapiente iusto modi, labore voluptatum fuga, doloribus temporibus! Eveniet eligendi, soluta pariatur facere, voluptatem odit laboriosam maxime necessitatibus fugiat placeat explicabo libero nam totam quis, illo cum beatae tempora aut veritatis sint voluptatibus. Et blanditiis, amet asperiores cumque laudantium! Amet ex ad repellat iusto, error, numquam vitae odio, alias est nesciunt deleniti. Cupiditate adipisci cumque, veritatis accusamus!</p>
                                            <p><a id="modal-capa-03" href="#modal-container-capa-03" role="button" class="btn" data-toggle="modal">Ver capa do filme »</a></p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <section id="capa-4-esquerda">
                                            <a id="modal-capa-04" href="#modal-container-capa-04" role="button" class="btn" data-toggle="modal">
                                                <div class="index_galeria_filmes4"><img src="img/cinema/300-x-500.png" alt=""></div>
                                            </a>
                                            <div class="modal fade" id="modal-container-capa-04" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel">Lançamento em 2016</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="img/cinema/cinemacapafilme04.jpg" alt="" class="img-modal-01">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="texto-4-direita" class="hidden-xs">
                                            <h2>X-MEN Apocalypse</h2>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                            <p>Lorem ipsum dolor.</p>
                                            <p>Lorem ipsum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A voluptatibus tenetur.</p>
                                            <p>Lorem.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo sunt repellat alias, magni cupiditate explicabo facilis eligendi totam similique expedita aut architecto eum iste ratione error vel, veritatis ex, distinctio, assumenda provident libero labore cum quasi. Qui illo ullam nemo excepturi impedit amet sapiente iusto modi, labore voluptatum fuga, doloribus temporibus! Eveniet eligendi, soluta pariatur facere, voluptatem odit laboriosam maxime necessitatibus fugiat placeat explicabo libero nam totam quis, illo cum beatae tempora aut veritatis sint voluptatibus. Et blanditiis, amet asperiores cumque laudantium! Amet ex ad repellat iusto, error, numquam vitae odio, alias est nesciunt deleniti. Cupiditate adipisci cumque, veritatis accusamus!</p>
                                            <p><a id="modal-capa-04" href="#modal-container-capa-04" role="button" class="btn" data-toggle="modal">Ver capa do filme »</a></p>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- fim do conteúdo de fimes-->
                        </section>
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