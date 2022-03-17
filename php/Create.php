<?php 

if(isset($_POST['Submit'])){
    $ob = new Create($_POST['etage'], $_POST['position'], $_POST['price']);
    $ob->insertAmpoule();
}

class Create {

    protected $etage;
    protected $position;
    protected $price;




    public function __construct($etage, $position, $price){

        $this->etage = $etage;
        $this->position = $position;
        $this->price = $price;

    }



    public function insertAmpoule(){
        include_once('connexion.php');
        $database = new Database();
        $db = $database->getConnection();

        $sql = "INSERT INTO apoules (`etage`, `position`, `price`) 
        VALUES (:etage ,:position , :price)";
        $sth = $db->prepare($sql);
        $sth->bindValue(':etage', $this->etage);
        $sth->bindValue(':position', $this->position);
        $sth->bindValue(':price', $this->price);
    
        $sth->execute(header("Location: http://localhost/Ampoule/Projet-Ampoules/dashboard.php"));
        var_dump($sth);
    }





}