<?php 
include_once('./php/connexion.php');
include_once('./php/Create.php');
$sql = "SELECT * FROM historique";
$result = $db->query($sql);

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

<a class="navbar" href="historique.php  ">Historique</a>
</div>

<section class="visuel-histo">
    <table class="form-histo">
  <tr>
    <th>ETAGE</th>
    <th>CHANGEMENT</th>
    <th>POSITION</th>
    <th>PRIX</th>
    <th> ACTION </th> 


    </tr>
    <?php
		
        while($rows = $result->fetch(PDO::FETCH_ASSOC)) {

	?>


  <tr>
    <td><?php echo $rows['etage']?></td>
    <td><?php echo $rows['date']?></td>
    <td><?php echo $rows['position']?></td>
    <td><?php echo $rows['price']?></td>
    </form>
        <form action="./php/Delete.php?id=<?php echo $rows['id'] ?>" method="post">
    <td><button OnClick="return confirm('t sah frere tu veux supprimer gros Shlag va ?');" class="send"  type="submit" name="delete" >Delete</button></td>
        </form>
        
</tr>




    <?php 
 			 }
	?> 
    </table>
 
   
   
    </section>
</body>
</html>