<?php
require_once("sponsors.php");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Sponsor=new Sponsors($_POST["nom_sponsor"],$_POST["adresse_sponsor"],$_POST["contact_sponsor"],$_POST["email_sponsor"],$_POST["définition_sponsor"],$_POST["image_sponsor"]);
    $Sponsor->enregistrerSponsor();
    header("Location:tableSponsors.php");
}

?>