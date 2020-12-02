






<?php add_product();



 ?>




<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Dodaj produkt

</h1>
</div>



<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Nazwa produktu </label>
        <input type="text" name="product_title" class="form-control">

    </div>


    <div class="form-group">
           <label for="product-title">Opis produktu</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Cena produktu</label>
        <input type="number" name="product_price" class="form-control" size="60">
      </div>
    </div>


    <div class="form-group">
           <label for="product-title">Krótki opis produktu</label>
      <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"></textarea>
    </div>







</div>


<aside id="admin_sidebar" class="col-md-4">


     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Zachowaj">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Opublikuj">
    </div>



    <div class="form-group">
         <label for="product-title">Kategoria produktu</label>

        <select name="product_category_id" id="" class="form-control">
            <option value="">Wybierz kategorię</option>
            <?php  show_categories_add_product_page();  ?>

        </select>


</div>







    <div class="form-group">
      <label for="product-title">Ilość sztuk</label>
         <input  name="product_quantity" type="number" class="form-control">
    </div>



    <div class="form-group">
        <label for="product-title">Zdjęcie produktu</label>
        <input type="file" name="file">

    </div>



</aside>



</form>
