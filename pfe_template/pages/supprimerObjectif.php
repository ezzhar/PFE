<?php
require_once("objectifs.php");
Objectifs::supprimerObjectif($_GET["id_objectif"]);
header("Location:tableObjectifs.php");
?>