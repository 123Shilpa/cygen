<?php
session_start();
include("config.php");
//include("session.php");
$db_handle = new DBController();
$end = date('d-m-Y', strtotime('+1 years'));
$SubscriptionDate = date("d-m-Y");
$q = "SELECT * FROM paymentsdetails WHERE PatientId = '".$_SESSION['PatientId']."'";
$res = mysql_query($q);
$row = mysql_num_rows($res);
if($row > 0)
{
	$query = "UPDATE paymentsdetails SET Package = '".$_SESSION['Package']."', InvoiceNumber = '".$_SESSION['InvoiceNumber']."', Amount = '".$_SESSION['Amount']."', SubscriptionDate = '$SubscriptionDate', ExpiryDate = '$end',Response = 'Success', Status = '1' WHERE PatientId = '".$_SESSION['PatientId']."'";
	$result = mysql_query($query);
}
else
{
$query = "INSERT INTO paymentsdetails ( PatientId, Package, Period, InvoiceNumber, Amount, SubscriptionDate,ExpiryDate, Response, Status)
         VALUES('".$_SESSION['PatientId']."','".$_SESSION['Package']."','".$_SESSION['Period']."','".$_SESSION['InvoiceNumber']."','".$_SESSION['Amount']."','$SubscriptionDate' , '$end','Success','1')";
$result = mysql_query($query);
}
if ($result)
{
            $to = 'info@cygengroup.com';
            $subject = 'Subscription Notification';

            $message = 'You have successfully subscribed';

            $headers = 'From: ' . $_SESSION['Email'] .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="5;url=http://www.cygengroup.com" />
<title>Cancel Order</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>
body{ background:rgba(7,189,213,0.4); }

.header{ background:#017B8B; text-align:center; padding:20px 0px;}
.cancel-header{ padding:20px 20px;}
.footer{padding:5px 20px; text-align:center; background:#017B8B;}
.cancel-body{ padding:30px 20px;  background:#ececec;}
</style>
</head>

<body>
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="center-block">
<div class="cancel-header">
<div class="col-xs-12 header">
<a href="http://www.cygengroup.com"> <img class="" alt="" src="images/logo2.gif" > </a>

</div>
<div class="col-xs-12 cancel-body ">
<h2 class="centered">Payment Successfully Done</h2>
<p class="centered"> Your Order has been Successfully Done . </p>

<br>
<br>
<p>Thank you </p>
<p> Cygen Group </p>
</div>

<div class="clearfix"> </div>

<div class="footer">
<span class="footer">Copyright © 2016 CyGen Group. All Rights Reserved  </span>
</div>


<div class="clearfix"> </div>
</div>  <!--cancel-header-->
</div>
</div>
</div>
</body>
</html>



		
