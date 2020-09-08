<?php
require 'connection.php';
session_start();

// STATUS
// 0 Unapproved
// 1 approved

// FINDING ERRORS IN FIELDS START_______________________________________________________________________________________________

if(isset($_SESSION['email']) ){
	if($_SESSION['email']!==""){
		// For Name Start
		if(isset($_SESSION['username']) && $_SESSION['username']!==""){
			$name=$_SESSION['username'];
			$errors[0]['reservationname']=null;
		}
		elseif(isset($_SESSION['username']) || $_SESSION['username']==""){
			$errors[0]['reservationname']="Please Enter Name";
		}
		elseif(!isset($_SESSION['username'])){
			$errors[0]['reservationname']="Please Enter Name";
		}
		// For Name End

		// For Name Start
		$email=$_SESSION['email'];
		$errors[0]['reservationemail']=null;
		// For Name End
	}
	elseif($_SESSION['email']==""){
		$errors[0]['reservationemail']="Session Email Empty";
	}
	else{
		$errors[0]['reservationemail']="Unknown Session Error";
	} 
}

elseif(!isset($_SESSION['email'])){

	// For Name Start
	if(isset($_POST['reservationname']) && $_POST['reservationname']!==""){
	$name=$_POST['reservationname'];
	$errors[0]['reservationname']=null;
	}
	elseif(isset($_POST['reservationname']) || $_POST['reservationname']==""){
		$errors[0]['reservationname']="Please Enter Name";
	}
	elseif(!isset($_POST['name'])){
		$errors[0]['reservationname']="Please Enter Name";
	}
	// For Name End

	// For Email Start
	if(isset($_POST['reservationemail']) && $_POST['reservationemail']!==""){
	$email=$_POST['reservationemail'];
	$errors[0]['reservationemail']=null;
	}
	elseif(isset($_POST['reservationemail']) || $_POST['reservationemail']==""){
		$errors[0]['reservationemail']="Please Enter Email";
	}
	elseif(!isset($_POST['email'])){
		$errors[0]['reservationemail']="Please Enter Email";
	}
	// For Email End

}
else{
	$errors[0]['reservationname']="Unknown Error";
	$errors[0]['reservationemail']="Unknown Error";
}


// For PhoneNo Start
	if(isset($_POST['reservationphone']) && $_POST['reservationphone']!==""){
	$phone=$_POST['reservationphone'];
	$errors[0]['reservationphone']=null;
	}
	elseif(isset($_POST['reservationphone']) || $_POST['reservationphone']==""){
		$errors[0]['reservationphone']="Please Enter Phone Number";
	}
	elseif(!isset($_POST['reservationphone'])){
		$errors[0]['reservationphone']="Please Enter Phone Number";
	}
// For PhoneNo End

// For Subject Start
	if(isset($_POST['reservationsubject']) && $_POST['reservationsubject']!==""){
	$subject=$_POST['reservationsubject'];
	$errors[0]['reservationsubject']=null;
	}
	elseif(isset($_POST['reservationsubject']) || $_POST['reservationsubject']==""){
		$errors[0]['reservationsubject']="Please Enter Subject";
	}
	elseif(!isset($_POST['reservationsubject'])){
		$errors[0]['reservationsubject']="Please Enter Subject";
	}
// For Subject End

// For Message Start
	if(isset($_POST['reservationmessage']) && $_POST['reservationmessage']!==""){
	$message=$_POST['reservationmessage'];
	$errors[0]['reservationmessage']=null;
	}
	elseif(isset($_POST['reservationmessage']) || $_POST['reservationmessage']==""){
		$errors[0]['reservationmessage']="Please Enter A Short Message";
	}
	elseif(!isset($_POST['reservationmessage'])){
		$errors[0]['reservationmessage']="Please Enter A Short Message";
	}
// For Message End


// Calculating Errors
if($errors[0]['reservationname']!==null || $errors[0]['reservationemail']!==null || $errors[0]['reservationphone']!==null || $errors[0]['reservationsubject']!==null || $errors[0]['reservationmessage']!==null){
	$errors[0]['queryerror']=null;
	$data=json_encode($errors[0]);
	echo $data;
	exit();
}

// FINDING ERRORS IN FIELDS END_______________________________________________________________________________________________

// Running The QUERY START________________________________________________________________
//***********************************************************************************************************is query mai time wala kam karna hai
$sqlquery9 ="SELECT * FROM reservation WHERE Subject='$subject' AND Reserver_Name='$name' AND Reserver_Email='$email' AND Message='$message' AND Reserver_Phone='$phone'";
$ressqlquery9 = mysqli_query($conn,$sqlquery9);
if($ressqlquery9){
	if(mysqli_num_rows($ressqlquery9)==0){
		$sqlquery10 = "INSERT INTO reservation (Subject,Message,Reserver_Name,Reserver_Email,Reserver_Phone,Reservation_Status,Time_Posted) VALUES ('$subject','$message','$name','$email','$phone','0',NOW())";
		$ressqlquery10 = mysqli_query($conn,$sqlquery10);
		if($ressqlquery10){
			$errors[0]['queryerror']='Thanks For Registeration.Our Team Will Contact You Soon For Indepth Info Of Your Required Service.';
			$data=json_encode($errors[0]);
			echo $data;
			exit();
		}
		elseif (!$ressqlquery10) {
			$errors[0]['queryerror']='Could Not Run Inner Query';
			$data=json_encode($errors[0]);
			echo $data;
			exit();
		}
		else{
			$errors[0]['queryerror']='Unknown Error';
			$data=json_encode($errors[0]);
			echo $data;
			exit();
		}
	}
	elseif(mysqli_num_rows($ressqlquery9)==1 || mysqli_num_rows($ressqlquery9)>1) {
		$errors[0]['queryerror']='This Reservation Was Already Made By You Today';
		$data=json_encode($errors[0]);
		echo $data;
		exit();
	}
	else{
		$errors[0]['queryerror']='Unknown Error';
		$data=json_encode($errors[0]);
		echo $data;
		exit();
	}
}
elseif (!$ressqlquery9) {
	$errors[0]['queryerror']='Could Not Run Query';
	$data=json_encode($errors[0]);
	echo $data;
	exit();
}
else{
	$errors[0]['queryerror']='Unknown Error';
	$data=json_encode($errors[0]);
	echo $data;
	exit();
}

// Running The QUERY End__________________________________________________________________



?>