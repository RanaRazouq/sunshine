
<?php


include "connect.php";
$stmt = $con->prepare("SELECT * FROM pizza_types");
$stmt->execute();
$user= $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($user);
echo $user;
   ?>