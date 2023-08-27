<?php 


include "../connect.php";

$username= filterRequest('username');
$phone= filterRequest('phone');
$password= filterRequest('password');

$stmt = $con->prepare("INSERT INTO `users`(`username`, `phone`, `password`) 
VALUES (?,?,?)");
$stmt->execute(array($username,$phone,$password));

$count = $stmt->rowCount();
if ($count>0) {
echo json_encode(array("status" => "success"));}
else echo json_encode(array("status" => "faild"));
?>