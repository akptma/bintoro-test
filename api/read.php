<?php
require_once "../config/database.php";

$query = $connect->query('SELECT * FROM users');
while ($row = mysqli_fetch_object($query)) {
    $data[] = $row;
}

$response = [
    'msg'  => true,
    'data' => $data
];
header('Content-Type:application/json');
echo json_encode($response);
