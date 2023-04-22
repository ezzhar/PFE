<?php
require_once("association.php");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Assoc=new Association($_POST["nom_association"],$_POST["adresse_asso"],$_POST["numéro_asso"],$_POST["email_asso"],$_POST["définition_asso"],$_POST["image_asso"]);
    $Assoc->enregistrerAssociation();
    header("Location:tableAssociations.php");
}

?>