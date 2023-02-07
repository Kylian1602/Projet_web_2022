<?php
session_start();
$id = $_POST['id'];
$connect = mysqli_connect("localhost","root", "", "siteweb");
mysqli_set_charset($connect, "utf8mb4");
$requete = mysqli_query($connect, "SELECT * FROM articles WHERE id='$id'");
while($row = mysqli_fetch_array($requete)){
    echo "<div class='container'>";
    echo "<h1>$row[1]</h1>";
    echo "<p class='date'>$row[3]</p>";
    echo "<p class='Introduction'>$row[2]</p>";
    echo "<p class='Developpement'>$row[4]</p>";
    echo "</div>";
    
}
?>