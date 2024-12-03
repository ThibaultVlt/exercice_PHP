<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="test/html; charset=utf_8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>
    <?php
      if(!(isset($_SESSION["nomSession"])))
        {
          echo "ERREUR login !";
      } else {
        echo "Au menu du jour... ";
      }
    ?>
  </title>
</head>
  <body>
    <?php
      //Si ERREUR
      if(!(isset($_SESSION["nomSession"])))
        {
    ?>
          <h1>ERREUR de login : vous n'avez pas le droit à l'accès</h1>
          <p><a href='./login.html'>Retour à la page de connexion</a></p>
    <?php
      }
      //Si OK
      else {
    ?>
    <h1>Au menu du jour pour vous, <?php echo $_SESSION["nomSession"] ?> :</h1>
    <ul>
      <li>Sommaire</li>
      <li>Et aussi...</li>
      <li>Et encore...</li>
      <li>Et pour finir...</li>
    </ul>
    <?php
      }
    ?>
  </body>
</html>
