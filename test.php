<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$link = mysqli_connect("localhost", "dbuser", 123, "lakshmi");
//echo "working";
if (mysqli_connect_error()) {
    echo "could not connect to database";
}
//$query="INSERT INTO `uses` VALUES('def','def@gamil.com','',145)";
//$query = "UPDATE uses SET email='prasanna@gmail.com' WHERE id=13 LIMIT 1";

//mysqli_query($link, $query);
//$query="SELECT * FROM uses WHERE name='lakshmi'";
//$query="SELECT * FROM uses WHERE name LIKE '%A%'";
//$query="SELECT * FROM uses WHERE id>23";
//$query="UPDATE `uses` SET name='lakshmi\'s' WHERE `id`=12 LIMIT 1";

$name="lakshmi's";
$query="SELECT name FROM uses WHERE name='".  mysqli_real_escape_string($link,$name)."'";
//$query = "SELECT * FROM uses";

if ($result = mysqli_query($link, $query)) {
    echo mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
        
    }
} else {
    echo "it doesn't works";
}
?>