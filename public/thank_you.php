    <?php require_once '../resources/config.php'; ?>
    <!-- <?php require_once("cart.php"); ?> -->


 <?php include TEMPLATE_FRONT . DS . "header.php"; ?>


 <?php

if(isset($_GET['tx'])) {

$amount = $_GET['amt'];
$currency = $_GET['cc'];
$transaction = $_GET['tx'];
$status = $_GET['st'];

}


        process_transaction();





  ?>


    <div class="container">


      <h1 class="text-center">Dziękujemy za zakupy w naszym sklepie</h1>





    </div>

 <?php include(TEMPLATE_FRONT .  "/footer.php");?>
