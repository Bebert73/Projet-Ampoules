<?php 
session_start();
include_once('connexion.php');
$sql = "SELECT * FROM users";
$result = $db->query($sql);
$error = "Username or Password incorrect ! ";
$user = 'hello';

while($rows = $result->fetch(PDO::FETCH_ASSOC)){
if(isset($_POST['login'])){
if(isset($_POST['user']) == $rows['pseudo'] && 
isset($_POST['pass']) == $rows['password']){
    $_SESSION["username"] = $user;
    header('Location: ../dashboard.php');
    
} else {
    $_SESSION["error"] = $error;
    header('Location: ../login.php');
}
}

}
?> 