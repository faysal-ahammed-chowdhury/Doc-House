<?php
function initDB()
{
    $servername = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
    $username = "3apgEZ5ca82Efks.root";
    $password = "YqczKdmQwSuEfrM2";
    $dbname = "test";
    $port       = 4000;

    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}