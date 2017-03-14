<meta http-equiv="refresh" content="2;url=http://www.cygengroup.com//" />
<?php
session_start();
include("../config.php");
$db_handle = new DBController();

$query = "INSERT INTO paymentsdetails(PatientId, Package, Period, InvoiceNumber, Amount, Response, Status)
         VALUES('".$_SESSION['PatientId']."','$_SESSION['Package']','$_SESSION['Period']','$_SESSION['InvoiceNumber']','$_SESSION['Amount']','Success','1')";
$result = mysql_query($query);
?>