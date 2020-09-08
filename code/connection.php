<?php
$conn =mysqli_connect("localhost","root","");
mysqli_select_db($conn,"website");
if(!$conn){
	echo "Connection failed";
}
?>