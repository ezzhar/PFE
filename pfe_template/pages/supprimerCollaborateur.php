<?php
require_once("Collaborateurs.php");
Collaborateurs::supprimerCollaborateur($_GET["id_collaborateur"]);
header("Location:tableCollaborateurs.php");
?>