<?php
session_start();
//on recupere le client a qui ont va ajouter l'article
$date = date('y-m-d');
$email = $_SESSION["email_session"];
$id = $_POST["id"];
$connect = mysqli_connect('localhost','root','','siteweb');
$requete = mysqli_query($connect,"SELECT * FROM compte WHERE email='$email'");
$resultat = mysqli_fetch_object($requete);
$id_client = $resultat -> id;

//on recupere l'article sur lequelle on a cliquer 
$requete = mysqli_query($connect,"SELECT * FROM boutique WHERE id='$id'");
$resultat = mysqli_fetch_object($requete);
$nom = $resultat -> nom;
$prix = $resultat -> prix;
$stock = $resultat -> stock;

if($stock == 0){
    echo("L'article n'est plus en stock");
}
else{
//on ajoute l'article dans panierArticle avec l'id client en clé etrangere
$requete = mysqli_query($connect,"INSERT INTO panierclient(id_client,nom,prix,datevente) VALUES ('$id_client','$nom','$prix','$date')");
echo("Article ajouter au panier");
}
?>