
<?php

$connect = mysqli_connect('short-links', 'root', '', 'short-links-db');

if (!$connect) die("Ошибка подключения к БД: \n" . mysqli_connect_error());


$sql = "SELECT * FROM `links` ";
$result = mysqli_query($connect, $sql);
$json_array = [];

while ( $data = mysqli_fetch_assoc($result)){
    $json_array[] = $data;
}


// echo json_encode($json_array);