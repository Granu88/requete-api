<?php
require('utils/db.php');

function Teams ()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM teams');

  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);

  //var_dump($stmt->debugDumpParams());


}

function getTeam ($id)
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT
    teams.* ,
    coachs.name AS coachs_name,
    coachs.id AS coachs_id
    FROM teams
    INNER JOIN coachs_has_teams
    ON coachs_has_teams.id_team = teams.id
    INNER JOIN coachs
    ON coachs.id = coachs_has_teams.id_coach
    WHERE teams.id = :id');

  $stmt->bindValue(':id', $id);

  $stmt->execute();

  return $stmt->fetch(PDO::FETCH_ASSOC);

}



 ?>
