<?php
include ('header_user.php');
include ('left_sidebar_user.php');
session_start();
$db_handle = new DBController();

?>
    <style>
        .btn {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.6px;
            line-height: 30px;
            padding: 5px 25px !important;
        }
		.detail_file{
			border-bottom: 1px solid #ebebeb;
			font-size: 17px;
			letter-spacing: 0.6px;
			padding-bottom: 10px;
			text-transform: none !important;
		}
		strong{
			color:red;
			margin-top:10px;
		}
    </style>
    <!-- page content -->
	<script>
$(document).ready(function() {
$("#removeButton").hide();

 $("#addButton").on('click', function() {
	 
	 var a = $('#txtPrescriptionDate0').val();
	 if(a == "")
	 {
		$("#removeButton").hide(); 
		 
	 }
	 else
	 {	 
	 var r = $('#TextBoxesGroup > tr').length;
	
	 if(r >= 1)
	 {
        $("#removeButton").show();
	 }
	 else
	 {
		 $("#removeButton").hide();
	 }
	 
	 }
    
  });
  });
  
 </script>
<?php
        $squery = "SELECT * FROM daily_medication__administration_log where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>
    <div class="right_col daily0101" role="main">
	
        <form class="form-horizontal" id="medical_log" method="post" action='ajaxDailyMedicationLog.php' style="clear:both" enctype="multipart/form-data">
            <div class="profile daily01">
				
                <div class="col-sm-12" style="width: 100%; overflow-x: scroll ! important;">
                    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1034px;">
                        <thead>
                            <tr role="row">
                                <th style="width: 73px;">Date Given</th>

                                <th style="width: 73px;">Dose</th>

                                <th style="width: 73px;">Time</th>

                                <th style="width: 73px;">Administered by</th>

                                <th style="width: 73px;">Side Effect Noted</th>

                                <th style="width: 73px;">Why it was Given if it is an "As needed" Medication</th>

                            </tr>
                        </thead>

                        <tbody id="TextBoxesGroup">

                            <tr role="row" class="odd">
                                <td>
                                    <input name="DateGiven[]" type="text" class="myDate"  id="txtTitleEnglish0">
                                </td>
                                <td  >
                                    <input name="Dose[]" type="text" > 
                                </td>
                                <td>
                                    <input name="MediTime[]" type="text"  >
                                </td>
                                <td>
                                    <input name="AdministeredBy[]" type="text"  >
                                </td>
                                <td  >
                                    <input name="SideEffects[]" type="text"  >
                                </td>
                                <td>
                                    <input name="Needed[]" type="text">
                                </td>

                            </tr>

                        </tbody>

                    </table>
                </div>
                <div class="col-sm-12" style="margin-top:50px;">
                    <input type='button' value='Add Row' id='addButton' class="btn btn-success">
                    <input type='button' value='Remove Row' id='removeButton' class="btn btn-danger">
				<input type="submit" id="submit"  class="btn btn-success" style="float:right !important" value="Save &amp; Continue">

				
                </div>

                <div class="clearfix"></div>

                <div class="family-info info-head mg-top daily01">

                    <div class="personal-detail">
                        <div class="questionary-box">
<h3>Have you ever had an adverse reaction (nausea, dizziness) to any medications or injections </h3>

<div class="questionary-opt q1">

<div class="select-items specialty_radio">


<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input type="radio" class="speciality questionary-radio" name="MediReaction_radio" value="Yes" id="chkYes"> Yes
</div>

<span id="SpecializedType" style="display:none; margin-right:30px" class="yes_reaction" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<input class="select_text" name="MediReaction_yes" placeholder="Please explain" id="yes_reaction1" type="text" >
</span>
<div class="clearfix"></div>



</div>

<div class="specialty_radio">

<input type="radio" class="speciality questionary-radio" name="MediReaction_radio" value="No">No

</div>

<div class="specialty_radio">


<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input type="radio" class="speciality questionary-radio" name="MediReaction_radio"  value="Other">Other
</div>
<span id="medications" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<input class="select_text" name="MediReaction_other" id="other_reaction" placeholder="Please explain"  type="text" >

</span>
<div class="clearfix"></div>


</div>

</div>

</div>


<div class="questionary-box">

<h3>Do you have any allergies (rash, hives, swelling) list the categories below   </h3>

<div class="Sub-head">Medications e.g. penicillin, aspirin </div>

<div class="questionary-opt q2">
<div class="select-items specialty_radio">

<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input type="radio" class="speciality questionary-radio" name="MediAspPen_radio" value="Yes" id="chkYes"> Yes
</div>

<span id="SpecializedType1" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<input class="select_text" name="MediAspPen" id="medicationyes" placeholder="Which medications" type="text">
</span>
<div class="clearfix"></div>

</div>

<div class="specialty_radio">

 <input type="radio" class="speciality questionary-radio" name="MediAspPen_radio" value="No"> No 
</div>

                            </div>

                            <div class="Sub-head"> Latex/rubber products </div>

                            <div class="questionary-opt q3">

                                <div class="select-items specialty_radio">
                                  
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input type="radio" class="speciality questionary-radio" name="LatexProducts_radio" value="Yes" id="chkYes"> Yes
                                        </div>

                                        <span id="SpecializedType2" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<input class="select_text" name="LatexProducts" id="Latexyes" placeholder="Which product" type="text">
</span>
                                        <div class="clearfix"></div>
                                 
                                </div>

                                <div class="specialty_radio">
                                 
                                        <input type="radio" class="speciality questionary-radio" name="LatexProducts_radio" value="No"> No 
                                </div>

                            </div>

                            <div class="Sub-head"> Other e.g. hayfever, foods </div>

                            <div class="questionary-opt q4">

                                <div class="select-items specialty_radio">
                                    
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input type="radio" class="speciality questionary-radio" name="OtherFoodHay_radio" value="Yes" id="chkYes"> Yes
                                        </div>

                                        <span id="SpecializedType3" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
<input class="select_text" name="OtherFoodHay" id="otheryes"placeholder="Please Mention" type="text" id="">
</span>
                                        <div class="clearfix"></div>
                                  
                                </div>

                                <div class="specialty_radio">
                         
                                        <input type="radio" class="speciality questionary-radio" name="OtherFoodHay_radio" value="No"> No 
                                </div>

                            </div>

                            <!--my new HTML-->

                            <div class="questionary-box">

                                <h3>Date of last complete physical examination   </h3>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="ExaminResult" value="Normal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Normal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="ExaminResult" value="Abnormal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Abnormal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio dphide" name="ExaminResult" value="Never" id="never" type="radio"> </div>
                                        <div class="check01"> Never </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio dphide" name="ExaminResult" value="Cant remember" id="cant" type="radio"> </div>
                                        <div class="check01"> Can't remember </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-11 ">
                                    <div class="input-group" id="hiddendatepicker">
                                        <span id="basic-addon1" class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i>
</span>
                                        <input id="datepicker1" class="form-control text" type="text" placeholder="select your date" name="LastPhysicalExamin">
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="questionary-box">

                                <h3>Date of last chest X-ray:   </h3>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="ChestXrayResult" value="Normal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Normal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="ChestXrayResult" value="Abnormal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Abnormal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="ChestXrayResult" value="Never" id="chestnever" type="radio"> </div>
                                        <div class="check01"> Never </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio hidedate " name="ChestXrayResult" value="Cant remember" id="chestcant" type="radio"> </div>
                                        <div class="check01"> Can't remember </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-11">
                                    <div class="input-group"id="hiddendatepicker1">
                                        <span id="basic-addon1" class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i>
</span>
                                        <input id="datepicker2" class="form-control text" type="text" placeholder="select your date" name="LastChestXray">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="questionary-box">

                                <h3>Date of last electrocardiogram (EKG or ECG)    </h3>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="EkgEcgResult" value="Normal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Normal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="EkgEcgResult" value="Abnormal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Abnormal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="EkgEcgResult" value="Never" id="ecgnever" type="radio"> </div>
                                        <div class="check01"> Never </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="EkgEcgResult" value="Can't remember" id="ecgcant" type="radio"> </div>
                                        <div class="check01"> Can't remember </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-11">
                                    <div class="input-group"id="hiddendatepicker2">
                                        <span id="basic-addon1" class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i>
</span>
                                        <input id="datepicker3" class="form-control text" type="text" placeholder="select your date" name="LastEkgEcg">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="questionary-box">

                                <h3>Date of last dental check-up:   </h3>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="CheckResult" value="Normal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Normal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="CheckResult" value="Abnormal" id="chkYes" type="radio"> </div>
                                        <div class="check01"> Abnormal </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="CheckResult" value="Never" id="checknever" type="radio"> </div>
                                        <div class="check01"> Never </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                                        <div class="cleck02">
                                            <input class="speciality questionary-radio " name="CheckResult" value="Can't remember" id="checkcant" type="radio"> </div>
                                        <div class="check01"> Can't remember </div>

                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-11">
                                    <div class="input-group"id="hiddendatepicker3">
                                        <span id="basic-addon1" class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i>
</span>
                                        <input id="datepicker4" class="form-control text" type="text" placeholder="select your date" name="LastDentalCheck">
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div>

                                <h3> List any other medical or diagnostic test you have had in the past two years </h3>

                                <div class="questionary-opt q5">

                                    <div class="select-items specialty_radio">
                                        <label>
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                                <input type="radio" class="speciality questionary-radio" name="OtherDiagnosticTest" value="Yes" id="Yes"> Yes
                                            </div>

                                            <div class="clearfix"></div>
                                        </label>
                                    </div>

                                    <div class="specialty_radio">
                                        <label>
                                            <input type="radio" class="speciality questionary-radio" id="no" name="OtherDiagnosticTest" value="No"> No </label>
                                    </div>

                                </div>

                                <div style="margin-bottom: 30px;" id="choosefile">
                                    <label style="vertical-align:top" class="custom-file-input">
                                        <input type="file" id="uploadBtn" name="MedicalReport"> </label>
                                    <input style="height:50px; margin-left:10px; border:none; background:none; line-height:30px;" disabled="disabled" placeholder="Choose File" id="uploadFile">

                                    <script type="text/javascript">
                                        document.getElementById("uploadBtn").onchange = function() {
                                            //document.getElementById("uploadFile").value = this.value;
											document.getElementById("uploadFile").value = this.value.replace("C:\\fakepath\\","");
                                        };
                                    </script>
                                </div>
                                <textarea style="width:90%; height:100px; border:1px solid #ddd" name="MedicalReportDesc" placeholder="Name of the tests"></textarea>

                            </div>

                            <div>

                                <h3> List hospitalizations, including dates of and reasons for hospitalization </h3>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input placeholder="Hospital Name" class="form-control text" id="txt1" name="HospitalName" type="text">
                                </div>
                                
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-11">
                                    <div class="input-group">
                                        <span id="basic-addon1" class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i>
</span>

                                        <input id="datepicker5" class="form-control text" type="text" placeholder="select your date" name="HospitalDate">

                                    </div>
                                </div>
                                <br />
                                <br>
                                <br>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                    <textarea style="width:90%; height:100px; border:1px solid #ddd;" name="HospitalReasons" placeholder="Reason For Hospitalization"></textarea>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="submit" id="submit"  class="btn btn-success" style="float:right !important" value="Save &amp; Continue">
               </div>
            </div>
        </form>
    </div>
		<?php 
		}
	
		else // view
		{
			$squery = "Select
			U.Id as PatientId,
			t2.MediReaction,t2.OtherExplain,t2.MediAspPen,t2.LatexProducts,t2.OtherFoodHay,t2.LastPhysicalExamin,t2.ExaminResult,t2.LastChestXray,t2.ChestXrayResult,
			t2.LastEkgEcg,t2.EkgEcgResult,t2.LastDentalCheck,t2.CheckResult,t2.OtherDiagnosticTest,t2.MedicalReport,t2.MedicalReportDesc,t2.HospitalName,t2.HospitalDate,
			t2.HospitalReasons
			FROM login_cygen u
			LEFT JOIN daily_medication_log t2 ON u.Id=t2.PatientId
			Where u.Id='".$_SESSION['PatientId']."'";
			
			$result = mysql_query($squery);
			while ($row = mysql_fetch_assoc($result)) {
			
			$_SESSION['MediReaction'] = $row['MediReaction'];
			$_SESSION['OtherExplain'] = $row['OtherExplain'];
			$_SESSION['MediAspPen'] = $row['MediAspPen'];
			$_SESSION['LatexProducts'] = $row['LatexProducts'];
			$_SESSION['OtherFoodHay'] = $row['OtherFoodHay'];
			$_SESSION['LastPhysicalExamin'] = $row['LastPhysicalExamin'];
			$_SESSION['ExaminResult'] = $row['ExaminResult'];
			$_SESSION['LastChestXray'] = $row['LastChestXray'];
			$_SESSION['ChestXrayResult'] = $row['ChestXrayResult'];
			$_SESSION['LastEkgEcg'] = $row['LastEkgEcg'];
			$_SESSION['EkgEcgResult'] = $row['EkgEcgResult'];
			$_SESSION['LastDentalCheck'] = $row['LastDentalCheck'];
			$_SESSION['CheckResult'] = $row['CheckResult'];
			$_SESSION['OtherDiagnosticTest'] = $row['OtherDiagnosticTest'];
			$_SESSION['MedicalReport'] = $row['MedicalReport'];
			$_SESSION['MedicalReportDesc'] = $row['MedicalReportDesc'];
			$_SESSION['HospitalName'] = $row['HospitalName'];
			$_SESSION['HospitalDate'] = $row['HospitalDate'];
			$_SESSION['HospitalReasons'] = $row['HospitalReasons'];
			
			}?>
		    <div class="right_col" role="main">
            <div class="profile daily01">
<div class="person-info col-lg-12">
  <h3 class="person-info-title">Daily Medication Data</h3>
		<div class="col-sm-12" style="width: 100%; overflow-x: scroll ! important;">
                    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1034px;">
                        <thead>
                            <tr role="row">
							 <th style="width: 73px;">SNo.</th>
                                <th style="width: 73px;">Date Given</th>

                                <th style="width: 73px;">Dose</th>

                                <th style="width: 73px;">Time</th>

                                <th style="width: 73px;">Administered by</th>

                                <th style="width: 73px;">Side Effect Noted</th>

                                <th style="width: 73px;">Why it was Given if it is an "As needed" Medication</th>

                            </tr>
                        </thead>

                        <tbody id="TextBoxesGroup">

                            <?php
						require_once("config.php");
						$pdo = Database::connect();
						$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$stmt = $pdo->prepare('SELECT * FROM daily_medication__administration_log where PatientId = "'.$_SESSION['PatientId'].'"');
						$stmt->execute();
						$i = 1;
						foreach ($stmt as $k1) {
							?>  
						<tr role="row" class="odd">
						<td><?php echo $i++; ?></td>
							<td><?php echo!empty($k1['DateGiven']) ? $k1['DateGiven'] : ''; ?></td>
							<td><?php echo!empty($k1['Dose']) ? $k1['Dose'] : ''; ?></td>
							<td><?php echo!empty($k1['MediTime']) ? $k1['MediTime'] : ''; ?></td>
							<td><?php echo!empty($k1['AdministeredBy']) ? $k1['AdministeredBy'] : ''; ?></td>
							<td><?php echo!empty($k1['SideEffects']) ? $k1['SideEffects'] : ''; ?></td>
							<td><?php echo!empty($k1['Needed']) ? $k1['Needed'] : ''; ?></td>
						  </tr>
						  <?php
                          }
                          ?>

                        </tbody>

                    </table>
				</div>
	<div class="profile" style="margin-top:150px">

  <div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have You Ever Had An Adverse Reaction (Nausea, Dizziness) To Any Medications Or Injections</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MediReaction']; ?></div>
  
<div class="clearfix"></div>

</div>
 <div class="detail001">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Explanation</div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherExplain']; ?></div>
 <div class="clearfix"></div>
 </div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Medications E.G. Penicillin, Aspirin</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MediAspPen']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Latex/Rubber Products</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LatexProducts']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Other E.G. Hayfever, Foods</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherFoodHay']; ?></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Complete Physical Examination</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastPhysicalExamin']; ?></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Complete Physical Examination</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ExaminResult']; ?></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Chest X-Ray</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastChestXray']; ?></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Chest X-Ray</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ChestXrayResult']; ?></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Electrocardiogram (EKG Or ECG)</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastEkgEcg']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Electrocardiogram (EKG Or ECG)</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EkgEcgResult']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Dental Check-Up</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastDentalCheck']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Dental Check-Up</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CheckResult']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">List Any Other Medical Or Diagnostic Test You Have Had In The Past Two Years</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherDiagnosticTest']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail_file">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Medical Report</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="http://cygengroup.com/<?php echo $_SESSION['MedicalReport']; ?>" target="_blank">Click To Open Report</a></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Description of Medical Or Diagnostic Test You Have Had In The Past Two Years</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MedicalReportDesc']; ?></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Hospital Name</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HospitalName']; ?></div>
<div class="clearfix"></div>

</div>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Dates Of Hospitalization</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HospitalDate']; ?></div>
<div class="clearfix"></div>
</div>
<div class="detail001">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Reasons For Hospitalization</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HospitalReasons']; ?></div>
<div class="clearfix"></div>
</div>
</div>  </div>
				
                </div>
                </div>
</div>
        <?php
		}
	}?>
     <script>
 $(document).on('click','.myDate',function(){
	 $(this).datepicker({changeMonth: true,
	 dateFormat: 'dd-mm-yy',
      changeYear: true,maxDate:new Date()});
 });
</script>
      <script>	
	    
	$(document).ready(function(){
$("input[name=ExaminResult]").click(function(){
	
	  if($("#never").is(':checked'))
		  {
			 $("#hiddendatepicker").hide();
		   } 
		   
		   else if($("#cant").is(':checked'))
		  {
			 $("#hiddendatepicker").hide();
		   } 
		   else
		   {
			   $("#hiddendatepicker").show();

		   }
		  
        });
$("input[name=ChestXrayResult]").click(function(){
	
	  if($("#chestnever").is(':checked'))
		  {
			 $("#hiddendatepicker1").hide();
		   } 
		   
		   else if($("#chestcant").is(':checked'))
		  {
			 $("#hiddendatepicker1").hide();
		   } 
		   else
		   {
			   $("#hiddendatepicker1").show();

		   }
		  
        });
$("input[name=EkgEcgResult]").click(function(){
	
	  if($("#ecgnever").is(':checked'))
		  {
			 $("#hiddendatepicker2").hide();
		   } 
		   
		   else if($("#ecgcant").is(':checked'))
		  {
			 $("#hiddendatepicker2").hide();
		   } 
		   else
		   {
			   $("#hiddendatepicker2").show();

		   }
		  
        });
		
$("input[name=CheckResult]").click(function(){
	
	  if($("#checknever").is(':checked'))
		  {
			 $("#hiddendatepicker3").hide();
		   } 
		   
		   else if($("#checkcant").is(':checked'))
		  {
			 $("#hiddendatepicker3").hide();
		   } 
		   else
		   {
			   $("#hiddendatepicker3").show();

		   }
		  
        });	
$("input[name=ExaminResult]").click(function(){
	if($("#never").is(':checked'))
	{
		$("input[type=text][name=LastPhysicalExamin]").val('');
	}
	else if($("#cant").is(':checked'))
	{
			$("input[type=text][name=LastPhysicalExamin]").val('');  

	
	}
	
});	
$("input[name=ChestXrayResult]").click(function(){
	if($("#chestnever").is(':checked'))
	{
		$("input[type=text][name=LastChestXray]").val('');
	}
	else if($("#chestcant").is(':checked'))
	{
			$("input[type=text][name=LastChestXray]").val('');  

	
}
});	
$("input[name=EkgEcgResult]").click(function(){
	if($("#ecgnever").is(':checked'))
	{
		$("input[type=text][name=LastEkgEcg]").val('');
	}
	else if($("#ecgcant").is(':checked'))
	{
			$("input[type=text][name=LastEkgEcg]").val('');  

	
}
});	
$("input[name=CheckResult]").click(function(){
	if($("#checknever").is(':checked'))
	{
		$("input[type=text][name=LastDentalCheck]").val('');
	}
	else if($("#checkcant").is(':checked'))
	{
			$("input[type=text][name=LastDentalCheck]").val('');  

	
}
});	
			 }); 
	
	</script>
    <script type="text/javascript">
	 $('#datepicker1').datepicker({
			shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" });
		 
	  $('#datepicker2').datepicker({	shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" }); 
		   
	  $('#datepicker3').datepicker({	shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" });
		 
	  $('#datepicker4').datepicker({	shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" });
	  
	  $('#datepicker5').datepicker({	shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" });
	 
	$(document).on('click',".myDate", function(){
    $(this).datepicker({	shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" });
   }); 
        $(document).ready(function() {
			$("#txtTitleEnglish0").datepicker({	shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" });
						
			
			$('.q1').click(function () {
            var radioValue = $("input[name='MediReaction_radio']:checked").val();
            if (radioValue === 'Yes') {
                $("#SpecializedType").show();
				
            } else {
				$("#yes_reaction1").val("");
                $("#SpecializedType").hide(); 
            }
        });
		
		
			$('.q1').click(function () {
            var radioValue = $("input[name='MediReaction_radio']:checked").val();
            if (radioValue === 'Other') {
                $("#medications").show();
            } else {
				$("#other_reaction").val("");
                $("#medications").hide();
            }
        });
			
			
			
			$('.q2').click(function () {
            var radioValue = $("input[name='MediAspPen_radio']:checked").val();
            if (radioValue === 'Yes') {
                $("#SpecializedType1").show();
            } else {
				$("#medicationyes").val("");
                $("#SpecializedType1").hide();
            }
        });
		
		
		


			$('.q3').click(function () {
            var radioValue = $("input[name='LatexProducts_radio']:checked").val();
            if (radioValue === 'Yes') {
                $("#SpecializedType2").show();
            } else {
				$("#Latexyes").val("");
                $("#SpecializedType2").hide();
            }
        });
		
		
					$('.q4').click(function () {
            var radioValue = $("input[name='OtherFoodHay_radio']:checked").val();
            if (radioValue === 'Yes') {
                $("#SpecializedType3").show();
            } else {
				$("#otheryes").val("");
                $("#SpecializedType3").hide();  
            }
        });
            $('.q4 input:radio[id=chkYes]').click(function() {
                var radioValue = $(".q4 input[id='chkYes']:checked").val();
                if (radioValue == 'Yes') {
                    $("#SpecializedType3").show();
                } else {
                    $("#SpecializedType3").hide();
                }
            });

            $('.q5 input:radio[id=chkYes]').click(function() {
                var radioValue = $(".q5 input[id='chkYes']:checked").val();
                if (radioValue == 'Yes') {
                    $("#SpecializedType4").show();
                } else {
                    $("#SpecializedType4").hide();
                }
            });

           
            var counter = 1;

            function validateTextBoxesGroup(counter) {
                var c = counter - 1;
                if ($('#txtTitleEnglish' + c).val())
                    return true;
                else
                    return false;
            }
            //add fields
            $("#addButton").on('click', (function() {
                if (counter > 10) {
                    alert("Only 10 textboxes allow");
                    return false;
                }
                if (validateTextBoxesGroup(counter)) {
                    var newTextBoxDiv = $(document.createElement('tr'));
                    newTextBoxDiv.attr('class', 'odd');
                    newTextBoxDiv.attr('id', "TextBoxDiv" + counter);

                    newTextBoxDiv.after().html('<td><input type="text" name="DateGiven[]" class="myDate" id="txtTitleEnglish' + counter + '"></td><td><input type="text"  name="Dose[]" ></td><td><input type="text" name="MediTime[]"  ></td><td><input type="text" name="AdministeredBy[]"  ></td><td ><input type="text" name="SideEffects[]"  ></td><td><input type="text" name="Needed[]"></td>');

                    newTextBoxDiv.appendTo("#TextBoxesGroup");
			$(".myDate").datepicker({changeMonth: true,
			changeYear: true,   
			dateFormat: 'dd-mm-yy',
            maxDate:new Date()});
                    counter++;
                } else {
                    alert('Please fill above row first');
                    var c = counter - 1;
                    $("#txtTitleEnglish" + c).css("border-color", "red");
                }
            }));
            //remove fields
            $("#removeButton").on('click', (function() {
                if (counter == 1) {
                    alert("No more textbox to remove");
                    return false;
                }
                counter--;
                $("#TextBoxDiv" + counter).remove();
            }));

        });
    </script>
 
<!--validation -->
	<script>
    $(document).ready(function(e) {
	
		$("input[type=submit]").click(function(e) {
			var isvalid=true;
            if(!$("input[type=radio][name=MediReaction_radio]").is(':checked'))
			{
				alert("Please Select Have You Ever Had An Adverse Reaction");
				isvalid=false;
			}				
								
			 if(!$("input[type=radio][name=MediAspPen_radio]").is(':checked'))
			{
				alert("Please select Medications E.G. Penicillin, Aspirin");
				isvalid=false;
			}
			 if(!$("input[type=radio][name=LatexProducts_radio]").is(':checked'))
			{
				alert("Please select Latex/Rubber Products");
				isvalid=false;
			}
			 if(!$("input[type=radio][name=OtherFoodHay_radio]").is(':checked'))
			{
				alert("Please select Other E.G. Hayfever, Foods");
				isvalid=false;
			}
			 if(!$("input[type=radio][name=ExaminResult]").is(':checked'))
			{
				alert("Please select Date Of Last Complete Physical Examination");
				isvalid=false;
			}
		   if(!$("input[type=radio][name=ChestXrayResult]").is(':checked'))
			{
				alert("Please select Date Of Last Chest X-Ray");
				isvalid=false;
			}
			   if(!$("input[type=radio][name=EkgEcgResult]").is(':checked'))
			{
				alert("Please select Date Of Last Electrocardiogram");
				isvalid=false;
			}
			   if(!$("input[type=radio][name=CheckResult]").is(':checked'))
			{
				alert("Please select Date Of Last Dental Check-Up");
				isvalid=false;
			}
			 if($(".yes_reaction").is(':visible'))
			{
				if($("#yes_reaction1").val().length==0)
				{
					alert("please explain if you have and adverse reaction");
					isvalid=false;
					
				}				
			}
			 if($("#medications").is(':visible'))
			{

				if($("input[type=text][name=MediReaction_other]").val().length==0)
				{
					alert("please enter value in other adverse reaction");
					isvalid=false;
				}
			}
			if($("#medications").is(':visible'))
			{	var val1=$("input[type=text][name=MediReaction_other]").val();
		        var exp1=new RegExp(/^[a-zA-Z0-9 ]{100}$/);
				if(!exp1.test(val1))
				{
				alert("Please enter only 100 characters allowed in other adverse reaction");
				isvalid=false;
				}
				
			}
			
			//for required
			 if($("#SpecializedType1").is(':visible'))
			{
				if($("input[type=text][name=MediAspPen]").val().length==0)
				{
				alert("please enter value in Medications E.G. Penicillin, Aspirin");
				isvalid=false;
				}
				
			}
			//for regular expression
			if($("#SpecializedType1").is(':visible'))
			{	var val2=$("input[type=text][name=MediAspPen]").val();
		        var exp2=new RegExp(/^[a-zA-Z0-9 ]{100}$/);
				if(!exp2.test(val2))
				{
				alert("Please enter only 100 characters allowed in Medications E.G. Penicillin, Aspirin");
				isvalid=false;
				}
				
			}
			 if($("#SpecializedType2").is(':visible'))
			{
				if($("input[type=text][name=LatexProducts]").val().length==0)
				{
					alert("please enter value in Latex/Rubber Products");
					isvalid=false;
				}
			}
			if($("#SpecializedType2").is(':visible'))
			{	var val3=$("input[type=text][name=LatexProducts]").val();
		        var exp3=new RegExp(/^[a-zA-Z0-9 ]{100}$/);
				if(!exp3.test(val3))
				{
				alert("Please enter only 100 characters allowed in LatexProducts");
				isvalid=false;
				}
				
			}
		      if($("#SpecializedType3").is(':visible'))
			 {
				 if($("input[type=text][name=OtherFoodHay]").val().length==0)
				 {
					 alert("please enter value in Other E.G. Hayfever, Foods");
					 isvalid=false;
				 }
				 
			 }
			 if($("#SpecializedType3").is(':visible'))
			{	var val4=$("input[type=text][name=OtherFoodHay]").val();
		        var exp4=new RegExp(/^[a-zA-Z0-9 ]{100}$/);
				if(!exp4.test(val4))
				{
				alert("Please enter only 100 characters allowed in Other E.G. Hayfever, Foods");
				isvalid=false;
				}
				
			}
			 if($("#datepicker1").is(':visible'))
			 {
				 if($("#datepicker1").val().length==0)
				 {
					 alert("please enter date in Date Of Last Complete Physical Examination");
					 					 isvalid=false;
				 }
			 }
			  
			  if($("#datepicker2").is(':visible'))
			 {
				 if($("#datepicker2").val().length==0)
				 {
					 alert("please enter date in Date Of Last Chest X-Ray");
					 					 isvalid=false;

					
				 }
			 }
			  if($("#datepicker3").is(':visible'))
			 {
				 if($("#datepicker3").val().length==0)
				 {
					 alert("please enter date in Date Of Last Electrocardiogram");
					 					 isvalid=false;

					
				 }
			 }
			 if($("#datepicker4").is(':visible'))
			 {
				 if($("#datepicker4").val().length==0)
				 {
					 alert("please enter date in Date Of Last Dental Check-Up");
					 					 isvalid=false;

					
				 }
			 }
	       	return isvalid;	
			
        });
		
       });
        
    </script>
	<script>
	$(document).ready(function(){
		$("#no").click(function(){
			$("#choosefile").hide();
						  			
		});
		$("#Yes").click(function(){
			$("#choosefile").show();
						  			
		});
		
	});
	</script>
	 <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
 <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
  <script>  
 $(document).ready(function(){
	
    $("#medical_log").validate({
      rules: {       
        
		MedicalReport:
		{          
		  accept:"jpg,jpeg,pdf,doc"	  
        },
		MediReaction_other:
		{
			maxlength:200
		},
		MedicalReportDesc:
		{
			maxlength:200
		},
		HospitalReasons:
		{
			maxlength:200
		}
      },
      messages:{
		 
		MedicalReport:
		{
           accept:"<strong>Please select jpg,pdf,jpeg,doc </strong>"	
		}		   
        ,
		MediReaction_other:
		{
			maxlength:"<strong>Please enter only 200 characters</strong>"
		},
		MedicalReportDesc:
		{
			maxlength:"<strong>Please enter only 200 characters</strong>"
		},
		HospitalReasons:
		{
			maxlength:"<strong>Please enter only 200 characters</strong>"
		}
      }
	  
    });
  });
 </script>

    <?php include ('footer_user.php'); ?>