<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Template 15</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="../css/style.css" rel="stylesheet" type="text/css">
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
</style>
</head>
<body>

<div id="wrapper">

  <div id="header">
    <h1>Enter Site Title</h1>
    <p>Enter Site Slogan</p>
  </div>

  <div id="page_content">

  <div class="navigation">
  <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">New Page 1</a></li>
  <li><a href="#">New Page 2</a></li>
  <li><a href="#">New Page 3</a></li>
  <li><a href="#">New Page 4</a></li>
  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">
       <div class="container">
  <form action="../actions/customerPostSubmit.php" method="post" name="customerpost">
  <h3>customer post</h3>
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
    <input type="submit" value="Submit">
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
