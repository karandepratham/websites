//contact form php


<?php
	
	//variables
	$name=$email=$message=$mobileno="";
	
		//Fetching Values from URL
		$name= test_input($_POST["cf_name"]);
		$email=test_input($_POST["cf_email"]);
		$message=test_input($_POST["cf_message"]);
		$mobileno=test_input($_POST["cf_mobileno"]);	
		
		$reqdate=date("m.d.y g:i a");		
		
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		
	}
	
	echo "Name : ".$name." Email : ".$email." Message : ".$message." Mobile no : ".$mobileno." Request Date : ".$reqdate;
	
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("BandhanMukhwasDB", $connection); // Selecting Database
	
	//Insert query
	$query = mysql_query("insert into ContactTable(cname, cemail, cmobileno, cmessage, cdate) values ('$name', '$email', '$mobileno','$message','$reqdate')");
	echo "Form Submitted Succesfully";
	mysql_close($connection); // Connection Closed
	

?>