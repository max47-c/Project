<?php
session_start();

$correctUsername = "admin";
$correctPasswordHash = password_hash("12345", PASSWORD_DEFAULT);

// Simulate database-stored hash
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $correctUsername && password_verify($password, $correctPasswordHash)) {
        $_SESSION["logged_in"] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Secure Login</title>
    <script src="login.js"></script>
</head>
<body>
    <h2>Login (Secure Version)</h2>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="" onsubmit="return validateForm()">
        <label>Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
