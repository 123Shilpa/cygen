<?php

error_reporting(0);
require 'config.php';
$db_handle = new DBController();
session_start();
if (isset($_POST['submit']) and $_SERVER['REQUEST_METHOD'] == "POST") {

		$sql = mysql_query("UPDATE profilereport SET DailyMedicationLog = '7' WHERE PatientId='" . $_SESSION['PatientId'] . "'");
		
		
                    $PatientId = $_SESSION['PatientId'];
					$MediReaction = $_POST['MediReaction_radio'];
					if($MediReaction == "Yes")
					{
						$OtherExplain = $_POST['MediReaction_yes'];
					}
					else if($MediReaction == "Other")
					{
						$OtherExplain = $_POST['MediReaction_other'];
					}
					/*if($MediReaction_radio = $_POST['MediReaction_radio'] == 'Yes')
					{
						$MediReaction = $_POST['MediReaction'];
					}
					else{
						$MediReaction = $_POST['MediReaction_radio'];
					}*/
					if($MediAspPen_radio = $_POST['MediAspPen_radio'] == 'Yes')
					{
						$MediAspPen = $_POST['MediAspPen'];
					}
					else{
						$MediAspPen = $_POST['MediAspPen_radio'];
					}
					if($LatexProducts_radio = $_POST['LatexProducts_radio'] == 'Yes')
					{
						$LatexProducts = $_POST['LatexProducts'];
					}
					else{
						$LatexProducts = $_POST['LatexProducts_radio'];
					}
					if($OtherFoodHay_radio = $_POST['OtherFoodHay_radio'] == 'Yes')
					{
						$OtherFoodHay = $_POST['OtherFoodHay'];
					}
					else{
						$OtherFoodHay = $_POST['OtherFoodHay_radio'];
					}

					$ExaminResult = $_POST['ExaminResult'];
					$LastPhysicalExamin = $_POST['LastPhysicalExamin'];
					$ChestXrayResult = $_POST['ChestXrayResult'];
					$LastChestXray = $_POST['LastChestXray'];
					$EkgEcgResult = $_POST['EkgEcgResult'];
					$LastEkgEcg = $_POST['LastEkgEcg'];
					$CheckResult = $_POST['CheckResult'];
					$LastDentalCheck = $_POST['LastDentalCheck'];
					$OtherDiagnosticTest = $_POST['OtherDiagnosticTest'];
					$MedicalReportDesc = $_POST['MedicalReportDesc'];
					$HospitalName = $_POST['HospitalName'];
					$HospitalDate = $_POST['HospitalDate'];
					$HospitalReasons =$_POST['HospitalReasons'];
					$Status = '1';
					
					
					//file upload
					$filename=$_FILES['MedicalReport']['name'];
					$filetmp=$_FILES['MedicalReport']['tmp_name'];
					$file_type=$_FILES['MedicalReport']['type'];

					$filebase=basename($_FILES['MedicalReport']['name']);
	 				$dir="image_uploads/";
					$final_dir=$dir.$filebase;
					
					if($filename == ""){
					$sql = "INSERT INTO daily_medication_log(
						PatientId,
						MediReaction,
						OtherExplain,
						MediAspPen,
						LatexProducts,
						OtherFoodHay,
						LastPhysicalExamin,
						ExaminResult,
						LastChestXray,
						ChestXrayResult,
						LastEkgEcg,
						EkgEcgResult,
						LastDentalCheck,
						CheckResult,
						OtherDiagnosticTest,
						MedicalReportDesc,
						HospitalName,
						HospitalDate,
						HospitalReasons,
						Status) Values('$PatientId',
									   '$MediReaction',
									   '$OtherExplain',
									   '$MediAspPen',
									   '$LatexProducts',
									   '$OtherFoodHay',
									   '$LastPhysicalExamin',
									   '$ExaminResult',
									   '$LastChestXray',
									   '$ChestXrayResult',
									   '$LastEkgEcg',
									   '$EkgEcgResult',
									   '$LastDentalCheck',
									   '$CheckResult',
									   '$OtherDiagnosticTest',
									   '$MedicalReportDesc',
									   '$HospitalName',
									   '$HospitalDate',
									   '$HospitalReasons',
									   '$Status')";
					mysql_query($sql);
					}
					else if(move_uploaded_file($filetmp,$final_dir))
					{
						$sql = "INSERT INTO daily_medication_log(
						PatientId,
						MediReaction,
						OtherExplain,
						MediAspPen,
						LatexProducts,
						OtherFoodHay,
						LastPhysicalExamin,
						ExaminResult,
						LastChestXray,
						ChestXrayResult,
						LastEkgEcg,
						EkgEcgResult,
						LastDentalCheck,
						CheckResult,
						OtherDiagnosticTest,
						MedicalReport,
						MedicalReportDesc,
						HospitalName,
						HospitalDate,
						HospitalReasons,
						Status) Values('$PatientId',
									   '$MediReaction',
									   '$OtherExplain',
									   '$MediAspPen',
									   '$LatexProducts',
									   '$OtherFoodHay',
									   '$LastPhysicalExamin',
									   '$ExaminResult',
									   '$LastChestXray',
									   '$ChestXrayResult',
									   '$LastEkgEcg',
									   '$EkgEcgResult',
									   '$LastDentalCheck',
									   '$CheckResult',
									   '$OtherDiagnosticTest',
									   '$final_dir',
									   '$MedicalReportDesc',
									   '$HospitalName',
									   '$HospitalDate',
									   '$HospitalReasons',
									   '$Status')";
									   mysql_query($sql);
					}
					else{
						echo mysql_error();
					}
		   
					//Multi row data
                    $DateGiven = $_POST['DateGiven'];
					$Dose = $_POST['Dose'];
                    $MediTime = $_POST['MediTime'];
                    $AdministeredBy = $_POST['AdministeredBy'];
                    $SideEffects = $_POST['SideEffects'];
                    $Needed = $_POST['Needed'];
					
                    for ($i = 0; $i < count($DateGiven); $i++) {
                      
					    $pId = $PatientId;
                        $pDate = $DateGiven[$i];
                        $mName = $Dose[$i];
                        $doc = $MediTime[$i];
                        $dose = $AdministeredBy[$i];
                        $tpDay = $SideEffects[$i];
                        $wFood = $Needed[$i];
                        $Stat = '1';
                       $insert = "INSERT INTO daily_medication__administration_log(
																	 PatientId,
																	 DateGiven,
																	 Dose,
																	 MediTime, AdministeredBy,
																	 SideEffects,
																	 Needed,
																	 Status) VALUES('$pId',
																					 '$pDate',
																					 '$mName',
																					 '$doc',
																					 '$dose',
																					 '$tpDay',
																					 '$wFood',
																					 '$Stat')";
						//var_dump($insert);
						mysql_query($insert);
                        
                    }   
                echo "<script type = 'text/javascript'> window.location = 'family_medical.php'; </script>";
                } 

?>