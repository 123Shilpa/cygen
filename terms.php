<?php
$pagetitle = "";                  // (1) Set the title
include "header.php";                 // (2) Include the header
$db_handle = new DBController();

if(isset($_POST['submit']))
{
	$fname = addslashes($_POST['fname']);
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$subject = addslashes($_POST['subject']);
	$message = addslashes($_POST['message']);
	
try{
    if(mysql_query("INSERT INTO contact(FullName, Phone, Email, Subject, Message)  
                      VALUES('$fname','$phone','$email','$subject','$message')"))
	
	{
                        // mail to us 
                        $to      = 'info@cygengroup.com';
                        $subject = 'Query From Cygen Contact form';
                  
						$message='
						Name :- '.$fname.'	 							
						Email id :- '.$email.' 
						Phone :- '.$phone.'
						Subject :- '.$subject.'
						Message :- '.$message.'
						';
					    
                       $headers = 'From: ' .$email.
                       'Reply-To: test@cygengroup.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

                       if(mail($to, $subject, $message, $headers))
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Succesfully '); </SCRIPT>");
					   	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
	}
	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); </SCRIPT>");
}
catch (Exception $e)
{
 echo '<script>alert("Something went wrong please try again later");</script>';	
}}
?>
<style>
.article-header h1 {
    color: #404040;
    font-size: 32px;
    font-style: italic;
    font-weight: 700;
    letter-spacing: 0.6px;
    line-height: 62px;
    margin: 0 0 18px;
}

.rtx.control {
    font-size: 14px;
    letter-spacing: 0.6px;
    line-height: 28px;
	text-align: justify;
}

.rbi-rtx-inner li {
    margin-bottom: 10px;
}
.rbi-rtx-inner > ul {
    list-style: outside none none;
}
p strong {
    color: #606060;
    font-size: 15px;
}
</style>
<div id="contact" class="contact">
      <div class="container"> 
	 
        <!--terms & condition-->
        <div class="article-header">
									<h1 class="page-title" itemprop="headline">Terms & Conditions</h1>
		</div>
        
        
        <section class="entry-content clearfix" itemprop="articleBody">
		<div class="rtx control">
<div class="rbi-rtx-inner">

<p><strong>Contractual relationship</strong></p>

<p>The below-stated terms together we refer are the legal terms which are applied for the use of CyGen website, its services, and products whether as a guest user, registered user or any other individual. You are subjected to these terms while the use of the website (including browsing, accessing information or registering to use services we offer).
<br /> 
<br />
Please read the entire terms document carefully for future application. These terms are applicable to documentation, content and all shared information available on our website which includes but is not limited to the website logo, list of partners, services offered, graphics, images, video and all other media materials). 
<br /> 
<br />
By accessing the required information or registering yourself as a valuable user, you accept our terms; therefore you need to comply with these terms. Please note that we hold the authorization of changing these terms based upon the change of rules by Government or by our owners at any point in time. 
<br /> 
<br />
If you don’t agree to any of these terms, you are not eligible to use our website. Unless you are not agreed to our terms, CyGen team can deny the access to any or all of the services offered. We can share your details with third parties as per your agreement. If you are using services from a third party then it’s you and the service provider who are solely responsible in case of any conflict. CyGen is not responsible in any of such claims. All rights are granted to users accepting our terms as they are reserved. 
<br /> 
<br />
If you have any questions or queries about this or have any issue with our site, services or products, you can directly contact us. 
</p>



<p><strong> Services </strong> </p>
<p> The services here are related to all the treatment, medications and use of our platform for third party contracts which are provided for your use only.  We agree to provide you professional healthcare services as per your request. These all services will be provided in strict accordance with our proposed time and other constraints. YOU NEED TO ACKNOWLEDGE THAT CYGEN GROUP IS NOT RESPONSIBLE FOR ANY TYPE OF ISSUES, CONFLICTS or PROBLEMS GENERATED BY YOU AND THE THIRD PARTY. YOU INDEPENDENTLY ACCEPT THE USE OF THIRD PARTY AND HAVE TO DEAL WITH SUCH ISSUES AT YOUR OWN. WE SHALL NOT BE RESPONSIBLE FOR ANY TYPE OF ERRORS OR MISMANAGEMENT CAUSED BY THE THIRD PARTY.
<br /> 
<br />
We do not control or endorse third party services, therefore, you need to contact them directly at the time of conflicts.
 </p>



<p><strong>  Indemnity </strong> </p>
<p>
In order to receive services, you agree to indemnify and hold CyGen Group, its staff, employees, trustees, agents and higher officials from and against any losses, damages, costs, liabilities and expenses resulting in or have connection with any type of injury, property damage, breaching of our terms and violations of rights under this agreement.<br />
</p>

<p><strong> Use of Cookies </strong> </p>

<p>
CyGen website uses cookies in order to track the visitor’s information and know how they respond to our services. We use cookies to learn more about visitor’s behavior and provide the relevant information and services.
<br /> 
<br />
These cookies do not use any of your personal information but track your interest and do not link to any information collected. As per our privacy terms, we will only share this information as and when applicable. The cookies used by our website include <p>

<ul>

<li>•	Strictly necessary cookies </li>
<li>•	Performance/analytics cookies </li>
<li>•	Functionality cookies </li>
<li>•	Targeting cookies </li>

</ul>



</div>

</div>
								</section>
                                
                                
                                
        <!--terms & condition--> 
      </div>
    </div>
    
    <div class="clearfix"></div>

    <?php include('footer.php'); ?>