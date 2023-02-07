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
    </head>
    <header id="header">
    </header>
    <body>
        <h1> Redigez votre article </h1>
        <form method="POST" action="AjouterArticle.php" id="ajouterArticle">
                <div>
                    <label class="form-label">Titre</label>
                    <input type="text" id="titre-article" name="titre" class="form-control form-control-lg"/>
                </div>
                <div>
                    <label class="form-label">Synopsis</label>
                    <input type="text" id="synopsis-article" name="synopsis" class="form-control form-control-lg"/>
                </div>
                <div>
                    <label class="form-label">Corps</label>
                    <input type="text" id="corps-article" name="corps" class="form-control form-control-lg"/>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
        </form>
    </body>
    <script>
        
        $(document).ready(function(){
            $("#ajouterArticle").on('submit',function(e){
                e.preventDefault();
                
                $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(reponse) { 
                    if (reponse != ""){
                        alert(reponse);
                    }
                    else{
                        window.location.href = "http://localhost/projetwebgit/frehner/newsletter/pageNewsletter.php";
                    }
                    
                }
                });
            });
        });
        </script>
</html>
