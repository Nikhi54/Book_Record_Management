<?php
$con = mysqli_connect('localhost' , 'root' );
mysqli_select_db($con,'brm');
$q = "select * from book";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Book Records</title>
	<link rel="stylesheet" href="viewstyle.css">
</head>
<body>
	<h1>Book Record Management</h1>

	<table>
		<tr>
			<th>Bookid</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php
		for($i=1;$i<=$num;$i++){
			$row = mysqli_fetch_array($result);

		?>
		<tr>
			<td><?php echo $row['bookid']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['author']; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>
		