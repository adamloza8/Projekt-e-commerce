<?php require_once '../resources/config.php'; ?>


<?php include TEMPLATE_FRONT . DS . "header.php"; ?>

<div class="container">



            <?php include TEMPLATE_FRONT . DS . "side_nav.php"; ?>




<?php




    $query =  query(" SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . ""  );

        confirm($query);

        while($row = fetch_array($query)){



?>

<div class="col-md-9">




<div class="row">

    <div class="col-md-7">
       <img class="img-responsive" src="<?php echo $row['product_image']; ?>" alt="">

    </div>

    <div class="col-md-5">

        <div class="thumbnail">


    <div class="caption-full">
        <h4><a href="#"><?php echo $row['product_title']; ?></a> </h4>
        <hr>
        <h4 class=""> <?php echo   $row['product_price'] . "&#122;&#322;" ; ?> </h4>

    <div class="ratings">

        <p>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            4.0 gwiazdek
        </p>
    </div>

        <p><?php echo $row['short_description']; ?></p>


    <form action="">
        <div class="form-group">
            <a href="../resources/cart.php?add=<?php echo $row['product_id']; ?>"  class="btn btn-primary" >DODAJ</a>
        </div>
    </form>

    </div>

</div>

</div>


</div>


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Opis</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Recenzje</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<p></p>

   <p> <?php echo $row['product_description']; ?></p>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

  <div class="col-md-6">

       <h3>3 recenzje </h3>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Marian
                <span class="pull-right">10 dni temu</span>
                <p>Produkt świetnej jakości. Z chęcią kupiłbym go jeszcze raz!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Janusz
                <span class="pull-right">12 dni temu</span>
                <p>Zdecydowanie polecam.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Krzychu
                <span class="pull-right">15 dni temu</span>
                <p>Próbowałem już produkty innych firm, ale dopiero tutaj znalazłem, czego potrzebowałem</p>
            </div>
        </div>

    </div>


    <div class="col-md-6">
        <h3>Dodaj recenzję</h3>

     <form action="" class="form-inline">
        <div class="form-group">
            <label for="">Imię</label>
                <input type="text" class="form-control" >
            </div>
             <div class="form-group">
            <label for="">Email</label>
                <input type="test" class="form-control">
            </div>

        <div>
            <h3>Twoja ocena</h3>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
        </div>

            <br>

             <div class="form-group">
             <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
            </div>

             <br>
              <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Wyślij">
            </div>
        </form>

    </div>

 </div>

 </div>

</div>


</div>




</div> <!-- Col md-9 Ends Here   --

 <?php } ?>

</div>
    <!-- /.container -->

    <?php  require TEMPLATE_FRONT . DS . "footer.php"  ?>
