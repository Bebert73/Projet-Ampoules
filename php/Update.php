<?php 

if(isset($_POST['update'])){
    $ob = new Create($_POST['etageup'], $_POST['positionup'], $_POST['priceup']);
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

        $sql = "UPDATE apoules SET `date`= :date ,`etage`= :etage,`position`= :position,`price`= :price WHERE id = :id";
        $sth = $db->prepare($sql);
        $sth->bindValue(':etage', $this->etage);
        $sth->bindValue(':position', $this->position);
        $sth->bindValue(':price', $this->price);
        $sth->bindValue(':date', date("Y-m-d H:i:s"));

        $sth->bindValue(":id", $_GET['update']);

        $sth->execute(header("Location: http://localhost/Ampoule/Projet-Ampoules/dashboard.php"));
        var_dump($sth);
    }





}