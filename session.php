<?php
if(!isset($_SESSION['PatientId']))
{
    //header('Location: index.php');
	echo "<script type = 'text/javascript'> window.location = 'index.php'; </script>";
    exit();
}
?>