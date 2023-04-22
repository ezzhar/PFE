<?php
require_once("installations.php");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Installation=new installations($_POST["nom_installation"],$_POST["adresse_installation"],$_POST["definition_installation"],$_POST["image_installation"]);
    $Installation->enregistrerInstallation();
    header("Location:tableInstallations.php");
}

?>