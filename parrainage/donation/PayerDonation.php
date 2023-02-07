<?php
session_start();
    $num = $_POST["num"];
    $montant = $_POST["montant"];
    $mois = $_POST["mois"];
    $annee = $_POST["annee"];
    $code = $_POST["code"];
    $err = "";
    if(isset($_SESSION['email_session'])){
        $email = $_SESSION['email_session'];
    }
    else{
        $email = "";
    }

    if(isset($num) && $num != "" && isset($montant) && $montant != "" && isset($mois) && $mois != "" && isset($annee) && $annee != "" && isset($code) && $code != ""){
        if(is_numeric($num) == false){
            $err = "le numero de carte n'est pas un nombre";
        }
        if(strlen($num) != 16){
            $err = "le numero de carte est incorrect";
        }
        if(is_numeric($montant) == false){
            $err = "le montant n'est pas un nombre";
        }
        if(is_numeric($montant)){
            if($montant <= 0){
                $err = "le montant doit etre positif";
            }
        }
        if(is_numeric($mois) == false){
            $err = "le mois est incorrect";
        }
        if(is_numeric($mois)){
            if($mois<=0 || $mois >12){
                $err = "le mois est incorrect";
            }
        }
        if(is_numeric($annee) == false){
            $err = "l'annee est incorrect";
        }
        if(is_numeric($annee)){
            if($annee<=date("Y")){
                $err = "l'annee est incorrect";
            }
            if(strlen($annee) != 4){
                $err = "l'annee est incorrect";
            }
        }
        if(is_numeric($code) == false){
            $err = "le code n'est pas un nombre";
        }
        if(is_numeric($code)){
            if(strlen($code) != 3){
                $err = "le code est faux";
            }
        }
    }
    else{
        $err = "un des champs est vide";
    }
if($err == ""){
    $connect = mysqli_connect('localhost','root','','siteweb');
    if($email != ""){
        $requete = mysqli_query($connect,"SELECT * FROM compte WHERE email='$email'");
        $resultat = mysqli_fetch_object($requete);
        $id_client = $resultat -> id;
        $requete = mysqli_query($connect,"INSERT INTO donation(id_client,montant) VALUES('$id_client','$montant')");
    }
    else{
        $requete = mysqli_query($connect,"INSERT INTO donation(id_client,montant) VALUES('0','$montant')");
    }
}
echo $err;
?>