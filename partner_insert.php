<?php

include("config.php");
$db_handle = new DBController();
if (isset($_POST["submitdiagnostic"])) {

    $namediagnostic = addslashes($_POST['namediagnostic']);
    $address = addslashes($_POST['address']);
    $contacts = addslashes($_POST['contacts']);
    $doi = addslashes($_POST['doi']);
    $email = addslashes($_POST['email']);
    $registrationno = addslashes($_POST['registrationno']);
    $accreditation = addslashes($_POST['accreditation']);
    $headdiagnostic = addslashes($_POST['headdiagnostic']);
    $branches = addslashes($_POST['branches']);
    $reachbranches = addslashes($_POST['reachbranches']);
    $specializedbranch = addslashes($_POST['specializedbranch']);
	$qualification = addslashes($_POST['qualification']);
    $country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $Status = '0';


    try {
        if (mysql_query("INSERT INTO partner_diagnostic (NameOfDiagnostic, Address,Contacts, DateOfIncorporation, RegistrationNumber, 

AccreditationAndRecognisation, Headdiagnostic,Branches, NumberOfBranches,Country,State,City,SpecializedBranch,Status)  
                      VALUES

('$namediagnostic','$address','$contacts','$doi','$registrationno','$accreditation','$headdiagnostic','$reachbranches','$branches','$country','$state','$city','$specializedbranch','0

')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Login Crednital Of User';

            $message = '
      Name Of namediagnostic :- ' . $namediagnostic . '         
      Address :- ' . $address . ' 
      Contacts :- ' . $contacts . ' 
      DOI :- ' . $doi . ' 
      Email id :- ' . $email . ' 
      Registrationno :- ' . $registrationno . '
      Accreditation :- ' . $accreditation . '
      Headdiagnostic :- ' . $headdiagnostic . '
      Number of branches :- ' . $branches . '
      Number of reachbranches :- ' . $reachbranches . '
      Specializedbranch :- ' . $specializedbranch . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}

if (isset($_POST["submithospitals"])) {


    $namehospital = addslashes($_POST['namehospital']);
    $address = addslashes($_POST['address']);
    $contacts = addslashes($_POST['contacts']);
    $doi = addslashes($_POST['doi']);
    $registrationno = addslashes($_POST['registrationno']);
    $accreditation = addslashes($_POST['accreditation']);
    $headhospital = addslashes($_POST['headhospital']);
    $branches = addslashes($_POST['branches']);
    $reachbranches = addslashes($_POST['reachbranches']);
    $specializedbranch1 = addslashes($_POST['specializedbranch1']);
	    $country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $Status = '0';
    try {
        if (mysql_query("INSERT INTO partner_hospitals (NameOfHospital, Address,Contacts, DateOfIncorporation, RegistrationNumber, 

AccreditationAndRecognisation, HeadHospital,Branches,NumberOfBranches,SpecializedBranch,Country,State,City,Status)  
                      VALUES

('$namehospital','$address','$contacts','$doi','$registrationno','$accreditation','$headhospital','$reachbranches','$branches','$specializedbranch1','$country','$state','$city','0

')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Partner Hospital Crednital Of User';

            $message = '
						Name of Hospital :- ' . $namehospital . '	 			

						Address :- ' . $address . ' 
						Contacts :- ' . $contacts . '
						Date of incorporation :- ' . $doi . '
						Registration number :- ' . $registrationno . '
						Accreditation and Recognisation :- ' . $accreditation . '
						Head of the Hospital :- ' . $headhospital . '
						Number of Branches :- ' . $branches . '
						Reach / branches :- ' . $reachbranches . '
						Multi Specialty :- ' . $multi . '
						Specialized in particular branch :- ' . $specializedbranch . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}


if (isset($_POST["submitnurses"])) {

    $fname = addslashes($_POST['fname']);
    $gender = addslashes($_POST['gender']);
    $age = addslashes($_POST['age']);
    $dob = addslashes($_POST['dob']);
    $phone = addslashes($_POST['phone']);
    $email = addslashes($_POST['email']);
    $identity = addslashes($_POST['identity']);
    $qualification = addslashes($_POST['qualification']);
    $country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $description = $_POST['description'];
	    $country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $RoleId = '0';
    $Status = '0';


    try {

        if (mysql_query("INSERT INTO partner_nurses(FullName, Gender,Age,DOB,Number,Email,IdProof,Qualification,Country,State,City,Description,RoleId,Status)  
                      VALUES

('$fname','$gender','$age','$dob','$phone','$email','$identity','$qualification','$country','$state','$city','$description','0','0')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Partner Nurses Credentials Of User';

            $message = '
						Name :- ' . $fname . '	 					

		
						Email id :- ' . $email . ' 
						Mobile Number :- ' . $phone . '
						Gender :- ' . $gender . '
						Age :- ' . $age . '
						DOB :- ' . $dob . '
						Qualification :- ' . $qualification . '
						Identity Proof Number :- ' . $identity . '
						Location :- ' . $location . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}

if (isset($_POST["submitnutridiet"])) {

    $fname = addslashes($_POST['fname']);
    $gender = addslashes($_POST['gender']);
    $age = addslashes($_POST['age']);
    $dob = addslashes($_POST['dob']);
    $phone = addslashes($_POST['phone']);
    $email = addslashes($_POST['email']);
    $identity = addslashes($_POST['identity']);
    $designation = addslashes($_POST['designation']);
    $qualification = addslashes($_POST['qualification']);
    $description = $_POST['description'];
	    $country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $RoleId = '0';
    $Status = '0';


    try {

        if (mysql_query("INSERT INTO partner_nutridiet(FullName, Gender,Age,DOB,Number,Email,IdProof,Designation,Qualification,Description,Country, State, City,RoleId,Status)  
                      VALUES('$fname','$gender','$age','$dob','$phone','$email','$identity','$designation','$qualification','$description', '$country', '$state', '$city','0','0')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Partner Nutritionist Credentials Of User';

            $message = '
       Name :- ' . $fname . '   
		Gender :- ' . $gender . '
		Age :- ' . $age . '
		DOB :- ' . $dob . '     
		   Phone :- ' . $phone . '
		Email id :- ' . $email . ' 
		   Identity :- ' . $identity . '
		Designation :-' . $designation . '  
       Qualification :- ' . $qualification . '
       Description :- ' . $description . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}


if (isset($_POST["submitsupplier"])) {

	$fullname = addslashes($_POST['fullname']);
    $phone = addslashes($_POST['phone']);
    $email = addslashes($_POST['email']);
    $identity = addslashes($_POST['identity']);
    $product = addslashes($_POST['product']);
    $country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $website = addslashes($_POST['website']);
    $description = $_POST['description'];
	$country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $RoleId = '0';
    $Status = '0';


    try {

        if (mysql_query("INSERT INTO partner_supplier_ind(FullName,Number,Email,IdProof,CompanyProduct,Country,State,City,Website,Description,RoleId,Status)  
                      VALUES

('$fullname','$phone','$email','$identity','$product','$country','$state','$city','$website','$description','0','0')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Partner Individual Supplier Credentials Of User';

            $message = '
      Mobile Number :- ' . $phone . '
     DOB :- ' . $dob . '
     Email id :- ' . $email . ' 
     Identity Proof Number :- ' . $identity . '   
     Name of  Company :- ' . $company . '   
     Name of  product :- ' . $product . '   
     Name of  country :- ' . $country . '   
     Name of  state :- ' . $state . '   
     Name of  city :- ' . $city . '   
      Name Of website :- ' . $website . '
     Description :- ' . $description . '

      Location :- ' . $location . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}

if (isset($_POST["submitsupplierscompany"])) {


    $CompanyName = addslashes($_POST['CompanyName']);
    $CompanyProduct = addslashes($_POST['CompanyProduct']);
    $Phone = addslashes($_POST['Phone']);
    $Email = addslashes($_POST['Email']);
    $CompanyIdentification = addslashes($_POST['CompanyIdentification']);
    $DOI = addslashes($_POST['DOI']);
    $Country = addslashes($_POST['Country']);
    $State = addslashes($_POST['State']);
    $City = addslashes($_POST['City']);
    $Address = addslashes($_POST['Address']);
    $Website = addslashes($_POST['Website']);
    //$city = addslashes($_POST['city']);
    $Status = '0';
    try {
        if (mysql_query("INSERT INTO partner_supplier_company (CompanyName, CompanyProduct, Phone, Email, CompanyIdentification, DOI, Country , State, City, Address, Website,Status)VALUES('$CompanyName','$CompanyProduct','$Phone','$Email','$CompanyIdentification','$DOI','$Country', '$State', '$City', '$Address','$Website','0')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Partner Supplier Company Crednital Of User';

            $message = '
      Name of suppliers Company :- ' . $fname . '         
      Gender :- ' . $gender . ' 
      Age :- ' . $age . ' 
      Date of Birth :- ' . $dob . ' 
      Phone :- ' . $phone . '
      Email :- ' . $email . '
      Identity :- ' . $identity . '
      Date of company :- ' . $company . '
      Qualification :- ' . $qualification . '
      Date of country :- ' . $country . '
      Date of state :- ' . $state . '
      Date of city :- ' . $city . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}


if (isset($_POST["submitphysiotherapy"])) {


    $namediagnostic = addslashes($_POST['namediagnostic']);
    $address = addslashes($_POST['address']);
    $contacts = addslashes($_POST['contacts']);
	$doi = addslashes($_POST['doi']);
    $registrationno = addslashes($_POST['registrationno']);
    $accreditation = addslashes($_POST['accreditation']);
    $headdiagnostic = addslashes($_POST['headdiagnostic']);
    $branches = addslashes($_POST['branches']);
    $reachbranches = addslashes($_POST['reachbranches']);
    $specializedbranch2 = addslashes($_POST['specializedbranch2']);
	$country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $Status = '0';


    try {
        if (mysql_query("INSERT INTO partner_physiotherapy (NameOfPhysiotherapyCenter, Address,Contacts, DateOfIncorporation, RegistrationNumber, 

AccreditationAndRecognisation, headdiagnostic, Branches,NumberOfBranches,SpecializedBranch,Country, State, City,Status)  
                      VALUES('$namediagnostic','$address','$contacts','$doi','$registrationno','$accreditation','$headdiagnostic','$branches','$reachbranches','$specializedbranch2', '$country', '$state', '$city','0')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Login Crednital Of User';

            $message = '
      Name Of Center :- ' . $namediagnostic . '         
      Address :- ' . $address . ' 
      Contacts :- ' . $contacts . ' 
      DOI :- ' . $doi . ' 
      Email id :- ' . $email . ' 
      Registrationno :- ' . $registrationno . '
      Accreditation :- ' . $accreditation . '
      Headdiagnostic :- ' . $headdiagnostic . '
      Number of branches :- ' . $branches . '
      Number of reachbranches :- ' . $reachbranches . '
      Specializedbranch :- ' . $specializedbranch . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}


if (isset($_POST["submitYoga"])) {
	
    $NameOfcenter = addslashes($_POST['NameOfcenter']);
    $Address = addslashes($_POST['Address']);
    $Contacts = addslashes($_POST['Contacts']);
    $DateOfIncorporation = addslashes($_POST['DateOfIncorporation']);
    $RegistrationNumber = addslashes($_POST['RegistrationNumber']);
    $AccreditationAndRecognisation = addslashes($_POST['AccreditationAndRecognisation']);
    $Headdiagnostic = addslashes($_POST['Headdiagnostic']);
    $NumberOfBranches = addslashes($_POST['NumberOfBranches']);
	$Branches = addslashes($_POST['Branches']);
    $Country = addslashes($_POST['Country']);
    $State = addslashes($_POST['State']);
    $City = addslashes($_POST['City']);
	$SpecializedBranch = addslashes($_POST['SpecializedBranch']);
    $Status = '0';  


    try {
        if (mysql_query("INSERT INTO partner_yoga_gym (NameOfcenter,Address,Contacts,DateOfIncorporation, RegistrationNumber, AccreditationAndRecognisation,Headdiagnostic,Branches,NumberOfBranches,Country, State, City,SpecializedBranch,Status)                      VALUES('$NameOfcenter','$Address','$Contacts','$DateOfIncorporation','$RegistrationNumber','$AccreditationAndRecognisation','$Headdiagnostic','$Branches','$NumberOfBranches', '$Country', '$State', '$City','$SpecializedBranch','0')"))
					  {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Login Crednital Of User';

            $message = '
      Name Of Center :- ' . $namediagnostic . '         
      Address :- ' . $address . ' 
      Contacts :- ' . $contacts . ' 
      DOI :- ' . $doi . ' 
      Email id :- ' . $email . ' 
      Registrationno :- ' . $registrationno . '
      Accreditation :- ' . $accreditation . '
      Headdiagnostic :- ' . $headdiagnostic . '
      Number of branches :- ' . $branches . '
      Number of reachbranches :- ' . $reachbranches . '
      Specializedbranch :- ' . $specializedbranch . '';

            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}



if (isset($_POST["submithealth"])) {


    $fname = addslashes($_POST['fname']);
    $gender = addslashes($_POST['gender']);
    $age = addslashes($_POST['age']);
    $dob = addslashes($_POST['dob']);
    $phone = addslashes($_POST['phone']);
    $email = addslashes($_POST['email']);
    $idhel = addslashes($_POST['idhel']);
	$country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $Status = '0';
    try {
		$query = "INSERT INTO partner_health (FirstName, Gender, Age, Dob, Phone, Email, Identification,Country, State, City, Status) VALUES ('$fname', '$gender','$age','$dob','$phone', '$email', '$idhel', '$country', '$state', '$city','0')";
		//echo $query;
        if (mysql_query($query)) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Partner Health Crednital Of User';

            $message = '
      First Name :- ' . $fname . '  
      Gender :-' . $gender . '   
      Age :- ' . $age . ' 
      Date Of Birth :- ' . $dob . '
      Phone :- ' . $phone . '
      Email :- ' . $email . '
      idhel :- ' . $idhel . '';


            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert');</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}


if (isset($_POST["submitfitness"])) {


    $fname = addslashes($_POST['fname']);
    $gender = addslashes($_POST['gender']);
    $age = addslashes($_POST['age']);
    $dob = addslashes($_POST['dob']);
    $phone = addslashes($_POST['phone']);
    $email = addslashes($_POST['email']);
	$identity = addslashes($_POST['identity']);
    $qualification = addslashes($_POST['qualification']);
	$country = addslashes($_POST['country']);
    $state = addslashes($_POST['state']);
    $city = addslashes($_POST['city']);
    $Status = '0';
    try {
        if (mysql_query("INSERT INTO partner_fitness (FirstName, Gender, Age, Dob, Phone, Email,IdProof, Qualification,Country, State, City, Status)                      VALUES('$fname','$gender','$age','$dob','$phone','$email','$identity','$qualification', '$country', '$state', '$city','0')")) {
            // mail to us 
            $to = 'info@cygengroup.com';
            $subject = 'Partner Fitness Crednital Of User';

            $message = '
      First Name :- ' . $fname . '  
      Gender :-' . $gender . '   
      Age :- ' . $age . ' 
      Date Of Birth :- ' . $dob . '
      Phone :- ' . $phone . '
      Email :- ' . $email . '
      Qualification :- ' . $qualification . '';


            $headers = 'From: ' . $email .
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}

if (isset($_POST["submit_special_doc"])) {

 $fname = addslashes($_POST['fname']);
 $gender = addslashes($_POST['gender']);
 $age = addslashes($_POST['age']);
 $dob = addslashes($_POST['dob']);
 $phone = addslashes($_POST['phone']);
 $email = addslashes($_POST['email']);
 $identity = addslashes($_POST['identity']);
 $qualification = addslashes($_POST['qualification']);
 $companyname = addslashes($_POST['companyname']);
 $companyproduct = addslashes($_POST['companyproduct']);
 $designation = addslashes($_POST['designation']);
 $website = addslashes($_POST['website']);    
 $country = addslashes($_POST['country']);    
 $state = addslashes($_POST['state']);    
 $city = addslashes($_POST['city']);    
 $RoleId = '0';
 $Status = '0';
 
 //var_dump($_POST); die;


try{
  
    if(mysql_query("INSERT INTO partner_specialist_doctors (Name,Gender,Age,Dob,Phone,Email,IdProof,Qualification,Specialization,PracticingHospital,Designation,Website,Country, State, City,RoleId,Status)     
                      VALUES
('$fname','$gender','$age','$dob','$phone','$email','$identity','$qualification','$companyname','$companyproduct','$designation','$website','$country','$state','$city','0','0')"))   
 
 {
                        // mail to us 
                        $to      = 'info@cygengroup.com';
                        $subject = 'Special Doctor Crednital Of User';
                  
      $message='
      First Name :- '.$fname.'  
	  Gender :-'.$gender.'   
      Age :- '.$age.' 
      Date Of Birth :- '.$dob.'
      Phone :- '.$phone.'
      Email :- '.$email.'
      Identity :- '.$identity.'
      Qualification :- '.$qualification.'
      Name of companyname :- '.$companyname.'
      CompanyProduct :- '.$companyproduct.'
      Designation :- '.$designation.'
      Name of website :- '.$website.'';
     
         
                       $headers = 'From: ' .$email.
                    'Reply-To: test@cygengroup.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            if (mail($to, $subject, $message, $headers))
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Submited Successfully '); 

window.location.href='partner.php';</SCRIPT>");
            else
                echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Insert 

Successfully but Error in sending mail.'); window.location.href='partner.php';</SCRIPT>");
        } else
            echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Error in insert'); 

window.location.href='partner.php';</SCRIPT>");
    } catch (Exception $e) {
        echo '<script>alert("Something went wrong please try again later");</script>';
    }
}
?>