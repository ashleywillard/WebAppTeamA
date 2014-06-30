<?php 
include ("account.php");
	
	
	$fname = $_POST['fname'];
	$fname = mysql_real_escape_string($fname);

	$lname = $_POST['lname'];
	$lname = mysql_real_escape_string($lname);

	$theme = $_POST['theme'];
	$theme = mysql_real_escape_string($theme);

	$vantage = $_POST['vantage_theme'];
	

	$eighties = $_POST['eighties_theme'];
	

	$sql = "select lname from poll where lname = '$lname'";
	$result = mysql_query($sql);

	if (mysql_num_rows($result) == 1){
		echo "You have already voted," . $fname . " " . $lname;
	} else{
		if ($vantage != null && $eighties == null) {
			$vantage = 1;
			$eighties = 0;
			$sql1 = "insert into poll (fname, lname, vantage, eighties, other_theme) values ('$fname', '$lname', '$vantage', '$eighties', '$theme')";
			mysql_query($sql1);
			echo "Thank You for voting!"; 
		} else { 
			if($eighties != null && $vantage == null){
			$eighties = 1;
			$vantage = 0;
			$sql2 = "insert into poll (fname, lname, vantage, eighties, other_theme) values ('$fname', '$lname', '$vantage', '$eighties', '$theme')";
			mysql_query($sql2);
			echo "Thank You for voting!"; 
		}

		}
	}


?>