<?php
include("config.php"); 
?>
<script type="text/javascript" src="js/hello.all.js"></script>
<div id="fb-root"></div>
<script type="text/javascript">
    function showerror() {
        $('#error').show().delay(3000).fadeOut(3500);
    };
</script>

<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({
        appId: '334485956899980',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

    (function () {
        var e = document.createElement('script');
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
    }());
    function fb_login() {
        FB.login(function (response) {
            if (response.authResponse) {
                FB.api(
                  '/me',
                  'GET',
                  { "fields": "first_name,last_name,name,email,picture{url}" },
                  function (response) {
					  console.log(response);
					  var Email = response.email;
                      var FullName = response.name;
					  var SocialMediaId=response.id;
                      var ProfileImage = 'http://graph.facebook.com/'+response.id+'/picture?type=large';
					  var SocialMediaType='Facebook';
			          InsertUpdateUser(FullName,Email,ProfileImage,SocialMediaId,SocialMediaType);
                  });
               
            } else {
            }
        },
        {
            scope: 'public_profile,publish_actions,email,user_birthday,user_work_history,user_hometown,user_education_history,user_location'
        });
    }
	function InsertUpdateUser(FullName,Email,ProfileImage,SocialMediaId,SocialMediaType){
		if(FullName && SocialMediaId && SocialMediaType)
		{
		 $.ajax({
                          type: "POST",
                          url: "social_data.php",
                          data: 'Email='+Email+'&FullName='+FullName+'&ProfileImage='+ProfileImage+'&SocialMediaId='+SocialMediaId+'&SocialMediaType='+SocialMediaType,
                          success: function (res) {
							  if(parseInt(res)=='0'){
								   window.location.href='profile.php';
							  }
							  else if(parseInt(res)=='1'){
								   window.location.href='profile.php';
							  }
							  else if(parseInt(res)=='-1'){
								  $("#loginError").text("Server error! Please contact admin");
							  }
							   else if(parseInt(res)=='2'){
								     $("#loginError").text("Your account is disabled by Administrator of this website. Please contact.");
							  }
							   else if(parseInt(res)=='3'){
								     $("#loginError").text("You are not registerd with us till now .Please register with us");
							  }
							  else if(parseInt(res)=='4'){
								     $("#loginError").text("You are Already Register with this Email Id. Try another");
							  }
							  else{
							   $("#loginError").text("Invalid username or password");
							  }
							  // $('#myModal').modal('hide');
                          },
						  error:function(reason){
							  console.log(reason);
							  }
					  });
                  }
	}
	
</script>

<script>
$(document).ready(function(){
	$("#loginError").text('');
});
    function loginData() {
			var Password = $("#loginPassword").val();
            var EmailOrPhone = $("#loginEmail").val();
            
        if(EmailOrPhone == "" || Password=="") {
           $("#loginError").text("Please Provide a valid Email/Mobile and Password");
            return;
        }
		//Begin Check and validate Either of email or mobile
		var IsEmail=false;
		var IsEmailOrPhone=false;
		
		 var loginEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		 var loginMobile = /^\d{10}$/;
		
			 //check for MobileNo First
			// debugger;
			 if(loginMobile.test(EmailOrPhone))IsEmailOrPhone=true;
			 //If Not a vaild Mobile check for Email
			 else if(loginEmail.test(EmailOrPhone)){
				 IsEmailOrPhone=true;
				 IsEmail=true;
			 }
			 else{return;}
		//End
		
		if(IsEmailOrPhone){
          LoginUser(EmailOrPhone,Password,IsEmail); 
        } 
		else{
			 $("#loginError").text("Please provide a valid email or Mobile");
			$("#loginError").focus();
		}
	}
		
		function LoginUser(EmailOrPhone,Password,IsEmail){
            $.ajax({
				
               type  : 'POST',
                url  : 'login.php',
                data : 'EmailOrPhone=' + EmailOrPhone + '&Password=' + Password + '&IsEmail=' + IsEmail,
                success: function (res) {
					 debugger;
							   if(parseInt(res)=='1'){
								   window.location.href='profile.php';
							  }
							  else if(parseInt(res)=='-1'){
								  $("#loginError").text("Server error! Please contact admin");
							  }
							   else if(parseInt(res)=='2'){
								     $("#loginError").text("Note:User Account has been not been Activated yet, Contact Administrator");
							  }
							  else if(parseInt(res)=='3'){
								     $("#loginError").text("You are not Registerd with us till now .Please Register with us");
							  }
							  else{
							   $("#loginError").text("Invalid username or password");
							  }
							  return ;
				},
						  error:function(reason){
							  console.log(reason);
							  }
					  });
        }
	
	
</script>
<script>
$(document).ready(function(){
	$("#regError").text('');
});


    function regData() {
			var FullName = $("#regfullname").val();
			var Password = $("#regpassword").val();
            var EmailOrPhone = $("#regemail").val();
            
        if(EmailOrPhone == "" || Password=="") {
           $("#regError").text("Please Provide a valid Email/Mobile and Password");
            return;
        }
		//Begin Check and validate Either of email or mobile
		var IsEmail=false;
		var IsEmailOrPhone=false;
		
		 var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		 var regMobile = /^\d{10}$/;
		 
			 //check for MobileNo First
			// debugger;
			 if(regMobile.test(EmailOrPhone))IsEmailOrPhone=true;
			 //If Not a vaild Mobile check for Email
			 else if(regEmail.test(EmailOrPhone)){
				 IsEmailOrPhone=true;
				 IsEmail=true;
			 }
			 else{return;}
		//End
		
		if(IsEmailOrPhone){
          RegisterUser(EmailOrPhone,Password,FullName,IsEmail); 
        } 
		else{
			 $("#regError").text("Please provide a valid email or Mobile");
			$("#regemail").focus();
		}
	}
	function clearRegister(){
		$("#regfullname").val('');
	  $("#regemail").val('');
	   $("#regpassword").val('');
	}
	
	function RegisterUser(EmailOrPhone,Password,FullName,IsEmail){
		 $.ajax({
               type  : 'POST',
                url  : 'user_registration.php',
                data : 'EmailOrPhone=' + EmailOrPhone + '&Password=' + Password + '&FullName=' + FullName+'&IsEmail=' + IsEmail,
                success: function (res) {
							   if(parseInt(res)===1){
								   clearRegister();
								  $('#myModal').modal('hide');
								  alert("verification email has been sent to your mail id please check");
							  }
							  else if(parseInt(res)===5){
								  clearRegister();
								  $('#myModal').modal('hide');
								  alert("Successfully registered using mobile contact administrator for account activation");
							  }
							    else if(parseInt(res)===-1){
								  $("#regError").text("Server error! Please contact admin");
							  }
							  else if(parseInt(res)===4){
								       $("#regError").text("Server error in registering user via Email!. Please contact admin ");
							  }
							   else if(parseInt(res)===6){
								       $("#regError").text("Server error in registering user via Mobile!. Please contact admin ");
							  }
							   else if(parseInt(res)===3){
								  $("#regError").text("This email or mobile number already registerd with us .Try another ");
							  }
							   else if(parseInt(res)===2){
								    $('#myModal').modal('hide');
								     alert("Please check your mail and verfiy account. Then login");
							  }
							  return ;
				},
						  error:function(reason){
							  console.log(reason);
							  }
					  });
	}
</script>
<script src="https://apis.google.com/js/client:plusone.js" type="text/javascript"></script>
<script>
hello.init({
	google:'908085370602-c3ip4fb4s37han705hrucp1iqdui8pue.apps.googleusercontent.com',
	linkedin:'81l9mfm4nbmup2'

}, {redirect_uri: 'profile.php',scope:'email'});

$(document).ready(function(){
	
	
	$("#gplus").click(function(){
var google = hello('google');
google.login().then(function() {
	
	google.api('me').then(googleresponse);
});

	
	});
	$("#linkedin").click(function(){		
	var google = hello('linkedin');
google.login().then(function() {
	google.api('me').then(linkedinresponse);
});
	});
});
function googleresponse(response)
{
	console.log(response);
	                  var Email = response.email;
                      var FullName = response.displayName;
                      var ProfileImage = response.image.url +'0';
					  var SocialMediaId=response.id;
					  var SocialMediaType='Google';
					  InsertUpdateUser(FullName,Email,ProfileImage,SocialMediaId,SocialMediaType);
}
function linkedinresponse(response)
{
	console.log(response);
	var Email = response.email;
                      var FullName = response.name;
                      var ProfileImage = response.pictureUrl;
					  var SocialMediaId=response.id;
					  var SocialMediaType='Linkedin';
					  InsertUpdateUser(FullName,Email,ProfileImage,SocialMediaId,SocialMediaType);
}
</script>

<script type="text/javascript">
		 $(document).ready(function () {
						setTimeout(checkOpenModal, 5000);
						
						function checkOpenModal()
						{
							if (typeof (Storage) !== "undefined") {
						var IsOpened = sessionStorage.getItem('isModalOpened');
						if (IsOpened === "true") {
							sessionStorage.setItem('isModalOpened', 'true');
						//	console.log('Already opened');
						}
						else {
							$('#myModal').modal('show');
							console.log('first time opened');
							sessionStorage.setItem('isModalOpened', 'true');
						}
					}
						}
						
			});
</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=787837971353822";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script type="text/javascript">
function validateEmail(email)
{
return /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(email)
}
$(document).ready(function(){
	$("#forgetPasswordEmailError").hide();
	$("#forgetPasswordEmailSuccess").hide();
	
	$("#forgot_Password_submit").click(function(){
	var email = $("#forgot_Password").val();
	if(validateEmail(email))
		$.ajax({
			type: "POST",
			url: "forgot_password.php",
			data: "email=" + email,
			success: function(res)
			{
				 if(parseInt(res)===1){
								  $("#forgot_Password").val('');
								  $("#forgetPasswordEmailError").hide();
								  $("#forgetPasswordEmailSuccess").show();
								  alert("Password is sent to your  email id please check");
							  }
							  else if(parseInt(res)===0){
								
								 alert("Your are not register with us");
							  }
							    else if(parseInt(res)===-1){
								  $("#regError").text("Server error! Please contact admin");
							  }
			
			},
			error:function(error){
					$("#forgetPasswordEmailError").val()='Something went wrong... please try again';
				$("#forgetPasswordEmailError").show();
			}
		});
		else
		{
			$("#forgetPasswordEmailError").show();
			$("#forgot_Password").focus();
		}
		return false;
	});
});
</script>
<?php 
if($_SESSION['PatientId']=="")
{
	?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-0 form-img sign01">
                      <p> Cygen - Redefining Heathcare </p> 
                          <span> Sign in for exclusive healthcare services</span>
                      <p></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-modal" id="popupform">
              <div class="social-login">
                <a onClick="fb_login()" style="cursor:pointer;">
                   <div class="fb-log fa-login"><i class="fa fa-facebook"></i></div>
               </a>
                <a id="gplus" style="cursor:pointer;">
                   <div class="google-log fa-login">
                       <svg class="abcRioButtonSvg" viewBox="0 0 48 48" height="18px" width="18px" xmlns="http://www.w3.org/2000/svg" version="1.1"><g><path d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z" fill="#EA4335"/><path d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z" fill="#4285F4"/><path d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z" fill="#FBBC05"/><path d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z" fill="#34A853"/><path d="M0 0h48v48H0z" fill="none"/></g></svg>
                   
                   </div>
               </a>
                <a  id="linkedin" style="cursor:pointer;">
                   <div class="fb-linkedin fa-login"><i class="fa fa-linkedin"></i></div>
               </a>
                
               <div class="clearfix"></div>
              </div>
               <p class="more_link">Or</p>
			  
               <div class="login-form" id="login">
                  <div class="form-group log-form">
                    <input class="form-control input-lg login-text" id="loginEmail" type="email"  placeholder="Email Or Phone" required="required">
                  </div>
                  <div class="form-group log-form">
                    <input class="form-control input-lg login-text" id="loginPassword" type="password"  placeholder="Password" required="required">
                  </div>
				  <div class="form-group reg-form">
                    <p style="color:red;" id="loginError"></p>
                  </div>
                 <div class="">
                   <input type="submit" class="btn login_btn" value="Login" onClick="loginData();">
                 </div>
               <span style="font-size: 14px;" class="ls-form"> Not a member yet?
                <a id="signup_text" onClick="login()" class="" href="#">Sign Up</a>
              </span>
              <span class="ls-form forgot-text">
                <a href="#" class="form-link"  onClick="forgot()">Forgot Your Password?</a>
              </span>
              </div>
              
              <div class="registration-form" id="registration">
                  <div class="form-group reg-form">
                    <input class="form-control input-lg login-text" id="regfullname" type="text" name="fullname" placeholder="Name" required="required">
                  </div>
                  <div class="form-group reg-form">
                    <input class="form-control input-lg login-text" type="email" id="regemail" name="email" placeholder="Email Or Phone" required="required">
                  </div>
                  <div class="form-group reg-form">
                    <input class="form-control input-lg login-text" type="password" id="regpassword" name="password" placeholder="Password" required="required">
                  </div>
				   <div class="form-group reg-form">
                    <p style="color:red;" id="regError"></p>
                  </div>
                 <div class="">
                 <input type="submit"  class="btn signup_btn" value="Sign Up" onClick="regData();">
               
              </div>
               <span class="ls-form member-text"> Already a member?
                <a id="signup_text" onClick="registration()" class="" href="#">Login</a>
              </span>
              <span class="term-text">By signing up, you agree to our <a href="terms.php" class="form-link">terms of use</a> and <a href="privacy.php" class="form-link">privacy policy</a></span>
              </div>
              <div class="forgot-form" id="forgot">
               <form id="password_forgot" method="post">
                  <p>Please enter your email id below.</p>
                  <div class="form-group">
                    <input class="form-control input-lg login-text" id="forgot_Password" type="text" placeholder="Email" name="Email" required="required">
                  </div>
                  <span id="forgetPasswordEmailError" style="color:red;">Enter a valid email</span><br>
				  
				  <span id="forgetPasswordEmailSuccess" style="color:green;">Password is sent to your mail Id </span>
                
              <span class="reset_btn"> 
               <i class="fa fa-angle-left"> &nbsp; &nbsp;</i>
               <a id="signup_text" onClick="registration()" class="" href="#">Back to Login</a>
              </span>
              <span class="reset_btn">
                  <input type="submit" name="login" id="forgot_Password_submit" class="btn forgot_btn" value="Reset Password">
              </span>
			  </form>
              </div>
              
             
            </div>

					<button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
                                        <div class="clearfix"></div>
				</div>
                
                <!-- Begin # DIV Form -->
                
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>

<?php } ?>