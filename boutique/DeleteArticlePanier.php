<?php

$id = $_POST["id"];
$connect = mysqli_connect("localhost","root","","siteweb");
$requete = mysqli_query($connect,"DELETE FROM `panierclient` WHERE id='$id'");

?>