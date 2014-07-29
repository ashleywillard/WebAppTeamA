<?php

// $hostname = "sql2.njit.edu";
// $username = "am484";
// $password = "vd0HngQMx";
// $project = "am484";


// $db_connect = mysql_connect($hostname,$username,$password);

// if (!$db_connect) {
// 	 die ("Unable to connect to database." . mysql_error());
// 	} else {
// 		print "Successfully connected to db." . "<br>";
// 	}
// $db_select = mysql_select_db($project);
	
	
// 	$username = $_POST['username'];
// 	$username = mysql_real_escape_string($username);

// 	$password = $_POST['password'];
// 	$password = mysql_real_escape_string($password);

// 	$sql = "select [chat_content] from registered_student where username = '$username' and password = '$password'";
// 	$result = mysql_query($sql);

$hostname = "localhost";
$username = "wordpressuser";
$password = "adrian11";
$project = "wordpress";

$db_connect = mysql_connect($hostname,$username,$password);

$db_select = mysql_select_db($project);
	
	$email = $_POST['name1'];
 	$email = mysql_real_escape_string($email);

 	$password = $_POST['password1'];
 	$password = mysql_real_escape_string($password);
 	// $newpass = md5($password);

 	
	
	 	// $sql = "select * from cafeteria where employeeEmail = '$email' and employeeLocation ='LA' ";
 		$sql = "select * from cafeteria where employeeEmail = '$email'";
		$result = mysql_query($sql);
	if (mysql_num_rows($result) != 0) {
		
 		header('Location: weekly-menu');

	} else {
	
		header('Location: weekly-menu');

	}


?>