<?php
include "../connect.php";

$id= filterRequest('order_user');

$stmt = $con->prepare(" SELECT * FROM `my_order` WHERE order_user = ? " );

$stmt->execute(array($id));

$data = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if ($count>0) {
echo json_encode(array("status" => "success", "data"=> $data));}
else echo json_encode(array("status" => "faild"));
?>