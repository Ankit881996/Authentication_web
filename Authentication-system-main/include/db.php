<?php

$dBservername = "localhost";
$dBusername = "root";
$dBpassword = "";
$dBname = "hello";

$conn = mysqli_connect($dBservername, $dBusername, $dBpassword, $dBname);

if(!$conn){
    echo "Connection Failed" . mysqli_connect_errno();
}
// else{
//     echo "Connected successfully!";
// }

?>
