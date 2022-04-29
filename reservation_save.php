<?php 
session_start();
include('includes/dbcon.php');
	
	$last = $_POST['last'];
	$first = $_POST['first'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$r_eventname = $_POST['r_eventname'];
	$date = date("Y-m-d");
	$time = $_POST['time'];
	
	$string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$code="";
	$limit=10;
	$i=0;
	while($i<=$limit)
	{
		$rand=rand(0,61);
		$code.=$string[$rand];
		$i++;
	}
		mysqli_query($con,"INSERT INTO reservation(r_code,r_last,r_first,r_address,r_contact,r_email,r_eventname,date_reserved,r_time) 
			VALUES('$code','
					$last','
					$first','
					$address','
					$contact','
					$email','
					$r_eventname','
					$date','
					$time')")or die(mysqli_error($con));  

			$id=mysqli_insert_id($con);
			$_SESSION['id']=$id;
			// echo "<script>document.location='details.php'</script>";   
	
	
?>