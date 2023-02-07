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
<style>
    H2{
        text-align : center;
    }
</style>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="../jquery-3.6.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <header id="header">
    </header>
    <body>
        <button class="btn btn-primary" id="btn-RedigerArticle" onclick="RedirigerArticle()">Rédiger article</button>
        <H2>Toutes les NewsLetters</H2>

            <div id="article" class="container px-4 px-lg-5 mt-5">
        </div>

    </body>
    <script>
        $(document).ready(function(){
            if (verifadmin == 1){
                $("#btn-RedigerArticle").show();
            }
            else {
                $("#btn-RedigerArticle").hide();
            }

            $("#header").load("../barrenav/barrenav2.php");
            $.ajax({
                url:"RecupererArticle.php",
                type: "POST",
                data: "",
                success: function(data){
                    $("#article").html(data);
                    
                }
            });
        });
        function RedirigerArticle(){
            window.location.href="http://localhost/projetwebgit/frehner/newsletter/redigerArticle.php";
        }
        function lireArticle(id){
            window.location.href="http://localhost/projetwebgit/frehner/newsletter/pageArticle.php?ID=" + id + "";
        }
        
    </script>
    <style>
        .article{
            background-color : lightgrey;
            padding : 10px;
            margin : 10px;
        }
        .date{
            font-style: italic;
            size: 85%;
        }
    </style>
</html>