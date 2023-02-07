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
    <body>
    <div>
        <form method="post" id="parrainage_form" action="ajouterParrainage" class="card-body p-md-5 mx-md-4">
            <h2>CHOIX ANIMAL</h2>
            <div class="form-outline mb-4">
                <select class="form-control form-control-lg" id="type">
                    <option value="0">CHOISIR TYPE</option>
                    <option value="volatile">Volatile</option>
                    <option value="aquatique">Aquatique</option>
                    <option value="terreste">Terrestre</option>
                    <option value="tenebre">Ténèbre</option>
                </select>
            </div>
            
            <div class="form-outline mb-4">
                <select class="form-control form-control-lg" id="espece">
                </select>
            </div>

            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="animaux">
                </div>
            </div>
        </form>
</div>
    </body>
    <script>
        function parrainerAnimal(id){
            $("#parrainage_form").on('submit',function(e){
                e.preventDefault();
            });
            if(verifconnexion == 1){
                $.ajax({
                url: "ajouterParrainage",
                type: "POST",
                data:{
                    id_animal: id
                },
                success: function(data){
                    if(data == ""){
                        alert("reussi");
                    }
                    else{
                        alert(data);
                    }
                }
                })
            }
            else{
                alert("vous devez etre connecter pour parrainer un animal");
            }
        }

        $(document).ready(function(){
            $("#header").load("../../barrenav/barrenav2.php");
            $("#espece").hide();
            $("#animaux").hide();
            $("#type").on('change', function(){
                if ($("#type").val() != "0"){
                    $('#espece').show();
                    $.ajax({
                        url:"RecupererEspece.php", 
                        type: "POST",
                        data: {
                            type : $('#type').val()
                        },
                        success: function(data){
                            $("#espece").html(data);
                        }
                    })
                }
                else{
                    $("#espece").hide();
                    $("#animaux").hide();
                }
            })
            $("#espece").on('change', function(){
                if ($("#espece").val() != "0"){
                    $("#animaux").show();
                    $.ajax({
                        url: "RecupererAnimaux.php",
                        type: "POST",
                        data: {
                            espece : $("#espece").val()
                        },
                        success : function(data){
                            $("#animaux").html(data);
                        }
                    })
                }
                else{
                    $("#animaux").hide();
                }
            })
        });
    </script>

</html>