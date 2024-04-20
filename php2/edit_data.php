<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $branch = $_POST['branch'];
    $rollNumber = $_POST['rollNumber'];

    // Update data in the database
    $sql = "UPDATE users SET first_name='$firstName', last_name='$lastName', email='$email', password='$password', gender='$gender', branch='$branch', roll_number='$rollNumber' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
