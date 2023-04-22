<?php
require_once("sponsors.php");
Sponsors::supprimerSponsor($_GET["id_sponsor"]);
header("Location:tableSponsors.php");
?>