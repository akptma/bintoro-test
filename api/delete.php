<?php
require_once "../config/database.php";

$id          = $_GET['id'];

$query  = "DELETE FROM `test_bintoro`.`users` 
           WHERE `id` = '$id'
          ";

$msg = null;
if ($connect->query($query)) {
    $msg = 'delete success';
} else {
    $msg = 'error';
}

$response = [
    'msg' => $msg
];
header('Content-Type:application/json');
echo json_encode($response);
