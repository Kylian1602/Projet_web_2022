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
        <link href="connexion.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="../jquery-3.6.0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <header id="header"></header>
    <body>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <h4 class="mt-1 mb-5 pb-1">Bienvenue a PouleD'Lard</h4>
                          </div>
                        
                          <div class="text-center pt-1 mb-5 pb-1" id="connexion_div">
                            <div class="alert alert-danger" role="alert" id="connexion_reponse"></div>
                        </div>

                          <form method="POST" action="VerifConnexion.php" id="connexion">

                            <div class="form-outline mb-4">
                                <label class="form-label">Email</label>
                                <input type="text" name="Email" class="form-control" placeholder="Email"/>
                            </div>
          
                            <div class="form-outline mb-4">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" name="Mdp" class="form-control" placeholder="Mot de passe" />
                            </div>

                            <div class="text-center pt-1 mb-5 pb-1">
                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Connexion</button>
                            </div>
          
                          </form>

                          <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Vous n'etes pas encore inscrit ?</p>
                            <button type="button" class="btn btn-outline-danger" id="btn_inscription">Incrisption</button>
                          </div>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                          <h4 class="mb-4">Connecter vous pour assister au meilleur de nous.</h4>
                          <p class="small mb-0">Impliqué dans le bien être animal, nous sommes labélisé Wellfare depuis 2001.</p>
                        </div>
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
          $("#connexion_div").hide();

          $("#btn_inscription").on('click',function(){
            window.location.href = '../inscription/PageInscription.php';
          })

            $("#connexion").on('submit',function(e){
                e.preventDefault();
                $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(reponse) { 
                    $("#connexion_div").show();
                    console.log(typeof(reponse) + reponse);
                    if(reponse == 1){
                      window.location.href = "../index.php";
                    } 
                    if(reponse == 2){
                      $("#connexion_reponse").html("L'email ne correspond a aucun compte");
                    } 
                    if(reponse == 3){
                       $("#connexion_reponse").html("email ou mot de passe vide"); 
                    } 
                }
                });
            })
        });
    </script>
</html>

