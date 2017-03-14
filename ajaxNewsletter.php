<?php 
session_start();
require_once("config.php");
$db_handle = new DBController();
if($_POST)
{
		$email = $_POST['email'];
		$query = "INSERT INTO newsletters(Email, Status) VALUES('$email', '1')";
		$queryEx = mysql_query($query);
		
		if(!empty($queryEx))
		{
			$name_array = array('Trystan','Liyaah');	
			$name_mailer = 	$name_array[array_rand($name_array)];
			$toEmail = $_POST["email"];
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$subject = "News Letters";
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
<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-size: 30px; line-height: 30px; font-weight: 400; text-transform: uppercase; color: #017b8b;" valign="top" align="center">Welcome!</td>
</tr>
<tr>
<td style="height: 21px; line-height: 21px;" height="21"><br></td>
</tr>
<tr>
<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-weight: 400; text-transform: uppercase; font-size: 13px; line-height: 29px; letter-spacing: 0.6px; color: rgb(147, 147, 147); padding: 0px 10px;" valign="top" align="center">Hi, I am ' .$name_mailer. ', your friend from Cygen. Please follow through by clicking on the link to activate your account.</td>
</tr>
<tr><td>
<br><br>
</td></tr>
<tr>

<td class="gmail-content" style="font-family: Open Sans, sans-serif; font-weight: 400; text-transform: uppercase; font-size: 13px; line-height: 29px; letter-spacing: 0.6px; color: rgb(147, 147, 147); padding: 0px 10px;" valign="top" align="center"><a href="'. $actual_link .'" style="text-decoration: none;font-size: 20px;font-weight: bold;padding: 10px;border: 2px solid #ddd;margin-top: 53px;color: #017b8b;">Click Here</a></td>
</tr>
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
</html>';
							//$htmlContent .= "Click this link to activate your account. " . $actual_link . "\r\n";
							//$htmlContent .= " Thanks & Regards \n  $name_mailer ";
							$headers .= "From: $name_mailer \r\n";
								if(mail($toEmail, $subject, $htmlContent, $headers))
								{
									
								// user registerd and mail successfully send for varification
								echo 1;
								}
								else
								{
								// user registerd and mail send faield (Invalid email) for varification
								echo 2;
								}
		}
		else
		{
			// error in registering user using email
			echo 4;
		}

	}


?>