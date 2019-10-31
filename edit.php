<?php
$servername = "3.231.238.205";
$username = "raghava";
$password = "raghava1,";
$dbname = "sudhakar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 $query2 = "SELECT name FROM verdentum";
        $result = mysqli_query($conn,$query2); ?>  

<!DOCTYPE html>
<html>
<head>
   <title>Export to csv</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}


.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

.error {color: #FF0000;}
.visual {color:   #800080;}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
  text-align: left;    
}
* {
  box-sizing: border-box;
  
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-left: 350px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  margin-left: 350px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
   margin-right: 420px;
}

/*input[type=submit]:hover {
  background-color: #45a049;
   margin-right: 410px;
   background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
   margin-right: 420px;
}*/
/*
input[type=radio]:hover {
  background-color: #45a049;
   margin-right: 410px;

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}*/

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] input[type=text] {
    width: 100%;
    margin-top: 0;
  }
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  float: right;
.input-group {
    margin-top:10px;
    width:60%;
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
}
label, input {
    flex-basis:100px;
</style>
<div class="card">
  <form action="index.php" method="POST">
  <a href="index.php" class="button">BACK TO HOME PAGE</a>
    <br></br>
  </form>
<?php 
 if (isset($_GET['id']) ){
            $user_id=$_GET['id'];
            // echo ($user_id);die();
            // $name_edit = $_POST['name1'];
            $query = "SELECT * FROM verdentum WHERE id ='".$user_id."'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_array($result); 
 } 
?>
 <form name="edit" action="edit.php" method="post">
	<label>Name :</label>
      <input type="hidden" class="input-group" name="id" value="<?php if(!empty($data)){echo $data['id'];} ?>">
      <input name="up_name" class="input-group" required="required" type="text" readonly value= "<?php if(!empty($data)){ echo $data['name'];}?>"> 
  <label>Date of interview:</label>
  		<input name="up_date" class="input-group" required="required" type="text"  readonly value= "<?php if(!empty($data)){echo $data['interview_date']; } ?>">
  <label>Interview assigned to:</label>
      <input name="int_assi" class="input-group" required="required" type="text"  value= "<?php if(!empty($data)){echo $data['int_assi']; } ?>">
  <label>Status:</label>      
      <input name="status_update" class="input-group" required="required" type="text" value= "<?php if(!empty($data)){echo $data['status']; } ?>">
      <label>Result:</label>      
      <input name="result_update" class="input-group" required="required" type="text" value= "<?php if(!empty($data)){echo $data['result']; } ?>">
      <label>Interview Attendance:</label><br>    
      <label><input type="radio" name="interview_att_update" value="Attended" required="required">Attended</label>
      <label><input type="radio" name="interview_att_update" value="Not attended" required="required">Not attended</label>
      <br></br>
  		<input name="stdupdate" type="submit" value="Update" />  
 </form>
     <?php if ( isset($_POST['stdupdate'])){		 	
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
  		 		echo "data updated";
  		 	}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}      
        }?>
<?php  mysqli_close($conn); ?>

</div>

</body>
</html> 
