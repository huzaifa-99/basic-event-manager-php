<?php
// Status
// 0 active
// 1 blocked

// Usertype
// 0 general
// 1 admin
 // database connection
  require '../connection.php';
  	session_start();
	if(!isset($_SESSION['admin_id'])){
		header("location: ../logout_admin.php");
	}
  // database connection

if(isset($_POST['username_admin'])){
	$username_admin=$_POST['username_admin'];
}
if(isset($_POST['useremail_admin'])){
	$useremail_admin=$_POST['useremail_admin'];
}
if(isset($_POST['userpassword_admin'])){
	$userpassword_admin=$_POST['userpassword_admin'];
}
if(isset($_POST['usertype_admin'])){
	if($_POST['usertype_admin']=='Admin'){
		$usertype_admin='1';
	}
	elseif($_POST['usertype_admin']=='User'){
		$usertype_admin='0';
	}
}

// Setting upload directory,tmpname and randomname for file type image 
$uploads_dir = 'E:/xampp/htdocs/Projects/projectuni/p3/img/profilepic';
$tmp_name = $_FILES["userpic_admin"]["tmp_name"];
$name = rand().$_FILES["userpic_admin"]["name"];
// checking if the uploaded img is supported
$array = array('jpeg','jpg','png');
$extension =pathinfo($name,PATHINFO_EXTENSION);
if (in_array($extension, $array)){
	$errors[0]['queryerror']=null;
}
elseif (!in_array($extension, $array)){
	echo "not in array";
}
else{
	echo "Unknown Error";
}


$sqlquery14 = "SELECT * FROM users WHERE Email='$useremail_admin'";
$ressqlquery14 = mysqli_query($conn,$sqlquery14);
if($ressqlquery14) {
	if(mysqli_num_rows($ressqlquery14)==0){
		$ifuploaded=move_uploaded_file($tmp_name, "$uploads_dir/$name");
		if($ifuploaded){
			$userpic_admin=$name;
			$sqlquery15 = "INSERT INTO users (Username,Email,Password,Profile_Image,User_Type,Signup_Time,Status) VALUES ('$username_admin','$useremail_admin','$userpassword_admin','$userpic_admin','$usertype_admin',NOW(),'0')";
			$ressqlquery15 = mysqli_query($conn,$sqlquery15);
			if ($ressqlquery15) {
				/*needs edit*/
				//is ko redirect karna hai after 5 seconds new page py ja k
				$errors[0]['queryerror']="You Have Been Registered Successfully";
				$x=true;
				$data=(json_encode($errors[0]));
				echo $data;
				exit();			
				/*needs edit*/
			}
			elseif (!$ressqlquery15) {
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
	elseif(mysqli_num_rows($ressqlquery14)==1){
		$errors[0]['queryerror']="This Account Is Already Registered";
		$data=(json_encode($errors[0]));
		echo $data;
		exit();
	}
	elseif(mysqli_num_rows($ressqlquery14)>1){
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
elseif (!$ressqlquery14) {
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



