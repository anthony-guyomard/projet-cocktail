<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="jquery-3.3.1.min.js"></script>
    <title>Projet Cocktail</title>
</head>
<body>
<div style="margin: auto; height: 300px ; width : 300px;" >
    <form id="form-login" action="BD_connec.php" method="post">
        <div id="alert"></div>
        <div class="form-group">
            <label for="exampleInputEmail1">Identifiant</label>
            <input name="id" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre identifiant">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input name="pwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
        </div>
        <button name="button" type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<div id="result"></div>
<script>
    $(document).ready(function() {
        $("#form-login").submit(function (){
            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: $(this).serialize(),
            }).done(function(data) {
                if (data === true)
                    window.location = "/";
                else
                    $("#alert").html("<h3 style=\"color: red\"> Erreur d'identifiant ou de mdp</h3>")
            });
            return false;
        });
    });
</script>
</body>
</html>