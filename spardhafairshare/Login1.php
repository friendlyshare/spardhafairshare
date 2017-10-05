<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script>
function validateForm()
{
	var x=document.forms["login"]["uname"].value;
	 if (x == "") {
        alert("Name must be filled out");
        return false;
    }
var y=document.forms["login"]["pwd"].value;
	 if (y == "") {
        alert("password must be filled out");
        return false;
    }

  
}
</script>
	
	
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
</script>
<style>
.navigation ul li{
	margin:0px;
	padding:0px 200px;
	display:inline;
	font-size:15px;
	list-style-type:none;
	border-right:#868B8F dotted 2px; 
}
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
input[type=password] {
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
</style>
</head>
<body>

<div id="wrapper"> 
  
  <div id="header">
    <h3>WELCOME TO FAIRSHARE.</h3>
    <h2>An online logistic marketplace</h2>
  </div>

  <div id="page_content">
  
  <div class="navigation">
  <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="signupdivider.php">signup</a></li>
  
  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">
        <div class="container">
  <form action="#" name="login" method="post" onsubmit="return validateForm()">
    <label for="uname">username</label>
    <input type="text" id="uname" name="uname" placeholder=" enter username">

    <label for="password">password</label>
    <input type="password" id="pwd" name="pwd" placeholder="Yourpassword.">

    <input type="submit" value="Submit">
  </form>
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
      <h2>Know more about our FAIRSHARE:</h2>
Fairshare is an online marketplace that bridges the gap between carriers and truckers by utilising the unutilised spaces.<br>
<a href="../index.php">click here to know more.</a>
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
  <div id="footer">Copyright &copy; 2014. Design by <a href="http://www.htmltemplates.net" target="_blank">fairshare</a><br>
  
  <!--DO NOT remove footer link-->
  <!--Template designed by--><a href="http://www.htmltemplates.net"><img src="images/footer.gif" class="copyright" alt="http://www.htmltemplates.net"></a></div>
  
  <!--/. end footer from here-->
  </div>

</div>

</body>
</html>