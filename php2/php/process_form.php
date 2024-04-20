<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $branch = $_POST["branch"];
    $rollNumber = $_POST["rollNumber"];


    echo "<h2>Registration Details</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Branch:</strong> $branch</p>";
    echo "<p><strong>Roll Number:</strong> $rollNumber</p>";
} else {
    header("Location:index.html");
    exit();
}
?>
