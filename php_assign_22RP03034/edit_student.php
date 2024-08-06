<?php
include('session.php');
include('db.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id='$id'");
$student = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $na = $_POST['name'];
    $em = $_POST['email'];
    $ph=$_POST['phone'];
    $add=$_POST['address'];

    $sql = "UPDATE students SET name='$na', email='$em',phone='$ph',address='$add' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: students.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" value="<?php echo $student['name']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $student['email']; ?>" required><br>
          Phone: <input type="number" name="phone" value="<?php echo $student['phone'];?>" required><br>
        Address: <input type="text" name="address" value="<?php echo $student['address'];?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
