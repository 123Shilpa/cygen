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
    $HeartAttack = $_POST['HeartAttack'];
    $CoronaryArtery = $_POST['CoronaryArtery'];
    $CongestiveHeartFail = $_POST['CongestiveHeartFail'];
    $Arrhythmia = $_POST['Arrhythmia'];
    $RheumaticFever = $_POST['RheumaticFever'];
    $HeartMurmur = $_POST['HeartMurmur'];
    $ArteryDisease = $_POST['ArteryDisease'];
    $VaricoseVeins = $_POST['VaricoseVeins'];
    $Arthritis = $_POST['Arthritis'];
    $DiabetesTest = $_POST['DiabetesTest'];

    $Phlebitis = $_POST['Phlebitis'];
    $Dizziness = $_POST['Dizziness'];
    $EpilepsySeizures = $_POST['EpilepsySeizures'];
    $Stroke = $_POST['Stroke'];
    $Diphtheria = $_POST['Diphtheria'];
    $ScarletFaver = $_POST['ScarletFaver'];
    $Infectious = $_POST['Infectious'];
    $Anemia = $_POST['Anemia'];
    $Asthma = $_POST['Asthma'];
    $Pneumonia = $_POST['Pneumonia'];

    $Bronchitis = $_POST['Bronchitis'];
    $Emphysema = $_POST['Emphysema'];
    $Tuberculosis = $_POST['Tuberculosis'];
    $AbnormalChestXray = $_POST['AbnormalChestXray'];
    $OtherLungDisease = $_POST['OtherLungDisease'];
    $InjuryBackLegJoint = $_POST['InjuryBackLegJoint'];
    $BrokenBones = $_POST['BrokenBones'];
    $JaundiceGallbladder = $_POST['JaundiceGallbladder'];
    $KidneyDisease = $_POST['KidneyDisease'];
    $Hepatitis = $_POST['Hepatitis'];
    $NervousEmotionProblem = $_POST['NervousEmotionProblem'];

    $ThyroidHypo = $_POST['ThyroidHypo'];
    $ThyroidHyper = $_POST['ThyroidHyper'];
    $Depression = $_POST['Depression'];
    $Seizures = $_POST['Seizures'];
    $MigraineRecurrent = $_POST['MigraineRecurrent'];
    $LegPainShortDistance = $_POST['LegPainShortDistance'];
    $FootProblems = $_POST['FootProblems'];
    $BackProblems = $_POST['BackProblems'];
    $StomachProblem = $_POST['StomachProblem'];
    $VisionHearingProblem = $_POST['VisionHearingProblem'];

    $WartMoleChange = $_POST['WartMoleChange'];
    $GlaucomaPressure = $_POST['GlaucomaPressure'];
    $ExpLoudNoise = $_POST['ExpLoudNoise'];
    $PneumoniaFever = $_POST['PneumoniaFever'];
    $SignificantWeightLoss = $_POST['SignificantWeightLoss'];
    $DehydrationRapidBeat = $_POST['DehydrationRapidBeat'];
    $BloodClot = $_POST['BloodClot'];
    $HerniaSymptoms = $_POST['HerniaSymptoms'];
    $SoresFootAnkle = $_POST['SoresFootAnkle'];
    $PainAfterFall = $_POST['PainAfterFall'];
    $EyeCondition = $_POST['EyeCondition'];

    $CataractTransplant = $_POST['CataractTransplant'];
    $LaserEyeSurgery = $_POST['LaserEyeSurgery'];
    $Std = $_POST['Std'];
    $Cancer = $_POST['Cancer'];
    $Others = $_POST['Others'];
    $Status = '0';

    // validate input
    // update data
    //if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO past_medical_history  (PatientId , HeartAttack ,NervousEmotionProblem ,CoronaryArtery , CongestiveHeartFail ,Arrhythmia ,RheumaticFever, HeartMurmur ,
		ArteryDisease , VaricoseVeins , Arthritis , DiabetesTest , Phlebitis, Dizziness, EpilepsySeizures, Stroke, Diphtheria, ScarletFaver, 
		Infectious,Anemia, Asthma, Pneumonia, Bronchitis, 	Emphysema,Tuberculosis,AbnormalChestXray,OtherLungDisease,InjuryBackLegJoint,BrokenBones,
		JaundiceGallbladder,KidneyDisease,Hepatitis,ThyroidHypo,ThyroidHyper,Depression, Seizures,MigraineRecurrent,LegPainShortDistance,FootProblems,
		BackProblems,StomachProblem,VisionHearingProblem,WartMoleChange,GlaucomaPressure,ExpLoudNoise,PneumoniaFever,SignificantWeightLoss,
		DehydrationRapidBeat,BloodClot,HerniaSymptoms,SoresFootAnkle,PainAfterFall,	EyeCondition,CataractTransplant,LaserEyeSurgery,Std,Cancer,Others,Status)
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $HeartAttack, $NervousEmotionProblem, $CoronaryArtery, $CongestiveHeartFail, $Arrhythmia, $RheumaticFever, $HeartMurmur,
        $ArteryDisease, $VaricoseVeins, $Arthritis, $DiabetesTest, $Phlebitis, $Dizziness, $EpilepsySeizures, $Stroke, $Diphtheria, $ScarletFaver,
        $Infectious, $Anemia, $Asthma, $Pneumonia, $Bronchitis, $Emphysema, $Tuberculosis, $AbnormalChestXray, $OtherLungDisease, $InjuryBackLegJoint, $BrokenBones,
        $JaundiceGallbladder, $KidneyDisease, $Hepatitis, $ThyroidHypo, $ThyroidHyper, $Depression, $Seizures, $MigraineRecurrent, $LegPainShortDistance, $FootProblems,
        $BackProblems, $StomachProblem, $VisionHearingProblem, $WartMoleChange, $GlaucomaPressure, $ExpLoudNoise, $PneumoniaFever, $SignificantWeightLoss,
        $DehydrationRapidBeat, $BloodClot, $HerniaSymptoms, $SoresFootAnkle, $PainAfterFall, $EyeCondition, $CataractTransplant, $LaserEyeSurgery, $Std, $Cancer, $Others, $Status));
		
		$sql = "UPDATE profilereport set PastMedicalHistory = ? WHERE PatientId=?";
        $q = $pdo->prepare($sql);
        $q->execute(array(7, $_SESSION['PatientId']));
		
    Database::disconnect();
    echo "<script type = 'text/javascript'> alert('Successfully inserted'); window.location = 'medication_log.php'; </script>";
}
?>

<style>

    #profile strong {
        color: red;
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

    .file-blue:before {
        content: 'Browse File';
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
$squery = "SELECT * FROM past_medical_history where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);
$rowcount = mysql_num_rows($result); {
    if ($rowcount == 0) {    //Allow edit
        ?>
        <div class="right_col" role="main">
            <div class="profile past_medical info-head">
				 <div class="row  pull-right">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 	 <input type="submit" id="submit" class="form-continue" value="Save &amp; Continue">
                            </div>
                        </div>
                <h3> Past Medical History </h3>
                <div class="personal-detail">
                    <form class="form-horizontal" enctype="multipart/form-data"  method="post" >
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>  
                                    <input class="speciality questionary-radio " name="optradio" value="Multi" id="chkbox0" type="checkbox">
                                    Heart attack
                                    <span id="SpecializedTypemain" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="HeartAttack" class="select_text" id="select_text0" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk" value="disease" id="chkbox1" type="checkbox">
                                    Coronary artery disease
                                    <span id="SpecializedType" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="CoronaryArtery" class="select_text" id="select_text1" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio" name="optchk1" value="Multi" id="chkbox2" type="checkbox">
                                    Congestive heart failure
                                    <span id="SpecializedType1" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="CongestiveHeartFail" class="select_text" id="select_text2"placeholder="how many years ago"  />
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk2" value="optchk2" id="chkbox3" type="checkbox">
                                    Arrhythmia
                                    <span id="SpecializedType2" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Arrhythmia" class="select_text" id="select_text3" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk3" value="Multi" id="chkbox4" type="checkbox">
                                    Rheumatic Fever
                                    <span id="SpecializedType3" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="RheumaticFever" class="select_text" id="select_text4"placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk4" value="disease" id="chkbox5" type="checkbox">
                                    Heart murmur
                                    <span id="SpecializedType4" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="HeartMurmur" class="select_text" id="select_text5" placeholder="how many years ago">
                                    </span>
                                </p> 
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio" name="optchk5" value="Multi" id="chkbox6" type="checkbox">
                                    Diseases of the arteries
                                    <span id="SpecializedType5" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="ArteryDisease" class="select_text" id="select_text6" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk6" value="disease" id="chkbox7" type="checkbox">
                                    Varicose veins
                                    <span id="SpecializedType6" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="VaricoseVeins" class="select_text" id="select_text7" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox8" type="checkbox">
                                    Arthritis of legs or arms 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Arthritis" class="select_text" id="select_text8" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox9" type="checkbox">
                                    Diabetes or abnormal blood-sugar tests
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="DiabetesTest" class="select_text" id="select_text9" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk9" value="Multi" id="chkbox10" type="checkbox">
                                    Phlebitis (inflammation of a vein) 
                                    <span id="SpecializedType9" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Phlebitis" class="select_text" id="select_text10" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk10" value="disease" id="chkbox11" type="checkbox">
                                    Dizziness or fainting spells
                                    <span id="SpecializedType10" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Dizziness" class="select_text" id="select_text11" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk11" value="Multi" id="chkbox12" type="checkbox">
                                    Epilepsy or seizures 
                                    <span id="SpecializedType11" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="EpilepsySeizures" class="select_text" id="select_text12" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk12" value="disease" id="chkbox13" type="checkbox">
                                    Stroke
                                    <span id="SpecializedType12" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Stroke" class="select_text" id="select_text13" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk13" value="Multi" id="chkbox14" type="checkbox">
                                    Diphtheria 
                                    <span id="SpecializedType13" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Diphtheria" class="select_text" id="select_text14" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk14" value="disease" id="chkbox15" type="checkbox">
                                    Scarlet Fever
                                    <span id="SpecializedType14" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="ScarletFaver" class="select_text" id="select_text15" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk15" value="Multi" id="chkbox16" type="checkbox">
                                    Infectious mononucleosis 
                                    <span id="SpecializedType15" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Infectious" class="select_text" id="select_text16" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk16" value="disease" id="chkbox17" type="checkbox">
                                    Anemia
                                    <span id="SpecializedType16" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Anemia" class="select_text" id="select_text17" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk17" value="Multi" id="chkbox18" type="checkbox">
                                    Asthma 
                                    <span id="SpecializedType17" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Asthma" class="select_text"  id="select_text18" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk18" value="disease" id="chkbox19" type="checkbox">
                                    Pneumonia
                                    <span id="SpecializedType18" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Pneumonia" class="select_text" id="select_text19" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk19" value="Multi" id="chkbox20" type="checkbox">
                                    Bronchitis 
                                    <span id="SpecializedType19" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Bronchitis" class="select_text"  id="select_text20" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk20" value="disease" id="chkbox21" type="checkbox">
                                    Emphysema
                                    <span id="SpecializedType20" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Emphysema" class="select_text" id="select_text21" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk21" value="Multi" id="chkbox22" type="checkbox">
                                    Tuberculosis 
                                    <span id="SpecializedType21" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Tuberculosis" class="select_text" id="select_text22" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk22" value="disease" id="chkbox23" type="checkbox">
                                    Abnormal chest X-ray
                                    <span id="SpecializedType22" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="AbnormalChestXray" class="select_text" id="select_text23" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk23" value="Multi" id="chkbox24" type="checkbox">
                                    Other lung disease 
                                    <span id="SpecializedType23" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="OtherLungDisease" class="select_text" id="select_text24" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk24" value="disease" id="chkbox25" type="checkbox">
                                    Injuries to back, arms, legs or joint
                                    <span id="SpecializedType24" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="InjuryBackLegJoint" class="select_text" id="select_text25" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox26" type="checkbox">
                                    Broken bones 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="BrokenBones" class="select_text" id="select_text26" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox27" type="checkbox">
                                    Jaundice or gall bladder problems
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="JaundiceGallbladder" class="select_text" id="select_text27" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox28"  type="checkbox">
                                    Kidney disease 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="KidneyDisease" class="select_text"  id="select_text28" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox29" type="checkbox">
                                    Hepatitis
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Hepatitis" class="select_text" id="select_text29" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox30" type="checkbox">
                                    Thyroid disease (hypo) 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="ThyroidHypo" class="select_text" id="select_text30"  placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio" name="optchk8" value="disease" id="chkbox31" type="checkbox">
                                    Thyroid (hyper)
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="ThyroidHyper" class="select_text" id="select_text31" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>

                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox32" type="checkbox">
                                    Depression 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Depression" class="select_text" id="select_text32" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox33" type="checkbox">
                                    Seizures
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Seizures" class="select_text" id="select_text33" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox34" type="checkbox">
                                    Headaches 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="MigraineRecurrent" class="select_text" id="select_text34" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox35" type="checkbox">
                                    Pain in your legs after walking short distances?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="LegPainShortDistance" class="select_text" id="select_text35" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox36" type="checkbox">
                                    Foot problems? 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="FootProblems" class="select_text" id="select_text36" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox37" type="checkbox">
                                    Back problems?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="BackProblems" class="select_text" id="select_text37" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox38" type="checkbox">
                                    Stomach or intestinal problems, such as recurrent heartburn, ulcers, constipation or diarrhea? 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="StomachProblem" class="select_text" id="select_text38" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox39" type="checkbox">
                                    Significant vision or hearing problems?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="VisionHearingProblem" class="select_text" id="select_text39" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox40" type="checkbox">
                                    Recent change in a wart or a mole? 
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="WartMoleChange" class="select_text" id="select_text40" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox41" type="checkbox">
                                    Glaucoma or increased pressure in the eyes?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="GlaucomaPressure" class="select_text" id="select_text41"placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox42" type="checkbox">
                                    Nervousv Emotion Problem?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="NervousEmotionProblem" class="select_text" id="select_text42" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox43" type="checkbox">
                                    Exposure to loud noises for long periods?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="ExpLoudNoise" class="select_text" id="select_text43" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox44" type="checkbox">
                                    An infection such as pneumonia accompanied by a fever?
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="PneumoniaFever" class="select_text" id="select_text44" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox45" type="checkbox">
                                    Significant unexplained weight loss?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="SignificantWeightLoss" class="select_text" id="select_text45" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox46" type="checkbox">
                                    A fever, which can cause dehydration and rapid heart beat?
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="DehydrationRapidBeat" class="select_text" id="select_text46" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox47" type="checkbox">
                                    A deep vein thrombosis (blood clot)?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="BloodClot" class="select_text" id="select_text47" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox48" type="checkbox">
                                    A hernia that is causing symptoms?
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="HerniaSymptoms" class="select_text" id="select_text48" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox49" type="checkbox">
                                    Foot or ankle sores that won’t heal?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="SoresFootAnkle" class="select_text"  id="select_text49"placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>

                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox50" type="checkbox">
                                    Persistent pain or problems walking after you have fallen?
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="PainAfterFall" class="select_text" id="select_text50"  placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox51" type="checkbox">
                                    Eye conditions such as bleeding in the retina or detached retina?   
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="EyeCondition" class="select_text" id="select_text51"placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox52" type="checkbox">
                                    Cataract or lens transplant?
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="CataractTransplant" class="select_text" id="select_text52" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>  
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox53" type="checkbox">
                                    Laser treatment or other eye surgery?
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="LaserEyeSurgery" class="select_text"  id="select_text53" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox54" type="checkbox">
                                    Sexually transmitted disease
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Std" class="select_text"  id="select_text54"placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk8" value="disease" id="chkbox55" type="checkbox">
                                    Cancer
                                    <span id="SpecializedType8" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Cancer" class="select_text" id="select_text55" placeholder="how many years ago">
                                    </span>
                                </p>  
                                <div class="clearfix"></div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
                                <p>
                                    <input class="speciality questionary-radio " name="optchk7" value="Multi" id="chkbox56" type="checkbox">
                                    Others
                                    <span id="SpecializedType7" class="chktext col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                        <input type="text" name="Others" class="select_text" id="select_text56" placeholder="how many years ago">
                                    </span>
                                </p>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        <div class="row btn-form-cont pull-right">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 	 <input type="submit" id="submit" class="form-continue" value="Save &amp; Continue">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php
    } else {// view
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
        <!---------profile view--------------->
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
        </div>
        <?php
    }
}
?>



<script>
$(document).ready(function(){
    $("input[type=submit]").click(function(){
		var isValid=true;
		if($("input[type=checkbox]:checked").length>0)
		$("input[type=checkbox]:checked").each(function(){
			if(!$(this).parent().children("span").children().val())
				
			$(this).parent().children("span").children("input[type=text]").css("border","solid 1px red"),$(this).parent().children("span").children("div").length==0?$(this).parent().children("span").append("<div style='color:red;'>this filed is required</div>"):false,isValid=false;
			});
		//else alert("please select at list one medical history"),isValid=false;
	   return isValid;
    });
});
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $(".questionary-box input[type=checkbox]").click(function () {
            if ($(this).prop("checked"))
			{
                $(this).parent().children(".chktext").show();
			}
            else
			{
                $(this).parent().children(".chktext").hide();
			}
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
<script>
$(document).ready(function(){
	$(".questionary-radio").click(function(){
		if(!$(this).is(':checked')){
			$(this).parent().children("span").children("input[type=text]").val('');
			//$("input[type=text]").val('');
		}
	});
});
</script>

<?php include ('footer_user.php') ?>