<?php
	//$submit = $_POST['submit'];
	//if(isset($_POST['submit']))
	//{
					$title = $_POST['title'];
					$price = $_POST['price'];
					$author = $_POST['author'];
					
					$con = mysqli_connect('localhost','root');
					mysqli_select_db($con,'brm');
					
					$q="INSERT INTO book (title,price,author) VALUES ('$title',$price,'$author')";
					$status = mysqli_query($con,$q);
					//header('location:insertform.php');
					mysqli_close($con);
					
					
					
					
	
	
?>


<!DOCTYPE html>
<html>
	<head>
		<title> insertion </title>
	</head>
	<body>
		<h1 align="center"> Book Record Management</h1>
			<h4>
				<?php 
					if($status ==1)
						
						{
							
							echo "<script> alert('your data has been uploded successfully'); </script> ";
							//header('location:insertform.php');==>if record updated succesfully it will 
							// automatically redirect to the page where we want to our user redirect
						}
						else
						{
							
							echo "not uploaded";
							echo "<script> window.open('insertform.php'); </script>";
						}
						
						
						
	/*} */		
			?>
				<p> Do u want to insert Another book data ? <a href="insertform.php">click here to insert</a> </p>
				<p>Back to The Home <a href="home.php">click Here</a></p>
				
			</h4>	
		</body>
	</html>