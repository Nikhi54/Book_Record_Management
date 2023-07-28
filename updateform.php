<?php 
$con  = mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$q = "select * from book";
$result = mysqli_query($con,$q);
$num  = mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>update book Record</title>
	<link rel="stylesheet" href="viewStyle.css">
</head>
<body>
	<h1 align='center'>Book Record Management</h1>

	<form action="updation.php" method='post'>
		<table>
			<tr>
				<th>Bookid</th>
				<th>Title</th>
				<th>Price</th>
				<th>Author</th>
			</tr>
			<?php 
			for($i=1; $i<=$num;$i++){
				$row = mysqli_fetch_array($result);
				?>
				<tr>
					<td><input type="hidden" name="bookid<?php echo $i; ?>" value="<?php echo $row['bookid']; ?>"></td>
					<td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['title']; ?>"></td>
					<td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price']; ?>"></td>
					<td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author']; ?>"></td>
				</tr>
			<?php
			}
			?>
			<td><input type="submit" value="update"/></td>
		</table>
		
	</form>
</body>
</html>