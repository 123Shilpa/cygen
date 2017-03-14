<?php 
session_start();
require_once("config.php");
$db_handle = new DBController();
extract($_POST);
$FullName=$FullName;
$EmailOrPhone=$EmailOrPhone;
$IsEmail=$IsEmail;
$Password=md5($Password);
$SocialMediaType='LoginForm';
$ProfileImage='imgdemo.png';
$RoleId='3';
$Status= '0';
try
{   
       
		if($IsEmail=='true')
		{
				$query = "SELECT * FROM login_cygen where Email = '" . $_POST["EmailOrPhone"] . "'";
		}
		else {
			$query = "SELECT * FROM login_cygen where Phone = '" . $_POST["EmailOrPhone"] . "'";
		}
				$total_records = $db_handle->numRows($query);
				
				if($total_records == 0)
				{
					if($IsEmail=='true')
					{
						$query = "INSERT INTO login_cygen(FullName,Email,Password,SocialMediaType,ProfileImage,RoleId,Status)
						 VALUES('$FullName','$EmailOrPhone','$Password','LoginForm','imgdemo.png','3','0')"; 
						  $current_Id = $db_handle->insertQuery($query);
						
							if(!empty($current_Id)) 
							{
							$name_array = array('Trystan','Liyaah');	
							$name_mailer = 	$name_array[array_rand($name_array)];
							$initial_time = time();
							$actual_link = "http://$_SERVER[HTTP_HOST]/"."activate.php?Id=$current_Id&ini_time=$initial_time";
							$toEmail = $_POST["EmailOrPhone"];
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							$subject = "User Registration Activation Email";
							$htmlContent = '<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Introducing W3layouts app Email Template : w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Music Festival Newsletter templates, Email Templates, Newsletters, Marketing  templates, 
	Advertising templates, free Newsletter" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<style type="text/css">

body{
            width: 100%; 
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
        }
        p,h1,h2,h3,h4{
	        margin-top:0;
			margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
        }
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
        .banner {
    background: rgba(0, 0, 0, 0) url("http://www.cygengroup.com/images/bg_new.jpg") repeat scroll 0 0;
    border-top: 2px solid rgb(255, 255, 255);
    height: 264px;
}
        /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){
        
            /*------ top header ------ */
            .header-bg{width: 440px !important; height: 10px !important;}
            .main-header{line-height: 28px !important;}
            .main-subheader{line-height: 28px !important;}
            
            .container-middle{width: 420px !important;}
            .mainContent{width: 400px !important;}
            
            .main-image{width: 400px !important; height: auto !important;}
            .banner{width: 400px !important; height: auto !important;}
            /*------ sections ---------*/
            .section-item{width: 400px !important;}
            .section-img{width: 400px !important; height: auto !important;}
            /*------- prefooter ------*/
            .prefooter-header{padding: 0 10px !important; line-height: 24px !important;}
            .prefooter-subheader{padding: 0 10px !important; line-height: 24px !important;}
            /*------- footer ------*/
            .top-bottom-bg{width: 420px !important; height: auto !important;}
            
        }
        
        @media only screen and (max-width: 479px){
        
        	/*------ top header ------ */
            .header-bg{width: 280px !important; height: 10px !important;}
            .top-header-left{width: 260px !important; text-align: center !important;}
            .top-header-right{width: 260px !important;}
            .main-header{line-height: 28px !important; text-align: center !important;}
            .main-subheader{line-height: 28px !important; text-align: center !important;}
            
            /*------- header ----------*/
            .logo{width: 260px !important;}
            .nav{width: 260px !important;}
            
            .container{width: 397px !important;}
            .container-middle{width: 260px !important;}
            .mainContent{width: 240px !important;}
            
            .main-image{width: 240px !important; height: auto !important;}
            .banner{width: 240px !important; height: auto !important;}
            /*------ sections ---------*/
            .section-item{width: 240px !important;}
            .section-img{width: 240px !important; height: auto !important;}
            /*------- prefooter ------*/
            .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
            .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
            /*------- footer ------*/
            .top-bottom-bg{width: 260px !important; height: auto !important;}
            
	    }
		@media only screen and (max-width: 384px){
		.container {
			width: 367px !important;
		}
		}
		@media only screen and (max-width: 375px){
		.container {
			width: 358px !important;
		}
		}
		@media only screen and (max-width: 320px){
		.container {
			width: 303px !important;
		}
		}
    ::selection {
    background: #ff2f2f; /* WebKit/Blink Browsers */
    }
    ::-moz-selection {
    background: #ff2f2f; /* Gecko Browsers */
    }
    /* Responsive */
    @media only screen and (max-width:600px) {
    /* Tables
    parameters: width, alignment, padding */
     
    table[class=scale] { width: 100%!important; }
    table[class=scale-300] { width: 100%!important; height: 300px!important; }
    table[class=scale-90] { width: 90%!important; }
    /* Td */
    td[class=scale-left] { width: 100%!important; text-align: left!important;}
    td[class=scale-height] { height: 70px!important;}
    td[class=scale-left-bottom] { width: 100%!important; text-align: left!important; padding-bottom: 24px!important; }
    td[class=scale-left-top] { width: 100%!important; text-align: left!important; padding-top: 24px!important; }
    td[class=scale-left-all] { width: 100%!important; text-align: left!important; padding-top: 24px!important; padding-bottom: 24px!important; }
    td[class=scale-center] { width: 100%!important; text-align: center!important;}
    td[class=scale-center-both] { width: 100%!important; text-align: center!important; padding-left: 20px!important; padding-right: 20px!important; }
    td[class=scale-center-bottom] { width: 100%!important; text-align: center!important; padding-bottom: 24px!important; }
    td[class=scale-center-top] { width: 100%!important; text-align: center!important; padding-top: 24px!important; }
    td[class=scale-center-all] { width: 100%!important; text-align: center!important; padding-top: 24px!important; padding-bottom: 24px!important; padding-left: 20px!important; padding-right: 20px!important; }
    td[class=scale-right] { width: 100%!important; text-align: right!important;}
    td[class=scale-right-bottom] { width: 100%!important; text-align: right!important; padding-bottom: 24px!important; }
    td[class=scale-right-top] { width: 100%!important; text-align: right!important; padding-top: 24px!important; }
    td[class=scale-right-all] { width: 100%!important; text-align: right!important; padding-top: 24px!important; padding-bottom: 24px!important; }
    td[class=scale-center-bottom-both] { width: 100%!important; text-align: center!important; padding-bottom: 24px!important; padding-left: 20px!important; padding-right: 20px!important; }
    td[class=scale-center-top-both] { width: 100%!important; text-align: center!important; padding-top: 24px!important; padding-left: 20px!important; padding-right: 20px!important; }
    td[class=reset] { height: 0px!important; }
    td[class=scale-center-topextra] { width: 100%!important; text-align: center!important; padding-top: 84px!important; }
    img[class="reset"] { display: inline!important; }
    img[class="scale-inline"] { display: inline!important; }
    }
	    
    </style>
    

</head>
<body style="background:#f4f4f4">
   <table class="container" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                     <tbody><tr>
            <td mc:edit="copy1" height="35">&nbsp;</td>
        </tr>
               <tr bgcolor="314c67">
	                    <td style="background: rgb(1, 123, 139) none repeat scroll 0% 0%;" align="center">
	                    	<table class="container-middle" width="560" cellspacing="0" cellpadding="0" border="0" align="center">
	                    		<tbody><tr>
	                    			<td style="font-family: times new roman,serif; font-size: 30px; line-height: 30px; font-weight: 400; letter-spacing: 0.15em; text-transform: uppercase; color: rgb(255, 255, 255); text-align: center; padding: 20px 0px;">
					              
					          <p>Cygen Health Care          
					              
	                    			</p></td>
	                    		</tr>
	                    	</tbody></table>
	                    </td>
                    </tr>
             
                </tbody></table>
                
    <table class="scale" data-thumb="#" mc:variant="Header5314" mc:repeatable="Header5314" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
       
        <tbody><tr>
            <td>
                <table class="scale" style="" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                	<tbody><tr>
                		<td style="font-size: 1px" mc:edit="space" class="banner" height="30">
  
  
  <div style="text-align: center; padding: 20px 0px;">
  <a href="' . $actual_link . '" style="text-decoration: none;" >
  <span style="background: rgb(1, 123, 139) none repeat scroll 0px 0px; border: medium none; color: rgb(255, 255, 255); letter-spacing: 0.6px; text-transform: capitalize; border-radius: 5px; font-size: 18px; padding: 13px 58px;">Activation link</span>
  </a>
  </div>
  
  </td>
                	</tr>
                    <tr>
                        <td>
                            
                            
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
    <table class="scale" data-thumb="#" mc:variant="Intro8386" mc:repeatable="Intro8386" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody><tr>
            <td>
                <table class="scale" style="background-color: #FFFFFF" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody><tr>
                        <td mc:edit="space" height="50">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center">
                            <table class="scale-90" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody><tr>
                                    <td style="font-family: &quot;source_sans_prosemibold&quot;,Helvetica,Arial,sans-serif; font-size: 22px; color: rgb(1, 123, 139); text-transform: capitalize;" mc:edit="copy3" align="center">Welcome to cygen Health care</td>
                                </tr>
                                <tr>
                                    <td style="" valign="bottom" height="15">
                                        <table width="30" cellspacing="0" cellpadding="0" border="0" align="center">
                                            <tbody><tr>
                                                <td style="background-color: #3598DA; border-radius: 3px" height="3"></td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td mc:edit="space" height="30">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="font-family: source_sans_proregular, Helvetica, Arial, sans-serif; font-size: 14px; color: #1c1c1c; line-height: 28px;" mc:edit="copy4" align="center">HI, I AM '.$name_mailer.', YOUR FRIEND FROM CYGEN. PLEASE FOLLOW THROUGH BY CLICKING ON THE LINK TO ACTIVATE YOUR ACCOUNT.
</td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td valign="bottom" height="50">
                            <table class="scale-90" width="550" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody><tr>
                                    <td style="background-color: #E8E8E8" height="1">

  
</td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
    <table class="scale" data-thumb="#" mc:variant="Features3362" mc:repeatable="Features3362" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody><tr>
            <td>
                <table class="scale" style="background-color: #FFFFFF" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody><tr>
                        
                    </tr>
                    <tr>
                        
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
	<!-- What we do -->
    <table class="scale" data-thumb="#" mc:variant="Features3362" mc:repeatable="Features3362" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        </table>
	<!-- 2 column -->
	<!-- What we do -->
    <table class="scale" data-thumb="#" mc:variant="Features3362" mc:repeatable="Features3362" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody><tr>
            <td>
                <table class="scale" style="background-color: #FFFFFF" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                    
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
	<!-- What we do -->
    <table class="scale" data-thumb="#" mc:variant="Features3362" mc:repeatable="Features3362" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody><tr>
            <td>
                
            </td>
        </tr>
    </tbody></table>
	<!-- 2 column -->
	<!-- What we do -->
    <table class="scale" data-thumb="#" mc:variant="Features3362" mc:repeatable="Features3362" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody><tr>
            <td>
                <table class="scale" style="background-color: #FFFFFF" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody><tr>
                        
                    </tr>
                    <tr>
                        
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
	<!-- #### 2 col #### -->
    <table class="scale" data-thumb="#" mc:variant="2 col1990" mc:repeatable="2 col1990" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody><tr>
            <td>
                <table class="scale" style="background-color: #FFFFFF" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody><tr>
                        
                    </tr>
                    <tr>
                        
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
	<!-- FAQ Column -->
	<table class="container" width="620" cellspacing="0" cellpadding="0" border="0" bgcolor="ffffff" align="center">
					
					
					<!--------- main section --------->                	
                	<tbody><tr mc:repeatable="">
                		
                	</tr><!--------- end main section --------->
                	
                	
                	<tr></tr>
                	
                	
                	
                	<!--------- Features --------->
					<tr mc:repeatable="">
                		
					</tr>

					
					<tr mc:repeatable=""></tr> 


                	<tr><td height="5"></td></tr>
                	
                	
                	<!--------- imgae and text --------->
     
					<tr></tr>
					<!-- team-bottom -->
					
					<tr bgcolor="#fff">
						<td>
							<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							
								<tbody><tr>
									
								</tr>
								
								<tr>
									
								</tr>
								
								
							</tbody></table>
						</td>
					</tr>
					
				<!-- //team-bottom -->
				<tr mc:repeatable="">
                		
					</tr>
					
					<tr mc:repeatable=""></tr> 


                	<tr><td height="5">



</td></tr>
                	
				<!-- team-bottom -->
					
					<tr bgcolor="#fff">
						<td>
							<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							
								<tbody><tr>
									
								</tr>
								
								<tr>
									
								</tr>
								
								
							</tbody></table>
						</td>
					</tr>

					
				<!-- //team-bottom -->
                	
                </tbody></table>
                <!------------ end main Content ----------------->

	<!-- #### footer #### -->
    <table class="scale w3ls" data-thumb="#" style="background-color: #FFFFFF" mc:variant="Footer7059" mc:repeatable="Footer7059" width="620px" cellspacing="0" cellpadding="0" border="0" align="center">
        <!---------- prefooter  --------->
    	
                	<tbody><tr>
	                	<td>
	                		<table class="container-middle" width="560" cellspacing="0" cellpadding="0" border="0" align="center">
                	<tbody><tr bgcolor="ffffff"></tr>
	                			<tr>
<td style="line-height: 17px; height: 11px;" height="33"><br></td>
</tr>
<tr style="margin-top: 30px;">
<td class="gmail-content" style="font-family: times new roman,serif; font-size: 16px; line-height: 16px; font-weight: 400; letter-spacing: 0.15em; text-transform: uppercase; color: rgb(144, 140, 124);" valign="top" align="center">contacts</td>
</tr>
<tr>
<td style="line-height: 17px; height: 11px;" height="33"><br></td>
</tr>



<tr>
	                				<td valign="top" align="center">
<table cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="line-height: 0;" valign="top" align="center">
<a href="" style="text-decoration: none; display: inline-block;">
<img alt="socials1" src="http://livedemo00.template-help.com/newsletter_53125/images/socials1.png" width="42" height="42">
</a>
</td>
<td style="line-height: 0; padding: 0px 0px 0px 3px;" valign="top" align="center">
<a href="" style="text-decoration: none; display: inline-block;">
<img alt="socials2" src="http://livedemo00.template-help.com/newsletter_53125/images/socials2.png" width="42" height="42">
</a>
</td>


<td style="line-height: 0; padding: 0px 0px 0px 3px;" valign="top" align="center">
<a href="" style="text-decoration: none; display: inline-block;">
<img alt="socials5" src="http://livedemo00.template-help.com/newsletter_53125/images/socials5.png" width="42" height="42">
</a>
</td>
</tr>
</tbody></table>
</td>
	                			</tr>
	                		</tbody></table>
	                	</td>
                	</tr><!---------- end prefooter  --------->
                	
                </tbody></table><table class="container w3" width="620" cellspacing="0" cellpadding="0" border="0" align="center">
                	<tbody><tr bgcolor="ffffff"><td height="40"></td></tr>
                	<tr bgcolor="ffffff">
                		<td mc:edit="copy10" style="color: #939393; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;" class="prefooter-header" align="center">
	                		<multiline>
	    						We spend hours curating the best content and send it to you every week for Free. If you dont love it, <a href="#" style="text-decoration: none; color: #017b8b;">Unsubscribe</a> at any time.
	                		</multiline>
                		</td>
                	</tr>	
                	
                	<tr bgcolor="ffffff"><td height="30"></td></tr>
                	
                	<tr bgcolor="ffffff">
                		<td mc:edit="copy11" style="color: #939393; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;" class="prefooter-subheader" align="center">
	                		<multiline>
	                			<span style="color: #017b8b">Email :</span> info@cygengroup.com
	                			
	                		</multiline>
	                		
                		</td>
                	</tr>

<tr bgcolor="ffffff">
                		<td mc:edit="copy11" style="color: #939393; font-size: 11px; font-weight: normal; font-family: Helvetica, Arial, sans-serif; padding-top:15px" class="prefooter-subheader" align="center">
	                		<multiline>
	                			<!---<span style="color: #017b8b">Phone :</span> 0120-23444455---> 
	                			
	                		</multiline>
	                		
                		</td>
                	</tr>
                	
                	<tr bgcolor="ffffff"><td height="30"></td></tr>
                <!------------ end main Content ----------------->
                
                                
                 <!---------- footer  --------->
                	<tr bgcolor="#017b8b"><td height="14"></td></tr>
                	<tr bgcolor="#017b8b">
                		<td mc:edit="copy12" style="color: #fff; font-size: 10px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;" align="center">
                			
                				<a style="color:#fff; text-decoration:none;" href="https://w3layouts.com/" target="_blank">Copyright &copy; 2016 CyGen Group
                			
                		</a></td>
                	</tr>
					<tr bgcolor="#017b8b"><td height="14"></td></tr>
                	
              
                <!---------  end footer --------->

				<tr>
					<td mc:edit="space" height="35">&nbsp;</td>
				</tr>
			</tbody></table>
	  









<canvas id="colorPickerFrameCanvas" height="1" width="1"></canvas><canvas id="colorPickerFrameCanvas" height="1" width="1"></canvas><canvas id="colorPickerFrameCanvas" height="1" width="1"></canvas><canvas id="colorPickerFrameCanvas" height="1" width="1"></canvas>












</body>



</html>';
							//$htmlContent .= "Click this link to activate your account. " . $actual_link . "\r\n";
							//$htmlContent .= " Thanks & Regards \n  $name_mailer ";
							$headers .= "From: $name_mailer \r\n";
								if(mail($toEmail, $subject, $htmlContent, $headers))
								{
								$message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";	
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
				   else
				 {
					  $query = "INSERT INTO login_cygen(FullName,Phone,Password,SocialMediaType,ProfileImage,RoleId,Status)
										 VALUES('$FullName','$EmailOrPhone','$Password','LoginForm','imgdemo.png','3','0')";
										 $current_Id = $db_handle->insertQuery($query);
					if(!empty($current_Id)) {
						// sucessfully registerd using  mobile contact administartor for acount activation
						echo  5;
					}
					else{
						// error in registering user using mobile
						echo 6;
					}
				}
				}
				else
				{
					// already registerd
					echo 3;
				}
		
}
catch(Exception $e)
{
	echo -1;
}
?>
