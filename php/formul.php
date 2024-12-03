<!-- variable a avoir
 get nom
 get age
 get situation
  et les checkbox-->
<?php
  $name = $_GET["name"];
  $age = $_GET["age"];
  $situation = $_GET["situation"];
  $interet = ""; // faire correspondre aux checkbox des centres d'intérêt
  $requete = 'insert into Matable values (';
  $requete = $requete . "'" . $name . "'," . $age . ",'" . $situation ."',";

//Récupération des centres d'interet
  if(isset($_GET["internet"]))
  {
    $requete = $requete . "1,";
    $interet = "Internet,";
  } else {
    $requete = $requete . "0,";
  }

  if(isset($_GET["micro"]))
  {
    $requete = $requete . "1,";
    $interet = $interet . " la micro-informatique,";
  } else {
    $requete = $requete . "0,";
  }

  if(isset($_GET["jeux"]))
  {
    $requete = $requete . "1)";
    $interet = $interet . " jeux vidéo";
  } else {
    $requete = $requete . "0)";
  }

  if((!(isset($_GET["internet"])))&&(!(isset($_GET["micro"])))&&(!(isset($_GET["jeux"]))))
  {
    $interet = "aucun des domaines proposés";
  }
?>

<h1>Merci à vous, <?php echo $name ?></h1>

<p>Vous avez donc le bel âge de <strong><?php echo $age ?></strong> ans, vous êtes <strong><?php echo $situation ?></strong> et vous vous intéressez à <strong><?php echo $interet; ?></strong>. </p>

<p>Je m'empresse d'envoyer la requête : <strong><?php echo $requete; ?></strong> à notre base de données</p>


