<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

include('databaseManagement/DatabaseManager.php');

$dbMan = new DatabaseManager();

$result = $dbMan->select();

echo json_encode($result);



?>