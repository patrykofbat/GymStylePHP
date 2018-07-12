<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

include('databaseManagement/DatabaseManager.php');

$dbMan = new DatabaseManager();


$result = $dbMan->selectByPoolId(2000, 2009);

echo json_encode($result);



?>