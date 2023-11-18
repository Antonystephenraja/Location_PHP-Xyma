<?php
$host = "localhost";
$dbname = "map"; 
$username = "root"; 
$password = "";

$connection = new mysqli($host, $username, $password, $dbname);

if ($connection->connect_error) {
    die('Database connection failed: ' . $connection->connect_error);
}

$query = "SELECT latitude, longitude FROM Map ORDER BY id DESC LIMIT 1";
$result = $connection->query($query);
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastLocation = [
        'latitude' => $row['latitude'],
        'longitude' => $row['longitude'],
        'logoPath' => './image/location.png'
    ];
} else {
    $lastLocation = [
        'latitude' => 0,
        'longitude' => 0,
        'logoPath' => './image/location.png'
    ];
}

$connection->close();

header('Content-Type: application/json');
echo json_encode($lastLocation);
?>
