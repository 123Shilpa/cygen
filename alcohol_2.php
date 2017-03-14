<?php
include ('header_user.php');
include ('left_sidebar_user.php');
?>

 <script type="text/javascript">
$(document).ready(function(){
		$(".questionary-box input[type=checkbox]").click(function(){
			if($(this).prop("checked"))
			$(this).parent().children(".chktext").show();
			else
			$(this).parent().children(".chktext").hide();
			});
});

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#editProfileDiv").hide();
        $("#btnProfile").click(function () {
            $("#profileDiv").hide();
            $("#editProfileDiv").show();
        });
        // $("#btnSaveNext").click(function () {
           // // $("#profileDiv").show();
           // // $("#editProfileDiv").show();
        // });
        $('input:radio[name=optradio]').click(function () {
            var radioValue = $("input[name='optradio']:checked").val();
            if (radioValue == 'Multi') {
                $("#SpecializedType").show();
            } else {
                $("#SpecializedType").hide();
            }
        });
    });
</script>
    <style>
	.tittle {
    color: #017b8b;
    font-size: 22px;
    letter-spacing: 0.6px;
    margin-bottom: 20px;
}
        .btn {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.6px;
            line-height: 30px;
            padding: 5px 25px !important;
        }
    </style>
    <!-- page content -->
    <div class="right_col" role="main">

        <div class="profile info-head">

            <div class="col-sm-12">


                    <h3> Alcohol Status  </h3>
<div>
<div class="Sub-head">Do You ever drink alcoholic beverages? </div>

<div class="questionary-box">
                            
<div class="row">
                            
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<input class="questionary-radio alcoholicStatus" name="alcoholicStatusRadio" value="yes" type="radio"><span>  Yes  </span>
<span id="alcoholicStatusSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">

<div>
<div class="Sub-head">What is your approximate intake of there beverages?</div>

<div class="questionary-box">
<div class="row">
<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
<input name="alcoholicStatusBeveragesRadio" class="questionary-radio alcoholicStatusBeverages chkBev" value="beer" type="checkbox"><span> Beer </span>
	<span id="alcoholicStatusBeveragesBearSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="alcoholicStatusBeveragesBeerRadio" class="questionary-radio alcoholicStatusBeveragesBeer" value="None" type="radio"><span> None </span>
</div>

</div>

<div class="row">
                                
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio alcoholicStatusBeveragesBeer" name="alcoholicStatusBeveragesBeerRadio" value="Occasional" type="radio"><span>  Occasional </span>

</div>
</div>

<div class="row">
                                
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio alcoholicStatusBeveragesBeer" name="alcoholicStatusBeveragesBeerRadio" value="often" type="radio"><span>  Often </span>

</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 father">
<input class="questionary-radio alcoholicStatusBeveragesBeer" name="alcoholicStatusBeveragesBeerRadio" value="ifoften" type="radio"><span>IF Often</span>

<span id="alcoholicStatusBeveragesBearoftenSpan" style="display:none; float:right" class="inner-box01 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<input type="text" placeholder="Per Week">
</span>      

                            
</div>
</div>
<div>

<div class="clearfix"></div>
</div>
</div>
</div>
</span>
</div>
</div>
<div class="row">                              
<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
<input class="questionary-radio alcoholicStatusBeverages chkBev" name="alcoholicStatusBeveragesRadio" value="wine" type="checkbox"><span>  Wine </span>
		
        <span id="alcoholicStatusBeveragesWineSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="alcoholicStatusBeveragesWineRadio" class="questionary-radio alcoholicStatusBeveragesWine" value="None" type="radio"><span> None </span>
</div>

</div>

<div class="row">
                                
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio alcoholicStatusBeveragesWine" name="alcoholicStatusBeveragesWineRadio" value="Occasional" type="radio"><span>  Occasional </span>

</div>
</div>

<div class="row">
                                
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio alcoholicStatusBeveragesWine" name="alcoholicStatusBeveragesWineRadio" value="often" type="radio"><span>  Often </span>

</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 father">
<input class="questionary-radio alcoholicStatusBeveragesWine" name="alcoholicStatusBeveragesWineRadio" value="ifoften" type="radio"><span>IF Often</span>

<span id="alcoholicStatusBeveragesWineoftenSpan" style="display:none; float:right" class=" inner-box01 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<input type="text" placeholder="Per Week">
</span>      

                            
</div>
</div>
<div>

<div class="clearfix"></div>
</div>
</div>
</div>
</span>
</div>
</div>
<div class="row">
<div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 father">
<input class="questionary-radio alcoholicStatusBeverages chkBev" name="alcoholicStatusBeveragesRadio" value="hardliquor" type="checkbox"><span>Hard Liquor</span>
		<span id="alcoholicStatusBeveragesHardSpan" style="display:none; float:right" class=" inner-box col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<div>
<div class="questionary-box">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input name="alcoholicStatusBeveragesHardRadio" class="questionary-radio alcoholicStatusBeveragesHard" value="None" type="radio"><span> None </span>
</div>

</div>

<div class="row">
                                
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio alcoholicStatusBeveragesHard" name="alcoholicStatusBeveragesHardRadio" value="Occasional" type="radio"><span>  Occasional </span>

</div>
</div>

<div class="row">
                                
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio alcoholicStatusBeveragesHard" name="alcoholicStatusBeveragesHardRadio" value="often" type="radio"><span>  Often </span>

</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 father">
<input class="questionary-radio alcoholicStatusBeveragesHard" name="alcoholicStatusBeveragesHardRadio" value="ifoften" type="radio"><span>IF Often</span>

<span id="alcoholicStatusBeveragesHardoftenSpan" style="display:none; float:right" class=" inner-box01 col-lg-12 col-md-12 col-sm-12 col-xs-12 pd0">
<input type="text" placeholder="Per Week">
</span>      

                            
</div>
</div>
<div>

<div class="clearfix"></div>
</div>
</div>
</div>
</span>
                                    
</div>
</div>
<div>

<div class="clearfix"></div>
</div>
</div>
</div>
</span>
</div>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input class="questionary-radio alcoholicStatus" name="alcoholicStatusRadio" value="no" type="radio"><span>  No </span>
</span>
</div>
</div>
<div class="row">
</div>
<div>
<div class="clearfix"></div>
</div>
</div>
</div>

<div>
                        <div class="Sub-head">At any time in the past, were you a heavy drinker (consumption of six ounces of hard liquor per day or more)?</div>
                        <div class="questionary-opt">

                            <div class="select-items specialty_radio">
                                <div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 pd0">
                                        <input class="speciality questionary-radio" name="Pain" value="Yes" id="chkYes" type="radio"> Yes
                                    </div>

                                    <span id="SpecializedType2" style="display:none; margin-right:30px" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pd0">
                                        <input class="form-control text" name="Pain" placeholder="Doctor Name/Hospital Name" type="text">
                                    </span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="specialty_radio">
                                <div>
                                    <input class="speciality questionary-radio" name="Pain" value="Specialized" type="radio"> NO </div>
                            </div>
                        </div>
                    </div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row" style="margin-top: 20px; margin-bottom: 40px;">
                                    <textarea style="width:90%; height:100px; border:1px solid #ddd" name="HospitalReasons" placeholder="comments:"> </textarea>
                                </div>
                                
<div>
                        <div class="Sub-head"> Specify in case of any other substance abuse :</div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                              <div class="">
                        <select class="form-control" id="slider_select_dep" name="select_dep">
                          <option>Select Name of the drug</option>
                          <option value="Department 1">Antidepressants</option>
                          <option value="Department 2">Anti-anxiety drugs</option>
                          <option value="Department 1">Barbiturates</option>
                          <option value="Department 2">Cannabis</option>
                          <option value="Department 1">Club and Street Drugs</option>
                          <option value="Department 2">Dissociative Drugs</option>
                          <option value="Department 1">Hallucinogens</option>
                          <option value="Department 2">Inhalants</option>
                          <option value="Department 2">Narcotics</option>
                          <option value="Department 1">Steroids</option>
                          <option value="Department 2">Stimulants</option>
                          <option value="Department 2">Nicotine</option>
                        </select>
                      </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                               <div>
                        <div class="Sub-head" style="margin-top:0"> Frequency of intake </div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OccurrenceCyanosis" value="Suddenly" type="radio"><span>1-2 times a day </span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OccurrenceCyanosis" class="questionary-radio" value="Gradually" type="radio"><span> 2-3 times in a week  </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="questionary-radio" name="OccurrenceCyanosis" value="Not Sure" type="radio"><span> 5 times a week  </span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="questionary-radio" name="OccurrenceCyanosis" value="Not Sure" type="radio"><span> Everyday   </span>
                                </div>

                            </div>
<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="questionary-radio" name="OccurrenceCyanosis" value="Not Sure" type="radio"><span> Every week </span>
                                </div>
                                </div>
                        </div>

                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-bt10">
                               <div>
                        <div class="Sub-head" style="margin-top:0"> Duration </div>

                        <div class="questionary-box">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OccurrenceCyanosis" value="Suddenly" type="radio"><span> 1-2 per day</span>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input name="OccurrenceCyanosis" class="questionary-radio" value="Gradually" type="radio"><span> 2-4 per day </span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input class="questionary-radio" name="OccurrenceCyanosis" value="Not Sure" type="radio"><span> more than 4 </span>
                                </div>

                            </div>

                        </div>

                    </div>
                            </div>
                            
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bt10">
                                <input placeholder="Addiction " class="form-control text" id="txt1" name="PainDuration" type="text">
                            </div>

                        </div>
                        <div>

                        </div>

                        <div class="clearfix"></div>

                    </div>
                            
                            <div class="row btn-form-cont pull-right">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="submit" id="btnSaveNext" class="form-continue">Save &amp; Continue</button>
                                </div>
                            </div>
           
<div class="cleafix"></div>

</div>
</div>
</div>

<div class="right_col" role="main">
    <div class="profile info-head">
        <div class="person-info col-lg-12" style="padding: 10px 56px;">
            <h3>  Alcohol Status  </h3>
            
            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Do You ever drink alcoholic beverages?</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <?php echo $_SESSION['PainLocation']; ?> yes</div>
                <div class="clearfix"></div>
            </div>

            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Beer Intake  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainNotice']; ?>Often</div>
                <div class="clearfix"></div>
            </div>

            <div class="detail001"> 
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Wine Intake </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainDuration']; ?>Often</div>
                <div class="clearfix"></div>
            </div>

            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Hard Liquor Intake </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainRadiate']; ?> Often</div>
                <div class="clearfix"></div>
            </div>

            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">At any time in the past, were you a heavy drinker (consumption of six ounces of hard liquor per day or more)?  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainOften']; ?>Yes</div>
                <div class="clearfix"></div></div>
                
                <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Comment </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainDescription']; ?>Loream Lipsum</div>
                <div class="clearfix"></div></div>

            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">Specify in case of any other substance abuse : </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['PainDescription']; ?>Club and Street Drugs</div>
                <div class="clearfix"></div></div>

            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Frequency of intake  </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OccurrenceChestPain']; ?> 5 times a week </div>
                <div class="clearfix"></div></div>

            <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Duration </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherSymptoms']; ?>more than 4 </div>
                <div class="clearfix"></div></div>
                
                <div class="detail001">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> Addiction </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><?php echo $_SESSION['OtherSymptoms']; ?> Loream Lipsum </div>
                <div class="clearfix"></div></div>



            
        </div>
    </div>
</div>

    <script type="text/javascript">
        $(document).ready(function() {
			 $('.chkBev').click(function(){
				  $("#alcoholicStatusBeveragesBearSpan").hide();
					  $("#alcoholicStatusBeveragesWineSpan").hide();
					    $("#alcoholicStatusBeveragesHardSpan").hide();
			 $('.chkBev:checked').each(function () {
          var radioValue =$(this).val();
		   if (radioValue === 'beer') {
                    $("#alcoholicStatusBeveragesBearSpan").show();
                } 
				 if (radioValue === 'wine') {
					  $("#alcoholicStatusBeveragesWineSpan").show();
                } 
				 if(radioValue==='hardliquor'){
					    $("#alcoholicStatusBeveragesHardSpan").show();
				}
		   });
       });  
            $('.q1 input:checkbox[name=optradio]').click(function() {
                var radioValue = $("input[name='optradio']:checked").val();
                if (radioValue == 'Multi') {
                    $("#SpecializedType").show();
                } else {
                    $("#SpecializedType").hide();
                }
            });
			
			

            $('.alcoholicStatus').click(function() {
                var radioValue = $("input[name='alcoholicStatusRadio']:checked").val();
                 if (radioValue === 'yes') {
                    $("#alcoholicStatusSpan").show();
                } else {
                    $("#alcoholicStatusSpan").hide();
                }
            });
			
			
			
			
			$('.alcoholicStatusBeveragesBeer').click(function(){
				var radioValue = $("input[name='alcoholicStatusBeveragesBeerRadio']:checked").val();
                 if (radioValue === 'ifoften') {
                    $("#alcoholicStatusBeveragesBearoftenSpan").show();
                } 
				else{
					  $("#alcoholicStatusBeveragesBearoftenSpan").hide();
					}
				});
				
				$('.alcoholicStatusBeveragesWine').click(function(){
				var radioValue = $("input[name='alcoholicStatusBeveragesWineRadio']:checked").val();
                 if (radioValue === 'ifoften') {
                    $("#alcoholicStatusBeveragesWineoftenSpan").show();
                } 
				else{
					  $("#alcoholicStatusBeveragesWineoftenSpan").hide();
					}
				});
				
				$('.alcoholicStatusBeveragesHard').click(function(){
				var radioValue = $("input[name='alcoholicStatusBeveragesHardRadio']:checked").val();
                 if (radioValue === 'ifoften') {
                    $("#alcoholicStatusBeveragesHardoftenSpan").show();
                } 
				else{
					  $("#alcoholicStatusBeveragesHardoftenSpan").hide();
					}
				});
				
				
				
				
				
				
			
			
			
			
			
			     $('.ques02').click(function() {
                var radioValue = $("input[name='mymotherGeneralHelthRadio']:checked").val();
                if (radioValue === 'poor02') {
                    $("#spanPainOccur02").show();
					 $("#spanAgeatdeath02").hide();
                } 
				else if (radioValue === 'Deceased02') {
                    $("#spanAgeatdeath02").show();
					 $("#spanPainOccur02").hide();
                } else {
                    $("#spanPainOccur02").hide();
					 $("#spanAgeatdeath02").hide();
                }
            });
			
			

            $('.q3 input:radio[name=optradio]').click(function() {
                var radioValue = $(".q3 input[name='optradio']:checked").val();
                if (radioValue == 'Multi') {
                    $("#SpecializedType2").show();
                } else {
                    $("#SpecializedType2").hide();
                }
            });

            $('.q4 input:radio[name=optradio]').click(function() {
                var radioValue = $(".q4 input[name='optradio']:checked").val();
                if (radioValue == 'Multi') {
                    $("#SpecializedType3").show();
                } else {
                    $("#SpecializedType3").hide();
                }
            });
			
			  $('.q5 input:radio[name=optradio]').click(function() {
                var radioValue = $(".q5 input[name='optradio']:checked").val();
                if (radioValue == 'Multi') {
                    $("#SpecializedType4").show();
                } else {
                    $("#SpecializedType4").hide();
                }
            });

            $(".txtTitleEnglish").change(function() {
                if ($(this).val().trim() !== '') {
                    var c = counter - 1;
                    $("#txtTitleEnglish" + c).css("border-color", "white");
                    $("#txtTitleEnglish" + c).focus();
                }

            });
            var counter = 1;

            function validateTextBoxesGroup(counter) {
                var c = counter - 1;
                if ($('#txtTitleEnglish' + c).val().trim() !== '')
                    return true;
                else
                    return false;
            }
            //add fields
            $("#addButton").on('click', (function() {
                if (counter > 10) {
                    alert("Only 10 textboxes allow");
                    return false;
                }
                if (validateTextBoxesGroup(counter)) {
                    var newTextBoxDiv = $(document.createElement('tr'));
                    newTextBoxDiv.attr('class', 'odd');
                    newTextBoxDiv.attr('id', "TextBoxDiv" + counter);

                    newTextBoxDiv.after().html('<td tabindex="0" class="sorting_1"><input name="DateGiven[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish0"></td><td tabindex="0" class="sorting_1"><input name="Dosa[]" class="txtTitleEnglish' + counter + '"id="txtTitleEnglish1"></td><td tabindex="0" class="sorting_1"><input name="Time[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish2"></td><td tabindex="0" class="sorting_1"><input name="AdministeredBy[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish3"></td><td tabindex="0" class="sorting_1"><input name="SideEffects[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish4"></td><td tabindex="0" class="sorting_1"><input name="Needed[]" class="txtTitleEnglish' + counter + '" id="txtTitleEnglish5"></td>');

                    newTextBoxDiv.appendTo("#TextBoxesGroup");

                    counter++;
                } else {
                    alert('Please fill above row first');
                    var c = counter - 1;
                    $("#txtTitleEnglish" + c).css("border-color", "red");
                    $("#txtTitleEnglish" + c).focus();
                }
            }));
            //remove fields
            $("#removeButton").on('click', (function() {
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