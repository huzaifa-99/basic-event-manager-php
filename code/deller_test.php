<?php
//system("cmd /c C:\Users\Abdul Rehman\Desktop\emailafter1hour.bat");
//exec('c:\WINDOWS\system32\cmd.exe /c START E:\xampp\htdocs\Projects\projectuni\p4\mailscripts\emailafter1hour.bat'); //also working
//---------------------------------------------exec('mailscripts\newnewsletter.bat'); //also working 
//exec('START E:emailafter1hour.bat');
?>

<?php
$conn =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"website");
if(!$conn){
	echo "Connection failed";
}
?>

<?php
$sql="SELECT * FROM mailing_letter";
$res=mysqli_query($conn,$sql);
if($res){
					
$row=mysqli_fetch_assoc($res);

	//Publish_Time
					date_default_timezone_set('Asia/Karachi');

					$current_stamp=date('Y-m-d H:i:s');  // get current date
					$explode_cd = explode(" ",$current_stamp);  // explode timesatmp into date and time

					$current_date = $explode_cd[0]; // seperate date from timestamp
					$current_time = $explode_cd[1]; // seperate date from timestamp

					echo "Current Date ".$current_date." Current Time ".$current_time."<br><br>";

					$upload_stamp = $row['Upload_Time']; // get timestamp date from db
					$explode_us = explode(" ",$upload_stamp);  // explode timesatmp into date and time

					$upload_date = $explode_us[0]; // seperate date from timestamp
					$upload_time = $explode_us[1]; // seperate date from timestamp

					echo "Upload Date ".$upload_date." Upload Time ".$upload_time."<br><br>";

					$publish_stamp = $row['Publish_Time']; // get timestamp date from db
					$explode_ps = explode(" ",$publish_stamp);  // explode timesatmp into date and time

					$publish_date = $explode_ps[0]; // seperate date from timestamp
					$publish_time = $explode_ps[1]; // seperate date from timestamp

					echo "Publish Date ".$publish_date." Publish Time ".$publish_time."<br><br>";

					if($upload_date==$publish_date){
						echo "Date Match"."<br><br>";
					}

					if($upload_time==$publish_time){
						echo "Time Match"."<br><br>";
					}

/*
					$match = date('Y-m-d', strtotime($date. ' + '.$deadline[0].' days')); // add deadline days to timestamp days
					// if datetoday is less than deadline then
					if($x<$match)*/


}
?>









