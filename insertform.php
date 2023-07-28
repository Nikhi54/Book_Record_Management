<!DOCTYPE html>
<html>
	<head>
		<title> insertion form </title>
		<link rel="stylesheet" href="insert.css">
	</head>
	<body>
		<h1 align="center"> Book Record Management</h1>
	<center>	
		<form action="insertion.php" method="post">
			<table id='view_table'>
				<td>
					<tr>
						<th>Title<th>
						<td>
							<input type="text" name="title" required />
						</td>
					</tr>
				</td>
				
				<td>
					<tr>
						<th>Price<th>
						<td>
							<input type="text" name="price" required />
						</td>
					</tr>
				</td>
				
				<td>
					<tr>
						<th>Author<th>
						<td>
							<input type="text" name="author"  />
						</td>
					</tr>
				</td>
				
				<td>
					<tr>
						<th><th>
						<td>
							<input type="submit" value="insert" name="submit" required />
						</td>
					</tr>
				</td>
			</table>
		</form>
	<center>
	
	</body>
</html>