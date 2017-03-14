<?php
session_start();
require_once('payment/fonepaisa.php');
include("config.php");
$db_handle = new DBController();

//$_SESSION['InvoiceAmount'] = $_GET['InvoiceAmount'];
//$_SESSION['Amount'] = $_GET['Amount'];
$_SESSION['InvoiceRand'] = rand(1000,9999);
//$_SESSION['Package'] = $_GET['Package'];
$_SESSION['Period'] = "1 Year";
$_SESSION['InvoiceNumber'] = "ORDER100PACKEG".$_SESSION['InvoiceRand']."";

$x = fonepaisa_inquirepay(array(
							'api_key'=>'A8J053SG63W38342QT6GF3F4536P582',
							'id'=>'A192',
							'merchant_id'=>'A192',
							'invoice'=>'ORDER100',
							'private_key' =>'payment/fonepaisa.pub'
							));
echo $x;
?>
