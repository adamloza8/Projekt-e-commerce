





<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Edytuj produkt

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

</div>

<aside id="admin_sidebar" class="col-md-4">


     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>

    <div class="form-group">
         <label for="product-title">Kategoria produktu</label>
          <hr>
        <select name="product_category" id="" class="form-control">
            <option value="">Wybierz kategorię</option>

        </select>


</div>

    <div class="form-group">
      <label for="product-title">Marka produktu</label>
         <select name="product_brand" id="" class="form-control">
            <option value="">Wybierz produkt</option>
         </select>
    </div>


    <div class="form-group">
          <label for="product-title">Słowa kluczowe produktu</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div>

    <div class="form-group">
        <label for="product-title">Zdjęcie produktu</label>
        <input type="file" name="file">

    </div>



</aside>



</form>
