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
$conn = new mysqli($servername, $username, $password, $dbname);
 $query2 = "SELECT name FROM verdentum";
        $result = mysqli_query($conn,$query2); ?>  
?>
<!DOCTYPE html>
<html>
<title>VERDENTUM</title> 
  <link rel="icon" href="images.png" type="image" sizes="10x10">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

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
  width: 100%;
  padding: 12px;
  border: 1px solid #6dce82;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

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
  .col-25, .col-75, input[type=submit] {
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

  body {
  background: #ccc;
  font: 87.5%/1.5em 'Lato', sans-serif;
  margin: 0;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td {
  padding: 0;
}

.container {
  left: 50%;
  position: fixed;
  top: 50%;
  transform: translate(-50%, -50%);
}

.calendar-container {
  position: relative;
  width: 450px;
}

.calendar-container header {
  border-radius: 1em 1em 0 0;
  background: #e66b6b;
  color: #fff;
  padding: 3em 2em;
}

.day {
  font-size: 8em;
  font-weight: 900;
  line-height: 1em;
}

.month {
  font-size: 4em;
  line-height: 1em;
  text-transform: lowercase;
}

.calendar {
  background: #fff;
  border-radius: 0 0 1em 1em;
  -webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
  box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
  color: #555;
  display: inline-block;
  padding: 2em;
}

.calendar thead {
  color: #e66b6b;
  font-weight: 700;
  text-transform: uppercase;
}

.calendar td {
  padding: .5em 1em;
  text-align: center;
}

.calendar tbody td:hover {
  background: #cacaca;
  color: #fff;
}

.current-day {
  color: #e66b6b;
}

.prev-month,
.next-month {
  color: #cacaca;
}

.ring-left,
.ring-right {
  position: absolute;
  top: 230px;
}

.ring-left { left: 2em; }
.ring-right { right: 2em; }

.ring-left:before,
.ring-left:after,
.ring-right:before,
.ring-right:after {
  background: #fff;
  border-radius: 4px;
  -webkit-box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
  box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
  content: "";
  display: inline-block;
  margin: 8px;
  height: 32px;
  width: 8px;
}
label{margin-left: 20px;}
#datepicker{width:180px; margin: 0 20px 20px 20px;}
#datepicker > span:hover{cursor: pointer;}
.header-image {
    width: auto;
    max-width: 20%;
    margin: 0 auto;
    display: block;
    }

</style>
</head>
<body>
<div class="card"  background="download.jpg">

  <form action="index.php" method="POST">
  <a href="index.php" class="button">BACK TO HOME PAGE</a>
    <br></br>
  </form>
 <form name="name1" action="update.php"  method="post">
  <label>Select the Name for edit :</label>
    <select name="name1" required>
        <option value="">Select Name </option> 
        <?php while( $row = mysqli_fetch_array($result) ){
            echo "<option value='".$row['name']."'>".$row['name']."</option>";
        } ?> <br></br>
       <center> <input name="stdsearch" type="submit" value="Search" /> </center>
        <br></br>
    </select>   
</form>
<?php if ( isset($_POST['stdsearch']) ){
            $searchUsername = $_POST['name1'];
            $query = "SELECT * FROM verdentum WHERE name ='".$searchUsername."'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_array($result); 
} ?>
 <form name="frmedit" action="update.php" method="post">
  <label>Name :</label>
      <input type="hidden" name="id" value="<?php if(!empty($data)){echo $data['id'];} ?>">
      <input name="up_name" required="required" type="text" value= "<?php if(!empty($data)){ echo $data['name'];}?>">
  <label>Date of interview :</label>
      <input name="up_date" required="required" type="text" value= "<?php if(!empty($data)){echo $data['interview_date']; } ?>"> 
  <label>Time:</label>
      <input name="time_update" required="required" type="text" value= "<?php if(!empty($data)){echo $data['time_hh']; } ?>"> 
  <label>Mode of interview:</label>
      <input name="mode_update" required="required" type="text" value= "<?php if(!empty($data)){echo $data['mode']; } ?>">   
  <label>Skype/Zoom id:</label>
      <input name="skype_update" required="required" type="text" value= "<?php if(!empty($data)){echo $data['skype_id']; } ?>">
  <label>Reason to change :</label>      
      <input name="change" required="required" type="text" value= "<?php if(!empty($data)){echo $data['change_int']; } ?>">
      <br></br>
      <input name="stdupdate" type="submit" value="Update" />  
 </form>
     <?php if ( isset($_POST['stdupdate'])){      
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
          echo "data updated";
        }      
        }?>
<?php  mysqli_close($conn); ?>
</html> 
