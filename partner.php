<?php
$pagetitle = "";                   // (1) Set the title
include "header.php"; 
$db_handle = new DBController();
$query = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result  = mysql_query($query);
$rowCount = mysql_num_rows($result);


$query1 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result1  = mysql_query($query1);
$rowCount1 = mysql_num_rows($result1);

$query2 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result2  = mysql_query($query2);
$rowCount2 = mysql_num_rows($result2);

$query3 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result3  = mysql_query($query3);
$rowCount3 = mysql_num_rows($result3);

$query4 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result4  = mysql_query($query4);
$rowCount4 = mysql_num_rows($result4);

$query5 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result5  = mysql_query($query5);
$rowCount5 = mysql_num_rows($result5);

$query6 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result6  = mysql_query($query6);
$rowCount6 = mysql_num_rows($result6);

$query7 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result7  = mysql_query($query7);
$rowCount7 = mysql_num_rows($result7);

$query8 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result8  = mysql_query($query8);
$rowCount8 = mysql_num_rows($result8);

$query9 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result9  = mysql_query($query9);
$rowCount9 = mysql_num_rows($result9);

$query10 = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC";
$result10  = mysql_query($query10);
$rowCount10 = mysql_num_rows($result10);

?>

 <style>
 strong
 {
	 color:red;}
 </style>

<div class="over-flow" id="partner">  

  <div> 
    <!--slider start-->
    <div class="header_image" style="position:relative">
      <div class="container">
        <div class="hs_partner text-center">
          <h1 style="color: #ffffff" class="entry-title title">
            <span>Our Medical Practice Partnership</span></h1>
          <h2 style="color: #ffffff" class="entry-subtitle title">
             <span>The Revolutionary Approach</span></h2>
          <ul class="partner_link">
            <li><a href="#">Home</a></li>
            <li class="current"><a href="#">Our Medical Practice Partnership</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    
    <!--layer slider ends--> 
  </div>
  
  <div>
    <div class="container-fluid">
      <div class="container"> 
        <!--Up Coming Events start-->
        <div class="row refine-search">
          <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
                <p class="pr_text">Be a part of the SMART Partnership Model (SPM) along with a visionary healthcare management group, SMART Partners (SP) will get great opportunities to earn within their comfort zone. Our motive is to help doctors, nurses, hospitals, diagnostic and research labs, nutritionist, health instructors, healthcare suppliers, physiotherapist, wellness centers, etc. to connect with patients through virtual world, even if you are across the world and reap benefits. Our system allows you to serve patients far and wide whilst maintaining the quality and standard of care & services so that you can have a positive practice culture and progressive pay scale.</p>
          </section>
        </div>
        <!--Up Coming Events end--> 
      </div>
    </div>
  </div>
  <div>
      
      <div class="container">
        
          <div class="row">
            <div class="line-hr"></div>
                <div class="">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 part lft_sidebar">
                      <div class="partner-lft">
                        <ul class="partner_list">
                          <li class="active "><a href="#lA" data-toggle="tab">Partnership Benefits</a></li>
                          <li><a href="#lB" data-toggle="tab">Our Partnership</a></li>
                       </ul>
                      </div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 patner-right">
                       <div class="tab-content grid-box">   
                         
                          
                          
                          <div class="tab-pane active" id="lA">
                             <div class="content_head">
                               <h2>Earn SMART and earn BIG</h2>
                             </div>
                             <div class="number_list">
                              <ul class="standard_list">
                                <li>
                                    <p><div class="bullet text-center">1</div>Become a CyGen Group partner and get multiple opportunities of serving patients. </p>
                                </li>
                                <li>
                                    <p><div class="bullet text-center">2</div>Our network is wide so just en-cash your skills and get paid for each consultation without any hustle and bustle. </p>
                                </li>
                                <li>
                                    <p><div class="bullet text-center">3</div>Increase your productivity by reducing your overhead fees.</p>
                                </li>
                              </ul>
                             </div>
                             
                             
                             <div class="content_head content_h2">
                               <h2>Improved quality of life</h2>
                             </div>
                             <div class="number_list">
                              <ul class="standard_list">
                                <li>
                                    <p><div class="bullet text-center">1</div>Assist patients while enjoying the comfort of your home. Be your own boss and take charge of your own schedule.</p>
                                </li>
                                <li>
                                    <p><div class="bullet text-center">2</div>Spend quality time with your family andplan schedules ahead with patients to avoid unnecessary waiting.</p>
                                </li>
                                </ul>
                             </div>
                             
                             
                             <div class="content_head content_h2">
                               <h2>Enhance and develop your professional skills </h2>
                             </div>
                             <div class="number_list">
                              <ul class="standard_list">
                                <li>
                                    <p><div class="bullet text-center">1</div>Expand your reach and develop your professional skills.</p>
                                </li>
                                <li>
                                    <p><div class="bullet text-center">2</div>Give yourself time and learn new tools and techniques in order to come up with innovative solutions.</p>
                                </li>
                                <li>
                                    <p><div class="bullet text-center">3</div>We can also help you in building your private practice.</p>
                                </li>
                              </ul>
                             </div>

                            
                         </div>
                          
                               
                         <div class="tab-pane" id="lB">
                             <div class="content_head">
                               <h2>Our Partnership</h2>
                             </div>
                             
                             <div class="number_list">
                              <ul class="standard_list">
                                <li>
                                    <p>Healthcare industry is a potent market which poorly explored and ill managed. CyGen Group needs valuable partners like you to redefine the healthcare delivery system. Our aim is to bond with doctors, hospitals,nurses, diagnostic labs, suppliers, fitness instructors and centers (yoga, gym, meditation), nutritionist & dietician, physiotherapy centers and health coach who are willing to work for the betterment of patients. We look forward to professionals who can utilize their skills in a progressive environment and treat our patients.</p>
                                </li>
                                <li>
                                    <p>Our system is systematic where each step of care delivery is defined well which keeps you free from any administrative hassle. When an opportunity knocks, we let the doors open for you. As a healthcare professional and service provider, you will discover great advantages of being associated with us. Our team makes it their responsibility to find assignments that can match your expectations. </p>
                                </li>
                                <li>
                                    <p>We don’t wait for the assignments; however, we secure them and make them available for you. As soon as we receive a request from an individual regarding healthcare products or services, we go knocking for you. It’s you who will be serving them and enjoying the benefits.</p>
                                <li>
                                    <p>At CyGen Group, we follow our motive of providing exceptional care delivered to patients at aright time and we need partners like you to help us accomplish it. If this sounds to be your perfect match, contact us and discuss your goals. We will be happy to bond with you.</p>
                                </li>
                              </ul>
                             </div>
                             
                         </div>
                               
                         
                         
                       
                     </div>
                    </div>
                </div>
              <div class="clearfix"></div>
           </div>
      </div>
  </div>
  <div>
    <div class="container">
       <div class="join">
         <h2>Want to enjoy the fruit of unparallel success? Partner with us</h2>
         <p> CyGen Group gives opportunities to all medical professionals to utilize our extensive network and maximize their revenue. We are available 24X7 so that you can reach us whenever you want. Just connect with us and discover the potential of mutual growth. </p>
          <div class="accordion">
          
<!-- Nurses Start -->        
<div class="item">
                <div class="heading">Nurses</div>
                <div class="content">
                   <form method="post" id="nurseform" action="partner_insert.php">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Your Name*</label>
                      <input type="text" placeholder="Please Enter  Name"class="form-control"  name="fname" >
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Gender*</label>
					  <select class="form-control" name="gender" required="" id="gender">
					  <option value="">Select Gender </option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					</select>
					<div id="gendererrormsg" style="display:none;font-weight:700;margin-top:5px">Please select gender</div>
		
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Age*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Age"  name="age" id="age">
									  
				
                    </div>
                    </div>
                    
                    <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date Of Birth*</label>
                      <input type="text"  class="form-control dob" placeholder="Please Enter Date Of Birth" name="dob" id="datepicker1">	

					
		
  
                    </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Contact No*</label>
                      <input type="text"class="form-control" placeholder="+CountryCode-Number" name="phone" >
	
			
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Email id*</label>
                      <input type="text" class="form-control" placeholder="Please Enter Email Id"  name="email" id="email">
                    </div>
                    </div>
                    
                   <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Identity Proof*</label>
                      <input type="text"  class="form-control" name="identity" placeholder="Please Enter Identity Proof" id="identity">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Qualification*</label>
                      <input type="text" class="form-control"  name="qualification" placeholder="Please Enter Qualification"id="qualification">
                    </div>
                    
                    
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control"  id="country">
						<option value="">Select Country</option>
						 <?php
							if($rowCount > 0){
								while($row = mysql_fetch_assoc($result)){ 
									echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
								
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
                    </div>
                    
                    <div class="row">
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state">
						<option value="">Select Country First</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city">
						 <option value="">Select State First</option>
						</select>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                   <div class="row">

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Description*</label>
                      <textarea class="form-control" rows="5" id="comment"  placeholder="Please Enter Description"name="description"></textarea>
                    </div>
                   </div>
                 </div>
                 </div>
                 
					</div>
              
             
              <div class="mg-15">
                <button type="submit" id="submitnurse" name="submitnurses" class="btn btn-default submit" >Submit</button>
              </div>
              <div class="clearfix"></div>
            
            </form>
              </div>
             </div>   
                 
<!-- Nurses End--> 
 

<!-- Diagnostic Labs Start -->
<div class="item">
                <div class="heading">Diagnostic labs</div>
                <div class="content">
                  <form method="post" id="DiagnosticLab"  action="partner_insert.php">
              
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Name of diagnostic lab *</label>
                      <input type="text" class="form-control"  placeholder="Please Enter Name"name="namediagnostic">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Address*</label>
                      <input type="text"  class="form-control" name="address" placeholder="Please Enter Address" id="gender">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Contact No*</label>
                      <input type="text" class="form-control numeric" placeholder="+CountryCode-Number" name="contacts" id="age">
			      </div>
                  </div>
                  <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of incorporation*</label>
                      <input type="text" class="form-control dob" name="doi"  placeholder="Please Enter Date Of Incorporation"id="datepicker_diagnostic">
	
                    </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Registration number*</label>
                      <input type="text"  class="form-control" name="registrationno" placeholder="Please Enter Registration Number" id="phone">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No"> Accreditation and certifications*</label>
                      <input type="text"  class="form-control" name="accreditation" placeholder="Please Enter Accreditation and Certifications " id="email">
                    </div>
                    </div>
                    <div class="row">
                   <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification"> Head of the setup *</label>
                      <input type="text"  class="form-control" name="headdiagnostic" placeholder="Please Enter Head of Setup" id="password">
                    </div>
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Number of Branches*</label>
                      <input type="text"  class="form-control" name="branches" placeholder="Please Enter Number of Branches" id="identity">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Reach/branches *</label>
                 
					  
                      <select name="reachbranches" class="form-control branch" id="branch11">
						  <option value="">Select Branch</option>
						  <option value="Global">Global</option>
						  <option value="India">India</option>
						  <option value="Local">Local</option>
					  </select>
                      <div id="branch_errormsg11" style="display:none;font-weight:700;margin-top:5px;color:red">Please select branch</div>
					
                    </div>
				
					 </div>
                    
                    <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control"  id="country1">
						<option value="">Select Country</option>
						 <?php
							if($rowCount1 > 0){
								while($row1 = mysql_fetch_assoc($result1)){ 
									echo '<option value="'.$row1['country_id'].'">'.$row1['country_name'].'</option>';
								
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state1">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city1">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    </div>
                    
                    <div class="row">
                    
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email"> Home visit facility available or not</label>
                      <!--<input type="text"  class="form-control" name="specializedbranch" id="identity">-->
						<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
						<div class="questionary-box">
						<div class="questionary-opt">
						<div class="select-items specialty_radio">
                        <div class="clearfix"></div>
						</div>
						<div class="specialty_radio">
						<input class="speciality questionary-radio" name="specializedbranch" value="Yes" id="chkYes" type="radio">Yes&nbsp;                       
						<input class="speciality questionary-radio" name="specializedbranch" value="No" type="radio"> No
                        <span class="home" style="color: red; font-weight: 700;display:none">Please select This field</span>
						</div>
						</div>
						<div class="clearfix"></div>
						</div>
						</div>
						</div>
                    </div>
                    </div>
                  </div>
              <div class="mg-15">
                <button type="submit" id="diagnosticsubmit" name="submitdiagnostic" class="btn btn-default submit branch_submit">Submit</button>
              </div>
              <div class="clearfix"></div>
            </form>
               </div>
              </div>
<!-- Diagnostic Labs end -->			  
			  
<!--specialist doctors  start  -->        
<div class="item"> 
<div class="heading">specialists doctors</div>   
<div class="content">
<form method="post" id="specialistsdoctors" action="partner_insert.php">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="row">
	 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Doctor Name*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Name"name="fname" id="fname">   
                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Gender*</label>
                       <select class="form-control" name="gender" id="gender2">
       <option value="">Select </option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
     </select>
     <div id="spe_errormsg" style="display:none;font-weight:700;margin-top:5px">Please select gender</div>
   
                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Age*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Age"name="age" >   
                    </div>
</div>     
<div class="row">               
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of Birth*</label>
                      <input type="text" class="form-control dob" placeholder="Please Enter Date of Birth" name="dob" id="datepicker3">
           
    
                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Contact No*</label>
                      <input type="text" class="form-control" placeholder="+CountryCode-Number" name="phone" >
       
   
                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Email id*</label>
                      <input type="text" class="form-control" placeholder="Please Enter Email Id" name="email">
                    </div>
</div>                    
<div class="row">                    
	 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Identity Proof*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Identity Proof" name="identity" >
                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Specialization*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Specialization" name="companyname" >

                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Practicing Hospital Or Clinic*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Practicing Hospital Or Clinic" name="companyproduct" >
                    </div>
</div>                    
<div class="row">                    
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Designation*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Designation" name="designation" >
                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Qualification*</label>
                      <input type="text"  class="form-control" name="qualification" placeholder="Please Enter Qualification " id="qualification">
                    </div>
     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Website</label>
                      <input type="text"  class="form-control" name="website" placeholder="Please Enter Website "id="website">     
                    </div>
</div> 
<div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control"  id="country2">
						<option value="">Select Country</option>
						 <?php
							if($rowCount2 > 0){
								while($row2 = mysql_fetch_assoc($result2)){ 
									echo '<option value="'.$row2['country_id'].'">'.$row2['country_name'].'</option>';
								
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state2">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city2">
						 <option value="">Select state first</option>
						</select>
                    </div>
</div>                   
</div>
<div class="mg-15">
                <button type="submit" name="submit_special_doc" class="btn btn-default submit">Submit</button>
              </div>
<div class="clearfix"></div>
</form>
</div>  
</div>
<!--specialist doctors  end  -->        
          
<!-- Hospital Start -->
            <div class="item">
                <div class="heading">hospitals</div>
                <div class="content">
                  <form method="post" id="hospitals" action="partner_insert.php">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Name of Hospital *</label>
                      <input type="text" class="form-control" name="namehospital" placeholder="Please Enter Name"id="fname">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Address*</label>
                      <input type="text"  class="form-control" name="address" placeholder="Please Enter Address" id="gender">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Contacts*</label>
                      <input type="text" class="form-control numeric" name="contacts"     placeholder="+CountryCode-Number" id="age">
			      </div>
                  </div>
                  <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of Incorporation*</label>
                      <input type="text" class="form-control dob" name="doi" placeholder="Please Enter Date of Incorporation" id="datepicker_hospital">
	
                    </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Registration Number*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Registration Number"name="registrationno" id="phone">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Accreditation and Recognisation*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Accreditation and Recognisation " name="accreditation" id="email">
                    </div></div>
                    <div class="row">
                    
                   <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Head of the Hospital*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Head of Hospital " name="headhospital" id="password">

                    </div>
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Number of Branches*</label>
                      <input type="text"  class="form-control" name="branches"  placeholder="Please Enter Number Of Branches"id="identity">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Reach/branches *</label>
                 
					  
                      <select name="reachbranches" class="form-control b1" id="branch">
						  <option value="">Select Branch</option>
						  <option value="Local">Local</option>
						  <option value="Pan India">Pan India</option>
						  <option value="Global">Global</option>
					  </select>
                      <div id="branch1_errormsg" style="display:none;font-weight:700;margin-top:5px;color:red">Please select branch</div>
				
                    </div>
				</div>
                <div class="row">
                
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Specialized In Particular Branch</label>
                      <input type="text"  class="form-control" placeholder="Specialized In Particular Branch" name="specializedbranch1" id="identity">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control"  id="country3">
						<option value="">Select Country</option>
						 <?php
							if($rowCount3 > 0){
								while($row3= mysql_fetch_assoc($result3)){ 
									echo '<option value="'.$row3['country_id'].'">'.$row3['country_name'].'</option>';
								
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state3">
						<option value="">Select country first</option>
						</select>
                    </div>
                    </div>
                    <div class="row">
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city3">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    
                  </div>
                 </div>
            .
              <div class="mg-15">
                <button type="submit" name="submithospitals" class="btn btn-default submit branch2">Submit</button>
              </div>
              <div class="clearfix"></div>
              </div>
            </form>
                </div>
              </div>
<!-- Hospital End -->
            
<!-- Individual Suppliers start -->
    <div class="item">
                <div class="heading">Individual Supplier</div>
                <div class="content">
                   <form method="post" id="individualsuppliers" action="partner_insert.php">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                   
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">

	                      <label for="email">Name*</label>
                      <input type="text"  class="form-control" name="fullname" placeholder="Please Enter Name" id="identity">
			
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Email id*</label>
                      <input type="text" class="form-control" name="email" placeholder="Please Enter Email Id" id="email">
                    </div>
                   
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Phone No*</label>
                      <input type="text"class="form-control"     placeholder="+CountryCode-Number" name="phone" >
                    </div>
                    </div>
                    <div class="row">
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Identification Proof*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Identification Proof" name="identity" id="company">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Company Product*</label>
                      <input type="text" class="form-control" name="product" placeholder="Please Enter Company Product" id="product">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Website</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Website"name="website" id="website">
                    </div>
                    </div>
                    <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control country" id="country4">
						<option value="">Select Country</option>
						 <?php
							if($rowCount4 > 0){
								while($row4 = mysql_fetch_assoc($result4)){
									echo '<option value="'.$row4['country_id'].'">'.$row4['country_name'].'</option>';
									
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control state" id="state4">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control city" id="city4">
						 <option value="">Select state first</option>
						</select>
                    </div>
					</div>
                    <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Description*</label>
                      <textarea class="form-control" rows="5" id="comment" placeholder="Please Enter Description"name="description"></textarea>
                    </div>
                   </div>
                 </div>
					</div>
                 </div>
              
               </div>
              <div class="mg-15">
                <button type="submit" name="submitsupplier" class="btn btn-default submit gender_supplier" >Submit</button>
              </div>
              <div class="clearfix"></div>
              
            </form>
            </div>
               </div>        

<!-- Individual Suppliers end -->
<!-- Supplier Companies start -->
  <div class="item">
                <div class="heading">suppliers company</div>
                <div class="content">
                   <form method="post" id="supplier" action="partner_insert.php" novalidate="novalidate">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
				   
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Company Name*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Company Name" name="CompanyName" id="company">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Company Product*</label>
                      <input type="text" class="form-control" name="CompanyProduct" placeholder="Please Enter Product Name" id="product">
                    </div>
					
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Phone No*</label>
                      <input type="text" class="form-control" name="Phone"  placeholder="+CountryCode-Number" id="phone">
			         </div>
                     
                     </div>
					 <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Email id*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Email Id" name="Email" id="email">
                    </div>
					 
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Company Identification Number*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Company Identification Number "name="CompanyIdentification" >
                    </div>
                 
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of Incorporation*</label>
                      <input type="text" class="form-control dob" name="DOI"  placeholder="Please Enter Date of Incorporation"id="supplierdatepicker">


      
                    </div>
					
					 </div>
					
					<div class="row">
					
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="Country" class="form-control" id="country5">
						<option value="">Select Country</option>
						 <?php
							if($rowCount5 > 0){
								while($row5 = mysql_fetch_assoc($result5)){ 
									echo '<option value="'.$row5['country_id'].'">'.$row5['country_name'].'</option>';
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="State" class="form-control" id="state5">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="City" class="form-control" id="city5">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Address*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Address "name="Address" id="identity">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Website</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Website"name="Website" id="website">
                    </div>
					
                  </div>
                 </div>
             
              <div class="mg-15">
                <button type="submit"  name="submitsupplierscompany" class="btn btn-default submit gender_suppliercompany">Submit</button>
              </div>
              <div class="clearfix"></div>
              </div>
            </form>
                </div>
              </div>
<!-- Supplier Companies end -->
<!-- Fitness instructors Start-->
            <div class="item">
                <div class="heading">fitness instructors </div>
                <div class="content">
                   <form method="post" id="fitness" action="partner_insert.php">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                   
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Your Name*</label>
                      <input type="text"  class="form-control" name="fname" placeholder="Please Enter Name" id="fname">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Gender*</label>
                       <select class="form-control" id="gender6" name="gender" >
					  <option value="">Select </option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option></select>
                              <div id="fit_msgerror" style="display:none;font-weight:700;margin-top:5px">Please select gender</div>
		
              
					
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Age*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Age" name="age" id="age">
                    </div>
                    </div>
                    
                    <div class="row">
                    
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of Birth*</label>
                      <input type="text"  class="form-control dob"  placeholder="Please Ener Date of Birth"name="dob" id="fitnessdatepicker">
		        </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Phone No*</label>
                      <input type="text"  class="form-control"     placeholder="+CountryCode-Number" name="phone" id="phone">
					  
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Email Id*</label>
                      <input type="text" class="form-control" name="email"  placeholder="Please Enter Email Id"
                     id="email">
                    </div>
                    </div>
                    
                    <div class="row">
					
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control" id="country6">
						<option value="">Select Country</option>
						 <?php
							if($rowCount6 > 0){
								while($row6 = mysql_fetch_assoc($result6)){ 
									echo '<option value="'.$row6['country_id'].'">'.$row6['country_name'].'</option>';
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state6">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city6">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    </div>
                    
                     <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Identity Proof*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Identity Proof" name="identity" id="identity">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Qualification*</label>
                      <input type="text"  class="form-control" name="qualification" placeholder="Please Enter Qualification" id="qualification">
                    </div>		
                    
                    			
                  </div>
                 </div>
           
              <div class="mg-15">
                <button type="submit" name="submitfitness" class="btn btn-default submit">Submit</button>
              </div>
              <div class="clearfix"></div>
              </div>
            </form>
                </div>
              </div>
 <!-- Fitness instructors end-->
<!-- Yoga start-->
  <div class="item">
                      <div class="heading">Yoga, Gym, Meditation Centers</div>
                <div class="content">
                   <form method="post" id="yoga"   action="partner_insert.php">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Name of Yoga, Gym, Meditation Centers *</label>
                      <input type="text" class="form-control" placeholder="Please Enter Name" name="NameOfcenter" id="fname">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Address*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Address" name="Address" id="gender">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Contacts*</label>
                      <input type="text" class="form-control"     placeholder="+CountryCode-Number" name="Contacts" id="age">
			      </div>
                  </div>
                  <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of incorporation*</label>
                      <input type="text" class="form-control dob" placeholder="Please Enter Date of incorporation" name="DateOfIncorporation" id="datepickerdiagnostic">
	
                    </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Registration number*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Registration number" name="RegistrationNumber" id="phone">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No"> Accreditation and certifications*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Accreditation and certifications" name="AccreditationAndRecognisation" id="email">
                    </div>
                    </div>
                    <div class="row">
                   <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification"> Head of the setup *</label>
                      <input type="text"  class="form-control" placeholder="Please EnterHead of the setup" name="Headdiagnostic" id="password">
                    </div>
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Number of Branches*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Number of Branches"name="NumberOfBranches" id="identity">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Reach/branches *</label>
                 
					  
                      <select name="Branches" class="form-control yogabranch" id="branch11">
						  <option value="">Select Branch</option>
						  <option value="Global">Global</option>
						  <option value="India">India</option>
						  <option value="Local">Local</option>
					  </select>
                      <div id="branch_errormsg11" class="yoga_branch_error" style="display:none;font-weight:700;margin-top:5px;color:red">Please select branch</div>
		
                    </div>
                    </div>
                    <div class="row">
					
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="Country" class="form-control" id="country7">
						<option value="">Select Country</option>
						 <?php
							if($rowCount7 > 0){
								while($row7 = mysql_fetch_assoc($result7)){ 
									echo '<option value="'.$row7['country_id'].'">'.$row7['country_name'].'</option>';
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="State" class="form-control" id="state7">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="City" class="form-control" id="city7">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    </div>
                    <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email"> Home visit facility available or not</label>
                      <!--<input type="text"  class="form-control" name="specializedbranch" id="identity">-->
						<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
						<div class="questionary-box">
						<div class="questionary-opt">
						<div class="select-items specialty_radio">
                        <div class="clearfix"></div>
						</div>
						<div class="specialty_radio">
						<input class="speciality questionary-radio" name="SpecializedBranch" value="Yes" id="chkYes" type="radio">Yes&nbsp;                      
						<input class="speciality questionary-radio" name="SpecializedBranch" value="No" type="radio"> No
                        <span class="error2" style="color: red; font-weight: 700;display:none">Please select This field</span>
						</div>
						</div>
						<div class="clearfix"></div>
						</div>
						</div>
						</div>
                    </div>
                    
                    
                  </div>
                 </div>
            .
              <div class="mg-15">
                <button type="submit" name="submitYoga" id="yogasubmit"class="btn btn-default submit yoga_branch" >Submit</button>
              </div>
              <div class="clearfix"></div>
              </div>
            </form>
                </div>
              </div>
<!-- Yoga End -->
<!-- nutritionist & dietician start -->
            <div class="item">
                <div class="heading">nutritionist & dietician </div>
                <div class="content">
                   <form method="post" id="nutritionist" action="partner_insert.php">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Your Name*</label>
                      <input type="text"  class="form-control" name="fname" placeholder="Please Enter Name"id="fname">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Gender*</label>
                       <select class="form-control" id="gender7" name="gender">
					  <option value="">Select </option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					</select>
                    <div id="nut_msgerror" style="display:none;font-weight:700;margin-top:5px">Please select gender</div>
			
                    
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Age*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Age" name="age" id="age">
                    </div>
                    
                    </div>
                     <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of Birth*</label>
                      <input type="text"  class="form-control dob" placeholder="Please Enter Date of Birth"name="dob" id="nutripidatepicker">
	
                    </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Phone No*</label>
                      <input type="text"  class="form-control" name="phone"     placeholder="+CountryCode-Number" id="phone">
			

                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Email Id*</label>  
                      <input type="text"  class="form-control"  placeholder="Please Enter Email Id"name="email" id="email">
                    </div>
                   </div>
                    <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Identity Proof*</label>
                      <input type="text"  class="form-control" name="identity" placeholder="Please Enter Identity Proof" id="identity">
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Designation*</label>
                      <input type="text" class="form-control"  placeholder="Please Enter Designation"name="designation" id="designation">
                    </div>
					
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Qualification*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Qualification"name="qualification" id="qualification">
                    </div>
                    </div>
                    
                    <div class="row">
					
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control" id="country8">
						<option value="">Select Country</option>
						 <?php
							if($rowCount8 > 0){
								while($row8 = mysql_fetch_assoc($result8)){ 
									echo '<option value="'.$row8['country_id'].'">'.$row8['country_name'].'</option>';
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state8">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city8">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    </div>
 <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Description*</label>
                      <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                    </div>
                   </div>
                 </div>
                  </div>
                 </div>
           
              <div class="mg-15">
                <button type="submit" name="submitnutridiet" class="btn btn-default submit" >Submit</button>
              </div>
              <div class="clearfix"></div>
              </div>
            </form>
                </div>
              </div>
<!-- nutritionist & dietician end -->
        <!--    nutritionist & dietician end -->
        
<!-- physiotherapy centers start-->
            <div class="item">
                <div class="heading">physiotherapy centers</div>
                <div class="content">
                   <form method="post" id="physiotherapy"   action="partner_insert.php">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Name of Physiotherapy Centers *</label>
                      <input type="text" class="form-control" name="namediagnostic" placeholder="Please Enter Name of Physiotherapy Centers" id="fname">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Address*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Address" name="address" id="gender">
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Contacts*</label>
                      <input type="text" class="form-control" placeholder="+CountryCode-Number" name="contacts" id="age">
			      </div>
                  </div>
                  <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of Incorporation*</label>
                      <input type="text" class="form-control dob" name="doi" placeholder="Please Enter Date of Incorporation" id="physiotherapydatepicker">
		
                    </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Registration number*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Registration number" name="registrationno" id="phone">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No"> Accreditation and certifications*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Accreditation and certifications" name="accreditation" id="email">
                    </div>
                    </div>
                    <div class="row">
                   <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification"> Head of the setup *</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Head of the setup" name="headdiagnostic" id="password">
                    </div>
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Number of Branches*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Number of Branches" name="branches" id="identity">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Qualification">Reach/branches *</label>
                 
					  
                      <select name="reachbranches" class="form-control phy_branch" id="branch11">
						  <option value="">Select Branch</option>
						  <option value="Global">Global</option>
						  <option value="India">India</option>
                          
						  <option value="Local">Local</option>
					  </select>
                      <div id="branch_errormsg11" class="phy_branch_error" style="display:none;font-weight:700;margin-top:5px;color:red">Please select branch</div>
					
                    </div>
                    </div>
                    
                     <div class="row">
					
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control" id="country9">
						<option value="">Select Country</option>
						 <?php
							if($rowCount9 > 0){
								while($row9 = mysql_fetch_assoc($result9)){ 
									echo '<option value="'.$row9['country_id'].'">'.$row9['country_name'].'</option>';
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state9">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city9">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    </div>
                    
				<div class="row">
                    
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email"> Home visit facility available or not</label>
                      <!--<input type="text"  class="form-control" name="specializedbranch" id="identity">-->
						<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
						<div class="questionary-box">
						<div class="questionary-opt">
						<div class="select-items specialty_radio">
                        <div class="clearfix"></div>
						</div>
						<div class="specialty_radio">
						<input class="speciality questionary-radio" name="specializedbranch2" value="Yes" id="chkYes" type="radio">Yes&nbsp;                       
						<input class="speciality questionary-radio" name="specializedbranch2" value="No" type="radio"> No
                        <span class="error1" style="color: red; font-weight: 700;display:none">Please select This field</span>
						</div>
						</div>
						<div class="clearfix"></div>
						</div>
						</div>
						</div>
                    </div>
                    </div>
                 </div>
            
              <div class="mg-15">
                <button type="submit" name="submitphysiotherapy" id="submitphy" class="btn btn-default submit phy_branch_submit" >Submit</button>
              </div>
              <div class="clearfix"></div>
              </div>
            </form>
                </div>
              </div>
 <!--  physiotherapy centers  end -->
  <!-- Health Coach start -->
            <div class="item">
                <div class="heading">health coach</div>
                <div class="content">
                   <form method="post"  id="heathcoach" action="partner_insert.php">
                <div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="name">Your Name*</label>
                      <input type="text" class="form-control" name="fname" placeholder="Please Enter Name" id="fname">
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Gender*</label>
                      <select class="form-control" name="gender" id="gender9">
					  <option value=""> Select </option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
                      
					</select>
                    			

				
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Age*</label>
                      <input type="text"  class="form-control" placeholder="Please Enter Age" name="age" id="age">
                    </div>
                    </div>
                     <div class="row">
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Date of Birth*</label>
                      <input type="text"  class="form-control dob" placeholder="Please Enter Date of Birth" name="dob" id="healthdatepicker">
					  
		  
                    </div>
                     <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Phone No*</label>
                      <input type="text"  class="form-control"     placeholder="+CountryCode-Number"  name="phone" id="phone">
			
                    </div>
                    <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="Phone No">Email id*</label>
                      <input type="text"  class="form-control" placeholder=" Please Enter Email Id" name="email" id="email">
                    </div>
                    </div>
					 <div class="row">
					
					 <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">Country*</label>
                      <select name="country" class="form-control" id="country10">
						<option value="">Select Country</option>
						 <?php
							if($rowCount10 > 0){
								while($row10 = mysql_fetch_assoc($result10)){ 
									echo '<option value="'.$row10['country_id'].'">'.$row10['country_name'].'</option>';
								}
							}else{
								echo '<option value="">Country not available</option>';
							}
							?>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">State*</label>
                    <select name="state" class="form-control" id="state10">
						<option value="">Select country first</option>
						</select>
                    </div>
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="email">City*</label>
                      <select name="city" class="form-control" id="city10">
						 <option value="">Select state first</option>
						</select>
                    </div>
                    </div>
                     <div class="row">
					<div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 frm_txt">
                      <label for="idhel">Identification Proof*</label>
                      <input type="text"  class="form-control"  placeholder="Please Enter Identification Proof"name="idhel" id="">
                    </div>
                    
                    
                  </div>
                 </div>
          
              <div class="mg-15">
                <button type="submit" name="submithealth" id="submit" class="btn btn-default" >Submit</button>
              </div>
              <div class="clearfix"></div>
              </div>
            </form>
                </div>
              </div>
 <!-- Health Coach end-->

    </div>
     </div>
  </div>
</div>



</div>




<!--script for country-->
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#country1').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state1').html(html);
                    $('#city1').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state1').html('<option value="">Select country first</option>');
            $('#city1').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state1').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city1').html(html);
                }
            }); 
        }else{
            $('#city1').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country2').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state2').html(html);
                    $('#city2').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state2').html('<option value="">Select country first</option>');
            $('#city2').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state2').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city2').html(html);
                }
            }); 
        }else{
            $('#city2').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country3').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state3').html(html);
                    $('#city3').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state3').html('<option value="">Select country first</option>');
            $('#city3').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state3').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city3').html(html);
                }
            }); 
        }else{
            $('#city3').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country4').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state4').html(html);
                    $('#city4').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state4').html('<option value="">Select country first</option>');
            $('#city4').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state4').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city4').html(html);
                }
            }); 
        }else{
            $('#city4').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country5').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state5').html(html);
                    $('#city5').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state5').html('<option value="">Select country first</option>');
            $('#city5').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state5').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city5').html(html);
                }
            }); 
        }else{
            $('#city5').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#country6').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state6').html(html);
                    $('#city6').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state6').html('<option value="">Select country first</option>');
            $('#city6').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state6').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city6').html(html);
                }
            }); 
        }else{
            $('#city6').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#country7').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state7').html(html);
                    $('#city7').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state7').html('<option value="">Select country first</option>');
            $('#city7').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state7').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city7').html(html);
                }
            }); 
        }else{
            $('#city7').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#country8').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state8').html(html);
                    $('#city8').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state8').html('<option value="">Select country first</option>');
            $('#city8').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state8').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city8').html(html);
                }
            }); 
        }else{
            $('#city8').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#country9').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state9').html(html);
                    $('#city9').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state9').html('<option value="">Select country first</option>');
            $('#city9').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state9').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city9').html(html);
                }
            }); 
        }else{
            $('#city9').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#country10').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state10').html(html);
                    $('#city10').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state10').html('<option value="">Select country first</option>');
            $('#city10').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state10').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'countryData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city10').html(html);
                }
            }); 
        }else{
            $('#city10').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
$('input:radio[name=optradio]').click(function(){	
		var radioValue = $("input[name='optradio']:checked").val();
		if(radioValue=='Specialized'){
			$("#SpecializedType").show();
		}
		else{
		$("#SpecializedType").hide();
		}
	});
});
</script>

<!--valition script-->

   <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
 <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

  <!-- jQuery NurseForm Validation code -->
  <script>
  function CheckDateTime(){
	   var dateVar=$("#datepicker1").val();
	  if(dateVar!='')
			$("#datepicker1-error").hide();
		else
			$("#datepicker1-error").show();
	  }
  
 $(document).ready(function(){
	 	
	
	 $("#datepicker1").blur(function(){
		  setTimeout(CheckDateTime,500);
	 });
	 
	  $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

     $.validator.addMethod("custome_names", function(value, element){ 
      return this.optional(element) || /^[a-zA-z-@.,():"' ]*$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");
	
	  $.validator.addMethod("contact_number", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
	
    $("#nurseform").validate({
      rules: {
       
        fname:{
          required: true,
		  custome_names:true 
        },
		age:{ required: true,
		digits:true,
		max:100,
			},
			country:{required:true},
			state:{required:true},
			
		email:{
          required: true,   
		  custome_email:true  
        },
		qualification:{
          required: true,
		  custome_names:true
        },
		identity:
		{required:true,
		},
		dob:{required:true},
		gender:
		   {
			required:true
			},
		phone:
		{
			 required: true,
            contact_number:true
		}
		
      },
      messages:{
        
        fname: {
          required: "<strong>Please enter your  name *</strong>",
		  custome_names:"<strong>Please enter valid  name *</strong>"
        },
		age:{          required: "<strong>Please enter your  age *</strong>",
				    digits: "<strong>Please enter only digits *</strong>",
					max:"<strong>Please enter valid age value *</strong>"
			},
			
			country:{ required: "<strong>Please select country *</strong>"},
			state:{ required: "<strong>Please select state *</strong>"},


			
		email:{
           required:"<strong>Please enter email id *</strong>",
           custome_email:"<strong>Please enter valid email id *</strong>"
        },
		phone:{
           required:"<strong>Please enter contact number *</strong>",
		  contact_number:"<strong>Please enter valid contact number*</strong>"

        },
		qualification:
		{
			          required: "<strong>Please enter qualification *</strong>",
					  custome_names:"<strong>Please enter valid qualification *</strong>"
		},
		dob:{	
				          required: "<strong>Please enter date of birth *</strong>",
			},
			gender:
			{
				required:"<strong>Please select gender </strong>",
			},
		identity:{    required: "<strong>Please enter identity *</strong>",
			}
		
		
        
      }
    });
  });
 </script>

 
 <!--jquery dignosticLab Form Validation !-->
 <script>
   function CheckDateTime1(){
	   var dateVar1=$("#datepicker_diagnostic").val();
	  if(dateVar1!='')
			$("#datepicker_diagnostic-error").hide();
		else
			$("#datepicker_diagnostic-error").show();
	  }
  
   $(document).ready(function(){
	   
	    $("#datepicker_diagnostic").blur(function(){
		  setTimeout(CheckDateTime1,500);
	 });
	   
	    $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");
	
	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");	


    $("#DiagnosticLab").validate({
      rules: {
       
        namediagnostic:
		{
          required: true,
        },
		country:
		{required:true
			},
			state:{
				required:true
				},
			
		address:
		{ 
		   required: true,
		  },
							
		contacts:
		{ 
		  required: true,
          custome_phone:true
		},
		registrationno:
			{
			required:true,
			},
		  
				doi:{required:true},
				reachbranches:{required:true},
		branches:
				{
					required:true,
			  		digits:true
				}
		
      },
      messages:{
        
       	 namediagnostic: 
		 {
			  required: "<strong>Please enter   name *</strong>",
        	},
			address:
			{ 
			  required: "<strong>Please enter   address *</strong>",
			},	
			country:{
							  required: "<strong>Please select country*</strong>",

				},	
				state:{							  required: "<strong>Please select state*</strong>",
},
				
			contacts:{
			   	required:"<strong>Please enter  contact number *</strong>",
				custome_phone:"<strong>Please enter valid contact number*</strong>"
				        },
			registrationno:{
			    required:"<strong>Please enter  registration number *</strong>",
			},
			
					doi:{	
					 required: "<strong>Please enter  Date of incorporation *</strong>",

					},
					reachbranches:{
						required:"<strong>Please select Branches</strong>",
					},
			branches:{	
					 required: "<strong>Please enter  branches number *</strong>",
					 digits: "<strong>Please enter only digits *</strong>"
					}
		
      }   
    });
  });
 </script>
 
 <!--SpecializedDoctor jquery code-->
  <script>
   function CheckDateTime2(){
	   var dateVar=$("#datepicker3").val();
	  if(dateVar!='')
			$("#datepicker3-error").hide();
		else
			$("#datepicker3-error").show();
	  }
  
    $(document).ready(function(){
			 $("#datepicker3").blur(function(){
		  setTimeout(CheckDateTime2,500);
	 });
		
		 $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

     $.validator.addMethod("custome_names", function(value, element){ 
      return this.optional(element) || /^[a-zA-Z.,:""' ]*$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");

  $.validator.addMethod("website", function(value, element){ 

      return this.optional(element) || /^(www\.)[A-Za-z0-9_-]+\.+[A-Za-z0-9.\/%&=\?_:;-]+$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");
	
	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
	 $.validator.addMethod("qualification", function(value, element){ 
      return this.optional(element) ||/^[a-zA-z ,:-.]*$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");


    $("#specialistsdoctors").validate({
      rules: {
       
        fname:{
          required: true,
		  custome_names:true
        },
		gender:{          required: true,
},
country:{required:true},
	state:{required:true},
	
		age:{
          required: true,
		  digits:true,
		  max:100
        },
		dob:{
          required: true,
		
        },			
		phone:
		{ required: true,
        custome_phone:true
		},
		  email:{
          required: true,
          custome_email:true
        },
		password:{
          required: true
        },
		identity:{
          required: true,
        },
		company:{
          required: true
        },
		product:{
          required: true
        },
		
		location:{
          required: true
        },
		website:{
			website:true},
			
		qualification:
		{
			 required: true,
			 custome_names:true
     
		}
      },
      messages:{
        
        fname: {
          required: "<strong>Please enter name*</strong>",
		  custome_names:"<strong>Please enter valid name</strong>"
        },
		country:{
			          required: "<strong>Please select country*</strong>",
},
		state:{
			          required: "<strong>Please select state*</strong>",
},

	
		gender:{
			required:"<strong>Please select gender*</strong>"
			},
		age:{
			required:"<strong>Please enter age*</strong>",
			digits:"<strong>Please enter age in digits *</strong>",
			max:"<strong>Please enter valid age*</strong>"

		},
		dob:
		{
			required:"<strong>Please select date</strong>"   
		},
		phone:{
           required:"<strong>Please enter  contact number *</strong>",
          custome_phone:"<strong>Please enter valid contact number *</strong>"

        },
		email:{
           required:"<strong>Please enter email id *</strong>",
           custome_email:"<strong>Please enter valid email id *</strong>"
        },
		password:
		{
			          required: "<strong>Please enter password *</strong>"

		},
		
		
		identity:
		{
			          required: "<strong>Please enter your identity *</strong>",


		},
		company:
		{
			          required: "<strong>Please enter company *</strong>"

		},
		product:
		{
			          required: "<strong>Please enter product *</strong>"

		},
       
		location:
		{
			          required: "<strong>Please enter location *</strong>"

		},
		qualification:
		{
			          required: "<strong>Please enter qualification *</strong>",
					  custome_names:"<strong>Please enter valid value *</strong>"

		},
		website:
		{ 
			website:"<strong>please enter valid url</strong>"
			}
      }   
    });
  });
 </script>
 
 <!--hospital jquery code-->
<script>
 function CheckDateTime3(){
	   var dateVar3=$("#datepicker_hospital").val();
	  if(dateVar3!='')
			$("#datepicker_hospital-error").hide();
		else
			$("#datepicker_hospital-error").show();
	  }
$(document).ready(function(){
	
	 $("#datepicker_hospital").blur(function(){
		  setTimeout(CheckDateTime3,500);
	 });
	 $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
    
    $("#hospitals").validate({ 
      rules: {
       
        namehospital:{
          required: true,

        },
		reachbranches:{required:true},
		country:{required:true},
		state:{required:true},
		
		
		address:{
          required: true,
		  
        },
		contacts:
		{ required: true,
         custome_phone:true
		},
		doi:{
          required: true,
        },			
		
		  
		registrationno:{
          required: true,
        },
		
		headhospital:{
          required: true
        },
		branches:{
          required: true,
          digits:true
        }
      },
      messages:{
        
         namehospital: {
          required: "<strong>Please enter Hospital name *</strong>",
		  
        },
		country:{
			          required: "<strong>Please select country*</strong>",

			},
			state:{			          required: "<strong>Please select state*</strong>",
},
			
		address:{
			required:"<strong>Please enter address</strong>",
		},
		reachbranches:{
						required:"<strong>Please select Branches</strong>",

			},
		contacts:{
           required:"<strong>Please enter  contact number *</strong>",
           custome_phone:"<strong>Please enter  valid contact number *</strong>"

        },
		doi:
		{
			required:"<strong>Please select date *</strong>",
		},
		
		registrationno:{
           required:"<strong>Please enter Registraion Number*</strong>",
        },
		
		headhospital:
		{
			          required: "<strong>Please enter headhospital *</strong>"

		},
		branches:
		{
			          required: "<strong>Please enter branches *</strong>",
			                   digits:"<strong>Please enter only digits *</strong>"


		}
      }   
    });
  });
 </script>
 <!--individual suppliers-->
 <script>


	
	
	
 $(document).ready(function(){
	 
	  $.validator.addMethod("custome_email", function(value, element){ 
 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

    
	
	$.validator.addMethod("custome_website", function(value, element){ 
      return this.optional(element) || /^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");
	

 
	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+- ]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");  


    $("#individualsuppliers").validate({
      rules: {
       
        fullname:
		{
          required: true,
        },
		age:
		{ 
		required: true,
		digits:true,
		max:100
			},
	  country:{required:true},
	  state:{required:true},
	  
		email:
		{
          required: true,
		  custome_email:true
        },
		 qualification:
		 {
          required: true,
		  custome_names:true
        },
		identity:
		{
			required:true,
		},
		dob:
			{
			required:true
			},
		company:
			{
				required:true,
			},
		product:
				{
					required:true,
		 		 },
		phone:
		{
		 required: true,
		 custome_phone:true
		},
		website:{
			custome_website:true}
		
      },
      messages:{
        
        fullname: {
          required: "<strong>Please enter name *</strong>",
        },
		country:{
			          required: "<strong>Please select country *</strong>",

			},
			state:{			          required: "<strong>Please select state *</strong>",
},
			
		age:{   
		          required: "<strong>Please enter your  age *</strong>",
				    digits: "<strong>Please enter only digits *</strong>",
					max:"<strong>Please enter valid age *</strong>"


			},
		email:{
           required:"<strong>Please enter email id *</strong>",
           custome_email:"<strong>Please enter valid email id *</strong>"
        },
		phone:{
           required:"<strong>Please enter  contact number *</strong>",
		   custome_phone:"<strong>Please enter valid contact number*</strong>"
        },
		qualification:
		{
			          required: "<strong>Please enter qualification *</strong>",
					  custome_names:"<strong>Please enter valid value *</strong>"
		},
		dob:{	
			},
		company:
			{  		required: "<strong>Please enter Identification Proof *</strong>",
			},
		product:
			{		 required: "<strong>Please enter product *</strong>",
			},
			website:
			{
				custome_website:"<strong>Please enter valid url *</strong>"
				},
			
		identity:
		{    required: "<strong>Please enter Identification Proof *</strong>",
			}
		
		
        
      }   
    });
  });
 </script>
 
  <!--suppliers company jquery code-->

<script>
 function CheckDateTime4(){
	   var dateVar=$("#supplierdatepicker").val();
	  if(dateVar!='')
			$("#supplierdatepicker-error").hide();
		else
			$("#supplierdatepicker-error").show();
	  }
  

	
	
	

 $(document).ready(function(){
	 
	  $("#supplierdatepicker").blur(function(){
		  setTimeout(CheckDateTime4,500);
	 });
	
    $("#supplier").validate({
      rules: {
       
        CompanyName:
		{
          required: true,
        },
		CompanyProduct:
		{
		 required: true,
		},
		Phone:
		{
		required: true,
		contact_number:true
		},
		Email:
		{
		required:true,
		custome_email:true
		},
		CompanyIdentification:
		{
			required:true
		},
		DOI:
		{
			required:true
		},
		Country:
		{			
		  required: true,
		 },
		 State:
		 {
		  required:true
		  },
		  Address:
		  {
		  required:true
		  },
		  Website:
		  {
		   website:true
		  }
		
		
      },
      messages:{
        
        CompanyName: 
		{
          required: "<strong>Please enter CompanyName *</strong>",
        },
		CompanyProduct:
		{
		required: "<strong>Please enter CompanyProduct *</strong>",
		},
		Phone:
		{
		required: "<strong>Please enter Phone Number *</strong>",	
		contact_number:"<strong>Please enter valid value *</strong>"			
		},
		Email:
		{
			required:"<strong>Please enter Email Id *</strong>",
			custome_email:"<strong>Please enter valid email Id *</strong>"
		},
		CompanyIdentification:
		{
			required:"<strong>Please enter CompanyIdentification *</strong>"
		},
		DOI:
		{
			required:"<strong>Please enter Date of Incorporation *</strong>"
		},
		Country:
		{
			required:"<strong>Please select Country *</strong>"
		},
		State:
		{
			required:"<strong>Please select State *</strong>"
		},
		Address:
		{
			required:"<strong>Please enter Address *</strong>"
		},
		Website:
		{
			website:"<strong>Please enter valid website *</strong>"
		}
		
		
		
        
      }   
    });
  });
 </script>
 

 <!--fitness jquery code-->
 <script>
  function CheckDateTime5(){
	   var dateVar=$("#fitnessdatepicker").val();
	  if(dateVar!='')
			$("#fitnessdatepicker-error").hide();
		else
			$("#fitnessdatepicker-error").show();
	  }
  

	
	
	
 
$(document).ready(function(){
	
	 $("#fitnessdatepicker").blur(function(){
		  setTimeout(CheckDateTime5,500);
	 });
	 $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

     $.validator.addMethod("custome_name", function(value, element){ 
      return this.optional(element) || /^[a-zA-Z ]*$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");
	
	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
	
    $("#fitness").validate({
      rules: {
       
        fname:{
          required: true,
		  custome_name: true
        },
		country:{required:true},
		state:{required:true},
		
		age:{
          required: true,
		  digits:true,
		  max:100
        },
		gender:
		{
			required:true,},
		dob:{
          required: true
        },			
		phone:
		{ required: true,
          custome_phone:true
		},
		  email:{
          required: true,
		custome_email: true
        },
		password:{
          required: true
        },
		identity:{
          required: true,
        },
		company:{
          required: true
        },
		product:{
          required: true
        },
		designation:{
          required: true,
		  custome_name: true
        },
		location:{
          required: true
        },
		qualification:
		{
			 required: true,
			 custome_names:true

     
		}
      },
      messages:{
        
        fname: {
          required: "<strong>Please enter your  name *</strong>",
		  custome_name: "<strong>Please enter only alphabets *</strong>"
        },
		country:{   
		
		  required: "<strong>Please select country *</strong>",
},
state:{		  required: "<strong>Please select state *</strong>",

	},
		gender:{
			required:"<strong>Please select gender</strong>"},
		age:{
			required:"<strong>Please enter age</strong>",
			digits:"<strong>Please enter age in digits *</strong>",
			max:"<strong>Please enter  valid age*</strong>"
		},
		dob:
		{
			required:"<strong>Please select date</strong>"
		},
		phone:{
          required:"<strong>Please enter  contact number *</strong>",
		   custome_phone:"<strong>Please enter valid contact number *</strong>"

        },
		email:{
			required:"<strong>Please enter email</strong>",
		   custome_email:"<strong>Please enter valid email id *</strong>"
        },
		password:
		{
			          required: "<strong>Please enter password *</strong>"

		},
		identity:
		{
			          required: "<strong>Please enter identity *</strong>",
					

		},
		company:
		{
			          required: "<strong>Please enter company *</strong>"

		},
		product:
		{
			          required: "<strong>Please enter product *</strong>"

		},
        designation:
		{
			          required: "<strong>Please enter designation *</strong>",
					


		},
		location:
		{
			          required: "<strong>Please enter location *</strong>"

		},
		qualification:
		{
			          required: "<strong>Please enter qualification *</strong>",
					  custome_names:"<strong>Please enter valid value</strong>"


		}
      }   
    });
  });
 </script>

 <!--yoga-->
 
 <script>
  function CheckDateTime6(){
	   var dateVar=$("#datepickerdiagnostic").val();
	  if(dateVar!='')
			$("#datepickerdiagnostic-error").hide();
		else
			$("#datepickerdiagnostic-error").show();
	  }
  

	
	
	 
 
$(document).ready(function(){
	$("#datepickerdiagnostic").blur(function(){
		  setTimeout(CheckDateTime6,500);
	 });
	 $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

      
	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
	
	
    $("#yoga").validate({
      rules: {
       NameOfcenter:
	   {
		required:true
		},
		Address:
		{
		required:true
		},
		Contacts:
		{
		required:true
		},
		DateOfIncorporation:
		{
		required:true
		},
		RegistrationNumber:
		{
		required:true
		},
		
		NumberOfBranches:
		{
		required:true
		},
		Branches:
		{
		required:true
		},
		Country:
		{
		required:true
		},
		State:
		{
		required:true
		}
       		
      },
      messages:{
		  NameOfcenter:
		  { 
		   required: "<strong>Please enter  name *</strong>",
		  },
        Address:
		{
			required:"<strong>Please enter address *</strong>"
		},
		Contacts:
		{
		required:"<strong>Please enter Contacts *</strong>"
		},
		DateOfIncorporation:
		{
		required:"<strong>Please enter DateOfIncorporation *</strong>"
		},
		RegistrationNumber:
		{
		required:"<strong>Please enter RegistrationNumber *</strong>"
		},
		
		NumberOfBranches:
		{
			required:"<strong>Please enter NumberOfBranches *</strong>"
		},
		Branches:
		{
		required:"<strong>Please select Branches *</strong>"
		},
		Country:
		{
		required:"<strong>Please select Country</strong>"
		},
		State:
		{
		required:"<strong>Please select State</strong>"
		}
       
		
      }   
    });
  });
 </script>

 
 <!-- nutritionist -->
 <script>
  function CheckDateTime7(){
	   var dateVar=$("#nutripidatepicker").val();
	  if(dateVar!='')
			$("#nutripidatepicker-error").hide();
		else
			$("#nutripidatepicker-error").show();
	  }
  

	
	
	 $("#nutripidatepicker").blur(function(){
		  setTimeout(CheckDateTime7,500);
	 });
 
  $(document).ready(function(){ $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

     $.validator.addMethod("custome_name", function(value, element){ 
      return this.optional(element) || /^[a-zA-Z ]*$/i.test(value); 
    }, "<strong>Please enter only alphabets *</strong>");
	 
	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
	
    $("#nutritionist").validate({
      rules: {
       
        fname:{
          required: true,
		  custome_name:true
        },
		country:{required:true},
		state:{required:true},
		
		gender:{required:true},
		age:{
          required: true,
		  digits:true
        },
		dob:{
          required:true
        },			
		phone:
		{ required: true,
          custome_phone:true
		},
		  email:{
          required: true,
		custome_email:true
        },
		password:{
          required: true
        },
		identity:{
          required: true
        },
		company:{
          required: true
        },
		product:{
          required: true
        },
		designation:{
          required: true,
        },
		location:{
          required: true,
		  custome_name:true
        },
		qualification:
		{
			 required: true,
			 custome_names:true
     
		}
      },
      messages:{
        
        fname: {
          required: "<strong>Please enter your  name *</strong>",
		  custome_name: "<strong>Please enter only alphabets *</strong>"
        },
		country:{
			required: "<strong>Please select country *</strong>",
       },
	state:{
	required: "<strong>Please select state *</strong>",
	},
	
		age:{
			required:"<strong>Please enter age</strong>",
			digits:"<strong>Please enter age in digits *</strong>"
		},
		gender:{
			required:"<strong>Please select gender</strong>"},
		dob:
		{
			required:"<strong>Please select date</strong>"
		},
		phone:{
            required:"<strong>Please enter contact number *</strong>",
		    custome_phone:"<strong>Please enter valid contact number *</strong>"

        },
		email:{
           required:"<strong>Please enter  email id *</strong>",
		   custome_email:"<strong>Please enter valid email id *</strong>"
        },
		password:
		{
			          required: "<strong>Please enter password *</strong>"

		},
		identity:
		{
			          required: "<strong>Please enter identity *</strong>"

		},
		company:
		{
			          required: "<strong>Please enter company *</strong>"

		},
		product:
		{
			          required: "<strong>Please enter product *</strong>"

		},
        designation:
		{
			          required: "<strong>Please enter designation *</strong>"
					  		 


		},
		location:
		{
			          required: "<strong>Please enter location *</strong>"
					  		 


		},
		qualification:
		{
			          required: "<strong>Please enter qualification *</strong>",
					  custome_names:"<strong>Please enter valid value *</strong>"
					  		  


		}
      }   
    });
  });
 </script>

 
 <!--physiotherapist-->
 <script>
  function CheckDateTime8(){
	   var dateVar=$("#physiotherapydatepicker").val();
	  if(dateVar!='')
			$("#physiotherapydatepicker-error").hide();
		else
			$("#physiotherapydatepicker-error").show();
	  }
  

	
	
	
 $(document).ready(function(){
	  $("#physiotherapydatepicker").blur(function(){
		  setTimeout(CheckDateTime8,500);
	 });
	 
	  $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
	
	
    $("#physiotherapy").validate({
      rules: {
       
        namediagnostic:{
          required: true,
		
        },
		address:
		{
			required: true,
			},
			country:{
				required:true},
				state:{required:true},
				
		
		doi:{
          required:true
        },			
		contacts:
		{ required: true,
         custome_phone:true
		},
		registrationno:
		{required: true,
		  
		},
		
			branches:
			{
				required:true,
				digits:true
			},
		 
		
		identity:{
          required: true
        },
		
		
		location:{
          required: true,
		  

        },
		reachbranches:{required:true}
		
      },
      messages:{
        
        namediagnostic: {
          required: "<strong>Please enter Name of physiotherapy centers </strong>",
		 
        },
		country:{
			          required: "<strong>Please select country</strong>",

			},
			state:
			{
							          required: "<strong>Please select state</strong>",
},
			
		address:
		{   required: "<strong>Please enter your  address </strong>",
		 
		},
		
		doi:
		{
			required:"<strong>Please select date</strong>"
		},
		reachbranches:{
			required:"<strong>Please select branches</strong>"
			},
		contacts:{
          required:"<strong>Please enter contact number</strong>",
		  custome_phone:"<strong>Please enter valid contact number</strong>"             

        },
		registrationno:
		{required:"<strong>Please enter registrationno.</strong>",
			
		},
		
		branches:
		{required:"<strong>Please enter branches</strong>",
			digits:"<strong>Please enter  digits </strong>"
		},
		
		identity:
		{
			          required: "<strong>Please enter identity </strong>"

		},
		
        
		location:
		{
			          required: "<strong>Please enter location </strong>",
					  
		}
      }   
    });
  });
 </script>
 
 <!--health coach-->
 <script>
  function CheckDateTime10(){
	   var dateVar=$("#healthdatepicker").val();
	  if(dateVar!='')
			$("#healthdatepicker-error").hide();
		else
			$("#healthdatepicker-error").show();
	  }
  

	
	
	 
$(document).ready(function(){
	$("#healthdatepicker").blur(function(){
		  setTimeout(CheckDateTime10,500);
	 });
	
	 $.validator.addMethod("custome_email", function(value, element){ 
      return this.optional(element) || /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/i.test(value); 
    }, "<strong>Please enter email in proper format *</strong>");

	  $.validator.addMethod("custome_phone", function(value, element){ 	  
      return this.optional(element) ||/^[0-9+-]*$/i.test(value);  
    }, "<strong>Please enter valid phone no *</strong>");
	
	
	
    $("#heathcoach").validate({
      rules: {
       
        fname:{
          required: true,
        },
		gender:{required:true},
		country:{required:true},
		state:{required:true},
		
		age:{
          required: true,
		  digits:true
        },
		dob:{
          required: true
        },			
		phone:
		{ required: true,
		custome_phone:true
          
		},
		  email:{
          required: true,
		  custome_email:true
        },
		
		idhel:
		{required:true,
		
			}
      },
      messages:{
        
        fname: {
          required: "<strong>Please enter your  name *</strong>",
		 
        },
		country:{          required: "<strong>Please select country *</strong>",
},
state:{required: "<strong>Please select state *</strong>",},
		gender:{
			required:"<strong>Please select gender *</strong>"},
		age:{
			required:"<strong>Please enter age</strong>",
			digits:"<strong>Please enter age in digits *</strong>"
		},
		dob:
		{
			required:"<strong>Please select date</strong>"
		},
		phone:{
        required:"<strong>Please enter contact number *</strong>",
		 custome_phone:"<strong>Please enter valid contact number *</strong>"           

        },
		email:{
           required:"<strong>Please enter  email id *</strong>",
		   custome_email:"<strong>Please enter valid email id *</strong>"
        },
			
		idhel:
		{required: "<strong>Please enter Identification Proof *</strong>",
					   custome_name: "<strong>Please enter valid  Identification Proof *</strong>"
			}
      }   
    });
  });
 </script>
 

<script>
$(document).ready(function(e) {
	
    $(".branch_submit").click(function(){
		
		if($(".branch").val()=='0')
		{
		$("#branch_errormsg11").show();
		}
		else
		{
					$("#branch_errormsg11").hide();

		}
		});
		   $(".branch2").click(function(){
		
		if($(".b1").val()=='0')
		{
		$("#branch1_errormsg").show();
		}
		else
		{
					$("#branch1_errormsg").hide();

		}
		});
		 $(".gender_supplier").click(function(){
		
		if($(".g1").val()=='0')
		{
		$("#gender2errormsg").show();
		}
		else
		{
					$("#gender2errormsg").hide();

		}
		});
		 $(".gender_suppliercompany").click(function(){
		
		if($("#gender5").val()=='0')
		{
		$(".sup_comp_error").show();
		}
		else
		{
					$(".sup_comp_error").hide();

		}
		});
		$(".yoga_branch").click(function(){
		
		if($(".yogabranch").val()=='0')
		{
		$(".yoga_branch_error").show();
		}
		else
		{
					$(".yoga_branch_error").hide();

		}
		});
		$(".phy_branch_submit").click(function(){
		
		if($(".phy_branch").val()=='0')
		{
		$(".phy_branch_error").show();
		}
		else
		{
					$(".phy_branch_error").hide();

		}
		});
});
</script>
<!--checkbox validation-->
<script>
$(document).ready(function(e) {
	$("input[type=radio][name=specializedbranch]").click(function(){
		$(this).siblings('span').hide();
	})
	$("#diagnosticsubmit").click(function(){
	 
	if(!$("input[name=specializedbranch]").is(':checked'))
	    {
			$(".home").show();  
	
		}
		else
		{
			$(".home").hide();}
		});
		
	});
</script>

<script>
$(document).ready(function(e) {
	$("input[type=radio][name=SpecializedBranch]").click(function(){
		$(".error2").hide();
	})
    $("#yogasubmit").click(function(){
	if(!$("input[name=SpecializedBranch]").is(':checked'))
		{
			$(".error2").show();
		}
		else
		{
			$(".error2").hide();
			}
	});
});
</script>


<script>
$(document).ready(function(e) {
	$("input[type=radio][name=specializedbranch2]").click(function(){
		$(".error1").hide();
	})
    $("#submitphy").click(function(){
	if(!$("input[name=specializedbranch2]").is(':checked'))
		{
			$(".error1").show();
		}
		else
		{
			$(".error1").hide();
			}
	});
});
</script>
<!--newsletter validadaiton-->
<script>
$(document).ready(function(){
	$("#news_letter_submit").click(function(){
		var isvalid=true;
		var pattern_url=/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if(!$("#news_letter_email").val().match(pattern_url))
		{
			alert("please enter valid email");
			isvalid=false;
		}
		return isvalid;
				
		});
	
	
	});
</script>
<!-- nurse datepicker-->
			  <script>
	$(document).ready(function(e) {
		$("#datepicker1").datepicker({
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

  <!-- diagnostic datepicker-->

    <script>
  $(document).ready(function(e) {
    $( "#datepicker_diagnostic" ).datepicker({
		shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" 
    
   });
  } );
  </script>
  <!--SPECIALISTS DOCTORS datepicker-->
     <script>
 $(document).ready(function(e) {
  $("#datepicker3").datepicker({maxDate:new Date(),
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
  
    <!--HOSPITALS datepicker-->

    				  <script>
  $(document).ready(function(e) {
    

    $( "#datepicker_hospital" ).datepicker({
			shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" 
    
   });
  } );
  </script>

<!-- SUPPLIER datepicker-->
   <script>
  $(document).ready(function(e) {
    $( "#supplierdatepicker" ).datepicker({
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
 
 <!--Fittness datepicker-->
 
  <script>
  $( function() {
    $( "#fitnessdatepicker" ).datepicker({
		shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" 
    
   });
  } );
  </script>
   <!--yoga datepicker-->

  				  <script>
  $( function() {
    $( "#datepickerdiagnostic" ).datepicker({
			shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" 
    
   });
  } );
  </script>
  			<!--NUTRITIONIST & DIETICIAN datepicker-->
            	   <script>
  $( function() {
    $( "#nutripidatepicker" ).datepicker({
		shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" 
    
   });
  } );
  </script>
  <!--physiotherapydatepicker-->  
  	 <script>
  $( function() {
    $( "#physiotherapydatepicker" ).datepicker({
			shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016" 
   });
  } );
  </script>
  <!--healthcoach datepicker-->  
  
  				   <script>
  $( function() {
    $( "#healthdatepicker" ).datepicker({
			shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016"  
    
   });
  } );
  </script>
				
            
  
    <?php include('footer.php'); ?>