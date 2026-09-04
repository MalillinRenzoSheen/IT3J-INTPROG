<?php 
    header('Content-Type: application/json');

    $user_profile = array(
    "id" => 1,
    "name" => "Renzo Sheen Malillin",
    "email" => "malillinrenzosheen_bsit@plmun.edu.ph",  
    "status" => "active"
    );
    echo json_encode($user_profile);
?>