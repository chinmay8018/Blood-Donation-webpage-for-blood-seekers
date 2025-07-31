<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the credentials (This is just a basic example, you should implement proper validation)
    if ($email === 'example@example.com' && $password === 'password') {
        // Redirect to dashboard or some other page upon successful login
        header("Location: dashboard.php");
        exit;
    } else {
        // Display error message
        echo "Invalid email or password.";
    }
}
?>
