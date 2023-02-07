<?php
    session_start();
    $type = $_POST['type'];
    $connect = mysqli_connect("localhost","root", "", "siteweb");
    $requete = mysqli_query($connect, "SELECT * FROM espece WHERE type='$type'");
    //necessaire car la requete du if est continuer dans le while => saute la première ligne
    $requete2 = mysqli_query($connect, "SELECT * FROM espece WHERE type='$type'");
    if(mysqli_fetch_array($requete)){
        echo "<option value='0'>CHOISIR ESPECE</option>";
    }
    else{
        echo "<option>AUNCUN ANIMAL DISPONIBLE</option>";
    }
    while($row = mysqli_fetch_array($requete2)){
        echo "<option value='$row[2]'>$row[2]</option>";
    }
?>