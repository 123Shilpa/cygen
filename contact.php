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
.row.hs_mission.our_text.text-center li {
    margin-bottom: 13px;
	list-style-type: none;
}
.row.hs_details.our_text1.text-center li {
    list-style-type: none;
    margin-bottom: 9px;
}

</style>
<div id="contact" class="contact">
      <div class="container"> 
	   <div class="heading">Contact Us</div>
        <!--Up Coming Events start-->
        <form method="post" action="">
                <div>
                 <div class="col-lg-7 c0l-md-7 c0l-sm-7 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Your Name*</label>
                      <input type="name" required="required" class="form-control" id="fname" name="fname">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Email id*</label>
                      <input type="email" required="required" class="form-control" id="email" name="email">
                    </div>
                    
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Phone No*</label>
                      <input type="Phone No" required="required" class="form-control" id="Phone No" name="phone">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 frm_txt">
                      <label for="subject">Subject</label>
                      <input type="subject" required="required" class="form-control" id="subject" name="subject">
                    </div>
                  </div>
                 </div>
                 <div class="col-lg-5 c0l-md-5 c0l-sm-5 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Description*</label>
                      <textarea class="form-control" required="required" name="message" rows="6" id="comment"></textarea>
                    </div>
                   </div>
                 </div>
               </div>
              <div class="col-lg-12">
                <button type="submit" name="submit" class="btn btn-default submit">Submit</button>
              </div>
              <div class="clearfix"></div>
            </form>
        <!--Up Coming Events end--> 
      </div>
    </div>
    
    <div class="clearfix"></div>

    <?php include('footer.php'); ?>