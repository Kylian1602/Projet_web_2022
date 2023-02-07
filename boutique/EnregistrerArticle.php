<?php
$type = $_POST['type'];
$err = "";
if(isset($_POST["nom"]) && $_POST["nom"] != ""){
    $nom = $_POST["nom"];
}
else{
    $err = "nom vide";
}
if(isset($_POST["prix"]) && $_POST["prix"] != ""){
    $prix = $_POST["prix"];
}
else{
    $err = "prix vide";
}
if(isset($_POST["stock"]) && $_POST["stock"] != ""){
    $stock = $_POST["stock"];
}
else{
    $err = "stock vide";
}
if(isset($_POST["image"]) && $_POST["image"] != ""){
    $lien = $_POST["image"];
}
else{
    $err = "lien vide";
}
if(isset($_POST["date"]) && $_POST["date"] != ""){
    $date = $_POST["date"];
}
else{
    $err = "date vide";
}

if($err == ""){
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"INSERT INTO boutique(nom,prix,stock,date_ajout,image,type) VALUES('$nom','$prix','$stock','$date','$lien','$type')/*('$nom','$prix','$stock','$date','$lien','$type')*/");
    echo("1");
}
else{
    echo $err;
}
?>