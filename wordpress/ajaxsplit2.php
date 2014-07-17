<?php
$hostname = "localhost";
$username = "wordpressuser";
$password = "adrian11";
$project = "am484";

$db_connect = mysql_connect($hostname,$username,$password);

$db_select = mysql_select_db($project);

if (!$db_connect) {
	 die ("Unable to connect to database." . mysql_error());
	} else {
		print "Successfully connected to db." . "<br>";
	}
$db_select = mysql_select_db($project);

$username = $_GET["name1"];
$username = mysql_real_escape_string($username);

 // $message = $_GET["message2"];
 // $message = mysql_real_escape_string($message);

$sql = "select name from chat where name = '$username'";

$result = mysql_query($sql) or die(mysql_error());
							if (mysql_num_rows($result) != 0) 
							{

								while ($row = mysql_fetch_array($result)) 
								{
									$thisname = $row['name'];
									
								}
								
							}
print $username;
print "***";
print $thisname;


?>