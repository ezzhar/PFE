<?php
require_once("DAO.php");
class Objectifs{
    
    private $definition_objectif;
    private $image_objectif;

    function __construct($definition_objectif,$image_objectif){
        
        $this->definition_objectif=$definition_objectif;
        $this->image_objectif=$image_objectif;
    }
    function enregistrerObjectif (){ 
        $DAO=new DAO();
        $DAO->ajouterObjectif($this->definition_objectif,$this->image_objectif);
    }
    static function listeObjectifs(){
        $DAO=new DAO();
        return $DAO->afficherObjectif();
    }
    static function supprimerObjectif($id_objectif){
        $DAO= new DAO();
        $DAO->deleteSponsor($id_objectif);
    }
    static function modifierService($id_objectif,$definition_objectif,$image_objectif){
        $DAO= new DAO();

        $DAO->updateService($id_objectif,$definition_objectif,$image_objectif);

    }
    static function getObjectif($id_objectif){
        $DAO=new DAO();
        return $DAO->getObjectif($id_objectif);
    }
}
?>