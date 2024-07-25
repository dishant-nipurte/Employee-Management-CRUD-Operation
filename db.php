<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    // Handle file upload
    $profilePicture = addslashes(file_get_contents($_FILES['profilePicture']['tmp_name']));

    $sql = "INSERT INTO employees (firstName, lastName, phoneNumber, email, position, profilePicture) 
            VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$position', '$profilePicture')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch employees
$result = $conn->query("SELECT * FROM employees");

$employees = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}

$conn->close();
?>

