<?php
include("databaseManagement/Importer.php");
include("Exercise.php");
$importer = new Importer();
$exercise = new Exercise(100, "klata", "youtube", "link", "none");
$ar = $importer->fromFile("assets/klatka", [1,2,3]);
echo $exercise->insertDb("exercises");


?>