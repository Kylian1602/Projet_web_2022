<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION["email_session"])){
  $verifconnexion = 1;
}
else{
  echo('<script>alert("vous devez etre connecter pour acceder au panier client");</script>');
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
        <div>
        <section class="vh-100 bg-image">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                      <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Reserver</h2>
                        

                        <!--<div class="text-center pt-1 mb-5 pb-1" id="inscription_div">
                          <div class="alert alert-danger" role="alert" id="inscription_reponse"></div>
                        </div>-->
          
                        <form method="POST" action="Reservation.php" id="reservation">
                          <input type="text" id="type" name="type" value=<?php echo($_GET['type']) ?> />
                          <div class="form-outline mb-4">
                            <label class="form-label">Date de reservation</label>
                            <input type="date" class="form-control form-control-lg" name="Date_reservation" value="2018-07-22"  min="1900-01-01" max="2023-12-31" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label">Nombre de personne</label>
                            <input type="number" name="nb_personne" id="nb_pers" value="1" width="10px"/>
                          </div>
          
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Reservation</button>
                          </div>
          
                          <!--<p class="text-center text-muted mt-5 mb-0">Tu as deja un compte ? <a href="#!" class="fw-bold text-body"><u>Connecte toi</u></a></p>-->
                        </form>
          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
    </body>

    <script>
        $(document).ready(function(){
            $("#header").load("../barrenav/barrenav2.php");
            $("#type").hide();
            $("#reservation").on('submit',function(e){
              e.preventDefault();
              $.ajax({
                type : $(this).attr("method"),
                url : $(this).attr("action"),
                data : $(this).serialize(),
                success : function(data){
                  alert(data);
                }
              })
            })
        });
    </script>

</html>