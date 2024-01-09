<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_details";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<!-- sudo systemctl stop mysql && sudo service nginx stop && sudo /opt/lampp/xampp start -->