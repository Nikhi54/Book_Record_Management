<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'brm');
	
	$q="SELECT * FROM book";
  	
	$result = mysqli_query($con,$q);
	
	$num = mysqli_num_rows($result);
	
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Delete Record </title>
		<link rel="stylesheet" href="viewStyle.css" />
	</head>
	<body>
		<h1 align="center"> Book Record Management</h1>
	<center>
		<form method="post" action="deletion.php" >
		<table id="view_table">
			<tr>
				<th>Book Id</th>
				<th>Title</th>
				<th>Price</th>
				<th>Author</th>
				<th>Select For Delete</th> 
			</tr>
			
				<?php 
					for($i=1;$i<=$num;$i++)
					{
						$row = mysqli_fetch_array($result);
				?>
					<tr>
						<td><?php echo $row['bookid'];?></td>
						<td><?php echo $row['title'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php echo $row['author'];?></td>
						<td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="<?php echo 'b'.$i; ?>" /></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<td colspan="5" align="center">
						<input type="submit" value="Delete" style="background-color:red; width:80px;">
					</td>
				</tr>
		</table>
		</form>
	</center>
	
	</body>
</html>