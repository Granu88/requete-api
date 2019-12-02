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
            <th><a href="./coach/<?php echo $team['coachs_id']; ?>"><?php echo $team['coachs_name']; ?></a></th>
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
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Liste des joueurs
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <table class="table">
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
                    <td> <img src="<?php echo $player['photo']; ?>" alt="photo"> </td>
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
      </div>
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <tbody>
          <?php foreach ($matchs as $match): ?>
          <tr>
            <td><?php echo $match['date']; ?></td>
            <td><?php echo $match['th_short_name']; ?></td>
            <td><?php echo $match['score_home']; ?></td>
            <td><?php echo $match['score_away']; ?></td>
            <td><?php echo $match['ta_short_name']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
