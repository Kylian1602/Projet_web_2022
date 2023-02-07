<?php
session_start();
$id = $_POST['id'];
$connect = mysqli_connect("localhost","root", "", "siteweb");
$requete2 = mysqli_query($connect, "SELECT * FROM commentaire WHERE id_article='$id'");
$index_color = 0;
while($row = mysqli_fetch_array($requete2)){
    $index_color = $index_color + 1;
    if ($index_color % 2 != 0){
        echo "<div class='container container1'>";
    }
    else {
        echo "<div class='container container2'>";
    }
    echo "<h3>$row[2]</h3>";
    echo "<p class='date'>$row[4]</p>";
    echo "<p class='commentaire'>$row[3]</p>";
    echo "</div>";
}
?>