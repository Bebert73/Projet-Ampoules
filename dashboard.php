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
<a  href="dashboard.php" ><img class="logo" src="./pic/logo.png" alt=""></a>
<ul>
</ul>


<!-- Formulaire Création -->
<div class="fond-form">
<form action="./php/Create.php" method="post">
    <div class="creation">
    <div>
        <label for="">Etages</label>
        <input type="number" name="etage" min="0">
    </div>
    <div>
        <label for="">Position</label>
        <input type="text" name="position">
    </div>
    <div>
        <label for="">prix</label>
        <input type="number" name="price" min="0">
    </div>
    <div>
        <button class="send" type="submit" name="Submit" >Créer</button>
    </div>
    </div>
    </form>
    </div>
    </div>
    
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

<div class="fond-form">
  <tr>
  <form action="./php/Update.php?update=<?php echo $rows['id'] ?>" method="post">
    <td><?php echo $rows['id']?></td>
    <td><?php echo $rows['date']?></td>
    <td><input name="etageup" type="number" value="<?php echo $rows['etage']?>"></td>
    <td><input name="positionup" type="text" value="<?php echo $rows['position']?>"></td>
    <td><input name="priceup" type="number" value="<?php echo $rows['price']?>"></td>
    <td><button class="send"  type="submit" name="update" >Update</button></td>
        </form>

        <form action="./php/Delete.php?id=<?php echo $rows['id'] ?>" method="post">
    <td><button class="send"  type="submit" name="delete" >Delete</button></td>
        </form>
</tr>
</div>



    <?php 
 			 }
	?> 
    </table>
</body>
</html>