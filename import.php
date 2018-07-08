<?php
include("utilis/Importer.php");
include("models/Exercise.php");
include("databaseManagement/DatabaseManager.php");
$importer = new Importer();
$exercise = new Exercise(100, "klata", "youtube", "link", "none");
$dbManager = new DatabaseManager();
$ar = $importer->fromFile("assets/klatka", [1,2,3]);
$dbManager->execute($exercise->parseInsertQuery("exercises"));


?>