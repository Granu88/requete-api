<?php
// inclure controllers

session_start();

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
  require('controllers/teams.php');
  listTeams();
}
?>
