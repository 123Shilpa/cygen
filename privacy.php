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
</style><div id="contact" class="contact">
      <div class="container"> 
	 
        <!--terms & condition-->
        <div class="article-header">
									<h1 class="page-title" itemprop="headline">Privacy Policy</h1>
		</div>
        
        
        <section class="entry-content clearfix" itemprop="articleBody">
		<div class="rtx control">
<div class="rbi-rtx-inner">

<p><strong>Use of Personal information</strong></p>
<p>In offering you with our healthcare services, CyGen may handle your personal information as per the agreed terms and requirement. Personal information here is subject to your name, contact details, services used by you and your medical history. Depending upon the use of our services, some information may be sensitive which will only be shared with personnel whom you agree to correspond with. <br> <br> By sharing your information with CyGen, you consent to use of data as referred to our security policy and cookies. If we make any changes to the given information, it will be done by your permission or by informing you about it. If we make changes in our process of gathering data, we will update the same on our website. Therefore it is advisable to check back regularly for such updates.</p>
<p><strong>Your confidential Medical information</strong></p>
<p>The confidentiality of personal information of our valuable clients and customers is a paramount concern for CyGen. We comply with laws of the government of India and Malaysia and these all fall under the confidentiality guidelines proposed by both governments respectively.  Your confidential will only be shared and disclosed with medical representatives whom you choose or those who are involved in your treatment. If any of our services is transferred to a new provider, we many then share your personal information with the new provider.</p>
<p><strong>Security of shared information</strong></p>
<p>We follow the guidelines of Government and therefore committed to keeping your personal information secure. We do not sell your data in any regards and have put up all operational, physical and electronic mediums to safeguard your information in all respect. All our staff takes it as their legal duty to respect the confidentiality of your information and make it restricted to use only for your treatment. </p>

<p><strong>Your information we hold</strong></p>

<ul>
    
  <li>•	Basic details such as name, address, contact details </li>
  <li>•	Details of contact we have had with you such as referrals and quotes</li>  
  <li>•	Details of services you have received</li>
  <li>•	Your experience, feedback and treatment outcome information </li>
  <li>•	Information related to complaints and incidents</li>
  <li>•	Notes and reports about your health and any treatment and care you have received or need, including home, clinic or hospital, visits</li>
  <li>•	Recordings of calls we receive or make</li>
  <li>•	Information received from other sources, including from your use of websites and other digital platforms we (or our group companies) operate or the other services we provide, information from business partners, advertising networks, analytics providers, or information provided by other companies who have obtained your permission to share information about you.
    </li>
</ul>

<p> Please note all this information is collected by various mediums which include your application for our services, referral by friend or relative, your sign-in to our website, your query, in case your fall under the corporate scheme or from a medical representative. </p>

<p> <strong> Why we store your information </strong> </p>
<p> We store your information for any or all of the following reasons </p>



<ul>

<li> •	In response to your queries for our services including the quote </li>
<li> •	To support you with your healthcare  </li>
<li> •	To maintain an internal record  </li>
<li> •	To check the accuracy of information about you, and the quality of treatment or care, including auditing medical and billing information </li>
<li> •	For supporting your doctor, nurse, caretaker or other health care professional </li>
<li> •	Using your contact information to send you service related information </li>
<li> •	Using your contact information to send promotional material about new products, special offers or other information we think you may find interesting (see ‘Keeping you informed’ below for more information) </li>


</ul>


We will keep your information as soon as long as it is necessary or in accordance with Indian Government and Federal Government of Malaysia. 
<br />
<br />
Your information will only be shared by the companies and medical representatives associated with CyGen Group as per the agreement. Your information can be shared in aggregate forms with the associated service providers falling under CyGen Group.
<br />
<br />
If you have any queries in regards to data protection and security, kindly contact our team at --------.


</div>

</div>
								</section>
                                
                                
                                
        <!--terms & condition--> 
      </div>
    </div>
    
    <div class="clearfix"></div>

    <?php include('footer.php'); ?>