<?php
$servername = "project_db";
$username = "root";
$password = "e1d3R%%1iNg#";
$dbname = "fuel";
$location = "";
$cost = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE if not exists fuel (cost INT, location VARCHAR(50));";
$sql1 = "IF EXISTS (SELECT FROM fuel WHERE location = $location) BEGIN echo SELECT FROM fuel WHERE location = $location END ELSE BEGIN INSERT INTO fuel($location, $cost); END";
$sql2 = "SELECT id, firstname, lastname FROM MyGuests";
$conn->query($sql);
$conn->query($sql1);
$results = $conn->query($sql2);

$conn->close();
?>
