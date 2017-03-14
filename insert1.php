<?php
include("config.php");
//var_dump($_POST);
if (isset($_POST["submitdiagnostic"]) || isset($_POST["submithospitals"])) {

	$fname = addslashes($_POST['fname']);
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$gender = addslashes($_POST['gender']);
	$age = addslashes($_POST['age']);
	$password = addslashes($_POST['password']);
	$dob = addslashes($_POST['dob']);
	$identity = addslashes($_POST['identity']);
	$company = addslashes($_POST['company']);
	$qualification = addslashes($_POST['qualification']);
	$designation = addslashes($_POST['designation']);
	$location = addslashes($_POST['location']);
	$website = addslashes($_POST['website']);
	$product = addslashes($_POST['product']);
	$RoleId = '0';
	$Status = '0';
try{
    if(mysql_query("INSERT INTO login_user(FullName, Gender,Phone, Age, DOB, IdentityProofNumber, CompanyName,Email,Password,Qualification,Designation,Location,Website,CompanyProducts,RoleId,Status)  
                      VALUES('$fname','$gender','$phone','$age','$dob','$identity','$company','$email','$password','$qualification','$designation','$location','$website','$product','0','0')"))
	
	{
                        // mail to us 
                        $to      = 'info@cygengroup.com';
                        $subject = 'Login Crednital Of User';
                  
						$message='
						Name :- '.$fname.'	 							
						Email id :- '.$email.' 
						Password :- '.$password.'
						Mobile Number :- '.$phone.'
						Gender :- '.$gender.'
						Age :- '.$age.'
						DOB :- '.$dob.'
						Qualification :- '.$qualification.'
						Designation :- '.$designation.'
						Identity Proof Number :- '.$identity.'
						Company Name :- '.$company.'
						Location :- '.$location.'
						Website :- '.$website.'
						CompanyProducts :- '.$product.'';
					    
                       $headers = 'From: ' .$email.
                       'Reply-To: test@cygengroup.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

                       if(mail($to, $subject, $message, $headers))
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Succesfully '); window.location.href='partner.php';</SCRIPT>");
					   	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
	}
	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); window.location.href='partner.php';</SCRIPT>");
}
catch (Exception $e)
{
 echo '<script>alert("Something went wrong please try again later");</script>';	
}
	$namehospital = addslashes($_POST['namehospital']);
	$address = addslashes($_POST['address']);
	$contacts = addslashes($_POST['contacts']);
	$doi = addslashes($_POST['doi']);
	$registrationno = addslashes($_POST['registrationno']);
	$accreditation = addslashes($_POST['accreditation']);
	$headhospital = addslashes($_POST['headhospital']);
	$branches = addslashes($_POST['branches']);
	$reachbranches = addslashes($_POST['reachbranches']);
	$multi = addslashes($_POST['multi']);
	$specializedbranch = addslashes($_POST['specializedbranch']);
	$Status = '0';
try{
    if(mysql_query("INSERT INTO hospitals (NameOfHospital, Address,Contacts, DateOfIncorporation, RegistrationNumber, AccreditationAndRecognisation, HeadHospital,Branches,NumberOfBranches,MultiSpecialized,SpecializedBranch,Status)  
                      VALUES('$namehospital','$address','$contacts','$doi','$registrationno','$accreditation','$headhospital','$branches','$reachbranches','$multi','$specializedbranch','0')"))
	
	{
                        // mail to us 
                        $to      = 'shyamgupta047@gmail.com';
                        $subject = 'Partner Hospital Crednital Of User';
                  
						$message='
						Name of Hospital :- '.$namehospital.'	 							
						Address :- '.$address.' 
						Contacts :- '.$contacts.'
						Date of incorporation :- '.$doi.'
						Registration number :- '.$registrationno.'
						Accreditation and Recognisation :- '.$accreditation.'
						Head of the Hospital :- '.$headhospital.'
						Number of Branches :- '.$branches.'
						Reach / branches :- '.$reachbranches.'
						Multi Specialty :- '.$multi.'
						Specialized in particular branch :- '.$specializedbranch.'';
					    
                       $headers = 'From: ' .$email.
                       'Reply-To: test@cygengroup.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

                       if(mail($to, $subject, $message, $headers))
                        echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Succesfully '); window.location.href='partner.php';</SCRIPT>");
					   	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
	}
	else echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); window.location.href='partner.php';</SCRIPT>");
}
catch (Exception $e)
{
 echo '<script>alert("Something went wrong please try again later");</script>';	
}


}
?>