<?php
require_once("DAO.php");
class Services{
    
    private $definition_service;
    private $image_service;

    function __construct($definition_service,$image_service){
        
        $this->definition_service=$definition_service;
        $this->image_service=$image_service;
    }
    function enregistrerService (){ 
        $DAO=new DAO();
        $DAO->ajouterService($this->definition_service,$this->image_service);
    }
    static function getAllServices(){
        $DAO=new DAO();
        return $DAO->afficherService();
    }
    static function supprimerService($id_service){
        $DAO= new DAO();
        $DAO->deleteService($id_service);
    }
    static function modifierService($id_service,$definition_service,$image_service){
        $DAO= new DAO();

        $DAO->updateService($id_service,$definition_service,$image_service);

    }
    static function getService($id_service){
        $DAO=new DAO();
        return $DAO->getService($id_service);
    }
    public static function getLatestServices() {
        $dao = new DAO();
        return $dao->getLastFiveServices();
    }
    
}
?>