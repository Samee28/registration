<?php
// Check if the form is submitted for registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $branch = $_POST["branch"];
    $rollNumber = $_POST["rollNumber"];

    // Display the submitted data
    echo "<h2>Registration Details</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Branch:</strong> $branch</p>";
    echo "<p><strong>Roll Number:</strong> $rollNumber</p>";

    // Add edit and delete buttons for each record
    echo "<form action='process_form.php' method='POST'>";
    echo "<input type='hidden' name='editID' value='record_id'>";
    echo "<button type='submit' name='editSubmit'>Edit</button>";
    echo "</form>";

    echo "<form action='process_form.php' method='POST'>";
    echo "<input type='hidden' name='deleteID' value='record_id'>";
    echo "<button type='submit' name='deleteSubmit'>Delete</button>";
    echo "</form>";
} else {
    // If the form was not submitted via POST method, redirect to the form page
    header("Location:index.html");
    exit();
}

// Handle edit form submission
if (isset($_POST['editSubmit'])) {
    // Retrieve the record ID from the hidden input field
    $editID = $_POST['editID'];
    // Redirect to the edit page with the record ID
    header("Location: edit.php?id=$editID");
    exit();
}

// Handle delete form submission
if (isset($_POST['deleteSubmit'])) {
    // Retrieve the record ID from the hidden input field
    $deleteID = $_POST['deleteID'];
    // Perform delete operation (you can implement this)
}
?>
