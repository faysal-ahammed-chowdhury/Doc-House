<?php
$servername = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$username   = "3apgEZ5ca82Efks.root";
$password   = "YqczKdmQwSuEfrM2"; // or getenv('MYSQLPASSWORD')
$dbname     = "test";             // use "test" where you imported your tables, not "sys"
$port       = 4000;

$conn = mysqli_init();
$conn->ssl_set(NULL, NULL, '/etc/ssl/certs/ca-certificates.crt', NULL, NULL);
$conn->real_connect($servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>