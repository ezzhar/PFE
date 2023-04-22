<?php
require_once("objectifs.php");
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Objectif=new Objectifs($_POST["definition_objectif"],$_POST["image_objectif"]);
    $Objectif->enregistrerObjectif();
    header("Location:tableObjectifs.php");
}

?>