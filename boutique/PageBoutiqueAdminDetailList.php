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
<body onload="ArticleLoad()">
<section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                      <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Liste des articles</h2>
                        <ul class="list-group" id="liste_vente"></ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
</body>
<script>
    function ArticleLoad(){
    $.ajax({
      url : "ArticleVendu.php",
      type : "POST",
      data : {
        type : "Detail"
      },
      success : function(data){
        $("#liste_vente").html(data);
      }
    });
    }

    $(document).ready(function () {
      $("#header").load("../barrenav/barrenav2.php");
    });
</script>
</html>