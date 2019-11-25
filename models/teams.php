<?php
require('utils/db.php');

function selectTeams ()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM teams');

  $stmt->execute();

  $teams = $stmt->fetchAll(PDO::FETCH_ASSOC);

  //var_dump($stmt->debugDumpParams());

  return $teams;

}
 ?>
