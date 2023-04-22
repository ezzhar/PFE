<?php
require_once("DAO.php");
class Collaborateurs{
    
    private $nom_collaborateur;
    private $adresse_collab;
    private $email_collab;
    private $contact_collab;
    private $definition_collab;
    private $image_collab;

    function __construct($nom_collaborateur,$adresse_collab,$email_collab,$contact_collab,$definition_collab,$image_collab){
        
        $this->nom_collaborateur=$nom_collaborateur;
        $this->adresse_collab=$adresse_collab;
        $this->email_collab=$email_collab;
        $this->contact_collab=$contact_collab;
        $this->definition_collab=$definition_collab;
        $this->image_collab=$image_collab;
    }
    function enregistrerCollabo(){
        $DAO=new DAO();
        $DAO->ajouterCollaborateur($this->nom_collaborateur,$this->adresse_collab,$this->email_collab,$this->contact_collab,$this->definition_collab,$this->image_collab);
    }
    static function getAllCollaborateur(){
        $DAO=new DAO();
        return $DAO->afficherCollaborateur();
    }
    static function supprimerCollaborateur($id_collab){
        $DAO= new DAO();
        $DAO->deleteCollaborateur($id_collab);
    }
    static function modifierCollaborateur($id_collab,$nom_collaborateur,$adresse_collab,$email_collab,$contact_collab,$definition_collab,$image_collab){
        $DAO= new DAO();

        $DAO->updateCollaborateur($id_collab,$nom_collaborateur,$adresse_collab,$email_collab,$contact_collab,$definition_collab,$image_collab);

    }
    static function getCollaborateur($id_collab){
        $DAO=new DAO();
        return $DAO->getCollaborateur($id_collab);
    }
    public static function getLatestColab() {
        $dao = new DAO();
        return $dao->getLasttreeCollaborateur();
    }
    static function getNbCollaborateurs(){
        $dao = new DAO();
        return $dao->getNbCollaborateurs();
    }
    
        
}   
?>