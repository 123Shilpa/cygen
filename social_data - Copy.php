<?php
session_start();
require_once("config.php");
extract($_POST);
$CreatedDate = date('Y-m-d H:i:s');
$UpdatedDate = date('Y-m-d H:i:s');
$Email = $Email;
$FullName = $FullName;
$ProfileImage = $ProfileImage;
$SocialMediaId = $SocialMediaId;
$SocialMediaType = $SocialMediaType;
try {
    
    $db_handle = new DBController();
    $query = "SELECT Id FROM login_cygen WHERE SocialMediaId = '$SocialMediaId' AND SocialMediaType = '$SocialMediaType'";
    $result = mysql_query($query);
    $rowcount = mysql_num_rows($result);

    if ($rowcount == 0) {
		
		    $query = "SELECT Id FROM login_cygen WHERE Email='$Email'";
			$result = mysql_query($query);
			$rowcount = mysql_num_rows($result);
		
		if ($rowcount == 0) {
			
        $iquery = "INSERT INTO login_cygen(FullName,Email,ProfileImage,SocialMediaId,SocialMediaType,CreatedDate,RoleId,Status) VALUES('$FullName','$Email','$ProfileImage','$SocialMediaId','$SocialMediaType','$CreatedDate','3','1')";

        $Current_Id = $db_handle->insertQuery($iquery);
        if (!empty($Current_Id)) {
            $_SESSION['IsSocial'] = true;
            $_SESSION['PatientId'] = $Current_Id;
            $_SESSION['SocialMediaId'] = $SocialMediaId;
            $_SESSION['SocialMediaType'] = $SocialMediaType;
            $_SESSION['FullName'] = $FullName;  
            $_SESSION['Email'] = $Email;
            $_SESSION['ProfileImage'] = $ProfileImage;
            $_SESSION['Phone'] = $Phone;
            $_SESSION['RoleId'] = '3';
            $_SESSION['Role'] = 'Customer';
			
			//new user's acount 
             echo 0;
			 
        } else {
            echo 3;
        }
		
		}else{
			
		$uquery = "select *, Id as PatientId from login_cygen where Email='$Email'";
        $result = mysql_query($uquery);
        $rowcount = mysql_num_rows($result);

            if ($rowcount > 0)
				{					
                 while ($row = mysql_fetch_assoc($result)) 
				 {
                    if ($row["Status"]) {
                        // user exists and account active
                        $_SESSION['IsSocial'] = true;
                        $_SESSION['PatientId'] =$row['PatientId'];
                        $_SESSION['SocialMediaId'] = $SocialMediaId;
                        $_SESSION['SocialMediaType'] = $SocialMediaType;
                        $_SESSION['FullName'] = $row['FullName'];
                        $_SESSION['Email'] = $row['Email'];
                        $_SESSION['RoleId'] = $row['RoleId'];
                        $_SESSION['ProfileImage'] = $ProfileImage;
                        $_SESSION['Phone'] = $Phone;
                        $_SESSION['Role'] = $row['Role'];

                        $uquery = "";
                        $UpdatedDate = date('Y-m-d H:i:s');
                        if ($SocialMediaType == "Facebook") {
                            $uquery = "UPDATE login_cygen SET FullName='$FullName' , FacbookId = '$SocialMediaId' , UpdatedDate = '$UpdatedDate' , ProfileImage='$ProfileImage',IsFacbook='1' WHERE Email='$Email'";
                        } else if ($SocialMediaType == "Linkedin") {
                            $uquery = "UPDATE login_cygen SET FullName='$FullName' , LinkedInId = '$SocialMediaId' , UpdatedDate = '$UpdatedDate' , ProfileImage='$ProfileImage',IsLinkedIn='1' WHERE Email='$Email'";
                        } else if ($SocialMediaType == "Google") {
                            $uquery = "UPDATE login_cygen SET FullName='$FullName' , GoogleId = '$SocialMediaId' , UpdatedDate = '$UpdatedDate' , ProfileImage='$ProfileImage',IsGoogle='1' WHERE Email='$Email'";
                        }

                        $result = mysql_query($uquery);
                        //user's acount already exists with Email
                        echo 1;
                    } else {
                        // user exists and account deactive
                        echo 2;
                    }
                }
            } 
			else 
			{
                echo 3;
            }
		}
   
    } else {
        //echo "<script type = 'text/javascript'> alert('1st else update'); </script>";
        $squery = "select *, Id as PatientId from login_cygen where SocialMediaId='$SocialMediaId' AND SocialMediaType='$SocialMediaType'";
        $result = mysql_query($squery);
        $rowcount = mysql_num_rows($result);
        if ($rowcount > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                if ($row["Status"]) {
                    // user exists and account active
					$_SESSION['PatientId'] =$row['PatientId'];
                    $_SESSION['IsSocial'] = true;
                    $_SESSION['SocialMediaId'] = $SocialMediaId;
                    $_SESSION['SocialMediaType'] = $SocialMediaType;
                    $_SESSION['FullName'] = $FullName;  
                    $_SESSION['Email'] = $Email;
                    $_SESSION['ProfileImage'] = $ProfileImage;
                    $_SESSION['Phone'] = $Phone;
                    $_SESSION['RoleId'] = '3';
                    $_SESSION['Role'] = 'Customer';
                    $uquery = "UPDATE login_cygen SET ProfileImage='$ProfileImage', Email='$Email', UpdatedDate='$UpdatedDate' WHERE SocialMediaId = '$SocialMediaId' AND SocialMediaType = '$SocialMediaType'";
                    $result = mysql_query($uquery);
                    //user's acount already exists
                    echo 1;
                } else {
                    // user exists and account deactive
                    echo 2;
                }
            }
        } else {
            echo 3;
        }
    }
} catch (Exception $e) {
    //server error
    echo -1;
}
?>
