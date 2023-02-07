<!DOCTYPE html>
<?php 
session_start();
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="../jquery-3.6.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <header id="header"></header>

    <body>
    <div id="panneau"></div>
    <div class="container h-100" id="introduction">
        <h1>Découvrez nos plus beaux spectacles !</h1>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-6 text-visite"> Réservez votre spectacle après avoir décidé de nombre de visiteur. 
              Pour tout âge et tout individus, venez découvrir nos présentations aquatiques, aériennes, terrestres.
              De l'historique au fantastique, nos animaux sont entraînés pour ces représentations 
              dans le respect et l'éthique. Vous ne pourrez assiter à ces spectacles seulement si vous posséder 
              un ticket de visite valide pour le jours même.
            </div>
            <div class="col-sm-auto"> <img src="../image/spectacle-oiseau.png" class="img-visite"> </div>
          </div>
        <h3>Tarif</h3>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-auto"> <img src="../image/spectacle-perruche.jpg" class="img-visite"> </div>
            <div class="col-sm-6 text-visite">
              <p>Le tarif du billet standard est de 8€</p>
              <p>Le tarif réduit est de 6€ (étudiant, -26ans, +60ans, 
                personne en situation de handicap sous présentation de justificatif.)
              </p>
              <p>Le tarif enfant (-12 ans) est de 4€.</p>
              <p>Le tarif familliale de plus de 4 membres est de 20€ (+5€ par membre supplémentaire)</p>
              <p> Autre créature magiques : 4,5€</p>
              <p>En fonction du spectacle rajouter le prix de la présentation: aquatique : +2, aérien : +3, terrestre : +0</p>
            </div>
          </div>
        <h3>Règle</h3>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-6 text-visite">Certains animaux sont plus sensibles que d'autre aux 
              éblouissement et onde. Pour le respect de leur santé, les téléphones allumés et les flash sont interdits.
              Si un spectacle requiert d'autres prérogatives, merci de les respecter. Tout non-respect sera sanctionné
              selon les articles de loi correspondant au pays où se trouve les sites des zoo Pould'Lard.
            </div>
            <div class="col-sm-auto"> <img src="../image/spectacle-otaire.png" class="img-visite"> </div>
            <span>Toute sortie est définitive</span>
          </div>
      </div>
      <button class="btn btn btn-primary" onclick="Reservation()">Reserver votre visite</button>
    </body>

    <script>

    function Reservation(){
      if(verifconnexion == 1){
        window.location.href="PagePayer.php?type=Spectacle";
      }
      else{
        alert("vous devez etre connecter pour reserver");
      }
    }

        $(document).ready(function(){
            $("#header").load("../barrenav/barrenav2.php");
        });
    </script>
                <style>
        #panneau{
            background-image: url("../image/spectacle.png");
            height: 25vh; 
            width: 100%;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }   
        span{
          color: red;
        }
        .img-visite{
          height : 40vh;
        }
        .text-visite{
          font-size: 16pt;
          text-align : justify;
        }
        h1{
          margin: 3rem;
        }
        h3{
          margin:1rem;
        }
      </style>
</html>