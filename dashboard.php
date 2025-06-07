<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Power BI Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Secure Power BI Dashboard</h2>
    <a href="logout.php">Logout</a>
    <iframe title="Power BI Dashboard" 
        width="100%" height="600"
        src="https://app.powerbi.com/view?r=eyJrIjoiMzdmZWUxM2QtZGY4My00YjlkLWFjYjEtMzI2NjY3YjdmNmFlIiwidCI6IjU2NjU2NjEzLTBkZWEtNGU3OC1iNWVlLWRhNjI3NGZmMjZkZSJ9" 
        frameborder="0" allowFullScreen="true">
        </iframe>
</div>
</body>
</html>
