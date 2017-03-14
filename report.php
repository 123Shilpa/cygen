<?php
include ('header_user.php');
include ('left_sidebar_user.php');
session_start();

$Patient_id = $_SESSION['PatientId'];

if (isset($_FILES['upload'])) {
    $errors = array();
    $filename = $_FILES['upload']['name'];
    $filetmp = $_FILES['upload']['tmp_name'];

    $dir = ''.$_SESSION['Mobile'].'/';
    $dir1 = 'http://user.cygengroup.com/'.$_SESSION['Mobile'].'/';
	if (!file_exists($dir)) {
	mkdir($dir, 0777, true);
	}
    $file_type = $_FILES['upload']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['upload']['name'])));
    $filebase = basename($_FILES['upload']['name']);
    $final_dir = $dir . $filebase;
    $final_dir1 = $dir1 . $filebase;

    $expensions = array("jpeg", "png", "jpg");

    if (in_array($file_ext, $expensions) == false)
		{
        $errors = "extension not allowed, please choose a JPEG or PNG file.";
		echo '<script>alert("'.$errors.'");</script>';
		}
	if (empty($errors) == true) {
        //insert into db query
        move_uploaded_file($filetmp, $final_dir);
		$pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="INSERT INTO reports(PatientId,ImageName,ImageUrl) VALUES (?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($Patient_id,$filebase,$final_dir1));
		
        Database::disconnect();
        
    }   
}
?>

<style>
    .modal-body
    {
        padding:0px !important;
    }
    .popup_image{
        margin-top: -50px !important;
    }

</style>
<div class="right_col" role="main">
    <div class="profile">
        <div class="profile_inner">
            <div class="medical-questionary">
                <div class="demography-data info-head">
                    <h3 class="person-info-title" style="letter-spacing: 0.6px; border-bottom: 1px solid; padding-bottom: 10px;">Reports</h3>

                    <form class="form-horizontal" id="report" name="report" enctype="multipart/form-data" method="post" action="report.php">
                        <input type="file" name="upload"/>
                        <br/>
                        <input type="submit" value="upload" name="submit" class="form-continue"/>
                    </form>
                    <?php
                    $query = "select * from reports where PatientId='$Patient_id'";
                    $sql = mysql_query($query);
                    while ($row = mysql_fetch_array($sql)) {
                        ?>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="" style="margin:10px auto">
                                <img data-toggle="modal" data-target="#<?php echo $row['Id']; ?>"  src="<?php echo $row['ImageUrl']; ?>" class="img-responsive"/>
                                <div class="modal fade popup_image" id="<?php echo $row['Id']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="<?php echo $row['ImageUrl']; ?>" class="img-responsive"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            </div>
            </div>
            </div>
			
            <?php include ('footer_user.php') ?>