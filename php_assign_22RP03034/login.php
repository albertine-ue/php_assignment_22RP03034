<?php
session_start();


if (isset($_SESSION['username'])) {
    header("Location: students.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role=$_POST['role'];

    if ($username == 'admin' && $password == '123'&& $role=='Admin') {
        $_SESSION['username'] = $username;
        header("Location: students.php");
        exit();
    } else {
        $error = 'Invalid login credentials';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Role: <input type="text" name="role" required><br>
        <input type="submit" value="Login">
    </form>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
