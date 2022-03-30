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
<form action="./php/register.php" method="post">
    <div class="creation">
    <div>
        <label for="">Nom</label>
        <input type="text" name="nom" required>
    </div>
    <div>
        <label for="">prénom</label>
        <input type="text" name="prenom" required>
    </div>
    <div>
        <label for="">pseudo</label>
        <input type="text" name="pseudo" required>
    </div>
    <div>
        <label for="">email</label>
        <input type="email" name="email"required>
    </div>
    <div>
        <label for="">password</label>
        <input type="password" name="password"required>
    </div>

    <div>
        <button class="send" type="submit" name="register" >Créer</button>
    </div>
    </div>
    </form>
    
    </div>
    </div>