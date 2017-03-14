<?php
include ('congif.php');
include ('header_user.php');
include ('left_sidebar_user.php');

?>
<style>
.btn {
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.6px;
    line-height: 30px;
    padding: 5px 25px !important;
}
</style>
<script>
$(document).ready(function() {
$("#removeButton").hide();

 $("#addButton").on('click', function() {
	 
	 var a = $('#txtPrescriptionDate0').val();
	 if(a == "")
	 {
		$("#removeButton").hide(); 
		 
	 }
	 else
	 {	 
	 var r = $('#TextBoxesGroup > tr').length;
	
	 if(r >= 1)
	 {
        $("#removeButton").show();
	 }
	 else
	 {
		 $("#removeButton").hide();
	 }
	 
	 }
    
  });
  });
  
 </script>
<?php
$squery = "SELECT * FROM supplement_log where PatientId = '" . $_SESSION['PatientId'] . "'";
$result = mysql_query($squery);
$rowcount = mysql_num_rows($result);

if ($rowcount == 0) {
   	?>
<!-- page content -->
<div class="right_col" role="main">
<form class="form-horizontal" id="medical_log" method="post" action='ajaxSupplementLog.php' style="clear:both" >
<div class="profile">
  <div class="">
       <h3 class="person-info-title">Supplement Log</h3>   
     <div class="col-sm-12" style="width: 100%; overflow-x: scroll ! important;">
	 <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1034px;">
                    <thead>
                      <tr role="row"><th style="width: 73px;">Prescription Date</th>

<th style="width: 73px;">Supplement name</th>

<th style="width: 73px;">Doctor</th>


<th style="width: 73px;">Dosage</th>

<th style="width: 73px;">Time per day</th>

<th style="width: 73px;">With Food? Y/N</th>

<th style="width: 73px;">Whats It's For</th>

<th style="width: 73px;">Reactions &amp; Side Effects</th></tr>
                    </thead>


                    <tbody id="TextBoxesGroup">
                      
                    <tr role="row" class="odd">
                        <td ><input name="PrescriptionDate[]" class="txtPrescriptionDate pres_date" id="txtPrescriptionDate0">
                         <script>
  $(document).ready(function(e) {
    $( ".pres_date" ).datepicker({
		shortYearCutoff: 1,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        minDate: "-116Y", 
        maxDate: "0Y",
         yearRange: "1900:2016"
 });
  });
  </script>
                        </td>
						<td ><input name="MedicationName[]" class="txtMedicationName"  id="txtMedicationName"></td>
						<td ><input name="Doctor[]" class="txtDoctor" id="txtDoctor"></td>
						<td ><input name="Dosage[]" class="txtDosage" id="txtDosage"></td>
						<td ><input name="TimesPerDay[]" class="txtTimesPerDay" id="txtTimesPerDay"></td>
						<td ><input name="WithFood[]" class="txtWithFood" id="txtWithFood"></td>
						<td ><input name="Reason[]" class="txtReason" id="txtReason"></td>
						<td ><input name="Reactions[]" class="txtReactions" id="txtReactions"></td>
                      </tr>

					 </tbody>
                  </table></div>
				
				        <div class="col-sm-12" style="margin-top:50px;">
						<input type='button' value='Add Row' id='addButton' class="btn btn-success">
                        <input type='button' value='Remove Row' id='removeButton' class="btn btn-danger">  
						<button type="submit" name="submit" class="btn btn-success" style="float:right !important">Submit</button>
                        </div>
						</div>
						
</div>
</form>
</div>
<?php
}
else
{
	?>
	<div class="right_col" role="main">
	<div class="profile">
	  <div class="">
		 <div class="col-sm-12" style="width: 100%; overflow-x: scroll ! important;">
		 <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1034px;">
						<thead>
						  <tr role="row">
						  <th style="width: 73px;">SNo.</th>
						  <th style="width: 73px;">Prescription Date</th>

	<th style="width: 73px;">Supplement name</th>

	<th style="width: 73px;">Doctor</th>


	<th style="width: 73px;">Dosage</th>

	<th style="width: 73px;">Time per day</th>

	<th style="width: 73px;">With Food? Y/N</th>

	<th style="width: 73px;">Whats It's For</th>

	<th style="width: 73px;">Reactions &amp; Side Effects</th></tr>
						</thead>


						<tbody id="TextBoxesGroup">
						<?php
						$query = "SELECT * FROM supplement_log where PatientId = '".$_SESSION['PatientId']."'";
						
						$stmt = mysql_query($query);
						
						
						$i = 1;
						while($row = mysql_fetch_assoc($stmt))
						{
						?>	
						<tr role="row" class="odd">
							<td ><?php echo $i++; ?></td>
							<td ><?php echo $row['PrescriptionDate'];?></td>
							<td ><?php echo $row['MedicationName'];?></td>
							<td ><?php echo $row['Doctor'];?></td>
							<td ><?php echo $row['Dosage'];?></td>
							<td ><?php echo $row['TimesPerDay'];?></td>
							<td ><?php echo $row['WithFood'];?></td>
							<td ><?php echo $row['Reason'];?></td>
							<td ><?php echo $row['Reactions'];?></td>
						  </tr>
						<?php
						}
						?></tbody>
					  </table>
					  </div>
				
					</div>
							
	</div>
	</div>

	<?php
}
?>
 <script>
 $(document).on('click','.pres_date',function(){
	$(this).datepicker({
		changeMonth: true,
      changeYear: true,
	          dateFormat: 'dd-mm-yy',		
		maxDate:new Date()});
 });
</script>
<script type="text/javascript">
 $(document).ready(function(){
$('input:radio[name=optradio]').click(function(){	
		var radioValue = $("input[name='optradio']:checked").val();
		if(radioValue=='Multi'){
			$("#SpecializedType").show();
		}
		else{
		$("#SpecializedType").hide();
		}
	});
$('input:radio[name=optradio]').click(function(){	
		var radioValue = $("input[name='optradio']:checked").val();
		if(radioValue=='Multi'){
			$("#SpecializedType1").show();
		}
		else{
		$("#SpecializedType1").hide();
		}
	});
	
	
	// $(".txtTitleEnglish").change(function () {
                // if ($(this).val().trim() !== '')
                // {
                    // var c = counter - 1;
                    // $("#txtTitleEnglish" + c).css("border-color", "white");
                    // $("#txtTitleEnglish" + c).focus();
                // }

            // });
            var counter = 1;
            function validateTextBoxesGroup(counter)
            {
                var c = counter - 1;
                if ($('#txtPrescriptionDate' + c).val())
                    return true;
                else
                    return false;
            }
	//add fields
	$("#addButton").on('click', (function () {
		if (counter > 10) {
			alert("Only 10 textboxes allow");
			return false;
		}
		if (validateTextBoxesGroup(counter))
		{
			var newTextBoxDiv = $(document.createElement('tr'));
			newTextBoxDiv.attr('class', 'odd');
			newTextBoxDiv.attr('id', "TextBoxDiv" + counter);
			

			newTextBoxDiv.after().html('<td ><input name="PrescriptionDate[]" class="txtPrescriptionDate'+counter+' pres_date" id="txtPrescriptionDate'+counter+'"></td><td ><input name="MedicationName[]"  class="txtMedicationName'+counter+'"id="txtMedicationName'+counter+'"></td><td ><input name="Doctor[]" class="txtDoctor'+counter+'" id="txtDoctor'+counter+'"></td><td ><input name="Dosage[]" class="txtDosage'+counter+'" id="txtDosage'+counter+'"></td><td ><input name="TimesPerDay[]" class="txtTimesPerDay'+counter+'" id="txtTimesPerDay'+counter+'"></td><td ><input name="WithFood[]" class="txtWithFood'+counter+'" id="txtWithFood'+counter+'"></td><td ><input name="Reason[]" class="txtReason'+counter+'" id="txtReason'+counter+'"></td><td ><input name="Reactions[]" class="txtReactions'+counter+'" id="txtReactions'+counter+'"></td>');
			
			newTextBoxDiv.appendTo("#TextBoxesGroup");
			$(".pres_date").datepicker({changeMonth: true,
			        dateFormat: 'dd-mm-yy',  

      changeYear: true,maxDate:new Date()});

			counter++;
		} else
		{
			alert('Please fill above row first');
			var c = counter - 1;
			$("#txtTitleEnglish" + c).css("border-color", "red");
			$("#txtTitleEnglish" + c).focus();
		}
	}));
	//remove fields
	$("#removeButton").on('click', (function () {
		if (counter == 1) {
			alert("No more textbox to remove");
			return false;
		}
		counter--;
		$("#TextBoxDiv" + counter).remove();
	}));

});
</script>
    
    <?php include ('footer_user.php'); ?>