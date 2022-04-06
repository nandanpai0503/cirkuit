<?php
    $email = $_POST['E-mail'];
    $email = $_POST['email'];
    $email = $_POST['emailid'];

    //Database connection
    $conn =new mysqli('localhost','root','','cirkuit');
    if ($conn ->connect_error) {
      // code...
      die('Connection Failed: '$conn->connect_error);
    }else {
      $stmt = $conn->prepare("Insert into registration(Email, Email, Email)
      values(?,?,?)");
      $stmt->bind_param("sss",$email, $email, $email);
      $stmt->execute();
      echo "Registration Successful. Check your Mail for more details";
      $stmt->close();
      $conn->close();
    }
 ?>
