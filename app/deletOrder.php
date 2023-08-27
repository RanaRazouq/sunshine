<?php 


include "../connect.php";

$order_id= filterRequest('id');


$stmt = $con->prepare("DELETE FROM my_order WHERE id =? ");
$stmt->execute(array($order_id));

$count = $stmt->rowCount();
if ($count>0) {
echo json_encode(array("status" => "success"));}
else echo json_encode(array("status" => "faild"));
?>