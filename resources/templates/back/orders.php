

        <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   Wszystkie zamówienia

</h1>


<h4 class="bg-success" ><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>id</th>
           <th>Kwota</th>
           <th>Transakcja</th>
           <th>Waluta</th>
           <th>Status</th>

      </tr>
    </thead>
    <tbody>
        <tr>
            <?php display_orders(); ?>
        </tr>


    </tbody>
</table>
</div>
