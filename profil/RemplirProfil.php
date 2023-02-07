<?php

session_start();
$email_session=$_SESSION['email_session'];
$connect=mysqli_connect('localhost','root','','siteweb');
$verifemail=mysqli_query($connect,"SELECT * FROM compte WHERE email='$email_session'");
$resultat=mysqli_fetch_object($verifemail);
$id = $resultat -> id;
$pseudo = $resultat -> pseudo;
$date = $resultat -> date_naissance;
$parrainage = $resultat -> parrainage;
if($parrainage != ""){
    $connect = mysqli_connect('localhost','root','','siteweb');
    $requete = mysqli_query($connect,"SELECT * FROM animaux WHERE parraineur='$id'");
    $row = mysqli_fetch_array($requete);
}
if(isset($row)){
echo "<fieldset>
    <div class='form-outline mb-4'>
        <label class='form-label'>Pseudo : ".$pseudo." </label>
    </div>

    <div class='form-outline mb-4'>
        <label class='form-label'>Email : ".$email_session." </label>
    </div>
      
    <div class='form-outline mb-4'>
        <label class='form-label'>Mot de passe : ********* </label>
    </div> 
                      
    <div class='form-outline mb-4'>
        <label class='form-label'>Date de naissance : ".$date." </label>
    </div>
      
    <div class='d-flex justify-content-center'>
        <button type='button' class='btn btn-success btn-block btn-lg gradient-custom-4 text-body'>Modifier le profil</button>
    </div>
    
    <br><br>

    <div class='col mb-5'>
        <div class='card h-100'>
                <img class='card-img-top' src=".$row[8]." alt=''>
                <div class='text-center'>
                    <h5 class='fw-bolder'>".$row[2]."</h5>
                <div>
                    
            <div class='d-flex justify-content-center small text-warning mb-2'>
               <span class='text-muted'>Age : ".$row[3]."</span>
           </div>

           <div class='d-flex justify-content-center small text-warning mb-2'>
               <span class='text-muted'>Poids : ".$row[4]."</span>
            </div>

            <div class='d-flex justify-content-center small text-warning mb-2'>
               <span class='text-muted'>Nourriture : ".$row[5]."</span>
            </div>

            <div class='d-flex justify-content-center small text-warning mb-2'>
                <span class='text-muted'>Origine : ".$row[6]."</span>
           </div>

            <div class='d-flex justify-content-center small text-warning mb-2'>
               <span class='text-muted'>Emplacement : ".$row[7]."</span>
            </div>
      </div>
   </div>
    
    <fieldset>";
}
else{
    echo "<fieldset>
    <div class='form-outline mb-4'>
    <label class='form-label'>Pseudo : ".$pseudo." </label>
    </div>

    <div class='form-outline mb-4'>
    <label class='form-label'>Email : ".$email_session." </label>
    </div>
      
    <div class='form-outline mb-4'>
    <label class='form-label'>Mot de passe : ********* </label>
    </div> 
                      
    <div class='form-outline mb-4'>
    <label class='form-label'>Date de naissance : ".$date." </label>
    </div>
      
    <div class='d-flex justify-content-center'>
        <button type='button' class='btn btn-success btn-block btn-lg gradient-custom-4 text-body'>Modifier le profil</button>
    </div>
    
    <br><br>
    <fieldset>";
}

?>