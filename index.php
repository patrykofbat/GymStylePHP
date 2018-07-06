<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

$myArray = [
    id=>"1001",
    title=>"elo1",
    link=>"elo1",
    img=>"elo",
    description=>"123"

];


$ar = array($myArray);
echo json_encode($ar);



?>