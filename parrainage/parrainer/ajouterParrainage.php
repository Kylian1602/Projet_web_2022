<?php

session_start();
$id_animal = $_POST["id_animal"];
if(isset($_SESSION['email_session'])){
    $email_session=$_SESSION['email_session'];
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * from compte where email='$email_session'");
    $resultat = mysqli_fetch_object($requete);
    $id_client = $resultat -> id;
    $verif_parrainage = $resultat -> parrainage;
    if($verif_parrainage == ""){
        $connect = mysqli_connect('localhost','root','','siteweb');
        $requete = mysqli_query($connect,"UPDATE compte SET parrainage='$id_animal' WHERE id='$id_client'");
        $connect = mysqli_connect('localhost','root','','siteweb');
        $requete = mysqli_query($connect,"UPDATE animaux SET parraineur='$id_client' WHERE id='$id_animal'");
        echo "";
    } 
    else{
        echo "Vous parrainer deja un animal";
    }
}
else{
    echo "Vous n'ete pas connecter";
}

?>