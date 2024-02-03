<?php
include "db_connection.php";
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include "db_connection.php";

    // Get form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Validate form data (add more validation as needed)

    // Hash the password (you should use more secure methods in a production environment)
    $hashedPassword = md5($password);

    // Query the database to check the credentials
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword' AND role = '$role'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if there is a matching user
        if (mysqli_num_rows($result) == 1) {
            // Start a session and set user information
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $role;

            // Redirect to a dashboard or welcome page
            header("Location: dashboard.php");
            exit();
        } else {
            // Invalid credentials, redirect to login page with an error message
            header("Location: login.php?error=invalid");
            exit();
        }
    } else {
        // Database error, redirect to login page with an error message
        header("Location: login.php?error=database");
        exit();
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Invalid request method, redirect to login page with an error message
    header("Location: login.php?error=invalid_request");
    exit();
}
?>
