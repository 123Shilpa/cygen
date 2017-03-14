<?php
include ('header_user.php');
include ('left_sidebar_user.php');

$query = mysql_query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
$rowCount = mysql_num_rows($query);

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
 
	try{
		
    // keep track post values
    $FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Dob = $_POST['Dob'];
    $FamilyPhysician = $_POST['FamilyPhysician'];
    $PhysicianCity = $_POST['PhysicianCity'];
    $Address = $_POST['Address'];
    $PinCode = $_POST['PinCode'];
    $Country = $_POST['Country'];
    $State = $_POST['State'];
    $City = $_POST['City'];
    $Status = '0';
    $DateCreated = date('Y-m-d H:i:s');
		
	$img1_name = trim($_FILES['ProfileImage']['name']);
    $extension = getExtension($img1_name);
    $extension = $extension;
    $exten1 = $extension;
    if ($img1_name != "") {
        $image2 = "img_" . date("ymdhis") . "." . $exten1;
        $imagetmp1 = $_FILES['ProfileImage']['tmp_name'];
        $image_name_path1 = "image_uploads/$image2";
        move_uploaded_file($imagetmp1, $image_name_path1);
    } else {
        $image2 = "";
    }
    // update data
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // // keep track validation errors
	
		   
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO personal_details  (PatientId , FullName ,Email , Mobile ,Dob ,FamilyPhysician, PhysicianCity , Address , PinCode , Country , State , City, Status ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($_SESSION['PatientId'], $FullName, $Email, $Mobile, $Dob, $FamilyPhysician, $PhysicianCity, $Address, $PinCode, $Country, $State, $City, $Status));
		
		$sql = "UPDATE login_cygen set ProfileImage = ? WHERE Id = ?";
        $q = $pdo->prepare($sql);
		$_SESSION['ProfileImage']=$image2;
        $q->execute(array($image2, $_SESSION['PatientId']));

        Database::disconnect();
        echo "<script type = 'text/javascript'> alert('Successfully inserted'); window.location = 'demography.php'; </script>";
    
		  
	  }
	}
	
	
	catch(Exception $e){
		echo $e;
		 echo "<script type = 'text/javascript'> alert('Server Error'); </script>";
	
	  
	}
} 

?>
<style>
    .help-inline {
        color: #F44336 !important;
        font-weight: bold !important;
        margin: 10px 0 -10px 120px !important;
        float: left;
    }
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
    .custom-file-input:hover:before {

    }

    .file-blue:before {
        content: 'Browse File';

    }


    .health-questionary{
        background:#f9f9f9;
    }
    .questionary-title{
        font-size:28px;
        color:#267e8a;
        font-weight:600;
    }
    .medical-questionary > p {
        font-size: 13px;
        letter-spacing: 0.9px;
        line-height: 30px;
    }
    .medical-questionary h3{
        margin-top:40px;}
    .person-info{
        display:block !important}
    .info-head h3 {
        color: rgb(38, 126, 138);
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 30px;
        text-transform: uppercase;
    }
    .personal-detail {

    }

    .form-group.person-info .text {
        box-shadow:none;
        border:none;
        border-bottom:1px solid #ccc;
        background:none !important;
    }
    .form-control::-moz-placeholder {
        color: #017b8b;
        opacity: 0.69;
    }
    .questionary-box {
        margin-bottom: 17px;
    }
    .questionary-radio{
        display:inline-block !important;
        margin-top:8px !important;
        margin-right:4px !important}
    .questionary-opt {
        padding: 0 0 20px 14px;
    }
    .select-items > p {
        display: inline-block;
        width: 48%;
    }
    .form-continue {
        background: rgb(1, 123, 139) none repeat scroll 0 0 !important;
        border: medium none;
        border-radius: 2px;
        color: rgb(255, 255, 255);
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 0.5px;
        padding: 10px 20px;
    }
    .btn-form-cont {
        margin: 40px 0 30px;
    }
    .specialty_radio {
        float: left;
        width: 100%;
    }
    .pd0{
        padding:0px;}
    .row.questionary-box > p {
        color: rgb(38, 126, 138);
        font-size: 15px;
        font-weight: 600;
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
	#txtoptradioFamilyDoctorName-error,#txtoptradioFamilyCityName-error
	{
		color:red !important;
	}
    @media screen and (max-width: 480px) {
        .personal-detail {
            padding: 27px 25px 50px;
        }
    }
</style>
<!-- page content -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#country').on('change', function () {
            var countryID = $(this).val();
            if (countryID) {
                $.ajax({
                    type: 'POST',
                    url: 'countryData.php',
                    data: 'country_id=' + countryID,
                    success: function (html) {
                        $('#state').html(html);
                        $('#city').html('<option value="">Select state first</option>');
                    }
                });
            } else {
                $('#state').html('<option value="">Select country first</option>');
                $('#city').html('<option value="">Select state first</option>');
            }
        });

        $('#state').on('change', function () {
            var stateID = $(this).val();
            if (stateID) {
                $.ajax({
                    type: 'POST',
                    url: 'countryData.php',
                    data: 'state_id=' + stateID,
                    success: function (html) {
                        $('#city').html(html);
                    }
                });
            } else {
                $('#city').html('<option value="">Select state first</option>');
            }
        });
    });
</script>

<?php
$squery = "SELECT * FROM personal_details where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);
$rowcount = mysql_num_rows($result); {
    if ($rowcount == 0) {    //Allow edit
        ?>
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

                            <div class="profile-infobox" id="profileDiv">
                                <div class="person-info">
                                    <h3 class="person-info-title">Personal Information</h3>
                                    <h5><span>Name :</span>  <?php echo $_SESSION['FullName']; ?></h5>
                                    <h5><span>Contact Phone Number : </span> +91 <?php echo $_SESSION['Phone']; ?> </h5>
                                    <h5><span>Email id : </span> <?php echo $_SESSION['Email']; ?> </h5>
                                </div>

                                <Button type="submit" id="btnProfile" class="form-continue" style="margin-bottom: 50px ! important; margin-top: 40px;">Edit &amp; Continue</Button>                              
                            </div>
                            <div class="clearfix"></div>
                            <form class="form-horizontal" enctype="multipart/form-data" name="profile" id="profile" method="post">
                                <div class="medical-questionary" id="editProfileDiv">
                                    <div class="personal-info info-head">
                                        <h3 class="person-info-title"> Personal Information</h3>
                                        <div class="personal-detail">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
                                                    <div class="form-group person-info" >
                                                        <input placeholder="Full name " class="form-control text" id="FullName"  name="FullName" value="<?php echo $_SESSION['FullName']; ?>"type="text">
                                                          <?php if (!empty($FullNameError)): ?>
				  
                                                <span class="help-inline"><?php echo $FullNameError; ?></span>
                                            <?php endif; ?>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
                                                    <div class="form-group person-info">
                                                        <input placeholder="Email " class="form-control text" id="Email" name="Email" value="<?php echo $_SESSION['Email']; ?>"  type="text" >
                                                           <?php if (!empty($EmailError)): ?>
				  
                                                <span class="help-inline"><?php echo $EmailError; ?></span>
                                            <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
                                                    <div class="form-group person-info" >
                                                        <input placeholder="Date of Birth (mm/dd/yyyy)" id="datepicker" name="Dob" class="form-control text" value="<?php echo!empty($Dob) ? $Dob : ''; ?>" type="text">
                                                        
                                                           <?php if (!empty($DobError)): ?>
				  
                                                <span class="help-inline"><?php echo $DobError; ?></span>
                                            <?php endif; ?>
                                                        <script>
	$(document).ready(function(e) {
		$("#datepicker").datepicker({	
			shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" 
		 });    
	});
  </script>

                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
                                                    <div class="form-group person-info">
                                                        <input placeholder="+CountryCode-Number" id="Mobile" name="Mobile" class="form-control text " value="<?php echo!empty($Mobile) ? $Mobile : ''; ?>" type="text">
                                                            <?php if (!empty($MobileError)): ?>
				  
                                                <span class="help-inline"><?php echo $MobileError; ?></span>
                                            <?php endif; ?>
														
                                                      
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
                                                    <div class="form-group person-info">
                                                        <input placeholder="Address" id="Address"  name="Address" class="form-control text" value="<?php echo!empty($Address) ? $Address : ''; ?>"  type="text">
                                                        
                                                        
                                                          <?php if (!empty($AddressError)): ?>
				  
                                                <span class="help-inline"><?php echo $AddressError; ?></span>
                                            <?php endif; ?>  
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-10 col-xs-12">
                                                    <div class="form-group person-info">
                                                        <input placeholder="Pin Code " id="PinCode"name="PinCode" class="form-control text " value="<?php echo!empty($PinCode) ? $PinCode : ''; ?>" type="text">
			  
                                                          <?php if (!empty($PinCodeError)): ?>
				  
                                                <span class="help-inline"><?php echo $PinCodeError; ?></span>
                                            <?php endif; ?> 
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row select_placetxt">
                                                <div class="form-group col-lg-5 col-md-5 col-sm-10 col-xs-12 place_txt">
                                                    <select name="Country" class="form-control" id="country">
                                                        <option value="">Select Country</option>
                                                        <?php
														if($rowCount > 0){
															while($row = mysql_fetch_assoc($query)){ 
																echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
															}
														}else{
															echo '<option value="">Country not available</option>';
														}
														?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-5 col-md-5 col-sm-10 col-xs-12 place_txt">
                                                    <select name="State" class="form-control" id="state">
                                                        <option value="">Select country first</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-5 col-md-5 col-sm-10 col-xs-12 place_txt">
                                                    <select name="City" class="form-control" id="city">
                                                        <option value="">Select state first</option>
                                                    </select>
                                                </div>
                                            </div>
											  <?php {
											if ($_SESSION['IsSocial'] == false) {
											?>
                                             <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                          <label class="custom-file-input" style="vertical-align:top">
                                                         <input id="uploadBtn" name="ProfileImage" type="file"> </label><input id="uploadFile" placeholder="Upload Profile Photo" disabled="disabled" style="height:55px; margin-left:10px; border:none; background:none; line-height:30px;"> 
                                                    </div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													 <img id="image" class="col-md-4"/>
													 </div>
                                                 </div>
												  <?php
												} else {
                                        ?>
										<?php
                                    }
                                }
                                ?>
                                        </div>
                                    </div>
                                    <div class="family-info info-head">
                                        <h3 class="person-info-title"> Family Physician and / or Primary Healthcare Provider: </h3>
                                        <div class="personal-detail">
                                            <div class="row questionary-box">
                                                <p>Doctor/Others</p>
                                                <div class="questionary-opt"> 
                                                    <div class="select-items specialty_radio">
                                                        <label>
                                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                                                <input type="radio" class="speciality questionary-radio" name="optradio" value="Multi" id="chkYes" >Yes</div>
                                                            <span id="SpecializedType" style="display:none; margin-right:30px" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pd0">
                                                                <input type="text" id="txtoptradioFamilyDoctorName" class="select_text" required="required" name="FamilyPhysician" placeholder="Doctor Name/Hospital Name">
                                                            </span>
                                                            <span id="SpecializedType1" style="display:none; margin-right:30px" class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pd0">
                                                                <input type="text" id="txtoptradioFamilyCityName"  name="PhysicianCity" required="required" class="select_text" placeholder="City">
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="specialty_radio">                       
                                                        <label><input type="radio"  class="speciality questionary-radio" checked="checked" name="optradio" value="No">No</label>
                                                    </div> 
                                                    <span class="bottomerror" style="color:red;display:none">Please select this field</span>               
                                                </div>  
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>      
                                    </div>
									
									



                                    <div class="row btn-form-cont pull-right">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <Button type="submit" id="btnSaveNext" class="form-continue" >Save &amp; Continue</Button>
                                        </div>
                                    </div>
					
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="demoerrormsg" id="error-message" style=" margin-top:10px">
</div>
</div>
</div>
                                </div>  
                            </form>	
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php
    } else {// view
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
        <!---------profile view--------------->
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
                                    <h5><span>Contact Phone Number : </span>  <?php echo $_SESSION['Mobile']; ?> </h5>
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
    <?php
    }
}
?>

<style>
#FamilyPhysician-error {
    margin-right: 1rem;
    color: red !important;
}
#PhysicianCity-error {
    margin-right: 1rem;
    color: red !important;
}
</style>

 <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
 <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

  function CheckDateTime(){
	   var dateVar=$("#datepicker").val();
	  if(dateVar!='')
			$("#datepicker-error").hide();
		else
			$("#datepicker-error").show();
	  }

	 	
	
	
  $(document).ready(function(){
	  
	   $("#datepicker").blur(function(){
		  setTimeout(CheckDateTime,500);
	 });
	  
	   $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

  $.validator.addMethod("custome_name", function(value, element){ 
      return this.optional(element) || /^[a-zA-Z,. ]*$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");

	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
  
   
    $("#profile").validate({
      rules: {

       
       FullName:{
          required: true,
		  custome_name:true
    
        },
		 Dob:{
			required:true
		},
		Email:
		{
            required:true,
            custome_email:true
			
		},
		
		
		Mobile:{
          required: true,
		 custome_phone:true
        },
		Address:
		{
			 required: true,
     
		},
		PinCode:
		{
			 required: true,
			 digits:true,
			
     
		},
		Country:{required:true},
		State:{required:true}
		
		
      },
      messages:{
        
        FullName: {
          required: "<strong>Please Enter Name *</strong>",
          custome_name: "<strong>Please Enter Only Alphabets *</strong>",
        },
		Dob:{
			required:"<strong>Please Enter Date Of Birth *</strong>"
		},
		Mobile:{
           required:"<strong>Please Enter Mobile*</strong>",
		  custome_phone:"<strong>Please Enter Valid Mobile</strong>"
		            

        },
		Email:
		{           required:"<strong>Please Enter Email*</strong>",

        custome_email:"<strong>Please Enter Valid  Email*</strong>"

        },
		Address:
		{
			          required: "<strong>Please Enter Address*</strong>",
 
		},
		PinCode:
		{
			          required: "<strong>Please Enter Pincode*</strong>",
					  digits:"<strong>Please Enter Only Digit*</strong>",
						
		},
		Country:
		{			          required: "<strong>Please Enter Country*</strong>",

		},
		State:
		{			          required: "<strong>Please Enter State*</strong>",

		}
      } 
 	  
    });
  });
 </script>
 <script type="text/javascript">
    $(document).ready(function () {
        $('input:radio[name=optradio]').click(function () {
            var radioValue = $("input[name='optradio']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType1").show();
            } else {
                $("#SpecializedType1").hide();
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
	 $("#chkYes").change(function(){
		 if(!$("#chkYes").is(':checked') )
	{
		$("input[type=text][name=FamilyPhysician]").val('');
		$("input[type=text][name=PhysicianCity]").val('');

	
	}
	 });
	 $("#btnSaveNext").click(function(){
		 if(!$("#chkYes").is(':checked')) 
	{
		$("input[type=text][name=FamilyPhysician]").val('');
		$("input[type=text][name=PhysicianCity]").val('');

	
	}
		 
	 });
	 
 });
 </script>
 <script>
 $(document).ready(function(e) {
	 
    $("#btnSaveNext").click(function(){
		if(!$("input[name=optradio]").is(':checked'))
		{
			$(".bottomerror").show();
		}
		$("input[name=optradio]").click(function(){
			$(".bottomerror").hide();
			});
	
		
		
		});
});
 
 </script>
 
 
	    <script>
        document.getElementById("uploadBtn").onchange = function () {
            var reader = new FileReader();

            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("image").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };
    </script>
 
<?php include ('footer_user.php') ?>