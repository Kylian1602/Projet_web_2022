<?php
session_start();
 $email = $_POST['Email'];
 $password = $_POST['Mdp'];
 $reponse = "";
 if(isset($email) && isset($password) && $email!="" && $password!=""){
    $connect = mysqli_connect("localhost","root","","siteweb");
    $requete = mysqli_query($connect,"SELECT * FROM compte Where email='$email' and mdp='$password'");
    $verifExist = mysqli_num_rows($requete);
    if($verifExist > 0){
        $_SESSION['email_session'] = $email;
        $reponse = "1";
    }
    else{
        $reponse = "2";
    }
 }
else{
    $reponse = "3";
}
echo $reponse;
?> 