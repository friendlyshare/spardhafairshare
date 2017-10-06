<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>driverviewagrement</title>
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
	padding:0px 80px;
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
  <li><a href="../index.php">Home</a></li>
  <li><a href="driverprofile.php">profile</a></li>
  <li><a href="#">My agrements</a></li>
  <li><a href="driverlogout.php">logout</a></li>
  </ul>

  </div>

    <div class="left_section">
    <div class="common_content">
<?php
session_start();
include "../actions/dbcon.php";
  $mobile = $_SESSION['mobile'];
    $name = $_SESSION['name'];
    echo "<h1>Agrements in Pending</h1>";

   $rset1 = mysqli_query($conn,"SELECT * from agreement where dmobile='$mobile' and status='0'");
   if(!$rset1){
     echo "query not executed";
   }
   $rows1 = mysqli_num_rows($rset1);

	echo "<table border='2px'>";
	 echo " <tr>

   <th> Drivername </th>
   <th>customername</th>
   <th>Driver Mobile</th>
   <th>vehicle Number</th>
   <th>if you want to choose</th>
   </tr>
   <tr>
   <td> Deepthi </td>
   <td>Rangaraju</td>
   <td>9010652729</td>
   <td>ap 37 au 1234</td>
   <td><a href='../setstatus.php'>click here</a></td>
   ";

	  while($row1 = mysqli_fetch_assoc($rset1)){
 echo " <tr>
   <td>".$row['dname']."</td>
   <td>".$row['cname']."</td>
   <td>".$row['dmobile']."</td>
   <td>".$row['vehicleno']."</td>
   </tr>";
	  }

  echo "</table>";
  echo "<br><br>";
  echo "<h1>finished agreements!!!</h1>"."<br>";
  $rset2 = mysqli_query($conn,"SELECT * from agreement where dmobile='$mobile' and status=1");
  if(!$rset2){
    echo "query not executed";
  }
  $rows2 = mysqli_num_rows($rset2);

 echo "<table border='2px' >";
  echo " <tr>

  <th> Drivername </th>
  <th>customername</th>
  <th>Driver Mobile</th>
  <th>vehicle Number</th>
  </tr>
  <td> Deepthi </td>
  <td>Rangaraju</td>
  <td>9010652729</td>
  <td>ap 37 au 1234</td>
  <td><a href='../setstatus.php'>click here</a></td>";

   while($row2 = mysqli_fetch_assoc($rset2)){
echo " <tr>
  <td>".$row['dname']."</td>
  <td>".$row['cname']."</td>
  <td>".$row['dmobile']."</td>
  <td>".$row['vehicleno']."</td>
  </tr>";
   }

 echo "</table>";
?>
</div>
      </div>

      <div class="top_content border_none">
        <div class="column_one">

        <div class="column_two border_left">


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

         <br>

        </div>
      </div>

    </div>

    <div class="clear"></div>

  <!--start footer from here-->
  <div id="footer">Copyright &copy; 2014. Design by <a href="http://www.htmltemplates.net" target="_blank">fairshare</a><br>

  <!--DO NOT remove footer link-->
  <!--Template designed by--><a href="http://www.htmltemplates.net"><img src="images/footer.gif" class="copyright" alt="http://www.htmltemplates.net"></a></div>

  <!--/. end footer from here-->
  </div>

</div>

</body>
</html>
