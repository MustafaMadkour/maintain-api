<?php

include "../connect.php";

 
$report = filterRequest("report"); 
// $stmt = $con->prepare("SELECT * FROM admin WHERE admin_email = ? AND  admin_password = ?  ");
// $stmt->execute(array($email, $password));
// $count = $stmt->rowCount();
// result($count) ; 
// $alldata['status'] = "success" ; 


getData("reports", " report_operation = ? ", array($report));


