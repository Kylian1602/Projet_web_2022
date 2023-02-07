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
    <body onload="calculArgent()">
    <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="../image/money.png" style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">Information boutique</h4>
                          </div>
                        
                        <div class="d-flex align-items-center justify-content-center pb-4">
                                <p id="argent"></p>
                            </div>
          
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
                          <div class="text-center">
                            <h4 class="mb-4">Liste article vendu</h4>
                            <ul class="list-group" id="liste_vente"></ul>
                          </div>
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
  function articleDetail(){
    window.location.href = "PageBoutiqueAdminDetailList.php";
  }

  function calculArgent(){
    $.ajax({
      url : "AdminInformation.php",
      type : "POST",
      data : "",
      success : function(data){
        $("#argent").html("Somme recolter : " + data + " €")
      }
    })

    $.ajax({
      url : "ArticleVendu.php",
      type : "POST",
      data : {
        type : "nonDetail"
      },
      success : function(data){
        $("#liste_vente").html(data);
      }
    })
  }

    $(document).ready(function () {
      $("#header").load("../barrenav/barrenav2.php");
    });
</script>
</html>