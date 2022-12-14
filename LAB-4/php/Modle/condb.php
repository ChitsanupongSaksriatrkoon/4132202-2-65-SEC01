<?php
$Host = "db";
$User = "root";
$Pass = "1234";
$db = "db_test";

try{
    $link = mysqli_connect($Host,$User,$Pass,$db);
    mysqli_query($link, "SET NAME utf8");
}catch (Exception $e) {
    echo $e . ":Error no:" . mysqli_errno($link);
}



?>

