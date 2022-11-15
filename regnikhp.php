<?php
// $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";

// $myJSON = json_encode($myObj);

// echo $myJSON;
?>

<?php
$nikhp = isset($_POST['nikhp'])?$_POST['nikhp']:'';
$nikhpValid = true;
// Sample array
if($nikhp=='087809828878'){ // sampel dah registered
  $data = array("error" => false, "message" => "success", "loginResult" => ["userId"=>"user-id", "name"=>"user-name", "token"=>"user-token"]);
}else if(!$nikhpValid){
  $data = array("error" => true, "message" => "nikhp tidak valid", "loginResult" => ["userId"=>"", "name"=>"", "token"=>""]);
}else{
  $data = array("error" => true, "message" => "nikhp tidak terdaftar", "loginResult" => ["userId"=>"", "name"=>"", "token"=>""]);
}

header("Content-Type: application/json");
echo json_encode($data);
exit();
?>
