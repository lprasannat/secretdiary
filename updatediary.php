<?php

include("connection.php");
session_start();
$session = $_SESSION["id"];
$textarea = $_POST["diary"];
$query = "UPDATE uses SET diary='" . $textarea . "' WHERE id='" . $session . "'";
mysqli_query($link, $query);
?>