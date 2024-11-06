<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email'] = $email; 
        $message = "Email saved: " . $_SESSION['email'];
    } else {
        $message = "Invalid email format.";
    }
} else {
    $message = "No email submitted.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Welcome Page</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <a href="index.php">Go Back To Home</a>
</body>
</html>
