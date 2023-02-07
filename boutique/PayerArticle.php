<?php
session_start();
$email = $_SESSION['email_session'];
$num = $_POST['num'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$code = $_POST['code'];
$date = date("Y-m-d");
$accept_payment = false;
$compteur_article_epuiser = 0;

if(is_numeric($code) && is_numeric($annee) && is_numeric($mois) && is_numeric($num) && isset($email) && $email != "" && isset($num) && $num != "" && isset($mois) && $mois != "" && isset($annee) && $annee != "" && isset($code) && $code != "" && strlen($num) == 16 && strlen($code) == 3 && ($annee > date("Y") || ($annee == date("Y") && $mois > date("m"))) ){
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * FROM compte WHERE email='$email'");
    $resultat=mysqli_fetch_object($requete);
    $id_client = $resultat -> id;
    
    //baisser le stock dans la table boutique
    $requete = mysqli_query($connect,"SELECT * FROM panierclient WHERE id_client='$id_client'");
    while($row = mysqli_fetch_array($requete)){
        $requete2 = mysqli_query($connect,"SELECT stock FROM boutique WHERE nom='$row[2]'");
        $row2 = mysqli_fetch_object($requete2);
        $stockArticle = $row2 -> stock;
        if($stockArticle == 0){
            $compteur_article_epuiser = $compteur_article_epuiser + 1;
        }
        else{
            $accept_payment = true;
            $stockArticle = $stockArticle - 1;
            $requete3 = mysqli_query($connect,"UPDATE boutique SET stock='$stockArticle' WHERE nom='$row[2]'");
            //ajouter les articles a la table des ventes
            $requete4 = mysqli_query($connect,"INSERT INTO venteboutique(nom,prix,datevente,acheteur) VALUES('$row[2]','$row[3]','$date','$email')");
            //supprimer les articles du panier
            $requete5 = mysqli_query($connect,"DELETE FROM panierclient WHERE id_client='$id_client'");
        }
    }
    /*if($accept_payment == true){
        echo "payement reussit";
    }*/
}
else{
    if($compteur_article_epuiser > 0){
        echo "$compteur_article_epuiser des articles ont un stock deja epuiser";
    }
    if(strlen($num) != 16 || !is_numeric($num)){
        echo("Le numero de carte est invalide\n");
    }
    if(strlen($code) != 3 || !is_numeric($code)){
        echo("Le cryptograme est invalide\n");
    }
    if($annee < date("Y") || !is_numeric($annee)){
        echo("Date invalide (annee)\n");
    }
    if($annee == date("Y") || !is_numeric($annee)){
        if($mois < date("m") || !is_numeric($mois)){
            echo("Date invalie (mois)\n");
        }
    }
}
?>