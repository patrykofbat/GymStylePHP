<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include('databaseManagement/DatabaseManager.php');

$rawRequest = trim(file_get_contents("php://input"));
$decodedRequest = json_decode($rawRequest);
$id = $decodedRequest->selectedOption;

$dbMan = new DatabaseManager();

$result = $dbMan->selectById($id);

echo json_encode($result);
?>