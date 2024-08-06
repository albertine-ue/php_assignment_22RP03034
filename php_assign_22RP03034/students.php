
<?php
include('session.php');
include('db.php');

$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>

<body>
    <h2>Student Management</h2>
    <a href="logout.php">Logout</a>
    <a href="add_student.php">Add Student</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
             <th>Address</th>
              <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
                <a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
