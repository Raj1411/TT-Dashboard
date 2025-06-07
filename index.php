<?php
session_start();

// ======= SIMPLE CREDENTIALS (EDIT IF NEEDED) =======
$USERNAME = getenv('APP_USERNAME');
$PASSWORD = getenv('APP_PASSWORD');
// ===================================================

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($user === $USERNAME && $pass === $PASSWORD) {
        $_SESSION['loggedin'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
