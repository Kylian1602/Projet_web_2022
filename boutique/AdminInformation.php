<?php
$connect = mysqli_connect('localhost','root','','siteweb');
$requete = mysqli_query($connect,'SELECT SUM(prix) AS somme FROM venteboutique');
$resultat = mysqli_fetch_array($requete);
echo $resultat['somme'];
?>