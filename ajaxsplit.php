<?php
						include ("account.php");

	// $username = $_POST['name'];
	// $username = mysql_real_escape_string($username);

	// $password = $_POST['password'];
	// $password = mysql_real_escape_string($password);

	// $message = $_POST['message'];

	// $sql = "select * from registered_student where username = '$username'";
	// $result = mysql_query($sql);

	// $result = mysql_query($sql) or die(mysql_error());
	// if (mysql_num_rows($result) != 0) 
						// {
							// print "<div id='target'>";
							// print "hrererere";
							// while ($row = mysql_fetch_array($result)) 
							// {
								// $name1 = $row['name'];
								// $message1 = $row['message'];
								// print "<table>";
								// print "<tr>";
								// print "<td>$name1";
								// print "<td>$message1";
								// print "</option>";
							// }
							
						// }
						// print "</div>";
$username = $_GET["name1"];
$username = mysql_real_escape_string($username);
$password = $_GET["password"];
$password = mysql_real_escape_string($password);
$message = $_GET["message"];
$message = mysql_real_escape_string($message);

$sql = "update chat set chat_content = '$message' where name = '$username'";
$qry_result = mysql_query($sql) or die(mysql_error());



?>