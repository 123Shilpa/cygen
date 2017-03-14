<?php
include ('header_user.php');
include ('left_sidebar_user.php');

$InvoiceAmount = $_GET['InvoiceAmount'];
$InvoiceRand = rand(1000,9999);
$InvoiceNumber = "ORDER100PACKEG$InvoiceRand";


?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js">
</script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").hide();
    });
});
</script>
</head>
<body>
 <script>
// $(document).ready(function(){
	// $("#submit").click(function(){
		// paymentsDetails();
	// });	
// });
    // function paymentsDetails() {
    // var form = document.frm1;
    // var dataString = $(form).serialize();
    // $.ajax({
      // type:"post",
      // url:"index.php",
      // data: dataString.replace(/%20/g, ""),
      // success:function(data){
	   // window.location.href='index.php';
     // },
     // error: function(){
      // alert('ERROR');
     // }

    // });
   // };
// </script>
<div class="right_col" role="main">
<div class="profile">
<div class="person-info col-lg-12" style="padding: 10px 56px;">

 <form class="form-horizontal" action="payment/index.php?InvoiceAmount=110.00&Amount=110.00"  name="frm1" method="post">
  <input type="submit" id="submit" class="form-continue" value="Pay">
 </form>

</div>
</div>
</div>


</body>
</html>
