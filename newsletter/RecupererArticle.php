<?php
    session_start();
    $connect = mysqli_connect("localhost","root", "", "siteweb");
    mysqli_set_charset($connect, "utf8mb4");
    $requete = mysqli_query($connect, "SELECT * FROM articles ORDER BY date desc");
    while($row = mysqli_fetch_array($requete)){
        echo "<div class='article'>";
        echo "<h3 onclick='lireArticle($row[0])'>$row[1]</h3>";
        echo "<p class='date'>$row[3]</p>";
        echo "<p>$row[2]</p>";
        echo "</div>";
    }
?>