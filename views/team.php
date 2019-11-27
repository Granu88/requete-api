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
    font-size: 20px;
  }
  .team{
    justify-content: center;
  }
  .tableau{
    background-color: black;
    color: white;
  }

</style>

<div class="container text-center mt-4 mb-3">
  <h1><?php echo $team ['name']; ?></h1>
  <div class="row">
    <div class="col-md-6 mt-4 mb-4 text-center">
      <div class="card" style="width: 24rem;">
        <img src="<?php echo $team['logo']?>" class="card-img-top" alt="Equipe">
      </div>
    </div>
    <div class="col-md-6 mt-4 mb-4 team">
      <table class="table table-striped mt-4 tableau text-center">
        <tbody>
          <tr>
            <td>President :</td>
            <th><?php echo $team ['president']; ?></th>
          </tr>
          <tr>
            <td>Date de fondation :</td>
            <th><?php echo (new DateTime($team['fundation_date']))->format('d/m/Y'); ?></th>
          </tr>
          <tr>
            <td>Entraîneur :</td>
            <th><?php echo $team['coachs_name']; ?></th>
          </tr>
          <tr>
            <td>Stade :</td>
            <th><?php echo $team['stadiums_name']; ?></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col-md-12">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Photo</th>
            <th scope="col">Poste</th>
            <th scope="col">Anniversaire</th>
            <th scope="col">Lieu de naissance</th>
            <th scope="col">Nationalité</th>
            <th scope="col">Taille</th>
            <th scope="col">Poids</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($players as $player): ?>
          <tr>
            <td><?php echo $player['name']; ?></td>
            <td> <img src="<?php echo $player['photo']; ?>" alt=""> </td>
            <td><?php echo $player['poste']; ?></td>
            <td><?php echo (new DateTime($player['birthday_date']))->format('d/m/Y'); ?></td>
            <td><?php echo $player['birthday_place']; ?></td>
            <td><?php echo $player['nationality']; ?></td>
            <td><?php echo $player['size']; ?></td>
            <td><?php echo $player['weight']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
