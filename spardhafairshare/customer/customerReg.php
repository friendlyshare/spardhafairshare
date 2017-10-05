<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>customer signup</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="../css/style.css" rel="stylesheet" type="text/css">

<script>
function validateForm()
{
	 var x = document.forms["clientreg"]["cname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
        }
		 var a = document.forms["clientreg"]["cage"].value;
    if (a == "") {
        alert("age must be filled out");
        return false;
        }
		 var b = document.forms["clientreg"]["cadhar"].value;
    if (b == "") {
        alert("adhar must be filled out");
        return false;
        }
   var c = document.forms["clientreg"]["cmob"].value;
           if(isNaN(c)||c.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false;
           }

		 var d = document.forms["clientreg"]["cpwd"].value;
    if (d == "") {
        alert("password must be filled out");
        return false;
        }
		 var y= document.forms["clientreg"]["cmob"].value;
           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false;
           }

        return false;

		var z= document.forms["clientreg"]["cemail"].value;
    var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
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
	padding:0px 100px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px;
}
</style>
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
  <li><a href="../index.php">Home</a></li>
  <li><a href="../login1.php">Login</a></li>

  </ul>
  </div>


    <div class="left_section">
    <div class="common_content">
       <div class="container">

   <h4 align="center">DEAR CUSTOMER!!
     GET REGISTER HERE!!</h4>
  <form name="clientreg" action="../actions/customerRegSubmit.php" onsubmit="return validateForm()" method="post">




    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="age">age:</label>
    <input type="text" id="age" name="age" placeholder="your age..">

	<label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="yourr mail id..">

	<label for="adar">Adhar:</label>
    <input type="text" id="adar" name="adar" placeholder="yourr adhar number plz..">

  <label for="mobile">Mobile:</label>
    <input type="text" id="mobile" name="mobile" placeholder="yourr mobile number.">

  <label for="pwd">Password:</label>
    <input type="password" id="pwd" name="pwd" placeholder="set a password plz.">
	 <input type="submit" value="Submit" onsubmit="">
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
