// validation.js

// Function to validate input in real-time
function validateInput(inputElement) {
    var inputValue = inputElement.value;
    var pattern = /^[a-zA-Z0-9]+$/; // Regular expression to allow only letters and numbers
    var isValid = pattern.test(inputValue);
    
    if (!isValid) {
        inputElement.style.borderColor = "red"; // Set border color to red
        inputElement.nextElementSibling.style.display = "block"; // Show error message
    } else {
        inputElement.style.borderColor = ""; // Reset border color
        inputElement.nextElementSibling.style.display = "none"; // Hide error message
    }
}
/*
// D:\BPT\authentication\login.php

session_start();
require_once('../connect.php');
require_once('../layer/detect-sqli.php');

if (isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // detect SQLi
    detect_sqli($username);
    detect_sqli($password);
    
    $password2 = hash('sha256', $password);

    $query = "SELECT COUNT(*) as c FROM Employee WHERE e_password = '$password' and e_username = '$username';";

    $result = $mysqli->query($query);

    while($row = $result->fetch_array()) {
        if($row['c'] == 1) {
            $query2 = "SELECT e_id, e_fname, e_lname, e_role FROM Employee WHERE e_password = '$password' and e_username = '$username';";

            $result2 = $mysqli->query($query2);
            $row2 = $result2->fetch_array();
            if ($row2['e_role'] == 'Admin') {
                $_SESSION["user"] = "Admin";
            } elseif ($row2['e_role'] == 'Cashier') {
                $_SESSION["user"] = "Cashier";
            }
            $_SESSION["fname"] = $row2['e_fname'];
            $_SESSION["lname"] = $row2['e_lname'];
            $_SESSION["e_id"] = $row2['e_id'];
            header("Location: /main/dashboard.php");
        } else {
            header("Location: /authentication/login.php?error=1");
        }
    }
} else {
    header("Location: /authentication/login.php");
}
*/