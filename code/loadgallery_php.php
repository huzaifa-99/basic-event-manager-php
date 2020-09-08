<?php
require 'connection.php';

// Counter0 For Opening Ceremony Start
if(isset($_POST['counter0'])){
	$counter0 = $_POST['counter0'];
	if(isset($_POST['loadmoreopeningceremony'])){
		$sqlquery4 = "SELECT Image_Name FROM gallery WHERE Status='1' AND Gallery_Of='Opening Ceremony' lIMIT 5 OFFSET $counter0";
		$ressqlquery4 = mysqli_query($conn,$sqlquery4);
		if($ressqlquery4){
			if(mysqli_num_rows($ressqlquery4)>0){
				$i=0;
				//pagination
				while ($i<5) {
					$row=mysqli_fetch_assoc($ressqlquery4);
					$pictures[0][$i]=$row['Image_Name'];
					$i++;
				}
				$data = (json_encode($pictures[0]));
				echo $data;
				exit();
			}
			elseif(mysqli_num_rows($ressqlquery4)==0){
				echo "No Images Found From Gallery";
				echo $sqlquery4;
				exit();
			}
			else{	
				echo "Unknown Error";
				exit();
			}
		}
		elseif (!$ressqlquery4) {
			echo "Query Error";
			exit();
		}
		else{
			echo "Unknown Error";
			exit();
		}
	}
}
// Counter0 For Opening Ceremony End




// Counter For Trips Start
if(isset($_POST['counter1'])){
	$counter1 = $_POST['counter1'];
	if(isset($_POST['loadmoretrips'])){
		$sqlquery5 = "SELECT Image_Name FROM gallery WHERE Status='1' AND Gallery_Of='Trips' lIMIT 5 OFFSET $counter1";
		$ressqlquery5 = mysqli_query($conn,$sqlquery5);
		if($ressqlquery5){
			if(mysqli_num_rows($ressqlquery5)>0){
				$i=0;
				//pagination
				while ($i<5) {
					$row=mysqli_fetch_assoc($ressqlquery5);
					$pictures[0][$i]=$row['Image_Name'];
					$i++;
				}
				$data = (json_encode($pictures[0]));
				echo $data;
				exit();
			}
			elseif(mysqli_num_rows($ressqlquery5)==0){
				echo "No Images Found From Gallery";
				echo $sqlquery5;
				exit();
			}
			else{	
				echo "Unknown Error";
				exit();
			}
		}
		elseif (!$ressqlquery5) {
			echo "Query Error";
			exit();
		}
		else{
			echo "Unknown Error";
			exit();
		}
	}
}
// Counter1 For Trips End




// Counter For Weddings Start
if(isset($_POST['counter2'])){
	$counter2 = $_POST['counter2'];
	if(isset($_POST['loadmoreweddings'])){
		$sqlquery6 = "SELECT Image_Name FROM gallery WHERE Status='1' AND Gallery_Of='Weddings' lIMIT 5 OFFSET $counter2";
		$ressqlquery6 = mysqli_query($conn,$sqlquery6);
		if($ressqlquery6){
			if(mysqli_num_rows($ressqlquery6)>0){
				$i=0;
				//pagination
				while ($i<5) {
					$row=mysqli_fetch_assoc($ressqlquery6);
					$pictures[0][$i]=$row['Image_Name'];
					$i++;
				}
				$data = (json_encode($pictures[0]));
				echo $data;
				exit();
			}
			elseif(mysqli_num_rows($ressqlquery6)==0){
				echo "No Images Found From Gallery";
				echo $sqlquery6;
				exit();
			}
			else{	
				echo "Unknown Error";
				exit();
			}
		}
		elseif (!$ressqlquery6) {
			echo "Query Error";
			exit();
		}
		else{
			echo "Unknown Error";
			exit();
		}
	}
}
// Counter1 For Weddings End




// Counter For Birthdays Start
if(isset($_POST['counter3'])){
	$counter3 = $_POST['counter3'];
	if(isset($_POST['loadmorebirthdays'])){
		$sqlquery7 = "SELECT Image_Name FROM gallery WHERE Status='1' AND Gallery_Of='Birthdays' lIMIT 5 OFFSET $counter3";
		$ressqlquery7 = mysqli_query($conn,$sqlquery7);
		if($ressqlquery7){
			if(mysqli_num_rows($ressqlquery7)>0){
				$i=0;
				//pagination
				while ($i<5) {
					$row=mysqli_fetch_assoc($ressqlquery7);
					$pictures[0][$i]=$row['Image_Name'];
					$i++;
				}
				$data = (json_encode($pictures[0]));
				echo $data;
				exit();
			}
			elseif(mysqli_num_rows($ressqlquery7)==0){
				echo "No Images Found From Gallery";
				echo $sqlquery7;
				exit();
			}
			else{	
				echo "Unknown Error";
				exit();
			}
		}
		elseif (!$ressqlquery7) {
			echo "Query Error";
			exit();
		}
		else{
			echo "Unknown Error";
			exit();
		}
	}
}
// Counter1 For Birthdays End



// Counter For Bussiness Start
if(isset($_POST['counter4'])){
	$counter4 = $_POST['counter4'];
	if(isset($_POST['loadmorebussiness'])){
		$sqlquery8 = "SELECT Image_Name FROM gallery WHERE Status='1' AND Gallery_Of='Bussiness' lIMIT 5 OFFSET $counter4";
		$ressqlquery8 = mysqli_query($conn,$sqlquery8);
		if($ressqlquery8){
			if(mysqli_num_rows($ressqlquery8)>0){
				$i=0;
				//pagination
				while ($i<5) {
					$row=mysqli_fetch_assoc($ressqlquery8);
					$pictures[0][$i]=$row['Image_Name'];
					$i++;
				}
				$data = (json_encode($pictures[0]));
				echo $data;
				exit();
			}
			elseif(mysqli_num_rows($ressqlquery8)==0){
				echo "No Images Found From Gallery";
				echo $sqlquery8;
				exit();
			}
			else{	
				echo "Unknown Error";
				exit();
			}
		}
		elseif (!$ressqlquery8) {
			echo "Query Error";
			exit();
		}
		else{
			echo "Unknown Error";
			exit();
		}
	}
}
// Counter1 For Bussiness End


?>