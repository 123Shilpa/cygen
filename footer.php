<footer id="hs_footer">


<div class="newsletter">
	<div class="newsletter container"> <div class="col-lg-5 text-center tittle"> stay up to date with news, deals and offers </div>
		<div class="col-lg-7 text-center box" id="before_submit">
		<form id="form_newsletter" method="post">
			<input type="email" name="Email_news" id="news_letter_email" placeholder="Email Address" class="form-control pull-left">
			<button type="button" id="news_letter_submit"> Submit </button>
		</form>
		</div>
		<div class="col-lg-7 text-center box" id="after_submit">
		<p>Thank You for Subscribing</p>
		</div>
	</div>
</div>

  <div class="container">
    <div class="hs_footer_content">
      <div class="row">
        <div class="col-lg-12">
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-lg-12">
              <h4 class="hs_heading">Get in touch !</h4>
              <div class="hs_contact_detail">
                <p>info@cygengroup.com </p>
                
                <div class="clearfix"></div>
                <div class="hs_social">
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
       
              <div class="col-lg-3 col-md-3 col-sm-4 col-lg-12">
              <h4 class="hs_heading">Useful Links</h4>
              <div class="clearfix"></div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="about.php">About us </a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="privacy.php">Privacy Policy</a></li>
                  <li><a href="terms.php">Terms and Conditions</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="blog.php">Blog</a></li>
                </ul>
              </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-lg-12">
              <h4 class="hs_heading">Learn More</h4>
              <div class="clearfix"></div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="partner.php">CyGen for customers</a></li>
                  <li><a href="partner.php">CyGen for partners</a></li>
                  <li><a href="partner.php">CyGen corporate programs</a></li>
                  <li><a href="partner.php">Cygen Tools and trackers </a></li>
                </ul>
              </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4 col-lg-12">
              <h4 class="hs_heading">Countries</h4>
              <div class="clearfix"></div>
              <div class="hs_footer_link">
                <ul>
                  <li><a href="#">India </a></li>
                  <li><a href="#">Malaysia</a></li>
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</footer>

<div class="hs_copyright"> <div class="container text-center"> <p> Copyright © 2016 CyGen Group. All Rights Reserved </p> <!--<span> Designed & Developed By Cetpa Technologies Pvt. Ltd </span>--> </div>  </div>
<!--main js file start--> 
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  -->
<script type="text/javascript" src="js/bootstrap.js" ></script> 
<script type="text/javascript" src="js/jquery.leanModal.min.js" ></script> 
<script type="text/javascript">
	$(document).on('click','.modal_close',function(){$("#loginmodal").hide();});

$("#modal_trigger").click(function(){$("#loginmodal").show();});
	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});
		$("#forgot_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});
		
		

	})
</script>

<!--main js file end-->


<script src="js/simpleMobileMenu.js"></script>
<script type="text/javascript">

		jQuery(document).ready(function($) {
			$('.smobitrigger').smplmnu();
		});
	

</script>

<script type="text/javascript" src="js/owl.carousel.js" ></script> 
<script type="text/javascript" src="js/jquery.bxslider.js" ></script> 
<script type="text/javascript" src="js/smoothscroll.js" ></script> 
<script type="text/javascript" src="js/single-0.1.0.js" ></script> 
<script type="text/javascript" src="js/custom.js" ></script> 



<!-- Go to www.addthis.com/dashboard to customize your tools -->




</body>
<script>

$(document).ready(function(){
    $( ".datepicker" ).datepicker();
  } );
</script>


<script>
$(document).ready(function(){
    $("input[type='radio']").change(function(){
   
if($(this).val()=="other")
{
    $("#otherAnswer").show();
}
else
{
       $("#otherAnswer").hide(); 
}
    
});

});
</script>

<!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57ada7d7b6326fb15041b266/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>


<script type="application/javascript">
$(document).ready(function(){
	// fix modal top 
//		
document.onload = setTimeout(function () { $("#modal").css("top","20% !important"); }, 2000);
	});
	
   function registration(){
        $("#registration").animate({left: '118%'});
$("#login").animate({left: '12%' , right:'12%' });
$("#forgot").animate({left: '200%' , top:'30%'});
    
    };
	function login(){
        $("#registration").animate({left: '0px'});
$("#login").animate({left: '100%'});
    };
	
	function forgot(){
        $("#forgot").animate({left: '12%' , right:'12%' , top:'30%'});
$("#login").animate({left: '100%'});
    };
</script>

<!--End of Tawk.to Script-->



<script type="text/javascript">
$(document).ready(function () {
    $('.accordion-toggle').on('click', function(event){
     event.preventDefault();
     // create accordion variables
     var accordion = $(this);
     var accordionContent = accordion.next('.accordion-content');
     var accordionToggleIcon = $(this).children('.toggle-icon');
     
     // toggle accordion link open class
     accordion.toggleClass("open");
     // toggle accordion content
     accordionContent.slideToggle(250);
     
     // change plus/minus icon
     if (accordion.hasClass("open")) {
      accordionToggleIcon.html("<i class='fa fa-minus-circle'></i>");
     } else {
      accordionToggleIcon.html("<i class='fa fa-plus-circle'></i>");
     }
    });
});
</script>

<script>
$('.accordion .item .heading').click(function() {
  
 var a = $(this).closest('.item');
 var b = $(a).hasClass('open');
 var c = $(a).closest('.accordion').find('.open');
  
 if(b != true) {
  $(c).find('.content').slideUp(200);
  $(c).removeClass('open');
 }

 $(a).toggleClass('open');
 $(a).find('.content').slideToggle(200);

});
</script>

<!-- newsletter -->

<script type="text/javascript">
function validateEmail(email)
{
return /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(email)
}
$(document).ready(function(){
	$("#before_submit").show();
	$("#after_submit").hide();
	
	$("#news_letter_submit").click(function(){
	var email = $("#news_letter_email").val();
	if(validateEmail(email))
		$.ajax({
			type: "POST",
			url: "ajaxNewsletter.php",
			data: "email=" + email,
			success: function(data)
			{
				console.log(data);
				$("#before_submit").hide();
				$("#after_submit").show();
			}
		});
		else
			$("#news_letter_email").css("border","red 2px solid");
		return false;
	});
});
</script>



</html>





