<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>agrement</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">


<style>
span
{
	color:red;

}
input[type=text], input[type=password] {
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
	padding:0px 70px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px;
}
</style>
<script>
function validateForm()
{
	 var x = document.forms["agreement"]["dname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
        }
		 var a = document.forms["agreement"]["cname"].value;
    if (a == "") {
        alert("name must be filled out");
        return false;
        }
		 var b = document.forms["agreement"]["dmobile"].value;
    if (b == "") {
        alert("mobile must be filled out");
        return false;
        }
		 var c = document.forms["agreement"]["vehicleno"].value;
    if (c == "") {
        alert("vehicleno id must be filled out");
        return false;
        }
		 var d = document.forms["agreement"]["deliverytime"].value;
    if (d == "") {
        alert("time must be filled out");
        return false;
        }
		 var y= document.forms["agreement"]["deliverycharge"].value;
           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("delivery charges must be specified");
              return false;
           }

        return false;
}
</script>
</head>
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
  <li><a href="driverprofile.php">DriverProfile</a></li>
   <li><a href="agrement.php">agreements</a></li>
  <li><a href="driverlogout.php">Logout</a></li>

  </ul>
  </div>


    <div class="left_section">
    <div class="common_content">
       <div class="container">

   <h4 align="center">DEAR CUSTOMER!!
     FILL THE AGREEMENT HERE!!</h4>




    <form action="actions/agrementsubmit.php" method="POST" name="agreement" onsubmit="return validateForm()">
    <label for="dname">Driver NAME</label>
    <input type="text" id="dname" name="dname" placeholder="Your name..">

    <label for="cname">costomername</label>
    <input type="text" id="cname" name="cname" placeholder=" enter costomer name">

 <label for="dmobile">Driver phone-number</label>
    <input type="TEXT" id="dmobile" name="dmobile" placeholder="Driver mobile number ">

	<label for="vehicleno">Vehicle Registration Number</label>
    <input type="text" id="vehicleno" name="vehicleno" placeholder=" enter vehicle number here">

	<label for="deliverycharge">Delivery Charge:</label>
    <input type="text" id="deliverycharge" name="deliverycharge" placeholder=" enter charge for delivery of good....">
<span>**All fields are manditory!!please do fill them.</span>
	<br>
    <input type="submit" value="Submit">
  </form>
  </form>
</div>
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
      </div>

      <div class="col_1">

        <div class="box">

        </div>
      </div>

    </div>

    <div class="clear"></div>

  <!--start footer from here-->
  <div id="footer">Copyright &copy; 2014. Design by <a href="http://www.htmltemplates.net" target="_blank">fairshare.</a><br>

  <!--DO NOT remove footer link-->
  <!--Template designed by--><a href="http://www.htmltemplates.net"><img src="images/footer.gif" class="copyright" alt="http://www.htmltemplates.net"></a></div>

  <!--/. end footer from here-->
  </div>

</div>

</body>
</html>
