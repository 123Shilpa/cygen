<?php
session_start();
require_once("config.php");
$db_handle = new DBController();
$initial_time = $_GET['ini_time'];
$sql = "Select Email from login_cygen WHERE Id='" . $_GET["Id"]. "'";
$sql1 = mysql_query($sql);
$row = mysql_fetch_row($sql1);

if(time() - $initial_time < 1800)
{
	$db_handle = new DBController();
	if(!empty($_GET["Id"])) {
	$query = "UPDATE login_cygen set Status = '1' WHERE Id='" . $_GET["Id"]. "'";
	//echo $query;
	$result = $db_handle->updateQuery($query);
		if(!empty($result)) {
		        
				 //cookie for sending Email for One time
				if(!isset($_COOKIE['mail_sent']))
				{	

				setcookie('mail_sent', 1, time()+30);
				
				$name_array = array('Trystan','Liyaah');	
				$name_mailer = 	$name_array[array_rand($name_array)];
				$toEmail = $row[0];
				$subject = "User Confirmation Mail";
				$headers = "From: $name_mailer \r\n";
				$headers .= "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$htmlContent = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table class="gmail-body-layout" style="width: 100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center" >
<tbody><tr>
<td valign="top" align="center">

<table _moz_resizing="true" class="gmail-remove" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="height: 57px; line-height: 57px;" height="57"><br></td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: #fff none repeat scroll 0% 0%; border: 1px solid #ddd;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="height: 33px; line-height: 33px;" height="33"><br></td>
</tr>
<tr>
<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-size: 30px; line-height: 30px; font-weight: 400; letter-spacing: 0.15em; text-transform: uppercase; color: rgb(255, 255, 255);" valign="top" align="center"><a style="text-decoration: none; color: #017b8b; font-size: 34px; line-height: 42px;" href="http://www.cygengroup.com/">Cygen Health Care</a>
</td>
</tr>
<tr>
<td style="height: 8px; line-height: 8px;" height="8"><br></td>
</tr>
<tr>
<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-size: 11px; line-height: 11px; font-weight: 400; letter-spacing: 0.1em; text-transform: uppercase; color: rgb(204, 204, 204);" valign="top" align="center">Redefining healthcare Delivery</td>
</tr>
<tr>
<td style="height: 25px; line-height: 25px; border-bottom: 2px solid rgb(255, 255, 255);" height="25"><br></td>
</tr>
<tr style="">
<td style="line-height: 0;" valign="top" align="center">
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0px 0px; border: 1px solid rgb(221, 221, 221);" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="height: 30px; line-height: 30px;" height="47"><br></td>
</tr>
<tr>
<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-size: 30px; line-height: 30px; font-weight: 400; text-transform: uppercase; color: #017b8b;" valign="top" align="center">Welcome! To Cygen Group</td>
</tr>
<tr>
<td style="height: 21px; line-height: 21px;" height="21"><br></td>
</tr>
<tr>
<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-weight: 400; text-transform: uppercase; font-size: 13px; line-height: 29px; letter-spacing: 0.6px; color: rgb(147, 147, 147); padding: 0px 10px;" valign="top" align="center">Hi, I am ' .$name_mailer. ', your friend from Cygen. Your Account is Active Now</td>
</tr>
<tr><td>
<br><br>
</td></tr>

<tr>
<td style="height: 41px; line-height: 41px;" height="41"><br></td>
</tr>
<tr>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">

</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr>
<td style="line-height: 0;" valign="top" align="center">
<a href="http://livedemo00.template-help.com/newsletter_53125/index.html" style="text-decoration: none; display: inline-block;">

</a>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr>
<td style="line-height: 0;" valign="top" align="center">
<a href="http://livedemo00.template-help.com/newsletter_53125/index.html" style="text-decoration: none; display: inline-block;">

</a>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr>

</tr>
<tr>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>
<td valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
</tbody></table>
</td>
</tr>
<tr>

</tr>
<tr>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table class="gmail-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(221, 221, 221); padding-top: 25px;" valign="top" align="center">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>

</tr>
<tr style="margin-top: 30px;">
<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-size: 16px; line-height: 16px; font-weight: 400; letter-spacing: 0.15em; text-transform: uppercase; color: rgb(144, 140, 124);" valign="top" align="center">contacts</td>
</tr>
<tr>
<td style="line-height: 17px; height: 11px;" height="33"><br></td>
</tr>
<tr>
<td valign="top" align="center">
<table cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="line-height: 0;" valign="top" align="center">
<a href="#" style="text-decoration: none; display: inline-block;">
<img alt="socials1" src="http://livedemo00.template-help.com/newsletter_53125/images/socials1.png" width="42" height="42">
</a>
</td>
<td style="line-height: 0; padding: 0px 0px 0px 3px;" valign="top" align="center">
<a href="contacts" style="text-decoration: none; display: inline-block;">
<img alt="socials2" src="http://livedemo00.template-help.com/newsletter_53125/images/socials2.png" width="42" height="42">
</a>
</td>


<td style="line-height: 0; padding: 0px 0px 0px 3px;" valign="top" align="center">
<a href="#" style="text-decoration: none; display: inline-block;">
<img alt="socials5" src="http://livedemo00.template-help.com/newsletter_53125/images/socials5.png" width="42" height="42">
</a>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr bgcolor="ffffff"><td height="30"></td></tr>
<tr>
<td mc:edit="copy10" style="color: #939393; font-size: 13px; font-weight: normal; font-family:Open Sans, sans-serif;" class="prefooter-header" align="center">
	                		<multiline>
	    						We spend hours curating the best content and send it to you every week for Free. If you dont love it, <a href="#" style="text-decoration: none; color: #017b8b;">Unsubscribe</a> at any time.
	                		</multiline>
                		</td>

</tr>
<tr bgcolor="ffffff"><td height="30"></td></tr>
<tr>
  
  </tr>
  <tr>
						<td align="center"><br><br></td>
						</tr>
					<tr>
						<td align="center">Thanks & Regards </td>
						</tr>
<tr>
						<td align="center">'.$name_mailer.'</td>
						</tr>
						<tr>
						<td align="center"><br><br></td>
						</tr>
<tr bgcolor="ffffff">
                		<td mc:edit="copy11" style="color: #939393; font-size: 11px; font-weight: normal; font-family: Open Sans, sans-serif;" class="prefooter-subheader" align="center">
	                		<multiline>
	                			<span style="color: #017b8b">Email :</span> info@cygengroup.com
	                			
	                		</multiline>
	                		
                		</td>
						
                	</tr>
					
<tr bgcolor="ffffff">
                		<td mc:edit="copy11" style="color: #939393; font-size: 11px; font-weight: normal; font-family: Open Sans, sans-serif; padding-top:15px" class="prefooter-subheader" align="center">
	                		<multiline>
	                			<!--<span style="color: #017b8b">Phone :</span> 0120-23444455-->
	                			
	                		</multiline>
	                		
                		</td>
                	</tr>
                	
                	<tr bgcolor="ffffff"><td height="30"></td></tr>
                <!------------ end main Content ----------------->
                
                                
                 <!---------- footer  --------->
                	<tr bgcolor="#fff"><td height="14"></td></tr>
                	<tr bgcolor="#fff">
                		<td mc:edit="copy12" style="color: #fff; font-size: 10px; font-weight: normal; font-family: Open Sans, sans-serif;" align="center">
                			
                				<a style="color:#017b8b; text-decoration:none;" href="https://w3layouts.com/" target="_blank">Copyright &copy; 2016 CyGen Group
                			
                		</a></td>
                	</tr>
					<tr bgcolor="#fff"><td height="14"></td></tr>
                	
              
                <!---------  end footer --------->
</tbody></table>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
<table class="gmail-remove" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="height: 57px; line-height: 57px;" height="57"><br></td>
</tr>
</tbody></table>

</td>
</tr>
</tbody></table>
</body>
</html>
';	
						if(mail($toEmail, $subject, $htmlContent, $headers))
						{
							$message = "Your account is now active.";	
						}
						else
						{
						// user registerd and mail send faield (Invalid email) for varification
						
						}
						
					
		} else {
			$message = "Problem in account activation.";
		}
	}
  } 	
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Care, health" />
<meta name="description" content="Health Care HTML Template" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="images/fav.png" sizes="16x16" />

<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
<nav class="social">

<ul>
          <li><a href="http://facebook.com" target="_blank"> <i class="fa fa-facebook"></i>  Facebook  </a></li>
          <li><a href="http://twitter.com" target="_blank"> <i class="fa fa-twitter"></i>  Twitter  </a></li>
          <li><a href="https://www.linkedin.com" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i>  LinkedIn </a></li>
          <li><a href="https://plus.google.com/" target="_blank">  <i class="fa fa-google-plus" aria-hidden="true"></i>  Google+ </a></li>  
</ul>

</nav>
        

<link rel="stylesheet" href="css/main.css" media="screen"/>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
<link rel="stylesheet" href="css/simpleMobileMenu.css" media="screen"/>
<link rel="stylesheet" href="css/jquery.fancybox.css">


<title>Health Care HTML Template</title>
<style>
.activate{
	background:#f5f5f5;
	margin: 0 auto;
    width: 700px;
	padding:10px 20px; 
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    margin-top: 20%;
}
.acc-text{
	margin-top:20px;
	font-size:16px;}
.user-detail{
	padding-left:10px;}
.user-detail span{
	font-weight:600;}
.verification a span {
    color: rgb(1, 123, 139);
    font-weight: 600;
    text-decoration: underline;
}
@media (max-width: 700px) {	
.activate{
    width: 100% !important;
	margin-top: 30%;
	
}
}

</style>
</head>

<body>
 
  <div class="container">
    
    <div class="col-lg-12">
     <div class="row activate">
        <h2>Cygen Group</h2>
        <div class="line-hr"></div>
        <p class="acc-text">Your account is now active!</p>
         <div class="user-detail">
       <!--   <p><span>Username:</span>13</p>
          <p><span>Password:</span>xyz@123</p>-->
         </div>
        <p class="verification">Your account is now activated.<a href="http://www.cygengroup.com/"><span>Log in</span></a> or go back to the <a href="#"><span>Homepage</span></a></p>
          
     </div>
    </div>
     <div class="clearfix"></div>
  </div>
</body>
</html>
<?php

}	
else
{
	echo "Link Expired";
}

?>
		