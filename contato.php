<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = 'Lork Geek - Contato';
        include 'includes/head.php';
    ?>
<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- compiled and minified Bootstrap JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!--NAV-->
    <?php include 'includes/nav-dropdown.php'; ?>
    
    <!-- CONTEUDO DA PÁGINA -->
    <img src="img/logo-contato.jpg" class="img-responsive hidden-xs header-img center-block">
    <hr class="style-four hidden-xs">
    <article>
<!--        <article>
            <p class="recolhe-paragrafo-email-contato">email.imprensa@lordgeek.com</p>
            <p class="recolhe-paragrafo-email-contato">email.news@lordgeek.com</p>
            <p class="recolhe-paragrafo-email-contato">email.duvidas@lordgeek.com</p>  
            <p class="recolhe-paragrafo-email-contato">email.anuncie@lordgeek.com</p>
        </article>-->

        <form role="form" action="#" method="post" class="col-md-6">
            <p class="recolhe-paragrafo-contato">Entre em contato conosco para esclarecer dúvidas, relatar erros, dar sugestões, fazer críticas construtivas ou sugestões.</p>
            <div class="col-lg-10">
                <div class="form-group">
                    <label for="InputName">Nome</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nome Completo" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="E-mail" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Mensagem</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputReal">Quanto é 4+3?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputReal" id="InputReal" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-md-6 col-sm-6 hidden-xs">
            <p>Localização</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7315.972792053551!2d-47.13394640000002!3d-23.532991700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x3dcff522a27b9b96!2sFaculdade+de+Tecnologia+de+S%C3%A3o+Roque!5e0!3m2!1spt-BR!2sbr!4v1450124625417" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
        </div>
    </article>
    <hr class="featurette-divider hidden-lg">
    <!-- ################## -->
    <!--FOOTER-->
    <?php include 'includes/footer.php'; ?>
</body>
</html>
