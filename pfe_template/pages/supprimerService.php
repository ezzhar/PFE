<?php
require_once("services.php");
Services::supprimerService($_GET["id_service"]);
header("Location:tableServices.php");
?>