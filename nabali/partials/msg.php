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
       $name =  $_POST['name'];
        $email  = $_POST['email'];
        $subject = $_POST['subject'];
        
        $message = $_POST['message'];
 
        
         if (!empty($name) || !empty($email) || !empty($subject) || !empty($message) ){
        
 	//$SELECT = "SELECT email FROM messages WHERE email = ? LIMIT = 1";
 	$INSERT = "INSERT INTO messages(name,email,subject,message)VALUES(?,?,?,?)";

 	//prepare stmnt
 	/*$stmt = $conn->prepare($SELECT);
 	$stmt->bind_param("s", $email);
 	$stmt->execute();
 	$stmt->bind_result($email);
 	$stmt->store_result();
 	$rnum = $stmt->num_rows;*/

 	//if ($rnum==0) {
 		//$stmt->close();

 		$stmt = $conn->prepare($INSERT);
 		$stmt->bind_param("ssss", $name, $email, $subject, $message);

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