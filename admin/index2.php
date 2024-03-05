<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="index2.php">Users</a></li>
        </ul>
    </nav>

    <main>
    <table border='1'>
    <tr >
        <td>id</td>
        <td>nama</td>
        <td>username</td>
        <td>password</td>
        <td>level</td>
        <td>email</td>
    </tr>
    <?php 
include "koneksi.php";
$query_mysql = mysqli_query($mysqli,"SELECT * FROM user")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['level']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td class="edit"><a href='edit.php?id=<?php echo $data['id'];?>'>Edit</a></td>
    <td ><a href='delete.php?id=<?php echo $data['id'];?>'>Delete</a></td>

</tr>
<?php } ?>
</table>
    </main>

    <footer>
        <p>Hak Cipta &copy; 2024 Admin Page.</p>
    </footer>

    <script src="scripts.js"></script>
</body>
<style>
/* Reset default margin and padding */


/* Style for tombol Edit */



</style>

</html>