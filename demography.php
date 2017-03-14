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
 //copy strt here
 if (!empty($_POST)) {
 
 
	try{
		
    // keep track post values
    $radio1 = $_POST['radio1'];
	$radio2 = $_POST['radio2'];
    $radio3 = $_POST['radio3'];
	if($radio3 == "Other(Specify)")
	{
		$radio3_Other = $_POST['radio3_Other'];
	}
	$radio4 = $_POST['radio4'];
    $radio5 = $_POST['radio5'];
	if($radio5 == "Other(Specify)")
	{
		$radio5_Other = $_POST['radio5_Other'];
	}
	
	$radio6 = $_POST['radio6'];
    $radio7 = $_POST['radio7'];
    $radio8 = $_POST['radio8'];
    $Status = '0';
	
    // update data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // keep track validation errors
	       
		 
		 
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = "INSERT INTO demography  (PatientId , Gender , Age ,Enthnicity ,OtherEnthnicity, MaritalStatus ,Degree ,OtherDegree,TotalIncome, EmploymentStatus , HousingStatus, Status  ) VALUES (?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";	
		$q = $pdo->prepare($sql);
		$q->execute(array($_SESSION['PatientId'], $radio1 , $radio2, $radio3 ,$radio3_Other, $radio4 ,$radio5 ,$radio5_Other, $radio6, $radio7 , $radio8, $Status  ));
		
		$sql = "UPDATE profilereport set Demography = ? WHERE PatientId=?";
        $q = $pdo->prepare($sql);
        $q->execute(array(7, $_SESSION['PatientId']));
		
	
        Database::disconnect();
        
		 echo "<script type = 'text/javascript'>alert('Successfully inserted'); window.location = 'health_history.php'; </script>";
		
		 
	  }
	}
	
	catch(Exception $e){
		echo $e;
		 echo "<script type = 'text/javascript'> alert('Server Error'); </script>";
	
	  
	}
} 
//copy ends


?>

<!-- page content -->


<?php
$squery = "SELECT * FROM demography where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);
$rowcount = mysql_num_rows($result); {
    if ($rowcount == 0) {    //Allow edit
        ?>
<div class="right_col" role="main">
<div class="profile">
  <div class="">
     <div class="profile_inner">
       <div class="medical-questionary">
    <div class="demography-data info-head"> 
	<div class="row pull-right">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <input value="Save &amp; Continue" name="submit" type="submit" class="form-continue">
     </div>
    </div>
      <h3>Demography Data </h3>
      <div class="personal-detail">
      <div class="demoerrormsg" id="error-message" style=" margin-top:10px" >


       </div>
	  <form class="form-horizontal" enctype="multipart/form-data" id="demography" method="post">
        <div class="questionary-box">
	      <p>Sex?  </p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input class="questionary-radio" name="radio1" <?php if (isset($radio1) && $radio1=="male") echo "checked";?> type="radio" value="male"><span> Male</span></p>
                 <p><input class="questionary-radio" name="radio1" <?php if (isset($radio1) && $radio1=="female") echo "checked";?> type="radio" value="female"><span> Female</span></p>							
              </div>
            </div>  
            <div class="questionary-opt">
              <div class="select-items"> 
                 <p><input name="radio1" class="questionary-radio" type="radio" value="Other"><span></span><span> Other </span></p>
                
              </div>
            </div>
			     <?php if (!empty($radio1_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio1_error; ?></span>
                                            <?php endif; ?> 
            <div class="clearfix"></div>
        </div>
        
        <div class="questionary-box">
             <p>Age?</p>
               <div class="questionary-opt"> 
                 <div class="select-items">
                   <p><input class="questionary-radio" name="radio2" <?php if (isset($radio2) && $radio2=="0 - 9 Years") echo "checked";?> type="radio" value="0 - 9 Years"><span> 0 - 9 Years </span></p>
                   <p><input name="radio2" class="questionary-radio" <?php if (isset($radio2) && $radio2=="10 - 17 Years") echo "checked";?> type="radio" value="10 - 17 Years"><span>10 - 17 Years </span></p>
                      
                 </div>
               </div>
               <div class="questionary-opt"> 
                 <div class="select-items">
                   <p><input name="radio2" class="questionary-radio" <?php if (isset($radio2) && $radio2=="18 - 25 Years") echo "checked";?>type="radio" value="18 - 25 Years"><span>18 - 25 Years </span></p>
                   <p><input name="radio2" class="questionary-radio" <?php if (isset($radio2) && $radio2=="26 - 35 Years") echo "checked";?> type="radio" value="26 - 35 Years"><span> 26 - 35 Years </span></p>
                 </div>
               </div>
               <div class="questionary-opt">
                 <div class="select-items">
                   <p><input name="radio2" class="questionary-radio" <?php if (isset($radio2) && $radio2=="36 - 45 Years") echo "checked";?> type="radio" value="36 - 45 Years"><span>36 - 45 Years </span></p>
                   <p><input name="radio2" class="questionary-radio" <?php if (isset($radio2) && $radio2=="46 - 55 Years") echo "checked";?> type="radio" value="46 - 55 Years"><span>46 - 55 Years</span></p>
                 </div>
               </div>
               <div class="questionary-opt">
                 <div class="select-items">
                   <p><input name="radio2" class="questionary-radio"  <?php if (isset($radio2) && $radio2=="56 - 65 Years") echo "checked";?> type="radio" value="56 - 65 Years"><span>56 - 65 Years </span></p>
                   <p><input name="radio2" class="questionary-radio"  <?php if (isset($radio2) && $radio2=="66 - 75 Years") echo "checked";?> type="radio" value="66 - 75 Years"><span> 66 - 75 Years</span></p>
                </div>
               </div>
               <div class="questionary-opt">
                <div class="select-items">
                 <p><input class="questionary-radio" name="radio2" <?php if (isset($radio2) && $radio2=="75 And Older") echo "checked";?>  type="radio" value="75 and older"><span>75 and Older </span></p>
                
              </div>            
              </div>
			    <?php if (!empty($radio2_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio2_error; ?></span>
                                            <?php endif; ?>
              <div class="clearfix"></div>
			  
        </div>
        
        <div class="questionary-box other010">
             <p>Race/ethnicity? </p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio3" class="questionary-radio" type="radio" value="Chinese"><span>Chinese</span></p>
                 <p><input name="radio3" class="questionary-radio" type="radio" value="American"><span>American</span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio3" class="questionary-radio" <?php if (isset($radio3) && $radio3=="Hispanic") echo "checked";?> type="radio" value="Hispanic"><span>Hispanic </span></p>
                 <p><input name="radio3" class="questionary-radio"  <?php if (isset($radio3) && $radio3=="Indian") echo "checked";?>  type="radio" value="Indian"><span>Indian</span></p>
               
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio3" class="questionary-radio" <?php if (isset($radio3) && $radio3=="Muslim") echo "checked";?>  type="radio" value="Muslim"><span>Muslim </span></p>
                 <p><input name="radio3" class="questionary-radio" <?php if (isset($radio3) && $radio3=="Christian") echo "checked";?> type="radio" value="Christian"><span>Christian </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio3" class="questionary-radio" <?php if (isset($radio3) && $radio3=="Buddhist") echo "checked";?> type="radio" value="Buddhist"><span>Buddhist</span></p>
                 <p>
                     <input class="speciality questionary-radio options"<?php if (isset($radio3) && $radio3=="Other(Specify)") echo "checked";?> name="radio3" id="chkYes" type="radio" value="Other(Specify)">Other(Specify)
                     <span id="ethnicity" style="display:none; margin-left:10px">
                        <input class="ethnicity_text" placeholder="" id="optiontxt" type="text" name="radio3_Other">
                      
                      </span>
                 </p>
              </div>
            </div>
			 <?php if (!empty($radio3_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio3_error; ?></span>
                                            <?php endif; ?>
            <div class="clearfix"></div>
         </div>       
        <div class="questionary-box">
             <p>Marital Status? </p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio4" <?php if (isset($radio4) && $radio4=="Married") echo "checked";?> class="questionary-radio" type="radio" value="Married"><span>Married </span></p>
                 <p><input name="radio4" <?php if (isset($radio4) && $radio4=="Widowed") echo "checked";?> class="questionary-radio" type="radio" value="Widowed"><span>Widowed </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio4"  <?php if (isset($radio4) && $radio4=="Divorced") echo "checked";?> class="questionary-radio" type="radio" value="Divorced"><span>Divorced </span></p>
                 <p><input name="radio4" <?php if (isset($radio4) && $radio4=="Separated") echo "checked";?>  class="questionary-radio" type="radio" value="Separated"><span>Separated </span></p>
               
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio4" <?php if (isset($radio4) && $radio4=="Never Married") echo "checked";?>  class="questionary-radio" type="radio" value="Single"><span>Single</span></p>
              </div>
            <?php if (!empty($radio4_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio4_error; ?></span>
                                            <?php endif; ?>
            <div class="clearfix"></div>
         </div>   
        </div>
        
        <div class="questionary-box degree">
             <p>Highest degree or level of school you have completed?</p>
             <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio5"  <?php if (isset($radio5) && $radio5=="Diploma completed") echo "checked";?>  class="questionary-radio" type="radio" value="Diploma completed"><span>Diploma completed </span></p>
                 <p><input name="radio5"  <?php if (isset($radio5) && $radio5=="Bachelor’s degree completed (BA, BS)") echo "checked";?>  class="questionary-radio" type="radio" value="Bachelor’s degree completed (BA, BS)"><span>Bachelor’s degree completed (BA, BS) </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio5"   <?php if (isset($radio5) && $radio5=="Master’s degree completed (MA, MS, MEng, MEd, MSW, MBA )") echo "checked";?>  class="questionary-radio" type="radio" value="Master’s degree completed (MA, MS, MEng, MEd, MSW, MBA )"><span>Master’s degree completed (MA, MS, MEng, MEd, MSW, MBA ) </span></p>
                 <p><input name="radio5"  <?php if (isset($radio5) && $radio5=="Professional degree completed (MD, DDS, DVM, LLB, JD)") echo "checked";?>  class="questionary-radio" type="radio" value="Professional degree completed (MD, DDS, DVM, LLB, JD)"><span>Professional degree completed (MD, DDS, DVM, LLB, JD) </span></p>
              </div>
            </div>
            
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio5"  <?php if (isset($radio5) && $radio5=="Doctorate degree (PhD)") echo "checked";?>  class="questionary-radio" type="radio" value="Doctorate degree (PhD)"><span>Doctorate degree (PhD) </span></p>
                 <p>
                     <input class="speciality questionary-radio options1" name="radio5"  <?php if (isset($radio5) && $radio5=="degree") echo "checked";?> id="chkYes" type="radio" value="Other(Specify)">Other(Specify)
                     <span id="education" style="display:none; margin-left:10px">
                        <input class="ethnicity_text" placeholder="" id="optiontxt1"type="text" name="radio5_Other">
                      </span>
                 </p>
              </div>
               <?php if (!empty($radio5_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio5_error; ?></span>
                                            <?php endif; ?>
            <div class="clearfix"></div>
         </div>
        </div>
        <div class="questionary-box">
             <p>Household income?  (USD per annum)</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio6"  <?php if (isset($radio6) && $radio6=="Less than 10,000") echo "checked";?> class="questionary-radio" type="radio" value="Less Than 10,000"><span>Less Than 10,000 </span></p>
                 <p><input name="radio6"  <?php if (isset($radio6) && $radio6=="10,000-19,999") echo "checked";?> class="questionary-radio" type="radio" value="10,000-19,999"><span>10,000-19,999 </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="20,000-29,999") echo "checked";?>  class="questionary-radio" type="radio" value="20,000-29,999"><span>20,000-29,999 </span></p>
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="30,000-39,999") echo "checked";?>  class="questionary-radio" type="radio" value="30,000-39,999"><span>30,000-39,999 </span></p>
              </div>
            </div>
            
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="40,000-49,999") echo "checked";?> class="questionary-radio" type="radio" value="40,000-49,999"><span>40,000-49,999 </span></p>
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="50,000-59,999") echo "checked";?>  class="questionary-radio" type="radio" value="50,000-59,999"><span>50,000-59,999 </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="60,000-69,999") echo "checked";?>  class="questionary-radio" type="radio" value="60,000-69,999"><span>60,000-69,999 </span></p>
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="70,000-79,999") echo "checked";?>  class="questionary-radio" type="radio" value="70,000-79,999"><span>70,000-79,999 </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              
              <div class="select-items">
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="80,000-89,999") echo "checked";?>  class="questionary-radio" type="radio" value="80,000-89,999"><span>80,000-89,999 </span></p>
                 <p><input name="radio6"  <?php if (isset($radio6) && $radio6=="90,000-99,000") echo "checked";?> class="questionary-radio" type="radio" value="90,000-99,000"><span>90,000-99,000 </span></p>
              </div>
               
            <div class="clearfix"></div>
         </div> 
         <div class="questionary-opt"> 
              
              <div class="select-items">
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="100,000-119,000") echo "checked";?>  class="questionary-radio" type="radio" value="100,000-119,000"><span>100,000-119,000 </span></p>
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="120,000-129,000") echo "checked";?>  class="questionary-radio" type="radio" value="120,000-129,000"><span>120,000-129,000 </span></p>
              </div>
            
            <div class="clearfix"></div>
         </div>
         <div class="questionary-opt"> 
              
              <div class="select-items">
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="130,000-139,000") echo "checked";?>  class="questionary-radio" type="radio" value="130,000-139,000"><span>130,000-139,000 </span></p>
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="140,000-149,000") echo "checked";?> class="questionary-radio" type="radio" value="140,000-149,000"><span>140,000-149,000  </span></p>
              </div>
              
            <div class="clearfix"></div>
         </div>
         <div class="questionary-opt"> 
              
              <div class="select-items">
                 <p><input name="radio6" <?php if (isset($radio6) && $radio6=="150,000 or more") echo "checked";?> class="questionary-radio" type="radio" value="150,000 Or More"><span>150,000 Or More </span></p>
              </div>
               <?php if (!empty($radio6_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio6_error; ?></span>
                                            <?php endif; ?>
            <div class="clearfix"></div>
         </div>
        </div>
        <div class="questionary-box">
             <p>Employment status?</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio7"  <?php if (isset($radio7))?>  class="questionary-radio" type="radio" value="Employed"><span>Employed</span></p>
                 <p><input name="radio7"  <?php if (isset($radio7))?>  class="questionary-radio" type="radio" value="Self-Employed"><span>Self-employed </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">   
                 <p><input name="radio7"   <?php if (isset($radio7) && $radio7=="Out of work and looking for work") echo "checked";?> class="questionary-radio" type="radio" value="Out Of Work And Looking For Work"><span>Out of work and looking for work </span></p>
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="Out of work but not currently looking for work") echo "checked";?>  class="questionary-radio" type="radio" value="Out Of Work But Not Currently Looking For Work"><span>Out of work but not currently looking for work </span></p>
              </div>
            </div>
            
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio7"   <?php if (isset($radio7) && $radio7=="A homemaker") echo "checked";?> class="questionary-radio" type="radio" value="Homemaker"><span>Homemaker </span></p>
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="A student") echo "checked";?>  class="questionary-radio" type="radio" value="Student"><span>Student </span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio7"   <?php if (isset($radio7) && $radio7=="Retired") echo "checked";?> class="questionary-radio" type="radio" value="Retired"><span>Retired</span></p>
                 <p><input name="radio7"   <?php if (isset($radio7) && $radio7=="Unable to work") echo "checked";?> class="questionary-radio" type="radio" value="Unable To Work"><span>Unable to work </span></p>
                
              </div>
            </div>
            
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="Employee of a not-profit, tax-exempt, or charitable organization") echo "checked";?>  class="questionary-radio" type="radio" value="Employee Of A Non-Profit, Tax-Exempt, Or Charitable Organization"><span>Employee of a Non-profit, tax-exempt, or charitable organization </span></p>
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="Local government employee (city, county, etc)") echo "checked";?>  class="questionary-radio" type="radio" value="Local Government Employee (City, County, Etc))"><span>Local government employee (city, county, etc) </span></p>
              </div>
             
            <div class="clearfix"></div>
         </div>
         <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio7"   <?php if (isset($radio7) && $radio7=="State government employee") echo "checked";?> class="questionary-radio" type="radio" value="State Government Employee"><span>State government employee </span></p>
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="Federal government employee") echo "checked";?>  class="questionary-radio" type="radio" value="Federal Government Employee"><span>Federal government employee </span></p>
              </div>
              
            <div class="clearfix"></div>
         </div>
         <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="Self-employed in own not-incorporated business, professional practice") echo "checked";?>  class="questionary-radio" type="radio" value="Self-Employed In Own Not-Incorporated Business, Professional Practice"><span>Self-employed in own not-incorporated business, professional practice</span></p>
                 <p><input name="radio7"  <?php if (isset($radio7) && $radio7=="Self-employed in own incorporated business, professional practice") echo "checked";?>  class="questionary-radio" type="radio" value="Self-Employed In Own Incorporated Business, Professional Practice"><span>Self-employed in own incorporated business, professional practice</span></p>
              </div>
                  <?php if (!empty($radio7_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio7_error; ?></span>
                                            <?php endif; ?>
            <div class="clearfix"></div>
         </div>
       </div>
        
        <div class="questionary-box">
             <p>Housing?</p>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio8" <?php if (isset($radio8) && $radio8=="Owned by you or someone in this household with a mortgage or loan?") echo "checked";?> class="questionary-radio" type="radio" value="Owned By You Or Someone In This Household With A Mortgage Or Loan"><span>Owned by you or someone in this household with a mortgage or loan</span></p>
                 <p><input name="radio8"  <?php if (isset($radio8) && $radio8=="Owned by you or someone in this household free and clear (without a mortgage or loan)?") echo "checked";?> class="questionary-radio" type="radio" value="Owned By You Or Someone In This Household Free And Clear (Without A Mortgage Or Loan)"><span>Owned by you or someone in this household free and clear (without a mortgage or loan)</span></p>
              </div>
            </div>
            <div class="questionary-opt"> 
              <div class="select-items">
                 <p><input name="radio8"  <?php if (isset($radio8) && $radio8=="Rented for cash rent") echo "checked";?> class="questionary-radio" type="radio" value="Rented For Cash Rent"><span>Rented for cash rent</span></p>
                 <p><input name="radio8" <?php if (isset($radio8) && $radio8=="Occupied without payment of cash rent?") echo "checked";?>class="questionary-radio" type="radio" value="Occupied Without Payment Of Cash Rent"><span>Occupied without payment of cash rent</span></p>              
              </div>
            </div>
             <?php if (!empty($radio8_error)): ?>
				  
                                                <span class="help-inline"><?php echo $radio8_error; ?></span>
                                            <?php endif; ?>
            <div class="clearfix"></div>
         
         </div>
		
      </div>
    

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">

</div>
</div>

	<div class="row btn-form-cont pull-right">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 
 <input value="Save &amp; Continue" name="submit" type="submit" class="form-continue">
     </div>
    </div>
	<div class="row">
	
	
	
	</div>
	 </form>
    </div>
  </div>  
  
      <div class="clearfix"></div>
     </div>
  </div>
  </div>
   </div>
          <?php
    } else {// view
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

<div class="right_col" role="main"> 
<div class="profile">
<div class="person-info col-lg-12">
  <h3 class="person-info-title">Demography Data</h3>
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Gender</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Gender']; ?></div>
<div class="clearfix"></div>

</div>
 
<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Age</div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['Age']; ?></div>
<div class="clearfix"></div>

</div>

<div class="detail001">
  
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Ethnicity</div>
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
    <?php
    }
}
?>
<script type="text/javascript">
 $(document).ready(function(){
$('input:radio[name=optradio]').click(function(){	
		var radioValue = $("input[name='optradio']:checked").val();
		if(radioValue=='Multi'){
			$("#SpecializedType").show();
		}
		else{
		$("#SpecializedType").hide();
		}
	});
});
</script>


 
<script type="text/javascript">
 $(document).ready(function(){
$('input:radio[name=optradio]').click(function(){	
		var radioValue = $("input[name='optradio']:checked").val();
		if(radioValue=='Multi'){
			$("#SpecializedType1").show();
		}
		else{
		$("#SpecializedType1").hide();
		} 
	});
});

        $('.other010').click(function () {
            var radioValue = $("input[name='radio3']:checked").val();
            if (radioValue == 'Other(Specify)') {
                $("#ethnicity").show();
            } else {
				
                $("#ethnicity").hide();
				$("input[type=text][name=radio3_Other]").val('');
            }
        });

        $('.degree').click(function () {
            var radioValue = $("input[name='radio5']:checked").val();
            if (radioValue =='Other(Specify)') {
                $("#education").show();
            } else {
				
                $("#education").hide();
				$("input[type=text][name=radio5_Other]").val('');
            }
        });
		
</script>
<script>
$(document).ready(function(){
	$("input[type=submit]").click(function(){
		isvalid=true;
		if($("input[name=radio5_Other]").is(':visible'))
		{
			if($("input[name=radio5_Other]").val().length==0)
			{
				alert("Please Enter value in Highest Degree Or Level Of School You Have Completed");
				isvalid=false;
			}
		}
		if($("input[name=radio3_Other]").is(':visible'))
		{
			if($("input[name=radio3_Other]").val().length==0)
			{
				alert("Please Enter value in Race/Ethnicity");
				isvalid=false;
			}
		}
			if(!$("input[name=radio1]").is(':checked'))
			{
				alert("Please Select Sex");
				isvalid=false;

			}
			if(!$("input[name=radio2]").is(':checked'))
			{
				alert("Please Select Age");
				isvalid=false;

			}
			if(!$("input[name=radio3]").is(':checked'))
			{
				alert("Please Select Race/Ethnicity");
					isvalid=false;
		}if(!$("input[name=radio4]").is(':checked'))
			{
				alert("Please Select Marital Status");
								isvalid=false;

			}
			if(!$("input[name=radio5]").is(':checked'))
			{
				alert("Please Select Highest Degree Or Level Of School You Have Completed");
								isvalid=false;

			}
			if(!$("input[name=radio6]").is(':checked'))
			{
				alert("Please Select Household Income");
								isvalid=false;

			}
			if(!$("input[name=radio7]").is(':checked'))
			{
				alert("Please Select Employment Status");
								isvalid=false;

			}
			if(!$("input[name=radio8]").is(':checked'))
			{
				alert("Please Select Housing");
								isvalid=false;

			}
			
					return isvalid;

		});
	
	});

</script>



    <?php include ('footer_user.php') ?>