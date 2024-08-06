<?php
include('session.php');
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $na = $_POST['name'];
    $em = $_POST['email'];
    $ph=$_POST['phone'];
    $add=$_POST['address'];

    $insert = "INSERT INTO students (name, email,phone,address) VALUES ('$na', '$em','$ph','$add')";
    if (mysqli_query($conn, $insert)) {
        header("Location: students.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<html>

<body>
    <h2>Add Student</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
         Phone: <input type="number" name="phone" required><br>
        Address: <input type="text" name="address" required><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>

