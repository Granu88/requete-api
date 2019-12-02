<?php ob_start(); ?>

<style>

  .card {
    background-color: black;
    color: white;
    height: 100%;
    width: 100%;
  }
  img {
    height: 100%;
    width: 100%;
  }

</style>

<div class="container text-center mt-4 mb-3">
  <h1>Entraîneurs de LIGUE 1 2019</h1>
  <div class="row">
    <?php foreach ($coachs as $coach)  { ?>
      <div class="col-md-4 mt-4 mb-4">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo $coach['photo']?>" class="card-img-top" alt="les équipes">
          <div class="card-body">
            <h4 class="card-title text-center"><?php echo $coach ['name']?></h4>
            <h4 class="card-title text-center"><?php echo $coach ['nationality'];?></h4>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
