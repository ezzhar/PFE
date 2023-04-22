<?php
require_once("association.php");
Association::supprimerAssociation($_GET["id_association"]);
header("Location:tableAssociations.php");
?>