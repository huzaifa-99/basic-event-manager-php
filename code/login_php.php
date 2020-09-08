<?php
// Status
// 0 active
// 1 blocked
require 'connection.php';

if(isset($_POST['emaillogin']) && $_POST['emaillogin']!==""){$emaillogin=$_POST['emaillogin'];
	$errors[0]['emaillogin']=null;
}
elseif(isset($_POST['emaillogin']) || $_POST['emaillogin']==""){
	$errors[0]['emaillogin']="Please Enter A Valid Email";
}
elseif(!isset($_POST['emaillogin'])){
	$errors[0]['emaillogin']="Please Enter Email";
}


if(isset($_POST['passwordlogin']) && $_POST['passwordlogin']!==""){$passwordlogin=$_POST['passwordlogin'];
$errors[0]['passwordlogin']=null;}
elseif(isset($_POST['passwordlogin']) || $_POST['passwordlogin']==""){
$errors[0]['passwordlogin']="Please Enter A Valid Password Length";}
elseif(!isset($_POST['passwordlogin'])){
$errors[0]['passwordlogin']="Please Enter Password";}

// sending errors if they exist
if($errors[0]['passwordlogin']!==null || $errors[0]['emaillogin']!==null){
	$errors[0]['queryerror']=null;
	$data=json_encode($errors[0]);
	echo $data;
	exit();
}

$sqlquery1 = "SELECT * FROM users WHERE Email='$emaillogin' AND Password='$passwordlogin'";
$ressqlquery1 = mysqli_query($conn,$sqlquery1);
if($ressqlquery1){
	if(mysqli_num_rows($ressqlquery1)==0){	
		$errors[0]['queryerror']="This Account Is Not Registered";
		$data=(json_encode($errors[0]));
		echo $data;exit();
	}
	elseif(mysqli_num_rows($ressqlquery1)==1){

		$row1=mysqli_fetch_assoc($ressqlquery1);
		if($row1['Status']==0){
			if($row1['User_Type']==0){
				// Update Login Table
				$sqlquery14 = "INSERT INTO user_status (Username,User_Email,Login_Time,Status) VALUES ('{$row1['Username']}','{$row1['Email']}',NOW(),'1')";
				$ressqlquery14 =mysqli_query($conn,$sqlquery14);
				if($ressqlquery14){

					// session for user ________
					session_start();
					$_SESSION['username']=$row1['Username'];
					$_SESSION['email']=$row1['Email'];
					$_SESSION['profile_image']=$row1['Profile_Image'];
					$_SESSION['user_type']=$row1['User_Type'];
					$_SESSION['status']=$row1['Status'];
					// session for user ________

					// Redirect After Login
					$errors[0]['queryerror']="User LoggedIn";
					$data=(json_encode($errors[0]));
					echo $data;exit();
					
				}
				elseif(!$ressqlquery14){
					$errors[0]['queryerror']="Could Not Set User Status As Online";
					$data=(json_encode($errors[0]));
					echo $data;exit();
				}
				// Update Login Table			
			}
			elseif($row1['User_Type']==1){
				// Update Login Table
				$sqlquery14 = "INSERT INTO user_status (Username,User_Email,Login_Time,Status) VALUES ('{$row1['Username']}','{$row1['Email']}',NOW(),'1')";
				$ressqlquery14 =mysqli_query($conn,$sqlquery14);
				if($ressqlquery14){

					// session for admin ________
					session_start();
					$_SESSION['admin_id']=$row1['Id'];
					$_SESSION['admin_username']=$row1['Username'];
					$_SESSION['admin_email']=$row1['Email'];
					$_SESSION['admin_profile_image']=$row1['Profile_Image'];
					$_SESSION['admin_user_type']=$row1['User_Type'];
					$_SESSION['admin_status']=$row1['Status'];
					// session for admin ________

					// Redirect After Login
					$errors[0]['queryerror']="Admin LoggedIn";
					$data=(json_encode($errors[0]));
					echo $data;exit();
					
				}
				elseif(!$ressqlquery14){
					$errors[0]['queryerror']="Could Not Set User Status As Online";
					$data=(json_encode($errors[0]));
					echo $data;exit();
				}
				// Update Login Table		
			}
			else{
				$errors[0]['queryerror']="Undefined UserType";
				$data=(json_encode($errors[0]));
				echo $data;exit();
			}
		}
		elseif($row1['Status']==1){
			$errors[0]['queryerror']="This Account Is Registered But Accessability is Blocked";
			$data=(json_encode($errors[0]));
			echo $data;exit();
		}
		else{
			$errors[0]['queryerror']="Undefined User Accessability Status";
			$data=(json_encode($errors[0]));
			echo $data;exit();
		}	
	}
	elseif(mysqli_num_rows($ressqlquery1)>1){
		$errors[0]['queryerror']="This Account Is Registered Many Times";
		$data=(json_encode($errors[0]));
		echo $data;exit();
	}
	else{
		$errors[0]['queryerror']="Unknown Error";
		$data=(json_encode($errors[0]));
		echo $data;exit();
	}
}
elseif (!$ressqlquery1) { 
	$errors[0]['queryerror']="Could Not Run Query";
	$data=(json_encode($errors[0]));
	echo $data;exit();
}
else{
	$errors[0]['queryerror']="Unknown Error";
	$data=(json_encode($errors[0]));
	echo $data;exit();
}


?>