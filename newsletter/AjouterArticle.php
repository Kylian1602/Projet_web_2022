<?php
session_start();
$err = "";
if(isset($_POST["titre"]) && $_POST["titre"] != ""){
    $titre = $_POST["titre"];
}
else{
    $err = "titre vide";
}
if(isset($_POST["synopsis"]) && $_POST["synopsis"] != ""){
    $synopsis = $_POST["synopsis"];
}
else{
    $err = "synopsis vide";
}
if(isset($_POST["corps"]) && $_POST["corps"] != ""){
    $corps = $_POST["corps"];
}
else{
    $err = "corps vide";
}
$Date = date('Y-m-d');
if($err == ""){
    $connect = mysqli_connect("localhost","root","","siteweb");
    $requete = mysqli_query($connect,"INSERT INTO `articles`(`titre`, `description`, `date`, `article`) VALUES ('$titre','$synopsis','$Date','$corps')");
}
else {
    echo($err);
}
?>