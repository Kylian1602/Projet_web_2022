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
        <h1>Parcourez nos créatures par un safari !</h1>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-6 text-visite"> Sélectionner la date de la réservation ainsi que le nombre de véhicule pour parcourir 
              le safari plus rapidement ! N'oubliez pas de spécifier votre véhicule, sous peine de payer un supplément à l'entré si 
              le véhicule ne correspond pas.
              Profiter ainsi de 
              billet coupe file sur l'entré. Possibilité de louer un véhicule à notre service spécial <a>Ici</a></div>
            <div class="col-sm-auto"> <img src="../image/vehicule.png" class="img-visite"> </div>
          </div>
        <h3>Tarif</h3>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-auto"> <img src="../image/visite1.jpg" class="img-visite"> </div>
            <div class="col-sm-6 text-visite">
              <p>Le tarif du billet standard est de 10€</p>
              <p>Un tarif supplémentaire peut être attribué en fonction de votre véhicule. +6€ pour un véhicule 
                au rejet carbone au dessus de C.
              </p>
                <p>Pour tous les bus et cars scolaires, l'entré est de 55€.</p>
                
                <p> Calèche non admise, peu importe l'animal au rêne.</p>
            </div>
          </div>
        <h3>Règle</h3>
          <div class="row justify-content-md-start reading reading" style="--bs-columns: 4; --bs-gap: 5rem;">
            <div class="col-sm-6 text-visite">Une fois entré dans le safari, il n'est plus possible de revenir en 
              arrière. Vous devez atteindre la sortie finale en suivant la route. Pour votre sécurité, vérifier
            que votre talkie-walkie fonctionne bien. Si on problème survient lors de votre périple, n'hésitez pas à nous contacter, 
          nos équipes pourront vous rejoindre entre 5 à 10 minutes.</div>
            <div class="col-sm-auto"> <img src="../image/puma.jpg" class="img-visite"> </div>
            <span>Toute sortie est définitive</span>
          </div>
      </div>
      <button class="btn btn btn-primary" onclick="Reservation()">Reserver votre visite</button>
    </body>

    <script>

    function Reservation(){
      if(verifconnexion == 1){
        window.location.href="PagePayer.php?type=Safarie";
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
            background-image: url("../image/fond_safarie.png");
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