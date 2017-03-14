<?php session_start();
include "config.php"; //connects to the database
$db_handle = new DBController();
if (isset($_POST['email'])){
	$email = $_POST['email'];
	$query="SELECT Id, Password FROM login_cygen WHERE Email='$email'";
		
		try{
        $result = mysql_query($query);
        $rowcount = mysql_num_rows($result);
	   if ($rowcount > 0) {
		    while ($row = mysql_fetch_assoc($result)) {
			$Id =$row['Id'];
			$pass =$row['Password'];
			$to = $email;
			//Details for sending E-mail
			$from = "Cygen Group";
			$url = "http://www.cygengroup.com/\r\n";
			$initial_time = time();
			$message = "http://$_SERVER[HTTP_HOST]/"."reset_password.php?Id=$Id&ini_time=$initial_time";
			$from = "info@cygengroup.com";
			$subject = "User Password recovered";
			$headers = "From: $from\n";
			$headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n";
			$headers .= "X-Mailer: Just My Server\r\n";
			$sentmail = mail ( $to, $subject, $message, $headers );
			echo $sentmail;
	   }
		}
		else
	   {
		   echo 0;
	   }
		}
		catch(Exception $e)
		{
			echo -1;
		}
	// If the count is equal to one, we will send message other wise display an error message.
	
}
?>