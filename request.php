<?php
include 'connect.php';


$request = mysqli_real_escape_string($connect, $request);
$request = trim($_GET['cut_link']);


if (isset($_GET['cut_link'])) {


    $search_bool = false;
    $token = "";
    


    while (!$search_bool) {
        $token = genToken();
        $sel = mysqli_query($connect, "SELECT * FROM `links` WHERE `token` = '" . $token . "'");

        if (!mysqli_num_rows($sel)) {
            $search_bool = true;
      
        }
      
    }

    if ($search_bool) {
        $insertToken = mysqli_query($connect, " INSERT INTO `links` (`link`, `token`) VALUES ('" . $request . "', '" . $token . "')");
        if ($insertToken) {
            $request = $_SERVER['SERVER_NAME'] . '/' . $token;
        }
    }

} else {
    $URI = $_SERVER['REQUEST_URI'];

    $token = substr($URI, 1);
    $sel = mysqli_query($connect, "SELECT * FROM `links` WHERE `token` = '" . $token . "'");
   
    if (iconv_strlen($token)) {
        if (mysqli_num_rows($sel)) {

            $row = mysqli_fetch_assoc($sel);

            header("Location: " . $row['link']);

            
        } else {
            echo "Ошибка токена";
        }

    }
}

function genToken($min = 5, $max = 8)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDFEGHIJKLMNOPRSTUVWXYZ0123456789';
    $charsArray = str_split($chars);

    $token = "";
    $rand = mt_rand($min, $max);

    for ($i = 0; $i < $rand; $i++) {
        $token .= $charsArray[mt_rand(0, sizeof($charsArray) - 1)];
    }
    return $token;
}
