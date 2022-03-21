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
    <a class="navbar" href="dashboard.php">Ampoule</a>
    
</ul>

<a  href="dashboard.php" ><img class="logo" src="./pic/logo.png" alt=""></a>

<a class="navbar" href="historique.php">Historique</a>
</div>
<button class="login"  type="submit" name="login" >Login</button>
<button class="logins"  type="submit" name="login" >Register</button>
<section class="visuel">
   
<!-- Formulaire Création -->
<form action="./php/Create.php" method="post">
    <div class="creation">
        <div class="label-margin">
    <label for="">Etages</label>
    </div>
    <div class="input-margin">
        <input type="number" name="etage" min="0">
    </div>
    <div class="label-margin">
    <label for="">Position</label>
    </div>
    <div class="input-margin">
        <input type="text" name="position">
    </div>
    <div class="label-margin">
    <label for="">prix</label>
    </div>
    <div class="input-margin">
        <input type="number" name="price" min="0">
    </div>
        <button class="send" type="submit" name="Submit" >Créer</button>
        </div>
        </form>
    
    <table>
  <tr>
    <th>ID</th>
    <th>DATE</th>
    <th>ETAGE</th>
    <th>POSITION</th>
    <th>PRIX</th>
    <th> ACTION </th> 
    <th> ACTION </th> 


    </tr>
    <?php
		
        while($rows = $result->fetch(PDO::FETCH_ASSOC)) {

	?>


  <tr>
  <form action="./php/Update.php?update=<?php echo $rows['id'] ?>" method="post" >
    <td><?php echo $rows['id']?></td>
    <td><?php echo $rows['date']?></td>
    <td><input name="etageup" type="number" value="<?php echo $rows['etage']?>"></td>
    <td><input name="positionup" type="text" value="<?php echo $rows['position']?>"></td>
    <td><input name="priceup" type="number" value="<?php echo $rows['price']?>"></td>
    <td><button class="send"  type="submit" name="update" >Update</button></td>
        </form>
        <form action="./php/Delete.php?delete=<?php echo $rows['id'] ?>" method="post">
        <td><button OnClick="return confirm('t sah frere tu veux supprimer gros Shlag va ?');" class="send"  type="submit" name="deleteA" >Delete</button></td>
        </form>


        
</tr>




    <?php 
 			 }
	?> 
    </table>
 
    </form>
   
   
    </section>
</body>
</html>