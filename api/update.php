<?php
require_once "../config/database.php";

$id          = $_GET['id'];
$name        = ucwords($_POST['name']);
$birth_place = ucwords($_POST['birth_place']);
$birth_date  = $_POST['birth_date'];
$gender      = $_POST['gender'];

$query  = "UPDATE `test_bintoro`.`users` 
               SET `name`         = '$name', 
                    `birth_place` = '$birth_place', 
                    `birth_date`  = '$birth_date', 
                    `gender`      = '$gender' 
               WHERE `id` = '$id'
               ";

$msg = null;
if ($connect->query($query)) {
    $msg = 'update success';
} else {
    $msg = 'error';
}

$response = [
    'msg' => $msg
];
header('Content-Type:application/json');
echo json_encode($response);
