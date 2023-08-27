<?php 


include "../connect.php";

$order_id= filterRequest('id');
$order_content= filterRequest('order_content');
$all_money= filterRequest('all_money');

$stmt = $con->prepare("UPDATE  my_order SET `order_content`= ?, `all_money`= ? WHERE  id =? ");
$stmt->execute(array($order_content,$all_money,$order_id));

$count = $stmt->rowCount();
if ($count>0) {
echo json_encode(array("status" => "success"));}
else echo json_encode(array("status" => "faild"));
?>