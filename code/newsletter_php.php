<?php
require 'connection.php';

// STATUS
// 0 is_user false
// 1 is_user true


// FINDING ERRORS IN FIELDS Start_______________________________________________________________________________________________

// For Email Start
	if(isset($_POST['newsletteremail']) && $_POST['newsletteremail']!==""){
		$email=$_POST['newsletteremail'];
		$errors[0]['newsletteremail']=null;
	}
	elseif(isset($_POST['newsletteremail']) || $_POST['newsletteremail']==""){
		$errors[0]['newsletteremail']="Please Enter Email";
	}
	elseif(!isset($_POST['newsletteremail'])){
		$errors[0]['newsletteremail']="Please Enter Email";
	}
// For Email End


// Calculating Errors
if($errors[0]['newsletteremail']!==null){
	$errors[0]['queryerror']=null;
	$data=json_encode($errors[0]);
	echo $data;
	exit();
}

// FINDING ERRORS IN FIELDS END_______________________________________________________________________________________________


// Running The QUERY START________________________________________________________________
$sqlquery11 = "SELECT Email FROM mailing_list WHERE Email='$email'";
$ressqlquery11 =mysqli_query($conn,$sqlquery11);
if($ressqlquery11){
	if(mysqli_num_rows($ressqlquery11)==0){
		$sqlquery12 = "SELECT Email FROM users WHERE Email='$email'";
		$ressqlquery12 =mysqli_query($conn,$sqlquery12);
		if($ressqlquery11){
			if(mysqli_num_rows($ressqlquery12)==0){
				$sqlquery13 = "INSERT INTO mailing_list (Email,Signup_Time,Status,Is_User) VALUES ('$email',NOW(),'1','0')";
				$ressqlquery13 = mysqli_query($conn,$sqlquery13);
				if($ressqlquery13){
					$errors[0]['queryerror']='ThankYou For Signing Up For Our Newsletter';
					$data=json_encode($errors[0]);
					echo $data;
					exit();
				}
				elseif(!$ressqlquery13){
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
			elseif(mysqli_num_rows($ressqlquery12)==1){
				$sqlquery13 = "INSERT INTO mailing_list (Email,Signup_Time,Status,Is_User) VALUES ('$email',NOW(),'1','1')";
				$ressqlquery13 = mysqli_query($conn,$sqlquery13);
				if($ressqlquery13){
					$errors[0]['queryerror']='ThankYou For Signing Up For Our Newsletter';
					$data=json_encode($errors[0]);
					echo $data;
					exit();
				}
				elseif(!$ressqlquery13){
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
			elseif(mysqli_num_rows($ressqlquery12)>1){
				$errors[0]['queryerror']='Unknown Registery Error';
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
		elseif(!$ressqlquery11){
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
	elseif(mysqli_num_rows($ressqlquery11)==1){
		$errors[0]['queryerror']='This Email Is Already Registered';
		$data=json_encode($errors[0]);
		echo $data;
		exit();
	}
	elseif(mysqli_num_rows($ressqlquery11)>1){
		$errors[0]['queryerror']='Unknown Registery Error';
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
elseif(!$ressqlquery11){
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