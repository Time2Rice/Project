<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === "admin@example.com" && $password === "123456") {
        echo "<h2>Login successful!</h2>";
    } else {
        echo "<h2>Invalid credentials.</h2>";
    }
}
?>
