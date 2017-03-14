<?php
session_start();
//include ('session.php');
include("config.php"); 
$db_handle = new DBController();

$query = "SELECT * FROM profilereport WHERE PatientId='".$_SESSION['PatientId']."' ";
$result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {

            $PersonalDetails = $row['PersonalDetails'];
            $Demography = $row['Demography'];
            $HealthHistory = $row['HealthHistory'];
            $PastMedicalHistory = $row['PastMedicalHistory'];
            $MedicationLog = $row['MedicationLog'];
            $SupplementLog = $row['SupplementLog'];
            $DailyMedicationLog = $row['DailyMedicationLog'];
            $FamilyMedicalHistory = $row['FamilyMedicalHistory'];
            $CardiacSymptoms = $row['CardiacSymptoms'];
            $AlcoholStatus = $row['AlcoholStatus'];
            $SmokingStatus = $row['SmokingStatus'];
            $DietaryInformation = $row['DietaryInformation'];
            $VitaminInformation = $row['PersonalDetails'];
            $ConfidentialLifeStyle = $row['ConfidentialLifeStyle'];

        }

$maximumPoints  = 100;
$percentage = ($PersonalDetails   +   
$Demography           +
$HealthHistory        +
$PastMedicalHistory   +
$MedicationLog        +
$SupplementLog        +
$DailyMedicationLog   +
$FamilyMedicalHistory +
$CardiacSymptoms      +
$AlcoholStatus        +
$SmokingStatus        +
$DietaryInformation   +
$VitaminInformation   +
$ConfidentialLifeStyle)*$maximumPoints/100;	

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cygen</title>
        <link rel="stylesheet" href="css/circle.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--<link href="css/font-awesome.css" rel="stylesheet">-->
       <link rel="icon" href="images/fav.png" sizes="16x16" />
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!--<script src="js/jquery.min.js"></script>-->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script type="text/javascript" src="js/hello.all.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" type="application/javascript"></script>
      	<script src="js/jquery.validate.min.js"></script>
        <script src="js/additional-methods.min.js"></script>
		
<script type='application/javascript'>
$(document).ready(function() {
	
    $("#menu_toggle").click(function(){

		if ($(".top-user .nav_menu").css("margin-left")=="0px") 
		$(".top-user .nav_menu").css("margin-left","130px"),$(".top-user .nav_menu").css("width","100%");
				else
				$(".top-user .nav_menu").css("margin-left","0px");
		});		 
		}); 
		
</script>

</head>

<body class="nav-md user01" id="mrg-left">
    <div class="container body">
        <div class="main_container">
		
