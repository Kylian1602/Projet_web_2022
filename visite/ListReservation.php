<?php
    session_start();
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * FROM reservation");
    while($row = mysqli_fetch_array($requete)){
        $requete2 = mysqli_query($connect,"SELECT * FROM compte WHERE id='$row[4]'");
        $resultat = mysqli_fetch_object($requete2);
        $pseudo = $resultat -> pseudo;
        $email = $resultat -> email;
        echo "<li class='list-group-item'>reservation pour : ".$row[2]." personnes le : ".$row[1]." par : ".$pseudo." email : ".$email."</li>";
    }
?>