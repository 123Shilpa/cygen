<?php 
include("config.php");
$db_handle = new DBController();

$Id = $_GET['Id'];
$Password = md5($_POST['Password']);
$CPassword = md5($_POST['CPassword']);
$initial_time = $_GET['ini_time'];

if(time() - $initial_time < 1800)
{

	if (isset($_POST["submit"])) {
		if ($Password === $CPassword)
		{
		$query = "UPDATE login_cygen SET Password = '$Password' WHERE Id = '$Id'";
		$result = mysql_query($query);

		 echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Password Updated Successfully ');window.location.href='index.php';</SCRIPT>");
		}
		else{
		 echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Password Dose Not Match ');</SCRIPT>");	
		}
	}


?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style3.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
        <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
					<h3>Reset Password</h3>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" style="display: block;">

									<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="Password" id="newpassword" tabindex="1" class="form-control" placeholder="New Password">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<input type="password" name="CPassword" id="confirmpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login">Reset Password</button>
											</div>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>


<?php 
} else {
			echo "Password Reset Link Expired";
}
?>