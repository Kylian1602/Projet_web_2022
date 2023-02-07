<?php
session_start();
$type = $_POST["type"];
$connect = mysqli_connect('localhost','root','','siteweb');
$ajout_btn = false;
//on recupere le client a qui ont va ajouter l'article
$email = $_SESSION["email_session"];
$requete = mysqli_query($connect,"SELECT * FROM compte WHERE email='$email'");
$resultat = mysqli_fetch_object($requete);
$id_client = $resultat -> id;
if($type == "article"){
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * FROM panierclient WHERE id_client = '$id_client'");
    while($row = mysqli_fetch_array($requete)){
        echo "<li class='list-group-item'>Article : ".$row[2]." prix : ".$row[3]."<button class='btn btn-danger' onclick='SupprimerArticle($row[0])'>supprimer</button></li>";
        $ajout_btn = $ajout_btn = true;
    }
    if($ajout_btn == true){
        echo "<button class='btn btn-primary' onclick='AcheterArticle()'>Acheter</bouton>";
    }
    
}
if($type == "somme"){
    $requete = mysqli_query($connect,"SELECT SUM(prix) AS somme FROM panierclient WHERE id_client = '$id_client'");
    $resultat = mysqli_fetch_array($requete);
    echo $resultat['somme'];
}
?>