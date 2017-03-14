<?php
session_start();
include ('header_user.php');
include ('left_sidebar_user.php');

if (!empty($_POST)) {
 
 
	try{
		
    // keep track post values
    $FruitVegAssessment = $_POST['FruitVegAssessment'];
	$CitrusAssessment = $_POST['CitrusAssessment'];
    $OrangeYellowFruit = $_POST['OrangeYellowFruit'];
    $CruciferousVeg = $_POST['CruciferousVeg'];
    $SmokedFood = $_POST['SmokedFood'];
	$ProcessedMeat = $_POST['ProcessedMeat'];
    $BarbecuFood = $_POST['BarbecuFood'];
    $CoffeeCupAvg = $_POST['CoffeeCupAvg'];
	$DairyServing = $_POST['DairyServing'];
	$Carrot = $_POST['Carrot'];
	$Apricot = $_POST['Apricot'];
	$Cantaloupe = $_POST['Cantaloupe'];
	$Melon = $_POST['Melon'];
	$Potato = $_POST['Potato'];
	$Peach = $_POST['Peach'];
	$Status = '0';
	
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO vitamin_information (PatientId, FruitVegAssessment , 
			CitrusAssessment ,OrangeYellowFruit , CruciferousVeg ,SmokedFood ,
			ProcessedMeat, BarbecuFood , CoffeeCupAvg, DairyServing,
			Carrot, Apricot,Cantaloupe,Melon,Potato,Peach,
			Status  ) VALUES ( ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
							   ?, ?, ?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($_SESSION['PatientId'], $FruitVegAssessment , $CitrusAssessment, 
					  $OrangeYellowFruit , $CruciferousVeg ,$SmokedFood ,$ProcessedMeat, 
					  $BarbecuFood , $CoffeeCupAvg, $DairyServing,
					  $Carrot, $Apricot, $Cantaloupe, $Melon,
					  $Potato, $Peach, $Status  ));
					  
	$sql = "UPDATE profilereport set VitaminInformation = ? WHERE PatientId=?";
	$q = $pdo->prepare($sql);
	$q->execute(array(7, $_SESSION['PatientId']));
	
	Database::disconnect();
	echo"data submited";
		 echo "<script type = 'text/javascript'>alert('Successfully inserted'); window.location = 'confidential_lifestyle.php'; </script>";
	}
	catch(Exception $e){
		echo $e;
		 echo "<script type = 'text/javascript'> alert('Server Error'); </script>";
	
	  
	}
}
?>
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
        $squery = "SELECT * FROM vitamin_information where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
	?>
    <div class="right_col" role="main">
        <form class="form-horizontal" enctype="multipart/form-data" name="vitamin_information" id="vitamin_information" method="post">
            <div class="profile info-head">
                <div class="col-sm-12">
					<div class="row pull-right">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<input type="submit" name="submit"  class="form-continue"  value="Save &amp; Continue">

                            </div>
                        </div>
                    <h3> Vitamin and mineral supplementation assessment   </h3>
                    <div>
                  
                        <div class="clearfix"></div>

                        <div>
                            <div class="Sub-head">Do you have fewer than 5 servings of fruits and vegetables per day on average? </div>
                            <div class="questionary-opt">
                                <div class="select-items specialty_radio">
                                    <div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input class="speciality questionary-radio" name="FruitVegAssessment" value="Yes" id="chkYes" type="radio"> Yes
                                        </div>

                                    </div>
                                </div>
                                <div class="specialty_radio">
                                    <div>
                                        <input class="speciality questionary-radio" name="FruitVegAssessment" value="No" type="radio"> NO </div>
                                </div>
                            </div>
                           <span class="vitmain-error" style="display:none;color:red">this field is requied</span> 
                        </div>
                        
                     
                        <div>
                            <div class="Sub-head">Do you consume citrus fruits (Grapefruit, Oranges, Lemons etc.) fewer than 4 times per week on average? </div>
                            
                            <div class="questionary-opt">
                                <div class="select-items specialty_radio">
                                    <div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input class="speciality questionary-radio" name="CitrusAssessment" value="Yes" id="chkYes" type="radio"> Yes
                                        </div>

                                    </div>
                                </div>
                                <div class="specialty_radio">
                                    <div>
                                        <input class="speciality questionary-radio" name="CitrusAssessment" value="No" type="radio"> NO </div>
                                </div>
                            </div>
                            <span class="vitmain-error1" style="display:none;color:red">this field is requied</span>
                        </div>
                        <div>
                            <div class="Sub-head">Do you consume 1 serving of orange-yellow fruits and vegetables fewer than 5 times per week on average?</div>
                            <div class="questionary-opt">
                                <div class="select-items specialty_radio">
                                    <div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input class="speciality questionary-radio" name="OrangeYellowFruit" value="Yes" id="chkYes" type="radio"> Yes
                                        </div>

                                    </div>
                                </div>
                                <div class="specialty_radio">
                                    <div>
                                        <input class="speciality questionary-radio" name="OrangeYellowFruit" value="No" type="radio"> NO </div>
                                </div>
                            </div>
                        <span class="vitmain-error2" style="display:none;color:red">this field is requied</span>

                            
                        </div>
                        <div>
                            <div class="Sub-head">1 whole carrot ? </div>
                            <div class="questionary-opt">
                                <div class="select-items specialty_radio">
                                    <div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input class="speciality questionary-radio" name="Carrot" value="Yes" id="chkYes" type="radio"> Yes
                                        </div>

                                    </div>
                                </div>
                                <div class="specialty_radio">
                                    <div>
                                        <input class="speciality questionary-radio" name="Carrot" value="No" type="radio"> NO </div>
                                </div>
                            </div>
                        <span class="vitmain-error3" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                            <div class="Sub-head">Large apricot halves</div>
                            <div class="questionary-opt">
                                <div class="select-items specialty_radio">
                                    <div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input class="speciality questionary-radio" name="Apricot" value="Yes" id="chkYes" type="radio"> Yes
                                        </div>

                                    </div>
                                </div>
                                <div class="specialty_radio">
                                    <div>
                                        <input class="speciality questionary-radio" name="Apricot" value="No" type="radio"> NO </div>
                                </div>
                            </div>
                      <span class="vitmain-error4" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                            <div class="Sub-head">Quarter of a cantaloupe ? </div>
                            <div class="questionary-opt">
                                <div class="select-items specialty_radio">
                                    <div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                            <input class="speciality questionary-radio" name="Cantaloupe" value="Yes" id="chkYes" type="radio"> Yes
                                        </div>

                                    </div>
                                </div>
                                <div class="specialty_radio">
                                    <div>
                                        <input class="speciality questionary-radio" name="Cantaloupe" value="No" type="radio"> NO </div>
                                </div>
                            </div>
                      <span class="vitmain-error5" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head">Half cup melon squash ? </div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="Melon" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="Melon" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                 <span class="vitmain-error6" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head">1 baked sweet potato ? </div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="Potato" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="Potato" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                  <span class="vitmain-error7" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head">1 whole peach/nectarine ? </div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="Peach" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="Peach" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                            <span class="vitmain-error8" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head">Do you consume cruciferous vegetables (cabbage, cauliflower, broccoli, Brussels sprouts) fewer than 5 times per week on average?</div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="CruciferousVeg" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="CruciferousVeg" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                                <span class="vitmain-error9" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head"> Do you eat smoked meats or fish more than once per week on average? </div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="SmokedFood" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="SmokedFood" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                                 <span class="vitmain-error10" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head">Do you eat luncheon meats, processed meats, sausages, bacon, bologna or any other nitrate salt containing meat once per week or more on average ? </div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="ProcessedMeat" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="ProcessedMeat" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                           <span class="vitmain-error11" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head"> Do you eat barbecued foods that are charred once per week or more on average?</div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="BarbecuFood" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="BarbecuFood" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                          <span class="vitmain-error12" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head">Do you drink 3 or more cups of coffee per day on average?</div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="CoffeeCupAvg" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="CoffeeCupAvg" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                       <span class="vitmain-error13" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div>
                        <div class="Sub-head">Do you consume less than two dairy servings per day on average? 1serving=8oz of milk or yogurt (preferably low-fat varieties)=3-4ow of cheese (preferably low-fat varieties)?</div>
                        <div class="questionary-opt">
                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="DairyServing" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                </div>
                            </div>
                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="DairyServing" value="No" type="radio"> NO </div>
                            </div>
                        </div>
                         <span class="vitmain-error14" style="display:none;color:red">this field is requied</span>

                        </div>
                        <div class="row btn-form-cont pull-right">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<input type="submit" name="submit"  class="form-continue"  value="Save &amp; Continue">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
			 </form>
    </div>
   <?php
			}
			else {// view
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
    <?php
			}
		}
?>
	<script>
	$(document).ready(function(e) {
		$("input[type=submit]").click(function(){
			var isvalid=true;
		     	
		if(!$("input[name=FruitVegAssessment]").is(':checked'))
				{
					alert("Please Select Do You Have Fewer Than 5 Servings Of Fruits And Vegetables Per Day On Average");
					//$(".vitmain-error").show();
					isvalid=false;
				}
				
				if(!$("input[name=CitrusAssessment]").is(':checked'))
				{
					alert("Please Select Do You Consume Citrus Fruits (Grapefruit, Oranges, Lemons Etc.) Fewer Than 4 Times Per Week On Average");
					isvalid=false;
				}
				
					if(!$("input[name=OrangeYellowFruit]").is(':checked'))
				{
					alert("Please Select Do You Consume 1 Serving Of Orange-Yellow Fruits And Vegetables Fewer Than 5 Times Per Week On Average");
					isvalid=false;
				}	
				
				if(!$("input[name=Carrot]").is(':checked'))
				{

					alert("Please Select 1 Whole Carrot");				
					isvalid=false;
				}
				
				if(!$("input[name=Apricot]").is(':checked'))
				{
					alert("Please Select Large Apricot Halves");
					isvalid=false;
				}
				
				
				if(!$("input[name=Cantaloupe]").is(':checked'))
				{
					alert("Please Select Quarter Of A Cantaloupe");
					isvalid=false;
				}
				
				if(!$("input[name=Melon]").is(':checked'))
				{
					alert("Please Select Half Cup Melon Squash");
					isvalid=false;
				}
				
				if(!$("input[name=Potato]").is(':checked'))
				{
					alert("Please Select 1 Baked Sweet Potato");
					isvalid=false;
				}
				
				if(!$("input[name=Peach]").is(':checked'))
				{
					alert("Please Select 1 Whole Peach/Nectarine");
					isvalid=false;
				}
				
				if(!$("input[name=CruciferousVeg]").is(':checked'))
				{
				alert("Please select Do You Consume Cruciferous Vegetables (Cabbage, Cauliflower, Broccoli, Brussels Sprouts) Fewer Than 5 Times Per Week On Average");
					isvalid=false;
				}
				
				if(!$("input[name=SmokedFood]").is(':checked'))
				{
					alert("Please Select Do You Eat Smoked Meats Or Fish More Than Once Per Week On Average");
					isvalid=false;
				}
				
				if(!$("input[name=ProcessedMeat]").is(':checked'))
				{
					alert("Please Select Do You Eat Luncheon Meats, Processed Meats, Sausages, Bacon, Bologna Or Any Other Nitrate Salt Containing Meat Once Per Week Or More On Average");
					isvalid=false;
				}
				
				if(!$("input[name=BarbecuFood]").is(':checked'))
				{
				alert("Please Select Do You Eat Barbecued Foods That Are Charred Once Per Week Or More On Average");
					isvalid=false;
				}
				
				if(!$("input[name=CoffeeCupAvg]").is(':checked'))
				{
					alert("Please Select Do You Drink 3 Or More Cups Of Coffee Per Day On Average");
					isvalid=false;
				}
				
				if(!$("input[name=DairyServing]").is(':checked'))
				{
					alert("Do You Consume Less Than Two Dairy Servings Per Day On Average");
					isvalid=false;
				}
				

				return isvalid;
					
        
			
			
			
			});
        
    });
	</script>
	<?php	
include ('footer_user.php'); ?>
