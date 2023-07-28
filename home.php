<?php
session_start();
if(!isset($_SESSION['username']))
  header('location: http://localhost/BRM/login.php');

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$q = 'select * from book';
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Record Management</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <header>
    <h1>Book Record Management</h1>
  </header>

  <nav>
    <ul>
      <li><a class="navlink" href="insertform.php">Insert</a></li>
      <li><a class="navlink" href="view.php">View</a></li>
      <li><a class="navlink" href="updateform.php">Update</a></li>
      <li><a class="navlink" href="deleteform.php">Delete</a></li>
      <li><a class="navlink" href="logout.php">Logout</a></li>


    </ul>
  </nav>

  <main>
    <section class="book-list">
      <img src="main.png" alt="book" width='1500px', height='400px'>
    </section>
  </main>
  <footer>
    <p>© 2023 Your Website. All rights reserved.</p>
  </footer>
</body>
</html>
