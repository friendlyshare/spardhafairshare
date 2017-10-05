<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Template 15</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="../css/style.css" rel="stylesheet" type="text/css">

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

</style>
</head>
<body>
<style>
.navigation ul li{
	margin:0px;
	padding:0px 200px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px;
}
</style>

<div id="wrapper">

  <div id="header">
     <h3>WELCOME TO FAIRSHARE</h3>
    <p><h2>An online logistic marketplace.<h2></p>
  </div>

  <div id="page_content">

  <div class="navigation">
  <ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="#">Logout</a></li>

  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">
			<?php
			session_start();
			if(isset($_POST['mobile']) && isset($_POST['pwd']))
			{
				include "dbcon.php";
				$mobile=$_POST['mobile'];
				$pwd=$_POST['pwd'];
				$rset=mysqli_query($conn,"SELECT * from driverreg where mobile='$mobile' and pwd='$pwd'");
				$rows=mysqli_num_rows($rset);
				if($rows==0)
				{
					session_destroy();
					header('Location:../driver/driverLogin.php?id=0');
				}
				else
				{
					$row=mysqli_fetch_assoc($rset);
					$_SESSION['mobile']=$row['mobile'];
					$_SESSION['pwd']=$row['pwd'];






				}
			}
				else if(!isset($_SESSION['admin_id']))
				{
					session_destroy();
					header('Location:../driver/driverLogin.php?id=0');

				}
			?>
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

  <div class="box">

</div>

<div class="col_1">

  <div class="box">


  </div>
</div>

</div>

<div class="clear"></div>

<!--start footer from here-->
<div id="footer">Copyright &copy; 2014. Design by <a href="http://www.htmltemplates.net" target="_blank">HTML Templates</a><br>

<!--DO NOT remove footer link-->
<!--Template designed by--><a href="http://www.htmltemplates.net"><img src="images/footer.gif" class="copyright" alt="http://www.htmltemplates.net"></a></div>

<!--/. end footer from here-->
</div>

</div>

</body>
</html>
