<?php
    session_start();
    $connect = mysqli_connect('localhost','root','','siteweb');
    $type = $_POST["type"];
    if(isset($_POST["trie"])){
        $trie = $_POST["trie"];
    }
    else{
        $trie = "";
    }
    if(isset($_POST["mot"])){
        $mot = $_POST["mot"];
    }
    else{
        $mot = "";
    }
    if($type == "souvenir"){
        if($trie == "" || $trie == "aucun"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="souvenir"');
        }
        if($trie == "croissant"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="souvenir" ORDER BY prix');
        }
        if($trie == "decroissant"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="souvenir" ORDER BY prix DESC');
        }
        if($trie == "alphabetique"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="souvenir" ORDER BY nom');
        }
        if($trie == "nonalphabetique"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="souvenir" ORDER BY nom DESC');
        }
    }
    if($type == "animaux"){
        if($trie == "" || $trie == "aucun"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="animaux"');
        }
        if($trie == "croissant"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="animaux" ORDER BY prix');
        }
        if($trie == "decroissant"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="animaux" ORDER BY prix DESC');
        }
        if($trie == "alphabetique"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="animaux" ORDER BY nom');
        }
        if($trie == "nonalphabetique"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="animaux" ORDER BY nom DESC');
        }
    }
    if($type == "nourriture"){
        if($trie == "" || $trie == "aucun"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="nourriture"');
        }
        if($trie == "croissant"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="nourriture" ORDER BY prix');
        }
        if($trie == "decroissant"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="nourriture" ORDER BY prix DESC');
        }
        if($trie == "alphabetique"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="nourriture" ORDER BY nom');
        }
        if($trie == "nonalphabetique"){
            $requete = mysqli_query($connect,'SELECT * FROM boutique WHERE type="nourriture" ORDER BY nom DESC');
        }
    }
    if($type == "recherche"){
        $requete=mysqli_query($connect,'SELECT * FROM boutique WHERE nom LIKE "%'. $mot .'%"');
    }
        while($row=mysqli_fetch_array($requete)){
            echo '<div class="col mb-5">';
            echo    '<div class="card h-100">';
            echo        '<div class="badge bg-dark text-white position absolute" style=top : 0.5rem; right: 0.5rem>Sale</div>';
            echo            '<img class="card-img-top" src="'.$row[5].'" alt="">';
            echo       '<div class="card-body p-4">';
            echo           '<div class="text-center">';
            echo                '<h5 class="fw-bolder">'.$row[1].'</h5>';
            echo                '<div class="d-flex justify-content-center small text-warning mb-2">';
            echo                    '<span class="text-muted">Prix : '.$row[2].' €</span>';
            echo                '</div>';
            echo                '<div class="d-flex justify-content-center small text-warning mb-2">';
            echo                    '<span class="text-muted">Stock : '.$row[3].'</span>';
            echo                '</div>';
            echo           '</div>';
            echo        '</div>';
            echo        '<div class="card-footer p-4 pt-0 border-top-0 bg-transparent"></div>';
            echo            '<div class="text-center">';
            echo                '<button class="btn btn-outline-dark mt-auto" onclick="acheterArticle('.$row[0].')" id="'.$row[0].'">Acheter</button>';
            echo            '</div>';
            echo        '</div>';
            echo    '</div>';
            echo '</div>';
        }
?>