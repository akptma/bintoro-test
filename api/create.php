<?php
require_once "../config/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name        = ucwords($_POST['name']);
    $birth_place = ucwords($_POST['birth_place']);
    $birth_date  = $_POST['birth_date'];
    $gender      = $_POST['gender'];

    $query  = "INSERT INTO `test_bintoro`.`users` (`name`, `birth_place`, `birth_date`, `gender`) 
           VALUES ('$name', '$birth_place', '$birth_date', '$gender')";

    $msg = null;
    if ($connect->query($query)) {
        $msg = 'insert success';
    } else {
        $msg = 'error';
    }

    $response = [
        'msg' => $msg
    ];
    header('Content-Type:application/json');
    echo json_encode($response);
}
