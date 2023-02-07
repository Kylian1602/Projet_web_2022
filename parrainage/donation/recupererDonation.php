<?php
$connect = mysqli_connect('localhost','root','','siteweb');
$requete = mysqli_query($connect,"SELECT SUM(montant) as sommeDonation FROM donation");
$resultat=mysqli_fetch_array($requete);
if(isset($resultat)){
    echo $resultat['sommeDonation'];
}
else{
    echo "0";
}

?>