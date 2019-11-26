<?php $title = "Equipe"; ?>
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
  tbody{
    color: white;
  }
  .row{
    justify-content: center;
  }
</style>

<?php var_dump($team); ?>

<div class="container text-center mt-4 mb-3">
  <h1><?php echo $team ['name']; ?></h1>
  <div class="row">
    <div class="col-md-4 mt-4 mb-4">
      <div class="card" style="width: 24rem;">
        <img src="<?php echo $team['logo']?>" class="card-img-top" alt="Equipe">
        <div class="card-body">
          <table class="table table-striped mt-4">
            <tbody>
              <tr>
                <td>President :</td>
                <th class="card-title text-center"><?php echo $team ['president']; ?></th>
              </tr>
              <tr>
                <td>Date de fondation :</td>
                <th><?php echo $team['fundation_date']; ?></th>
              </tr>
              <tr>
                <td>Entraîneur :</td>
                <th><?php echo $team['coachs_name']; ?></th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
