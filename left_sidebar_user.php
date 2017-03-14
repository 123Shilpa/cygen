 <style>
   .nav-user a {
    font-family: sans-serif;
    font-size: 15px;
    letter-spacing: 0.6px;
    text-transform: capitalize;
	padding:13px 10px 7px !important;
}

.nav-user ul{ list-style:none; margin-left:-40px;}


.nav-user ul li a {
	 font-family: sans-serif;
    font-size: 14px;
    letter-spacing: 0.6px;
    text-transform: capitalize;
	color:#FFF;
}


.top-user .nav_menu {
	/* background:#017B8B; */
	background: -moz-linear-gradient(-65deg,#0d8498 0,#00afb6 100%);
background: -webkit-gradient(linear,left top,right bottom,color-stop(0%,#0d8498),color-stop(100%,#00afb6));
background: -webkit-linear-gradient(-65deg,#0d8498 0,#00afb6 100%);
background: -o-linear-gradient(-65deg,#0d8498 0,#00afb6 100%);
background: -ms-linear-gradient(-65deg,#0d8498 0,#00afb6 100%);
background: linear-gradient(154deg,#0d8498 0,#00afb6 100%);
	border-left: 1px solid #fff;
	}

.top-user i {
	color:#fff
	}	

 .top-user .nav.navbar-nav > li > a {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #fff !important;
    font-family: sans-serif;
    font-size: 14px;
    letter-spacing: 0.6px;
	
}

.newlogo > img {
    padding-left:10px;
	padding-top:10px;
    width: 160px;
}

.top-user .toggle {
	display:none;
	}

@media screen and (max-width: 991px) {
	.top-user .toggle {
	display:block;
	}
	
	.top-user .nav_menu {

    border-left: none;
}
	
	} 
	
#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    overflow: hidden;
}
 
#wrapper.toggled {
    padding-left: 250px;
    overflow: scroll;
}
 
#sidebar-wrapper {
    z-index: 1000;
    position: absolute; 
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}
 
#page-content-wrapper {
    position: absolute;
    padding: 15px;
    width: 100%;  
    overflow-x: hidden; 
}
.xyz{
    min-width: 360px;
}
#wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0px; 
}
.fixed-brand{
    width: auto;
}
/* Sidebar Styles */
 
.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-top: 2px;
}
 
.sidebar-nav li {
    text-indent: 15px;
    line-height: 40px;
}
 
.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}
 
.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
    border-left: red 2px solid;
}
 
.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}
 
.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}
 
.sidebar-nav > .sidebar-brand a {
    color: #999999;
}
 
.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}
.no-margin{
    margin:0;
}
 
@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }
    .fixed-brand{
        width: 250px;
    }
    #wrapper.toggled {
        padding-left: 0;
    }
 
    #sidebar-wrapper {
        width: 250px;
    }
 
    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }
    #wrapper.toggled-2 #sidebar-wrapper {
        width: 50px;
    }
    #wrapper.toggled-2 #sidebar-wrapper:hover {
        width: 250px;
    }
 
 
    #page-content-wrapper {
        padding: 20px;
        position: relative;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
 
    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
        padding-left: 250px;
    }
    #wrapper.toggled-2 #page-content-wrapper {
        position: relative;
        margin-right: 0;
        margin-left: -200px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        width: auto;
 
    }
	
	.sidebar-submenu li {padding-left:20px;}
}/* CSS Document */
	
   </style>
   
   

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        
        <div class="clearfix"></div>
        
        <br />
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                
<ul class="nav side-menu nav-user sidebar-menu">
<li> <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
 Profile Info <i class="fa fa-angle-down pull-right" aria-hidden="true"></i>
</a>
<ul class="sidebar-submenu">
<li> <a href="profile.php">Personal Information </a> </li>
<li> <a href="demography.php">Demography Data </a> </li>
</ul>
</li>
<li> <a href="#" ><i class="fa fa-heartbeat" aria-hidden="true"></i>Health Summary <i class="fa fa-angle-down pull-right"></i></a> 
<ul class="sidebar-submenu">
<li> <a href="health_history.php">Health History </a> </li>
<li> <a href="past_medical.php"> Past Medical History </a> </li>	
<li> <a href="medication_log.php"> medication log </a> </li>
<li> <a href="supplement_log.php"> Supplement log </a> </li>
<li> <a href="daily_medication_log.php"> Daily Medication Log </a> </li>
<li> <a href="family_medical.php"> Family Medical History</a> </li>
<li> <a href="cardiac_symptoms.php"> Cardiac Symptoms</a> </li>
<li> <a href="alcohol_status.php"> Alcohol Status </a> </li>
<li> <a href="smoking_status.php"> Smoking Status </a> </li>
<li> <a href="dietary.php"> Dietary Information  </a></li>
<li> <a href="vitamin.php"> Vitamin Summary  </a></li>
<li> <a href="confidential_lifestyle.php">Confidential lifestyle</a> </li>	
<li> <a href="report.php"> Report</a> </li>
<li> <a href="others.php">Others Report</a> </li>
</ul>
</li>
<li> <a href="diagnosis.php"><i class="fa fa-stethoscope" aria-hidden="true"></i> Diagnosis </a> </li>	
<li> <a href="advices.php"><i class="fa fa-user-md" aria-hidden="true"></i> Advice </a> </li>
<li> <a href="subscribe.php"><i class="fa fa-window-restore" aria-hidden="true"></i> subscribe </a> </li>
<li> <a href="summary.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Summary</a> </li>
<li> <a href="help_faq.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Help And FAQs </a> </li>
<li> <a href="term_and_condition.php"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Terms And Conditions</a> </li>			
					
                </ul>
            </div>
        </div>
        
    </div>
</div>

<div class="top_nav top-user">
    <div class="nav_menu">
        <nav class="" role="navigation">
		<div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-8 text-center">
		<a href="index.php" class="newlogo">
		<img class="" alt="" src="images/logo-2.png" style="">
		</a>
		</div>
		
		<div class="col-lg-5 col-md-5 col-sm-3 col-xs-12 loading01">
		<div class="unfill">
        <div class="fill" style="width:<?=$percentage?>%;color:#fff;padding:6px;">
            <?=$percentage?>%
        </div>
		</div>
		</div>
		
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
				<div class="subscribe-btn pull-left"><a href="subscribe.php"> SUBSCRIBE </a> </div>
			</div>
		
         
        <ul class="nav navbar-nav navbar-right pull-right">
			
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<?php
		{
			if($_SESSION['IsSocial']==true)
			{
			?>
			 <img src="<?php echo $_SESSION['ProfileImage'];?>" alt=""> <?php echo $_SESSION['FullName'];?>
			<?php
			}
			else
			{
				
				?>
				<img src="image_uploads/<?php echo $_SESSION['ProfileImage'];?>" alt=""> <?php echo $_SESSION['FullName'];?>
				<?php
			}
			}
		?>
                       
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                       <li><a href="profile.php"><i class="fa fa-address-book-o pull-left" style="color:#017B8B;"></i>PROFILE</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out pull-left" style="color:#017B8B;"></i> LOG OUT</a></li>
                    </ul>
                </li>
                
            </ul>
			
			
			
			
			

		
        </nav>
		
    </div>
	
</div>

