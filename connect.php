<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$message = filter_input(INPUT_POST, 'message');




$host = "localhost";
$dbusername = "u367276456_glow";
$dbpassword = "Ihavewisdom1";
$dbname = "u367276456_air";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO airglow (name, email, phone, message)

  values ('$name','$email','$phone','$message')";
  if ($conn->query($sql)){
  
    header('location: index.html');
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}



 




  ?>