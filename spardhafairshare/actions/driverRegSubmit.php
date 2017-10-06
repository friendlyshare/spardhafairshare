<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>driverRegSubmit</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
h3
{
font-family:Trebuchet MS;
font-size:35px;
color:red;
}
h2
{
font-family:Trebuchet MS;
font-size:20px;
color:red;
}
.navigation ul li{
	margin:0px;
	padding:0px 200px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px;

}
</style>
<body>

<div id="wrapper">

  <div id="header">
   <h3><basefont color="white" >WELCOME TO FAIRSHARE.</h3>
    <p>An online logistic marketplace</p>
  </div>

  <div id="page_content">

  <div class="navigation">
  <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../logindivider.php">Login</a></li>

  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">

<?php
include "dbcon.php";
  $name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
  $mobile = $_POST['mobile'];
	$LisenceId = $_POST['LisenceId'];
	$pwd = $_POST['pwd'];

	$sql = "insert into driver (name,age,email,mobile,LisenceId,pwd)
	values('$name','$age','$email','$mobile','$LisenceId','$pwd')";
    $check = mysqli_query($conn,$sql);
    mysqli_query($conn,"INSERT INTO driverreg (name,age,email,mobile,LisenceId,pwd)
values('$name','$age','$email','$mobile','$LisenceId','$pwd')");
echo "<h2>".$name."  have Register Successfully!!! </h2>"
    ?>
	</div>

	<div class="top_content border_none">

		<div class="column_one">

			</div>
		<div class="column_two border_left">

		</div>
	</div>
</div>


	 <div class="right_side_bar">

	<div class="col_1">

</div>

</div>
<div class="col_1">

		<div class="box">


<!--start footer from here-->
<div id="footer">Copyright &copy; 2017. Design by <a href="http://www.htmltemplates.net" target="_blank">fairshare</a><br>

<!--DO NOT remove footer link-->
<!--Template designed by--></div>

<!--/. end footer from here-->
</div>

</div>

</body>
</html>
