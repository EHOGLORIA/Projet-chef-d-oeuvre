
<!-- connection de la newsletter à la base de données -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsletter";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


$email = $_POST['email'];
$message = $_POST['message'];
$sql = " INSERT INTO message_newsletter (Email, message) VALUES ('$email','$message')";

if(mysqli_query($con, $sql )){
echo"votre message a été envoyé";
} else {
echo "le message n'a pas été ajouté";
  
}
if(isset($_POST['submit'])){
}



 ?>
           