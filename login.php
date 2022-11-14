<?php
// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";

// $myJSON = json_encode($myObj);

// echo $myJSON;
?>

<?php
// Sample array
$data = array("error" => false, "message" => "success", "loginResult" => ["userId"=>"user-id", "name"=>"user-name", "token"=>"user-token"]);

header("Content-Type: application/json");
echo json_encode($data);
exit();
?>
