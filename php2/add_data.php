<?php
include('db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] ==="POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $branch = $_POST['branch'];
    $rollNumber = $_POST['rollNumber'];

    // Insert data into the database
    $sql = "INSERT INTO users (first_name, last_name, email, password, gender, branch, roll_number)
            VALUES ('$firstName', '$lastName', '$email', '$password', '$gender', '$branch', '$rollNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
