<?php
include ('header_user.php');
include ('left_sidebar_user.php');

$query = "SELECT * FROM profilereport WHERE PatientId='".$_SESSION['PatientId']."' ";
$result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['PersonalDetails'] = $row['PersonalDetails'];
            $_SESSION['Demography'] = $row['Demography'];
            $_SESSION['HealthHistory'] = $row['HealthHistory'];
            $_SESSION['PastMedicalHistory'] = $row['PastMedicalHistory'];
            $_SESSION['MedicationLog'] = $row['MedicationLog'];
            $_SESSION['SupplementLog'] = $row['SupplementLog'];
            $_SESSION['DailyMedicationLog'] = $row['DailyMedicationLog'];
            $_SESSION['FamilyMedicalHistory'] = $row['FamilyMedicalHistory'];
            $_SESSION['CardiacSymptoms'] = $row['CardiacSymptoms'];
            $_SESSION['AlcoholStatus'] = $row['AlcoholStatus'];
            $_SESSION['SmokingStatus'] = $row['SmokingStatus'];
            $_SESSION['DietaryInformation'] = $row['DietaryInformation'];
            $_SESSION['VitaminInformation'] = $row['PersonalDetails'];
            $_SESSION['ConfidentialLifeStyle'] = $row['ConfidentialLifeStyle'];

        }
$PersonalDetails                     = $_SESSION['PersonalDetails'];
$Demography                          = $_SESSION['Demography'];
$HealthHistory                       = $_SESSION['HealthHistory'];
$PastMedicalHistory                  = $_SESSION['PastMedicalHistory'];
$MedicationLog                       = $_SESSION['MedicationLog'];
$SupplementLog                       = $_SESSION['SupplementLog'];
$DailyMedicationLog                  = $_SESSION['DailyMedicationLog'];
$FamilyMedicalHistory                = $_SESSION['FamilyMedicalHistory'];
$CardiacSymptoms                     = $_SESSION['CardiacSymptoms'];
$AlcoholStatus                       = $_SESSION['AlcoholStatus'];
$SmokingStatus                       = $_SESSION['SmokingStatus'];
$DietaryInformation                  = $_SESSION['DietaryInformation'];
$VitaminInformation                  = $_SESSION['VitaminInformation'];
$ConfidentialLifeStyle               = $_SESSION['ConfidentialLifeStyle'];

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
<!-- page content -->
<style>
.col-lg-6.col-md-6.col-sm-6.col-xs-12 {
    font-size: 21px;
}
</style>
<div class="right_col" role="main">
<div class="profile">
<div class="person-info col-lg-12" style="padding: 10px 56px;">
                                    <h3 class="person-info-title">Profile Percentage</h3>
    
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Your percentage of profile completenes is </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $percentage ?>%</div>  
<div class="clearfix"></div>
<br><br><br>


<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div class="c100 p<?php echo $percentage ?> green">
  <span><?php echo $percentage ?>%</span>
  <div class="slice">
    <div class="bar"></div>
    <div class="fill"></div>
  </div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div class="c100 p<?php echo $percentage ?> orange">
  <span><?php echo $percentage ?>%</span>
  <div class="slice">
    <div class="bar"></div>
    <div class="fill"></div>
  </div>
</div>
</div> 
</div> 
<div class="clearfix"></div>
<br><br><br>


 <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
<?php
echo "Your percentage of profile completenes is".$percentage."%";
             echo "<div style='width:100px; background-color:white; height:30px; border:1px solid #000;'>
             <div style='width:".$percentage."px; background-color:red; height:30px;'></div></div>";
			 ?>
</div>
<div class="clearfix"></div>
<br><br><br>




<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
<div style="background:red;border:1px solid;">
        <div style="width:<?=$percentage?>%;background:green;color:#fff;padding:10px;">
            <?=$percentage?>    
        </div>
   </div>
</div>
</div>
<div class="clearfix"></div>

</div>
</div>
<?php include ('footer_user.php'); ?>