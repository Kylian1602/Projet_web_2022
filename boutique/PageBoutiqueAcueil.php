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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="../jquery-3.6.0.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link href="boutique.css" rel="stylesheet">
    </head>
    <header id="header"></header>
<style>
  #filtretext{
    margin-left: 2.5vw;
  }
</style>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse">
          <div class="navbar-nav">
          <label id="filtretext" style="color:white">Filtre : </label>&nbsp
              <select onchange='trie()' id='filtre'>
                <option value = "aucun">Aucun</option>
                <option value = "croissant" >Ordre croissant</option>
                <option value = "decroissant" >Ordre décroissant</option>
                <option value = "alphabetique" >Ordre alphabétique A→Z</option>
                <option value = "nonalphabetique" >Ordre alphabétique A←Z</option>
              </select>&nbsp
            <input type="search" id="recherche_article" placeholder="Rechercher" oninput="rechercheArticle()" autocomplete="off">&nbsp
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="CheckSouvenir" value="souvenir" checked>
              <label class="form-check-label" style="color:white">Souvenir</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="CheckAnimaux" value="animaux" checked>
              <label class="form-check-label" style="color:white">Animaux</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="CheckNourriture" value="nourriture" checked>
              <label class="form-check-label" style="color:white">Nourriture</label>
            </div>
            <div class="button_navbar">
              <button id="adminprofit" class="btn btn-primary" onclick="adminRedirectionProfit()">Profit de la boutique</button>
              <button id="adminadd" class="btn btn-primary" onclick="adminRedirectionArticle()">Ajouter un article</button>
              <button class="btn btn-primary" onclick="redirectpanier()">Panier</button>
        </div>
          </div>
        </div>
      </nav>           
    </header>

    <body onload = "afficheBoutique()">
      <div id="recherche">
        <h1 id="titreRecherche">Resultat de la recherche</h1>
        <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="articleRecherche"></div>
        </div>
      </div>
      <div id="article1Hide">
        <h1 id="titreSouvenir">Souvenir</h1>
        <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="article">
          </div>
        </div>
      </div>
      <div id="article2Hide">
        <h1 id="titreAnimaux">Article pour animaux</h1>
        <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="article2">
          </div>
        </div>
      </div>
      <div id="article3Hide">
        <h1 id="titreNourriture">Cafeteria</h1>
        <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="article3">
          </div>
        </div>
      </div>
    </body>

    <script>

      function redirectpanier(){
        if(verifconnexion == 1){
          window.location.href = "PageBoutiqueClientArticle.php";
        }
        else{
          alert("vous devez vous connecter pour avoir acces a votre panier");
        }
      }

      function cacheArticle(){
        if($(this).prop('checked')){
          alert('ok');
        }
      }

      function adminRedirectionProfit(){
        window.location.href = "PageBoutiqueAdmin.php"
      }

      function adminRedirectionArticle(){
        window.location.href = "PageBoutiqueArticleAdmin.php"
      }

      function acheterArticle(id){
        if(verifconnexion == 0){
          alert("vous devez vous connecter pour acheter un article")
        }
        else{
          $.ajax({
          url : "AcheterArticle.php",
          type : "POST",
          data : {
            id : id
          },
          success : function(data){
            alert(data);
          }
        });
        }
      }

      function rechercheArticle(){
        if($("#recherche_article").val() != ""){
          $.ajax({
          url : "RecupererArticle.php",
          type : "POST",
          data: {
            type : "recherche",
            mot : $("#recherche_article").val()
          },
          success : function(data){
            $("#articleRecherche").html(data);
            $("#recherche").show();
            $("#article1Hide").hide();
            $("#article2Hide").hide();
            $("#article3Hide").hide();
          }
        });
        }
        else{
          $("#recherche").hide();
            $("#article1Hide").show();
            $("#article2Hide").show();
            $("#article3Hide").show();
        }
      }

      function afficheBoutique(){
          $.ajax({
            url : "RecupererArticle.php",
            type : "POST",
            data: {
              type : "souvenir"
            },
            success : function(data){
              $("#article").html(data);
            }
          });
          $.ajax({
            url : "RecupererArticle.php",
            type : "POST",
            data: {
              type : "animaux"
            },
            success : function(data){
              $("#article2").html(data);
            }
          });
          $.ajax({
            url : "RecupererArticle.php",
            type : "POST",
            data: {
              type : "nourriture"
            },
            success : function(data){
              $("#article3").html(data);
            }
          });
      }

      function trie(){
        $.ajax({
          url : "RecupererArticle.php",
          type : "POST",
          data : {
            type : "souvenir",
            trie : $("#filtre").val()
          },
          success : function(data){
            $("#article").html(data);
          }
        });
      }

      $(document).ready(function () {
        $("#recherche").hide();
        $("#header").load("../barrenav/barrenav2.php");

        if(verifadmin == 1){
          $("#adminprofit").show();
          $("#adminadd").show();
        }
        if(verifadmin == 0){
          $("#adminprofit").hide();
          $("#adminadd").hide();
        }


        $("#CheckSouvenir").on('change',function(){
          if($("#CheckSouvenir").prop('checked')){
            $('#article').show();
            $('#titreSouvenir').show();
          }
          else{
            $('#article').hide();
            $('#titreSouvenir').hide();
          }
        });

        $("#CheckAnimaux").on('change',function(){
          if($("#CheckAnimaux").prop('checked')){
            $('#article2').show();
            $('#titreAnimaux').show();
          }
          else{
            $('#article2').hide();
            $('#titreAnimaux').hide();
          }
        });

        $("#CheckNourriture").on('change',function(){
          if($("#CheckNourriture").prop('checked')){
            $('#article3').show();
            $('#titreNourriture').show();
          }
          else{
            $('#article3').hide();
            $('#titreNourriture').hide();
          }
        });
      });
    </script>
    <style>
      
    </style>
</html>