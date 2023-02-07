<?php
    session_start();
    $type = $_POST["type"];
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * FROM venteboutique");
    $i = 0;
    if($type == "nonDetail"){
        while($row = mysqli_fetch_array($requete)){
            $i = $i + 1;
            if($i < 4){
                echo "<li class='list-group-item'>Article : ".$row[1]." prix : ".$row[2]." acheté par : ".$row[4]." vendu le : ".$row[3]."</li>";
            }
        }
        echo "<button class='btn btn-primary' onclick='articleDetail()'>Detail</button>";
    }
    if($type == "Detail"){
        while($row = mysqli_fetch_array($requete)){
                echo "<li class='list-group-item'>Article : ".$row[1]." prix : ".$row[2]." acheté par : ".$row[4]." vendu le : ".$row[3]."</li>";
        }
    }
?>