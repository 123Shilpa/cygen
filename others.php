<?php
include ('header_user.php');
include ('left_sidebar_user.php');
session_start();


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
     $Others = $_POST['Others'];
    $Status = '0';

    // validate input
    // update data
    //if ($valid) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO others(PatientId ,Others,Status)VALUES (?,?,?)";

    $q = $pdo->prepare($sql);
    $q->execute(array($_SESSION['PatientId'],$Others, $Status));
    Database::disconnect();
    echo "<script type = 'text/javascript'> alert('Successfully inserted'); window.location = 'report.php'; </script>";
}
?>

<style>
.other{
    min-height: 232px;
    width: 100%;
    padding: 20px;
}
</style>
<!-- page content -->
	<?php
        $squery = "SELECT * FROM others where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);
		$rowcount = mysql_num_rows($result); {
			if ($rowcount == 0) {    //Allow edit
				?>

        <div class="right_col" role="main">
            <div class="profile past_medical info-head">

                <h3> Others </h3>
                <div class="personal-detail">
                    <form class="form-horizontal" action="others.php"  method="post" >
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 questionary-box">
                               <textarea name="Others" class="text_box col-md-10 col-sm-10 col-xs-10 other" type="text"  placeholder="Others" value=""></textarea>       
                                <div class="clearfix"></div>
                            </div>

                            
                        </div>
                          <div class="row btn-form-cont pull-right">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" name="submit" id="btnSaveNext" class="form-continue" >Save &amp; Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
   
         <?php
        } else {// view
        $squery = "SELECT * FROM others where PatientId = '" . $_SESSION['PatientId'] . "'";
        $result = mysql_query($squery);

        while ($row = mysql_fetch_assoc($result)) {

            $_SESSION['Others'] = $row['Others'];
           

        }
		?>
        
        
        <div class="right_col" role="main">
<div class="profile">
<div class="person-info col-lg-12" style="padding: 10px 56px;">
 <h3 class="person-info-title">Other Details</h3>
 <div class="detail001">
 <label name="Others" class="text_box col-md-6 col-sm-6 col-xs-12" style="width:1000px;height:300px;" type="text"  placeholder="BeerIntake" /><?php echo $_SESSION['Others']; ?></label>
                                            
<div class="clearfix"></div>
</div>
</div>
</div>
</div>

      
	<?php
		}
		}
	?>






<?php include ('footer_user.php') ?>