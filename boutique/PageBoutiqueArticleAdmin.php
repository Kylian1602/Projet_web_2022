<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION["verifadmin"])){
  $verifadmin = $_SESSION["verifadmin"];
  echo('<script>var verifadmin='.$verifadmin.';</script>');
}
if($verifadmin != 1){
  echo('<script>alert("vous n\'ete pas un admin");</script>');
  echo('<script>window.location.href = "../index.php";</script>');
}
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
    <section class="vh-100 bg-image"> 
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                      <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Ajouter un article</h2>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <div class="alert alert-danger" role="alert" id="err_div"></div>
                        </div>
                        <div class="text-center pt-1 mb-5 pb-1" id="success_div">
                          <div class="alert alert-primary" role="alert" id="success_div">Article ajouter</div>
                        </div>
          
                        <form method="POST" action="EnregistrerArticle.php" id="enregistrer_article">
                           <div class="form-outline mb-4">
                            <label class="form-label">Souvenir</label>
                            <input type="radio" value="souvenir" name="type" checked> 
                            <label class="form-label">Animaux</label>
                            <input type="radio" value="animaux" name="type"> 
                            <label class="form-label">Nourriture</label>
                            <input type="radio" value="nourriture" name="type"> 
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label">nom</label>
                            <input type="text" name="nom" class="form-control form-control-lg" />
                          </div>
                            
                          <div class="form-outline mb-4">
                            <label class="form-label">prix</label>
                            <input type="text" name="prix" class="form-control form-control-lg" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label">stock</label>
                            <input type="text" name="stock" class="form-control form-control-lg" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label">lien image</label>
                            <input type="text" name="image" class="form-control form-control-lg" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label">date</label>
                            <input type="date" class="form-control form-control-lg" name="date" value="2018-07-22"  min="1900-01-01" max="2023-12-31" />
                          </div>

                          <div class="form-outline mb-4">
                           <button class="btn btn-primary" type="submit">Envoyer</button>
                          </div>
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
   $("#enregistrer_article").on('submit',function(e){
       e.preventDefault();
       $.ajax({
           url : $(this).attr('action'),
           type : $(this).attr('method'),
           data : $(this).serialize(),
           success : function(data){
            if(data == 1){
                $('#success_div').show();
                $('#err_div').hide();
            }
            else{
                $('#err_div').html(data);
                $('#err_div').show();
                $('#success_div').hide();
            }
           }
       })
   })
    $(document).ready(function () {
      $("#header").load("../barrenav/barrenav2.php");
        $('#success_div').hide();
        $('#err_div').hide();
    });
</script>
</html>