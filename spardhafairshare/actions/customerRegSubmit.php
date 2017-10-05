
<?php
include "dbcon.php";
  $name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
  $adar = $_POST['adar'];
	$mobile = $_POST['mobile'];
	$pwd = $_POST['pwd'];

	$sql = "insert into clientreg (name,age,email,adar,mobile,pwd)
	values('$name','$age','$email','$adar','$mobile','$pwd')";
    $check = mysqli_query($conn,$sql);
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
          /*echo error*/
          echo  "registration unsuccessful!";
    }

    $conn->close();
    ?>
