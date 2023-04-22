<?php
require_once("services.php");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Serv=new Services($_POST["definition_service"],$_POST["image_service"]);
    $Serv->enregistrerService();
    header("Location:tableServices.php");
}

?>