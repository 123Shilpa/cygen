<?php
require 'database.php';
include ('header.php');
include ('left_sidebar.php');
//Save Records

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.wallform.js"></script>
<script type="text/javascript">
    $(document).ready(function ()
    {

        $('#productRangeImage1').on('change', function ()
        {
            var A = $("#imageloadstatus");
            var B = $("#imageloadbutton");

            $("#imageform").ajaxForm({target: '#preview',
                beforeSubmit: function () {
                    A.show();
                    B.hide();
                },
                success: function () {
                    A.hide();
                    B.show();
                },
                error: function () {
                    A.hide();
                    B.show();
                }}).submit();
        });

    });
</script>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product Range</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group  top_search">
                    <div class="input-group">
                        <a class="btn btn-success right" href="http://www.quillpad.in/editor.html#.V8qeU_l97Dc" Target="_blank">For English To Hindi Translation Click Here</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"  style="height:600px;padding: 10px 30px;">
                    <div class="row">
                    </div>
                    <form class="form-horizontal" id="imageform" method="post" enctype="multipart/form-data" action='ajaxImageProductRange.php' style="clear:both" >
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="control-group <?php echo!empty($usertypeError) ? 'error' : ''; ?>">
                                        <label class="col-md-5 col-sm-3 col-xs-12">Product Name</label>
                                        <div class="controls">
                                            <select name="ProductId" id="ProductId" class="text_box selct col-md-6 col-sm-6 col-xs-12" type="text" class="selct" placeholder="User Type" value="<?php echo!empty($UserType) ? $UserType : ''; ?>">
                                                <option value="0"> Select </option> 
                                                <?php
                                                $pdo = Database::connect();
                                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                $stmt = $pdo->prepare('Select Id,ProductName from producttable');
                                                $stmt->execute();
                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "<option value='{$row['Id']}'>{$row['ProductName']}</option>";
                                                }
                                                ?>
                                            </select>

                                            <?php if (!empty($usertypeError)): ?>
                                                <span class="help-inline"><?php echo $mobileError; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id='TextBoxesGroup'>
                                <div id="TextBoxDiv1">
                                    <label id="lblProductRangeId1"></label>
                                    <label>Title  (ENG) : </label><input name="Title[]"  type='textbox' id='txtTitleEnglish1' class="addtext txtTitleEnglish">
                                    <label>Title  (Hindi) : </label><input name="TitleHindi[]"  type='textbox' id='txtTitleHindi1' class="addtext txtTitleHindi">
                                    <label>Details : </label><input type='textbox' name="Details[]" id='txtDetail1' class="addtext">
                                    <input type="file"  class="text_box1 col-md-2 col-sm-6 col-xs-12" value="UPLOAD" name="ImageLink[]" id="imageloadbutton"  /> 
                                    <div id='preview'></div>
                                </div>
                            </div>

                        </div>
                        <input type='button' value='Add Row' id='addButton' class="btn btn-success">
                        <input type='button' value='Remove Row' id='removeButton' class="btn btn-danger">

                       

                        <div class="col-md-12 backsubbtn">
                            <div class="form-actions">
                                <button type="submit" name="submit" class="btn btn-success">Create</button>
                                <a class="btn btn-dark pull-right" href="product.php">Back To Product</a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <script type="text/javascript">
        var productRange = [];
        $(document).ready(function () {
            $(".txtTitleEnglish").change(function () {
                if ($(this).val().trim() !== '')
                {
                    var c = counter - 1;
                    $("#txtTitleEnglish" + c).css("border-color", "white");
                    $("#txtTitleEnglish" + c).focus();
                }

            });
            var counter = 2;
            function validateTextBoxesGroup(counter)
            {
                var c = counter - 1;
                if ($('#txtTitleEnglish' + c).val().trim() !== '')
                    return true;
                else
                    return false;
            }
            $("#addButton").click(function () {
                if (counter > 10) {
                    alert("Only 10 textboxes allow");
                    return false;
                }
                if (validateTextBoxesGroup(counter))
                {
                    var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);

                    newTextBoxDiv.after().html(' <label id="lblProductRangeId' + counter + '"></label><label>Title  (ENG) : </label>' +
                            '<input type="text"   name="Title[]" id="txtTitleEnglish' + counter + '" value="" class="addtext txtTitleEnglish">' + '<label>Title  (Hindi) : </label>' +
                            '<input type="text"  name="TitleHindi[]" id="txtTitleHindi' + counter + '" value="" class="addtext txtTitleHindi">' + '<label>Details : </label>' +
                            '<input type="text" name="Details[]" id="txtDetail' + counter + '" value="" class="addtext">' +
                            '<input type="file" required="required" class="text_box1 col-md-2 col-sm-6 col-xs-12" value="UPLOAD" name="ImageLink[]" id="productRangeImage' + counter + '"  />');

                    newTextBoxDiv.appendTo("#TextBoxesGroup");

                    counter++;
                } else
                {
                    alert('Please fill above row first');
                    var c = counter - 1;
                    $("#txtTitleEnglish" + c).css("border-color", "red");
                    $("#txtTitleEnglish" + c).focus();
                }
            });

            $("#removeButton").click(function () {
                if (counter == 1) {
                    alert("No more textbox to remove");
                    return false;
                }
                counter--;
                $("#TextBoxDiv" + counter).remove();
                productRange.pop();
            });


            ///save product button click

//             $("#btnSaveProduct").click(function(){
//                 
//                productRange=[];
//                for (i = 1; i < counter; i++) {
//                    var item={Id:0,TitleEnglish:'',TitleHindi:'',Details:'',Image:''};
//                    item.TitleEnglish=  $('#txtTitleEnglish'+i).val(); 
//                    item.TitleHindi=  $('#txtTitleHindi'+i).val();
//                    item.Details=  $('#txtDetail'+i).val();
//                    item.Image=  $('#productRangeImage'+i).val();
//                   productRange.push(item);
//                }
//                console.log(productRange);
//                console.log($("#ProductId").val()); 
//                if($("#ProductId").val()!==null && $("#ProductId").val()!=='0')
//                {
////                var data="ProductId="+ id +"&productRange="+ productRange;
//                var data={'ProductId': $("#ProductId").val() ,'productRange':productRange};
//                console.log(data);
//                
//               $.ajax({
//			 type: "POST",
//			 url: "product_range1.php",
//			 data: data,
//			 cache: false,
//			 success: function(result){
//				 if(result=='1') {
//					 alert('User Status Successfully Changed..');
//					 window.location.href='product.php';
//				 }
//				 else alert('Eror in User Status  Changing..');
//			 },
//			 error: function(reason){
//			 console.log('Error: '+reason);
//			 }
//			 });
//            }
//             else
//             {
//             alert('Select Product');
//         }
//            });
        });
    </script>
    <?php include ('footer.php') ?>