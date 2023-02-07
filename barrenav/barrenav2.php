<?php 
session_start();
 if(isset($_SESSION['email_session'])){
    $email_session=$_SESSION['email_session'];
    //$_SESSION['verifconnexion'] = 1;
    echo('<script>var verifconnexion=1;</script>');
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * FROM compte WHERE email='$email_session'");
    $resultat=mysqli_fetch_object($requete);
    $isAdmin = $resultat -> droit;
    if($isAdmin == "admin"){
      $_SESSION['verifadmin'] = 1;
    }
    else{
      $_SESSION['verifadmin'] = 0;
    }
}
else{
    //$_SESSION['verifconnexion'] = 0;
    $_SESSION['verifadmin'] = 0;
    echo('<script>var verifconnexion=0;</script>');
   }
?>
<style>
    a {
  outline: none;
  text-decoration: none;
  color: white;
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}
a:hover{
  color : black;
}
#principale-navbar{
  background-color: green !important;
}
#btn_connexion, #btn_inscription, #btn_profil, #btn_deconnexion{
  margin: 6px;
}
</style>


      <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="principale-navbar">
        <a class="navbar-brand" href="http://localhost/projetwebgit/frehner/index.php">
          <img src="http://localhost/projetwebgit/frehner/image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Pouled'Lard
        </a>
        <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://localhost/projetwebgit/frehner/parrainage/parrainer/PageParrainer.php">parrainage</a></li>  
                    <li><a href="http://localhost/projetwebgit/frehner/boutique/PageBoutiqueAcueil.php">boutique</a></li>    
                    <li><a href="http://localhost/projetwebgit/frehner/visite/PageVisiteAccueil.php">visite</a></li>   
                    <li><a href="http://localhost/projetwebgit/frehner/newsletter/pageNewsletter.php">newsletter</a></li>     
                    <li><a href="http://localhost/projetwebgit/frehner/parrainage/donation/donation.php">donation</a></li>                
                </ul>
        </div>
        <button class="btn btn btn-dark my-2 my-sm-0" id="btn_connexion">Connexion</button>
        <button class="btn btn btn-dark my-2 my-sm-0" id="btn_inscription">Inscription</button>
        <button class="btn btn btn-dark my-2 my-sm-0" id="btn_profil">Profil</button>
        <button class="btn btn btn-dark my-2 my-sm-0" id="btn_deconnexion">Deconnexion</button>
      </nav>
      <script>

    $(document).ready(function () {
      $('#btn_connexion').on('click',function(){
        window.location.href = "http://localhost/projetwebgit/frehner/connexion/PageConnexion";
      });
      $('#btn_inscription').on('click',function(){

        window.location.href = "http://localhost/projetwebgit/frehner/inscription/PageInscription";
      });
      $('#btn_profil').on('click',function(){
        window.location.href = "http://localhost/projetwebgit/frehner/profil/profil.php";
      });
      $('#btn_deconnexion').on('click',function(){
            $.ajax({
            url: "http://localhost/projetwebgit/frehner/deconnexion/deconnexion.php",
            type: "POST",
            data: "",
            success: function(reponse) {
                window.location.reload();
            }
            });
      });
      if(verifconnexion == 1){
        $('#btn_connexion').hide();
        $('#btn_inscription').hide();
        $('#btn_profil').show();
        $('#btn_deconnexion').show();
      }
      if(verifconnexion == 0){
        $('#btn_connexion').show();
        $('#btn_inscription').show();
        $('#btn_profil').hide();
        $('#btn_deconnexion').hide();
      }
  });
      </script>