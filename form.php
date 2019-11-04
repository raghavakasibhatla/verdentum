<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php
$servername = "3.231.238.205";
  $username = "raghava";
  $password = "raghava1,";
$dbname = "sudhakar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
if(!empty($_FILES['fileupload']['name'])){ 
$file_info = pathinfo($_FILES['fileupload']['name']);
                        $file_directory = "uploads/";
                        $new_file_name = uniqid().".".$file_info["extension"];

                        if(move_uploaded_file($_FILES['fileupload']["tmp_name"], $file_directory . $new_file_name)){

                        }else
                        {
                          echo "unable to move the file";
                        }

                      }else{
                        $new_file_name="";
                      }

 $sql = "INSERT INTO  verdentum (profile,relevant_exp,domain,notice_period,leave_text,name,gender,email,phone_number,experience,current_ctc,expected_ctc,first_contact,mode,skype_id,interview_date,time_hh,comments,file)VALUES(
 '".$_POST['profile_user']."',
 '".$_POST['relevant']."',
 '".$_POST['domains']."',
 '".$_POST['notice']."',
 '".$_POST['leave']."',
 '".$_POST['name']."',
 '".$_POST['sex']."',
 '".$_POST['email']."',
 '".$_POST['phone']."',
 '".$_POST['exp']."',
 '".$_POST['current_ctc']."',
 '".$_POST['expected_ctc']."',
 '".$_POST['contact']."',
 '".$_POST['mode']."',
 '".$_POST['skype']."',
 '".$_POST['int_date']."',
 '".$_POST['time_sec']."',
 '".$_POST['comments']."',
 '".$new_file_name."')";

if ($conn->query($sql) === TRUE) {
      include 'test.html';
     // include 'go1.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/*
$sql = "SELECT * FROM verdentum";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "NAME :{".$row['name']."}  <br> ".
         "LAST NAME :{".$row['last_name']."}  <br>  ".
         "GENDER :{".$row['sex']."}  <br>  ".
         "AGE :{".$row['age']."}  <br>  ".
         "TECHNOLOGY :{".$row['technology']."}  <br>  ".
         "PAN :{".$row['pan_number']."}  <br>  ".
         "DATE OF BIRTH :{".$row['date_of_birth']."}  <br>  ".
         "VILLAGE :{".$row['village_name']."}  <br>  ".
         "EMAIL :{".$row['e_mail']."}  <br>  ".
         "PHONE NUMBER :{".$row['phone_number']."}  <br>  ".
         "DOWNLOAD File :{".$row['file_upload']."}  <br>  ".

         
         "--------------------------------<br>";
    }
} else {
    echo "0 results";
}*/

$conn->close();
?>