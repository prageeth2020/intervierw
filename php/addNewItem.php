<?php   
	//get data from the form by name
	$topic = $_POST['nameOfTopic'];
	$imgURL = $_POST['nameOfImgURL'];
	$price =  $_POST['nameOfPrice'];

	//reuire database.php for get database connection
	require_once "../Database/Database.php";
	
	
	//create object of database class
	$db = new Database;
	//get the coinnection object
	$con = $db->getConnect();
	
	//SQL Query to inset new image record
	$query = "INSERT into images (ID , imgURL , Topic , price ) 
	value(NULL , '$imgURL' , '$topic' ,  '$price') ";
	//execute the query
	if($db->query($query)) {
		//show alert when succesfully insert record
		echo '<script>alert("Photograph Saved Successfully");</script>';
		//redirect to admin page once record saved in database
		echo '<script>location.href="../admin/"</script>';				 
	}
	
	//if any errors occured display it
	else {
		die(trigger_error(mysqli_error($con)));
	}			

	
?>