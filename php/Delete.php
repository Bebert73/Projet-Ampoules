<?php 

if(isset($_POST['delete'])){
    $dl = new Delete($_GET['id']);
    $dl->deletehisto();
}

if(isset($_POST['deleteA'])){
    $dl = new Delete($_GET['delete']);
    $dl->deleteapoule();
}
class Delete{


    protected $id;


    function __construct($id){
        $this->id = $id;
    }


    public function deletehisto(){
        require_once('connexion.php');

        $sql = "DELETE FROM historique WHERE id = :id LIMIT 1";
        $dt = $db->prepare($sql);
        $dt->bindValue(":id", $this->id);
        var_dump($this->id);
        $dt->execute(header("Location: ../historique.php"));
        }

        public function deleteapoule(){
            require_once('connexion.php');
    
            $sql = "DELETE FROM apoules WHERE id = :id LIMIT 1";
            $dt = $db->prepare($sql);
            $dt->bindValue(":id", $this->id);
            var_dump($this->id);
            $dt->execute(header("Location: ../dashboard.php"));
            }

}
