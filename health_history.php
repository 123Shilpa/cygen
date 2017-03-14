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
//replace strt
//copy strt here
 if (!empty($_POST)) {
 
 
	try{
		
    // keep track post values
    $radio1 = $_POST['radio1'];
	$radio2 = $_POST['radio2'];
    $radio3 = $_POST['radio3'];
    $radio4 = $_POST['radio4'];
    $radio5 = $_POST['radio5'];
	$radio6 = $_POST['radio6'];
    $radio7 = $_POST['radio7'];
    $radio8 = $_POST['radio8'];
	$radio9 = $_POST['radio9'];
	$radio10 = $_POST['radio10'];
	$radio11 = $_POST['radio11'];
	

	$BpRecord = $_POST['BpRecord'];
	$LowBpRecord = $_POST['LowBpRecord'];
	$LoweringMedi = $_POST['LoweringMedi'];
	$TenureBp = $_POST['TenureBp'];
	$AfterMeal = $_POST['AfterMeal'];
	$MedicineChange = $_POST['MedicineChange'];
	
	$HighRecorded = $_POST['HighRecorded'];
	$Hba = $_POST['Hba'];
	$TenureSugar = $_POST['TenureSugar'];	
	$MedicationChange = $_POST['MedicationChange'];
	
	$HighRec = $_POST['HighRec'];	
	$LowMedi = $_POST['LowMedi'];
	$Tenure = $_POST['Tenure'];
	$MediChange=$_POST['MediChange'];
	

	$Comments = $_POST['Comments'];
	$Hormoneal = $_POST['Hormoneal'];
	$PelvicExam = $_POST['PelvicExam'];
	
	
    $Status = '0';
    // update data
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // // keep track validation errors
	         $radio1_error="";
		     $radio2_error="";
		     $radio3_error="";
		     $radio4_error="";
		     $radio5_error="";
		     $radio6_error="";
		     $radio7_error="";
		     $radio8_error="";
			
		  $BpRecord_error="";
			$LoweringMedi_error="";
			 $Tenure_error="";
			 $MedicineChange_error="";
			
			$HighRecorded_error="";
			 $Hba_error="";
			 $TenureSugar_error="";
			 $MedicationChange_error="";
			
				$HighRec_error ="";	
				 $LowMedi_error="";
				 $Tenure_error="";
				 $MediChange_error="";
			
		
			 $valid=true;
			
		   	 if (empty($radio1)) {
			$radio1_error = "Heart Disease is required";
		   } else if (empty($radio2)) {
			 $radio2_error = "Hypertension is required";
		   } else if (empty($radio3)) {
			 $radio3_error = "Diabetes is required";
		   } else if (empty($radio4)) {
			 $radio4_error = "Heart Attack is required";
		   } else if (empty($radio5)) {
			 $radio5_error = "Stroke is required";
		   }  else if (empty($radio6)) {
			 $radio6_error = "Elevated Cholesterol is required";
		   } else if (empty($radio7)) {
			 $radio7_error = "Elevated Triglycerides is required";
			
		   } else if (empty($radio8)) {
			 $radio8_error = "Any Other Vascular Conditionis required";
		   } 
		     else  if (empty($BpRecord)) {
			 $BpRecord_error = "please enter Highest bp ";
		  }  else  if (empty($LoweringMedi)) {
			 $LoweringMedi_error = "please enter Bp lowering";
		   } 
		   else if (empty($TenureBp)) {
			 $TenureBp_error = "please enter since how long";
		  } 
		else if (empty($MedicineChange)) {
			 $MedicineChange_error = "please enter no of medication";
		  } 
		  
		    else if(empty($HighRecorded)) {
			 $HighRecorded_error = "please enter highest recorded bp record";
		   }
		    else if (empty($Hba)) {
			 $Hba_error = "please enter bp record";
		  }
		  else if (empty($TenureSugar)) {
			 $TenureSugar_error = "please enter since how long";
		   }
	     else if (empty($MedicationChange)) {
			$MedicationChange_error = "please enter no of medication";
		   }
		  
		   else if(empty($HighRec)) {
		 $HighRec_error = "please enter Highest Record";
		   }
		 else if (empty($LowMedi)) {
			 $LowMedi_error = "please enter any blood glucose so far";
		   }
		    else if (empty($Tenure)) {
			 $Tenure_error = "please enter Since how long";
			
		   }
		    else if (empty($MediChange)) {
			 $MediChange_error = "please enter no of medication ";
		
		   }
		   else{
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = "INSERT INTO health_history (PatientId, HeartDisease , Hypertension ,Diabetes , HeartAttack ,Stroke ,ElevateCholesterol, ElevatedTrig , OtherVascularCondition, Status  ) VALUES ( ?,?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $radio1 , $radio2, $radio3 , $radio4 ,$radio5 ,$radio6, $radio7 , $radio8, $Status  ));
		
		$sql = "INSERT INTO bp_monitor (PatientId, BpRecord , LowBpRecord, LoweringMedi , TenureBp , MedicineChange,Status ) VALUES (?,?, ?, ?, ?, ?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $BpRecord ,$LowBpRecord, $LoweringMedi, $TenureBp , $MedicineChange, $Status ));
		
		$sql = "INSERT INTO blood_sugar (PatientId, HighRecorded ,AfterMeal, Hba , TenureSugar , MedicationChange, Status ) VALUES (?,?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $HighRecorded , $AfterMeal, $Hba, $TenureSugar , $MedicationChange, $Status ));
		
		$sql = "INSERT INTO lipid_cholesterol (PatientId, HighRec , LowMedi , Tenure , MediChange, Status ) VALUES (?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $HighRec , $LowMedi, $Tenure , $MediChange, $Status ));
		
		$sql = "INSERT INTO women_health (PatientId, PeriodProblem , Childbirth , UrineLoss, PelvicExam, Comments, Hormoneal, Status ) VALUES (?, ?, ?, ?, ?,?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $radio9 , $radio10, $radio11 , $PelvicExam, $Comments, $Hormoneal, $Status ));
		
		$sql = "UPDATE profilereport set HealthHistory = ? WHERE PatientId=?";
        $q = $pdo->prepare($sql);
        $q->execute(array(9, $_SESSION['PatientId']));
		
        Database::disconnect();		
         echo"data submited";
		 echo "<script type = 'text/javascript'>alert('Successfully inserted'); window.location = 'past_medical.php'; </script>";
		  }
	  }
	}
	
	
	catch(Exception $e){
		echo $e;
		 echo "<script type = 'text/javascript'> alert('Server Error'); </script>";
	
	  
	}
} 

?>

<style>
.error{
	color:red !important
}

.demoerrormsg 
{
	color:red !important;
	font-weight:700 !important;
	font-size:16px !important;
}
     .custom-file-input {
      display: inline-block;
      position: relative;
      color: #fff;
     }
     .custom-file-input input {
      visibility: hidden;
      width: 100px;
     }
     .custom-file-input:before {
    background: rgb(1, 123, 139) none repeat scroll 0 0 !important;
    border-radius: 3px;
    content: "Upload";
    cursor: pointer;
    display: block;
    font-size: 12pt;
    left: 0;
    letter-spacing: 0.6px;
    outline: medium none;
    padding: 8px 15px;
    position: absolute;
    right: 0;
    text-align: center;
    white-space: nowrap;
     }
     .custom-file-input:hover:before {
      
     }

     .file-blue:before {
      content: 'Browse File';

     }


.health-questionary{
	background:#f9f9f9;
	}
.questionary-title{
	font-size:28px;
	color:#267e8a;
	font-weight:600;
	}
.medical-questionary > p {
    font-size: 13px;
    letter-spacing: 0.9px;
    line-height: 30px;
}
.medical-questionary h3{
	margin-top:40px;}
.person-info{
	display:block !important}
.info-head h3 {
    color: rgb(38, 126, 138);
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 30px;
    text-transform: uppercase;
}
.personal-detail {

}

.form-group.person-info .text {
	box-shadow:none;
	border:none;
	border-bottom:1px solid #ccc;
	background:none !important;
}
.form-control::-moz-placeholder {
    color: #017b8b;
    opacity: 0.69;
}
.questionary-box {
    margin-bottom: 17px;
}
.questionary-radio{
	display:inline-block !important;
	margin-top:8px !important;
	margin-right:4px !important}
.questionary-opt {

}
.select-items > p {
    display: inline-block;

}
 
.form-continue {
    background: rgb(1, 123, 139) none repeat scroll 0 0 !important;
    border: medium none;
    border-radius: 2px;
    color: rgb(255, 255, 255);
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.5px;
    padding: 6px 20px;
}
.btn-form-cont {
    margin: 40px 0 30px;
}
.specialty_radio {
    float: left;
    width: 100%;
}
.pd0{
	padding:0px;}
.row.questionary-box > p {
    color: rgb(38, 126, 138);
    font-size: 15px;
    font-weight: 600;
}
.select_text{
	border:none;
	border-bottom:1px solid #ccc;
	background:none !important;
	width:100%;}
.place{
	background:none;
	color:#017b8b !important;
	border:1px solid #ccc !important;
	}
.place_txt{
	margin-top:10px;}
.row.select_placetxt {
    margin-top: 10px;
}
.select_text::-moz-placeholder {
    color: rgb(1, 123, 139);
    opacity: 0.69;
}
.select_text::-webkit-input-placeholder {
    color: rgb(1, 123, 139);
    opacity: 0.69;
}
input.select_text:focus {
    outline: none !important;
}
@media screen and (max-width: 480px) {
.personal-detail {
padding: 27px 25px 50px;
}
}
</style>
<!-- page content -->

<?php
        $squery = "SELECT * FROM health_history where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>


<div class="right_col" role="main">


<div class="profile">
  <div class="">
     <div class="profile_inner">
       <div class="medical-questionary">
    <div class="demography-data info-head">
	<div class="row pull-right">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 	 <input type="submit" id="submit" class="form-continue" value="Save &amp; Continue" style="margin-top:-1px;">
     <!-- <input value="Save &amp; Continue" name="submit" type="submit" class="form-continue">--->
     </div>
    </div>
      <h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Health History</h3>
      
     <form class="form-horizontal" id="health_history" name="health_history" method="post">
      <div class="personal-detail">
	    
        <div class="questionary-box">
        <div class="row">
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Heart Disease</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio"  <?php if (isset($radio1) && $radio1=="Yes") echo "checked";?> name="radio1" value="Yes" type="radio"><span>Yes</span></p>                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio1" <?php if (isset($radio1) && $radio1=="No") echo "checked";?>  class="questionary-radio" value="No" type="radio"><span></span><span>No</span></p>               
              </div>
            </div>
			  
            <div class="clearfix"></div>
        </div>       
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Hypertension</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" <?php if (isset($radio2) && $radio2=="Yes") echo "checked";?>  name="radio2" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio2" <?php if (isset($radio2) && $radio2=="No") echo "checked";?>  class="questionary-radio" value="No" type="radio"><span></span><span>No</span></p>
                 
              </div>
            </div>
			
            <div class="clearfix"></div>
        </div>  
        </div>
        <div class="row">     
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Diabetes</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" <?php if (isset($radio3) && $radio3=="Yes") echo "checked";?>  name="radio3" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio3" class="questionary-radio"  <?php if (isset($radio3) && $radio3=="No") echo "checked";?> value="No" type="radio"><span></span><span>No</span></p>
                 
              </div>
            </div>
			  
            <div class="clearfix"></div>
        </div>       
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Heart Attack</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio"  <?php if (isset($radio4) && $radio4=="Yes") echo "checked";?>  name="radio4" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio4" <?php if (isset($radio4) && $radio4=="No") echo "checked";?> class="questionary-radio" value="No" type="radio"><span></span><span>No</span></p>
                 
              </div>
            </div>
			
            <div class="clearfix"></div>
        </div>
        </div>
        <div class="row">
        
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Stroke</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio"  <?php if (isset($radio5) && $radio5=="Yes") echo "checked";?> name="radio5" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio5"  <?php if (isset($radio5) && $radio5=="No") echo "checked";?>  class="questionary-radio" value="No" type="radio"><span></span><span>no</span></p>
                 
              </div>
            </div>
			 
            <div class="clearfix"></div>
        </div>
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Elevated Cholesterol</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio"  <?php if (isset($radio6) && $radio6=="Yes") echo "checked";?>  name="radio6" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio6"  <?php if (isset($radio6) && $radio6=="No") echo "checked";?>  class="questionary-radio" value="No" type="radio"><span></span><span>no</span></p>
                 
              </div>
            </div>
			
            <div class="clearfix"></div>
        </div>
        </div>
        <div class="row">
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Elevated Triglycerides</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" <?php if (isset($radio7) && $radio7=="Yes") echo "checked";?>  name="radio7" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="No") echo "checked";?>  class="questionary-radio" value="No" type="radio"><span></span><span>no</span></p>
                 
              </div>
            </div>
			
            <div class="clearfix"></div>
        </div>
        
        <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Any Other Vascular Condition</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" <?php if (isset($radio8) && $radio8=="Yes") echo "checked";?>  name="radio8" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio8" <?php if (isset($radio8) && $radio8=="No") echo "checked";?>  class="questionary-radio" value="No" type="radio"><span></span><span>No</span></p>
                 
              </div>
            </div>
			
            <div class="clearfix"></div>
        </div>
</div>
      
      <div class="clearfix"></div>
      
      <h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">  Last Recorded BP ( Systolic and blood pressure  )</h3>

<div class="personal-detail">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Highest Recorded BP so far" class="form-control text" name="BpRecord" id="BpRecord" type="text">
				 
				   
              </div>
          </div>
		     <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Low Recorded BP so far" class="form-control text" name="LowBpRecord" id="LowBpRecord" type="text">
				 
				   
              </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info"> 
                  <input placeholder="If on any BP lowering medication" class="form-control text" id="Lowmed" name="LoweringMedi" type="text">
				  
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Since how long" name="TenureBp" class="form-control text" id="howlong" type="text">
				
              </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Number of medications being changed" name="MedicineChange" id="no.ofmedication"class="form-control text" type="text">
				 
              </div>
          </div>
        </div> 
        
     
      </div>


<h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Last Recorded blood sugar ( fasting and post prandial, HBA1C )</h3>

<div class="personal-detail">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Highest recorded parameter so far" class="form-control text"  id="txt1"name="HighRecorded" type="text">
				
              </div>
          </div>
		            <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Two hours after meals" name="AfterMeal" class="form-control text" id="txt5" type="text">
			 </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="If on any blood glucose lowering so far" class="form-control text" id="txt2" name="Hba" type="text">
              
			  
			  </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Since how long" name="TenureSugar" class="form-control text"  id="txt3" type="text">
             
			  </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Number of medications being changed" name="MedicationChange" class="form-control text" id="txt4" type="text">
			 </div>
          </div>
        </div> </div>

<h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Last Recorded Lipid Cholesterol ( total Choloestrol, LDL, HDL )</h3>


<div class="personal-detail">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Highest recorded parameter so far" class="form-control text" name="HighRec" id="txt5" type="text">
             
   
			 </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="If on any blood glucose lowering so far" class="form-control text" name="LowMedi"  id="txt6" type="text">
                 
			  </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Since how long" name="Tenure" class="form-control text" id="txt7" type="text">
               
			  
			  </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
               <div class="form-group person-info">
                  <input placeholder="Number of medications being changed" name="MediChange" id="txt8" class="form-control text" type="text">
                
			  
			  
			  </div>
          </div>
        </div> </div>



<h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Women only answer the following. do you have </h3>


<div class="personal-detail">  <div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Menstrual periods problems?</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" name="radio9" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio9" class="questionary-radio" value="No" type="radio"><span></span><span>no</span></p>
                 
              </div>
            </div>
            <div class="clearfix"></div>
  </div>

<div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Significant childbirth - related problems?</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" name="radio10" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio10" class="questionary-radio" value="No" type="radio"><span></span><span>no</span></p>
                 
              </div>
            </div>
            <div class="clearfix"></div>
  </div>

<div class="questionary-box col-lg-5 col-md-5 col-sm-5 col-xs-12 pd0">
	      <p>Urine loss when you cough, sneeze or laugh?</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" name="radio11" value="Yes" type="radio"><span>Yes</span></p>
                 
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio11" class="questionary-radio" value="No" type="radio"><span></span><span>No</span></p>
                 
              </div>
            </div>
            <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
 </div>
      
      <div>
<h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Date of the last pelvic exam and / or Pap smear</h3>

  <textarea style="width:40%; height:40px; border:1px solid #ddd; overflow:hidden" name="PelvicExam" id="PelvicExam" placeholder="Enter Date Here..."></textarea>
  
</div>

<div>
<h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Comments</h3>

  <textarea style="width:90%; height:100px; border:1px solid #ddd" id="Comments" name="Comments" placeholder="Enter Your Comment Here..."></textarea>
  
</div>
<div>
<h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Are you on any type of hormone replacement therapy</h3>

  <textarea placeholder="Enter Your Reply Here..." style="width:90%; height:100px; border:1px solid #ddd" id="hormone" name="Hormoneal" ></textarea>
  
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="demoerrormsg " id="error-message" style=" margin-top:10px">

</div>

</div>
</div>

<div class="row btn-form-cont pull-right">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 	 <input type="submit" id="submit" class="form-continue" value="Save &amp; Continue">
     <!-- <input value="Save &amp; Continue" name="submit" type="submit" class="form-continue">--->
     </div>
    </div>
	
    </div>
	</form>
  </div>  
  
      <div class="clearfix"></div>
     </div>
  </div>
</div>

</div>
</div>


          <?php
        } else {// view
        $squery = "Select U.Id as PaitientId,t1.Hba,t1.HighRecorded,t1.SugarMedication,t1.TenureSugar,t1.MedicationChange,t2.BpRecord,t2.LoweringMedi,t2.TenureBp,t2.MedicineChange,t3.HighRec,t3.LowMedi,t3.Tenure,t3.MediChange,t4.HeartDisease,t4.Hypertension,t4.HeartAttack,t4.Stroke,t4.ElevateCholesterol,t4.ElevatedTrig,t4.Diabetes,t4.OtherVascularCondition,t5.PeriodProblem,t5.Childbirth,t5.UrineLoss,t5.PelvicExam,t5.Comments,t5.Hormoneal FROM login_cygen u LEFT JOIN blood_sugar t1 ON u.Id=t1.PatientId  LEFT JOIN bp_monitor t2 ON u.Id=t2.PatientId LEFT JOIN lipid_cholesterol t3 ON u.Id=t3.PatientId LEFT JOIN health_history t4 ON u.Id=t4.PatientId LEFT JOIN women_health t5 ON u.Id=t5.PatientId Where u.Id='" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['HeartDisease'] = $row['HeartDisease'];
            $_SESSION['Hypertension'] = $row['Hypertension'];
            $_SESSION['Diabetes'] = $row['Diabetes'];
            $_SESSION['HeartAttack'] = $row['HeartAttack'];
            $_SESSION['Stroke'] = $row['Stroke'];
            $_SESSION['ElevateCholesterol'] = $row['ElevateCholesterol'];
            $_SESSION['ElevatedTrig'] = $row['ElevatedTrig'];
            $_SESSION['OtherVascularCondition'] = $row['OtherVascularCondition'];
			
            $_SESSION['BpRecord'] = $row['BpRecord'];
            $_SESSION['LoweringMedi'] = $row['LoweringMedi'];
            $_SESSION['TenureBp'] = $row['TenureBp'];
            $_SESSION['MedicineChange'] = $row['MedicineChange'];
			
            $_SESSION['Hba'] = $row['Hba'];
            $_SESSION['HighRecorded'] = $row['HighRecorded'];
            $_SESSION['TenureSugar'] = $row['TenureSugar'];
            $_SESSION['MedicationChange'] = $row['MedicationChange'];
			
            $_SESSION['HighRec'] = $row['HighRec'];
            $_SESSION['LowMedi'] = $row['LowMedi'];
            $_SESSION['Tenure'] = $row['Tenure'];
            $_SESSION['MediChange'] = $row['MediChange'];
			
            $_SESSION['PeriodProblem'] = $row['PeriodProblem'];
            $_SESSION['Childbirth'] = $row['Childbirth'];
            $_SESSION['UrineLoss'] = $row['UrineLoss'];
            $_SESSION['PelvicExam'] = $row['PelvicExam'];
            $_SESSION['Comments'] = $row['Comments'];
            $_SESSION['Hormoneal'] = $row['Hormoneal'];
        }
        ?>

<div class="right_col" role="main">
<div class="profile">
<div class="person-info col-lg-12" style="padding: 10px 56px;">
                                    <h3 class="person-info-title">Health History</h3>
     <div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Heart Disease </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeartDisease']; ?></div>
<div class="clearfix"></div>
</div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Hypertension </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Hypertension']; ?></div>
  <div class="clearfix"></div>
</div>

<div class="detail001"> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Diabetes</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Diabetes']; ?></div>
<div class="clearfix"></div>
</div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Heart Attack</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeartAttack']; ?></div>
  <div class="clearfix"></div>
  </div>


<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Stroke</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Stroke']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Elevate Cholesterol</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ElevateCholesterol']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Elevated Triglyceride </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ElevatedTrig']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Other Vascular Condition</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherVascularCondition']; ?></div>
<div class="clearfix"></div></div>

<br>

<h3 class="person-info-title">Bp Monitor</h3>
<hr>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">BpRecord</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BpRecord']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Lowering Medication</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LoweringMedi']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">TenureBp</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TenureBp']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">MedicineChange</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MedicineChange']; ?></div>
<div class="clearfix"></div></div>


<br>

<h3 class="person-info-title">Blood Sugar</h3>
<hr>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Hba</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Hba']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">High Recorded</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HighRecorded']; ?></div>
<div class="clearfix"></div></div>

			
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Tenure Sugar</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TenureSugar']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Medication Change</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MedicationChange']; ?></div>
<div class="clearfix"></div></div>

<br>

<h3 class="person-info-title">Lipid Cholesterol</h3>
<hr>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">HighRec</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HighRec']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">LowMedi</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LowMedi']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Tenure</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Tenure']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">MediChange</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MediChange']; ?></div>
<div class="clearfix"></div></div>


<br>

<h3 class="person-info-title">Women Health</h3>
<hr>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">PeriodProblem</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PeriodProblem']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Childbirth</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Childbirth']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">UrineLoss</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['UrineLoss']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">PelvicExam</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PelvicExam']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Comments</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Comments']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Hormone</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Hormoneal']; ?></div>
<div class="clearfix"></div></div>
</div>
</div>

</div>
</div>
</div>


    <?php
    }
}
?>
<!--	script to validate checkbox-->
 <script>
 $(document).ready(function(){
	$("input[type=submit]").click(function(){
	var isvalid=true;
	if(!$("input[name=radio1]").is(':checked'))
	{
		alert("Please enter Heart Disease");
		isvalid=false;
		
	}
	if(!$("input[name=radio2]").is(':checked'))
	{
		alert("Please enter Hypertension");
		isvalid=false;
		
	}
	if(!$("input[name=radio3]").is(':checked'))
	{
		alert("Please enter Diabetes");
		isvalid=false;
		
	}
	if(!$("input[name=radio4]").is(':checked'))
	{
		alert("Please enter Heart Attack");
		isvalid=false;
		
	}
	if(!$("input[name=radio5]").is(':checked'))
	{
		alert("Please enter Stroke");
		isvalid=false;
		
	}
	if(!$("input[name=radio6]").is(':checked'))
	{
		alert("Please enter Elevated Cholesterol");
		isvalid=false;
		
	}
	if(!$("input[name=radio7]").is(':checked'))
	{
		alert("Please enter Elevated Triglycerides");
		isvalid=false;
		
	}
	if(!$("input[name=radio8]").is(':checked'))
	{
		alert("Please enter Any Other Vascular Condition");
		isvalid=false;
		
	}
	if($("input[type=text][name=BpRecord]").val().length==0)
	{
		alert("Please enter highest ecorded BP so far in Last Recorded Bp");
		isvalid=false;
	}
	if($("input[type=text][name=LoweringMedi]").val().length==0)
	{
		alert("Please enter If on any BP lowering medication in Last Recorded Bp");
		isvalid=false;
	}
	if($("input[type=text][name=TenureBp]").val().length==0)
	{
		alert("Please enter Since how long in Last Recorded Bp");
		isvalid=false;
	}
	if($("input[type=text][name=MedicineChange]").val().length==0)
	{
		alert("Please enter Number of medications being changed in Last Recorded Bp");
		isvalid=false;
	}
	//Last Recorded Blood Sugar 
	
	if($("input[type=text][name=HighRecorded]").val().length==0)
	{
		alert("Please enter Highest recorded parameter so far in Last Recorded Blood Sugar");
		isvalid=false;
	}
	 var VAL = $("#BpRecord").val();
     var exp = new RegExp('^[0-9]{1,3}([.][0-9]{1,3})?$');
	if(!exp.test(VAL))
	{
		alert("Please enter valid value in highest recorded Bp");
		isvalid=false;
	}
	else
	{
		isvalid=true;
	}
	 var VAL1 = $("#LowBpRecord").val();
     var exp1 = new RegExp('^[0-9]{1,3}([.][0-9]{1,3})?$');
	if(!exp1.test(VAL1))
	{
		alert("Please enter valid value in Low recorded Bp");
		isvalid=false;
	}
	else
	{
		isvalid=true;
	}
	if($("input[type=text][name=Hba]").val().length==0)
	{
		alert("Please enter If on any blood glucose lowering so far in Last Recorded Blood Sugar ");
		isvalid=false;
	}
	if($("input[type=text][name=TenureSugar]").val().length==0)
	{
		alert("Please enter Since how long in Last Recorded Blood Sugar ");
		isvalid=false;
	}
	if($("input[type=text][name=MedicationChange]").val().length==0)
	{
		alert("Please enter Number of medications being changed in Last Recorded Blood Sugar");
		isvalid=false;
	}
	//lipid cholesterol
	if($("input[type=text][name=HighRec]").val().length==0)
	{
		alert("Please enter Highest recorded parameter so far in Last Recorded Lipid Cholesterol");
		isvalid=false;
	}
	if($("input[type=text][name=LowMedi]").val().length==0)
	{
		alert("Please enter If on any blood glucose lowering so far in Last Recorded Lipid Cholesterol");
		isvalid=false;
	}
	if($("input[type=text][name=Tenure]").val().length==0)
	{
		alert("Please enter Since how long in Last Recorded Lipid Cholesterol");
		isvalid=false;
	}
	if($("input[type=text][name=MediChange]").val().length==0)
	{
		alert("Please enter Number of medications being changed in Last Recorded Lipid Cholesterol");
		isvalid=false;
	}
	var PelvicExamlength=$("#PelvicExam").val().length;
	
	if(PelvicExamlength >= 200)
	{
		alert("The  word length is 200 only in PelvicExam");
		isvalid=false;
	}
	var Comments=$("#Comments").val().length;
		if(Comments >= 200)
	{
		alert("The  word length is 200 only in Comments");
		isvalid=false;
	}
	var hormone=$("#hormone").val().length;
		if(hormone >= 200)
	{
		alert("The  word length is 200 only in Hormone Replacement Therapy");
		isvalid=false;
	}
	return isvalid;
		}); 
	 	 });
 </script>
<script type="text/javascript">
 $(document).ready(function(){
$('input:radio[name=optradio]').click(function(){	
		var radioValue = $("input[name='optradio']:checked").val();
		if(radioValue=='Multi'){
			$("#SpecializedType").show();
		}
		else{
		$("#SpecializedType").hide();
		}
	});
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
$('input:radio[name=optradio]').click(function(){	
		var radioValue = $("input[name='optradio']:checked").val();
		if(radioValue=='Multi'){
			$("#SpecializedType1").show();
		}
		else{
		$("#SpecializedType1").hide();
		}
	});
});
</script>
    


 
	

    <?php include ('footer_user.php') ?>