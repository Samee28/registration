function validateForm() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var gender = document.getElementById("gender").value;
    var branch = document.getElementById("branch").value;
    var rollNumber = document.getElementById("rollNumber").value;

    if (firstName === "" || lastName === "" || email === "" || password === "" || gender === "" || branch === "" || rollNumber === "") {
        alert("All fields are required");
        return false;
    }

    return true;
}