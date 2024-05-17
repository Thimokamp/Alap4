<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your username and password
    $username = "jayjay";
    $password = "123456";

    // Check if the form's username and password matches
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        echo "Login successful!";
        // Redirect or display a success message
        header("Location: ../index.html"); // navigeren naar mijn index.html page
        exit; 
        
    } else {
        echo "Invalid username or password!";
        // krijg error message
    }
}
?>
