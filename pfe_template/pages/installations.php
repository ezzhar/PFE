<?php
require_once("DAO.php");
class Association{
    
    private $nom_installation;
    private $adresse_installation;
    private $definition_installation;
    private $image_installation;

    function __construct($nom_installation,$adresse_installation,$definition_installation,$image_installation){
        
        $this->nom_installation=$nom_installation;
        $this->adresse_installation=$adresse_installation;
        $this->definition_installation=$definition_installation;
        $this->image_installation=$image_installation;
    }
    function enregistrerInstallation(){
        $DAO=new DAO();
        $DAO->ajouterInstallation($this->nom_installation,$this->adresse_installation,$this->definition_installation,$this->image_installation);
    }
    static function listeInstallations(){
        $DAO=new DAO();
        return $DAO->afficherInstallations();
    }
    static function supprimerInstallation($id_installation){
        $DAO= new DAO();
        $DAO->deleteInstallation($id_installation);
    }
    static function modifierInstallation($id_installation,$adresse_installation,$definition_installation,$image_installation){
        $DAO= new DAO();

        $DAO->updateInstallation($id_installation,$adresse_installation,$definition_installation,$image_installation);

    }
    static function getInstallation($id_installation){
        $DAO=new DAO();
        return $DAO->getInstallation($id_installation);
    }
}
?>