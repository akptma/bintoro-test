<?php
require_once "../config/database.php";

$query = $connect->query('SELECT birth_place,count(birth_place) as jumlah_data_user FROM users GROUP BY birth_place');
while ($row = mysqli_fetch_object($query)) {
    $query2 = $connect->query("SELECT * FROM users where birth_place LIKE '%$row->birth_place%'");
    while ($row2 = mysqli_fetch_object($query2)) {

        $users = [
            'id'          => $row2->id,
            'name'        => $row2->name,
            'birth_place' => $row2->birth_place,
            'birth_date'  => $row2->birth_date,
            'gender'      => $row2->gender,
        ];
    }

    $data[] = [
        'birth_place'      => $row->birth_place,
        'jumlah_data_user' => $row->jumlah_data_user,
        'users'            => $users
    ];
}


$response = [
    $data
];
header('Content-Type:application/json');
echo json_encode($response);
