<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gvs_computer_center";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);

$rollNo = $data['rollNo'];
$name = $data['name'];
// other fields

$sql = "INSERT INTO students (rollNo, name) VALUES ('$rollNo', '$name')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Record saved successfully."]);
} else {
    echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
}

$conn->close();
?>