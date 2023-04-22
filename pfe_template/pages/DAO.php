<?php
class DAO{
    function getPDO(){
        return new PDO("mysql:host=localhost;dbname=pfe_database","root","");
    }
    
    function sign_In($email,$password){
        $pdo=$this->getPDO();
        $sign=$pdo->prepare("SELECT * from Admin where Email=? and password=?;");
        $sign->execute(array($email,$password));
        if($sign->fetch()) return true;
        return false;
    }
    function getEmail(){
        $pdo=$this->getPDO();
        $adm=$pdo->prepare("SELECT Email from Admin ;");
        $adm->execute();
        return $adm->fetchAll();
    }


    //Association
    function ajouterAssociation($id_asso,$nom_asso,$addresse_asso,$numéro_asso,$email_asso,$defini_asso,$image_asso){
        $pdo=$this->getPDO();
        $add=$pdo->prepare("INSERT into  Association (id_association,nom_association,adresse_association,num_tel_association,email_association,definition_association,image_association) VALUES(?,?,?,?,?,?,?)");
        $add->execute(array($nom_asso,$addresse_asso,$numéro_asso,$email_asso,$defini_asso,$image_asso));
    }
    function afficherAssociation(){
        $pdo=$this->getPDO();
        $aff=$pdo->prepare("SELECT * FROM  Association"); 
        $aff->execute();
        return $aff->fetchAll();
    }
    function updateAssociation($id_asso,$nom_asso,$addresse_asso,$numéro_asso,$email_asso,$defini_asso,$image_asso){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("UPDATE Association SET nom_association=?,adresse_association=?,num_tel_association=?,email_association=?,definition_association=?,image_association=? where id_association=?; ");
		$res->execute(array($nom_asso,$addresse_asso,$numéro_asso,$email_asso,$defini_asso,$image_asso,$id_asso));
	}
    function getAssociation($id_asso){
        $pdo=$this->getPDO();
        $get=$pdo->prepare("SELECT * from Association where ID_ASSOCIATION=?;");
        $get->execute(array($id_asso));
        return $get->fetchAll();
    }
    function deleteAssociation($id_asso){
        $pdo=$this->getPDO();
        $sup=$pdo->prepare(" DELETE from Association where ID_ASSOCIATION=?");
        $sup->execute(array($id_asso));
    }


    //collaborateur
    function ajouterCollaborateur($nom_collaborateur,$adresse_collab,$email_collab,$contact_collab,$definition_collab,$image_collab){
        $pdo=$this->getPDO();
        $add=$pdo->prepare("INSERT into  Collaborateur (id_collab,nom_collaborateur,adresse_collab,email_collab,contact_collab,definition_collab,image_collab) VALUES(?,?,?,?,?,?,?)");
        $add->execute(array($nom_collaborateur,$adresse_collab,$email_collab,$contact_collab,$definition_collab,$image_collab));
    }
    function afficherCollaborateur(){
        $pdo=$this->getPDO();
        $aff=$pdo->prepare(" SELECT * FROM  Collaborateurs "); 
        $aff->execute();
        return $aff->fetchAll();
    }
    function updateCollaborateur($id_collab,$nom_collaborateur,$adresse_collab,$email_collab,$contact_collab,$definition_collab,$image_collab){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("UPDATE Collaborateurs SET nom_collaborateur=?,adresse_collab=?,email_collab=?,contact_collab=?,definition_collab=?,image_collab=? where id_collab=?; ");
		$res->execute(array($nom_collaborateur,$adresse_collab,$email_collab,$contact_collab,$definition_collab,$image_collab,$id_collab));
	}
    function getCollaborateur($id_collab){
        $pdo=$this->getPDO();
        $get=$pdo->prepare("SELECT * from Collaborateurs where id_collab=?;");
        $get->execute(array($id_collab));
        return $get->fetchAll();
    }
    function deleteCollaborateur($id_collab){
        $pdo=$this->getPDO();
        $sup=$pdo->prepare(" DELETE from Collaborateurs where id_collab=?");
        $sup->execute(array($id_collab));
    }
    function getLasttreeCollaborateur() {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM collaboraeurs ORDER BY ID_COLLAB DESC LIMIT 3");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }   
    function getNbCollaborateurs(){
        $pdo=$this->getPDO();
        $count=$pdo->query("SELECT COUNT(*) FROM collaboraeurs")->fetchColumn();
        return $count;
    }
    

    //sponsor
    function ajouterSponsor($nom_sponsor,$addresse_sponsor,$contact_sponsor,$email_sponsor,$definition_sponsor,$image_sponsor){
        $pdo=$this->getPDO();
        $add=$pdo->prepare(" INSERT into  Sponsors (id_sponsor,nom_sponsor,addresse_sponsor,contact_sponsor,email_sponsor,definition_sponsor,image_sponsor) VALUES(?,?,?,?,?,?,?)");
        $add->execute(array($nom_sponsor,$addresse_sponsor,$contact_sponsor,$email_sponsor,$definition_sponsor,$image_sponsor));
    }
    function afficherSponsor(){
        $pdo=$this->getPDO();
        $aff=$pdo->prepare(" SELECT * FROM  Sponsors "); 
        $aff->execute();
        return $aff->fetchAll();
    }
    function updateSponsor($id_sponsor,$nom_sponsor,$addresse_sponsor,$email_collab,$contact_collab,$definition_collab,$image_collab){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("UPDATE Sponsors SET nom_sponsor=?,addresse_sponsor=?,email_collab=?,contact_collab=?,definition_collab=?,image_collab=? where id_sponsor=?; ");
		$res->execute(array($nom_sponsor,$addresse_sponsor,$email_collab,$contact_collab,$definition_collab,$image_collab,$id_sponsor));
	}
    function getSponsor($id_sponsor){
        $pdo=$this->getPDO();
        $get=$pdo->prepare("SELECT * from Sponsors where id_sponsor=?;");
        $get->execute(array($id_sponsor));
        return $get->fetchAll();
    }
    function deleteSponsor($id_sponsor){
        $pdo=$this->getPDO();
        $sup=$pdo->prepare("DELETE from Sponsors where id_sponsor=?");
        $sup->execute(array($id_sponsor));
    }
    function getLasttreeSponsors() {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM Sponsors ORDER BY ID_SPONSOR DESC LIMIT 3");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function getNbSponsor(){
        $pdo=$this->getPDO();
        $count=$pdo->query("SELECT COUNT(*) FROM Sponsors")->fetchColumn();
        return $count;
    }
    
    
    //Objectif
    function ajouterObjectif($definition_objectif,$image_objectif){
        $pdo=$this->getPDO();
        $add=$pdo->prepare("INSERT into  Objectifs (id_objectif,definition_objectif,image_objectif) VALUES(?,?,?)");
        $add->execute(array($definition_objectif,$image_objectif));
    }
    function afficherObjectif(){
        $pdo=$this->getPDO();
        $aff=$pdo->prepare(" SELECT * FROM  Objectifs "); 
        $aff->execute();
        return $aff->fetchAll();
    }
    function deleteObjectif($id_objectif){
        $pdo=$this->getPDO();
        $sup=$pdo->prepare("DELETE from Objectifs where id_objectif=?");
        $sup->execute(array($id_objectif));
    }
    function updateObjectif($id_objectif,$definition_objectif,$image_objectif){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("UPDATE Objectifs SET definition_objectif=?,image_objectif=? where id_objectif=?; ");
		$res->execute(array($definition_objectif,$image_objectif,$id_objectif));
	}
    function getObjectif($id_objectif){ 
        $pdo=$this->getPDO();
        $get=$pdo->prepare("SELECT * from Objectifs where id_objectif=?;");
        $get->execute(array($id_objectif));
        return $get->fetchAll();
    }

    //service
    function ajouterService($definition_service,$image_service){
        $pdo=$this->getPDO();
        $add=$pdo->prepare("INSERT into  Services (id_service,definition_service,image_service) VALUES(?,?,?)");
        $add->execute(array($definition_service,$image_service));
    }
    function afficherService(){
        $pdo=$this->getPDO();
        $aff=$pdo->prepare(" SELECT * FROM  Services "); 
        $aff->execute();
        return $aff->fetchAll();    
    }
    function deleteService($id_service){
        $pdo=$this->getPDO();
        $sup=$pdo->prepare("DELETE from Services where id_service=?");
        $sup->execute(array($id_service));
    }
    function updateService($id_service,$definition_service,$image_service){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("UPDATE Services SET definition_service=?,image_service=? where id_service=?; ");
		$res->execute(array($definition_service,$image_service,$id_service));
	}
    function getService($id_service){
        $pdo=$this->getPDO();
        $get=$pdo->prepare("SELECT * from Services where id_service=?;");
        $get->execute(array($id_service));
        return $get->fetchAll();
    }
    function getLastFiveServices() {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM services ORDER BY ID_SERVICE DESC LIMIT 5");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    //installation
    function ajouterInstallation($adresse_installation,$definition_installation,$image_installation){
        $pdo=$this->getPDO();
        $add=$pdo->prepare("INSERT into  Installations (id_installation,adresse_installation,definition_installation,image_installation) VALUES(?,?,?,?)");
        $add->execute(array($adresse_installation,$definition_installation,$image_installation));
    }
    function afficherInstallation(){
        $pdo=$this->getPDO();
        $aff=$pdo->prepare(" SELECT * FROM  Installations "); 
        $aff->execute();
        return $aff->fetchAll();
    }
    function deleteInstallation($id_installation){
        $pdo=$this->getPDO();
        $sup=$pdo->prepare("DELETE from Installations where id_installation=?");
        $sup->execute(array($id_installation));
    }
    function updateInstallation($id_installation,$adresse_installation,$definition_installation,$image_installation){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("UPDATE Sponsors SET adresse_installation=?,definition_installation=?,image_installation=? where id_installation=?; ");
		$res->execute(array($adresse_installation,$definition_installation,$image_installation,$id_installation));
	}
    function getInstallation($id_installation){
        $pdo=$this->getPDO();
        $get=$pdo->prepare("SELECT * from Installations where id_installation=?;");
        $get->execute(array($id_installation));
        return $get->fetchAll();
    }


    //demande
    function getNbDemande(){
        $pdo=$this->getPDO();
        $count=$pdo->query("SELECT COUNT(*) FROM Demande")->fetchColumn();
        return $count;
    }
}
?>