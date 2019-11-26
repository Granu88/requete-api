<?php $title = "Liste des équipes"; ?>
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
  <h1>LIGUE 1 2019</h1>
  <div class="row">
    <?php foreach ($teams as $teamss)  { ?>
      <div class="col-md-4 mt-4 mb-4">
        <div class="card" style="width: 22rem;">
          <img src="<?php echo $teamss['logo']?>" class="card-img-top" alt="les équipes">
          <div class="card-body">
            <h4 class="card-title text-center"><a href="?route=team&id=<?php echo $teamss ['id']?>"><?php echo $teamss ['name']; ?></a></h4>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
