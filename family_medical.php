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
    $FatherAge = $_POST['FatherAge'];
    $FatherGenHealth = $_POST['FatherGenHealth'];
    $FatherDeceasedAge = $_POST['FatherDeceasedAge'];
    $FatherDeceasedCause = $_POST['FatherDeceasedCause'];
    $MotherAge = $_POST['MotherAge'];
    $MotherGenHealth = $_POST['MotherGenHealth'];
    $MotherDeceasedAge = $_POST['MotherDeceasedAge'];
    $MotherDeceasedCause = $_POST['MotherDeceasedCause'];
    $BroSiblings = $_POST['BroSiblings'];
    $SisSiblings = $_POST['SisSiblings'];
    $AgeRange = $_POST['AgeRange'];
    $Description = $_POST['Description'];
	$FatherPoorHealth = $_POST['FatherPoorHealth'];
	$MotherPoorHealth = $_POST['MotherPoorHealth'];
	
	$HeartAttackUn = $_POST['HeartAttackUn'];
    $StrokeUnder = $_POST['StrokeUnder'];
    $HighBp = $_POST['HighBp'];
    $ElevatedCholesterol = $_POST['ElevatedCholesterol'];
    $Diabetes = $_POST['Diabetes'];
    $AsthmaHayFever = $_POST['AsthmaHayFever'];
    $CongenitalHeartDisease = $_POST['CongenitalHeartDisease'];
    $HeartOperation = $_POST['HeartOperation'];
    $Glaucoma = $_POST['Glaucoma'];
    $Obesity = $_POST['Obesity'];
    $LeukemiaCancerUn = $_POST['LeukemiaCancerUn'];
    $OtherComment = $_POST['OtherComment'];
    $Status = '0';

    // validate input
    // update data
    //if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $sql = "INSERT INTO parent_history  (PatientId , FatherAge ,FatherGenHealth ,FatherDeceasedAge , FatherDeceasedCause ,FatherPoorHealth,MotherPoorHealth,MotherAge ,MotherGenHealth, MotherDeceasedAge ,MotherDeceasedCause , BroSiblings , SisSiblings, AgeRange, Description, Status) VALUES (?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $FatherAge, $FatherGenHealth, $FatherDeceasedAge, $FatherDeceasedCause,$FatherPoorHealth, $MotherPoorHealth,$MotherAge, $MotherGenHealth, $MotherDeceasedAge,$MotherDeceasedCause, $BroSiblings, $SisSiblings, $AgeRange, $Description, $Status));
		
	$sql = "INSERT INTO family_diseases  (PatientId , HeartAttackUn ,StrokeUnder ,HighBp , ElevatedCholesterol , Diabetes , AsthmaHayFever, CongenitalHeartDisease ,HeartOperation , Glaucoma , Obesity, LeukemiaCancerUn, OtherComment, Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $HeartAttackUn, $StrokeUnder, $HighBp, $ElevatedCholesterol, $Diabetes, $AsthmaHayFever, $CongenitalHeartDisease,$HeartOperation, $Glaucoma, $Obesity, $LeukemiaCancerUn, $OtherComment, $Status));
		
	$sql = "UPDATE profilereport set FamilyMedicalHistory = ? WHERE PatientId=?";
    $q = $pdo->prepare($sql);
    $q->execute(array(7, $_SESSION['PatientId']));	
	
    Database::disconnect();
    echo "<script type = 'text/javascript'> alert('Successfully inserted'); window.location = 'cardiac_symptoms.php'; </script>";
}
?>



<style>
    .tittle {
        color: #017b8b;
        font-size: 18px;
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
    #fatherhealth
	{
		display:none;
	}
	#motherhealth
	{
		display:none;
	}
</style>

<?php
        $squery = "SELECT * FROM parent_history where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>

<!-- page content -->
<div class="right_col" role="main">
<form class="form-horizontal" enctype="multipart/form-data" name="family_medical"  method="post" >
    <div class="profile info-head">
	
        <div class="col-sm-12">
            <div>
			<div class="row pull-right">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <input type="submit" id="btnProfile" class="form-continue btnProfile pull-right" value="Save &amp; Continue" style="margin-top:-1px;">
                            </div>
                        </div>
					
                <h3> Family Medical History  </h3>
                <div>
  
                    <div class="tittle">Father </div>
                    <div>
                        <div class="questionary-box">
                            <p>
                                <input class="speciality questionary-radio " name="optradio" value="Multi" id="fatheraliverchkbox" type="checkbox">
                                Alive
                                <span style="display:none;" id="fatheragecontainer" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0 ">
                                    <input type="text" name="FatherAge" class="select_text form-control text current_age " placeholder="Current age">
                                    <span class="errMsg" style="color:red;"></span>
                                </span>
                                
                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="fatherhealth">
                        <div class="Sub-head">My Father General Health is: </div>
                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio ques" name="FatherGenHealth" value="Excellent" type="radio"> <span>Excellent </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="FatherGenHealth" class="questionary-radio ques" value="Good" type="radio"><span>Good </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio ques" name="FatherGenHealth" value="Fair" type="radio"><span> Fair </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <input class="questionary-radio ques" name="FatherGenHealth" value="poor" type="radio"><span>  Poor </span>

                                    <span id="spanPainOccur" style="display:none; float:right" class="col-lg-10 col-md-10 col-sm-10 col-xs-12 pd0">
                                        <input class="form-control text fatherpoorhealth" name="FatherPoorHealth" placeholder="reason for poor health" type="text">
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 father">

                                    <input class="questionary-radio ques" name="FatherGenHealth" value="Deceased" type="radio"><span>  Deceased  </span>

                                    <span id="spanAgeatdeath" style="display:none; float:right" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input class="form-control text father_decease_errortxt1" id="ageTxt" name="FatherDeceasedAge" placeholder="Age at death " type="text">
                                             <span class="ee" style="display:none">Please enter cause of death</span>
                                     <span class="ee1" style="display:none">Please enter numeric value</span>
                                        <input class="form-control text father_decease_errortxt2" name="FatherDeceasedCause" placeholder="Cause of death " type="text">
                                    </span>
                               
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                           <span id="errormsg1" style="color:red;display:none">Please select Father General Health</span>
                           </div>                         
                           
                            </div>
                            <div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <div>
                    <div class="tittle">Mother </div>
                    <div>
                        <div class="questionary-box">
                            <p>
                                <input class="speciality questionary-radio " name="MotherAge" value="Multi" id="motheralivechkbox" type="checkbox">
                                Alive
                                <span style="display:none;" id="motheragecontainer" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                    <input type="text" name="MotherAge" class="select_text form-control text current_age" placeholder="Current age">
									<span class="errMsg" style="color:red;"></span>
                                </span>
                            </p>
                            <div class="clearfix"> </div>
                        </div>
                        <div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="motherhealth">
                        <div class="Sub-head">My Mother General Health is: </div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio ques02" name="MotherGenHealth" value="Excellent" type="radio"> <span>Excellent </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="MotherGenHealth" class="questionary-radio ques02" value="Good" type="radio"><span>Good </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio ques02" name="MotherGenHealth" value="Fair" type="radio"><span> Fair </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <input class="questionary-radio ques02" name="MotherGenHealth" value="Poor" type="radio"><span>  Poor </span>

                                    <span id="spanPainOccur02" style="display:none; float:right" class="col-lg-10 col-md-10 col-sm-10 col-xs-12 pd0">
                                        <input class="form-control text" name="MotherPoorHealth" id="motherpoorhealth" placeholder="reason for poor health" type="text">
                                    </span>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 father">

                                    <input class="questionary-radio ques02" name="MotherGenHealth" value="Deceased02" type="radio"><span>  Deceased  </span>

                                    <span id="spanAgeatdeath02" style="display:none; float:right" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input class="form-control text mother_decease_errortxt1" name="MotherDeceasedAge" placeholder="Age at death " type="text">
                                        <input class="form-control text mother_decease_errortxt2" name="MotherDeceasedCause" placeholder="Cause of death " type="text">
                                    </span>

                                </div>

                            </div>
                          
                            <div>

                                <div class="clearfix"></div>

                            </div>

                        </div>

                    </div>




                </div>


                <br /> <br />

                <div class="tittle">Siblings </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                        <input  placeholder="Number of brothers" class="form-control text txt_digit" id="txt1" name="BroSiblings" type="text"/>
						<span class="e1"style="display:none;color:red">Please enter Number Of Brothers</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                        <input  placeholder="Number of sisters" class="form-control text txt_digit" id="txt2" name="SisSiblings" type="text"/>
			   <span class="e1"style="display:none;color:red">Please enter Number Of Sisters</span>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10"> 
                        <!--<input placeholder="Age range" class="form-control text txt_digit" id="txt3" name="AgeRange" type="text"/>
							<span class="e3"style="display:none;color:red">Please enter AgeRange</span>-->
							   
                                <h6 class="questionary-box"><p> AgeRange</p></h6>
							
                            <select class="form-control AgeRange" id="slider_select_dep" name="AgeRange">
                                <option value="0">Option</option>
                                <option value="0-5"> 0-5 </option>
                                <option value="6-10"> 6-10 </option>
                                <option value="11-15"> 11-15 </option>
                                <option value="16-20"> 16-20 </option>
                                <option value="21-25"> 21-25 </option>
                                <option value="26-30"> 26-30 </option>
                                <option value="31-35"> 31-35 </option>
                                <option value="36-40"> 36-40 </option>
                                <option value="41-45"> 41-45 </option>
                                <option value="46-50"> 46-50 </option>
                                <option value="51-55"> 51-55 </option>
                                <option value="56-60"> 56-60 </option>
                                <option value="61-65"> 61-65 </option>
                                <option value="65 above"> 65 above </option>

                            </select>
                    </div>
                </div>

                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 row">
                    <textarea style="width: 90%; height: 100px; border: 1px solid rgb(221, 221, 221); margin: 12px;" name="Description" placeholder="Details of Siblings..."></textarea>
                </div>

                <br /> <br />


                <div class="cleafix"></div>


            </div>

            <div>




                <div class="clearfix"></div>
                <div class="clearfix"></div>

                <div class="tittle" style="margin-top:30px;">Familial Diseases  </div>

                <div class="questionary-box">

                    <div class="tittle"> Have you or your blood relatives had any of the following (include grandparents, aunts and uncles, but exclude cousins, relatives by marriage and half-relatives)  </div>

                    <div class="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                            <div class="cleck02">      <input class="speciality questionary-radio " name="HeartAttackUn" value="Heart Attacks Under Age 50" id="chkbox" type="checkbox"> </div>
                            <div class="check01">	Heart attacks under age 50  </div>



                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02">      <input class="speciality questionary-radio " name="StrokeUnder" value="Strokes Under Age 50" id="chkbox" type="checkbox"> </div>
                            <div class="check01">    	Strokes under age 50  </div>  

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div></div>


                    <div class="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">


                            <div class="cleck02">      <input class="speciality questionary-radio " name="HighBp" value="High Blood Pressure" id="chkbox" type="checkbox"> </div>
                            <div class="check01">    	High blood pressure  </div>      

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02">      <input class="speciality questionary-radio " name="ElevatedCholesterol" value="Elevated Cholesterol" id="chkbox" type="checkbox"> </div>
                            <div class="check01">    	Elevated cholesterol  </div>   

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div></div>
                    <div class="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">


                            <div class="cleck02">      <input class="speciality questionary-radio " name="Diabetes" value="Diabetes" id="chkbox" type="checkbox"> </div>
                            <div class="check01">  	Diabetes  </div>      

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02">      <input class="speciality questionary-radio " name="AsthmaHayFever" value="Asthma Or Hay Fever" id="chkbox" type="checkbox"> </div>
                            <div class="check01">    Asthma or hay fever  </div>   

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div></div>
                    <div class="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">


                            <div class="cleck02">      <input class="speciality questionary-radio " name="CongenitalHeartDisease" value="Congenital Heart Disease" id="chkbox" type="checkbox"> </div>
                            <div class="check01">   Congenital heart disease (existing at birth but not hereditary)  </div>      

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02">      <input class="speciality questionary-radio " name="HeartOperation" value="Heart Operations" id="chkbox" type="checkbox"> </div>
                            <div class="check01">     	Heart operations  </div>   

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div></div>
                    <div class="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">


                            <div class="cleck02">      <input class="speciality questionary-radio " name="Glaucoma" value="Glaucoma" id="chkbox" type="checkbox"> </div>
                            <div class="check01">   Glaucoma  </div>      

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02">      <input class="speciality questionary-radio " name="Obesity" value="Obesity (20 Or More Pounds Overweight)" id="chkbox" type="checkbox"> </div>
                            <div class="check01">     	Obesity (20 or more pounds overweight)  </div>   

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div></div>
                    <div class="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">


                            <div class="cleck02">      <input class="speciality questionary-radio " name="LeukemiaCancerUn" value="Leukemia Or Cancer Under Age 60" id="chkbox" type="checkbox"> </div>
                            <div class="check01">  	Leukemia or cancer under age 60  </div>      

                            <div class="clearfix"></div>
                        </div>



                        <div class="clearfix"></div></div>


                    <div class="clearfix"></div>
                </div>

                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 row">
                    <textarea style="width: 90%; height: 100px; border: 1px solid rgb(221, 221, 221); margin: 12px;" name="OtherComment" placeholder="Any Other..."></textarea>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="submit" id="btnProfile" class="form-continue btnProfile pull-right" style="margin-bottom: 50px ! important; margin-top: 40px;" value="Save &amp; Continue">
                </div>



            </div>
        </div>
	
    </div>
		</form>
</div>



          <?php
        } else {// view
        $squery = "SELECT * FROM parent_history where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['FatherAge'] = $row['FatherAge'];
            $_SESSION['FatherGenHealth'] = $row['FatherGenHealth'];
            $_SESSION['FatherDeceasedAge'] = $row['FatherDeceasedAge'];
            $_SESSION['FatherDeceasedCause'] = $row['FatherDeceasedCause'];
            $_SESSION['MotherAge'] = $row['MotherAge'];
			$_SESSION['MotherGenHealth'] = $row['MotherGenHealth'];
            $_SESSION['MotherDeceasedAge'] = $row['MotherDeceasedAge'];
            $_SESSION['MotherDeceasedCause'] = $row['MotherDeceasedCause'];
			$_SESSION['BroSiblings'] = $row['BroSiblings'];
			$_SESSION['SisSiblings'] = $row['SisSiblings'];
			$_SESSION['AgeRange'] = $row['AgeRange'];
			$_SESSION['Description'] = $row['Description'];
			$_SESSION['FatherPoorHealth'] = $row['FatherPoorHealth'];
			$_SESSION['MotherPoorHealth'] = $row['MotherPoorHealth'];
				

        }
		
		
		$squery = "SELECT * FROM family_diseases where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['HeartAttackUn'] = $row['HeartAttackUn'];
            $_SESSION['StrokeUnder'] = $row['StrokeUnder'];
            $_SESSION['HighBp'] = $row['HighBp'];
            $_SESSION['ElevatedCholesterol'] = $row['ElevatedCholesterol'];
            $_SESSION['Diabetes'] = $row['Diabetes'];
			$_SESSION['AsthmaHayFever'] = $row['AsthmaHayFever'];
            $_SESSION['CongenitalHeartDisease'] = $row['CongenitalHeartDisease'];
            $_SESSION['HeartOperation'] = $row['HeartOperation'];
			$_SESSION['Glaucoma'] = $row['Glaucoma'];
			$_SESSION['Obesity'] = $row['Obesity'];
			$_SESSION['LeukemiaCancerUn'] = $row['LeukemiaCancerUn'];
			$_SESSION['OtherComment'] = $row['OtherComment'];
				

        }
        ?>


<div class="right_col" role="main">
<div class="profile">
<div class="person-info col-lg-12" style="padding: 10px 56px;">
                                    <h3 class="person-info-title">Family Medical History</h3>
     <div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Father Age </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FatherAge']; ?></div>
<div class="clearfix"></div>
</div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Father Gen Health </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FatherGenHealth']; ?></div>
  <div class="clearfix"></div>
</div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Father Poor Health Reason </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FatherPoorHealth']; ?></div>
  <div class="clearfix"></div>
</div>

<div class="detail001"> 
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Father Deceased Age</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FatherDeceasedAge']; ?></div>
<div class="clearfix"></div>
</div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Father Deceased Cause</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FatherDeceasedCause']; ?></div>
  <div class="clearfix"></div>
  </div>


<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Mother Age</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MotherAge']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Mother Gen Health</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MotherGenHealth']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Mother Poor Health Reason</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MotherPoorHealth']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Mother Deceased Age</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MotherDeceasedAge']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Mother Deceased Cause</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MotherDeceasedCause']; ?></div>
<div class="clearfix"></div></div>


<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Bro Siblings </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BroSiblings']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Sis Siblings </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SisSiblings']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">AgeRange </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['AgeRange']; ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Description </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Description']; ?></div>
<div class="clearfix"></div></div>

<br>

<h3 class="person-info-title">Familial Diseases</h3>
<hr>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Heart Attacks Under Age 50</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['HeartAttackUn'] == "Heart Attacks Under Age 50") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Strokes Under Age 50</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['StrokeUnder'] == "Strokes Under Age 50") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">High Blood Pressure</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['HighBp'] == "High Blood Pressure") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Elevated Cholesterol</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['ElevatedCholesterol'] == "Elevated Cholesterol") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Diabetes</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['Diabetes'] == "Diabetes") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Asthma Or Hay Fever</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['AsthmaHayFever'] == "Asthma Or Hay Fever") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Congenital Heart Disease</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['CongenitalHeartDisease'] == "Congenital Heart Disease") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Heart Operations</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['HeartOperation'] == "Heart Operations") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Glaucoma</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['Glaucoma'] == "Glaucoma") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Obesity (20 Or More Pounds Overweight)</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['Obesity'] == "Obesity (20 Or More Pounds Overweight)") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Leukemia Or Cancer Under Age 60</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if($_SESSION['LeukemiaCancerUn'] == "Leukemia Or Cancer Under Age 60") {echo 'Yes';} else{ echo 'No';  } ?></div>
<div class="clearfix"></div></div>

<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Other Comment</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherComment']; ?></div>
<div class="clearfix"></div></div>


<br>


</div>
</div>

</div>

 <?php
    }
}
?>



<script>
$(document).ready(function(){
	//father age
	$("#fatheraliverchkbox").click(function(){
		if($("#fatheraliverchkbox").is(':checked'))
		{
			$("#fatheragecontainer").show(); 
			$("#fatherhealth").show();
			
		}
		else
		{               $("input[name=FatherAge]").val('');
						
						$("input[type=radio][name=FatherGenHealth]").prop('checked',false);
						$("#fatheragecontainer").hide();
						$("#fatherhealth").hide();
						$(".father_decease_errortxt1").val('');
						$(".father_decease_errortxt2").val('');
						$(".fatherpoorhealth").val('');

		}
	});
//mother age
$("#motheralivechkbox").click(function(){
	if($("#motheralivechkbox").is(':checked'))
	{
		$("#motheragecontainer").show();
		$("#motherhealth").show();
		
	}
	else
	{
		$("input[name=MotherAge]").val('');
		$("input[type=radio][name=MotherGenHealth]").prop('checked',false);
		$(".mother_decease_errortxt1").val('');
		$(".mother_decease_errortxt2").val('');
		$("#motherpoorhealth").val('');
		$("#motheragecontainer").hide();
		$("#motherhealth").hide();
		
	}
});	
//father general health deceased
$("input[name=FatherGenHealth]").click(function(){
	if($("input[name=FatherGenHealth][value=Deceased]").is(':checked'))
	{
		$("#spanAgeatdeath").show();
	}
	
	
	
	else		  
		{
			$("#spanAgeatdeath").hide();  
			$("input[name=FatherDeceasedAge]").val(''); 
				$("input[name=FatherDeceasedCause]").val('');
		}  
	
});
//father general health poor
$("input[name=FatherGenHealth]").click(function(){
	if($("input[name=FatherGenHealth][value=poor]").is(':checked'))
	{
		$("#spanPainOccur").show();
	}
	
	
	
	else		  
		{
			$("#spanPainOccur").hide();  
			$("input[name=FatherPoorHealth]").val(''); 
		}  
	
});
//mother genreal health deceased
$("input[name=MotherGenHealth]").click(function(){
	if($("input[name=MotherGenHealth][value=Deceased02]").is(':checked'))
	{
		$("span#spanAgeatdeath02").show();
	}
	else
	{			
				$("span#spanAgeatdeath02").hide();
				$("input[name=MotherDeceasedAge]").val('');
					$("input[name=MotherDeceasedCause]").val('');
	}
	
	
});
//mother general health poor
$("input[name=MotherGenHealth]").click(function(){
	if($("input[name=MotherGenHealth][value=Poor]").is(':checked'))
	{
		$("span#spanPainOccur02").show();
	}
	else
	{
		$("span#spanPainOccur02").hide();
	  $("input[name=MotherPoorHealth]").val('');  

		
	}
	
	
	
});
	$("#btnProfile").click(function(){
		var isvalid=true;
		if($("input[type=text][name=FatherAge]").is(':visible'))
		{
			if($("input[type=text][name=FatherAge]").val().length==0)
			{
				alert("please enter father age");     
				isvalid=false;
				
			}
		}
		if($("input[type=text][name=FamilyPhysician]").is(':visible'))
		{
			if($("input[type=text][name=FamilyPhysician]").val().length==0)
			{
				alert("please enter reason of poor health in father age");     
				isvalid=false;
				
			}
		}
		if($("input[type=text][name=FatherDeceasedAge]").is(':visible'))
		{
			if($("input[type=text][name=FatherDeceasedAge]").val().length==0)
			{
				alert("please enter age at death in myfather general health");     
				isvalid=false;
				
			}
		}
		if($("input[type=text][name=FatherDeceasedCause]").is(':visible'))
		{
			if($("input[type=text][name=FatherDeceasedCause]").val().length==0)
			{
				alert("please enter cause of death in father age");     
				isvalid=false;
				
			}
		}
		
		if($("input[type=text][name=MotherAge]").is(':visible'))
		{
			if($("input[type=text][name=MotherAge]").val().length==0)
			{
				alert("please enter MotherAge age");  
				isvalid=false;
			}
		}
			
  if($("input[type=text][name=MotherDeceasedAge]").is(':visible'))
		{
			if($("input[type=text][name=MotherDeceasedAge]").val().length==0)
			{
				alert("please enter age at death im mother general health");  
				isvalid=false;
			}
		}if($("input[type=text][name=MotherDeceasedCause]").is(':visible'))
		{
			if($("input[type=text][name=MotherDeceasedCause]").val().length==0)
			{
				alert("please enter cause of death in mother general death");  
				isvalid=false;
			}
		}if($("#motherpoorhealth").is(':visible'))
		{
			if($("#motherpoorhealth").val().length==0)
			{
				alert("please enter reason of poor health in mother general health");  
				isvalid=false;
			}
		}


			return isvalid;   
		
		
		});
	
	
	});
</script>
<?php include ('footer_user.php'); ?>