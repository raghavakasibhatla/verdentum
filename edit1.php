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
        $status_update=$_POST['status_update'];
        $result_update=$_POST['result_update'];
        $interview_att_update=$_POST['interview_att_update']; 
        $int_assi=$_POST['int_assi']; 

        // echo $remarks;die();
        //$sql = "INSERT INTO sudhakar_1 (remarks)VALUES('".$_POST['remarks']."')";
  		 	$query = "UPDATE verdentum SET name='$up_name', interview_date='$up_date',  status='$status_update', result='$result_update' ,interview_att='$interview_att_update' ,
        int_assi='$int_assi' WHERE id ='".$user_id."'";
         // echo $query;die();
  		 	$res = mysqli_query($conn, $query);
  		 	if($res){
  		 		include "test.html";
  		 	}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}      
        }?>
<?php  mysqli_close($conn); ?>