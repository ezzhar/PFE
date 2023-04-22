<?php
require_once("Collaborateurs.php");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Collab=new Collaborateurs($_POST["nom_Collaborateur"],$_POST["adresse_collab"],$_POST["numéro_collab"],$_POST["email_collab"],$_POST["définition_collab"],$_POST["image_collab"]);
    $Collab->enregistrerCollabo();
    header("Location:tableCollaborateurs.php");
}

?>