<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/src/css/style.css">
</head>
<body>
  <!-- Morceau PHP dans le HTML -->
    <!----------------------- QUESTION 1 ----------------------------->
    <h2>QUESTION 1 :</h2>
    <?php
    //Écrire le PHP entre les balises
    for ($i = 3; $i <= 7; $i++){
      echo '<font size='.$i.'>Hello World !</font><br/>';
    }

    echo "<hr />";

    for ($j = 3; $j <= 7; $j++){
      echo '<font size='.$j.'>Hello World !</font><br/><br/>';
    }
    ?>

    <!----------------------- QUESTION 2 ----------------------------->
    <h2>QUESTION 2 :</h2>
    <h3>En ce <?php $today = getdate();
      echo $today["mday"] . " " . $today["month"] . " " . $today["year"];?>,
      sur le serveur <?php echo $_SERVER['SERVER_NAME']; ?>,
      il est <?php echo $today["hours"] . " h " . $today["minutes"] . " min." ?></h3>

    <h3>Variable HTTP serveur (getenv())</h3>
    <table>
      <tr class="en-tete">
        <th scope="col">Variable</td>
        <th scope="col">Valeur</td>
      </tr>
      <tr>
        <td>GATEWAY_INTERFACE</td>
        <td><?php echo getenv("GATEWAY_INTERFACE"); ?></td>
      </tr>
      <tr>
        <td>SERVER_NAME</td>
        <td><?php echo getenv("SERVER_NAME"); ?></td>
      </tr>
      <tr>
        <td>SERVER_SOFTWARE</td>
        <td><?php echo getenv("SERVER_SOFTWARE"); ?></td>
      </tr>
      <tr>
        <td>SERVER_PROTOCOL</td>
        <td><?php echo getenv("SERVER_PROTOCOL"); ?></td>
      </tr>
      <tr>
        <td>REQUEST_METHOD</td>
        <td><?php echo getenv("REQUEST_METHOD"); ?></td>
      </tr>
      <tr>
        <td>QUERY_STRING</td>
        <td><?php echo getenv("QUERY_STRING"); ?></td>
      </tr>
      <tr>
        <td>DOCUMENT_ROOT</td>
        <td><?php echo getenv("DOCUMENT_ROOT"); ?></td>
      </tr>
      <tr>
        <td>HTTP_ACCEPT</td>
        <td><?php echo getenv("HTTP_ACCEPT"); ?></td>
      </tr>
      <tr>
        <td>HTTP_ACCEPT_CHARSET</td>
        <td><?php echo getenv("HTTP_ACCEPT_CHARSET"); ?></td>
      </tr>
      <tr>
        <td>HTTP_ACCEPT_ENCODING</td>
        <td><?php echo getenv("HTTP_ACCEPT_ENCODING"); ?></td>
      </tr>
      <tr>
        <td>HTTP_ACCEPT_LANGUAGE</td>
        <td><?php echo getenv("HTTP_ACCEPT_LANGUAGE"); ?></td>
      </tr>
      <tr>
        <td>HTTP_CONNECTION</td>
        <td><?php echo getenv("HTTP_CONNECTION"); ?></td>
      </tr>
      <tr>
        <td>HTTP_HOST</td>
        <td><?php echo getenv("HTTP_HOST"); ?></td>
      </tr>
      <tr>
        <td>HTTP_REFERER</td>
        <td><?php echo getenv("HTTP_REFERER"); ?></td>
      </tr>
      <tr>
        <td>HTTP_USER_AGENT</td>
        <td><?php echo getenv("HTTP_USER_AGENT"); ?></td>
      </tr>
      <tr>
        <td>REMOTE_ADDR</td>
        <td><?php echo getenv("REMOTE_ADDR"); ?></td>
      </tr>
      <tr>
        <td>SCRIPT_FILENAME</td>
        <td><?php echo getenv("SCRIPT_FILENAME"); ?></td>
      </tr>
      <tr>
        <td>SERVER_ADMIN</td>
        <td><?php echo getenv("SERVER_ADMIN"); ?></td>
      </tr>
      <tr>
        <td>SERVER_PORT</td>
        <td><?php echo getenv("SERVER_PORT"); ?></td>
      </tr>
      <tr>
        <td>SERVER_SIGNATURE</td>
        <td><?php echo getenv("SERVER_SIGNATURE"); ?></td>
      </tr>
    </table>

    <!----------------------- QUESTION 3 ----------------------------->
    <h2>QUESTION 3 :</h2>

    <a href="./login.html">Question 3</a>

    <!----------------------- QUESTION 4 ----------------------------->
    <h2>QUESTION 4 :</h2>
    <a href="./formulaire.html">Question 4</a>
</body>
</html>
