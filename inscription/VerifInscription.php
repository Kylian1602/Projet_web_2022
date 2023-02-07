<?php
session_start();
$pseudo = $_POST['Pseudo'];
$email = $_POST['Email'];
$mdp = $_POST['Mdp'];
$date = $_POST['Date_naissance'];

if(isset($pseudo) && $pseudo != null && isset($email) && $email != null && isset($mdp) && $mdp != null && isset($date) && $date != null){
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * FROM compte WHERE email='$email'");
    $verifExist = mysqli_num_rows($requete);
    if($verifExist > 0){
        echo "1";
    }
    else{
        mysqli_query($connect,"INSERT INTO compte(pseudo,email,mdp,droit,date_naissance) VALUES('$pseudo','$email','$mdp','visiteur','$date')");
        $_SESSION['email_session'] = $email;
        echo "2";
    }
}
else{
    echo "3";
}
?>