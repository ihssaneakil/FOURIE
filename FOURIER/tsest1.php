
<?php

$conn = mysqli_connect('localhost', 'root', '', 'conta'); 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO akil (nom, email,mesage ) VALUES ( '$_POST[nom]' , '$_POST[email]', '$_POST[mesage]' )";


if ($conn->query($sql) === TRUE) {
  echo "your message a ete bien recus ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



 ?>