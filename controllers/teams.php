<?php
//inclure models et views
require('models/teams.php');

function listTeams()
{
  $teams = selectTeams();
  require('views/teams.php');
}
 ?>
