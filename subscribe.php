<?php
include ('header_user.php');
include ('left_sidebar_user.php');
$query = mysql_query("SELECT * FROM paymentsdetails WHERE PatientId = '" . $_SESSION['PatientId'] . "'");
$rowcount = mysql_num_rows($query);
echo $rowcount;
$result = mysql_fetch_assoc($query);
print_r($result);
echo $Package = $result['Package'];
echo $Response = $result['Response'];
?>
<style>
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: -webkit-inline-box !important;
	display: -moz-inline-box !important;
    max-width: 100%;
    height: auto;
}

.subscrib-div{ font-size:20px;}

</style>


<div class="right_col" role="main">
   
        <div class="profile info-head">
		
		<?php
		if($rowcount > 0 && $Response == 'Success')
		{
			if($Package == 'Silver' && $Response == 'Success')
			{
				
		?>
			<div class="col-xs-12 subscrib-div text-center" style="display: block;">
			You Have Already Subscribed The Silver Package from <?php echo $result['SubscriptionDate']; ?> to <?php echo $result['ExpiryDate'];?>.
			</div>
            <div class="col-xs-12">
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=1000.00&Amount=1000.00&Package=Basic">
			<div class="col-xs-12"  id="pack1">
			<div class="pack-header col-xs-12">Basic Package - <span class="price-size"> 1000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Hb | ESR | Blood Sugar ( Random) | Lipid Profile | ECG 
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			</div>
			
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			
			</div>  <!--col-xs-12-->
			
			<div class="pay col-xs-12" onclick="show1()">
			
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			<div class="col-xs-12" id="subscrib1" >
			You Have Already Subscribed The Basic Package from 01-01-2017 to 01-01-2018.
			</div>
			
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
				<div class="col-xs-12"  id="pack2">
				<div class="pack-header col-xs-12">Silver Package - <span class="price-size"> 2500INR </span></div> <!--pack-header-->
				<div class="col-xs-12 package-text">
				<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | ECG </div>
				<br>
				<br>
				<br>
				<p >ADDED CYGEN BENEFITS:</p>
				<ul>
				<li>Cygen Registration Records</li>
				<li>Online Digital Medical Records</li>
				<li>BP</li>
				<li>Heart Rate</li>
				<li>Temperature</li>
				<li>Blood Oxygen Saturation</li>
				<li>Height</li>
				<li>Weight</li>
				<li>BMI</li>
				<li>Health Score</li>
				<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
				<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
				<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
				</ul>
				</div>  <!--col-xs-12-->
			
				</div> <!--pack2-->
			
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=4000.00&Amount=4000.00&Package=Gold">
			<div class="col-xs-12"  id="pack3">
			<div class="pack-header col-xs-12">Gold Package - <span class="price-size"> 4000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBAIC | Thyroid profile | Lipid profile | Urine Routine | Serum Calcium | Vit B12 | Vit D | ECG</div>
			<br>
			<br>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			<div class="pay col-xs-12" onclick="show3()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			<div class="col-xs-12" id="subscrib3" >
			You Have Already Subscribed The Gold Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=8000.00&Amount=8000.00&Package=Platinum"> 
			<div class="col-xs-12"  id="pack4">
			<div class="pack-header col-xs-12">Platinum Package - <span class="price-size"> 8000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test">  Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | Urine Routine | Serum Calcium | Vit B12 | Vit D | Thyroid profile | ECG | Treadmill test or 2D Echo</div>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			<div class="pay col-xs-12" onclick="show4()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			
			<div class="col-xs-12" id="subscrib4" >
			You Have Already Subscribed The Platinum Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
               
                    
             </div>
			 <?php
			}
			else if($Package == 'Basic' && $Response == 'Success')
			{
				?>
				<div class="col-xs-12 subscrib-div text-center" style="display: block;" >
				You Have Already Subscribed The Basic Package from <?php echo $result['SubscriptionDate']; ?> to <?php echo $result['ExpiryDate'];?>.
				</div>
				
				<div class="col-xs-12">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
				<div class="col-xs-12"  id="pack1">
			<div class="pack-header col-xs-12">Basic Package - <span class="price-size"> 1000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Hb | ESR | Blood Sugar ( Random) | Lipid Profile | ECG 
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			</div>
			
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			
			</div>  <!--col-xs-12-->
			
			</div>
				<div class="clr"> </div>
				</div> <!--packages-->
				
				
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
				<form method="post" action="payment/index.php?InvoiceAmount=2500.00&Amount=2500.00&Package=Silver">
				<div class="col-xs-12"  id="pack2">
				<div class="pack-header col-xs-12">Silver Package - <span class="price-size"> 2500INR </span></div> <!--pack-header-->
				<div class="col-xs-12 package-text">
				<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | ECG </div>
				<br>
				<br>
				<br>
				<p >ADDED CYGEN BENEFITS:</p>
				<ul>
				<li>Cygen Registration Records</li>
				<li>Online Digital Medical Records</li>
				<li>BP</li>
				<li>Heart Rate</li>
				<li>Temperature</li>
				<li>Blood Oxygen Saturation</li>
				<li>Height</li>
				<li>Weight</li>
				<li>BMI</li>
				<li>Health Score</li>
				<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
				<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
				<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
				</ul>
				</div>  <!--col-xs-12-->
			
				<div class="pay col-xs-12" onclick="show2()">
				<input type="submit" id="submit" class="form-continue" value="PAY">
				</div>
				</div> <!--pack2-->
				</form>
				
				<div class="col-xs-12" id="subscrib2" >
				You Have Already Subscribed The Silver Package from 01-01-2017 to 01-01-2018.
				</div>
				<div class="clr"> </div>
				</div> <!--packages-->
				
				
				
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
				<form method="post" action="payment/index.php?InvoiceAmount=4000.00&Amount=4000.00&Package=Gold">
				<div class="col-xs-12"  id="pack3">
				<div class="pack-header col-xs-12">Gold Package - <span class="price-size"> 4000INR </span></div> <!--pack-header-->
				<div class="col-xs-12 package-text">
				<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBAIC | Thyroid profile | Lipid profile | Urine Routine | Serum Calcium | Vit B12 | Vit D | ECG</div>
				<br>
				<br>
				<p >ADDED CYGEN BENEFITS:</p>
				<ul>
				<li>Cygen Registration Records</li>
				<li>Online Digital Medical Records</li>
				<li>BP</li>
				<li>Heart Rate</li>
				<li>Temperature</li>
				<li>Blood Oxygen Saturation</li>
				<li>Height</li>
				<li>Weight</li>
				<li>BMI</li>
				<li>Health Score</li>
				<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
				<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
				<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
				</ul>
				</div>  <!--col-xs-12-->
				<div class="pay col-xs-12" onclick="show3()">
				<input type="submit" id="submit" class="form-continue" value="PAY">
				</div>
				</div>
				</form>
				
				<div class="col-xs-12" id="subscrib3" >
				You Have Already Subscribed The Gold Package from 01-01-2017 to 01-01-2018.
				</div>
				<div class="clr"> </div>
				</div> <!--packages-->
				
				
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
				<form method="post" action="payment/index.php?InvoiceAmount=8000.00&Amount=8000.00&Package=Platinum"> 
				<div class="col-xs-12"  id="pack4">
				<div class="pack-header col-xs-12">Platinum Package - <span class="price-size"> 8000INR </span></div> <!--pack-header-->
				<div class="col-xs-12 package-text">
				<div class="pack-test">  Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | Urine Routine | Serum Calcium | Vit B12 | Vit D | Thyroid profile | ECG | Treadmill test or 2D Echo</div>
				<p >ADDED CYGEN BENEFITS:</p>
				<ul>
				<li>Cygen Registration Records</li>
				<li>Online Digital Medical Records</li>
				<li>BP</li>
				<li>Heart Rate</li>
				<li>Temperature</li>
				<li>Blood Oxygen Saturation</li>
				<li>Height</li>
				<li>Weight</li>
				<li>BMI</li>
				<li>Health Score</li>
				<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
				<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
				<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
				</ul>
				</div>  <!--col-xs-12-->
				<div class="pay col-xs-12" onclick="show4()">
				<input type="submit" id="submit" class="form-continue" value="PAY">
				</div>
				</div>
				</form>
				
				
				<div class="col-xs-12" id="subscrib4" >
				You Have Already Subscribed The Platinum Package from 01-01-2017 to 01-01-2018.
				</div>
				<div class="clr"> </div>
				</div> <!--packages-->
				   
						
				 </div>
				<?php
			}
			else if($Package == 'Gold' && $Response == 'Success')
			{
				?>
				<div class="col-xs-12 text-center subscrib-div" style="display: block;" >
			You Have Already Subscribed The Gold Package from <?php echo $result['SubscriptionDate']; ?> to <?php echo $result['ExpiryDate'];?>.
			</div>
				 <div class="col-xs-12">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=1000.00&Amount=1000.00&Package=Basic">
			<div class="col-xs-12"  id="pack1">
			<div class="pack-header col-xs-12">Basic Package - <span class="price-size"> 1000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Hb | ESR | Blood Sugar ( Random) | Lipid Profile | ECG 
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			</div>
			
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			
			</div>  <!--col-xs-12-->
			
			<div class="pay col-xs-12" onclick="show1()">
			
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			<div class="col-xs-12" id="subscrib1" >
			You Have Already Subscribed The Basic Package from 01-01-2017 to 01-01-2018.
			</div>
			
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=2500.00&Amount=2500.00&Package=Silver">
			<div class="col-xs-12"  id="pack2">
			<div class="pack-header col-xs-12">Silver Package - <span class="price-size"> 2500INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | ECG </div>
			<br>
			<br>
			<br>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
		
			<div class="pay col-xs-12" onclick="show2()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div> <!--pack2-->
			</form>
			
			<div class="col-xs-12" id="subscrib2" >
			You Have Already Subscribed The Silver Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<div class="col-xs-12"  id="pack3">
			<div class="pack-header col-xs-12">Gold Package - <span class="price-size"> 4000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBAIC | Thyroid profile | Lipid profile | Urine Routine | Serum Calcium | Vit B12 | Vit D | ECG</div>
			<br>
			<br>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			
			</div>
			
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=8000.00&Amount=8000.00&Package=Platinum"> 
			<div class="col-xs-12"  id="pack4">
			<div class="pack-header col-xs-12">Platinum Package - <span class="price-size"> 8000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test">  Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | Urine Routine | Serum Calcium | Vit B12 | Vit D | Thyroid profile | ECG | Treadmill test or 2D Echo</div>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			<div class="pay col-xs-12" onclick="show4()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			
			<div class="col-xs-12" id="subscrib4" >
			You Have Already Subscribed The Platinum Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
               
                    
             </div>
			
				<?php
			}
			else
			{
				?>
					
			<div class="col-xs-12 text-center subscrib-div" style="display: block;" >
			You Have Already Subscribed The Platinum Package from <?php echo $result['SubscriptionDate']; ?> to <?php echo $result['ExpiryDate'];?>.
			</div>
				 <div class="col-xs-12">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=1000.00&Amount=1000.00&Package=Basic">
			<div class="col-xs-12"  id="pack1">
			<div class="pack-header col-xs-12">Basic Package - <span class="price-size"> 1000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Hb | ESR | Blood Sugar ( Random) | Lipid Profile | ECG 
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			</div>
			
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			
			</div>  <!--col-xs-12-->
			
			<div class="pay col-xs-12" onclick="show1()">
			
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			<div class="col-xs-12" id="subscrib1" >
			You Have Already Subscribed The Basic Package from 01-01-2017 to 01-01-2018.
			</div>
			
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=2500.00&Amount=2500.00&Package=Silver">
			<div class="col-xs-12"  id="pack2">
			<div class="pack-header col-xs-12">Silver Package - <span class="price-size"> 2500INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | ECG </div>
			<br>
			<br>
			<br>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
		
			<div class="pay col-xs-12" onclick="show2()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div> <!--pack2-->
			</form>
			
			<div class="col-xs-12" id="subscrib2" >
			You Have Already Subscribed The Silver Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=4000.00&Amount=4000.00&Package=Gold">
			<div class="col-xs-12"  id="pack3">
			<div class="pack-header col-xs-12">Gold Package - <span class="price-size"> 4000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBAIC | Thyroid profile | Lipid profile | Urine Routine | Serum Calcium | Vit B12 | Vit D | ECG</div>
			<br>
			<br>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			<div class="pay col-xs-12" onclick="show3()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			<div class="col-xs-12" id="subscrib3" >
			You Have Already Subscribed The Gold Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<div class="col-xs-12"  id="pack4">
			<div class="pack-header col-xs-12">Platinum Package - <span class="price-size"> 8000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test">  Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | Urine Routine | Serum Calcium | Vit B12 | Vit D | Thyroid profile | ECG | Treadmill test or 2D Echo</div>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			</div>
		
			<div class="clr"> </div>
			</div> <!--packages-->
               
                    
             </div>
			<?php
			}
		}
		else
		{
			?>
			 <div class="col-xs-12">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=1000.00&Amount=1000.00&Package=Basic">
			<div class="col-xs-12"  id="pack1">
			<div class="pack-header col-xs-12">Basic Package - <span class="price-size"> 1000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Hb | ESR | Blood Sugar ( Random) | Lipid Profile | ECG 
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			</div>
			
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			
			</div>  <!--col-xs-12-->
			
			<div class="pay col-xs-12" onclick="show1()">
			
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			<div class="col-xs-12" id="subscrib1" >
			You Have Already Subscribed The Basic Package from 01-01-2017 to 01-01-2018.
			</div>
			
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=2500.00&Amount=2500.00&Package=Silver">
			<div class="col-xs-12"  id="pack2">
			<div class="pack-header col-xs-12">Silver Package - <span class="price-size"> 2500INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | ECG </div>
			<br>
			<br>
			<br>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
		
			<div class="pay col-xs-12" onclick="show2()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div> <!--pack2-->
			</form>
			
			<div class="col-xs-12" id="subscrib2" >
			You Have Already Subscribed The Silver Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=4000.00&Amount=4000.00&Package=Gold">
			<div class="col-xs-12"  id="pack3">
			<div class="pack-header col-xs-12">Gold Package - <span class="price-size"> 4000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test"> Complete blood count | Blood sugar ( fasting + PP) | HBAIC | Thyroid profile | Lipid profile | Urine Routine | Serum Calcium | Vit B12 | Vit D | ECG</div>
			<br>
			<br>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			<div class="pay col-xs-12" onclick="show3()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			<div class="col-xs-12" id="subscrib3" >
			You Have Already Subscribed The Gold Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
			
			
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 package">
			<form method="post" action="payment/index.php?InvoiceAmount=8000.00&Amount=8000.00&Package=Platinum"> 
			<div class="col-xs-12"  id="pack4">
			<div class="pack-header col-xs-12">Platinum Package - <span class="price-size"> 8000INR </span></div> <!--pack-header-->
			<div class="col-xs-12 package-text">
			<div class="pack-test">  Complete blood count | Blood sugar ( fasting + PP) | HBA1C | Lipid profile | Liver function test | Kidney function test | Urine Routine | Serum Calcium | Vit B12 | Vit D | Thyroid profile | ECG | Treadmill test or 2D Echo</div>
			<p >ADDED CYGEN BENEFITS:</p>
			<ul>
			<li>Cygen Registration Records</li>
			<li>Online Digital Medical Records</li>
			<li>BP</li>
			<li>Heart Rate</li>
			<li>Temperature</li>
			<li>Blood Oxygen Saturation</li>
			<li>Height</li>
			<li>Weight</li>
			<li>BMI</li>
			<li>Health Score</li>
			<li>Medicine , Vaccination And Doctor's Appointment Reminder</li>
			<li>Cygen Disease Prediction For Different Chronic Disease (Hypertension , Diabetes , Cardiovascular Diseases , etc)</li>
			<li>Preventive Measures (Including Customized Daily Dietary And Health Tips)</li>
			</ul>
			</div>  <!--col-xs-12-->
			<div class="pay col-xs-12" onclick="show4()">
			<input type="submit" id="submit" class="form-continue" value="PAY">
			</div>
			</div>
			</form>
			
			
			<div class="col-xs-12" id="subscrib4" >
			You Have Already Subscribed The Platinum Package from 01-01-2017 to 01-01-2018.
			</div>
			<div class="clr"> </div>
			</div> <!--packages-->
               
                    
             </div>
			
			<?php
		}
			?>
			 </div>
		</div>

<?php include ('footer_user.php') ?>