<?php 
$json_string = '{"name":"Renzo", "age":"22","email":"malillinrenzosheen_bsit@plmun.edu.ph"}';

$student_object = json_decode($json_string);

$student_array = json_decode($json_string, true);

echo "Object: " . $student_object->name."<br>";
echo "Array: " . $student_array['email'];
?>