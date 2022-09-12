<?php
$con = mysqli_connect('localhost', 'root', '');
if(!$con){
    echo "Base de donnee introuvable";
}

if(!mysqli_select_db($con, 'newsletter')){
    echo"base de donnee introuvable";
}

if(isset($_POST['message']) and isset($_POST['message']) and isset($_POST['button'])){
    $nom = $_POST['message'];
   $sql = " INSERT INTO newsletter (message_newsletter) VALUE ('$message')";
   if(!mysqli_query($con, $sql )){
       echo "le message n'a pas été ajouté";
   } else {
       echo"votre message a été envoyé";
   }
}



 ?>
           