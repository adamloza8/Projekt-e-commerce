    <?php require_once '../resources/config.php'; ?>


 <?php include TEMPLATE_FRONT . DS . "header.php"; ?>


    <div class="container">


<div class="row">

      <h4 class="text-center bg-danger" ><?php display_message(); ?></h4>

      <h1>Koszyk</h1>


    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="business" value="adamloza8@gmail.com">
    <input type="hidden" name="currency_code" value="PLN">
    <input type="hidden" name="upload" value="1">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Produkt</th>
           <th>Cena</th>
           <th>Ilość</th>
           <th>Koszt</th>

          </tr>
        </thead>
        <tbody>
            <?php cart(); ?>
        </tbody>
    </table>

    <?php echo show_paypal(); ?>
</form>




<div class="col-xs-4 pull-right ">
<h2>Podsumowanie</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Produkty:</th>
<td><span class="amount"><?php


      echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0" ;


   ?></span></td>
</tr>
<tr class="shipping">
<th>Wysyłka</th>
<td>Za darmo</td>
</tr>

<tr class="order-total">
<th>Koszt</th>
<td><strong><span class="amount"><?php

      echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0" ;


   ?>

</span></strong> </td>
</tr>


</tbody>

</table>

</div>


 </div>





    </div>


 <?php include(TEMPLATE_FRONT .  "/footer.php");?>
