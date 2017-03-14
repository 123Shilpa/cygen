<?php

error_reporting(0);
require 'config.php';
$db_handle = new DBController();
session_start();
if (isset($_POST['submit']) and $_SERVER['REQUEST_METHOD'] == "POST") {
 
 		$sql = mysql_query("UPDATE profilereport SET MedicationLog = '7' WHERE PatientId='" . $_SESSION['PatientId'] . "'");
		
                    $PatientId = $_SESSION['PatientId'];
                    $PrescriptionDate = $_POST['PrescriptionDate'];
					//var_dump($PrescriptionDate);
                    $MedicationName = $_POST['MedicationName'];
                    $Doctor = $_POST['Doctor'];
                    $Dosage = $_POST['Dosage'];
                    $TimesPerDay = $_POST['TimesPerDay'];
                    $WithFood = $_POST['WithFood'];
                    $Reason = $_POST['Reason'];
                    $Reactions = $_POST['Reactions'];
                  
                                         
                    for ($i = 0; $i < count($PrescriptionDate); $i++) {
                       //echo "<script type = 'text/javascript'> alert('loop started'); </script>";
					    $pId = $PatientId;
                        $pDate = $PrescriptionDate[$i];
                        $mName = $MedicationName[$i];
                        $doc = $Doctor[$i];
                        $dosa = $Dosage[$i];
                        $tpDay = $TimesPerDay[$i];
                        $wFood = $WithFood[$i];
                        $reason = $Reason[$i];
                        $reaction = $Reactions[$i];
                        $Status = '1';
                       $insert = "INSERT INTO medication_log(
																	 PatientId,
																	 PrescriptionDate,
																	 MedicationName,
																	 Doctor, Dosage,
																	 TimesPerDay,
																	 WithFood,
																	 Reason,
																	 Reactions,
																	 Status) VALUES('$pId',
																					 '$pDate',
																					 '$mName',
																					 '$doc',
																					 '$dosa',
																					 '$tpDay',
																					 '$wFood',
																					 '$reason',
																					 '$reaction',
																					 '$Status')";
						//var_dump($insert);
						mysql_query($insert);
                        
                    }   
             //   echo "<script type = 'text/javascript'> alert('Successfully Inserted'); </script>";
                echo "<script type = 'text/javascript'> alert('Successfully Inserted');window.location = 'supplement_log.php'; </script>";
                } 

?>