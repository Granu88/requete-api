<?php
// inclure controllers

session_start();

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
  require('controllers/teams.php');
  listTeams();
} elseif ($route === 'team') {
  require('controllers/teams.php');
  $id = $_GET['id'];
  showTeam($id);
}
  elseif ($route === 'coach') {
  require('controllers/teams.php');
  $id = $_GET['id'];
  showCoach($id);
}
?>
