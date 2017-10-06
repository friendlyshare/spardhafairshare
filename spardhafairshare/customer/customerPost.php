<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>customerPost</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
span{
	color:red;
}
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
	padding:0px 40px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px;
}
</style>
<!--<script>
function validateForm()
{
	 var x = document.forms["customerpost"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
        }
		 var a = document.forms["customerpost"]["src"].value;
    if (a == "") {
        alert("age must be filled out");
        return false;
        }
		 var b = document.forms["customerpost"]["dest"].value;
    if (b == "") {
        alert("email must be filled out");
        return false;
        }
		 var c = document.forms["customerpost"]["gooddescription"].value;
    if (c == "") {
        alert("lisence id must be filled out");
        return false;
        }
		 var d = document.forms["customerpost"]["deliverytime"].value;
    if (d == "") {
        alert("Name must be filled out");
        return false;
        }
		 var y= document.forms["customerpost"]["mobile"].value;
           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false;
           }

        return false;
}
</script> -->
</head>
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
		<li><a href="#">Post About your Good </a></li>
  <li><a href="../customerlogout.php">Logout</a></li>

  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">
       <div class="container">
  <form action="../actions/customerPostSubmit.php" method="POST" name="customerpost" onsubmit="return validateForm()">
  <h4><strong>DEAR CUSTOMER..POST HERE ABOUT YOUR GOOD TO BE TRANSPORTED!!</strong></h4>


   <label for="name">Customer Name:</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="src">Pickup Point:</label>
    <input type="text" id="src" name="src" placeholder="Enter the Pick Up Point Here.....">

   <label for="dest">Destination Point:</label>
    <input type="text" id="dest" name="dest" placeholder="Enter the Destination Point Here.....">

	<label for="gooddescription">Good Description:</label>
    <input type="text" id="gooddescription" name="gooddescription" placeholder="Enter Good Description Here.....">

	<label for="mobile">customer Phone Number:</label>
    <input type="text" id="mobile" name="mobile" placeholder="Enter customer phone number here....">


	<label for="deliverytime">time to reach:</label>
    <input type="text" id="deliverytime" name="deliverytime" placeholder="Enter time that .....">
	<span>**All fields are manditory!!please do fill them.</span>
	<br>
    <input type="submit"  name="submit" value="Submit">

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
  <div id="footer">Copyright &copy; 2014. Design by <a href="http://www.htmltemplates.net" target="_blank">HTML Templates</a><br>

  <!--DO NOT remove footer link-->
  <!--Template designed by--><a href="http://www.htmltemplates.net"><img src="images/footer.gif" class="copyright" alt="http://www.htmltemplates.net"></a></div>

  <!--/. end footer from here-->
  </div>

</div>

</body>
</html>
