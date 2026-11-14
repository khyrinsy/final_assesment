<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['name'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <?php
    if (!empty($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>

    <h1>Student Grading System - Login</h1>

    <h2>Login</h2>

    <form method="POST">
        <label>Username:</label>
        <input type="text" name="name">
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        <br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>