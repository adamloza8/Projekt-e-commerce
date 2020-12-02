
             

<h1 class="page-header">
   Wszystkie produkty

</h1>
<h3 class="bg-success" ><?php display_message(); ?></h3> 
<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>Nazwa</th>
           <th>Kategoria</th>
           <th>Cena</th>
           <th>Ilość</th>
      </tr>
    </thead>
    <tbody>

      <?php get_products_in_admin(); ?>
     


  </tbody>
</table>






