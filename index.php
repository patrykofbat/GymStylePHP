<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

include('databaseManagement/DatabaseManager.php');

$rawRequest = file_get_contents("php://input");
$decodedRequest = json_decode($rawRequest);

$dbMan = new DatabaseManager();
$result = $dbMan->selectById($decodedRequest->{'selectedOption'});

echo json_encode($result);


?>