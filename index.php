<?php
session_start();


if (!isset($_COOKIE['visited'])) {
    setcookie("visited", "yes", time() + 3600, "/");
    $welcomeMessage = "Hey! Welcome Back!";
} else {
    $welcomeMessage = "First Time To Our Website? Welcome!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Home Page</title>
</head>
<body>
    <h1><?php echo $welcomeMessage; ?></h1>
    <form method="post" action="welcome.php">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
