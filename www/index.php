<?php
// host = db service name. look at docker-compose.yml
$host = 'db';
$user = 'root';
$password = '2527';
$db = 'myapp';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    echo 'connection faild' . $conn->connect_error;
}

echo 'Successfully connected to MYSQL';