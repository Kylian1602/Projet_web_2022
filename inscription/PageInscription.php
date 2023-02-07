<?php 
session_start();
if(isset($_SESSION["email_session"])){
  echo('<script>alert("vous ete deja connecter");</script>');
  echo('<script>window.location.href = "../index.php";</script>');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="inscription.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="../jquery-3.6.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <header id="header"></header>
    <body>
        <section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                      <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Crée un compte</h2>

                        <div class="text-center pt-1 mb-5 pb-1" id="inscription_div">
                          <div class="alert alert-danger" role="alert" id="inscription_reponse"></div>
                        </div>
          
                        <form method="POST" action="VerifInscription.php" id="inscription">
                          <div class="form-outline mb-4">
                            <label class="form-label">Pseudo</label>
                            <input type="text" name="Pseudo" class="form-control form-control-lg" />
                          </div>
          
                          <div class="form-outline mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" name="Email" class="form-control form-control-lg" />
                          </div>
          
                          <div class="form-outline mb-4">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" name="Mdp" class="form-control form-control-lg" />
                          </div> 
                          
                          <div class="form-outline mb-4">
                            <label class="form-label">Date de naissance</label>
                            <input type="date" class="form-control form-control-lg" name="Date_naissance" value="2018-07-22"  min="1900-01-01" max="2023-12-31" />
                          </div>
          
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Inscription</button>
                          </div>
          
                          <p class="text-center text-muted mt-5 mb-0">Tu as deja un compte ? <a href="../connexion/PageConnexion.php" id="connexion">Connecte toi</a></p>
                        </form>
          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
    <script>
      $(document).ready(function(){
        $("#header").load("../barrenav/barrenav2.php");
        $("#inscription_div").hide();

        $("#inscription").on('submit',function(e){
          e.preventDefault();
          $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function(reponse) {
              $("#inscription_div").show();
              if(reponse == 1){
                $("#inscription_reponse").html("Email deja utiliser");
              } 
              if(reponse == 2){
                window.location.href = "../index.php";
              } 
              if(reponse == 3){
                $("#inscription_reponse").html("Un des champs est vide"); 
              } 
            }
          });
        });
      });
    </script>
</html>