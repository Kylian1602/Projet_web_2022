<?php
session_start();
$espece = $_POST['espece'];
$connect = mysqli_connect('localhost', 'root', '', 'siteweb');
$requete = mysqli_query($connect, "SELECT * FROM animaux WHERE espece='$espece'");
while ($row = mysqli_fetch_array($requete)){
    echo '<div class="col mb-5">';
    echo    '<div class="card h-100">';
    echo        '<div class="badge bg-dark text-white position absolute" style=top : 0.5rem; right: 0.5rem>'.$row[1].'</div>';
    echo            '<img class="card-img-top" src="'.$row[8].'" alt="">';
    echo       '<div class="card-body p-4">';
    echo           '<div class="text-center">';
    echo                '<h5 class="fw-bolder">'.$row[2].'</h5>';
    echo                '<div class="d-flex justify-content-center small text-warning mb-2">';
    echo                    '<span class="text-muted">Age : '.$row[3].'</span>';
    echo                '</div>';
    echo                '<div class="d-flex justify-content-center small text-warning mb-2">';
    echo                    '<span class="text-muted">Poids : '.$row[4].' kg</span>';
    echo                '</div>';
    echo                '<div class="d-flex justify-content-center small text-warning mb-2">';
    echo                    '<span class="text-muted">Nourriture : '.$row[5].'</span>';
    echo                '</div>';
    echo                '<div class="d-flex justify-content-center small text-warning mb-2">';
    echo                    '<span class="text-muted">Origine : '.$row[6].'</span>';
    echo                '</div>';
    echo                '<div class="d-flex justify-content-center small text-warning mb-2">';
    echo                    '<span class="text-muted">Emplacement : '.$row[7].'</span>';
    echo                '</div>';
    echo           '</div>';
    echo        '</div>';
    echo        '<div class="card-footer p-4 pt-0 border-top-0 bg-transparent"></div>';
    echo            '<div class="text-center">';
    echo                '<button class="btn btn-outline-dark mt-auto" onclick="parrainerAnimal('.$row[0].')" id="'.$row[0].'">Parrainer</button>';
    echo            '</div>';
    echo        '</div>';
    echo    '</div>';
    echo '</div>';

}
?>