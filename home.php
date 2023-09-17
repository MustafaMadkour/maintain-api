<?php

include "./connect.php";

$alldata = array();
$currentDate = date('Y-m-d');
// print_r($currentDate);

$alldata['status'] = "success" ; 

$reports = getAllData("reports", null, null, false);
$alldata['reports'] = $reports;



echo json_encode($alldata);
