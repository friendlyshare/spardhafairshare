<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>agrementsubmit</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

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
 <li><a href="driverviewagrement.php">my agreements</a></li>
  <li><a href="driverlogout.php">logout</a></li>
  </ul>
  </div>

    <div class="left_section">
    <div class="common_content">
      <?php
     $dname = $_POST['dname'];
      $cname = $_POST['cname'];
      $dmobile = $_POST['dmobile'];
      $vehicleno = $_POST['vehicleno'];



    include "../actions/dbcon.php";


      $sql = "INSERT INTO agreement (dname,cname,dmobile,vehicleno,status)
      VALUES ('$dname','$cname','$dmobile','$dmobile','$vehicleno')";
      if ($conn->query($sql) === TRUE) {
          echo "your request for delivery is posted successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
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
