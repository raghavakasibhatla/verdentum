<?php
$servername = "3.231.238.205";
  $username = "raghava";
  $password = "raghava1,";
$dbname = "sudhakar";
$conn = new mysqli($servername, $username, $password, $dbname);

if ( isset($_POST['stdupdate'])){		 	
  		 	$user_id=$_POST['id'];
  		 	$up_name=$_POST['up_name'];
  		 	$up_date=$_POST['up_date'];
        $time_update=$_POST['time_update'];
        $mode_update=$_POST['mode_update'];
        $skype_update=$_POST['skype_update'];
        $change=$_POST['change'];
        // echo $remarks;die();
        //$sql = "INSERT INTO sudhakar_1 (remarks)VALUES('".$_POST['remarks']."')";
  		 	$query = "UPDATE verdentum SET interview_date='$up_date', name='$up_name', time_hh='$time_update' ,mode='$mode_update', skype_id='$skype_update', change_int='$change' WHERE id ='".$user_id."'";
        // echo $query;die();
  		 	$res = mysqli_query($conn, $query);
  		 	if($res){
  		 		include 'test.html';      
  		 	}         
}
?>