<?php 
$raw_data = file_get_contents('php://input');
$data = json_decode($raw_data, true);

echo "Username: " . $data['username'] . "<br>";
echo "Password: " . $data['password'];

?>