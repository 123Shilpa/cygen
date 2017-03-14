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
    $Smoker = $_POST['Smoker'];
	if($Smoker === "Yes")
	{
		$PerDay = $_POST['PerDayYes'];
	}
	else{
		$EverSmoked = $_POST['EverSmoked'];
		if($EverSmoked === "Yes")
		{
			$LastStopSmoke = $_POST['LastStopSmoke'];
			if($LastStopSmoke === "Today Or Yesterday")
			{
				$PerDay = $_POST['PerDay'];
				if($PerDay != null)
				{
					$SmokingPeriod = $_POST['SmokingPeriod'];
				}
			}
			else if($LastStopSmoke === "2 Days – 6 Days Ago")
			{
				$PerDay = $_POST['PerDay2'];
				if($PerDay != null)
				{
					$SmokingPeriod = $_POST['SmokingPeriod'];
				}
			}
			else if($LastStopSmoke === "1 Week – Less Than 1 Month Ago")
			{
				$PerDay = $_POST['PerDay3'];
				if($PerDay != null)
				{
					$SmokingPeriod = $_POST['SmokingPeriod'];
				}
			}
			else if($LastStopSmoke === "1 Month – Less Than 1 Year Ago")
			{
				$PerDay = $_POST['PerDay4'];
				if($PerDay != null)
				{
					$SmokingPeriod = $_POST['SmokingPeriod'];
				}
			}
			else if($LastStopSmoke === "1 – 5 Years Ago")
			{
				$PerDay = $_POST['PerDay5'];
				if($PerDay != null)
				{
					$SmokingPeriod = $_POST['SmokingPeriod'];
				}
			}
			else{
				$PerDay = $_POST['PerDay6'];
				if($PerDay != null)
				{
					$SmokingPeriod = $_POST['SmokingPeriod'];
				}
			}
		}
		else{
			$EverSmoked = $_POST['EverSmoked'];
		}
	}
   /* $PerDay = $_POST['PerDay'];
    $LastStopSmoke = $_POST['LastStopSmoke'];
    $EverSmoked = $_POST['EverSmoked'];
    $SmokingPeriod = $_POST['SmokingPeriod'];
    $SmokingPeriod = $_POST['SmokingPeriod'];*/
    $IndoorTobacco = $_POST['IndoorTobacco'];
    $IndoorTobaccoDaily = $_POST['IndoorTobaccoDaily'];
    $Status = '0';

    // validate input
    // update data
    //if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO smoking_status (PatientId , Smoker ,PerDay ,LastStopSmoke , EverSmoked ,  SmokingPeriod, IndoorTobacco, IndoorTobaccoDaily, Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
	var_dump($q);
    $q->execute(array($_SESSION['PatientId'], $Smoker, $PerDay, $LastStopSmoke, $EverSmoked, $SmokingPeriod, $IndoorTobacco, $IndoorTobaccoDaily, $Status));

	$sql = "UPDATE profilereport set SmokingStatus = ? WHERE PatientId=?";
	$q = $pdo->prepare($sql);
	$q->execute(array(7, $_SESSION['PatientId']));
	
    Database::disconnect();
    echo "<script type = 'text/javascript'> alert('Successfully inserted'); window.location = 'dietary.php'; </script>";
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
<!-- page content -->
<?php
        $squery = "SELECT * FROM smoking_status where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>

<div class="right_col" role="main">
<form class="form-horizontal" enctype="multipart/form-data" name="smoking_status"  method="post" >
<div class="profile info-head">

<div class="col-sm-12">
<h3> Smoking status   </h3>
<div>
<div class="Sub-head">Are you a smoker? </div>

<div class="questionary-box">

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio SmokingStatus" name="Smoker" value="Yes" type="radio"><span>  Yes  </span>
<span id="SmokingStatusSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0"> 

<div>
<div class="Sub-head">How Many Per Day</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDayYes" value="1-9 Cigarettes Per Day" type="radio"><span> 	1-9 Cigarettes Per Day  </span>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="PerDayYes" class="questionary-radio" value="10-19 Cigarettes Per Day" type="radio"><span> 10-19 Cigarettes Per Day </span>
</div>

</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDayYes" value="20-29 Cigarettes Per Day" type="radio"><span> 	20-29 Cigarettes Per Day  </span>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDayYes" value="30-39 Cigarettes Per Day" type="radio"><span> 30-39 Cigarettes Per Day  </span>
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDayYes" value="More Than 40 Cigarettes Per Day" type="radio"><span> 	More Than 40 Cigarettes Per Day   </span>
</div>
</div>

</div>
</span>

</div>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio SmokingStatus" name="Smoker" value="No" type="radio"><span>  No </span>
<span id="SmokingStatusnoSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
<div>
<div class="Sub-head" style="margin-top:0"> have you ever smoked?  </div>

<div class="questionary-box EverSmoked">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="EverSmoked" value="Yes" type="radio"> <span> Yes </span>
<span id="EverSmokedSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">Give the time when you last stopped smoking? </div>

<div class="questionary-box StoppedSmoked">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="LastStopSmoke" value="Today Or Yesterday" type="radio"><span> 	Today Or Yesterday   </span>
<span id="PerDayRangeSpan1" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How Many Per Day</div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="PerDay" value="1-9 Cigarettes Per Day" type="radio"><span> 1-9 Cigarettes Per Day  </span>
<span id="beensmoking1" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="PerDay" class="questionary-radio" value="10-19 Cigarettes Per Day" type="radio"><span> 10-19 Cigarettes Per Day </span>
<span id="beensmoking2" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay" value="20-29 Cigarettes Per Day" type="radio"><span> 	20-29 Cigarettes Per Day  </span>
<span id="beensmoking3" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay" value="30-39 Cigarettes Per Day" type="radio"><span> 30-39 Cigarettes Per Day  </span>
<span id="beensmoking4" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay" value="More Than 40 Cigarettes Per Day" type="radio"><span> 	More Than 40 Cigarettes Per Day   </span>
<span id="beensmoking5" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>   
</div>

</div>

</div>
</div>
</span>

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="LastStopSmoke" class="questionary-radio" value="2 Days – 6 Days Ago" type="radio"><span> 2 Days – 6 Days Ago  </span>

<span id="PerDayRangeSpan2" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How Many Per Day</div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="PerDay2" value="1-9 Cigarettes Per Day" type="radio"><span> 1-9 Cigarettes Per Day  </span>
<span id="beensmoking6" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="PerDay2" class="questionary-radio" value="10-19 Cigarettes Per Day" type="radio"><span> 10-19 Cigarettes Per Day </span>
<span id="beensmoking7" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay2" value="20-29 Cigarettes Per Day" type="radio"><span> 	20-29 Cigarettes Per Day  </span>
<span id="beensmoking8" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay2" value="30-39 Cigarettes Per Day" type="radio"><span> 30-39 Cigarettes Per Day  </span>
<span id="beensmoking9" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay2" value="More Than 40 Cigarettes Per Day" type="radio"><span> 	More Than 40 Cigarettes Per Day   </span>
<span id="beensmoking10" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>   
</div>

</div>

</div>
</div>
</span>
</div>



</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="LastStopSmoke" value="1 Week – Less Than 1 Month Ago" type="radio"><span> 1 Week – Less Than 1 Month Ago   </span>
<span id="PerDayRangeSpan3" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How Many Per Day</div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="PerDay3" value="1-9 Cigarettes Per Day" type="radio"><span> 1-9 Cigarettes Per Day  </span>
<span id="beensmoking11" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="PerDay3" class="questionary-radio" value="10-19 Cigarettes Per Day" type="radio"><span> 10-19 Cigarettes Per Day </span>
<span id="beensmoking12" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay3" value="20-29 Cigarettes Per Day" type="radio"><span> 	20-29 Cigarettes Per Day  </span>
<span id="beensmoking13" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay3" value="30-39 Cigarettes Per Day" type="radio"><span> 30-39 Cigarettes Per Day  </span>
<span id="beensmoking14" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay3" value="More Than 40 Cigarettes Per Day" type="radio"><span> 	More Than 40 Cigarettes Per Day   </span>
<span id="beensmoking15" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>   
</div>

</div>

</div>
</div>
</span>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="LastStopSmoke" value="1 Month – Less Than 1 Year Ago" type="radio"><span> 1 Month – Less Than 1 Year Ago  </span>
<span id="PerDayRangeSpan4" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How Many Per Day</div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="PerDay4" value="1-9 Cigarettes Per Day" type="radio"><span> 1-9 Cigarettes Per Day  </span>
<span id="beensmoking16" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="PerDay4" class="questionary-radio" value="10-19 Cigarettes Per Day" type="radio"><span> 10-19 Cigarettes Per Day </span>
<span id="beensmoking17" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay4" value="20-29 Cigarettes Per Day" type="radio"><span> 	20-29 Cigarettes Per Day  </span>
<span id="beensmoking18" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay4" value="30-39 Cigarettes Per Day" type="radio"><span> 30-39 Cigarettes Per Day  </span>
<span id="beensmoking19" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay4" value="More Than 40 Cigarettes Per Day" type="radio"><span> 	More Than 40 Cigarettes Per Day   </span>
<span id="beensmoking20" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>   
</div>

</div>

</div>
</div>
</span>
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="LastStopSmoke" value="1 – 5 Years Ago" type="radio"><span> 	1 – 5 Years Ago    </span>
<span id="PerDayRangeSpan5" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How Many Per Day</div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="PerDay5" value="1-9 Cigarettes Per Day" type="radio"><span> 1-9 Cigarettes Per Day  </span>
<span id="beensmoking21" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="PerDay5" class="questionary-radio" value="10-19 Cigarettes Per Day" type="radio"><span> 10-19 Cigarettes Per Day </span>
<span id="beensmoking22" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay5" value="20-29 Cigarettes Per Day" type="radio"><span> 	20-29 Cigarettes Per Day  </span>
<span id="beensmoking23" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay5" value="30-39 Cigarettes Per Day" type="radio"><span> 30-39 Cigarettes Per Day  </span>
<span id="beensmoking24" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay5" value="More Than 40 Cigarettes Per Day" type="radio"><span> 	More Than 40 Cigarettes Per Day   </span>
<span id="beensmoking25" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>   
</div>

</div>

</div>
</div>
</span>
</div>
                                                                        
																		
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="LastStopSmoke" value="More Than 5 Years Ago" type="radio"><span> 	More Than 5 Years Ago     </span>
<span id="PerDayRangeSpan6" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How Many Per Day</div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="PerDay6" value="1-9 Cigarettes Per Day" type="radio"><span> 1-9 Cigarettes Per Day  </span>
<span id="beensmoking26" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="PerDay6" class="questionary-radio" value="10-19 Cigarettes Per Day" type="radio"><span> 10-19 Cigarettes Per Day </span>
<span id="beensmoking27" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay6" value="20-29 Cigarettes Per Day" type="radio"><span> 	20-29 Cigarettes Per Day  </span>
<span id="beensmoking28" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay6" value="30-39 Cigarettes Per Day" type="radio"><span> 30-39 Cigarettes Per Day  </span>
<span id="beensmoking29" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>

</div>

</div>
</div>
</span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="PerDay6" value="More Than 40 Cigarettes Per Day" type="radio"><span> 	More Than 40 Cigarettes Per Day   </span>
<span id="beensmoking30" style="float: right;" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">How long have you been smoking? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Day" type="radio"><span> 	1 Day   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="SmokingPeriod" class="questionary-radio" value="2 Days – 6 Days" type="radio"><span>	2 Days – 6 Days  </span>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Week – Less Than 1 Month" type="radio"><span>	1 Week – Less Than 1 Month   </span>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 Month – Less Than 1 Year" type="radio"><span> 1 Month – Less Than 1 Year  </span>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="1 – 5 Years" type="radio"><span> 	1 – 5 Years    </span>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio" name="SmokingPeriod" value="More Than 5 Years" type="radio"><span> 	More Than 5 Years     </span>
</div>
</div>

</div>
</div>
</span>   
</div>

</div>

</div>
</div>
</span>
</div>

</div>

</div>
</div>

</span>

</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="EverSmoked" class="questionary-radio" value="No" type="radio"><span> No </span>
</div>

</div>


</div>

</div>
</div>


</span>
</div>
</div>


</div>
</div>

<div class="Sub-head">	Are you exposed to indoor tobacco smoke?  </div>

<div class="questionary-box">

<div class="row TobaccoSmoke">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="IndoorTobacco" value="Yes" type="radio"><span>  Yes  </span>
<span id="TobaccoSmokeSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="Sub-head">About how many hours Per Day are you exposed to indoor tobacco smoke? </div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="IndoorTobaccoDaily" value="Almost Never" type="radio"><span> 	Almost never   </span>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="IndoorTobaccoDaily" class="questionary-radio" value="Less Than one hour A Day" type="radio"><span>	Less Than one hour a Day </span>
</div>

</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="IndoorTobaccoDaily" value="1-5 Hours A Day" type="radio"><span>	1-5 hours a Day  </span>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input class="questionary-radio" name="IndoorTobaccoDaily" value="More Than 5 Hours A Day" type="radio"><span> 	More Than 5 hours a Day  </span>
</div>
</div>



</div>
</div>
</span>


</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio" name="IndoorTobacco" value="No" type="radio"><span>  No </span>
<span id="TobaccoSmokeSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
No
</span>


</div>
</div>
</div>
<div class="row btn-form-cont pull-right">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<button type="submit" name="submit" id="btnSaveNext" class="form-continue">Save &amp; Continue</button>
</div>
</div>

<div class="cleafix"></div>

</div>
</div>
    </form>
</div>


<?php
        } else {
			// view
        $squery = "SELECT * FROM smoking_status where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['Smoker'] = $row['Smoker'];
            $_SESSION['LastStopSmoke'] = $row['LastStopSmoke'];
            $_SESSION['PerDay'] = $row['PerDay'];
            $_SESSION['EverSmoked'] = $row['EverSmoked'];
            $_SESSION['SmokingPeriod'] = $row['SmokingPeriod'];
			$_SESSION['IndoorTobacco'] = $row['IndoorTobacco'];
			$_SESSION['IndoorTobaccoDaily'] = $row['IndoorTobaccoDaily'];
						
        }

		?>

<div class="right_col" role="main">
    <div class="profile info-head">
        <div class="Person-info col-lg-12" style="padding: 10px 56px;">
            <h3>  Smoking Status  </h3>
            
            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Are You A Smoker?</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <?php echo $_SESSION['Smoker']; ?> </div>
                <div class="clearfix"></div>
            </div>
			<div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Have You Ever Smoked? </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['EverSmoked']; ?> </div>
                <div class="clearfix"></div>
            </div>
            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Give The Time When You Last Stopped Smoking?  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['LastStopSmoke']; ?></div>
                <div class="clearfix"></div>
            </div>

            <div class="detail001"> 
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How Many Per Day? </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PerDay']; ?></div>
                <div class="clearfix"></div>
            </div>
			 
            

            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How Long Have You Been Smoking? </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['SmokingPeriod']; ?></div>
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

 <?php
    }
}
?>

<script type="text/javascript">
    $(document).ready(function () {
		
		
			<!-- How Many Per Day fourth -->
		
		
			 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay4']:checked").val();
            if (radioValue === '1-9 Cigarettes Per Day') {
                $("#beensmoking16").show();
            } else {
                $("#beensmoking16").hide();
            }
        });	
		
		$('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay4']:checked").val();
            if (radioValue === '10-19 Cigarettes Per Day') {
                $("#beensmoking17").show();
            } else {
                $("#beensmoking17").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay4']:checked").val();
            if (radioValue === '20-29 Cigarettes Per Day') {
                $("#beensmoking18").show();
            } else {
                $("#beensmoking18").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay4']:checked").val();
            if (radioValue === '30-39 Cigarettes Per Day') {
                $("#beensmoking19").show();
            } else {
                $("#beensmoking19").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay4']:checked").val();
            if (radioValue === 'More Than 40 Cigarettes Per Day') {
                $("#beensmoking20").show();
            } else {
                $("#beensmoking20").hide();
            }
        });	

<!-- How Many Per Day fourth -->



	<!-- How Many Per Day fifth-->
		
		
			 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay5']:checked").val();
            if (radioValue === '1-9 Cigarettes Per Day') {
                $("#beensmoking21").show();
            } else {
                $("#beensmoking21").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay5']:checked").val();
            if (radioValue === '10-19 Cigarettes Per Day') {
                $("#beensmoking22").show();
            } else {
                $("#beensmoking22").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay5']:checked").val();
            if (radioValue === '20-29 Cigarettes Per Day') {
                $("#beensmoking23").show();
            } else {
                $("#beensmoking23").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay5']:checked").val();
            if (radioValue === '30-39 Cigarettes Per Day') {
                $("#beensmoking24").show();
            } else {
                $("#beensmoking24").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay5']:checked").val();
            if (radioValue === 'More Than 40 Cigarettes Per Day') {
                $("#beensmoking25").show();
            } else {
                $("#beensmoking25").hide();
            }
        });	

<!-- How Many Per Day fifth -->




	<!-- How Many Per Day six -->
		
		
			 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay6']:checked").val();
            if (radioValue === '1-9 Cigarettes Per Day') {
                $("#beensmoking26").show();
            } else {
                $("#beensmoking26").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay6']:checked").val();
            if (radioValue === '10-19 Cigarettes Per Day') {
                $("#beensmoking27").show();
            } else {
                $("#beensmoking27").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay6']:checked").val();
            if (radioValue === '20-29 Cigarettes Per Day') {
                $("#beensmoking28").show();
            } else {
                $("#beensmoking28").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay6']:checked").val();
            if (radioValue === '30-39 Cigarettes Per Day') {
                $("#beensmoking29").show();
            } else {
                $("#beensmoking29").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay6']:checked").val();
            if (radioValue === 'More Than 40 Cigarettes Per Day') {
                $("#beensmoking30").show();
            } else {
                $("#beensmoking30").hide();
            }
        });	

<!-- How Many Per Day Six -->
		
		
	<!-- How Many Per Day third -->
		
		
			 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay3']:checked").val();
            if (radioValue === '1-9 Cigarettes Per Day') {
                $("#beensmoking11").show();
            } else {
                $("#beensmoking11").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay3']:checked").val();
            if (radioValue === '10-19 Cigarettes Per Day') {
                $("#beensmoking12").show();
            } else {
                $("#beensmoking12").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay3']:checked").val();
            if (radioValue === '20-29 Cigarettes Per Day') {
                $("#beensmoking13").show();
            } else {
                $("#beensmoking13").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay3']:checked").val();
            if (radioValue === '30-39 Cigarettes Per Day') {
                $("#beensmoking14").show();
            } else {
                $("#beensmoking14").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay3']:checked").val();
            if (radioValue === 'More Than 40 Cigarettes Per Day') {
                $("#beensmoking15").show();
            } else {
                $("#beensmoking15").hide();
            }
        });	

<!-- How Many Per Day third -->
	
		
	<!-- How Many Per Day second -->
		
		
			 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay2']:checked").val();
            if (radioValue === '1-9 Cigarettes Per Day') {
                $("#beensmoking6").show();
            } else {
                $("#beensmoking6").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay2']:checked").val();
            if (radioValue === '10-19 Cigarettes Per Day') {
                $("#beensmoking7").show();
            } else {
                $("#beensmoking7").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay2']:checked").val();
            if (radioValue === '20-29 Cigarettes Per Day') {
                $("#beensmoking8").show();
            } else {
                $("#beensmoking8").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay2']:checked").val();
            if (radioValue === '30-39 Cigarettes Per Day') {
                $("#beensmoking9").show();
            } else {
                $("#beensmoking9").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay2']:checked").val();
            if (radioValue === 'More Than 40 Cigarettes Per Day') {
                $("#beensmoking10").show();
            } else {
                $("#beensmoking10").hide();
            }
        });	

<!--	How Many Per Day second -->
	
				
		
		
<!--	How Many Per Day-->
		
		
			 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay']:checked").val();
            if (radioValue === '1-9 Cigarettes Per Day') {
                $("#beensmoking1").show();
            } else {
                $("#beensmoking1").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay']:checked").val();
            if (radioValue === '10-19 Cigarettes Per Day') {
                $("#beensmoking2").show();
            } else {
                $("#beensmoking2").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay']:checked").val();
            if (radioValue === '20-29 Cigarettes Per Day') {
                $("#beensmoking3").show();
            } else {
                $("#beensmoking3 ").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay']:checked").val();
            if (radioValue === '30-39 Cigarettes Per Day') {
                $("#beensmoking4").show();
            } else {
                $("#beensmoking4").hide();
            }
        });	
		
					 $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='PerDay']:checked").val();
            if (radioValue === 'More Than 40 Cigarettes Per Day') {
                $("#beensmoking5").show();
            } else {
                $("#beensmoking5").hide();
            }
        });	

<!--	How Many Per Day-->


<!--Give the time when you last stopped smoking-->

		        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === 'Today Or Yesterday') {
                $("#PerDayRangeSpan1").show();
            } else {
                $("#PerDayRangeSpan1").hide();
            }
        });
     
		
		        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '2 Days – 6 Days Ago') {
                $("#PerDayRangeSpan2").show();
            } else {
                $("#PerDayRangeSpan2").hide();
            }
        });
		
		        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '1 Week – Less Than 1 Month Ago') {
                $("#PerDayRangeSpan3").show();
            } else {
                $("#PerDayRangeSpan3").hide();
            }
        });
		
		        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '1 Month – Less Than 1 Year Ago') {
                $("#PerDayRangeSpan4").show();
            } else {
                $("#PerDayRangeSpan4").hide();
            }
        });
		
		        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '1 – 5 Years Ago') {
                $("#PerDayRangeSpan5").show();
            } else {
                $("#PerDayRangeSpan5").hide();
            }
        });
		
		        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === 'More Than 5 Years Ago') {
                $("#PerDayRangeSpan6").show();
            } else {
                $("#PerDayRangeSpan6").hide();
            }
        });

<!--Give the time when you last stopped smoking-->





        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '2 Days – 6 Days Ago') {
                $("#StoppedSmoked2-daysSpan").show();
            } else {
                $("#StoppedSmoked2-daysSpan").hide();
            }
        });

        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '1 Week – Less Than 1 Month Ago') {
                $("#StoppedSmoked1-weekSpan").show();
            } else {
                $("#StoppedSmoked1-weekSpan").hide();
            }
        });

        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '1 Month – Less Than 1 Year Ago') {
                $("#StoppedSmoked1-monthSpan").show();
            } else {
                $("#StoppedSmoked1-monthSpan").hide();
            }
        });

        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === '1-5year') {
                $("#StoppedSmoked1-5yearSpan").show();
            } else {
                $("#StoppedSmoked1-5yearSpan").hide();
            }
        });

        $('.StoppedSmoked').click(function () {
            var radioValue = $("input[name='LastStopSmoke']:checked").val();
            if (radioValue === 'More Than 5 Years Ago') {
                $("#StoppedSmokedmorethan5Span").show();
            } else {
                $("#StoppedSmokedmorethan5Span").hide();
            }
        });



        $('.EverSmoked').click(function () {
            var radioValue = $("input[name='EverSmoked']:checked").val();
            if (radioValue === 'Yes') {
                $("#EverSmokedSpan").show();
            } else {
                $("#EverSmokedSpan").hide();
            }
        });

        $('.TobaccoSmoke').click(function () {
            var radioValue = $("input[name='IndoorTobacco']:checked").val();
            if (radioValue === 'Yes') {
                $("#TobaccoSmokeSpan").show();
            } else {
                $("#TobaccoSmokeSpan").hide();
            }
        });


        $('.SmokingStatus').click(function () {
            var radioValue = $("input[name='Smoker']:checked").val();
            if (radioValue === 'Yes') {
                $("#SmokingStatusSpan").show();
            } else {
                $("#SmokingStatusSpan").hide();
            }
        });


        $('.SmokingStatus').click(function () {
            var radioValue = $("input[name='Smoker']:checked").val();
            if (radioValue === 'No') {
                $("#SmokingStatusnoSpan").show();
            } else {
                $("#SmokingStatusnoSpan").hide();
            }
        });


        $('.alcoholicStatusBeveragesBeer').click(function () {
            var radioValue = $("input[name='alcoholicStatusBeveragesBeerRadio']:checked").val();
            if (radioValue === 'ifoften') {
                $("#alcoholicStatusBeveragesBearoftenSpan").show();
            } else {
                $("#alcoholicStatusBeveragesBearoftenSpan").hide();
            }
        });

        $('.alcoholicStatusBeveragesWine').click(function () {
            var radioValue = $("input[name='alcoholicStatusBeveragesWineRadio']:checked").val();
            if (radioValue === 'ifoften') {
                $("#alcoholicStatusBeveragesWineoftenSpan").show();
            } else {
                $("#alcoholicStatusBeveragesWineoftenSpan").hide();
            }
        });

        $('.alcoholicStatusBeveragesHard').click(function () {
            var radioValue = $("input[name='alcoholicStatusBeveragesHardRadio']:checked").val();
            if (radioValue === 'ifoften') {
                $("#alcoholicStatusBeveragesHardoftenSpan").show();
            } else {
                $("#alcoholicStatusBeveragesHardoftenSpan").hide();
            }
        });






        $('.alcoholicStatusBeverages').click(function () {
            var radioValue = $("input[name='alcoholicStatusBeveragesRadio']:checked").val();
            if (radioValue === 'beer') {
                $("#alcoholicStatusBeveragesBearSpan").show();
                $("#alcoholicStatusBeveragesWineSpan").hide();
                $("#alcoholicStatusBeveragesHardSpan").hide();
            } else if (radioValue === 'wine') {
                $("#alcoholicStatusBeveragesBearSpan").hide();
                $("#alcoholicStatusBeveragesWineSpan").show();
                $("#alcoholicStatusBeveragesHardSpan").hide();
            } else if (radioValue === 'hardliquor') {
                $("#alcoholicStatusBeveragesBearSpan").hide();
                $("#alcoholicStatusBeveragesWineSpan").hide();
                $("#alcoholicStatusBeveragesHardSpan").show();
            } else {
                $("#alcoholicStatusBeveragesBearSpan").hide();
                $("#alcoholicStatusBeveragesWineSpan").hide();
                $("#alcoholicStatusBeveragesHardSpan").hide();
            }
        });




        $('.ques02').click(function () {
            var radioValue = $("input[name='mymotherGeneralHelthRadio']:checked").val();
            if (radioValue === 'poor02') {
                $("#spanPainOccur02").show();
                $("#spanAgeatdeath02").hide();
            } else if (radioValue === 'Deceased02') {
                $("#spanAgeatdeath02").show();
                $("#spanPainOccur02").hide();
            } else {
                $("#spanPainOccur02").hide();
                $("#spanAgeatdeath02").hide();
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

        $('.q5 input:radio[name=optradio]').click(function () {
            var radioValue = $(".q5 input[name='optradio']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType4").show();
            } else {
                $("#SpecializedType4").hide();
            }
        });

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


<?php include ('footer_user.php'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
