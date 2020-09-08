<?php
require '../connection.php';
session_start();
if(!isset($_SESSION['admin_id'])){
	header("location: ../logout_admin.php");
}

if(isset($_POST['gallery_of']) && $_POST['gallery_of']!==''){
	if($_POST['gallery_of']=='Trips'){
		$gallery_of='Trips';
	}
	elseif($_POST['gallery_of']=='Weddings'){
		$gallery_of='Weddings';
	}
	elseif($_POST['gallery_of']=='Weddings'){
		$gallery_of='Weddings';
	}
	elseif($_POST['gallery_of']=='Birthdays'){
		$gallery_of='Birthdays';
	}
	elseif($_POST['gallery_of']=='Opening Ceremony'){
		$gallery_of='Opening Ceremony';
	}
	elseif($_POST['gallery_of']=='Bussiness'){
		$gallery_of='Bussiness';
	}
}
else{
	echo "Please Select Album";exit();
}

	// Setting upload directory,tmpname and randomname for file type image 
	if($_FILES["gallerypicture"]["name"]==""){
		echo "Please Select Image";exit();
	}
	$uploads_dir = 'E:/xampp/htdocs/Projects/projectuni/p4/img/gallerypic';
	$tmp_name = $_FILES["gallerypicture"]["tmp_name"];
	$name = rand().$_FILES["gallerypicture"]["name"];
	// checking if the uploaded img is supported
	$array = array('jpeg','jpg','png');
	$extension =pathinfo($name,PATHINFO_EXTENSION);
	if (in_array($extension, $array)){
		$ifuploaded=move_uploaded_file($tmp_name, "$uploads_dir/$name");
		if($ifuploaded){
			$sql = "INSERT INTO gallery (Image_Name,Gallery_Of,Status,Activation_Time,Uploader_Id,Uploader_Email,Uploader_Status) VALUES ('$name','$gallery_of','1',NOW(),'{$_SESSION['admin_id']}','{$_SESSION['admin_email']}','{$_SESSION['admin_status']}')";
			$res=  mysqli_query($conn, $sql);
			if($res){
				echo "Uploaded to Database";
			}
			else if($res){
				echo "Could Not Upload to Databaes";
			}
		}
		elseif (!$ifuploaded) {
			echo 'Could Not Upload';
		}
	}
	elseif (!in_array($extension, $array)){
		echo "Unsupported File Format";
	}
	else{
		echo "Unknown Error";
	}
?>