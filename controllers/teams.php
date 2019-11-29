<?php
//inclure models et views
require('models/teams.php');

function listTeams()
{
  $teams = Teams();
  require('views/teams.php');
}

function showTeam($id)
{
  $team = getTeam($id);
  $players = getPlayers($id);
  require('views/team.php');
}

function showCoach($id)
{
  $coach = getCoach($id);
  require('views/coach.php');
}

 ?>
