
  <?php
  $name= $_POST['name'];

  $age = $_POST['age'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $LisenceId = $_POST['LisenceId'];
  $pwd = $_POST['pwd'];

include "../actions/dbcon.php";


  $sql = "INSERT INTO customerpost (name,age,email,mobile,LisenceId,pwd)
  VALUES ('$name','$age','$email','$mobile','$LisenceId','$pwd')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>

  