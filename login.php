<?php 
session_start();
require_once("config.php");
$db_handle = new DBController();
extract($_POST);
$EmailOrPhone= $EmailOrPhone;
$IsEmail= $IsEmail;
$Password= md5($Password);
try
{
	if($IsEmail=='true')
		{
			$query = "select *, Id as PatientId from login_cygen where Password='$Password' AND Email='$EmailOrPhone'";
		}
		else{
			$query = "select *, Id as PatientId from login_cygen where Password='$Password' AND Phone='$EmailOrPhone'";
		}
		$result = mysql_query($query);
        $rowcount = mysql_num_rows($result);
		if ($rowcount > 0) {
		while ($row = mysql_fetch_assoc($result)) {
        if($row["Status"])
		{
	  // user exists and account active
	    $_SESSION['IsSocial']=false; 
		$_SESSION['PatientId'] =$row['PatientId'];
		$_SESSION['UserId']=$row["Id"];
		$_SESSION['FullName']=$row['FullName']; 
		$_SESSION['Email']=$row['Email'];
		$_SESSION['Phone']=$row['Phone'];
		$_SESSION['ProfileImage']=$row['ProfileImage'];
		$_SESSION['RoleId']=$row['RoleId'];
		$_SESSION['Role']=$row['Role'];
		//user's acount already exists
		echo 1;
		}
		else
		{
			// user exists and account deactive
			echo 2;
		}
	}
	}
	else
	{
	echo 3;
	}
}
catch(Exception $e)
{
	echo -1;
}
?>
