<?php
		session_start();
		error_reporting(0);
		$host="localhost";
		$user="root";
		$pass="";
		$db="abbank";
		$conn=mysqli_connect($host,$user,$pass,$db);
		if($conn)
		{
			echo "";
		}
		else
		{
			echo "connection fail";
		}
		
		 if(isset($_POST['submit']))
		 {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="SELECT * FROM user WHERE username='$username' && password='$password'";
		$result=mysqli_query($conn,$query);
		$total=mysqli_num_rows($result);
		if($total==1)
		{
			$_SESSION['userid']=$username;
			header('location:index.php');
		}
		else
		{
			echo "<p align='center' style='color: red;'>Wrong username or Password Please Try Again</p>";
		}
		
		 }

?>

	<!DOCTYPE html>
	<html lang="en">
	<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>AB Bank</title>
		<!-- Favicon -->
		<meta name="msapplication-TileColor" content="#cc9966">
		<meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<!-- Plugins CSS File -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Main CSS File -->
		<link rel="stylesheet" href="assets/css/style.css">
			<style>

			table{
				width: 600px;
			}

			th{
				text-align: center;
			}

			table, th, td{
				border: 1px solid #000;
				border-collapse: collapse;
			}

			th, td{
				padding: 10px;
			}

			tr:nth-child(even){
				background-color: #fff;
			}

			tr:nth-child(odd){
				background-color: #ddd;
			}


			</style>
	</head>

	<body>
				<main class="main">
				<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
					<div class="container">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Home</a></li>
							  <li class="breadcrumb-item"><a href="home.php">Admin</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a href="login.php">logout</li></a>
						</ol>
					</div><!-- End .container -->
				</nav><!-- End .breadcrumb-nav -->
				
				
				
				<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/3-bg.jpg')">
				<h1>Hello Future Wellcome Admin</h1>
				<?php 
				session_start();
				echo "<h3>Welcome</h3> " .$_SESSION['userid'];
						
				?>
				
				<table class="content-table">
				<thead>
				<tr>
				<th>ID</th>
				<th>USERNAME</th>
				<th>EMAIL</th>
				<th>PASSWORD</th>
				<th>DELETE</th>
				</tr>
				</thead>
				
				<?php
				$host="localhost";
				$user="root";
				$pass="";
				$db="abbank";
				$conn=mysqli_connect($host,$user,$pass,$db);
				if($conn)
				{
					echo "";
				}
				else
				{
					echo "connection fail";
				}
				$sql="SELECT * FROM user";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query))
				{
					echo "<tr>";
					echo "<td>".$row[id]."</td>";
					echo "<td>".$row[username]."</td>";
					echo "<td>".$row[email]."</td>";
					echo "<td>".$row[password]."</td>";
					
					echo "<td><a href='admin.php?id=$row[id]' onclick='return checkdelete()' class='btn btn-danger'>Delete</a></td>";
					
					echo "</tr>";
				}
				
				
				?>
				<?php
		error_reporting(0);
		$host="localhost";
		$user="root";
		$pass="";
		$db="abbank";
		$conn=mysqli_connect($host,$user,$pass,$db);
		if($conn)
		{
			echo "";
		}
		else
		{
			echo "connection fail";
		}

		$id=$_GET['id'];
		$sql="DELETE FROM user WHERE id='$id'";
		$query=mysqli_query($conn,$sql);
		if($query)
		{
			echo "";
		}
		else
		{
			echo "";
		}


		?>

				
				
						
						
				</div><!-- End .login-page section-bg -->
			</main><!-- End .main -->

	   
		

		<!-- Plugins JS File -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/jquery.hoverIntent.min.js"></script>
		<script src="assets/js/jquery.waypoints.min.js"></script>
		<script src="assets/js/superfish.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Main JS File -->
		<script src="assets/js/main.js"></script>
	</body>


	<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
	</html>