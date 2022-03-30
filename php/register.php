<?php 


if(isset($_POST['register'])){
    $st = new register($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['email'],$_POST['password'],);
    $st->createUser();
}
 

 class register {
      
    protected $firstname;
    protected $lastname ;
    protected $pseudo;
    protected $mail; 
    protected $password;


    function __construct($firstname, $lastname, $pseudo, $mail, $password ){
        $this->prenom = $firstname;
        $this->nom = $lastname;
        $this->psd = $pseudo; 
        $this->mail = $mail; 
        $this->pass = $password;

    }


    public function createUser(){
        include_once('connexion.php');

        $sql = "INSERT INTO users(fistname, lastname, pseudo, mail, password) 
        VALUES (:prenom,:nom,:psd,:mail,:pass) ";
        $query = $db->prepare($sql);
        $query->bindValue(':prenom', $this->prenom);
        $query->bindValue(':nom', $this->nom);
        $query->bindValue(':psd', $this->psd);
        $query->bindValue(':mail', $this->mail);
        $query->bindValue(':pass', $this->pass);
        $query->execute(header('Location: ../login.php'));
        

    }
 }



?> 