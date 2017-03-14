
<?php
include ('header_user.php');
include ('left_sidebar_user.php');
?>
<script language="javascript">
    function PrintMe(summary) {
        var disp_setting = "toolbar=yes,location=no,";
        disp_setting += "directories=yes,menubar=yes,";
        disp_setting += "scrollbars=yes,width=100%,  left=0, top=25";
        var content_vlue = document.getElementById(summary).innerHTML;
        var docprint = window.open("", "", disp_setting);
        docprint.document.open();
        docprint.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"');
        docprint.document.write('"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
        docprint.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">');
        docprint.document.write('<head><title>Summary</title>');
        docprint.document.write('<style type="text/css">body{ margin:0px;');
        docprint.document.write('font-family:verdana,Arial;color:#000;');
        docprint.document.write('font-family:Verdana, Geneva, sans-serif; font-size:12px;}');
        docprint.document.write('a{color:#000;text-decoration:none;} </style>');
        docprint.document.write('</head><body onLoad="self.print()">');
        docprint.document.write(content_vlue);
        docprint.document.write('</body></html>');
        docprint.document.close();
        docprint.focus();
    }
</script>

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
    .right_col {
        margin-bottom: -50px !important;
        min-height: 140px !important;
        overflow-y: hidden !important;
    }
</style>
<!-- personal details-->
<?php
$squery = "SELECT * FROM personal_details where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);
while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['FullName'] = $row['FullName'];
    $_SESSION['Address'] = $row['Address'];
    $_SESSION['Mobile'] = $row['Mobile'];
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['FamilyPhysician'] = $row['FamilyPhysician'];
    $_SESSION['PhysicianCity'] = $row['PhysicianCity'];
}
?>
<div id="summary">
    <div class="right_col" role="main">
        <div class="profile">
            <div class="">
                <div class="profile_inner">
                    <div class="col-lg-2 col-md-3 col-sm-2 col-xs-10">
                        <div class="person-img">
<?php {
    if ($_SESSION['IsSocial'] == true) {
        ?>
                                    <img alt="Social Image" src="<?php echo $_SESSION['ProfileImage']; ?>" class="person-acc-img img-shadow img-responsive">
                                    <?php
                                } else {
                                    ?>
                                    <img alt=" Not Social Image" src="image_uploads/<?php echo $_SESSION['ProfileImage']; ?>" class="person-acc-img img-shadow img-responsive">
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-1 col-md-3 col-sm-2 col-xs-10"></div>

                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-10">
                        <div class="profile-infobox">
                            <div class="person-info">
                                <h3 class="person-info-title">Personal Information</h3>
                                <h5><span>Name :</span>  <?php echo $_SESSION['FullName']; ?></h5>
                                <h5><span>Contact Phone Number : </span> +91 <?php echo $_SESSION['Mobile']; ?> </h5>
                                <h5><span>Email id : </span> <?php echo $_SESSION['Email']; ?> </h5>
                                <h5><span>Address :</span>  <?php echo $_SESSION['Address']; ?> </h5>
                                <h5><span>Family Physician Name : </span> <?php echo $_SESSION['FamilyPhysician']; ?>  </h5>
                                <h5><span>Family Physician Address : </span> <?php echo $_SESSION['PhysicianCity']; ?> </h5>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- dempography page content -->
<?php
$squery = "SELECT * FROM demography where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);
while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['Gender'] = $row['Gender'];
    $_SESSION['Age'] = $row['Age'];
    $_SESSION['Enthnicity'] = $row['Enthnicity'];
    $_SESSION['MaritalStatus'] = $row['MaritalStatus'];
    $_SESSION['Degree'] = $row['Degree'];
    $_SESSION['TotalIncome'] = $row['TotalIncome'];
    $_SESSION['EmploymentStatus'] = $row['EmploymentStatus'];
    $_SESSION['HousingStatus'] = $row['HousingStatus'];
}
?>       
    <div class="right_col" role="main" style="min-height: 405px; padding: 0 65px !important;"> 
        <div class="profile">
            <div class="person-info col-lg-12">
                <h3 class="person-info-title">Demography Data</h3>
                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Gender : <?php echo $_SESSION['Gender']; ?></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Gender']; ?></div>
                    <div class="clearfix"></div>

                </div>

                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Age</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Age']; ?></div>
                    <div class="clearfix"></div>

                </div>

                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Enthnicity</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Enthnicity']; ?></div>
                    <div class="clearfix"></div>

                </div>

                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Marital Status</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MaritalStatus']; ?></div>
                    <div class="clearfix"></div>

                </div>
                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Degree</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Degree']; ?></div>
                    <div class="clearfix"></div>

                </div>
                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">TotalIncome</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TotalIncome']; ?></div>
                    <div class="clearfix"></div>

                </div>
                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Employment Status</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EmploymentStatus']; ?></div>
                    <div class="clearfix"></div>

                </div>
                <div class="detail001">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Housing Status</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HousingStatus']; ?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--health history page content-->
<?php
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

                <h3 class="person-info-title">Lipid Cholesterolr</h3>
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
    <!-- past medical history-->
<?php
$squery = "SELECT * FROM past_medical_history where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);
while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['HeartAttack'] = $row['HeartAttack'];
    $_SESSION['CoronaryArtery'] = $row['CoronaryArtery'];
    $_SESSION['CongestiveHeartFail'] = $row['CongestiveHeartFail'];
    $_SESSION['Arrhythmia'] = $row['Arrhythmia'];
    $_SESSION['RheumaticFever'] = $row['RheumaticFever'];
    $_SESSION['HeartMurmur'] = $row['HeartMurmur'];
    $_SESSION['ArteryDisease'] = $row['ArteryDisease'];
    $_SESSION['VaricoseVeins'] = $row['VaricoseVeins'];
    $_SESSION['Arthritis'] = $row['Arthritis'];
    $_SESSION['DiabetesTest'] = $row['DiabetesTest'];
    $_SESSION['Phlebitis'] = $row['Phlebitis'];
    $_SESSION['Dizziness'] = $row['Dizziness'];
    $_SESSION['EpilepsySeizures'] = $row['EpilepsySeizures'];
    $_SESSION['Stroke'] = $row['Stroke'];
    $_SESSION['Diphtheria'] = $row['Diphtheria'];
    $_SESSION['ScarletFaver'] = $row['ScarletFaver'];
    $_SESSION['ScarletFaver'] = $row['ScarletFaver'];
    $_SESSION['Infectious'] = $row['Infectious'];
    $_SESSION['Anemia'] = $row['Anemia'];
    $_SESSION['Asthma'] = $row['Asthma'];
    $_SESSION['Pneumonia'] = $row['Pneumonia'];
    $_SESSION['Bronchitis'] = $row['Bronchitis'];
    $_SESSION['Emphysema'] = $row['Emphysema'];
    $_SESSION['Tuberculosis'] = $row['Tuberculosis'];
    $_SESSION['AbnormalChestXray'] = $row['AbnormalChestXray'];
    $_SESSION['OtherLungDisease'] = $row['OtherLungDisease'];
    $_SESSION['InjuryBackLegJoint'] = $row['InjuryBackLegJoint'];
    $_SESSION['BrokenBones'] = $row['BrokenBones'];
    $_SESSION['JaundiceGallbladder'] = $row['JaundiceGallbladder'];
    $_SESSION['KidneyDisease'] = $row['KidneyDisease'];
    $_SESSION['Hepatitis'] = $row['Hepatitis'];
    $_SESSION['NervousEmotionProblem'] = $row['NervousEmotionProblem'];
    $_SESSION['ThyroidHypo'] = $row['ThyroidHypo'];
    $_SESSION['ThyroidHyper'] = $row['ThyroidHyper'];
    $_SESSION['Depression'] = $row['Depression'];
    $_SESSION['Seizures'] = $row['Seizures'];
    $_SESSION['MigraineRecurrent'] = $row['MigraineRecurrent'];
    $_SESSION['LegPainShortDistance'] = $row['LegPainShortDistance'];
    $_SESSION['FootProblems'] = $row['FootProblems'];
    $_SESSION['BackProblems'] = $row['BackProblems'];
    $_SESSION['StomachProblem'] = $row['StomachProblem'];
    $_SESSION['VisionHearingProblem'] = $row['VisionHearingProblem'];
    $_SESSION['WartMoleChange'] = $row['WartMoleChange'];
    $_SESSION['GlaucomaPressure'] = $row['GlaucomaPressure'];
    $_SESSION['ExpLoudNoise'] = $row['ExpLoudNoise'];
    $_SESSION['PneumoniaFever'] = $row['PneumoniaFever'];
    $_SESSION['SignificantWeightLoss'] = $row['SignificantWeightLoss'];
    $_SESSION['DehydrationRapidBeat'] = $row['DehydrationRapidBeat'];
    $_SESSION['BloodClot'] = $row['BloodClot'];
    $_SESSION['HerniaSymptoms'] = $row['HerniaSymptoms'];
    $_SESSION['SoresFootAnkle'] = $row['SoresFootAnkle'];
    $_SESSION['PainAfterFall'] = $row['PainAfterFall'];
    $_SESSION['EyeCondition'] = $row['EyeCondition'];
    $_SESSION['CataractTransplant'] = $row['CataractTransplant'];
    $_SESSION['LaserEyeSurgery'] = $row['LaserEyeSurgery'];
    $_SESSION['Std'] = $row['Std'];
    $_SESSION['Cancer'] = $row['Cancer'];
    $_SESSION['Others'] = $row['Others'];
}
?>
    <div class="right_col" role="main"> 
        <div class="profile">
            <div class="person-info col-lg-12" style="padding: 10px 56px;">
                <h3 class="person-info-title">Past Medical History  </h3>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Heart attack  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <?php echo $_SESSION['HeartAttack']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Coronary artery disease  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CoronaryArtery']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Congestive heart failure </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CongestiveHeartFail']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Arrhythmia </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Arrhythmia']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Rheumatic Fever </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['RheumaticFever']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Heart murmur </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeartMurmur']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Diseases of the arteries </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ArteryDisease']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Varicose veins </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['VaricoseVeins']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Arthritis of legs or arms  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Arthritis']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Diabetes or abnormal blood-sugar tests  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['DiabetesTest']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Phlebitis (inflammation of a vein)  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Phlebitis']; ?></div>
                    <div class="clearfix"></div>
                </div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Dizziness or fainting spells  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Dizziness']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Epilepsy or seizures  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EpilepsySeizures']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Stroke  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Stroke']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Diphtheria  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Diphtheria']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Scarlet Fever   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ScarletFaver']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Infectious mononucleosis  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Infectious']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Anemia </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Anemia']; ?></div>
                    <div class="clearfix"></div>
                </div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Asthma  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Asthma']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Pneumonia </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Pneumonia']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Bronchitis  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Bronchitis']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Emphysema  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Emphysema']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Tuberculosis  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Tuberculosis']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Abnormal chest X-ray  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['AbnormalChestXray']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Other lung disease  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherLungDisease']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Injuries to back, arms, legs or joint  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['InjuryBackLegJoint']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Broken bones  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BrokenBones']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Jaundice or gall bladder problems  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['JaundiceGallbladder']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Kidney disease  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['KidneyDisease']; ?></div>
                    <div class="clearfix"></div></div>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Hepatitis   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Hepatitis']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Thyroid disease (hypo)  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ThyroidHypo']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Thyroid (hyper)  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ThyroidHyper']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Depression  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Depression']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Seizures  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Seizures']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Headaches </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Headaches']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Pain in your legs after walking short distances? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LegPainShortDistance']; ?></div>
                    <div class="clearfix"></div></div>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Foot problems?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FootProblems']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Back problems? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BackProblems']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Stomach or intestinal problems, such as recurrent heartburn, ulcers, constipation or diarrhea?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['StomachProblem']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Significant vision or hearing problems? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['VisionHearingProblem']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Recent change in a wart or a mole? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WartMoleChange']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Glaucoma or increased pressure in the eyes? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['GlaucomaPressure']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Nervousv Emotion Problem? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['NervousEmotionProblem']; ?></div>
                    <div class="clearfix"></div></div>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Exposure to loud noises for long periods?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ExpLoudNoise']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> An infection such as pneumonia accompanied by a fever?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PneumoniaFever']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Significant unexplained weight loss? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SignificantWeightLoss']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">A fever, which can cause dehydration and rapid heart beat?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['DehydrationRapidBeat']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">A deep vein thrombosis (blood clot)?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BloodClot']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">A hernia that is causing symptoms? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HerniaSymptoms']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Foot or ankle sores that won’t heal?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SoresFootAnkle']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Persistent pain or problems walking after you have fallen?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainAfterFall']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Eye conditions such as bleeding in the retina or detached retina?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EyeCondition']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Cataract or lens transplant?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CataractTransplant']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Laser treatment or other eye surgery?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LaserEyeSurgery']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Sexually transmitted disease   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Std']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Cancer </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Cancer']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Others  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Others']; ?></div>
                    <div class="clearfix"></div></div>

            </div>
        </div>
    </div>
    <!-- medication log-->
    <div class="right_col" role="main">
        <div class="profile">
            <div class="">
                <h3 class="person-info-title">Medication Log</h3>

                <div class="col-sm-12" style="width: 100%; overflow-x: scroll ! important;">
                    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1034px;">
                        <thead>
                            <tr role="row">
                                <th style="width: 73px;">SNo.</th>
                                
                                <th style="width: 73px;">Prescription Date</th>

                                <th style="width: 73px;">Medication name</th>

                                <th style="width: 73px;">Doctor</th>

                                <th style="width: 73px;">Dosage</th>

                                <th style="width: 73px;">Time per day</th>

                                <th style="width: 73px;">With Food? Y/N</th>

                                <th style="width: 73px;">Whats It's For</th>

                                <th style="width: 73px;">Reactions &amp; Side Effects</th></tr>
                        </thead>


                        <tbody id="TextBoxesGroup">
<?php
$query = "SELECT * FROM medication_log where PatientId = '" . $_SESSION['PatientId'] . "'";
$stmt = mysql_query($query);
$i = 1;
while ($row = mysql_fetch_assoc($stmt)) {
    ?>	
                                <tr role="row" class="odd">
                                    <td ><?php echo $i++; ?></td>
                                    <td ><?php echo $row['PrescriptionDate']; ?></td>
                                    <td ><?php echo $row['MedicationName']; ?></td>
                                    <td ><?php echo $row['Doctor']; ?></td>
                                    <td ><?php echo $row['Dosage']; ?></td>
                                    <td ><?php echo $row['TimesPerDay']; ?></td>
                                    <td ><?php echo $row['WithFood']; ?></td>
                                    <td ><?php echo $row['Reason']; ?></td>
                                    <td ><?php echo $row['Reactions']; ?></td>
                                </tr>
    <?php
}
?></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- suppliment log-->
    <div class="right_col" role="main">
        <div class="profile">
            <div class="">
                <h3 class="person-info-title">Suppliment Log</h3>

                <div class="col-sm-12" style="width: 100%; overflow-x: scroll ! important;">
                    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1034px;">
                        <thead>
                            <tr role="row">
                                <th style="width: 73px;">SNo.</th>
                                
                                <th style="width: 73px;">Prescription Date</th>

                                <th style="width: 73px;">Supplement name</th>

                                <th style="width: 73px;">Doctor</th>

                                <th style="width: 73px;">Dosage</th>

                                <th style="width: 73px;">Time per day</th>

                                <th style="width: 73px;">With Food? Y/N</th>

                                <th style="width: 73px;">Whats It's For</th>

                                <th style="width: 73px;">Reactions &amp; Side Effects</th></tr>
                        </thead>


                        <tbody id="TextBoxesGroup">
<?php
$query = "SELECT * FROM supplement_log where PatientId = '" . $_SESSION['PatientId'] . "'";

$stmt = mysql_query($query);


$i = 1;
while ($row = mysql_fetch_assoc($stmt)) {
    ?>	
                                <tr role="row" class="odd">
                                    <td ><?php echo $i++; ?></td>
                                    <td ><?php echo $row['PrescriptionDate']; ?></td>
                                    <td ><?php echo $row['MedicationName']; ?></td>
                                    <td ><?php echo $row['Doctor']; ?></td>
                                    <td ><?php echo $row['Dosage']; ?></td>
                                    <td ><?php echo $row['TimesPerDay']; ?></td>
                                    <td ><?php echo $row['WithFood']; ?></td>
                                    <td ><?php echo $row['Reason']; ?></td>
                                    <td ><?php echo $row['Reactions']; ?></td>
                                </tr>
    <?php
}
?></tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    <!--daily medicationlog-->
<?php
$squery = "Select
			U.Id as PatientId,
			t1.DateGiven,t1.Dose,t1.MediTime,t1.AdministeredBy,t1.SideEffects,t1.Needed,
			t2.MediReaction,t2.MediAspPen,t2.LatexProducts,t2.OtherFoodHay,t2.LastPhysicalExamin,t2.ExaminResult,t2.LastChestXray,t2.ChestXrayResult,
			t2.LastEkgEcg,t2.EkgEcgResult,t2.LastDentalCheck,t2.CheckResult,t2.OtherDiagnosticTest,t2.MedicalReportDesc,t2.HospitalName,t2.HospitalDate,
			t2.HospitalReasons
			FROM login_cygen u
			LEFT JOIN daily_medication__administration_log t1 ON u.Id=t1.PatientId
			LEFT JOIN daily_medication_log t2 ON u.Id=t2.PatientId
			Where u.Id='" . $_SESSION['PatientId'] . "'";

$result = mysql_query($squery);
while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['DateGiven'] = $row['DateGiven'];
    $_SESSION['Dose'] = $row['Dose'];
    $_SESSION['MediTime'] = $row['MediTime'];
    $_SESSION['AdministeredBy'] = $row['AdministeredBy'];
    $_SESSION['SideEffects'] = $row['SideEffects'];
    $_SESSION['Needed'] = $row['Needed'];
    $_SESSION['MediReaction'] = $row['MediReaction'];
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
    $_SESSION['MedicalReportDesc'] = $row['MedicalReportDesc'];
    $_SESSION['HospitalName'] = $row['HospitalName'];
    $_SESSION['HospitalDate'] = $row['HospitalDate'];
    $_SESSION['HospitalReasons'] = $row['HospitalReasons'];
}
?>
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
$stmt = $pdo->prepare('SELECT * FROM daily_medication__administration_log where PatientId = "' . $_SESSION['PatientId'] . '"');
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
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have You Ever Had An Adverse Reaction (Nausea, Dizziness) To Any Medications Or Injections? If Yes, Please Explain</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MediReaction']; ?></div>
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

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Complete Physical Examination:</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastPhysicalExamin']; ?></div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Complete Physical Examination:</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ExaminResult']; ?></div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Chest X-Ray:</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastChestXray']; ?></div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Chest X-Ray:</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ChestXrayResult']; ?></div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Electrocardiogram (EKG Or ECG):</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastEkgEcg']; ?></div>
                        <div class="clearfix"></div>

                    </div>

                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Electrocardiogram (EKG Or ECG):</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EkgEcgResult']; ?></div>
                        <div class="clearfix"></div>

                    </div>

                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Date Of Last Dental Check-Up:</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastDentalCheck']; ?></div>
                        <div class="clearfix"></div>

                    </div>

                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Result Of Last Dental Check-Up:</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CheckResult']; ?></div>
                        <div class="clearfix"></div>

                    </div>

                    <div class="detail001">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">List Any Other Medical Or Diagnostic Test You Have Had In The Past Two Years</div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherDiagnosticTest']; ?></div>
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
    <!--family medical-->
<?php
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['HeartAttackUn'] == "Heart Attacks Under Age 50") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Strokes Under Age 50</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['StrokeUnder'] == "Strokes Under Age 50") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">High Blood Pressure</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['HighBp'] == "High Blood Pressure") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Elevated Cholesterol</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['ElevatedCholesterol'] == "Elevated Cholesterol") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Diabetes</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['Diabetes'] == "Diabetes") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Asthma Or Hay Fever</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['AsthmaHayFever'] == "Asthma Or Hay Fever") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Congenital Heart Disease</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['CongenitalHeartDisease'] == "Congenital Heart Disease") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Heart Operations</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['HeartOperation'] == "Heart Operations") {echo 'Yes';} else {echo 'No';} ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Glaucoma</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['Glaucoma'] == "Glaucoma") {echo 'Yes';} else {echo 'No';} ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Obesity (20 Or More Pounds Overweight)</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['Obesity'] == "Obesity (20 Or More Pounds Overweight)") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Leukemia Or Cancer Under Age 60</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php if ($_SESSION['LeukemiaCancerUn'] == "Leukemia Or Cancer Under Age 60") {
        echo 'Yes';
    } else {
        echo 'No';
    } ?></div>
                    <div class="clearfix"></div></div>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Other Comment</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherComment']; ?></div>
                    <div class="clearfix"></div></div>
                <br>
            </div>
        </div>
    </div>
    <!--cardic symptoms-->
    <?php
    $squery = "SELECT * FROM chest_pain where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['PainLocation'] = $row['PainLocation'];
        $_SESSION['PainNotice'] = $row['PainNotice'];
        $_SESSION['PainDuration'] = $row['PainDuration'];
        $_SESSION['PainRadiate'] = $row['PainRadiate'];
        $_SESSION['PainOften'] = $row['PainOften'];
        $_SESSION['PainDescription'] = $row['PainDescription'];
        $_SESSION['OtherSymptoms'] = $row['OtherSymptoms'];
        $_SESSION['OccurrenceChestPain'] = $row['OccurrenceChestPain'];
    }

    $squery = "SELECT * FROM cyanosis where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['SkinColor'] = $row['SkinColor'];
        $_SESSION['NoticePeriod'] = $row['NoticePeriod'];
        $_SESSION['OccurrenceCyanosis'] = $row['OccurrenceCyanosis'];
        $_SESSION['WorkType'] = $row['WorkType'];
        $_SESSION['FamilyCondition'] = $row['FamilyCondition'];
        $_SESSION['ResultCyanosis'] = $row['ResultCyanosis'];
        $_SESSION['Pain'] = $row['Pain'];
    }

    $squery = "SELECT * FROM dyspnea where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['BreathShortness'] = $row['BreathShortness'];
        $_SESSION['OccurrenceDyspnea'] = $row['OccurrenceDyspnea'];
        $_SESSION['ParoxysmalNoctDyspnea'] = $row['ParoxysmalNoctDyspnea'];
        $_SESSION['PillowNumber'] = $row['PillowNumber'];
        $_SESSION['WalkLength'] = $row['WalkLength'];
        $_SESSION['SwellingLegDyspnea'] = $row['SwellingLegDyspnea'];
        $_SESSION['ChestPainDyspnea'] = $row['ChestPainDyspnea'];
    }

    $squery = "SELECT * FROM edema where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['SwellingLegEdema'] = $row['SwellingLegEdema'];
        $_SESSION['SwellingNotice'] = $row['SwellingNotice'];
        $_SESSION['OccurrenceEdema'] = $row['OccurrenceEdema'];
        $_SESSION['WorseTime'] = $row['WorseTime'];
        $_SESSION['SwellingDec'] = $row['SwellingDec'];
        $_SESSION['BreathShortEdema'] = $row['BreathShortEdema'];
        $_SESSION['ChestPainDyspnea'] = $row['ChestPainDyspnea'];
        $_SESSION['WeightChange'] = $row['WeightChange'];
        $_SESSION['SwellingDown'] = $row['SwellingDown'];
        $_SESSION['SwellingLegPain'] = $row['SwellingLegPain'];
        $_SESSION['SwellingLeg'] = $row['SwellingLeg'];
        $_SESSION['MediEdema'] = $row['MediEdema'];
    }

    $squery = "SELECT * FROM fainting where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['OftenFaint'] = $row['OftenFaint'];
        $_SESSION['OptionFaint'] = $row['OptionFaint'];
        $_SESSION['ConsciousLost'] = $row['ConsciousLost'];
        $_SESSION['OccurrenceFaint'] = $row['OccurrenceFaint'];
        $_SESSION['FaintPosition'] = $row['FaintPosition'];
        $_SESSION['FaintAssoc'] = $row['FaintAssoc'];
        $_SESSION['FaintEffect'] = $row['FaintEffect'];
        $_SESSION['HeavyPeriods'] = $row['HeavyPeriods'];
    }

    $squery = "SELECT * FROM fatigue where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['FatigueTenure'] = $row['FatigueTenure'];
        $_SESSION['OccurrenceFatigue'] = $row['OccurrenceFatigue'];
        $_SESSION['TirednessMorEve'] = $row['TirednessMorEve'];
        $_SESSION['TirednessWork'] = $row['TirednessWork'];
        $_SESSION['FatigueReliev'] = $row['FatigueReliev'];
        $_SESSION['TirednessLeast'] = $row['TirednessLeast'];
    }

    $squery = "SELECT * FROM general where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['HeartProblem'] = $row['HeartProblem'];
        $_SESSION['AnginaHeartAttack'] = $row['AnginaHeartAttack'];
        $_SESSION['CardicSurgery'] = $row['CardicSurgery'];
        $_SESSION['HighBlP'] = $row['HighBlP'];
        $_SESSION['MurRheumaticFever'] = $row['MurRheumaticFever'];
        $_SESSION['SwellingPhlebitis'] = $row['SwellingPhlebitis'];
    }

    $squery = "SELECT * FROM hemoptysis where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['TenureHemoptysis'] = $row['TenureHemoptysis'];
        $_SESSION['OccurrenceHemoptysis'] = $row['OccurrenceHemoptysis'];
        $_SESSION['ChestPainHemoptysis'] = $row['ChestPainHemoptysis'];
        $_SESSION['BloodAmount'] = $row['BloodAmount'];
    }

    $squery = "SELECT * FROM irregular_heart_beat where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['IrrHeartPalp'] = $row['IrrHeartPalp'];
        $_SESSION['TenureHeartBeat'] = $row['TenureHeartBeat'];
        $_SESSION['NoticeHeart'] = $row['NoticeHeart'];
        $_SESSION['IrrHeartLast'] = $row['IrrHeartLast'];
        $_SESSION['IrrHeartFeel'] = $row['IrrHeartFeel'];
        $_SESSION['IrrHeartStop'] = $row['IrrHeartStop'];
        $_SESSION['IrrHeartAbruptly'] = $row['IrrHeartAbruptly'];
        $_SESSION['PulseCount'] = $row['PulseCount'];
        $_SESSION['RhythmFelt'] = $row['RhythmFelt'];
        $_SESSION['IrrHeartExe'] = $row['IrrHeartExe'];
        $_SESSION['IrrHeartExp'] = $row['IrrHeartExp'];
        $_SESSION['ThyroidGlandPro'] = $row['ThyroidGlandPro'];
        $_SESSION['Medication'] = $row['Medication'];
        $_SESSION['SmokeDrugs'] = $row['SmokeDrugs'];
        $_SESSION['CaffeineDay'] = $row['CaffeineDay'];
        $_SESSION['Urinate'] = $row['Urinate'];
    }
    ?>


    <div class="right_col" role="main">
        <div class="profile info-head">
            <div class="person-info col-lg-12" style="padding: 10px 56px;">
                <h3> Cardiac Symptoms </h3>
                <h3>1. Chest Pain </h3>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Where is the pain </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <?php echo $_SESSION['PainLocation']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">When did the pain first start?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainNotice']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How long does it last?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainDuration']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does the pain radiate, if so where?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainRadiate']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How often do you have the pain?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainOften']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How would you describe the pain  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainDescription']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does the pain occur at  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceChestPain']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you have any other symptoms with the pain such as shortness of (tick more than 1 option if you have any of this Symptoms)  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<?php
echo $_SESSION['OtherLegPain'];
echo $_SESSION['OtherBreath'];
echo $_SESSION['OtherPalpitations'];
echo $_SESSION['OtherNausea'];
echo $_SESSION['OtherVomiting'];
echo $_SESSION['OtherCoughing'];
echo $_SESSION['OtherFever'];
?>
                    </div>                  
                    <div class="clearfix"></div></div>

                <br />
                <br />
                <br />
                <br />
                <h3>2. Cyanosis (bluish color skin)  </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Where is the bluish color skin?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SkinColor']; ?></div>


                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How long have you noticed it?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['NoticePeriod']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Did is seem to happen suddenly or gradually?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceCyanosis']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does Anyone Else In Your Family Has This Condition?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FamilyCondition']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">What makes the bluish skin color better or worse?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeartDisease']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you had any chest pain, cough, or bleeding associated with the bluish color skin?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Pain']; ?></div>
                    <div class="clearfix"></div></div>

                <br />
                <br />
                <br />
                <br />

                <h3> 3. Dyspnea (shortness of breath)  </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How long have you been short of breath?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BreathShortness']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Did the shortness of breath occur suddenly or gradually?    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceDyspnea']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you wake up at night feeling short of breath (paroxysmal nocturnal dyspnea)?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ParoxysmalNoctDyspnea']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How many pillows do you sleep on at night? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PillowNumber']; ?></div>
                    <div class="clearfix"></div>
                </div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How far can you walk before you become short of breath?  </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WalkLength']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you notice swelling in your legs associated with your shortness of breath? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingLegDyspnea']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you had any chest pain associated with your shortness of breath?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ChestPainDyspnea']; ?></div>
                    <div class="clearfix"></div></div>

                <br />
                <br />
                <br />
                <br />

                <h3> 4. Edema (dependent)  </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you have swelling in our legs?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingLegEdema']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">When did you first notice the swelling?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingNotice']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Did it appear suddenly or gradually?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceEdema']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Is the swelling worse in the morning or evening?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WorseTime']; ?></div>
                    <div class="clearfix"></div>
                </div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does the swelling decrease after a night's sleep?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingDec']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does your shortness of breath associated with the swelling?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BreathShortEdema']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you noticed any change in your weight? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WeightChange']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does elevating you feet makes the swelling go down?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingDown']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you have pain in your legs associated with the swelling?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingLegPain']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do both legs swell equally?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingLeg']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Are you taking any medications, If so, which once?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MediEdema']; ?></div>
                    <div class="clearfix"></div>
                </div>
                <br />
                <br />
                <br />
                <br />

                <h3> 5. Fainting (syncope) </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How often do you faint (or feel like you are going to faint)?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OftenFaint']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">What are you doing when you faint (or feel like you are going to faint)?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OptionFaint']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you ever lost consciousness?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ConsciousLost']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does the fainting (of feeling like you are going to faint) occur suddenly?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceFaint']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">In what position were you when you fainted (or felt like you were going to faint)?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FaintPosition']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you noticed anything that seem to be associated with the fainting (feeling like you are going to faint), for example, chest pain, irregular heart beat, nausea, confusion, hunger, tingling, or numbness? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FaintAssoc']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you have any black, tarry bowl movements after the fainting episode? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FaintEffect']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you have heavy periods?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeavyPeriods']; ?></div>
                    <div class="clearfix"></div></div>
                <br />
                <br />
                <br />
                <br />

                <h3>6. Fatigue </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How long have you felt fatigued?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FatigueTenure']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Did the fatigue come on suddenly or gradually?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceFatigue']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you feel tired all day or only in the morning and/or evening?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TirednessMorEve']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you feel more tired at home or at work?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TirednessWork']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Is your fatigue relieved by rest?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FatigueReliev']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> When do you feel least tired?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TirednessLeast']; ?></div>
                    <div class="clearfix"></div>
                </div>
                <br />
                <br />
                <br />
                <br />

                <h3>7. General </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you ever had any problems with your heart?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeartProblem']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you ever had angina or a heart attack?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['AnginaHeartAttack']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you ever had a cardiac catheterization or heart surgery?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CardicSurgery']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you have high blood pressure?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HighBlP']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Have you ever been told you had a heart murmur or had rheumatic fever?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MurRheumaticFever']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Have you ever had phlebitis (pain) or swelling in your legs?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SwellingPhlebitis']; ?></div>
                    <div class="clearfix"></div></div>

                <br />
                <br />
                <br />
                <br />
                <h3>8. Hemoptysis (coughing up blood) </h3>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> How long have you been coughing up blood?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TenureHemoptysis']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> How often do you cough up blood?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceHemoptysis']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Do you have chest pain when you cough up blood?    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ChestPainHemoptysis']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  How much blood do you cough up?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BloodAmount']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <br />
                <br />
                <br />
                <br />

                <h3>9. Irregular Heart Beat  </h3>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  Do you have any problems with irregular heart beat or palpitations (when you can feel your heart beating fast or irregular)? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IrrHeartPalp']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  How long have you had the irregular heart beats?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['TenureHeartBeat']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> When did you first notice the irregular heart beats?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['NoticeHeart']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  How long did the irregular heart beats last?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IrrHeartLast']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> What did the irregular heart beats feel like? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IrrHeartFeel']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">   Did anything you do stop the irregular heart beats?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IrrHeartStop']; ?></div>
                    <div class="clearfix"></div></div>

               <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  Did the irregular heartbeats stop abruptly?   </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IrrHeartAbruptly']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  Could you count your pulse during the episode?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PulseCount']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">   Can you tap on the table what the rhythm felt like?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['RhythmFelt']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">   Have you noticed the irregular heart beats during exercise?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IrrHeartExe']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">    Did you experience any sweating, flushing, or headaches with your irregular heart beats?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IrrHeartExp']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">   Any you taking any medications, if so, which ones?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Medication']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  Has anyone ever told you that you had problems with your thyroid gland?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ThyroidGlandPro']; ?></div>
                    <div class="clearfix"></div></div>


                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">   Do you smoke or use any other recreational or street drugs, if so, how much and how often?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SmokeDrugs']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">   How much caffeine do you drink a day (coffee, tea, soft drinks)?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CaffeineDay']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  After the irregular heart beats, do you need to urinate?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Urinate']; ?></div>
                    <div class="clearfix"></div></div>
            </div>
        </div>
    </div>
<?php
$squery = "SELECT * FROM alcohol_status where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);

while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['DrinkStatus'] = $row['DrinkStatus'];
    $_SESSION['BeerIntake'] = $row['BeerIntake'];
    $_SESSION['WineIntake'] = $row['WineIntake'];
    $_SESSION['HardLiquor'] = $row['HardLiquor'];
    $_SESSION['HeavyDrinker'] = $row['HeavyDrinker'];
    $_SESSION['Comments'] = $row['Comments'];
}

$squery = "SELECT * FROM substance_abuse where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);

while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['Name'] = $row['Name'];
    $_SESSION['NoticePeriod'] = $row['NoticePeriod'];
    $_SESSION['FrequencyIntake'] = $row['FrequencyIntake'];
    $_SESSION['Duration'] = $row['Duration'];
    $_SESSION['Addiction'] = $row['Addiction'];
}
?>
    <div class="right_col" role="main">
        <div class="profile info-head">
            <div class="person-info col-lg-12" style="padding: 10px 56px;">
                <h3>  Alcohol Status  </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You ever drink alcoholic beverages?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <?php echo $_SESSION['DrinkStatus']; ?> </div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Beer Intake  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BeerIntake']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Wine Intake </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WineIntake']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Hard Liquor Intake </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HardLiquor']; ?> </div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">At any time in the past, were you a heavy drinker (consumption of six ounces of hard liquor per day or more)?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HeavyDrinker']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Comment </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Comments']; ?></div>
                    <div class="clearfix"></div></div><br>

                <h3>  Substance Abuse  </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Specify in case of any other substance abuse : </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Name']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Frequency of intake  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FrequencyIntake']; ?>  </div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Duration </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Duration']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Addiction </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Addiction']; ?> </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--smoking status-->
<?php
$squery = "SELECT * FROM smoking_status where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);

while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['Smoker'] = $row['Smoker'];
    $_SESSION['PerDayRange'] = $row['PerDayRange'];
    $_SESSION['PerDay'] = $row['PerDay'];
    $_SESSION['EverSmoked'] = $row['EverSmoked'];
    $_SESSION['LastStopSmoke'] = $row['LastStopSmoke'];
    $_SESSION['IndoorTobacco'] = $row['IndoorTobacco'];
    $_SESSION['IndoorTobaccoDaily'] = $row['IndoorTobaccoDaily'];
}
?>
    <div class="right_col" role="main">
        <div class="profile info-head">
            <div class="person-info col-lg-12" style="padding: 10px 56px;">
                <h3>  Smoking Status  </h3>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Are You A Smoker?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <?php echo $_SESSION['Smoker']; ?> </div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Give The Time When You Last Stopped Smoking?  </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PerDayRange']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How Many Per Day? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PerDay']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Have You Ever Smoked? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EverSmoked']; ?> </div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How Long Have You Been Smoking? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastStopSmoke']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Are You Exposed To Indoor Tobacco Smoke? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IndoorTobacco']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">About How Many Hours Per Day Are You Exposed To Indoor Tobacco Smoke?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IndoorTobaccoDaily']; ?></div>
                    <div class="clearfix"></div></div>
            </div>
        </div>
    </div>
    <!-- dietry-->
    <?php
    $squery = "SELECT * FROM dietary where PatientId = '" . $_SESSION['PatientId'] . "'";
    $result = mysql_query($squery);

    while ($row = mysql_fetch_assoc($result)) {

        $_SESSION['LacVeg'] = $row['LacVeg'];
        $_SESSION['OvoVeg'] = $row['OvoVeg'];
        $_SESSION['RawVegan'] = $row['RawVegan'];
        $_SESSION['FlexSemiVeg'] = $row['FlexSemiVeg'];
        $_SESSION['Fruitarian'] = $row['Fruitarian'];
        $_SESSION['Pescatarian'] = $row['Pescatarian'];
        $_SESSION['Chicken'] = $row['Chicken'];
        $_SESSION['Mutton'] = $row['Mutton'];
        $_SESSION['Pork'] = $row['Pork'];
        $_SESSION['DuckSeafood'] = $row['DuckSeafood'];
        $_SESSION['Burgers'] = $row['Burgers'];
        $_SESSION['CheeseFat'] = $row['CheeseFat'];
        $_SESSION['HomoMilk'] = $row['HomoMilk'];
        $_SESSION['YogMilkFat'] = $row['YogMilkFat'];
        $_SESSION['IceCream'] = $row['IceCream'];
        $_SESSION['FriedFoods'] = $row['FriedFoods'];
        $_SESSION['EggConAvg'] = $row['EggConAvg'];
        $_SESSION['PoultryFish'] = $row['PoultryFish'];
        $_SESSION['MilkPer'] = $row['MilkPer'];
        $_SESSION['LowFat'] = $row['LowFat'];
        $_SESSION['YogurtMilk'] = $row['YogurtMilk'];
        $_SESSION['Margarine'] = $row['Margarine'];
        $_SESSION['PastriesCakes'] = $row['PastriesCakes'];
        $_SESSION['PremiumIceCream'] = $row['PremiumIceCream'];
        $_SESSION['Donuts'] = $row['Donuts'];
        $_SESSION['Cookies'] = $row['Cookies'];
        $_SESSION['HighFat'] = $row['HighFat'];
        $_SESSION['RichDesserts'] = $row['RichDesserts'];
        $_SESSION['PotatoChips'] = $row['PotatoChips'];
        $_SESSION['Nachos'] = $row['Nachos'];
        $_SESSION['FriedSnack'] = $row['FriedSnack'];
        $_SESSION['Cheese'] = $row['Cheese'];
        $_SESSION['ChocoBars'] = $row['ChocoBars'];
        $_SESSION['SoftDrink'] = $row['SoftDrink'];
        $_SESSION['HardCandy'] = $row['HardCandy'];
        $_SESSION['GummyBear'] = $row['GummyBear'];
        $_SESSION['Tomato'] = $row['Tomato'];
        $_SESSION['LargeStack'] = $row['LargeStack'];
        $_SESSION['LargeCauliflower'] = $row['LargeCauliflower'];
        $_SESSION['SmallSalad'] = $row['SmallSalad'];
        $_SESSION['OzVegJuice'] = $row['OzVegJuice'];
        $_SESSION['OzVegSoup'] = $row['OzVegSoup'];
        $_SESSION['PastaMeal'] = $row['PastaMeal'];
        $_SESSION['HalfCup'] = $row['HalfCup'];
        $_SESSION['SliceBread'] = $row['SliceBread'];
        $_SESSION['HalfBagel'] = $row['HalfBagel'];
        $_SESSION['HalfEngMuffin'] = $row['HalfEngMuffin'];
        $_SESSION['QuarterCup'] = $row['QuarterCup'];
        $_SESSION['LowFatHigh'] = $row['LowFatHigh'];
        $_SESSION['ServingFruit'] = $row['ServingFruit'];
        $_SESSION['DietRegular'] = $row['DietRegular'];
        $_SESSION['CornChips'] = $row['CornChips'];
        $_SESSION['Licorice'] = $row['Licorice'];
        $_SESSION['FruitIce'] = $row['FruitIce'];
    }
    ?>
    <div class="right_col" role="main">
        <div class="profile">
            <div class="person-info col-lg-12" style="padding: 10px 56px;">
                <h3 class="person-info-title">Dietary Information</h3>
                <div class="detail001">
                    <div class="Sub-head">Vegetarian </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Lacto-Vegetarian</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LacVeg']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Ovo-Vegetarian</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OvoVeg']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Raw Vegan</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['RawVegan']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Flexitarian / Semi Vegetarian</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FlexSemiVeg']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Fruitarian</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Fruitarian']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Pescatarian</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Pescatarian']; ?></div>
                    <div class="clearfix"></div>

                </div>
                <div class="detail001">
                    <div class="Sub-head">Non-Vegetarian </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Chicken</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Chicken']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Mutton</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Mutton']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Pork</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Pork']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Duck & Seafood</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['DuckSeafood']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head col-lg-6 col-md-6 col-sm-6 col-xs-12">Burgers </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 60px; margin-bottom:10px"><?php echo $_SESSION['Burgers']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head">How Often, On Average, Do You Consume Any Of The Following Foods: </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Cheese That Are More Than 20% Milk Fat</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CheeseFat']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Homogenized Milk</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HomoMilk']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Yogurt That Is More Than 1% Milk Fat</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['YogMilkFat']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Ice Cream</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['IceCream']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Fried Foods</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FriedFoods']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Egg Consumption On Average</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EggConAvg']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Choose Poultry Or Fish In Place Of Red Meat, Pork Or Fried Food In Most Situations? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 60px; margin-bottom:10px"><?php echo $_SESSION['PoultryFish']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head">How Often On Average, Do You Consume Any Of The Following </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">2% Milk</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['MilkPer']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Low Fat Sour Cream</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LowFat']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Yogurt That Is 2% Milk Fat</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['YogurtMilk']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Margarine</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Margarine']; ?></div>
                    <div class="clearfix"></div>
                </div>


                <div class="detail001">
                    <div class="Sub-head">How Often On Average Do You Consume Any Of The Following Foods?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Pastries Such As Cakes, Croissants</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PastriesCakes']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Premium Ice Cream</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PremiumIceCream']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Donuts</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Donuts']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Cookies (3 Or More)</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Cookies']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">High Fat Muffins</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HighFat']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Rich Desserts (Ex, Cheesecake, Brownies)</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['RichDesserts']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head">How Often On Average Do You Consume Any Of The Following Snack Foods?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Potato Chips</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PotatoChips']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Nachos</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Nachos']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Any Type Of Fried Snack</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FriedSnack']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Cheese</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Cheese']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Chocolate Bars</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ChocoBars']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head">How Often On Average Do You Consume Any Of The Following Snack Or Drinks?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Regular Soft Drinks</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SoftDrink']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Hard Candy</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HardCandy']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Gummy Bears</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['GummyBear']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head">On An Average, How Many Servings Per Day Do You Consume Of Garden Type Vegetables (Ex, Carrots, Tomatoes, Broccoli, Cauliflower, Peppers, Romaine Lettuce Spinach, Collard Greens, Kale?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 Tomato</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Tomato']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 Large Stack Of Broccoli 8 Oz Of Food Cooked In Tomato Sauce</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LargeStack']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 Large Cauliflower Floret</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LargeCauliflower']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 Small Garden Salad</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SmallSalad']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">8 Oz Of Vegetable Juice</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OzVegJuice']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">8 Oz Of Vegetables Soup</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OzVegSoup']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head">On An Average, How Many Servings Per Day Do You Consume Of Any Of The Following:</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Pasta, Rice, Beans, Peas, Corn, Barley, Oatmeal?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PastaMeal']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Half Cup Of Pasta, Rice, Beans, Peas, Corn, Etc (Before Cooking)</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HalfCup']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 Slice Of Bread</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SliceBread']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Half Bagel</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HalfBagel']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Half English Muffin</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HalfEngMuffin']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Quarter Cup Of Most Cereal</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['QuarterCup']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Low Fat High Fibre Muffin</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LowFatHigh']; ?></div>
                    <div class="clearfix"></div>
                </div>
                <div class="detail001">
                    <div class="Sub-head col-lg-6 col-md-6 col-sm-6 col-xs-12">On An Average, How Many Servings Per Day Do You Consume Of Fruits?1serving= 1 Whole Fruit (Ex, Apple, Orange, Peach)= 1cup Chopped Fruit (Ex, Fruit Salad)= 8oz Fruit Juice </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 60px; margin-bottom:10px"><?php echo $_SESSION['ServingFruit']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="Sub-head">How Often, On An Average, Do You Consume Any Foods Or Drinks That Are Highly Processed And Contain Preservative, Artificial Flavours, Colours And Related Chemicals?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Diet And Regular Soft Drinks, Sugary Fruit Drinks
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['DietRegular']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Potato Chips,Nachos, Cheesies, Corn Chips Etc.</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CornChips']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Licorice, Jujubes, Gummy Bears, Gelatins Etc.</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Licorice']; ?></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Ice Cream, Fruit-Ices, Sorbets Etc.</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FruitIce']; ?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--vitamin-->
<?php
$squery = "SELECT * FROM vitamin_information WHERE PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);

while ($row = mysql_fetch_assoc($result)) {
    $_SESSION['FruitVegAssessment'] = $row['FruitVegAssessment'];
    $_SESSION['CitrusAssessment'] = $row['CitrusAssessment'];
    $_SESSION['OrangeYellowFruit'] = $row['OrangeYellowFruit'];
    $_SESSION['CruciferousVeg'] = $row['CruciferousVeg'];
    $_SESSION['SmokedFood'] = $row['SmokedFood'];
    $_SESSION['ProcessedMeat'] = $row['ProcessedMeat'];
    $_SESSION['BarbecuFood'] = $row['BarbecuFood'];
    $_SESSION['CoffeeCupAvg'] = $row['CoffeeCupAvg'];
    $_SESSION['DairyServing'] = $row['DairyServing'];
    $_SESSION['Carrot'] = $row['Carrot'];
    $_SESSION['Apricot'] = $row['Apricot'];
    $_SESSION['Cantaloupe'] = $row['Cantaloupe'];
    $_SESSION['Melon'] = $row['Melon'];
    $_SESSION['Potato'] = $row['Potato'];
    $_SESSION['Peach'] = $row['Peach'];
}
?>
    <div class="right_col" role="main">
        <div class="profile">
            <div class="person-info col-lg-12" style="padding: 10px 56px;">
                <h3 class="person-info-title">Vitamin Information</h3>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Have Fewer Than 5 Servings Of Fruits And Vegetables Per Day On Average?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['FruitVegAssessment']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Consume Citrus Fruits Fewer Than 4 Times Per Week On Average? </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CitrusAssessment']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Consume 1 Serving Of Orange-Yellow Fruits And Vegetables Fewer Than 5 Times Per Week On Average?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OrangeYellowFruit']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 whole carrot?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Carrot']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">8 large apricot halves?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Apricot']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Quater of a cantaloupe?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Cantaloupe']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Half cup melon squash?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Melon']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 baked sweet potato?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Potato']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001"> 
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1 whole peach/nectarine?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Peach']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Consume Cruciferous Vegetables (Cabbage, Cauliflower, Broccoli, Brussels Sprouts) Fewer Than 5 Times Per Week On Average?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CruciferousVeg']; ?></div>
                    <div class="clearfix"></div>
                </div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Eat Smoked Meats Or Fish More Than Once Per Week On Average?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SmokedFood']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Eat Luncheon Meats, Processed Meats, Sausages, Bacon, Bologna Or Any Other Nitrate Salt Containing Meat Once Per Week Or More On Average ?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ProcessedMeat']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Eat Barbecued Foods That Are Charred Once Per Week Or More On Average?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BarbecuFood']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Drink 3 Or More Cups Of Coffee Per Day On Average?</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['CoffeeCupAvg']; ?></div>
                    <div class="clearfix"></div></div>

                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You Consume Less Than Two Dairy Servings Per Day On Average? 1serving=8oz Of Milk Or Yogurt (Preferably Low-Fat Varieties)=3-4ow Of Cheese (Preferably Low-Fat Varieties)</div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['DairyServing']; ?></div>
                    <div class="clearfix"></div></div>
            </div>
        </div>
    </div>
    <!--confidential lifestyle-->
    <?php
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
    <div class="right_col" role="main" style="margin-bottom:50px;">
        <div class="profile">
            <div class="person-info col-lg-12" style="padding: 10px 56px;margin-bottom:70px;">
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">WeightConsider</div>
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">ExerciseProgramme </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ExerciseProgramme']; ?></div>
                    <div class="clearfix"></div></div>
                <div class="detail001">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">PersonalTrainer </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PersonalTrainer']; ?></div>
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
    <!--other reports-->
<?php
$squery = "SELECT * FROM others where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);

while ($row = mysql_fetch_assoc($result)) {

    $_SESSION['Others'] = $row['Others'];
}
?>
    <div class="right_col" role="main">
        <div class="profile">
            <div class="person-info col-lg-12" style="padding: 10px 56px;">
                <h3 class="person-info-title">Other Details</h3>
                <div class="detail001">
                    <label name="Others" class="text_box col-md-6 col-sm-6 col-xs-12" style="width:1000px;height:100px;" type="text"  placeholder="BeerIntake" /><?php echo $_SESSION['Others']; ?></label>
                    <input type="button" name="btnprint" class="form-continue col-md-3 col-sm-3 col-xs-6" value="Print Summary" onclick="PrintMe('summary')" style="height:60px;"/>                                           
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include ('footer_user.php'); ?>