<?php
// Database connection
$servername = "localhost"; // Your MySQL host
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "gvs_computer_center"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get JSON data from AJAX request
$data = json_decode(file_get_contents("php://input"), true);

// Extract the data
$rollNo = $data['rollNo'];
$name = $data['name'];
$session = $data['session'];
$courseType = $data['courseType'];
$courseInterest = $data['courseInterest'];
$fatherName = $data['fatherName'];
$motherName = $data['motherName'];
$mobile = $data['mobile'];
$altMobile = $data['altMobile'];
$email = $data['email'];
$dob = $data['dob'];
$gender = $data['gender'];
$qualification = $data['qualification'];
$address = $data['address'];

// Prepare SQL query to insert data
$sql = "INSERT INTO students (rollNo, name, session, courseType, courseInterest, fatherName, motherName, mobile, altMobile, email, dob, gender, qualification, address) 
        VALUES ('$rollNo', '$name', '$session', '$courseType', '$courseInterest', '$fatherName', '$motherName', '$mobile', '$altMobile', '$email', '$dob', '$gender', '$qualification', '$address')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Record saved successfully."]);
} else {
    echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
}

// Close the connection
$conn->close();
?>