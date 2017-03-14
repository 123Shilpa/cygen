<?php

include ('header_user.php');
include ('left_sidebar_user.php');

function getExtension($str) {
    $i = strrpos($str, ".");
    if (!$i) {
        return "";
    }
    $l = strlen($str) - $i;
    $ext = substr($str, $i + 1, $l);
    return $ext;
}

$Id = null;
if (!empty($_GET['Id'])) {
    $Id = $_REQUEST['Id'];
}

if (null == $Id) {
    //	header("Location: customer.php");
}
if (!empty($_POST)) {
    // keep track validation errors
    // keep track post values
   $Occupation=$_POST['Occupation'];
	//$OccuptaionLevel=$_POST['OccuptaionLevel'];
	$WorkDesk=$_POST['WorkDesk'];
	$ComputerTime=$_POST['ComputerTime'];
	$SeatTime=$_POST['SeatTime'];
	$DailyActive=$_POST['DailyActive'];
	$WeightConsider=$_POST['WeightConsider'];
	$MostWeighed=$_POST['MostWeighed'];
		$Height=$_POST['Height'];
		$HeightInch=$_POST['HeightInch'];
	$WeightCurrent=$_POST['WeightCurrent'];

	$WaistRatioCurrent=$_POST['WaistRatioCurrent'];
	$BmiCurrent=$_POST['BmiCurrent'];

	$SleepEveryday=$_POST['SleepEveryday'];

	$Understress=$_POST['Understress'];
	
		$UnderstressYes = $_POST['UnderstressYes'];
	

	$ExerciseProgramme=$_POST['ExerciseProgramme'];
	$PersonalTrainer=$_POST['PersonalTrainer'];

	$RecentIntakePlan=$_POST['RecentIntakePlan'];
	$CupCoffee=$_POST['CupCoffee'];
	$SugarAmount=$_POST['SugarAmount'];
	$CupTea=$_POST['CupTea'];
	$Chocolates=$_POST['Chocolates'];
	$GlassCoke=$_POST['GlassCoke'];
	$Sweets=$_POST['Sweets'];
	$GlassMilk=$_POST['GlassMilk'];
	
	$GlassWater=$_POST['GlassWater'];
	 $Status = '0';

    // validate input
    // update data
    //if ($valid) {
     $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $sql = "INSERT INTO confidential_lifestyle (PatientId , Occupation ,WorkDesk , UnderstressYes, ComputerTime ,SeatTime ,DailyActive, WeightConsider ,MostWeighed , Height, HeightInch, WeightCurrent,WaistRatioCurrent,BmiCurrent,SleepEveryday,Understress,ExerciseProgramme,PersonalTrainer,RecentIntakePlan,Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $Occupation,  $WorkDesk, $UnderstressYes, $ComputerTime, $SeatTime, $DailyActive, $WeightConsider,$MostWeighed, $Height, $HeightInch, $WeightCurrent, $WaistRatioCurrent, $BmiCurrent,$SleepEveryday,$Understress,$ExerciseProgramme,$PersonalTrainer,
	$RecentIntakePlan,$Status));
		
	$sql = "INSERT INTO daily_dietary_intake (PatientId , CupCoffee ,SugarAmount ,CupTea , Chocolates , GlassCoke , Sweets, GlassMilk , GlassWater, Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,  ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $CupCoffee, $SugarAmount, $CupTea, $Chocolates, $GlassCoke, $Sweets, $GlassMilk, $GlassWater,$Status));
		
	$sql = "UPDATE profilereport set ConfidentialLifeStyle = ? WHERE PatientId=?";
	$q = $pdo->prepare($sql);
	$q->execute(array(7, $_SESSION['PatientId']));
	
    Database::disconnect();
    echo "<script type = 'text/javascript'>alert('Successfully inserted'); window.location = 'report.php'; </script>";
	}

?>
<script type="text/javascript">
    $(document).ready(function () {
        $(".questionary-box input[type=checkbox]").click(function () {
            if ($(this).prop("checked"))
                $(this).parent().children(".chktext").show();
            else
                $(this).parent().children(".chktext").hide();
        });
    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#editProfileDiv").hide();
        $("#btnProfile").click(function () {
            $("#profileDiv").hide();
            $("#editProfileDiv").show();
        });
        // $("#btnSaveNext").click(function () {
        // // $("#profileDiv").show();
        // // $("#editProfileDiv").show();
        // });
        $('input:radio[name=optradio]').click(function () {
            var radioValue = $("input[name='optradio']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType").show();
            } else {
                $("#SpecializedType").hide();
            }
        });
    });
</script>
<style>
    .tittle {
        color: #017b8b;
        font-size: 22px;
        letter-spacing: 0.6px;
        margin-bottom: 20px;
    }
    .btn {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.6px;
        line-height: 30px;
        padding: 5px 25px !important;
    }
</style>

<script type = "text/javascript">
function bmi()
{
	debugger;
 var weight = document.getElementById("w1").value;
 var height_feet = document.getElementById("h1").value;
 var height_inch = document.getElementById("h2").value;
 
 // BMI = 
 
 var total_inch = parseInt(height_feet) * 12 + parseInt(height_inch) ;
 
 var total_meter = total_inch * 0.0254 ;
 
 var bmi = parseFloat(weight) / (total_meter * total_meter );
 
 document.getElementById("bmi1").value = bmi;
 
}
</script>
<?php
        $squery = "SELECT * FROM confidential_lifestyle where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>
<!-- page content -->

<div class="right_col" role="main">
        <form class="form-horizontal" enctype="multipart/form-data" name="confidentiallifestyle" id="vitamin_information" method="post">
            <div class="profile info-head">
			<div class="row pull-right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<input type="submit" name="submit"  class="form-continue"  value="Save &amp; Continue">

                    </div>
                </div>
                <h3> Confidential lifestyle </h3>                           
				
<div>
<br>
<div class="Sub-head">Occupation</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Select your Occupation   </div>
 <select class="form-control occupation" id="slider_select_dep" name="Occupation">
 <option value="">SELECT</option>
   <option value="ACCOUNTING">ACCOUNTING</option>
 <option value="AVIATION">AVIATION</option>
  <option value="ALTERNATIVE DISPUTE RESOLUTION">ALTERNATIVE DISPUTE RESOLUTION</option>
  <option value="ALTERNATIVE MEDICINE">ALTERNATIVE MEDICINE</option>
  <option value="ANIMATION">ANIMATION</option>
  <option value="APPAREL & FASHION">APPAREL & FASHION</option>
  <option value="ARCHITECTURE & PLANNING">ARCHITECTURE & PLANNING</option>
  <option value="ARTS AND CRAFTS">ARTS AND CRAFTS</option>
  <option value="AUTOMOTIVE">AUTOMOTIVE</option>
    <option value="AVIATION & AEROSPACE">AVIATION & AEROSPACE</option>
  <option value="BANKING">BANKING</option>
  <option value="BIOTECHNOLOGY">BIOTECHNOLOGY</option>
    <option value="BROADCAST MEDIA">BROADCAST MEDIA</option>
  <option value="BUILDING MATERIALS">BUILDING MATERIALS</option>
  <option value="BUSINESS SUPPLIERS AND EQUIPMENT">BUSINESS SUPPLIERS AND EQUIPMENT</option>
   <option value="CAPITAL MARKETS">CAPITAL MARKETS</option>
  <option value="CHEMICALS">CHEMICALS</option>
  <option value="CLERK">CLERK</option>
  <option value="CIVIC & SOCIAL ORGANIZATION">CIVIC & SOCIAL ORGANIZATION</option>
  <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
  <option value="COMMERCIAL REAL STATE">COMMERCIAL REAL STATE</option>
  <option value="COMPUTER AND NETWORK SECURITY">COMPUTER AND NETWORK SECURITY</option>
  <option value="COMPUTER GAMES">COMPUTER GAMES</option>
  <option value="COMPUTER HARDWARE">COMPUTER HARDWARE</option>
  <option value="COMPUTER NETWORKING">COMPUTER NETWORKING</option>
  <option value="COMPUTER SOFTWARE">COMPUTER SOFTWARE</option>
  <option value="CONSTRUCTION">CONSTRUCTION</option>
  <option value="CONSUMER ELECTRONICS">CONSUMER ELECTRONICS</option>
  <option value="CONSUMER GOODS">CONSUMER GOODS</option>
  <option value="CONSUMER SERVICES">CONSUMER SERVICES</option>
  <option value="COSMETICS">COSMETICS</option>  
  <option value="DAIRY">DAIRY</option>
  <option value="DEFENCE AND SPACE">DEFENCE AND SPACE</option>
  <option value="DESIGN">DESIGN</option>
  <option value="EDUCATION MANAGEENT">EDUCATION MANAGEENT </option>
  <option value="E-LEARNING">E-LEARNING</option>
    <option value="ELECTRICAL/ELECTRONIC MANUFACTURING">ELECTRICAL/ELECTRONIC MANUFACTURING</option>
  <option value="ENTERTAINMENT">ENTERTAINMENT</option>
  <option value="ENVIRONMENTAL SERVICES">ENVIRONMENTAL SERVICES</option>
  <option value="EVENTS SERVICES">EVENTS SERVICES</option>
  <option value="EXECUTIVE OFFICE">EXECUTIVE OFFICE</option>
  <option value="FACILITES SERVICES">FACILITES SERVICES</option>
  <option value="FARMING">FARMING</option>
  <option value="FINANCIAL SERVICES">FINANCIAL SERVICES</option>
  <option value="FINE ART">FINE ART</option>
  <option value="FISHERY">FISHERY</option>
  <option value="FOOD&BEVERAGES">FOOD&BEVERAGES</option>
  <option value="FOOD PRODUCTION">FOOD PRODUCTION</option>
  <option value="FUND-RAISING">FUND-RAISING</option>
  <option value="FURNITURE">FURNITURE</option>
  <option value="GAMBLING&CASINOS">GAMBLING&CASINOS</option>
  <option value="GLASS,CERAMICS&CONCRETE">GLASS,CERAMICS&CONCRETE</option>
  <option value="GOVERNMENT ADMINISTRATION">GOVERNMENT ADMINISTRATION</option>
  <option value="GRAPHIC DESIGN">GRAPHIC DESIGN</option>
  <option value="HEALTH,WELLNESS AND FITNESS">HEALTH,WELLNESS AND FITNESS</option>
  <option value="HIGHER EDUCATION">HIGHER EDUCATION</option>
  <option value="HOSPITAL AND HEALTH CARE">HOSPITAL AND HEALTH CARE</option>
  <option value="HOSPITALITY">HOSPITALITY</option>
  <option value="HUMAN RESOURCES">HUMAN RESOURCES</option>
  <option value="IMPORT AND EXPORT">IMPORT AND EXPORT</option>
  <option value="INDIVIDUAL & FAMILY SERVICES">INDIVIDUAL & FAMILY SERVICES</option>
  <option value="INDUSTRIAL AUTOMATIVE">INDUSTRIAL AUTOMATIVE</option>
  <option value="INFORMATION SERVICES">INFORMATION SERVICES </option>
  <option value="INFORMATION TECHNOLOGY AND SERVICES">INFORMATION TECHNOLOGY AND SERVICES </option>
  <option value="INSURANCE">INSURANCE </option>
  <option value="INTERNATIONAL TRADE AND DEVELOPMENT">INTERNATIONAL TRADE AND DEVELOPMENT </option>
  <option value="INVESTMENT BANKING">INVESTMENT BANKING </option>
  <option value="INVESTMENT MANAGEMENT">INVESTMENT MANAGEMENT </option>
  <option value="JUDICIARY">JUDICIARY</option>
  <option value="LAW ENFORCEMENT">LAW ENFORCEMENT </option>
  <option value="LEGAL SERVICES">LEGAL SERVICES </option>
  <option value="LEGISLATIVE OFFICE">LEGISLATIVE OFFICE </option>
  <option value="LEISURE,TRAVEL AND TOURISM">LEISURE,TRAVEL AND TOURISM </option>
  <option value="LIBRARIES">LIBRARIES</option>
  <option value="LUXURY GOODS ABD JEWELRY">LUXURY GOODS ABD JEWELRY</option>
  <option value="MACHINERY">MACHINERY </option>
  <option value="MANAGEMENT CONSULTING">MANAGEMENT CONSULTING </option>
  <option value="MARITIME">MARITIME </option>
  <option value="MARKETING AND ADVERTISING">MARKETING AND ADVERTISING </option>
  <option value="MARKET RESEARCH">MARKET RESEARCH </option>
  <option value="MECHANICAL OR INDUSTRIAL ENGINEERING">MECHANICAL OR INDUSTRIAL ENGINEERING </option>
  <option value="MEDIA PRODUCTION">MEDIA PRODUCTION </option>
  <option value="MEDIAL DEVICES">MEDIAL DEVICES </option>
  <option value="MEDICAL PRACTICE">MEDICAL PRACTICE</option>
  <option value="MENTAL HEALTH CARE">MENTAL HEALTH CARE </option>
  <option value="MILITARY">MILITARY </option>
  <option value="MINING & METALS">MINING & METALS</option>
  <option value="MOTION PICTURES AND FILM">MOTION PICTURES AND FILM </option>
  <option value="MUSEUMS AND INSTITUTIONS">MUSEUMS AND INSTITUTIONS</option>
  <option value="MUSIC">MUSIC</option>
  <option value="NEWASPAPERS">NEWASPAPERS</option>
  <option value="NONPROFIT ORGANZTION MANAGEMENT">NONPROFIT ORGANZTION MANAGEMENT</option>
  <option value="OIL & ENERGY">OIL & ENERGY</option>
  <option value="ONLINE MEDIA">ONLINE MEDIA </option>
  <option value="OUTSOURCING/OFFSHORING">OUTSOURCING/OFFSHORING</option>
  <option value="PACKAGING AND CONTAINERS">PACKAGING AND CONTAINERS</option>
  <option value="PHARMACEUTICALS">PHARMACEUTICALS</option>
  <option value="POLITICAL ORGANIZATION">POLITICAL ORGANIZATION</option>
  <option value="PRINTING">PRINTING </option>
  <option value="PROFESSIONAL TRAINING AND COACHING">PROFESSIONAL TRAINING AND COACHING</option>
  <option value="PROGRAM DEVELOPMENT">PROGRAM DEVELOPMENT</option>
  <option value="PUBLIC POLICY">PUBLIC POLICY </option>
  <option value="PUBLIC RELATIONS AND COMUNICATIONS">PUBLIC RELATIONS AND COMUNICATIONS </option>
  <option value="PUBLIC SAFETY">PUBLIC SAFETY</option>
  <option value="PUBLISHING">PUBLISHING</option>
  <option value="RAILROAD MANUFACTURE">RAILROAD MANUFACTURE</option>
  <option value="REAL ESTATE">REAL ESTATE</option>
  <option value="RELIGIOUS INSTITUTIONS">RELIGIOUS INSTITUTIONS</option>
  <option value="RESEARCH">RESEARCH</option>
  <option value="RETAIL">RETAIL </option>
  <option value="SECURITY AND INVESTIGATIONGS">SECURITY AND INVESTIGATIONGS </option>
  <option value="SHIPBUILDING">SHIPBUILDING</option>
  <option value="SPORTING GOODS">SPORTING GOODS</option>
  <option value="STAFFING AND RECURITING">STAFFING AND RECURITING</option>
  <option value="SUPERMARKETS">SUPERMARKETS</option>
  <option value="TELECOMMUNICATIONS">TELECOMMUNICATIONS </option>
  <option value="TEXTILES">TEXTILES</option>
  <option value="TOBACCO">TOBACCO</option>
  <option value="TRANSPORTATION">TRANSPORTATION</option>
  <option value="UTILITES">UTILITES</option>
  <option value="VENTURE CAPITAL&PRIVATE EQUITY">VENTURE CAPITAL&PRIVATE EQUITY</option>
  <option value="VETERINARY">VETERINARY</option>
  <option value="WAREHOUSING">WAREHOUSING</option>
  <option value="WHOLESALE">WHOLESALE</option>
  <option value="WIRELESS">WIRELESS</option>
  <option value="WRITING AND EDITING">WRITING AND EDITING</option>                                 
 </select> 
 <span class="occupation-error" style="color:red;display:none">Please select occupation</span>
          
</div>


</div>
</div>
</div>

<div class="Sub-head">Do you have an ergonomically set up desk/workstation?  </div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<div class="questionary-box">

                            <div class="questionary-opt">

<div class="select-items specialty_radio">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input class="speciality questionary-radio" name="WorkDesk" value="Yes" id="chkYes" type="radio"> Yes</div>

<div class="clearfix"></div>
</div>

<div class="specialty_radio">
<input class="speciality questionary-radio" name="WorkDesk" value="No" type="radio"> No</div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <span class="work-error" style="color:red;display:none">Please select Workstation</span>
</div>
</div>




<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">How many hours   do you spend in front of a computer?   </div>
 <select class="form-control ComputerTime" id="slider_select_dep" name="ComputerTime">
                                    <option value="0">Option</option>
                              		<option value="0-1 hour per day">0-1 hour per day   </option>
                                    <option value="1-2 hours per day">1-2 hours per day   </option>
                                    <option value="2-3 hours per day">2-3 hours per day   </option>
                                    <option value="3-4 hours per day">3-4 hours per day    </option>
                                    <option value="4-5 hours per day">4-5 hours per day   </option>
                                    <option value="5-6 hours per day">5-6 hours per day   </option>
                                    <option value="6-7 hours per day">6-7 hours per day   </option>
                                    <option value="7-8 hours per day">7-8 hours per day    </option>
                                    <option value="8-9 hours per day">8-9 hours per day   </option>
                                    <option value="9-10 hours per day">9-10 hours per day   </option>
                                    <option value="10-11 hours per day">10-11 hours per day   </option>
                                    <option value="11-12 hours per day">11-12 hours per day   </option>
                                    <option value="12-13 hours per day">12-13 hours per day   </option>
                                    <option value="13-14 hours per day">13-14 hours per day   </option>
                                    <option value="14-15 hours per day">14-15 hours per day   </option>
                                    <option value="15-16 hours per day">15-16 hours per day    </option>
                                    <option value="16-17 hours per day">16-17 hours per day   </option>
                                    <option value="17-18 hours per day">17-18 hours per day   </option>
                                    <option value="18-19 hours per day">18-19 hours per day   </option>
                                    <option value="19-20 hours per day">19-20 hours per day    </option>
                                    <option value="20-21 hours per day">20-21 hours per day   </option>
                                    <option value="21-22 hours per day">21-22 hours per day   </option>
                                    <option value="22-23 hours per day">22-23 hours per day   </option>
                                    <option value="23-24 hours per day">23-24 hours per day    </option>
 </select>   
 <span class="ComputerTime-error"style="color:red;display:none">Please select this field</span>          
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">How much time do you spend in a seated position?   </div>
 <select class="form-control SeatTime" id="slider_select_dep" name="SeatTime">
                                    <option value="">Select</option>
                              		<option value="0-1 hour per day">0-1 hour per day   </option>
                                    <option value="1-2 hours per day">1-2 hours per day   </option>
                                    <option value="2-3 hours per day">2-3 hours per day   </option>
                                    <option value="3-4 hours per day">3-4 hours per day    </option>
                                    <option value="4-5 hours per day">4-5 hours per day   </option>
                                    <option value="5-6 hours per day">5-6 hours per day   </option>
                                    <option value="6-7 hours per day">6-7 hours per day   </option>
                                    <option value="7-8 hours per day">7-8 hours per day    </option>
                                    <option value="8-9 hours per day">8-9 hours per day   </option>
                                    <option value="9-10 hours per day">9-10 hours per day   </option>
                                    <option value="10-11 hours per day">10-11 hours per day   </option>
                                    <option value="11-12 hours per day">11-12 hours per day   </option>
                                    <option value="12-13 hours per day">12-13 hours per day   </option>
                                    <option value="13-14 hours per day">13-14 hours per day   </option>
                                    <option value="14-15 hours per day">14-15 hours per day   </option>
                                    <option value="15-16 hours per day">15-16 hours per day    </option>
                                    <option value="16-17 hours per day">16-17 hours per day   </option>
                                    <option value="17-18 hours per day">17-18 hours per day   </option>
                                    <option value="18-19 hours per day">18-19 hours per day   </option>
                                    <option value="19-20 hours per day">19-20 hours per day    </option>
                                    <option value="20-21 hours per day">20-21 hours per day   </option>
                                    <option value="21-22 hours per day">21-22 hours per day   </option>
                                    <option value="22-23 hours per day">22-23 hours per day   </option>
                                    <option value="23-24 hours per day">23-24 hours per day    </option>
 </select>  
  <span class="SeatTime-error"style="color:red;display:none">Please select this field</span>          
 
           
</div>




</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="Sub-head">On a scale of 1 to 10 (1=not active, 10=very active) please rate how active you are on a daily  basis?  </div>
 <select class="form-control DailyActive" id="slider_select_dep" name="DailyActive">
                                    <option value="">Option</option>
                               		<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                  
 </select>   
   <span class="DailyActive-error"style="color:red;display:none">Please select this field</span>          
          
</div>






</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">What ideal weight you would like to achieve ? </div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<input placeholder=" " class="form-control text" id="txt1" name="WeightConsider" type="text">
<span class="WeightConsider-error" style="color:red;display:none">This field is required</span>
</div>
</div>
              
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">What is the heaviest weight you achieve till yet?    </div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<input placeholder=" " class="form-control text" id="txt1" name="MostWeighed" type="text">
<span class="MostWeighed-error" style="color:red;display:none">This field is required</span>

</div>
</div>
              
</div>
</div>


<div class="row">


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="Sub-head"> Height   </div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

 <select class="form-control Height" id="h1" name="Height">
                                   
                                   <option value="">SelectFeet</option>
                               		<option value="1 Feet">1 Feet</option>
                                    <option value="2 Feet">2 Feet</option>
                                    <option value="3 Feet">3 Feet </option>
                                    <option value="4 Feet">4 Feet </option>
                                    <option value="5 Feet">5 Feet </option>
                                    <option value="6 Feet">6 Feet </option>
                                    <option value="7 Feet">7 Feet </option>
                                    <option value="8 Feet">8 Feet </option>
                                    <option value="9 Feet">9 Feet </option>
                                    <option value="10 Feet">10 Feet </option>
                                   
 </select>  
    <span class="Height-error"style="color:red;display:none">Please select this field</span>          

            
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

 <select class="form-control HeightInch" id="h2" name="HeightInch">
                                    <option value="">Select Inch</option>
                               		<option value="1 Inch">1 Inch</option>
                                    <option value="2 Inch">2 Inch</option>
                                    <option value="3 Inch">3 Inch  </option>
                                    <option value="4 Inch">4 Inch    </option>
                                    <option value="5 Inch">5 Inch </option>
                                    <option value="6 Inch">6 Inch  </option>
                                    <option value="7 Inch">7 Inch  </option>
                                    <option value="8 Inch">8 Inch </option>
                                    <option value="9 Inch">9 Inch </option>
                                    <option value="10 Inch">10 Inch </option>
                                     <option value="11 Inch">11 Inch </option>
                                    <option value="12 Inch">12 Inch </option>
                                   
 </select>  
     <span class="HeightInch-error" style="color:red;display:none">Please select this field</span>          

            
</div>
</div>
              
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Current Weight    </div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<input placeholder=" " class="form-control text" id="w1" name="WeightCurrent" type="text" onblur = "bmi()">
<span class="WeightCurrent-error" style="color:red;display:none">This field is required</span>

</div>
</div>
              
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head"> Current Hip-Waist Ratio </div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<input placeholder=" " class="form-control text" id="txt1" name="WaistRatioCurrent" type="text">
<span class="WaistRatioCurrent-error" style="color:red;display:none">This field is required</span>

</div>
</div>
              
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Current BMI  </div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<input placeholder=" " class="form-control text" id="bmi1" name="BmiCurrent" type="text">
<span class="BmiCurrent-error" style="color:red;display:none">This field is required</span>

</div>
</div>
              
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head"> How many hours sleep do you get every day?  </div>
<select class="form-control SleepEveryday" id="slider_select_dep" name="SleepEveryday">
                                    <option value="">Select</option>
                               		<option value="0-1 hour per day">0-1 hour per day   </option>
                                    <option value="1-2 hours per day">1-2 hours per day   </option>
                                    <option value="2-3 hours per day">2-3 hours per day   </option>
                                    <option value="3-4 hours per day">3-4 hours per day    </option>
                                    <option value="4-5 hours per day">4-5 hours per day   </option>
                                    <option value="5-6 hours per day">5-6 hours per day   </option>
                                    <option value="6-7 hours per day">6-7 hours per day   </option>
                                    <option value="7-8 hours per day">7-8 hours per day    </option>
                                    <option value="8-9 hours per day">8-9 hours per day   </option>
                                    <option value="9-10 hours per day">9-10 hours per day   </option>
                                    <option value="10-11 hours per day">10-11 hours per day   </option>
                                    <option value="11-12 hours per day">11-12 hours per day   </option>
                                    <option value="12-13 hours per day">12-13 hours per day   </option>
                                    <option value="13-14 hours per day">13-14 hours per day   </option>
                                    <option value="14-15 hours per day">14-15 hours per day   </option>
                                    <option value="15-16 hours per day">15-16 hours per day    </option>
                                    <option value="16-17 hours per day">16-17 hours per day   </option>
                                    <option value="17-18 hours per day">17-18 hours per day   </option>
                                    <option value="18-19 hours per day">18-19 hours per day   </option>
                                    <option value="19-20 hours per day">19-20 hours per day    </option>
                                    <option value="20-21 hours per day">20-21 hours per day   </option>
                                    <option value="21-22 hours per day">21-22 hours per day   </option>
                                    <option value="22-23 hours per day">22-23 hours per day   </option>
                                    <option value="23-24 hours per day">23-24 hours per day    </option>
 </select>
     <span class="SleepEveryday-error"style="color:red;display:none">Please select this field</span>          

              
</div>
</div>


  
                    
<div>
<div class="Sub-head">Do you consider yourself to be under stress?  </div>
<div class="questionary-box">

                            <div class="questionary-opt UnderStress">

<div class="select-items specialty_radio">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input class="speciality questionary-radio" name="Understress" value="Yes" id="chkYes" type="radio"> Yes</div>
<span id="UnderStressspan" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<input class="form-control text understress-text" name="UnderstressYes" placeholder="Provide details" type="text" value="<?php echo $UnderstressYes; ?>">
</span>
<div class="clearfix"></div>
</div>

<div class="specialty_radio">
<input class="speciality questionary-radio" name="Understress" value="No" type="radio"> No</div>

                            </div>
<span class="UnderStress-error"style="color:red;display:none">Please select this field</span>
                            <div class="clearfix"></div>
                        </div>
<div class="clearfix"></div>
</div> 

<div>
<div class="Sub-head">Are you currently involved in any exercise programme?  </div>
<div class="questionary-box">

                            <div class="questionary-opt exercise">

<div class="select-items specialty_radio">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input class="speciality questionary-radio" name="ExerciseProgramme" value="Yes" id="chkYes" type="radio"> Yes</div>
<span id="exercisespan" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<!--<input class="form-control text" name="ExerciseProgramme" placeholder="list how long and what type of exercises" type="text">-->
</span>
<div class="clearfix"></div>
</div>

<div class="specialty_radio">
<input class="speciality questionary-radio" name="ExerciseProgramme" value="No" type="radio"> No</div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
  <span class="exercise-error" style="display:none; color:red">Please select this field</span>
<div class="clearfix"></div>
</div>

                    
<div>
<div class="Sub-head">Have you ever had a personal trainer?  </div>
<div class="questionary-box">

                            <div class="questionary-opt trainer">

<div class="select-items specialty_radio">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input class="speciality questionary-radio" name="PersonalTrainer" value="Yes" type="radio"> Yes</div>
<span id="trainerspan" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<!--<input class="form-control text" name="PersonalTrainer" placeholder="Provide details of when and for how long? " type="text">-->
</span>
<div class="clearfix"></div>
</div>

<div class="specialty_radio">
<input class="speciality questionary-radio" name="PersonalTrainer" value="No" type="radio"> No</div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
           <span class="PersonalTrainer-error" style="display:none; color:red">Please select this field</span>
               
<div class="clearfix"></div>
</div> 



<div>
<div class="Sub-head">Do you follow, or have you recently followed, any specific dietary intake plan, and in general how do you feel about your nutritional habits?  </div>
<div class="questionary-box">

<div class="questionary-opt habits">

<div class="select-items specialty_radio">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input class="speciality questionary-radio" name="RecentIntakePlan" value="Yes" type="radio"> Yes</div>
<span id="habitsspan" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<!--<input class="form-control text" name="RecentIntakePlan" placeholder="Provide details of when and for how long? " type="text">-->
</span>
<div class="clearfix"></div>
</div>

<div class="specialty_radio">
<input class="speciality questionary-radio" name="RecentIntakePlan" value="No" type="radio"> No</div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                                   <span class="RecentIntakePlan-error" style="display:none; color:red">Please select this field</span>

</div>
	
                
                
                
</div>
            
<div>
<h3> Daily Dietary Intake  </h3>
            
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">No. of cups of coffee  </div>
 <select class="form-control CupCoffee" id="slider_select_dep" name="CupCoffee">
                                    <option value="">Option</option>                                           
                              		<option value="0-1 cup per day">	0-1 cup per day   </option>
                                    <option value="1-2 cup per day ">  	1-2 cup per day   </option>
                                    <option value="2-3 cup per day">   2-3 cup per day   </option>
                                    <option value="3-4 cup per day">	3-4 cup per day    </option>
                                    <option value="4-5 cup per day">	4-5 cup per day   </option>
                                    <option value="5-6 cup per day">  	5-6 cup per day   </option>
                                    <option value="6-7 cup per day">   6-7 cup per day   </option>
                                    <option value="7-8 cup per day">	7-8 cup per day    </option>
                                    <option value="8-9 cup per day">	8-9 cup per day   </option>
                                    <option value="9-10 cup per day">  	9-10 cup per day   </option>
                                    <option value="10-11 cup per day">   10-11 cup per day   </option>
                                    <option value="11-12 cup per day">	11-12 cup per day   </option>
                                    <option value="12-13 cup per day">	12-13 cup per day   </option>
                                    <option value="13-14 cup per day">  	13-14 cup per day   </option>
                                    <option value="14-15 cup per day">   14-15 cup per day   </option>
                                    <option value="15-16 cup per day">	15-16 cup per day    </option>
                                    <option value="16-17 cup per day">	16-17 cup per day   </option>
                                    <option value="17-18 cup per day">  	17-18 cup per day   </option>
                                    <option value="18-19 cup per day">   18-19 cup per day   </option>
                                    <option value="19-20 cup per day">	19-20 cup per day    </option>
                                   
 </select>   
  <span class="CupCoffee-error"style="color:red;display:none">Please select this field</span>          
          
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Amount of sugar </div>
 <select class="form-control SugarAmount" id="slider_select_dep" name="SugarAmount">
                                    <option value="">Option</option>
                              		<option value="0-1 teaspoon per day">	0-1 teaspoon per day   </option>
                                    <option value="1-2 teaspoon per day">  	1-2 teaspoon per day   </option>
                                    <option value="2-3 teaspoon per day">   2-3 teaspoon per day   </option>
                                    <option value="3-4 teaspoon per day">	3-4 teaspoon per day    </option>
                                    <option value="4-5 teaspoon per day">	4-5 teaspoon per day   </option>
                                    <option value="5-more teaspoon per day">  	5-more teaspoon per day   </option>                                   
 </select> 
     <span class="SugarAmount-error"style="color:red;display:none">Please select this field</span>             
</div>




</div>            

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">No. of cups of tea  </div>
 <select class="form-control CupTea" id="slider_select_dep" name="CupTea">
                                    <option value="">Option</option>
                              		<option value="0-1 cup per day">	0-1 cup per day   </option>
                                    <option value="1-2 cup per day">  	1-2 cup per day   </option>
                                    <option value="2-3 cup per day">   2-3 cup per day   </option>
                                    <option value="3-4 cup per day">	3-4 cup per day    </option>
                                    <option value="4-5 cup per day">	4-5 cup per day   </option>
                                    <option value="5-6 cup per day">  	5-6 cup per day   </option>
                                    <option value="6-7 cup per day">   6-7 cup per day   </option>
                                    <option value="7-8 cup per day">	7-8 cup per day    </option>
                                    <option value="8-9 cup per day">	8-9 cup per day   </option>
                                    <option value="9-10 cup per day">  	9-10 cup per day   </option>
                                    <option value="10-11 cup per day">   10-11 cup per day   </option>
                                    <option value="11-12 cup per day">	11-12 cup per day   </option>
                                    <option value="12-13 cup per day">	12-13 cup per day   </option>
                                    <option value="13-14 cup per day">  	13-14 cup per day   </option>
                                    <option value="14-15 cup per day">   14-15 cup per day   </option>
                                    <option value="15-16 cup per day">	15-16 cup per day    </option>
                                    <option value="16-17 cup per day">	16-17 cup per day   </option>
                                    <option value="17-18 cup per day">  	17-18 cup per day   </option>
                                    <option value="18-19 cup per day">   18-19 cup per day   </option>
                                    <option value="19-20 cup per day">	19-20 cup per day    </option>
                                   
 </select>   
   <span class="CupTea-error"style="color:red;display:none">Please select this field</span>           
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Chocolates  </div>
 <select class="form-control Chocolates" id="slider_select_dep" name="Chocolates">
                                    <option value="">Option</option>
                              		<option value="0gm-25gm per day">	0gm-25gm per day    </option>
                                    <option value="25gm-50gm per day">  	25gm-50gm per day   </option>
                                    <option value="50gm-75gm per day">   50gm-75gm per day   </option>
                                    <option value="75gm-100gm per day">	75gm-100gm per day    </option>
                                    <option value="100gm-125gm per day ">	100gm-125gm per day   </option>
                                    <option value="125gm-150gm per day">  	125gm-150gm per day   </option>
                                    <option value="150gm-175gm per day">   150gm-175gm per day   </option>
                                    <option value="175gm-200gm per day">	175gm-200gm per day    </option>
                                    <option value="200gm-225gm per day">	200gm-225gm per day   </option>
                                     <option value="225gm-250gm per day">	225gm-250gm per day    </option>
                                    <option value="250gm-more per day">	250gm-more per day   </option>
                                                              
 </select>    
   <span class="Chocolates-error"style="color:red;display:none">Please select this field</span>          
</div>




</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Glasses of Coke/Soda   </div>
 <select class="form-control GlassCoke" id="slider_select_dep" name="GlassCoke">
                                    <option value="">Option</option>
                              		<option value="0-1 cup per day">	0-1 cup per day   </option>
                                    <option value="1-2 cup per day">  	1-2 cup per day   </option>
                                    <option value="2-3 cup per day">   2-3 cup per day   </option>
                                    <option value="3-4 cup per day">	3-4 cup per day    </option>
                                    <option value="4-5 cup per day">	4-5 cup per day   </option>
                                    <option value="5-6 cup per day">  	5-6 cup per day   </option>
                                    <option value="6-7 cup per day">   6-7 cup per day   </option>
                                    <option value="7-8 cup per day">	7-8 cup per day    </option>
                                    <option value="8-9 cup per day">	8-9 cup per day   </option>
                                    <option value="9-10 cup per day">  	9-10 cup per day   </option>
                                    <option value="10-11 cup per day">   10-11 cup per day   </option>
                                    <option value="11-12 cup per day">	11-12 cup per day   </option>
                                    <option value="12-13 cup per day">	12-13 cup per day   </option>
                                    <option value="13-14 cup per day">  	13-14 cup per day   </option>
                                    <option value="14-15 cup per day">   14-15 cup per day   </option>
                                    <option value="15-16 cup per day">	15-16 cup per day    </option>
                                    <option value="16-17 cup per day">	16-17 cup per day   </option>
                                    <option value="17-18 cup per day">  	17-18 cup per day   </option>
                                    <option value="18-19 cup per day">   18-19 cup per day   </option>
                                    <option value="19-20 cup per day">	19-20 cup per day    </option>
                                   
 </select>   
     <span class="GlassCoke-error"style="color:red;display:none">Please select this field</span>          
          
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Sweets  </div>
 <select class="form-control Sweets" id="slider_select_dep" name="Sweets">
                                    <option value="">Option</option>
                              		<option value="0gm-25gm per day">	0gm-25gm per day    </option>
                                    <option value="25gm-50gm per day">  	25gm-50gm per day   </option>
                                    <option value="50gm-75gm per day">   50gm-75gm per day   </option>
                                    <option value="75gm-100gm per day">	75gm-100gm per day    </option>
                                    <option value="100gm-125gm per day">	100gm-125gm per day   </option>
                                    <option value="125gm-150gm per day">  	125gm-150gm per day   </option>
                                    <option value="150gm-175gm per day">   150gm-175gm per day   </option>
                                    <option value="175gm-200gm per day">	175gm-200gm per day    </option>
                                    <option value="200gm-225gm per day">	200gm-225gm per day   </option>
                                     <option value="225gm-250gm per day">	225gm-250gm per day    </option>
                                    <option value="250gm-more per day">	250gm-more per day   </option> 
                                                              
 </select>    
      <span class="Sweets-error"style="color:red;display:none">Please select this field</span>          
         
</div>




</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Glasses of milk   </div>
 <select class="form-control GlassMilk" id="slider_select_dep" name="GlassMilk">
                                    <option value="">Option</option>
                              		<option value="0ml-250ml per day">0ml-250ml per day   </option>
                                    <option value="250ml-500ml per day">250ml-500ml per day   </option>
                                    <option value="500ml-750ml per day">500ml-750ml per day   </option>
                                    <option value="750ml-1lt per day">750ml-1lt per day    </option>
                                    <option value="1lt-1.25lt per day">	1lt-1.25lt per day   </option>
                                    <option value="1.25lt-1.50lt per day">1.25lt-1.50lt per day   </option>
                                    <option value="1.50lt-1.75lt per day"> 1.50lt-1.75lt per day   </option>
                                    <option value="1.75lt-2lt per day">	1.75lt-2lt per day   </option>
                                    <option value="2lt-more per day">2lt-more per day  </option>
                                  
                                   
 </select>  
       <span class="GlassMilk-error"style="color:red;display:none">Please select this field</span>          
           
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head">Glasses of water </div>
 <select class="form-control GlassWater" id="slider_select_dep" name="GlassWater">
                                    <option value="">Option</option>
                              		<option value="0ml-500ml per day">0ml-500ml per day   </option>
                                    <option value="500ml-1lt per day"> 500ml-1lt per day   </option>
                                    <option value="1lt-1.50lt per day">	1lt-1.50lt per day    </option>
                                    <option value="1.50lt-2lt per day">	1.50lt-2lt per day   </option>
                                    <option value="2lt-2.50lt per day"> 2lt-2.50lt per day   </option>
                                    <option value="2.50lt-3lt per day"> 2.50lt-3lt per day   </option>
                                    <option value="3lt-3.50lt per day">	3lt-3.50lt per day   </option>
                                    <option value="3.50t-4lt per day">	3.50t-4lt per day  </option>
                                    <option value="4lt-4.50lt per day">	4lt-4.50lt per day   </option>
                                    <option value="4.50lt-5lt per day">  	4.50lt-5lt per day   </option>
                                    <option value="5lt-5.50lt per day">   5lt-5.50lt per day   </option>
                                    <option value="5.5lt-6lt per day">	5.5lt-6lt per day   </option>
                                    <option value="6t-6.50lt per day">	6t-6.50lt per day  </option>
                                    <option value="6.50lt-7lt per day">   6.50lt-7lt per day   </option>
                                    <option value="7lt-7.50lt per day">	7lt-7.50lt per day   </option>
                                    <option value="7.50t-8lt per day">	7.50t-8lt per day  </option>
                                    <option value="8lt-8.5lt per day">	8lt-8.5lt per day   </option>
                                    <option value="8.50lt-9lt per day">  	8.50lt-9lt per day   </option>
                                    <option value="9lt-9.50lt per day">   9lt-9.50lt per day   </option>
                                    <option value="9.5lt-10lt per day">	9.5lt-10lt per day   </option>
                                    <option value="10lt-above per day">	10lt-above per day  </option>
                                  
                                   
 </select>    
     <span class="GlassWater-error"style="color:red;display:none">Please select this field</span>          
         
</div>




</div>

</div>
<div class="clearfix"></div>
          <div class="row btn-form-cont pull-right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<input type="submit" name="submit"  class="form-continue"  value="Save &amp; Continue">

                    </div>
                </div>
            </div>
            
			 </form>
 </div>
    <?php
        } else {// view
        $squery = "SELECT * FROM confidential_lifestyle where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['Occupation'] = $row['Occupation'];
           // $_SESSION['OccuptaionLevel'] = $row['OccuptaionLevel'];
            $_SESSION['WorkDesk'] = $row['WorkDesk'];
            $_SESSION['ComputerTime'] = $row['ComputerTime'];
            $_SESSION['SeatTime'] = $row['SeatTime'];
			$_SESSION['DailyActive'] = $row['DailyActive'];
            $_SESSION['WeightConsider'] = $row['WeightConsider'];
            $_SESSION['MostWeighed'] = $row['MostWeighed'];
			$_SESSION['Height'] = $row['Height'];
			$_SESSION['HeightInch'] = $row['HeightInch'];
			$_SESSION['WeightCurrent'] = $row['WeightCurrent'];
			$_SESSION['WaistRatioCurrent'] = $row['WaistRatioCurrent'];
			$_SESSION['BmiCurrent'] = $row['BmiCurrent'];
			$_SESSION['SleepEveryday'] = $row['SleepEveryday'];
			$_SESSION['Understress'] = $row['Understress'];
			$_SESSION['UnderstressYes'] = $row['UnderstressYes'];
			/*	if($_SESSION['Understress'] == "Yes")
					{
						$_SESSION['UnderstressYes'] = $row['UnderstressYes'];
					}*/
			$_SESSION['ExerciseProgramme'] = $row['ExerciseProgramme'];
			$_SESSION['PersonalTrainer'] = $row['PersonalTrainer'];
			$_SESSION['RecentIntakePlan'] = $row['RecentIntakePlan'];
				

        }
		
		
		$squery = "SELECT * FROM daily_dietary_intake where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['CupCoffee'] = $row['CupCoffee'];
            $_SESSION['SugarAmount'] = $row['SugarAmount'];
            $_SESSION['CupTea'] = $row['CupTea'];
            $_SESSION['Chocolates'] = $row['Chocolates'];
            $_SESSION['GlassCoke'] = $row['GlassCoke'];
			$_SESSION['Sweets'] = $row['Sweets'];
            $_SESSION['GlassMilk'] = $row['GlassMilk'];
          
			$_SESSION['GlassWater'] = $row['GlassWater'];
						

        }
        ?>
        
        
        
<div class="right_col" role="main">
<div class="profile">
<div class="person-info col-lg-12" style="padding: 10px 56px;">
                                    <h3 class="person-info-title">Confidential Life Style</h3>
     <div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Occupation </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Occupation']; ?></div>
<div class="clearfix"></div>
</div>



<div class="detail001"> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">WorkDesk</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WorkDesk']; ?></div>
<div class="clearfix"></div>
</div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">ComputerTime</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ComputerTime']; ?></div>
  <div class="clearfix"></div>
  </div>


<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">SeatTime</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SeatTime']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">DailyActive</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['DailyActive']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Ideal Weight</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WeightConsider']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">MostWeighed</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MostWeighed']; ?></div>
<div class="clearfix"></div></div>


<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Height </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Height']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">HeightInch </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeightInch']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">WeightCurrent</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WeightCurrent']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">WaistRatioCurrent </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WaistRatioCurrent']; ?></div>
<div class="clearfix"></div></div>



<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">BmiCurrent </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BmiCurrent']; ?></div>
<div class="clearfix"></div></div>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">SleepEveryday </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SleepEveryday']; ?></div>
<div class="clearfix"></div></div>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Understress </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Understress']; ?></div>
<div class="clearfix"></div></div>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['UnderstressYes']; ?></div>
<div class="clearfix"></div></div>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">ExerciseProgramme </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ExerciseProgramme']; ?></div>
<div class="clearfix"></div></div>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">PersonalTrainer </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PersonalTrainer']; ?></div>
<div class="clearfix"></div></div>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you follow</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['RecentIntakePlan']; ?></div>
<div class="clearfix"></div></div> 

<br>

<h3 class="person-info-title">Daily Dietary Intake </h3>
<hr>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">CupCoffee</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CupCoffee']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">SugarAmount</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SugarAmount']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">CupTea</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CupTea']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Chocolates</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Chocolates']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">GlassCoke</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['GlassCoke']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Sweets</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Sweets']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">GlassMilk</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['GlassMilk']; ?></div>
<div class="clearfix"></div></div>



<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">GlassWater</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['GlassWater']; ?></div>
<div class="clearfix"></div></div>

<br>


</div>
</div>

</div>


 <?php
    }
}
?>



<script type="text/javascript">

    $(document).ready(function () {
        $('.chkBev').click(function () {
            $("#ChickenSpan").hide();
            $("#MuttonSpan").hide();
            $("#PorkSpan").hide();
			$("#DuckSpan").hide();
            $('.chkBev:checked').each(function () {
                var radioValue = $(this).val();
                if (radioValue === 'Chicken') {
                    $("#ChickenSpan").show();
                }
                if (radioValue === 'Mutton') {
                    $("#MuttonSpan").show();
                }
                if (radioValue === 'Pork') {
                    $("#PorkSpan").show();
                }
				if (radioValue === 'Duck & Seafood') {
                    $("#DuckSpan").show();
                }
            });
        });
		
		
         $('.habits').click(function () {
            var radioValue = $("input[name='habits']:checked").val();
            if (radioValue === 'Yes') {
                $("#habitsspan").show();
            } else {
                $("#habitsspan").hide();
            }
        });
		
		
         $('.UnderStress').click(function () {
            var radioValue = $("input[name='Understress']:checked").val();
            if (radioValue === 'Yes') {
                $("#UnderStressspan").show();
            } else {
                $("#UnderStressspan").hide();
			$("input[name=UnderstressYes][type=text]").val('');

            }
        });
         $('.exercise').click(function () {
            var radioValue = $("input[name='exercise']:checked").val();
            if (radioValue === 'Yes') {
                $("#exercisespan").show();
            } else {
                $("#exercisespan").hide();
            }
        });
		
         $('.trainer').click(function () {
            var radioValue = $("input[name='trainer']:checked").val();
            if (radioValue === 'Yes') {
                $("#trainerspan").show();
            } else {
                $("#trainerspan").hide();
            }
        });
		$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="Donuts") {
                $("#DonutsSpan").show();
            } else {
                $("#DonutsSpan").hide();
            }
        });
		$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="Cookies (3 or more)") {
                $("#CookiesSpan").show();
            } else {
                $("#CookiesSpan").hide();
            }
        });
		$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="High fat muffins") {
                $("#HighFatMuffinsSpan").show();
            } else {
                $("#HighFatMuffinsSpan").hide();
            }
        });
		
			$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="Rich desserts (ex, cheesecake, brownies)") {
                $("#RichDessertsSpan").show();
            } else {
                $("#RichDessertsSpan").hide();
            }
        });
		
		
		<!--	End -->

		    $('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="2% milk") {
                $("#ConsumemilkSpan").show();
            } else {
                $("#ConsumemilkSpan").hide();
            }
        });
		$('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="Low fat sour cream") {
                $("#LowfatSpan").show();
            } else {
                $("#LowfatSpan").hide();
            }
        });
		$('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="Yogurt that is 2% milk fat") {
                $("#YogurtSpan").show();
            } else {
                $("#YogurtSpan").hide();
            }
        });
		$('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="Margarine") {
                $("#MargarineSpan").show();
            } else {
                $("#MargarineSpan").hide();
            }
        });
		
<!--		How often on average do you consume any of the following:Pastries such as cakes, croissants, turnovers  end -->


        $(".txtTitleEnglish").change(function () {
            if ($(this).val().trim() !== '') {
                var c = counter - 1;
                $("#txtTitleEnglish" + c).css("border-color", "white");
                $("#txtTitleEnglish" + c).focus();
            }

        });
        var counter = 1;

        function validateTextBoxesGroup(counter) {
            var c = counter - 1;
            if ($('#txtTitleEnglish' + c).val().trim() !== '')
                return true;
            else
                return false;
        }
        //add fields
        $("#addButton").on('click', (function () {
            if (counter > 10) {
                alert("Only 10 textboxes allow");
                return false;
            }
            if (validateTextBoxesGroup(counter)) {
                var newTextBoxDiv = $(document.createElement('tr'));
                newTextBoxDiv.attr('class', 'odd');
                newTextBoxDiv.attr('id', "TextBoxDiv" + counter);

                newTextBoxDiv.after().html('<td tabindex="0" class="sorting_1"><input name="DateGiven[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish0"></td><td tabindex="0" class="sorting_1"><input name="Dosa[]" class="txtTitleEnglish' + counter + '"id="txtTitleEnglish1"></td><td tabindex="0" class="sorting_1"><input name="Time[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish2"></td><td tabindex="0" class="sorting_1"><input name="AdministeredBy[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish3"></td><td tabindex="0" class="sorting_1"><input name="SideEffects[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish4"></td><td tabindex="0" class="sorting_1"><input name="Needed[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish5"></td>');

                newTextBoxDiv.appendTo("#TextBoxesGroup");

                counter++;
            } else {
                alert('Please fill above row first');
                var c = counter - 1;
                $("#txtTitleEnglish" + c).css("border-color", "red");
                $("#txtTitleEnglish" + c).focus();
            }
        }));
        //remove fields
        $("#removeButton").on('click', (function () {
            if (counter == 1) {
                alert("No more textbox to remove");
                return false;
            }
            counter--;
            $("#TextBoxDiv" + counter).remove();
        }));

    });
</script>
<script>
$(document).ready(function(e) {
    $("input[type=submit]").click(function(e) {
		var isvalid=true;
		
		
		if($("select[name=ComputerTime]").val()=="")
        {
			alert("Please Select How Many Hours Do You Spend In Front Of A Computer");
			isvalid=false;
		}
		
		if($("select[name=SeatTime]").val()=="")
        {
			alert("Please Select How Much Time Do You Spend In A Seated Position");
			isvalid=false;
		}
		if($("select[name=DailyActive]").val()=="")
        {
			alert("Please Rate How Active You Are On A Daily Basis");
			isvalid=false;
		}
		if($("select[name=SleepEveryday]").val()=="")
        {
			alert("Please Select How Many Hours Sleep Do You Get Every Day");
			isvalid=false;
		}
		
		if($("select[name=DailyActive]").val()=="")
        {
			alert("Please Rate How Active You Are On A Daily Basis");
			isvalid=false;
		}
		if($("select[name=CupCoffee]").val()=="")
        {
			alert("Please Select No. Of Cups Of Coffee");
			isvalid=false;
		}
		if($("select[name=SugarAmount]").val()=="")
        {
			alert("Please Select Amount Of Sugar");
			isvalid=false;
		}
		if($("select[name=Chocolates]").val()=="")
        {
			alert("Please Select Amount of Chocolates");
			isvalid=false;
		}
		if($("select[name=GlassCoke]").val()=="")
        {
			alert("Please Select Glasses Of Coke/Soda");
			isvalid=false;
		}
		if($("select[name=Sweets]").val()=="")
        {
			alert("Please Select Sweets");
			isvalid=false;
		}
		if($("select[name=GlassMilk]").val()=="")
        {
			alert("Please Select Glasses of Milk");
			isvalid=false;
		}
		if($("select[name=GlassWater]").val()=="")
        {
			alert("Please Select No. Of Cups Of Coffee");
			isvalid=false;
		}
		if($("select[name=CupCoffee]").val()=="")
        {
			alert("Please Select Glasses Of Water");
			isvalid=false;
		}
		if(!$("input[name=WorkDesk]").is(':checked'))
		{
			alert("Please Select Do You Have An Ergonomically Set Up Desk/Workstation");
			isvalid=false;
		}
			if(!$("input[name=Understress]").is(':checked'))
		{
			alert("Please Select Do You Consider Yourself To Be Under Stress");
			isvalid=false;
		}
			if(!$("input[name=ExerciseProgramme]").is(':checked'))
		{
			alert("Please Select Are You Currently Involved In Any Exercise Programme");
			isvalid=false;
		}
			if(!$("input[name=PersonalTrainer]").is(':checked'))
		{
			alert("Please Select Have You Ever Had A Personal Trainer");
			isvalid=false;
		}
			if(!$("input[name=RecentIntakePlan]").is(':checked'))
		{
			alert("Please Select Do You Follow, Or Have You Recently Followed, Any Specific Dietary Intake Plan, And In General How Do You Feel About Your Nutritional Habits");
			isvalid=false;
		}
		if($("input[type=text][name=UnderstressYes]").is(':visible'))
		{
			if($("input[type=text][name=UnderstressYes]").val().length==0)
			{
				alert("Please enter value in Do you consider yourself to be understress");
				isvalid=false;
			}
		}
		return isvalid;
    });
});
</script>

<?php include ('footer_user.php'); ?>  