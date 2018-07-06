<?php
include("databaseManagement/Importer.php");
$importer = new Importer();
$ar = $importer->fromFile("assets/klatka", [1,2,3]);
print_r($ar);


?>