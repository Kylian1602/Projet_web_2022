<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['email_session'])){
   $email_session=$_SESSION['email_session'];
   echo('<script>var verifconnexion=1;</script>');
}
else{
   $email_session="";
   echo('<script>var verifconnexion=0;</script>');
  }
  $id = $_GET['ID'];
  echo('<script>var id='.$id.';</script>');
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
        <div id="article_remplir"></div>
        <div class="container">
            <h2> Rajoutez votre commentaire</h2>
            
            <form method="POST" action="AjouterCommentaire.php" id="ajouterCommentaire">
                <div>
                    <input type="text" id="com" name="com" class="form-control form-control-lg"/>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </form>

        </div>
        <div id="commentaire_remplir"></div>
    </body>
    <script>
        
        $(document).ready(function(){
            $("#header").load("../barrenav/barrenav2.php");
            $.ajax({
                url: "AfficherArticle.php",
                type: "POST",
                data: {
                    id : id
                },
                success : function(data){
                    $("#article_remplir").html(data);
                }
            });
            $.ajax({
                url: "AfficherCommentaire.php",
                type: "POST",
                data: {
                    id : id
                },
                success : function(data){
                    $("#commentaire_remplir").html(data);
                }
            });
            
            $("#ajouterCommentaire").on('submit',function(e){
                e.preventDefault();
                
                $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: {
                    com : $("#com").val(),
                    id : id
                },
                success: function(reponse) { 
                    window.location.href = "http://localhost/projetwebgit/frehner/newsletter/pageArticle.php?ID=" + id + "";
                }
            });
        });
        });
        
    </script>
</html>