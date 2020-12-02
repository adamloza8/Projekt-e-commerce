   <?php require_once '../resources/config.php'; ?>


    <?php include TEMPLATE_FRONT . DS . "header.php"; ?>

    <div class="container">

        <header >

            <h1>Sklep</h1>

        </header>

        <hr>


        <div class="row text-center">

          <?php  get_products_in_shope_page() ?>



            </div>

        </div>





        <?php  require TEMPLATE_FRONT . DS . "footer.php"  ?>

    </div>
