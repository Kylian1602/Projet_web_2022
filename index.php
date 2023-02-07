<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="jquery-3.6.0.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="index.css" rel="stylesheet">
    </head>
    <header id="header"></header>
    <body>
        <div class="imagefond">
            <div id="fondecran1" class="titre">
                <p id="titre_accueil">WELCOME TO POULD'LARD</p>
            </div>
            
            <div id="fondecran2">
                <div class="header_boutique">
                    <p class="boutique_titre" id="boutique_redirection">Decouvrer notre boutique</p>
                </div>
                <div class="block1">
                    <div class="grande_section" >
                        <div class="image">
                            <img src="image/boutiqueSouvenir.jpg">
                        </div>
                        <div class="texte"><br><br><br><br><br><br><br>
                            <h3>Souvenir</h3> 
                        <span><br>
                        N'oublier pas de faire un tour a notre boutique afin d'acheter un souvenir de votre journée au zoo PouleD'Lard</span>
                        </div>
                    </div>
                </div>
                <div class="block2">
                <div class="grande_section" >
                        <div class="image">
                            <img src="image/imageAnimauxJouet.jpg">
                        </div>
                        <div class="texte"><br><br><br><br><br><br><br>
                            <h3>Article pour animaux</h3> 
                        <span><br>
                        Tout le necessaire pour prendre soin de vos animaux domestique ou nourrir un animal du zoo est disponible dans notre boutique</span>
                        </div>
                    </div>
                </div>
                <div class="block3">
                <div class="grande_section" >
                        <div class="image">
                            <img src="image/imageCafe.jpg">
                        </div>
                        <div class="texte"><br><br><br><br><br><br><br>
                            <h3>Cafeteria</h3> 
                        <span><br>
                        Des restorant sont disponible dans notre zoo, decouvrer leur produit et commander en ligne</span>
                        </div>
                    </div>
                </div>
        </div>

            <div id="fondecran3">
                <div class="header_Visite">
                    <p class="Visite_titre">Reserver une activité</p>
                </div>
                <div class="circle_V1"></div>
                <div class="text_V1">
                    <h2 class="titre_visite">Safari</h2>
                    <p class="texte_visite">Venez decouvrir la vie sauvage de PouleD'Lard
                    </p>
                </div>
                <div class="circle_V2"></div>
                <div class="text_V2">
                    <h2 class="titre_visite">Visite</h2>
                    <p class="texte_visite">Des simples animaux au plus rare créature magique notre pokedex est complet
                    </p>
                </div>
                <div class="circle_V3"></div>
                <div class="text_V3">
                    <h2 class="titre_visite">Spectacle</h2>
                    <p class="texte_visite"> Nous avons des spectacle d'otarie et des course de dragon, laisser vous surprendre !
                    </p>
                </div>
            </div>

        <div class="cercle_left" onclick="ShowImage(-1)">
                <div class="arrow_left"></div>
        </div>
        <div class="cercle_right" onclick="ShowImage(1)">
                <div class="arrow_right"></div>
        </div>
    </body>
    <script>
        var n = 1;

        function ShowImage(nb){
            n = n-nb;
            if(n <= 0){
                n = 3;
            }
            if(n >= 4){
                n = 1
            }
            //page d'accueil
            if(n == 1){
                url = "image/fondecranaccueil.jpg";
                $("#fondecran1").show();
                $("#fondecran2").hide();
                $("#fondecran3").hide();
            }
            //page boutique
            if(n == 2){
                url = "image/parquet4.png";
                $("#fondecran1").hide();
                $("#fondecran2").show();
                $("#fondecran3").hide();
            }
            if(n == 3){
                url = "image/vert.png";
                $("#fondecran1").hide();
                $("#fondecran2").hide();
                $("#fondecran3").show();
            }
            $(".imagefond").css("background-image","url(" + url + ")");
        }

        $(document).ready(function () {
          $("#header").load("barrenav/barrenav2.php");
          $("#fondecran2").hide();
          $("#fondecran3").hide();

          $("#boutique_redirection").on('click',function(){
              window.location.href = "boutique/PageBoutiqueAcueil.php";
          });
          $(".circle_V1").on('click',function(){
              window.location.href = "visite/PageSafarie.php";
          });
          $(".circle_V2").on('click',function(){
              window.location.href = "visite/PageEntreSimple.php";
          });
          $(".circle_V3").on('click',function(){
              window.location.href = "visite/PageSpectacle";
          });
        });
    </script>
</html>