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
    coachs.id AS coachs_id,
    stadiums.name AS stadiums_name,
    stadiums.id AS stadiums_id
    FROM teams
    INNER JOIN coachs_has_teams
    ON coachs_has_teams.id_team = teams.id
    INNER JOIN coachs
    ON coachs.id = coachs_has_teams.id_coach
    INNER JOIN stadiums
    ON stadiums.id = teams.id
    WHERE teams.id = :id');

  $stmt->bindValue(':id', $id);

  $stmt->execute();

  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getPlayers ($idTeam)
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT
    players.*
    FROM players
    INNER JOIN players_has_teams
    ON players_has_teams.id_player= players.id
    WHERE players_has_teams.id_team = :id_team');

    $stmt->bindValue(':id_team', $idTeam);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}



 ?>
