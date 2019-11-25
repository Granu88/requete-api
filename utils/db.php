<?php
function dbConnect()
{
  $db = new PDO('mysql:host=localhost;dbname=football_french_championship', 'root', '');
  return $db;
}

 ?>
