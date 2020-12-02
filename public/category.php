   <?php require_once '../resources/config.php'; ?>


    <?php include TEMPLATE_FRONT . DS . "header.php"; ?>


    <div class="container">

        <header class="jumbotron hero-spacer">
            <h1>Witamy w naszym sklepie!</h1>
            <p>Liczymy na to, iż każdy znajdzie tutaj coś interesującego.</p>
            <!-- <p><a class="btn btn-primary btn-large">Call to action!</a> -->
            </p>
        </header>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3>Najnowsze produkty</h3>
            </div>
        </div>

        <div class="row text-center">

          <?php  get_category() ?>



            </div>

        </div>

        <?php  require TEMPLATE_FRONT . DS . "footer.php"  ?>

    </div>
