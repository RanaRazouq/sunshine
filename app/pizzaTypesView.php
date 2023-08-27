<?php
include "../connect.php";


$stmt = $con->prepare(" SELECT * FROM `pizza_types` " );



$data = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if ($count>0) {
echo json_encode(array("status" => "success", "data"=> $data));}
else echo json_encode(array("status" => "faild"));
?>