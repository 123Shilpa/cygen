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
    $PainLocation = $_POST['PainLocation'];
    $PainNotice = $_POST['PainNotice'];
    $PainDuration = $_POST['PainDuration'];
    $PainRadiate = $_POST['PainRadiate'];
    $PainOften = $_POST['PainOften'];
    $PainDescription = $_POST['PainDescription'];
    $OccurrenceChestPain = $_POST['OccurrenceChestPain'];
    $OccurrenceChestPainText = $_POST['OccurrenceChestPainText'];
    $OtherBreath = $_POST['OtherBreath'];
	$OtherPalpitations=$_POST['OtherPalpitations'];
	$OtherNausea=$_POST['OtherNausea'];
	$OtherVomiting=$_POST['OtherVomiting'];
	$OtherCoughing=$_POST['OtherCoughing'];
	$OtherFever=$_POST['OtherFever'];
	$OtherLegPain=$_POST['OtherLegPain'];
    
	$SkinColor = $_POST['SkinColor'];
    $NoticePeriod = $_POST['NoticePeriod'];
    $OccurrenceCyanosis = $_POST['OccurrenceCyanosis'];
    $FamilyCondition = $_POST['FamilyCondition'];
    $ResultCyanosis = $_POST['ResultCyanosis'];
    $Pain = $_POST['Pain'];
    $BreathShortness = $_POST['BreathShortness'];
    $OccurrenceDyspnea = $_POST['OccurrenceDyspnea'];
    $ParoxysmalNoctDyspnea = $_POST['ParoxysmalNoctDyspnea'];
    $PillowNumber = $_POST['PillowNumber'];
    $WalkLength = $_POST['WalkLength'];

    $SwellingLegDyspnea = $_POST['SwellingLegDyspnea'];
    $ChestPainDyspnea = $_POST['ChestPainDyspnea'];
    $SwellingLegEdema = $_POST['SwellingLegEdema'];
    $SwellingNotice = $_POST['SwellingNotice'];
    $OccurrenceEdema = $_POST['OccurrenceEdema'];
    $WorseTime = $_POST['WorseTime'];
    $SwellingDec = $_POST['SwellingDec'];
    $BreathShortEdema = $_POST['BreathShortEdema'];
    $WeightChange = $_POST['WeightChange'];
    $SwellingDown = $_POST['SwellingDown'];
    $SwellingLegPain = $_POST['SwellingLegPain'];

    $SwellingLeg = $_POST['SwellingLeg'];
    $MediEdema = $_POST['MediEdema'];
    $OftenFaint = $_POST['OftenFaint'];
    $OptionFaint = $_POST['OptionFaint'];
    $ConsciousLost = $_POST['ConsciousLost'];
    $OccurrenceFaint = $_POST['OccurrenceFaint'];
    $FaintPosition = $_POST['FaintPosition'];
    $FaintAssoc = $_POST['FaintAssoc'];
    $FaintEffect = $_POST['FaintEffect'];
    $HeavyPeriods = $_POST['HeavyPeriods'];

    $FatigueTenure = $_POST['FatigueTenure'];
    $OccurrenceFatigue = $_POST['OccurrenceFatigue'];
    $TirednessMorEve = $_POST['TirednessMorEve'];
    $TirednessWork = $_POST['TirednessWork'];
    $FatigueReliev = $_POST['FatigueReliev'];
    $TirednessLeast = $_POST['TirednessLeast'];
    $HeartProblem = $_POST['HeartProblem'];
    $AnginaHeartAttack = $_POST['AnginaHeartAttack'];
    $CardicSurgery = $_POST['CardicSurgery'];
    $HighBlP = $_POST['HighBlP'];
    $MurRheumaticFever = $_POST['MurRheumaticFever'];

    $SwellingPhlebitis = $_POST['SwellingPhlebitis'];
    $TenureHemoptysis = $_POST['TenureHemoptysis'];
    $OccurrenceHemoptysis = $_POST['OccurrenceHemoptysis'];
    $ChestPainHemoptysis = $_POST['ChestPainHemoptysis'];
    $BloodAmount = $_POST['BloodAmount '];
	$IrrHeartPalp = $_POST['IrrHeartPalp'];
	$TenureHeartBeat = $_POST['TenureHeartBeat'];
	$NoticeHeart = $_POST['NoticeHeart'];
	$IrrHeartLast = $_POST['IrrHeartLast'];
	$IrrHeartFeel = $_POST['IrrHeartFeel'];
	$IrrHeartStop = $_POST['IrrHeartStop'];
	$IrrHeartAbruptly = $_POST['IrrHeartAbruptly'];
	$PulseCount = $_POST['PulseCount'];
	$RhythmFelt = $_POST['RhythmFelt'];
	$IrrHeartExe = $_POST['IrrHeartExe'];
	$IrrHeartExp = $_POST['IrrHeartExp'];
	$Medication = $_POST['Medication'];
	$ThyroidGlandPro = $_POST['ThyroidGlandPro'];
	$SmokeDrugs = $_POST['SmokeDrugs'];
	$CaffeineDay = $_POST['CaffeineDay'];
	$Urinate = $_POST['Urinate'];
    $Status = '0';

    // validate input
    // update data
    //if ($valid) {
    $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = "INSERT INTO chest_pain (PatientId, PainLocation , PainNotice ,PainDuration , PainRadiate ,PainOften ,PainDescription, OccurrenceChestPain , OccurrenceChestPainText,OtherBreath,OtherPalpitations,OtherNausea,OtherVomiting,OtherCoughing,OtherFever,OtherLegPain,Status  ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $PainLocation , $PainNotice, $PainDuration , $PainRadiate ,$PainOften ,$PainDescription, $OccurrenceChestPain , $OccurrenceChestPainText, $OtherBreath,$OtherPalpitations,$OtherNausea,$OtherVomiting,$OtherCoughing,$OtherFever,$OtherLegPain, $Status  ));
		
		$sql = "INSERT INTO cyanosis (PatientId, SkinColor , NoticePeriod , OccurrenceCyanosis ,  FamilyCondition , ResultCyanosis , Pain,Status ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $SkinColor , $NoticePeriod, $OccurrenceCyanosis  , $FamilyCondition , $ResultCyanosis , $Pain , $Status ));
		
		$sql = "INSERT INTO dyspnea (PatientId, BreathShortness , OccurrenceDyspnea , ParoxysmalNoctDyspnea , PillowNumber , WalkLength , SwellingLegDyspnea, ChestPainDyspnea , Status ) VALUES (?, ?, ?, ?, ?, ?,? , ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $BreathShortness , $OccurrenceDyspnea, $ParoxysmalNoctDyspnea , $PillowNumber , $WalkLength , $SwellingLegDyspnea, $ChestPainDyspnea , $Status ));
		
		$sql = "INSERT INTO edema (PatientId, SwellingLegEdema , SwellingNotice , OccurrenceEdema , WorseTime , SwellingDec , BreathShortEdema, WeightChange , SwellingDown , SwellingLegPain , SwellingLeg , MediEdema , Status ) VALUES (?, ?, ?, ?, ?, ?, ? , ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $SwellingLegEdema , $SwellingNotice, $OccurrenceEdema , $WorseTime , $SwellingDec , $BreathShortEdema, $WeightChange , $SwellingDown , $SwellingLegPain , $SwellingLeg , $MediEdema , $Status ));
		
		$sql = "INSERT INTO fainting (PatientId, OftenFaint , OptionFaint , ConsciousLost, OccurrenceFaint, FaintPosition, FaintAssoc, FaintEffect, HeavyPeriods, Status ) VALUES (?, ?, ?, ?, ?,?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $OftenFaint , $OptionFaint, $ConsciousLost , $OccurrenceFaint, $FaintPosition, $FaintAssoc, $FaintEffect, $HeavyPeriods, $Status ));
		
		$sql = "INSERT INTO fatigue (PatientId, FatigueTenure , OccurrenceFatigue , TirednessMorEve, TirednessWork, FatigueReliev, TirednessLeast, Status ) VALUES (?, ?, ?, ?, ?,?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $FatigueTenure , $OccurrenceFatigue, $TirednessMorEve , $TirednessWork, $FatigueReliev, $TirednessLeast, $Status ));
						
		$sql = "INSERT INTO general (PatientId, HeartProblem , AnginaHeartAttack , CardicSurgery, HighBlP, MurRheumaticFever, SwellingPhlebitis, Status ) VALUES (?, ?, ?, ?, ?,?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $HeartProblem , $AnginaHeartAttack, $CardicSurgery , $HighBlP, $MurRheumaticFever, $SwellingPhlebitis, $Status ));
					
		$sql = "INSERT INTO hemoptysis (PatientId, TenureHemoptysis , OccurrenceHemoptysis , ChestPainHemoptysis, BloodAmount, Status ) VALUES (?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $TenureHemoptysis , $OccurrenceHemoptysis, $ChestPainHemoptysis , $BloodAmount,  $Status ));
		
		$sql = "INSERT INTO irregular_heart_beat (PatientId, IrrHeartPalp , TenureHeartBeat , NoticeHeart, IrrHeartLast, IrrHeartFeel, IrrHeartStop , IrrHeartAbruptly, PulseCount, RhythmFelt, IrrHeartExe, IrrHeartExp, Medication, ThyroidGlandPro, SmokeDrugs, CaffeineDay, Urinate, Status ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $IrrHeartPalp , $TenureHeartBeat, $NoticeHeart , $IrrHeartLast, $IrrHeartFeel, $IrrHeartStop , $IrrHeartAbruptly, $PulseCount, $RhythmFelt, $IrrHeartExe, $IrrHeartExp, $Medication, $ThyroidGlandPro, $SmokeDrugs, $CaffeineDay, $Urinate, $Status ));

		$sql = "UPDATE profilereport set CardiacSymptoms = ? WHERE PatientId=?";
		$q = $pdo->prepare($sql);
		$q->execute(array(7, $_SESSION['PatientId']));
		
        Database::disconnect();		
         echo"data submited";
		 echo "<script type = 'text/javascript'>alert('Successfully inserted'); window.location = 'alcohol_status.php'; </script>";
}
?>
<style>
    .btn {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.6px;
        line-height: 30px;
        padding: 5px 25px !important;
    }
</style>
<!-- page content -->
<?php
        $squery = "SELECT * FROM chest_pain where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>


<div class="right_col" role="main">
    <form class="form-horizontal" enctype="multipart/form-data"  method="post">
        <div class="profile info-head">
            <div class="col-sm-12">
                <div>
				<div class="row pull-right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input type="submit" name="submit"  class="form-continue" style="margin-top:-1px;" value="Save &amp; Continue">
                    </div>
                </div>
                    <h3>1. Cardiac Symptoms  </h3>
                    <div>
                        <div class="Sub-head"> Chest Pain? </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                                <input placeholder="Where is the pain?" class="form-control text" id="txt1" name="PainLocation" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                                <input placeholder="When did the pain first start?" class="form-control text" id="txt1" name="PainNotice" type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                                <input placeholder="How long does it last?" class="form-control text" id="txt1" name="PainDuration" type="text">
                            </div>

                        </div>
                        <div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div>

                        <div class="Sub-head">Does the pain radiate, if so where?</div>

                        <div class="questionary-box">

                            <div class="questionary-opt q1">

                                <div class="select-items specialty_radio">

                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input type="radio" class="speciality questionary-radio textbox-hide" name="PainRadiate" value="Multi" id="radioYes"> Yes
                                    </div>

                                    <span id="SpecializedType" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
                                        <input class="form-control text t1" id="radioYesTextBox" name="PainRadiate" placeholder="Where" type="text">
                                    </span>
                                    <div class="clearfix"></div>

                                </div>

                                <div class="specialty_radio">
                                    <input type="radio" class="speciality questionary-radio" name="PainRadiate" value="No" id="radioNo"> No
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div>
                        <div class="Sub-head">How often do you have the pain?</div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainOften" value="Often" type="radio"><span> Often </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="PainOften" class="questionary-radio" value="Seldom" type="radio"><span> Seldom </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainOften" value="1-2 Times" type="radio"><span> 1-2 Times </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="PainOften" class="questionary-radio" value="2-4 Times" type="radio"><span> 2-4 Times </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainOften" value="Rarely" type="radio"><span> Rarely </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="PainOften" class="questionary-radio" value="Unsure" type="radio"><span> Unsure </span>
                                </div>

                            </div>
                        </div>
                        <span class="ofter-error" style="display:none;color:red">This Field is required</span>

                    </div>

                    <div>
                        <div class="Sub-head">How would you describe the pain?</div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainDescription" value="Burning" type="radio"><span> Burning </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="PainDescription" class="questionary-radio" value="Pressing" type="radio"><span> Pressing </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainDescription" value="Stabbing" type="radio"><span> Stabbing </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="PainDescription" class="questionary-radio" value="Crushing" type="radio"><span> Crushing </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainDescription" value="Dull" type="radio"><span> Dull </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="PainDescription" class="questionary-radio" value="Aching" type="radio"><span> Aching </span>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainDescription" value="Throbbing" type="radio"><span> Throbbing  </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="PainDescription" class="questionary-radio" value="Sharp" type="radio"><span> Sharp  </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="PainDescription" value="Constricting" type="radio"><span> Constricting </span>
                                </div>

                            </div>
                        </div>
                      <span class="pain-error" style="display:none;color:red">This Field is required</span>


                    </div>

                    <div>
                        <div class="Sub-head">Does the pain occur at?</div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio ques" name="OccurrenceChestPain" value="rest" type="radio"><span> rest </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OccurrenceChestPain" class="questionary-radio ques" value="with exertion" type="radio"><span> with exertion </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio ques" name="OccurrenceChestPain" value="with stress" type="radio"><span> with stress </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OccurrenceChestPain" class="questionary-radio ques" value="after eating" type="radio"><span> after eating </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio ques" name="OccurrenceChestPain" value="when moving your arms" type="radio"><span>  when moving your arms </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OccurrenceChestPain" class="questionary-radio ques" value="During / After Intercource" type="radio"><span> During / After Intercourse </span>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                    <input class="questionary-radio ques" name="OccurrenceChestPain" value="Other Pain Reason" type="radio"><span>  Others </span>

                                    <span id="spanPainOccur" style="display:none; float:right" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input class="form-control text" name="OccurrenceChestPainText" placeholder="" type="text">
                                    </span>
                                </div>

                            </div>

                            <div>

                                <div class="clearfix"></div>

                            </div>

                        </div>
                      <span class="chest-error" style="display:none;color:red">This Field is required</span>


                    </div>

                    <div>
                        <div class="Sub-head"> Do you have any other symptoms with the pain such as shortness of (tick more than 1 option if you have any of this Symptoms)?</div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OtherBreath" value="Breath" type="checkbox"><span> Breath </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OtherPalpitations" class="questionary-radio" value="Palpitations" type="checkbox"><span> Palpitations </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OtherNausea" value="Nausea" type="checkbox"><span> Nausea </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OtherVomiting" class="questionary-radio" value="Vomiting" type="checkbox"><span> Vomiting </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OtherCoughing" value="Coughing" type="checkbox"><span> Coughing </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OtherFever" class="questionary-radio" value="Fever" type="checkbox"><span> Fever </span>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OtherLegPain" value="Leg Pain" type="checkbox"><span> Leg pain  </span>
                                </div>

                            </div>

                        </div>
                      <span class="other-error" style="display:none;color:red">This Field is required</span>

                    </div>
                </div>

                <div>

                    <br /> <br />
                    <h3> 2.	Cyanosis (bluish color skin)   </h3>

                    <div>
                        <div class="Sub-head">Where is the bluish color skin?</div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                <input placeholder=" " class="form-control text" id="txt1" name="SkinColor" type="text">
                            </div>

                        </div>
                        <span class="skin-error" style="color:red;display:none">This Field is required</span>
                         <span class="skin-error1" style="color:red;display:none">please enter only alphabets</span>

                    </div>

                    <div>
                        <div class="Sub-head"> How long have you noticed it?</div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="NoticePeriod" value="1 day" type="radio"><span> 1 day </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="NoticePeriod" class="questionary-radio" value="1-2 Day" type="radio"><span> 1-2 Day </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="NoticePeriod" value="More than 5 days" type="radio"><span> More than 5 days </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="NoticePeriod" class="questionary-radio" value="A week" type="radio"><span> A week </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="NoticePeriod" value="A Month" type="radio"><span> A Month </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="NoticePeriod" class="questionary-radio" value="A Year" type="radio"><span> A Year </span>
                                </div>

                            </div>
                        </div>
               <span class="notice-error" style="color:red;display:none">This Field is required</span>


                    </div>

                    <div>
                        <div class="Sub-head"> Did it seem to happen suddenly or gradually?</div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OccurrenceCyanosis" value="Suddenly" type="radio"><span> Suddenly </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OccurrenceCyanosis" class="questionary-radio" value="Gradually" type="radio"><span> Gradually </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OccurrenceCyanosis" value="Not Sure" type="radio"><span> Not Sure </span>
                                </div>

                            </div>

                        </div>
                                       <span class="OccurrenceCyanosis-error" style="color:red;display:none">This Field is required</span>


                    </div>

                    <div>

                        <div class="Sub-head">Does anyone else in your family has this condition?</div>

                        <div  class="questionary-opt q5">

                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="FamilyCondition" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                    <!--<span id="SpecializedType4" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
                                        <input class="form-control text" name="FamilyCondition" placeholder="Doctor Name/Hospital Name" type="text">
                                    </span>-->
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="FamilyCondition" value="No" type="radio"> NO </div>
                            </div>

                        </div>
                                       <span class="FamilyCondition-error" style="color:red;display:none">This Field is required</span>

                        <div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                    <div>
                        <div class="Sub-head">What makes the bluish skin color better or worse? </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                <input placeholder=" " class="form-control text" id="txt1" name="ResultCyanosis" type="text">
                            </div>

                        </div>
                        

                    </div>

                    <div>
                        <div class="Sub-head">Have you had any chest pain, cough, or bleeding associated with the bluish color skin?</div>
                        <div class="questionary-opt">

                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="Pain" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                    <!--<span id="SpecializedType2" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
                                        <input class="form-control text" name="Pain" placeholder="Doctor Name/Hospital Name" type="text">
                                    </span>-->
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="Pain" value="NO" type="radio"> NO </div>
                            </div>
                        </div>
                        <span class="Pain-error" style="color:red;display:none">This Field is required</span>
                    </div>

                    <div>
                        <br /> <br />
                        <h3>3. Dyspnea (shortness of breath)</h3>
                        <div>
                            <div class="Sub-head"> How long have you been short of breath? </div>

                            <div class="questionary-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="BreathShortness" value="1 day" type="radio"><span> 1 day </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="BreathShortness" class="questionary-radio" value="1-2 days" type="radio"><span> 1-2 days </span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="BreathShortness" value="More than 5 days" type="radio"><span> More than 5 days </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="BreathShortness" class="questionary-radio" value="A week" type="radio"><span> A week </span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="BreathShortness" value="A Month" type="radio"><span> A Month </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="BreathShortness" class="questionary-radio" value="A Year" type="radio"><span> A Year </span>
                                    </div>

                                </div>
                            </div>
                        <span class="BreathShortness-error" style="color:red;display:none">This Field is required</span>

                        </div>
                        <div>
                            <div class="Sub-head"> Did the shortness of breath occur suddenly or gradually? </div>

                            <div class="questionary-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="OccurrenceDyspnea" value="Suddenly" type="radio"><span> Suddenly </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="OccurrenceDyspnea" class="questionary-radio" value="Gradually" type="radio"><span> Gradually </span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="OccurrenceDyspnea" value="Not Sure" type="radio"><span> Not Sure </span>
                                    </div>

                                </div>

                            </div>
                      <span class="OccurrenceDyspnea-error" style="color:red;display:none">This Field is required</span>

                        </div>
                        <div>
                            <div class="Sub-head">Do you wake up at night feeling short of breath (paroxysmal nocturnal dyspnoea)?</div>
                            <div class="questionary-opt q3">

                                <div class="select-items specialty_radio">

                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="ParoxysmalNoctDyspnea" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="specialty_radio">
                                        <div>
                                            <input class="speciality questionary-radio" name="ParoxysmalNoctDyspnea" value="No" type="radio"> NO </div>
                                    </div>
                                </div>
                            </div>
                         <span class="ParoxysmalNoctDyspnea-error" style="color:red;display:none">This Field is required</span>

                        </div>
                        <div>
                            <div class="Sub-head">How many pillows do you sleep on at night?</div>
                            <div class="questionary-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="PillowNumber" value="1s" type="radio"><span> 1 </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="PillowNumber" class="questionary-radio" value="2" type="radio"><span> 2 </span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="PillowNumber" value="More than 2" type="radio"><span> more than 2 </span>
                                    </div>

                                </div>

                            </div>
                            <span class="PillowNumber-error" style="color:red;display:none">This Field is required</span>

                        </div>
                        <div>
                            <div class="Sub-head">How far can you walk before you become short of breath?</div>
                            <div class="questionary-box">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="WalkLength" value="Short 100m" type="radio"><span> Short 100m </span>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input name="WalkLength" class="questionary-radio" value="400m" type="radio"><span> 400m</span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="WalkLength" value="1km" type="radio"><span> 1km </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input class="questionary-radio" name="WalkLength" value="1.5km" type="radio">
                                        <span> 1.5km </span>
                                    </div>
                                </div>

                            </div>
                      <span class="WalkLength-error" style="color:red;display:none">This Field is required</span>

                            
                            
                        </div>
                        <div>
                            <div class="Sub-head">Have you notice swelling in your legs associated with your shortness of breath?</div>
                            <div class="questionary-opt q3">

                                <div class="select-items specialty_radio">

                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                    <input class="speciality questionary-radio" name="SwellingLegDyspnea" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="specialty_radio">
                                        <div>
                                            <input class="speciality questionary-radio" name="SwellingLegDyspnea" value="No" type="radio"> NO </div>
                                    </div>
                                </div>
                            </div>
                            <span class="SwellingLegDyspnea-error" style="color:red;display:none">This Field is required</span>

                        </div>
                        <div>
                            <div class="Sub-head">Have you had any chest pain associated with your shortness of breath?</div>
                            <div class="questionary-opt q3">

                                <div class="select-items specialty_radio">

                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="ChestPainDyspnea" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="specialty_radio">
                                        <div>
                                            <input class="speciality questionary-radio" name="ChestPainDyspnea" value="No" type="radio"> NO </div>
                                    </div>
                                </div>
                            </div>
                         <span class="ChestPainDyspnea-error" style="color:red;display:none">This Field is required</span>

                        </div>
                    </div>
                    <div>
                        <br /> <br />
                        <h3>4. Edema (dependent)</h3>
                        <div>
                            <div class="Sub-head">Do you have swelling in our legs? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SwellingLegEdema" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">When did you first notice the swelling? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SwellingNotice" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Did it appear suddenly or gradually? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="OccurrenceEdema" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Is the swelling worse in the morning or evening? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="WorseTime" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Does the swelling decrease after a night's sleep? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SwellingDec" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Does your shortness of breath associated with the swelling? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="BreathShortEdema" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Have you noticed any change in your weight? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="WeightChange" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Does elevating you feet makes the swelling go down? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SwellingDown" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Do you have pain in your legs associated with the swelling? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SwellingLegPain" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Do both legs swell equally? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SwellingLeg" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Are you taking any medications, If so, which once? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="MediEdema" type="text">
                                </div>

                            </div>

                        </div>

                    </div>
                    <div>
                        <br /> <br />
                        <h3>5. Fainting (syncope)</h3>
                        <div>
                            <div class="Sub-head">How often do you faint (or feel like you are going to faint)? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="OftenFaint" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">What are you doing when you faint (or feel like you are going to faint)? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="OptionFaint" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Have you ever lost consciousness?  </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="ConsciousLost" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Does the fainting (of feeling like you are going to faint) occur suddenly? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="OccurrenceFaint" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">In what position were you when you fainted (or felt like you were going to faint)?</div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="FaintPosition" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Have you noticed anything that seem to be associated with the fainting (feeling like you are going to faint), for example, chest pain, irregular heart beat, nausea, confusion, hunger, tingling, or numbness?</div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="FaintAssoc" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Do you have any black, tarry bowl movements after the fainting episode? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="FaintEffect" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Do you have heavy periods? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="HeavyPeriods" type="text">
                                </div>

                            </div>

                        </div>

                    </div>
                    <div>
                        <br /> <br />
                        <h3>6. Fatigue</h3>
                        <div>
                            <div class="Sub-head">How long have you felt fatigued?  </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="FatigueTenure" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Did the fatigue come on suddenly or gradually? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="OccurrenceFatigue" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Do you feel tired all day or only in the morning and/or evening?   </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="TirednessMorEve" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Do you feel more tired at home or at work?  </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="TirednessWork" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Is your fatigue relieved by rest? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="FatigueReliev" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">When do you feel least tired? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="TirednessLeast" type="text">
                                </div>

                            </div>

                        </div>


                    </div>
                    <div>
                        <br /> <br />
                        <h3>7. General</h3>
                        <div>
                            <div class="Sub-head">Have you ever had any problems with your heart? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="HeartProblem" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Have you ever had angina or a heart attack?</div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="AnginaHeartAttack" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">Have you ever had a cardiac catheterization or heart surgery?  </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="CardicSurgery" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head"> Do you have high blood pressure?  </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="HighBlP" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">    Have you ever been told you had a heart murmur or had rheumatic fever? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="MurRheumaticFever" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">  Have you ever had phlebitis (pain) or swelling in your legs? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SwellingPhlebitis" type="text">
                                </div>

                            </div>

                        </div>


                    </div>
                    <div>
                        <br /> <br />
                        <h3>8. Haemoptysis (coughing up blood) </h3>
                        <div>
                            <div class="Sub-head"> How long have you been coughing up blood? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="TenureHemoptysis" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head"> How often do you cough up blood? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="OccurrenceHemoptysis" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head"> Do you have chest pain when you cough up blood? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="ChestPainHemoptysis" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head"> How much blood do you cough up? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="BloodAmount" type="text">
                                </div>

                            </div>

                        </div>

                    </div>
                    <div>
                        <br /> <br />
                        <h3>9. Irregular Heart Beat </h3>
                        <div>
                            <div class="Sub-head">     Do you have any problems with irregular heart beat or palpitations (when you can feel your heart beating fast or irregular)?</div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="IrrHeartPalp" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">    How long have you had the irregular heart beats? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="TenureHeartBeat" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     When did you first notice the irregular heart beats? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="NoticeHeart" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">    How long did the irregular heart beats last? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="IrrHeartLast" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     What did the irregular heart beats feel like? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="IrrHeartFeel" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     Did anything you do stop the irregular heart beats? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="IrrHeartStop" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">    Did the irregular heartbeats stop abruptly? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="IrrHeartAbruptly" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">    Could you count your pulse during the episode? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="PulseCount" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head"> Can you tap on the table what the rhythm felt like?  </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="RhythmFelt" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">    Have you noticed the irregular heart beats during exercise? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="IrrHeartExe" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     Did you experience any sweating, flushing, or headaches with your irregular heart beats? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="IrrHeartExp" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     Any you taking any medications, if so, which ones? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="Medication" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     Has anyone ever told you that you had problems with your thyroid gland? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="ThyroidGlandPro" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     Do you smoke or use any other recreational or street drugs, if so, how much and how often? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="SmokeDrugs" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     How much caffeine do you drink a day (coffee, tea, soft drinks)? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="CaffeineDay" type="text">
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="Sub-head">     After the irregular heart beats, do you need to urinate? </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                                    <input placeholder=" " class="form-control text" id="txt1" name="Urinate" type="text">
                                </div>

                            </div>
                            <div class="row btn-form-cont pull-right">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input type="submit" name="submit"  class="form-continue" style="margin-top:-1px;" value="Save &amp; Continue">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>


<?php
        } else {
			// view
        $squery = "SELECT * FROM chest_pain where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['PainLocation'] = $row['PainLocation'];
            $_SESSION['PainNotice'] = $row['PainNotice'];
            $_SESSION['PainDuration'] = $row['PainDuration'];
            $_SESSION['PainRadiate'] = $row['PainRadiate'];
            $_SESSION['PainOften'] = $row['PainOften'];
			$_SESSION['PainDescription'] = $row['PainDescription'];
            $_SESSION['OtherLegPain'] = $row['OtherLegPain'];
            $_SESSION['OtherFever'] = $row['OtherFever'];
		    $_SESSION['OtherBreath'] = $row['OtherBreath'];
			$_SESSION['OtherPalpitations'] = $row['OtherPalpitations'];
			$_SESSION['OtherNausea'] = $row['OtherNausea'];
			$_SESSION['OtherVomiting'] = $row['OtherVomiting'];
			$_SESSION['OtherCoughing'] = $row['OtherCoughing'];
            $_SESSION['OccurrenceChestPain'] = $row['OccurrenceChestPain'];
            $_SESSION['OccurrenceChestPainText'] = $row['OccurrenceChestPainText'];
				
        }
		
		$squery = "SELECT * FROM cyanosis where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['SkinColor'] = $row['SkinColor'];
            $_SESSION['NoticePeriod'] = $row['NoticePeriod'];
            $_SESSION['OccurrenceCyanosis'] = $row['OccurrenceCyanosis'];
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Does the pain occur reson  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceChestPainText']; ?></div>
                <div class="clearfix"></div></div>
				
            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do you have any other symptoms with the pain such as shortness of (tick more than 1 option if you have any of this Symptoms)  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherLegPain'];?>, <?php echo $_SESSION['OtherBreath'];?>,
				<?php echo $_SESSION['OtherPalpitations'];?>, <?php echo $_SESSION['OtherNausea'];?>, <?php echo $_SESSION['OtherVomiting'];?>,
				<?php echo $_SESSION['OtherCoughing']; ?>, <?php echo $_SESSION['OtherFever']; ?></div>
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['ResultCyanosis']; ?></div>
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
    }
}
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.q1 input:radio[name=PainRadiate]').click(function () {
            var radioValue = $("input[name='PainRadiate']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType").show();
            } else {
				

                $("#SpecializedType").hide();
				 $("#radioYesTextBox").val('');
            }
        });

        $('.ques').click(function () {
            var radioValue = $("input[name='OccurrenceChestPain']:checked").val();
            if (radioValue === 'Other Pain Reason') {
                $("#spanPainOccur").show();
            } else {
                $("#spanPainOccur").hide();
				$("input[type=text][name=OccurrenceChestPain]").val('');

            }
        });

        $('.q3 input:radio[name=optradio]').click(function () {
            var radioValue = $(".q3 input[name='optradio']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType2").show();
            } else { 
                $("#SpecializedType2").hide();
            }
        });

        $('.q4 input:radio[name=optradio]').click(function () {
            var radioValue = $(".q4 input[name='optradio']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType3").show();
            } else {
                $("#SpecializedType3").hide();
            }
        });
		
		        $('.q5 input:radio[name=FamilyCondition]').click(function () {
            var radioValue = $(".q5 input[name='FamilyCondition']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType4").show();
            } else {
                $("#SpecializedType4").hide();
            }
        });


		
		
		
		
		
		

    });
</script>


<!--validation-->
<!--
<script> 
$(document).ready(function(){
	$("#btnSaveNext").click(function(){
		var isvalid=true;
		if($("input#radioYesTextBox").is(':visible'))
		{
			if($("input#radioYesTextBox").val().length==0)
			{
				alert("Please enter Pain Radiate if you have");
				isvalid=false;
			}
		}  
		
		
		return isvalid;
		
	});	
});
-->
</script>

<?php include ('footer_user.php'); ?>