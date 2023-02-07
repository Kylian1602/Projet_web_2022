<?php
session_start();
    $com = $_POST["com"];
    $idArticle = $_POST["id"];
    $Date = date('Y-m-d');
    $connect = mysqli_connect("localhost","root","","siteweb");
    $requete = mysqli_query($connect,"INSERT INTO `commentaire`(`id_article`, `pseudo`, `commentaire`, `date`) VALUES ('$idArticle','pseudotest','$com','$Date')");

?>