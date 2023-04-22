<?php
require_once("DAO.php");
class Sponsors{
    
    private $nom_sponsor;
    private $adresse_sponsor;
    private $contact_sponsor;
    private $email_sponsor;
    private $definition_sponsor;
    private $image_sponsor;

    function __construct($nom_sponsor,$adresse_sponsor,$contact_sponsor,$email_sponsor,$definition_sponsor,$image_sponsor){
        
        $this->nom_sponsor=$nom_sponsor;
        $this->adresse_sponsor=$adresse_sponsor;
        $this->contact_sponsor=$contact_sponsor;
        $this->email_sponsor=$email_sponsor;
        $this->definition_sponsor=$definition_sponsor;
        $this->image_sponsor=$image_sponsor;
    }
    function enregistrerSponsor (){ 
        $DAO=new DAO();
        $DAO->ajouterSponsor($this->nom_sponsor,$this->adresse_sponsor,$this->contact_sponsor,$this->email_sponsor,$this->definition_sponsor,$this->image_sponsor);
    }
    static function getAllSponsors(){
        $DAO=new DAO();
        return $DAO->afficherSponsor();
    }
    static function supprimerSponsor($id_sponsor){
        $DAO= new DAO();
        $DAO->deleteSponsor($id_sponsor);
    }
    static function modifierSponsor($id_sponsor,$nom_sponsor,$adresse_sponsor,$contact_sponsor,$email_sponsor,$definition_sponsor,$image_sponsor){
        $DAO= new DAO();

        $DAO->updateSponsor($id_sponsor,$nom_sponsor,$adresse_sponsor,$contact_sponsor,$email_sponsor,$definition_sponsor,$image_sponsor);

    }
    static function getSponsor($id_sponsor){
        $DAO=new DAO();
        return $DAO->getSponsor($id_sponsor);
    }
    public static function getLatestSponsor() {
        $dao = new DAO();
        return $dao->getLasttreeSponsors();
    }
    static function getNbSponsor(){
        $dao = new DAO();
        return $dao->getNbSponsor();
    }

}
?>