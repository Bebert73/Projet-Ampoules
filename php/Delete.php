<?php 

if(isset($_POST['delete'])){
    $dl = new Delete($_GET['id']);
    $dl->deleteapoule();
}
echo'hey';

class Delete{


    protected $id;


    function __construct($id){
        $this->id = $id;
    }


    public function deleteapoule(){
        require_once('connexion.php');

        $sql = "DELETE FROM apoules WHERE id = :id LIMIT 1";
        $dt = $db->prepare($sql);
        $dt->bindValue(":id", $this->id);
        var_dump($this->id);
        $dt->execute(header("Location: http://localhost/Ampoule/Projet-Ampoules/dashboard.php"));
        }

}
