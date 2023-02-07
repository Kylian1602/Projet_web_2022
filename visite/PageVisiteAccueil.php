<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION["verifadmin"])){
    $verifadmin = $_SESSION["verifadmin"];
    echo('<script>var verifadmin='.$verifadmin.';</script>');
  }
  else{
    echo('<script>var verifadmin=0;</script>');
  }
?>
<html>
    <head>
        <link href="AccueilVisite.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="../jquery-3.6.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <header id="header"></header>

    <body>
        <div>
            <button class="btn btn-primary" id="btn_list_admin" onclick="redirection('adminList')">Liste reservation</button>
        </div>
        <div id="visiter" class="panneau" onclick="redirection('visite')">
            <div id="fondvisitez" class="titre">
                <p class="titre_accueil">Visiter</p>
            </div>
        </div>
        <div id="spectacle" class="panneau" onclick="redirection('spectacle')">
            <div id="fondvisitez" class="titre">
                <p class="titre_accueil">spectacle</p>
            </div>
        </div>
        <div id="safarie" class="panneau" onclick="redirection('safarie')">
            <div id="fondvisitez" class="titre">
                <p class="titre_accueil">Safari</p>
            </div>
        </div>
        
    </body>

    <script>
        function redirection(type){
            if(type == "visite"){
                window.location.href = "PageEntreSimple.php";
            }
            if(type == "spectacle"){
                window.location.href = "PageSpectacle.php";
            }
            if(type == "safarie"){
                window.location.href = "PageSafarie.php";
            }
            if(type == "adminList"){
                window.location.href = "PageAdminReservation.php";
            }
        }

        $(document).ready(function(){
            $("#header").load("../barrenav/barrenav2.php");
            if(verifadmin == 0){
                $("#btn_list_admin").hide();
            }
            else{
                $("#btn_list_admin").show();
            }
        });
    </script>
    <style>
        .titre{
            font-size: 50px;
            font-weight: 900;
            color: white;
            text-shadow: #000000 1px 1px 10px;
        }
        
        .titre_accueil{
            position: relative;
            padding-top: 7vh;
            vertical-align: middle;
            text-align: center;
          
        }
        .panneau{
            height: 25vh; 
            width: 100%;
            position: relative;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }   
        .panneau:hover{
            cursor: pointer;
        }
        #visiter{
            background-image: url("../image/fond_visite.png");
            top:5vh;
        }
        #spectacle{
            background-image: url("../image/spectacle.png");
            top: 10vh;
        }
        #safarie{
            background-image: url("../image/fond_safarie.png");
            top: 15vh;
        }
    </style>
</html>