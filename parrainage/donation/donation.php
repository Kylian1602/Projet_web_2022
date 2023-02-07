<!DOCTYPE html>
<?php 
session_start();
?>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="../../jquery-3.6.0.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
<header id="header"></header>
<body onload="sommeDonation()">
<section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                      <div class="card-body p-5">
                        <div id="hiddenSomme" value="">
                            <h2 class="text-uppercase text-center mb-5" id="somme"></h2>
                        </div>
                        <div class="text-center pt-1 mb-5 pb-1" id="donation_div">
                          <div class="alert alert-danger" role="alert" id="donation_reponse"></div>
                        </div>
                        <form method="POST" action="PayerDonation.php" id="payer_donation">
                          <div class="form-outline mb-4">
                            <label class="form-label">numero de carte</label>
                            <input type="text" name="num" class="form-control form-control-lg" maxlength="16" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label">Montant donation</label>
                            <input type="text" min=1 name="montant" class="form-control form-control-lg" />
                          </div>
                            
                          <div class="form-outline mb-4">
                                <label for="expityMonth">date d'expiration</label>
                                <div class="col-xs-6 col-lg-2 pl-ziro">
                                    <input type="text" class="form-control" maxlength="2" name="mois" placeholder="MM" required />
                                    <input type="text" class="form-control" maxlength="4" name="annee" placeholder="YY" required />
                                </div>
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label">code de verification</label>
                            <div class="col-xs-6 col-lg-2 pl-ziro">
                            <input type="text" name="code" class="form-control form-control-lg" maxlength="3" />
                            </div>
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
    function sommeDonation(){
        $.ajax({
            url : "recupererDonation.php",
            type : "POST",
            data : "",
            success : function(data){
                $("#somme").html("Somme recolter : " + data);
            }
        })
    }

    $(document).ready(function () {
      $("#header").load("../../barrenav/barrenav2.php");
      $("#donation_div").hide();
      $("#payer_donation").on('submit',function(e){
        e.preventDefault();
        $.ajax({
          url : $(this).attr('action'),
          type : $(this).attr('method'),
          data : $(this).serialize(),
          success : function(data){
              if(data == ""){
                alert("payment accepter");
                window.location.href = "../../index.php";
              } 
              if(data != ""){
                $("#donation_div").show();
                $("#donation_reponse").html(data);
              }
          }
        });
      });
    });
</script>
</html>