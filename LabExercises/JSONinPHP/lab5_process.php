<?php 
header('Conent-Type: application/json');

$raw_data = file_get_contents('php://input');
$data =json_decode($raw_data, true);

$name = $data['name'];

$response = array(
    "status" => "success",
    "message" => "Welcome," .$name . "!"
);
echo json_encode($response);
?>