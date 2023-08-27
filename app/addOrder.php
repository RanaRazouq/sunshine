<?php 


include "../connect.php";

$user_id= filterRequest('order_user');
$order_content= filterRequest('order_content');
$all_money= filterRequest('all_money');

$stmt = $con->prepare("INSERT INTO `my_order`(`order_content`, `all_money`, `order_user`) 
VALUES (?,?,?)");
$stmt->execute(array($order_content,$all_money,$user_id));

$count = $stmt->rowCount();
if ($count>0) {
echo json_encode(array("status" => "success"));}
else echo json_encode(array("status" => "faild"));
?>