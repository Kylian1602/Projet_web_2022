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
        <h1>Réserver en ligne votre journée au zoo Pould'Lard !</h1>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-6 text-visite"> Sélectionner la date de la réservation ainsi que le nombre de personne pour profiter plus rapidement 
            du zoo ! Vous serez rediriger sur une nouvelle page pour spécifier les tarifs. Profiter ainsi de 
          billet coupe file sur l'entré. Possibilité de ce garer sur le parking souterrain (sous présentation 
        de billet précommander à la borne)</div>
            <div class="col-sm-auto"> <img src="../image/zebre.jpg" class="img-visite"> </div>
          </div>
        <h3>Tarif</h3>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-auto"> <img src="../image/visite1.jpg" class="img-visite"> </div>
            <div class="col-sm-6 text-visite">
              <p>Le tarif du billet standard est de 6.80€.</p>
              <p>Les billets a tarif réduit sont à 5.50€. (étudiant, -26ans, +60ans, 
                personne en situation de handicap sous présentation de justificatif.)</p>
                <p>Le tarif enfant (-12 ans) est de 4€.</p>
                <p>Le tarif familliale de plus de 4 membres est de 20€ (+5€ par membre supplémentaire)</p>
                <p> Autre créature magiques : 4,5€</p>
            </div>
          </div>
        <h3>Plan</h3>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-6 text-visite">Il n'y a qu'une entré, mais le site contabilise trois sorties différentes, après l'utilisation d'une seule,
            il n'est plus possible de retourner dans le zoo avec le même billet. Pour votre sécurité, veuillez suivre 
            le trajet formé par la ligne rouge sur le plan qui vous sera remis à l'entré. (toujours se 
          référer au plan le plus actuelle, ne pas garder les anciens pour votre sécurité.</div>
            <div class="col-sm-auto"> <img src="../image/plan.png" class="img-visite"> </div>
            <span>Toute sortie est définitive</span>
          </div>
      </div>
      <button class="btn btn btn-primary" onclick="Reservation()">Reserver votre visite</button>
    </body>

    <script>

    function Reservation(){
      if(verifconnexion == 1){
        window.location.href="PagePayer.php?type=Visite";
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
            background-image: url("../image/fond_visite.png");
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