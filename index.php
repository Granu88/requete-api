<?php
// inclure controllers

session_start();

$data = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($data);

$route = $data[0] ? $data[0] : 'teams';

if ($route === 'teams') {
  require('controllers/teams.php');
  listTeams();
} elseif ($route === 'team') {
  require('controllers/teams.php');
  $id = $data[1];
  showTeam($id);
}
  elseif ($route === 'coach') {
  require('controllers/teams.php');
  $id = $data[1];
  showCoach($id);
}

  elseif ($route === 'coachs') {
  require('controllers/teams.php');
  listCoachs();
  }

?>
