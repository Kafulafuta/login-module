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
			echo "<p align='center' style='color: red;'> username or Password incorrect</p>";
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
</head>

<body>
			<main class="main">
            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/3-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							   
							    <li class="nav-item">
							        <a class="nav-link active" id="abbank" data-toggle="tab" href="bank" role="tab" aria-controls="an bank" aria-selected="true" style="color: #0000ff;">Login</a>
							    </li>
							</ul>
							<div class="tab-content">
							 
							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    	<form action="login.php" method="post">
							    		<div class="form-group">
							    			<label for="username">Username</label>
							    			<input type="text" class="form-control" id="username" name="username" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-group">
							    			<label for="register-password">Password </label>
							    			<input type="password" class="form-control" id="password" name="password" required>
							    		</div><!-- End .form-group -->

							    		<div class="form-footer">
							    			<button type="submit" name="submit" value="login"class="btn btn-outline-primary-2">
			                					<span>LOGIN</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>
											<a href="register.php" class="forgot-link">Dont have an account register here</a>
							    		</div><!-- End .form-footer -->
							    	</form>
							    	
							    </div><!-- .End .tab-pane -->
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

   
    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    <div class="form-box">
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

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