<?php
require_once("DAO.php");
class Association{
    private $id_association;
    private $nom_association;
    private $adresse_asso;
    private $numéro_asso;
    private $email_asso;
    private $definition_asso;
    private $image_asso;

    function __construct($id_asso,$nom_asso,$addresse_asso,$numéro_asso,$email_asso,$defini_asso,$image_asso){
        
        $this->id_association=$id_asso;
        $this->nom_association=$nom_asso;
        $this->adresse_asso=$addresse_asso;
        $this->numéro_asso=$numéro_asso;
        $this->email_asso=$email_asso;
        $this->definition_asso=$defini_asso;
        $this->image_asso=$image_asso;
    }
    function enregistrer(){
        $DAO=new DAO();
        $DAO->ajouterAssociation($this->id_association,$this->nom_association,$this->adresse_asso,$this->numéro_asso,$this->email_asso,$this->definition_asso,$this->image_asso);
    }
    static function listeAssociations(){
        $DAO=new DAO();
        return $DAO->afficherAssociation();
    }
    static function supprimerAssociation($id_asso){
        $DAO= new DAO();
        $DAO->deleteAssociation($id_asso);
    }
    static function modifierAssociation($id_asso,$nom_asso,$addresse_asso,$numéro_asso,$email_asso,$defini_asso,$image_asso){
        $DAO= new DAO();

        $DAO->updateAssociation($id_asso,$nom_asso,$addresse_asso,$numéro_asso,$email_asso,$defini_asso,$image_asso);

    }
    static function getAssociation($id_asso){
        $DAO=new DAO();
        return $DAO->getAssociation($id_asso);
    }
    
    
}
?>