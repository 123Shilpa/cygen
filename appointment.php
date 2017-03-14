<?php
include("config.php");
$db_handle = new DBController();

if(isset($_POST['submit']))
{
	$fname = addslashes($_POST['fname']);
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$select_dep = addslashes($_POST['select_dep']);
	$datepick =  addslashes($_POST['datepick']); 

try{
		if(mysql_query("INSERT INTO appointment(Department, FullName, Mobile, Email, AppointmentDate)  
                        VALUES('$select_dep','$fname','$phone','$email','$datepick')"))
						{
		
         // mail to us 
                        $to      = 'info@cygengroup.com';
                        $subject = 'Appointment Book by Customer';
                  
						$message='
						Department :- '.$select_dep.'	
						Full Name :- '.$fname.' 						
						Email id :- '.$email.' 
						Phone :- '.$phone.'
						Date Of Appointment :- '.$datepick.'
						';
					    
                        $headers = 'From: ' . $email .
                       'Reply-To: test@cygengroup.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

                       if(mail($to, $subject, $message, $headers))
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Appointment Book Succesfully '); window.location.href='index.php';</SCRIPT>");
					   	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert Successfully but Error in sending mail.'); window.location.href='index.php';</SCRIPT>");
	}
	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); </SCRIPT>");
}
catch (Exception $e)
{
 echo '<script>alert("Something went wrong please try again later");</script>';	
}}
?>
