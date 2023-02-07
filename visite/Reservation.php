<?php
session_start();
$email = $_SESSION['email_session'];
$connect = mysqli_connect('localhost','root','','siteweb');
$requete = mysqli_query($connect,"SELECT * FROM compte WHERE email='$email'");
$resultat = mysqli_fetch_object($requete);
$id_visiteur = $resultat -> id;
$type = $_POST["type"];
$date = $_POST["Date_reservation"];
$date_actuel = date('Y-m-d');
$nb_personne = $_POST["nb_personne"];

if(isset($type) && $date != "" && $nb_personne != "" && $date > $date_actuel){
    $requete = mysqli_query($connect,"INSERT INTO reservation(date_reservation,nb_personne,type_visite,id_visiteur) VALUES('$date','$nb_personne','$type','$id_visiteur')");
    echo("reservation effectuer");
}
else{
    if($date <= $date_actuel){
        echo("La date de reservation est deja passé\n");
    }
    if($date == ""){
        echo("La date doit etre renseigner\n");
    }
    if($nb_personne == ""){
        echo("Le nombre de personne doit etre renseigner\n");
    }
}

?>