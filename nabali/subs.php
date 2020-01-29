<?php

  $server ="localhost";
 $dbUsername ="root";
 $dbPassword ="";
 $dbName ="collins";

  $conn =  mysqli_connect($server,$dbUsername,$dbPassword,$dbName);


//checking the connecion
 if (!$conn) { 
  "connection failed" . mysqli_connect_error();
}
        $email  = $_POST['email'];
              
         if (!empty($email)){
        
  $SELECT = "SELECT email FROM subscribers WHERE email = ? LIMIT = 1";
  $INSERT = "INSERT INTO subscribers(email)VALUES(?)";

 

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("s",$email);

    $stmt->execute();

    echo "New record successfully inserted!";
      // else {
        //echo "Someone already registered using this email!";
      //}
      $stmt->close();
      $conn->close();
        //}
  }else{
  echo "kindly fill up all fields!";
  die();
}
 
?>