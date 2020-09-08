<?php
// Status
// 0 active
// 1 blocked

// Usertype
// 0 general
// 1 admin

require 'connection.php';
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['usernameregister']) && $_POST['usernameregister']!==""){
	$usernameregister=$_POST['usernameregister'];
	$errors[0]['usernameregister']=null;
}
elseif(isset($_POST['usernameregister']) || $_POST['usernameregister']==""){
	$errors[0]['usernameregister']="Please Enter A Valid Username Length";
}
elseif(!isset($_POST['usernameregister'])){
	$errors[0]['usernameregister']="Please Enter Username";
}


if(isset($_POST['emailregister']) && $_POST['emailregister']!==""){
	// email ok
	if(filter_var($_POST['emailregister'],FILTER_VALIDATE_EMAIL)){
		$emailregister=$_POST['emailregister'];
		$errors[0]['emailregister']=null;
	}
	// email not ok
	elseif(!filter_var($_POST['emailregister'],FILTER_VALIDATE_EMAIL)){
		$errors[0]['emailregister']="Email not ok";
	}

}
elseif(isset($_POST['emailregister']) || $_POST['emailregister']==""){
	$errors[0]['emailregister']="Please Enter A Valid Email";
}
elseif(!isset($_POST['emailregister'])){
	$errors[0]['emailregister']="Please Enter Email";
}


if(isset($_POST['passwordregister']) && $_POST['passwordregister']!==""){
	$passwordregister=$_POST['passwordregister'];
	$errors[0]['passwordregister']=null;
}
elseif(isset($_POST['passwordregister']) || $_POST['passwordregister']==""){
	$errors[0]['passwordregister']="Please Enter A Valid Password Length";
}
elseif(!isset($_POST['passwordregister'])){
	$errors[0]['passwordregister']="Please Enter Password";
}

// Setting upload directory,tmpname and randomname for file type image 
$uploads_dir = 'E:/xampp/htdocs/Projects/projectuni/p4/img/profilepic';
$tmp_name = $_FILES["profilepicregister"]["tmp_name"];
$name = rand().$_FILES["profilepicregister"]["name"];
// checking if the uploaded img is supported
$array = array('jpeg','jpg','png');
$extension =pathinfo($name,PATHINFO_EXTENSION);
if (in_array($extension, $array)){
	$errors[0]['queryerror']=null;
}
elseif (!in_array($extension, $array)){
	$errors[0]['queryerror']="Unsupported File Format";
}
else{
	$errors[0]['queryerror']="Unknown Error";
}





// sending errors if they exist
if($errors[0]['usernameregister']!==null || $errors[0]['emailregister']!==null || $errors[0]['passwordregister']!==null || $errors[0]['queryerror']!==null){
	$data=(json_encode($errors[0]));
	echo $data;
	exit();
}


$sqlquery2 = "SELECT * FROM users WHERE Email='$emailregister'";
$ressqlquery2 = mysqli_query($conn,$sqlquery2);
if($ressqlquery2) {
	if(mysqli_num_rows($ressqlquery2)==0){
		$ifuploaded=move_uploaded_file($tmp_name, "$uploads_dir/$name");
		if($ifuploaded){
			$profilepicregister=$name;
			$sqlquery3 = "INSERT INTO users (Username,Email,Password,Profile_Image,User_Type,Signup_Time,Status) VALUES ('$usernameregister','$emailregister','$passwordregister','$profilepicregister','0',NOW(),'0')";
			$ressqlquery3 = mysqli_query($conn,$sqlquery3);
			if ($ressqlquery3) {
				/*needs edit*/
				//is ko redirect karna hai after 5 seconds new page py ja k
				$errors[0]['queryerror']="You Have Been Registered Successfully";
				$x=true;
				$data=(json_encode($errors[0]));
				echo $data;
				exit();			
				/*needs edit*/
			}
			elseif (!$ressqlquery3) {
				$errors[0]['queryerror']="Could Not Run Query";
				$data=(json_encode($errors[0]));
				echo $data;
				exit();
			}
			else{
				$errors[0]['queryerror']="Unknown Error";
				$data=(json_encode($errors[0]));
				echo $data;
				exit();
			}
		}
		elseif(!$ifuploaded){
			$errors[0]['queryerror']="Could Not Upload Profile Pic";
			$data=(json_encode($errors[0]));
			echo $data;
			exit();
		}
		else{
			$errors[0]['queryerror']="Unknown Error";
			$data=(json_encode($errors[0]));
			echo $data;
			exit();
		}      
		////////////////////
	}
	elseif(mysqli_num_rows($ressqlquery2)==1){
		$errors[0]['queryerror']="This Account Is Already Registered";
		$data=(json_encode($errors[0]));
		echo $data;
		exit();
	}
	elseif(mysqli_num_rows($ressqlquery2)>1){
		$errors[0]['queryerror']="This Account Is Registered Many Times";
		$data=(json_encode($errors[0]));
		echo $data;
		exit();
	}
	else{
		$errors[0]['queryerror']="Unknown Error";
		$data=(json_encode($errors[0]));
		echo $data;
		exit();
	}
}
elseif (!$ressqlquery2) {
	$errors[0]['queryerror']="Could Not Run Query";
	$data=(json_encode($errors[0]));
	echo $data;
	exit();
}
else {
	$errors[0]['queryerror']="Unknown Error";
	$data=(json_encode($errors[0]));
	echo $data;
	exit();
}
?>




<?php

?>



