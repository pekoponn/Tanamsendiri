<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
    <td ><a href='edit.php?id=<?php echo $data['id'];?>'>Edit</a></td>
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
* {
    margin: 0;
    padding: 0;
}

/* Style for header */
header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

/* Style for navigation */
nav ul {
    list-style-type: none;
    padding: 0;
    background-color: #f4f4f4;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    display: block;
    padding: 10px 20px;
    color: #333;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: #ddd;
}

/* Style for main content */
main {
    margin: 20px;
}

/* Style for table */
table {
    border-collapse: collapse;
    width: 100%;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
}

table th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
}

/* Hover effect on table row */
table tr:hover {
    background-color: #f5f5f5;
}

/* Menghilangkan focus outline */
.edit:focus, .delete:focus {
    outline: none;
    text-decoration: none;
}


/* Style for tombol Edit */



</style>

</html>