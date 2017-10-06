<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>customeragrementsubmit</title>
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
	padding:0px 40px;
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
	<li><a href="../customerprofile.php">profile</a></li>
	<li><a href="../viewagreements.php">My Agreements</a></li>
		<li><a href="../customer/customerPost.php">Post About your Good </a></li>
  <li><a href="../customerlogout.php">Logout</a></li>



  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">

<?php
include "../actions/customersession.php";
include "actions/dbcon.php";
$rset=mysqli_query($conn,"SELECT * FROM agreement;");
$rows=mysqli_num_rows($rset);

echo "<table border='2px' >";
echo " <tr>

<th> name </th>
<th>source point</th>
<th>Destination</th>
<th>Good Description</th>
<th>customer mobilenumber</th>
<th>Delivery Time</th>
<th>If accept</th>

</tr>";

while($row=@mysqli_fetch_assoc($rset)){

echo " <tr>
$agrement="agrement.php";
<td>".$row['name']."</td>
<td>".$row['src']."</td>
<td>".$row['dest']."</td>
<td>".$row['GoodDescription']."</td>
<td>".$row['mobile']."</td>
<td>".$row['deliverytime']."</td>

</tr>";
}
echo "</table>";
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
