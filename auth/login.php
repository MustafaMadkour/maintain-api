<?php

include "../connect.php";
 
$password = sha1($_POST["password"]);
$email = filterRequest("email"); 
// $stmt = $con->prepare("SELECT * FROM admin WHERE admin_email = ? AND  admin_password = ?  ");
// $stmt->execute(array($email, $password));
// $count = $stmt->rowCount();
// result($count) ; 

getData("admin", " admin_email = ? AND admin_password = ?", array($email, $password));