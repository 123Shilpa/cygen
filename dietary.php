 <?php

include ('header_user.php');
include ('left_sidebar_user.php');

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
    $LacVeg = $_POST['LacVeg'];
    $OvoVeg = $_POST['OvoVeg'];
    $RawVegan = $_POST['RawVegan'];
    $FlexSemiVeg = $_POST['FlexSemiVeg'];
    $Fruitarian = $_POST['Fruitarian'];
    $Pescatarian = $_POST['Pescatarian'];
    $Chicken = $_POST['Chicken'];
    $Mutton = $_POST['Mutton'];
    $Pork = $_POST['Pork'];
    $DuckSeafood = $_POST['DuckSeafood'];
    $Burgers = $_POST['Burgers'];
    $CheeseFat = $_POST['CheeseFat'];
	
	$HomoMilk = $_POST['HomoMilk'];
    $YogMilkFat = $_POST['YogMilkFat'];
    $IceCream = $_POST['IceCream'];
    $FriedFoods = $_POST['FriedFoods'];
    $EggConAvg = $_POST['EggConAvg'];
    $PoultryFish = $_POST['PoultryFish'];
    $MilkPer = $_POST['MilkPer'];
    $LowFat = $_POST['LowFat'];
    $YogurtMilk = $_POST['YogurtMilk'];
    $Margarine = $_POST['Margarine'];
    $PastriesCakes = $_POST['PastriesCakes'];
    $PremiumIceCream = $_POST['PremiumIceCream'];
	
	$Donuts = $_POST['Donuts'];
	$Cookies = $_POST['Cookies'];
	$HighFat = $_POST['HighFat'];
	$RichDesserts = $_POST['RichDesserts'];
	$PotatoChips = $_POST['PotatoChips'];
	$Nachos = $_POST['Nachos'];
	$FriedSnack = $_POST['FriedSnack'];
	$Cheese = $_POST['Cheese'];
	$ChocoBars = $_POST['ChocoBars'];
	$SoftDrink = $_POST['SoftDrink'];
	$HardCandy = $_POST['HardCandy'];
	$GummyBear = $_POST['GummyBear'];
	$Tomato = $_POST['Tomato'];
	$LargeStack = $_POST['LargeStack'];
	$LargeCauliflower = $_POST['LargeCauliflower'];
	$SmallSalad = $_POST['SmallSalad'];
	$OzVegJuice = $_POST['OzVegJuice'];
	$OzVegSoup = $_POST['OzVegSoup'];
	$PastaMeal = $_POST['PastaMeal'];
	$HalfCup = $_POST['HalfCup'];
	$SliceBread = $_POST['SliceBread'];
	$HalfBagel = $_POST['HalfBagel'];
	$HalfEngMuffin = $_POST['HalfEngMuffin'];
	$QuarterCup = $_POST['QuarterCup'];
	$LowFatHigh = $_POST['LowFatHigh'];
	$ServingFruit = $_POST['ServingFruit'];
	$DietRegular = $_POST['DietRegular'];
	$CornChips = $_POST['CornChips'];
	$Licorice = $_POST['Licorice'];
	$FruitIce = $_POST['FruitIce'];
	
    $Status = '0';

    // validate input
    // update data
    //if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $sql = "INSERT INTO dietary  (PatientId , LacVeg ,OvoVeg ,RawVegan , 
	FlexSemiVeg ,Fruitarian ,Pescatarian, Chicken ,Mutton , Pork , 
	DuckSeafood, Burgers, CheeseFat, HomoMilk ,YogMilkFat ,IceCream , 
	FriedFoods , EggConAvg , PoultryFish, MilkPer ,LowFat , YogurtMilk , 
	Margarine, PastriesCakes, PremiumIceCream, Donuts, Cookies,HighFat,
	RichDesserts,PotatoChips,Nachos,FriedSnack,Cheese,ChocoBars,SoftDrink,
	HardCandy,GummyBear,Tomato,LargeStack,LargeCauliflower,SmallSalad,
	OzVegJuice,OzVegSoup,PastaMeal,HalfCup,SliceBread,HalfBagel,
	HalfEngMuffin,QuarterCup,LowFatHigh,ServingFruit,DietRegular,
	CornChips,Licorice,FruitIce,Status) 
	VALUES (?,?,?,?,?,?,?,?,?,?,
			?,?,?,?,?,?,?,?,?,?,
			?,?,?,?,?,?,?,?,?,?,
			?,?,?,?,?,?,?,?,?,?,
			?,?,?,?,?,?,?,?,?,?,
			?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'], $LacVeg, $OvoVeg, $RawVegan,
	$FlexSemiVeg, $Fruitarian, $Pescatarian, $Chicken,$Mutton, $Pork, 
	$DuckSeafood, $Burgers, $CheeseFat, $HomoMilk, $YogMilkFat, $IceCream,
	$FriedFoods, $EggConAvg, $PoultryFish, $MilkPer,$LowFat, $YogurtMilk,
	$Margarine, $PastriesCakes, $PremiumIceCream, $Donuts, $Cookies,$HighFat,
	$RichDesserts,$PotatoChips,$Nachos,$FriedSnack,$Cheese,$ChocoBars,$SoftDrink,
	$HardCandy,$GummyBear,$Tomato,$LargeStack,$LargeCauliflower,$SmallSalad,
	$OzVegJuice,$OzVegSoup,$PastaMeal,$HalfCup,$SliceBread,$HalfBagel,
	$HalfEngMuffin,$QuarterCup,$LowFatHigh,$ServingFruit,$DietRegular,
	$CornChips,$Licorice,$FruitIce,
	$Status));
		
	$sql = "UPDATE profilereport set DietaryInformation = ? WHERE PatientId=?";
	$q = $pdo->prepare($sql);
	$q->execute(array(7, $_SESSION['PatientId']));
	
	Database::disconnect();
    echo "<script type = 'text/javascript'> alert('Successfully inserted'); window.location = 'vitamin.php'; </script>";
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
	
	.Sub-head{ margin-top:40px;}
</style>
<?php
        $squery = "SELECT * FROM dietary where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>


<!-- page content -->


<div class="right_col" role="main">
    <form class="form-horizontal" enctype="multipart/form-data" name="dietary"  method="post" >
        <div class="profile info-head">
            <div class="col-sm-12">
			<div class="row pull-right">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<input type="submit" name="submit"  class="form-continue"  value="Save &amp; Continue">

                    </div>
                </div>
                <h3> Dietary information  </h3>
               
                <div>
                    <div class="Sub-head">Vegetarian </div>
                    <div class="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">


                            <div class="cleck02"><input class="speciality questionary-radio " name="LacVeg" value="Yes" id="chkbox" type="checkbox"> </div>
                            <div class="check01">Lacto-vegetarian  </div>      

                            <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02"><input class="speciality questionary-radio " name="OvoVeg" value="Yes" id="chkbox" type="checkbox"> </div>
                            <div class="check01">Ovo-vegetarian    </div>   

                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02"><input class="speciality questionary-radio " name="RawVegan" value="Yes" id="chkbox" type="checkbox"> </div>
                            <div class="check01">Raw Vegan     </div>   

                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02"><input class="speciality questionary-radio " name="FlexSemiVeg" value="Yes" id="chkbox" type="checkbox"> </div>
                            <div class="check01">Flexitarian / semi vegetarian   </div>   

                            <div class="clearfix"></div>
                        </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">

                            <div class="cleck02"><input class="speciality questionary-radio " name="Fruitarian" value="Yes" id="chkbox" type="checkbox"> </div>
                            <div class="check01">Fruitarian     </div>   

                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 questionary-box">
						

                            <div class="cleck02"><input class="speciality questionary-radio " name="Pescatarian" value="Yes" id="chkbox" type="checkbox"> </div>
                            <div class="check01">pescatarian   </div>   

                            <div class="clearfix"></div>
                        </div>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<span class="veg-error" style="color:red;display:none">Please select any option</span>
</div>                       
					   <div class="clearfix"></div></div>
                        
                </div>
                
                  <div class="Sub-head">Non - Vegetarian </div>

<div class="questionary-box">

 <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
<div class="cleck02"> <input name="Chicken_box" class="questionary-radio non-veg chkBev" value="Chicken" type="checkbox"> </div> <div class="check01"> Chicken </div>
 <span id="ChickenSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">


 <select class="form-control Chicken"  id="slider_select_dep" name="Chicken">
                                    <option value="0">Option</option>
                                    <option value="1-2 times per week">1-2 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="1-2 Monthly">1-2 Monthly</option>
                                    <option value="2-3 Monthly">2-3 Monthly</option>
 </select>
 </span>
                                                
 </div>

 
                             
 <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
<div class="cleck02"> <input class="questionary-radio alcoholicStatusBeverages chkBev" name="Mutton_box" value="Mutton" type="checkbox"> </div> <div class="check01"> Mutton </div>
 <span id="MuttonSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
						<select class="form-control Mutton" id="slider_select_dep" name="Mutton">
                                    <option value="0">Option</option>
                                    <option value="1-2 times per week">1-2 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="1-2 Monthly">1-2 Monthly</option>
                                    <option value="2-3 Monthly">2-3 Monthly</option>
						</select>                                 
</span>
 </div>


<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 father">
<div class="cleck02"> <input class="questionary-radio alcoholicStatusBeverages chkBev" name="Pork_box" value="Pork" type="checkbox"> </div><div class="check01"> Pork </div>
<span id="PorkSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<select class="form-control Pork" id="slider_select_dep" name="Pork">
                                    <option value="0">Option</option>
                                    <option value="1-2 times per week">1-2 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="1-2 Monthly">1-2 Monthly</option>
                                    <option value="2-3 Monthly">2-3 Monthly</option>
 </select>
</span>
</div>

                   

<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 father">
<div class="cleck02"> <input class="questionary-radio alcoholicStatusBeverages chkBev" name="DuckSeafood_box" value="Duck & Seafood" type="checkbox"> </div> <div class="check01"> Duck & Seafood </div>
<span id="DuckSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<select class="form-control Duck&Seafood" id="slider_select_dep" name="DuckSeafood">
                                    <option value="0">Option</option>
                                    <option value="1-2 times per week">1-2 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="1-2 Monthly">1-2 Monthly</option>
                                    <option value="2-3 Monthly">2-3 Monthly</option>
 </select>
</span>
</div>

                   
<div>
<div class="clearfix"></div>
</div>
</div>
                                        
                                        
<div>
                    <div class="Sub-head">Burgers </div>    
                    <select class="form-control burger" id="slider_select_dep" name="Burgers">
                                    <option value="">Option</option>
                                    <option value="Daily">	Daily </option>
                                    <option value="Once per week">   Once per week </option>
                                    <option value="1-2 times per week">   1-2 times per week </option>
                                    <option value="2-3 times per month">	2-3 times per month </option>
                                    <option value="Less than 2 times per month">  Less than 2 times per month </option>
                                    <option value="Never or once per month">	Never or once per month  </option>
 </select>                     
</div>
<span class="burger-error" style="display:none;color:red">Please select any value </span>

<div>

<div class="Sub-head">How often, on average, do you consume any of the following foods? </div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Cheese that are more than 20% milk fat  </div>
 <select class="form-control" id="slider_select_dep" name="CheeseFat">
                                    <option value="">Option</option>
                                    <option value="Daily">	Daily </option>
                                    <option value="Once per week">   Once per week </option>
                                    <option value="1-2 times per week">   1-2 times per week </option>
                                    <option value="2-3 times per month">	2-3 times per month </option>
                                    <option value="Less than 2 times per month">  Less than 2 times per month </option>
                                    <option value="Never or once per month">	Never or once per month  </option>
 </select>             
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Homogenized milk  </div>
 <select class="form-control" id="slider_select_dep" name="HomoMilk">
                                    <option value="">Option</option>
                                    <option value="Daily">	Daily </option>
                                    <option value="Once per week">   Once per week </option>
                                    <option value="1-2 times per week">   1-2 times per week </option>
                                    <option value="2-3 times per month">	2-3 times per month </option>
                                    <option value="Less than 2 times per month">  Less than 2 times per month </option>
                                    <option value="Never or once per month">	Never or once per month  </option>
 </select>             
</div>
</div>


<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Yogurt that is more than 1% milk fat   </div>
 <select class="form-control" id="slider_select_dep" name="YogMilkFat">
                                    <option value="">Option</option>
                                    <option value="Daily">	Daily </option>
                                    <option value="Once per week">   Once per week </option>
                                    <option value="1-2 times per week">   1-2 times per week </option>
                                    <option value="2-3 times per month">	2-3 times per month </option>
                                    <option value="Less than 2 times per month">  Less than 2 times per month </option>
                                    <option value="Never or once per month">	Never or once per month  </option>
 </select>             
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Ice cream</div>
 <select class="form-control" id="slider_select_dep" name="IceCream">
                                    <option value="">Option</option>
                                    <option value="Daily">	Daily </option>
                                    <option value="Once per week">   Once per week </option>
                                    <option value="1-2 times per week">   1-2 times per week </option>
                                    <option value="2-3 times per month">	2-3 times per month </option>
                                    <option value="Less than 2 times per month">  Less than 2 times per month </option>
                                    <option value="Never or once per month">	Never or once per month  </option>
 </select>             
</div>
</div>

<div class="row">




<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Fried foods</div>
 <select class="form-control" id="slider_select_dep" name="FriedFoods">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week  </option>
                                    <option value="5-6 times per week">   5-6 times per week  </option>
                                    <option value="2-4 times per week">   2-4 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
                                     
 </select>             
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Egg consumption on average</div>
 <select class="form-control" id="slider_select_dep" name="EggConAvg">
                                    <option value="">Option</option>
                                    <option value="12 or more eggs per week">	12 or more eggs per week  </option>
                                    <option value="8-11 eggs per week">   8-11 eggs per week  </option>
                                    <option value="5-7 eggs per week">   5-7 eggs per week  </option>
                                    <option value="2-4 eggs per week">	2-4 eggs per week  </option>
                                    <option value="Less than 2 eggs per week"> 	Less than 2 eggs per week  </option>
                                    
 </select>             
</div>

</div>


</div>





<div class="clearfix"></div>

<div>
<div class="Sub-head">Do you choose poultry or fish in place of red meat, pork or fried food in most situations? </div>
<div class="questionary-opt">
<div class="select-items specialty_radio">
<div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
<input class="speciality questionary-radio" name="PoultryFish" value="Yes" id="chkYes" type="radio"> Yes
</div>

</div>
</div>
<div class="specialty_radio">
<div>
<input class="speciality questionary-radio" name="PoultryFish" value="No" type="radio"> No </div>
</div>
</div>
</div>

<div class="clearfix"></div>

<div>

<div class="Sub-head">How often on average, do you consume any of the following?</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">2% milk  </div>
 <select class="form-control" id="slider_select_dep" name="MilkPer">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Low fat sour cream</div>
 <select class="form-control" id="slider_select_dep" name="LowFat">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>

</div>

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Yogurt that is 2% milk fat </div>
 <select class="form-control" id="slider_select_dep" name="YogurtMilk">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Margarine</div>
 <select class="form-control" id="slider_select_dep" name="Margarine">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>

</div>

</div>

<div class="clearfix"></div>

<div>

<div class="Sub-head">How often on average do you consume any of the following foods? </div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Pastries such as cakes, croissants </div>
 <select class="form-control" id="slider_select_dep" name="PastriesCakes">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Premium ice cream </div>
 <select class="form-control" id="slider_select_dep" name="PremiumIceCream">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>



</div>


<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Donuts </div>
 <select class="form-control" id="slider_select_dep" name="Donuts">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Cookies (3 or more)  </div>
 <select class="form-control" id="slider_select_dep" name="Cookies">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>




</div>



<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">High fat muffins </div>
 <select class="form-control" id="slider_select_dep" name="HighFat">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Rich desserts (ex, cheesecake, brownies)  </div>
 <select class="form-control" id="slider_select_dep" name="RichDesserts">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>
</div>

<div class="clearfix"></div>

<div>

<div class="Sub-head">How often on average do you consume any of the following snack foods?</div>

<div class="row"><div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Potato chips </div>
 <select class="form-control" id="slider_select_dep" name="PotatoChips">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">   4-6 times per week  </option>
                                    <option value="2-3 times per week">   2-3 times per week  </option>
                                    <option value="0-1 time per week">	0-1 time per week  </option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Nachos  </div>
 <select class="form-control" id="slider_select_dep" name="Nachos">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">4-6 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="0-1 time per week">0-1 time per week</option>
 </select>             
</div>



</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Any type of fried snack  </div>
 <select class="form-control" id="slider_select_dep" name="FriedSnack">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">7 or more times per week </option>
                                    <option value="4-6 times per week">4-6 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="0-1 time per week">0-1 time per week</option>
 </select>             
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Cheese  </div>
 <select class="form-control" id="slider_select_dep" name="Cheese">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">7 or more times per week </option>
                                    <option value="4-6 times per week">4-6 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="0-1 time per week">0-1 time per week</option>
 </select>             
</div>

</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Chocolate bars  </div>
 <select class="form-control" id="slider_select_dep" name="ChocoBars">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">4-6 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="0-1 time per week">0-1 time per week</option>
 </select>             
</div>
</div>
</div>

<div class="clearfix"></div>

<div>

<div class="Sub-head">How often on average do you consume any of the following snack or drinks? </div>
<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Regular soft drinks   </div>
 <select class="form-control" id="slider_select_dep" name="SoftDrink">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">7 or more times per week </option>
                                    <option value="4-6 times per week">4-6 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="0-1 time per week">0-1 time per week</option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01"> Hard candy </div>
 <select class="form-control" id="slider_select_dep" name="HardCandy">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">4-6 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="0-1 time per week">0-1 time per week</option>
 </select>             
</div>
</div>

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Gummy bears   </div>
 <select class="form-control" id="slider_select_dep" name="GummyBear">
                                    <option value="">Option</option>
                                    <option value="7 or more times per week">	7 or more times per week </option>
                                    <option value="4-6 times per week">4-6 times per week</option>
                                    <option value="2-3 times per week">2-3 times per week</option>
                                    <option value="0-1 time per week">0-1 time per week</option>
 </select>             
</div>
</div>

</div>

<div class="clearfix"></div>

<div>

<div class="Sub-head">	On an average, how many servings per day do you consume of garden type vegetables (ex, carrots, tomatoes, broccoli, cauliflower, peppers, romaine lettuce spinach, collard greens, kale?  </div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">1 tomato  </div>
 <select class="form-control" id="slider_select_dep" name="Tomato">
                                    <option value="">Option</option>
									<option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">1 large stack of broccoli 8 oz of food cooked in tomato sauce </div>
 <select class="form-control" id="slider_select_dep" name="LargeStack">
                                    <option value="">Option</option>
									<option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">1 large cauliflower floret  </div>
 <select class="form-control" id="slider_select_dep" name="LargeCauliflower">
                                    <option value="">Option</option>
                                    <option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">1 small garden salad </div>
 <select class="form-control" id="slider_select_dep" name="SmallSalad">
                                    <option value="">Option</option>
									<option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">8 oz of vegetable juice  </div>
 <select class="form-control" id="slider_select_dep" name="OzVegJuice">
                                    <option value="">Option</option>
                                    <option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">8 oz of vegetables soup </div>
 <select class="form-control" id="slider_select_dep" name="OzVegSoup">
                                    <option value="">Option</option>
                                    <option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>
</div>






</div>


<div class="clearfix"></div>

<div>


<div class="Sub-head">	On an average, how many servings per day do you consume of any of the following?</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">pasta, rice, beans, peas, corn, barley, oatmeal?  </div>
 <select class="form-control" id="slider_select_dep" name="PastaMeal">
                                    <option value="">Option</option>
									<option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Half cup of pasta, rice, beans, peas, corn, etc (before cooking)</div>
 <select class="form-control" id="slider_select_dep" name="HalfCup">
                                    <option value="">Option</option>
									<option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>




</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">1 slice of bread  </div>
 <select class="form-control" id="slider_select_dep" name="SliceBread">
                                    <option value="">Option</option>
									<option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Half bagel   </div>
 <select class="form-control" id="slider_select_dep" name="HalfBagel">
                                    <option value="">Option</option>
                                    <option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>





</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Half English muffin  </div>
 <select class="form-control" id="slider_select_dep" name="HalfEngMuffin">
                                    <option value="">Option</option>
									<option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Quarter cup of most cereal  </div>
 <select class="form-control" id="slider_select_dep" name="QuarterCup">
                                    <option value="">Option</option>
                                    <option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>             
</div>






</div>


<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Low fat high fibre muffin  </div>
 <select class="form-control" id="slider_select_dep" name="LowFatHigh">
                                    <option value="">Option</option>
                                    <option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day   </option>
 </select>             
</div>
</div>



</div>
<div class="clearfix"></div>
<div>
<div class="Sub-head">	On an average, how many servings per day do you consume of fruits?1serving= 1 whole fruit (ex, apple, orange, peach)= 1cup chopped fruit (ex, fruit salad)= 8oz fruit juice?  </div>    
<select class="form-control" id="slider_select_dep" name="ServingFruit">
                                    <option value="">Option</option>
                                    <option value="5 or more servings per day">	5 or more servings per day</option>
                                    <option value="3-4 servings per day">3-4 servings per day</option>
                                    <option value="1-2 servings per day">1-2 servings per day</option>
                                    <option value="0 servings per day">	0 servings per day</option>
 </select>                     
</div>
<div class="clearfix"></div>

<div>


<div class="Sub-head">	How often, on an average, do you consume any foods or drinks that are highly processed and contain preservative, artificial flavours, colours and related chemicals? </div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Diet and regular soft drinks, sugary fruit drinks   </div>
 <select class="form-control" id="slider_select_dep" name="DietRegular">
                                    <option value="">Option</option>
									<option value="3 or more per day">	3 or more per day</option>
                                    <option value="1-2 per day">1-2 per day</option>
                                    <option value="2-3 per week">2-3 per week</option>
                                    <option value="Once per week or less">Once per week or less</option>
 </select>             
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Potato chips,nachos, cheesies, corn chips etc.</div>
 <select class="form-control" id="slider_select_dep" name="CornChips">
                                    <option value="">Option</option>
									<option value="3 or more per day">3 or more per day</option>
                                    <option value="1-2 per day">1-2 per day</option>
                                    <option value="2-3 per week">2-3 per week</option>
                                    <option value="Once per week or less">Once per week or less</option>
 </select>             
</div>

</div>

<div class="row">


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Licorice, jujubes, gummy bears, gelatins etc.    </div>
 <select class="form-control" id="slider_select_dep" name="Licorice">
                                    <option value="">Option</option>
                                    <option value="3 or more per day">3 or more per day  </option>
                                    <option value="1-2 per day">1-2 per day</option>
                                    <option value="2-3 per week">2-3 per week</option>
                                    <option value="Once per week or less">Once per week or less</option>
 </select>             
</div>



<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="Sub-head01">Ice cream, fruit-ices, sorbets etc.   </div>
 <select class="form-control" id="slider_select_dep" name="FruitIce">
                                    <option value="">Option</option>
									<option value="3 or more per day">3 or more per day</option>
                                    <option value="1-2 per day">1-2 per day</option>
                                    <option value="2-3 per week">2-3 per week</option>
                                    <option value="Once per week or less">Once per week or less</option>
 </select>             
</div>

</div>






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
</div>
<div class="clearfix"></div>
 <?php
        } else {// view
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
<h3 class="person-info-title">Dietary Information?</h3>
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
	<div class="Sub-head">How Often, On Average, Do You Consume Any Of The Following Foods? </div>
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
	<div class="Sub-head">How Often On Average, Do You Consume Any Of The Following? </div>
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
	<div class="Sub-head col-lg-6 col-md-6 col-sm-6 col-xs-12">On An Average, How Many Servings Per Day Do You Consume Of Fruits?1serving= 1 Whole Fruit (Ex, Apple, Orange, Peach)= 1cup Chopped Fruit (Ex, Fruit Salad)= 8oz Fruit Juice?</div>
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
<?php
    }
}
?>

<script type="text/javascript">

    $(document).ready(function () {
        $('.chkBev').click(function () {
            $("#ChickenSpan").hide();
            $("#MuttonSpan").hide();
            $("#PorkSpan").hide();
			$("#DuckSpan").hide();
            $('.chkBev:checked').each(function () {
                var radioValue = $(this).val();
                if (radioValue === 'Chicken') {
                    $("#ChickenSpan").show();
                }
                if (radioValue === 'Mutton') {
                    $("#MuttonSpan").show();
                }
                if (radioValue === 'Pork') {
                    $("#PorkSpan").show();
                }
				if (radioValue === 'Duck & Seafood') {
                    $("#DuckSpan").show();
                }
            });
        });
		
		
		
		

	
<!--		How often on average do you consume any of the following: Potato chips   starts -->
	
		

		
		
		


<!--		How often on average do you consume any of the following:Pastries such as cakes, croissants, turnovers  starts -->

        $('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="Premium ice cream") {
                $("#PremiumIceCreamSpan").show();
            } else {
                $("#PremiumIceCreamSpan").hide();
            }
        });
		$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="Donuts") {
                $("#DonutsSpan").show();
            } else {
                $("#DonutsSpan").hide();
            }
        });
		$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="Cookies (3 or more)") {
                $("#CookiesSpan").show();
            } else {
                $("#CookiesSpan").hide();
            }
        });
		$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="High fat muffins") {
                $("#HighFatMuffinsSpan").show();
            } else {
                $("#HighFatMuffinsSpan").hide();
            }
        });
		
			$('.consume2').click(function () {
            var radioValue = $("input[name='Consume2']:checked").val();
            if (radioValue==="Rich desserts (ex, cheesecake, brownies)") {
                $("#RichDessertsSpan").show();
            } else {
                $("#RichDessertsSpan").hide();
            }
        });
		
		
		<!--	End -->

		    $('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="2% milk") {
                $("#ConsumemilkSpan").show();
            } else {
                $("#ConsumemilkSpan").hide();
            }
        });
		$('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="Low fat sour cream") {
                $("#LowfatSpan").show();
            } else {
                $("#LowfatSpan").hide();
            }
        });
		$('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="Yogurt that is 2% milk fat") {
                $("#YogurtSpan").show();
            } else {
                $("#YogurtSpan").hide();
            }
        });
		$('.consumemilk').click(function () {
            var radioValue = $("input[name='Consume']:checked").val();
            if (radioValue==="Margarine") {
                $("#MargarineSpan").show();
            } else {
                $("#MargarineSpan").hide();
            }
        });
		
<!--		How often on average do you consume any of the following:Pastries such as cakes, croissants, turnovers  end -->


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
 <script>
	$(document).ready(function(){
		$("input[type=submit]").click(function(){
			var isvalid=true;
		if($("#ChickenSpan").is(':visible'))
			{
				if($("select[name=Chicken]").val()==0)
				{
					alert("Please select Chicken");
					isvalid=false;
				}
			}
			if($("#MuttonSpan").is(':visible'))
			{
				if($("select[name=Mutton]").val()==0)
				{
					alert("Please select Mutton");
					isvalid=false;
				}
			}
			if($("#PorkSpan").is(':visible'))
			{
				if($("select[name=Pork]").val()==0)
				{
					alert("Please select Pork");
					isvalid=false;
				}
			}
			if($("#DuckSpan").is(':visible'))
			{
				if($("select[name=DuckSeafood]").val()==0)
				{
					alert("Please select DuckSeafood");
					isvalid=false;
				}
			}
			if($("select[name=Burgers]").val()=="")
			{
				alert("Please select Burgers");
				isvalid=false;
			}
			if($("select[name=CheeseFat]").val()=="")
			{
				alert("Please select CheeseFat");
				isvalid=false;
				
			}
			if($("select[name=HomoMilk]").val()=="")
			{
				alert("Please select Homogenized Milk");
				isvalid=false;
			}
			if($("select[name=YogMilkFat]").val()=="")
			{
				alert("Please select Yogurt ");
				isvalid=false;
			}
			
			if($("select[name=IceCream]").val()=="")
			{
				alert("Please select IceCream ");
				isvalid=false;
			}
			
			if($("select[name=FriedFoods]").val()=="")
			{
				alert("Please select FriedFoods ");
				isvalid=false;
			}
			
			if($("select[name=EggConAvg]").val()=="")
			{
				alert("Please select Egg Consumption On Average ");
				isvalid=false;
			}
			if($("select[name=MilkPer]").val()=="")
			{
				alert("Please select Milk");
				isvalid=false;
			}
			if($("select[name=LowFat]").val()=="")
			{
				alert("Please select Low Fat Sour Cream");
				isvalid=false;
			}
			if($("select[name=YogurtMilk]").val()=="")
			{
				alert("Please select YogurtMilk");
				isvalid=false;
			}
			if($("select[name=Margarine]").val()=="")
			{
				alert("Please select Margarine");
				isvalid=false;
			}
			if($("select[name=PastriesCakes]").val()=="")
			{
				alert("Please select PastriesCakes");
				isvalid=false;
			}
			if($("select[name=PremiumIceCream]").val()=="")
			{
				alert("Please select PremiumIceCream");
				isvalid=false;
			}if($("select[name=Donuts]").val()=="")
			{
				alert("Please select Donuts");
				isvalid=false;
			}if($("select[name=Cookies]").val()=="")
			{
				alert("Please select Cookies");
				isvalid=false;
			}if($("select[name=HighFat]").val()=="")
			{
				alert("Please select HighFat");
				isvalid=false;
			}
			if($("select[name=RichDesserts]").val()=="")
			{
				alert("Please select RichDesserts");
				isvalid=false;
			}
			if($("select[name=PotatoChips]").val()=="")
			{
				alert("Please select PotatoChips");
				isvalid=false;
			}
			if($("select[name=Nachos]").val()=="")
			{
				alert("Please select Nachos");
				isvalid=false;
			}
			if($("select[name=FriedSnack]").val()=="")
			{
				alert("Please select FriedSnack");
				isvalid=false;
			}
			if($("select[name=Cheese]").val()=="")
			{
				alert("Please select Cheese");
				isvalid=false;
			}
			if($("select[name=ChocoBars]").val()=="")
			{
				alert("Please select ChocoBars");
				isvalid=false;
			}
			if($("select[name=SoftDrink]").val()=="")
			{
				alert("Please select SoftDrink");
				isvalid=false;
			}
			if($("select[name=HardCandy]").val()=="")
			{
				alert("Please select HardCandy");
				isvalid=false;
			}
			if($("select[name=GummyBear]").val()=="")
			{
				alert("Please select GummyBear");
				isvalid=false;
			}
			if($("select[name=Tomato]").val()=="")
			{
				alert("Please select Tomato");
				isvalid=false;
			}
			if($("select[name=LargeStack]").val()=="")
			{
				alert("Please select LargeStack");
				isvalid=false;
			}
			if($("select[name=LargeCauliflower]").val()=="")
			{
				alert("Please select LargeCauliflower");
				isvalid=false;
			}
			if($("select[name=SmallSalad]").val()=="")
			{
				alert("Please select SmallSalad");
				isvalid=false;
			}
			if($("select[name=OzVegJuice]").val()=="")
			{
				alert("Please select OzVegJuice");
				isvalid=false;
			}
			if($("select[name=OzVegSoup]").val()=="")
			{
				alert("Please select OzVegSoup");
				isvalid=false;
			}
			if($("select[name=PastaMeal]").val()=="")
			{
				alert("Please select PastaMeal");
				isvalid=false;
			}
			if($("select[name=HalfCup]").val()=="")
			{
				alert("Please select Half Cup Of Pasta, Rice, Beans, Peas, Corn, Etc (Before Cooking)");
				isvalid=false;
			}
			if($("select[name=SliceBread]").val()=="")
			{
				alert("Please select SliceBread");
				isvalid=false;
			}
			if($("select[name=HalfBagel]").val()=="")
			{
				alert("Please select HalfBagel");
				isvalid=false;
			}
			if($("select[name=HalfEngMuffin]").val()=="")
			{
				alert("Please select HalfEngMuffin");
				isvalid=false;
			}
			if($("select[name=QuarterCup]").val()=="")
			{
				alert("Please select QuarterCup");
				isvalid=false;
			}
			if($("select[name=LowFatHigh]").val()=="")
			{
				alert("Please select Low Fat High Fibre Muffin");
				isvalid=false;
			}
			if($("select[name=ServingFruit]").val()=="")
			{
				alert("Please select How Many Servings Per Day Do You Consume Of Fruits");
				isvalid=false;
			}
			if($("select[name=DietRegular]").val()=="")
			{
				alert("Please select Diet And Regular Soft Drinks, Sugary Fruit Drinks");
				isvalid=false;
			}
			if($("select[name=CornChips]").val()=="")
			{
				alert("Please select Potato Chips,Nachos, Cheesies, Corn Chips Etc.");
				isvalid=false;
			}
			if($("select[name=Licorice]").val()=="")
			{
				alert("Please select Licorice, Jujubes, Gummy Bears, Gelatins Etc.");
				isvalid=false;
			}
			if($("select[name=FruitIce]").val()=="")
			{
				alert("Please select Ice Cream, Fruit-Ices, Sorbets Etc.");
				isvalid=false;
			}
			if(!$("input[name=PoultryFish]").is(':checked'))
			{
				alert("Please select Poultry Or Fish In Place Of Red Meat, Pork Or Fried Food In Most Situations");
				isvalid=false;
			}
			
			return isvalid;
			});
		
		
		
		});
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

<?php include ('footer_user.php'); ?>