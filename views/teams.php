<?php $title = "Liste des équipes"; ?>
<?php ob_start(); ?>
<style>
  .card {
    background-color: black;
    color: white;
  }
</style>

<div class="container text-center mt-4 mb-3">
  <h1>LIGUE 1 2019</h1>
  <div class="row">
    <?php foreach ($teams as $team)  { ?>
      <div class="col-md-4 mt-4 mb-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $team['logo']?>" class="card-img-top" alt="les équipes">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $team ['name']; ?></h5>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
