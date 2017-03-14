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
    $DrinkStatus = $_POST['DrinkStatus'];
    $BeerIntake = $_POST['BeerIntake'];
    $WineIntake = $_POST['WineIntake'];
    $HardLiquor = $_POST['HardLiquor'];
    $HeavyDrinker = $_POST['HeavyDrinker'];
    $Comments = $_POST['Comments'];    
	$BeerOften = $_POST['BeerOften'];
    $WineOften = $_POST['WineOften'];
    $HardOften = $_POST['HardOften'];

    $Name = $_POST['Name'];
    $FrequencyIntake = $_POST['FrequencyIntake'];
    $Duration = $_POST['Duration'];
    $Addiction = $_POST['Addiction'];
    $Status = '0';

    // validate input
    // update data
    //if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO alcohol_status  (PatientId , DrinkStatus ,BeerIntake, BeerOften ,WineIntake, WineOften , HardLiquor, HardOften ,HeavyDrinker ,Comments, Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $DrinkStatus, $BeerIntake, $BeerOften, $WineIntake, $WineOften, $HardLiquor, $HardOften, $HeavyDrinker, $Comments, $Status));

    $sql = "INSERT INTO substance_abuse  (PatientId , Name ,FrequencyIntake ,Duration , Addiction ,Status) VALUES (?, ?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $Name, $FrequencyIntake, $Duration, $Addiction, $Status));
	
	$sql = "UPDATE profilereport set AlcoholStatus = ? WHERE PatientId=?";
	$q = $pdo->prepare($sql);
	$q->execute(array(7, $_SESSION['PatientId']));

    Database::disconnect();
    echo "<script type = 'text/javascript'> alert('Successfully inserted'); window.location = 'smoking_status.php'; </script>";
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
        $squery = "SELECT * FROM alcohol_status where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) 
			{    //Allow edit
				?>

<div class="right_col" role="main">
    <form class="form-horizontal" enctype="multipart/form-data" name="alcohol_status"  method="post" >
        <div class="profile info-head">
            <div class="col-sm-12">
			<div class="row pull-right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<input type="submit" name="submit"  class="form-continue"  value="Save &amp; Continue">

                    </div>
                </div>
                <h3> Alcohol Status  </h3>
                <div>
                    <div class="Sub-head">Do You ever drink alcoholic beverages? </div>
                    <div class="questionary-box">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input class="questionary-radio alcoholicStatus a1" name="DrinkStatus" id="DrinkStatusYes" value="Yes" type="radio"><span>  Yes  </span>
                                <span id="alcoholicStatusSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                    <div>
                                        <div class="Sub-head">What is your approximate intake of there beverages?</div>
                                        <div class="questionary-box">
                                            <div class="row">
                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                                    <input name="alcoholicStatusBeveragesRadio" class="questionary-radio alcoholicStatusBeverages chkBev" value="beer" type="checkbox"><span> Beer </span>
                                                    <span id="alcoholicStatusBeveragesBearSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                                        <div>
                                                            <div class="questionary-box">
                                                                               <!-- <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input name="WineIntake" class="questionary-radio alcoholicStatusBeveragesWine" value="None" type="radio"><span> None </span>
                                                                    </div>
                                                                </div>--->
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesBeer" name="BeerIntake" value="Occasional" type="radio"><span>  Occasional </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesBeer" name="BeerIntake" value="Often" type="radio"><span>  Often </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 father">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesBeer" name="BeerIntake" value="IF Often" type="radio"><span>If Often</span>
                                                                        <span id="alcoholicStatusBeveragesBearoftenSpan" style="display:none; float:right" class="inner-box01 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                                                            <input type="text" placeholder="IF Often" name="BeerOften" class="form-control">
                                                                        </span>      
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">                              
                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                                    <input class="questionary-radio alcoholicStatusBeverages chkBev" name="alcoholicStatusBeveragesRadio" value="wine" type="checkbox"><span>  Wine </span>
                                                    <span id="alcoholicStatusBeveragesWineSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                                        <div>
                                                            <div class="questionary-box">
                                                               <!-- <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input name="WineIntake" class="questionary-radio alcoholicStatusBeveragesWine" value="None" type="radio"><span> None </span>
                                                                    </div>
                                                                </div>--->
                                                                <div class="row">

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesWine" name="WineIntake" value="Occasional" type="radio"><span>  Occasional </span>
                                                                    </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesWine" name="WineIntake" value="often" type="radio"><span>  Often </span>

                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 father">
     <input class="questionary-radio alcoholicStatusBeveragesWine" name="WineIntake" value="IF Often" type="radio"><span>IF Often</span>
          <span id="alcoholicStatusBeveragesWineoftenSpan" style="display:none; float:right" class=" inner-box01 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                                                            <input type="text" placeholder="IF Often" name="WineOften" class="form-control">
                                                                        </span>      
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 father">
                                                    <input class="questionary-radio alcoholicStatusBeverages chkBev" name="alcoholicStatusBeveragesRadio" value="hardliquor" type="checkbox"><span>Hard Liquor</span>
                                                    <span id="alcoholicStatusBeveragesHardSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                                        <div>
                                                            <div class="questionary-box">
                                                                                  <!-- <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input name="WineIntake" class="questionary-radio alcoholicStatusBeveragesWine" value="None" type="radio"><span> None </span>
                                                                    </div>
                                                                </div>--->

                                                                <div class="row">

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesHard" name="HardLiquor" value="Occasional" type="radio"><span>  Occasional </span>

                                                                    </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesHard" name="HardLiquor" value="Often" type="radio"><span>  Often </span>

                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 father">
                                                                        <input class="questionary-radio alcoholicStatusBeveragesHard" name="HardLiquor" value="IF Often" type="radio"><span>IF Often</span>

                                                                        <span id="alcoholicStatusBeveragesHardoftenSpan" style="display:none; float:right" class=" inner-box01 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                                                                            <input type="text" placeholder="IF Often" name="HardOften" class="form-control">
                                                                        </span>      
                                                                    </div>
                                                                </div>
                                                                <div>

                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input class="questionary-radio alcoholicStatus" name="DrinkStatus" id="DrinkStatusNo" value="No" type="radio"><span>  No </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="Sub-head">At any time in the past, were you a heavy drinker (consumption of six ounces of hard liquor per day or more)?</div>
                    <div class="questionary-opt">

                        <div class="select-items specialty_radio">
                            <div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                    <input class="speciality questionary-radio" name="HeavyDrinker" value="Yes" id="chkYes" type="radio"> Yes
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="specialty_radio">
                            <div>
                                <input class="speciality questionary-radio" name="HeavyDrinker" value="No" type="radio"> NO </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row" style="margin-top: 20px; margin-bottom: 40px;">
                    <textarea style="width:90%; height:100px; border:1px solid #ddd" name="Comments" placeholder="comments..."></textarea>
                </div>

                <div>
                    <div class="Sub-head"> Specify in case of any other substance abuse :</div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                            <div class="">
                                <select class="form-control substance_abuse" id="slider_select_dep" name="Name">
                                    <option value="0">Select Name of the drug</option>
                                    <option value="Antidepressants">Antidepressants</option>
                                    <option value="Anti-anxiety drugs">Anti-anxiety drugs</option>
                                    <option value="Barbiturates">Barbiturates</option>
                                    <option value="Cannabis">Cannabis</option>
                                    <option value="Club and Street Drugs">Club and Street Drugs</option>
                                    <option value="Dissociative Drugs">Dissociative Drugs</option>
                                    <option value="Hallucinogens">Hallucinogens</option>
                                    <option value="Inhalants">Inhalants</option>
                                    <option value="Narcotics">Narcotics</option>
                                    <option value="Steroids">Steroids</option>
                                    <option value="Stimulants">Stimulants</option>
                                    <option value="Nicotine">Nicotine</option>
                                </select>
                            </div>
							<span class="substanceabuse"style="display:none; color:red">Please select this field</span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                            <div>
                                <div class="Sub-head" style="margin-top:0"> Frequency of intake </div>

                                <div class="questionary-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="questionary-radio" name="FrequencyIntake" value="1-2 times a day " type="radio"><span>1-2 times a day </span>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input name="FrequencyIntake" class="questionary-radio" value="2-3 times in a week" type="radio"><span> 2-3 times in a week  </span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="questionary-radio" name="FrequencyIntake" value="5 times a week" type="radio"><span> 5 times a week  </span>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="questionary-radio" name="FrequencyIntake" value="Everyday" type="radio"><span> Everyday   </span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="questionary-radio" name="FrequencyIntake" value="Not Sure" type="radio"><span> Every week </span>
                                        </div>
                                    </div>
                                </div>
                               <span class="frequenceintake" style="display:none;color:red">Please select FrequencyIntake</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
						
                            <div>
                                <div class="Sub-head" style="margin-top:0"> Duration </div>

                                <div class="questionary-box">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="questionary-radio" name="Duration" value="1-2 per day" type="radio"><span> 1-2 per day</span>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input name="Duration" class="questionary-radio" value="2-4 per day" type="radio"><span> 2-4 per day </span>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="questionary-radio" name="Duration" value="Not Sure" type="radio"><span> more than 4 </span>
                                        </div>

                                    </div>

                                </div>
					   <span class="duration-error" style="color:red;display:none">Please select Duration</span>

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                            <input placeholder="Addiction " class="form-control text" id="txt1" name="Addiction" type="text">
                        </div>

                    </div>
                    <div>

                    </div>

                    <div class="clearfix"></div>

                </div>

                <div class="row btn-form-cont pull-right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="submit" name="submit"  class="form-continue"  value="Save &amp; Continue">

                    </div>
                </div>

                <div class="cleafix"></div>

            </div>
        </div>
    </form>
</div><br><br>
<div class="clearfix"></div>

<?php
        } else {
			// view
        $squery = "SELECT * FROM alcohol_status where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['DrinkStatus'] = $row['DrinkStatus'];
            $_SESSION['BeerIntake'] = $row['BeerIntake'];
            $_SESSION['WineIntake'] = $row['WineIntake'];
            $_SESSION['HardLiquor'] = $row['HardLiquor'];
            $_SESSION['HeavyDrinker'] = $row['HeavyDrinker'];
			$_SESSION['Comments'] = $row['Comments'];
			$_SESSION['BeerOften'] = $row['BeerOften'];
			$_SESSION['WineOften'] = $row['WineOften'];
			$_SESSION['HardOften'] = $row['HardOften'];
						
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How Many Times  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['BeerOften']; ?></div>
                <div class="clearfix"></div>
            </div>
			
            <div class="detail001"> 
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Wine Intake </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WineIntake']; ?></div>
                <div class="clearfix"></div>
            </div>
			 
			 			            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How Many Times  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['WineOften']; ?></div>
                <div class="clearfix"></div>
            </div>
			
            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Hard Liquor Intake </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HardLiquor']; ?> </div>
                <div class="clearfix"></div>
            </div>

						            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">How Many Times  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['HardOften']; ?></div>
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
        $('.chkBev').click(function () {
            $("#alcoholicStatusBeveragesBearSpan").hide();
            $("#alcoholicStatusBeveragesWineSpan").hide();
            $("#alcoholicStatusBeveragesHardSpan").hide();
            $('.chkBev:checked').each(function () {
                var radioValue = $(this).val();
                if (radioValue === 'beer') {
                    $("#alcoholicStatusBeveragesBearSpan").show();
                }
                if (radioValue === 'wine') {
                    $("#alcoholicStatusBeveragesWineSpan").show();
                }
                if (radioValue === 'hardliquor') {
                    $("#alcoholicStatusBeveragesHardSpan").show();
                }
            });
        });
        $('.q1 input:checkbox[name=optradio]').click(function () {
            var radioValue = $("input[name='optradio']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType").show();
            } else {
                $("#SpecializedType").hide();
            }
        });



        $('.alcoholicStatus').click(function () {
            var radioValue = $("input[name='DrinkStatus']:checked").val();
            if (radioValue === 'Yes') {
                $("#alcoholicStatusSpan").show();
            } else {
                $("#alcoholicStatusSpan").hide();
            }
        });




        $('.alcoholicStatusBeveragesBeer').click(function () {
            var radioValue = $("input[name='BeerIntake']:checked").val();
            if (radioValue === 'IF Often') {
                $("#alcoholicStatusBeveragesBearoftenSpan").show();
            } else {
				
                $("#alcoholicStatusBeveragesBearoftenSpan").hide();
				$("input[type=text][name=BeerOften]").val('');
            }
        });

		
		

        $('.alcoholicStatusBeveragesHard').click(function () {
            var radioValue = $("input[name='HardLiquor']:checked").val();
            if (radioValue === 'IF Often') {
                $("#alcoholicStatusBeveragesHardoftenSpan").show();
            } else {
                $("#alcoholicStatusBeveragesHardoftenSpan").hide();
				$("input[type=text][name=WineOften]").val('');
            }
        });


        $('.alcoholicStatusBeveragesWine').click(function () {
            var radioValue = $("input[name='WineIntake']:checked").val();
            if (radioValue === 'IF Often') {
                $("#alcoholicStatusBeveragesWineoftenSpan").show();
            } else {
                $("#alcoholicStatusBeveragesWineoftenSpan").hide();
				$("input[type=text][name=HardOften]").val('');
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
           
       
        //Do stuff
                   
 

    });
</script>
<script>
$(document).ready(function(){
	$("input[type=submit]").click(function(){
		
		
		var isvalid=true;
		if($("input[name=BeerIntake]").is(':visible'))
		{
			if(!$("input[name=BeerIntake]").is(':checked'))
			{
				alert("please select Beer option");
				isvalid=false;
			}
			
		}
		if($("input[name=WineIntake]").is(':visible'))
		{
			if(!$("input[name=WineIntake]").is(':checked'))
			{
				alert("please select Wine option");
				isvalid=false;
			}
			
		}
		if($("input[name=HardLiquor]").is(':visible'))
		{
			if(!$("input[name=HardLiquor]").is(':checked'))
			{
				alert("please select HardLiquor option");
				isvalid=false;
			}
			
		}
		if($("input[name=alcoholicStatusBeveragesRadio]").is(':visible'))
		{
			//if(!$(this).is(':checked'))
				if($("input[name=alcoholicStatusBeveragesRadio]:checked").length ==0)
			{
				alert("please select Approximate Intake Of There Beverages option");
				isvalid=false;
			}
			
		}
		if(!$("input[name=DrinkStatus]").is(':checked'))
		{
			alert("please select Alcoholic Beverages");
			isvalid=false;
		}
			if(!$("input[name=HeavyDrinker]").is(':checked'))
		{
			alert("please select HeavyDrinker");
			isvalid=false;
		}
		if($("input[type=text][name=BeerOften]").is(':visible'))
		{
			if($("input[type=text][name=BeerOften]").val().length==0)
			{
				alert("Please enter value in if often in Beer" );
				isvalid=false;
			}
		}
		if($("input[type=text][name=WineOften]").is(':visible'))
		{
			if($("input[type=text][name=WineOften]").val().length==0)
			{
				alert("Please enter value in if often in Wine" );
				isvalid=false;
			}
		}
		if($("input[type=text][name=HardOften]").is(':visible'))
		{
			if($("input[type=text][name=HardOften]").val().length==0)
			{
				alert("Please enter value in if often in Hard Liquor" );
				isvalid=false;
			}
		}
		
		
	return isvalid;

	});	
});
</script>

<script>
$(document).ready(function(){
	$("#DrinkStatusNo").click(function(){
		$("input[name=BeerIntake]").val('');
		$("input[name=WineIntake]").val('');
		$("input[name=HardLiquor]").val('');
		});
	
	
	
	});
</script>


<?php include ('footer_user.php'); ?>