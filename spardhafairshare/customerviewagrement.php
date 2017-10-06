<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>customerviewagrement</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
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
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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
<body bgcolor="white">

<div id="wrapper">

  <div id="header">
    <h3>WELCOME TO FAIRSHARE</h3>
    <p><h2>An online logistic marketplace.<h2></p>
  </div>

  <div id="page_content">

  <div class="navigation">
 <ul>
<li><a href="index.php">Home</a></li>
<li><a href="customerprofile.php">profile</a></li>
<li><a href="#">My Agreements</a></li>
  <li><a href="customer/customerPost.php">Post About your Good </a></li>
<li><a href="customerlogout.php">Logout</a></li>

</ul>
  </div>

    <div class="left_section">
    <div class="common_content">
<?php
session_start();

    $mobile = $_SESSION['mobile'];

    include "actions/dbcon.php";
    echo "Pending Agreements!";
   $rset = mysqli_query($conn,"SELECT * from agreement where cmobile='$mobile'");
   if(!$rset){
     echo "query not executed";
   }
   $rows=mysqli_num_rows($rset);

	echo "<table border='2px' >";
	 echo " <tr>

   <th> Drivername </th>
   <th>customername</th>
   <th>Driver Mobile</th>
   <th>vehicle Number</th>
   <th>If Accept</th>

   </tr>
   <tr>
   <th> Deepthi </th>
   <th>Rangaraju</th>
   <th>9010652729</th>
   <th>ap 37 au 1234</th>
   <td><a href='setstatus.php'>Accept..</a></td>

   </tr>

   ";

	  while($row=mysqli_fetch_assoc($rset)){

 echo " <tr>
   <td>".$row['dname']."</td>
   <td>".$row['cname']."</td>
   <td>".$row['dmobile']."</td>
   <td>".$row['vehicleno']."</td>
   <td><a href='setstatus.php'>Accept..</a></td>
   </tr>";
	  }


  echo "</table>";
?>
</div>

      </div>

      <div class="top_content border_none">
        <div class="column_one">
         </div>
        <div class="column_two border_left">
          </p>
        </div>
      </div>
    </div>

    <div class="right_side_bar">



  <div class="col_1">
        <div class="box">

        </div>
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
