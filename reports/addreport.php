<?php

include "../connect.php";



$operation = filterRequest("operation");
$fault = filterRequest("fault");
$solution = filterRequest("solution");
$faultdate = filterRequest("faultdate");
$estimatedtime = filterRequest("estimatedtime");
$spareparts = filterRequest("spareparts");
$status = filterRequest("status");


$stmt = $con->prepare("SELECT * FROM reports WHERE report_operation = ? ");
$stmt->execute(array($ship));
$count = $stmt->rowCount();
$data = array(
    "report_operation" => $operation,
    "fault_description" =>  $fault,
    "suggested_solution" => $solution,
    "fault_date" => $faultdate,
    "operation_estimated_time" => $estimatedtime,
    "spare_parts_needed" => $spareparts,
    "status" => $status,

    // "role" => $role,
    // "verifycode" => $verfiycode
);
// sendEmail($email , "Fleet Registeration" , "Hello ".ucfirst($username).", <br>Thanks for registering in Fleet. <br>Your account will be activated soon") ; 
insertData("reports" , $data) ; 