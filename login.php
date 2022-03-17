<?php 
include_once('./php/connexion.php');
include_once('./php/Create.php');
include_once('./php/show.php');

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampoule</title>
</head>
<body>
<div class="objet-center">
<ul>
<a  href="dashboard.php" ><img class="logo" src="./pic/logo.png" alt=""></a>
</ul>


<!-- Formulaire Création -->
<div class="fond-form">
<form action="./php/login.php" method="post">
    <div class="creation">
    <div>
        <label for="">Username</label>
        <input type="text" name="username" min="0">
    </div>
    <div>
        <label for="">password</label>
        <input type="password" name="password">
    </div>

    <div>
        <button class="send" type="submit" name="create" >Créer</button>
    </div>
    </div>
    </form>


</div>
    </div>