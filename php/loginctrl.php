<?php
session_start();
$_SESSION["nomSession"] = $_POST["name"];
header("location: ./loginsuite.php");
exit;
