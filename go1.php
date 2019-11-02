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

?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VERDENTUM DATA</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container mt-5 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}
.container mt-5 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  width: 100%;
}
.container mt-5 {
  padding: 2px 16px;
  width: 100%;
}
.error {color: #FF0000;}
.visual {color:   #800080;}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  /*box-sizing: border-box;*/
  /*display: inline-block;*/
  /*vertical-align: middle;*/
  /*overflow: hidden;*/
  width: auto; /*if you want a fixed width, set it here, else set to auto*/
  /*min-width: 0/*100%*/; if you want a % width, set it here, else set to 0*/
  height: 188px/*100%*/; /*set table height here; can be fixed value or %*/
  min-height: 0/*104px*/; /*if using % height, make this large enough to fit scrollbar arrows + caption + thead*/
  font-family: Verdana, Tahoma, sans-serif;
  font-size: 15px;
  line-height: 20px;
  /*padding: 20px 0 20px 0; need enough padding to make room for caption*/
  text-align: left;
  scroll-behavior: auto;

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
  border: 1px solid #ccc;
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
.scrollingtable {
  box-sizing: border-box;
  display: inline-block;
  vertical-align: middle;
  overflow: hidden;
  width: auto; /*if you want a fixed width, set it here, else set to auto*/
  min-width: 0/*100%*/; /*if you want a % width, set it here, else set to 0*/
  height: 188px/*100%*/; /*set table height here; can be fixed value or %*/
  min-height: 0/*104px*/; /*if using % height, make this large enough to fit scrollbar arrows + caption + thead*/
  font-family: Verdana, Tahoma, sans-serif;
  font-size: 15px;
  line-height: 20px;
  padding: 20px 0 20px 0; /*need enough padding to make room for caption*/
  text-align: left;

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
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }

</style>
<body>
<div class="container-fluid mt-5" width="100%" >
<!-- <div class="card">
 -->  <form action="index.php" method="POST">
  <a href="index.php" class="button">BACK TO HOME PAGE</a>
    <br></br>
  </form>
  <form method="post" action="export.php" align="right">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>
  <?php 
  $sql = "SELECT * FROM verdentum ORDER BY id DESC";  
  $result = $conn->query($sql);
  ?>
  <h2>Saved data in Verdentum</h2>
  <table id="table_data" class="display nowrap" style="width:100%">
  <thead>
    <th>S.NO</th>
    <th>PROFILE</th>
    <th>NAME</th>
    <th>GENDER</th>
    <th>EMAIL ID</th>
    <th>PHONE NUMBER</th>
    <th>EXPERIENCE IN YEARS</th>
    <th>CURRENT CTC</th>
    <th>EXPECTED CTC</th>
    <th>FIRST CONTACT STATUS</th>
    <th>MODE OF INTERVIEW</th>
    <th>SKYPE/ZOOM ID</th>
    <th>INTERVIEW DATE</th>
    <th>TIME</th>
    <th>COMMENTS</th>
    <th>EDIT</th>
    <th>ASSIGNED TO</th>
    <th>STATUS</th>
    <th>RESULT</th>
    <th>INTERVIEW ATTENDANCE</th>
  <!--   <th>REASON TO CHANGE INTERVIEW DATE</th> -->
    <th>UPLOADED FILE</th>
    
  </thead>
  <tbody>
     <?php
  $count=0;
  ?>
<?php
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) { ?>
      <?php
      $count+=1;
      ?>
  <tr> 
    <td><?php echo $count; ?></td>
    <td><?php echo $row['profile']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['phone_number'];?></td>
    <td><?php echo $row['experience'];?></td>
    <td><?php echo $row['current_ctc'];?></td>
    <td><?php echo $row['expected_ctc'];?></td>
    <td><?php echo $row['first_contact'];?></td>
    <td><?php echo $row['mode'];?></td>
    <td><?php echo $row['skype_id'];?></td>
    <td><?php echo $row['interview_date'];?></td>
    <td><?php echo $row['time_hh'];?></td>
    <td><?php echo $row['comments'];?></td>
   
    <!-- <td><?php echo $row['file_name'];?></td> -->
    <td>  <a href="edit.php?id=<?php echo $row['id'];?>" name="name_edit" class="butt" value="edit">EDIT</a> </td>
    <td><?php echo $row['int_assi'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['result'];?></td>
    <td><?php echo $row['interview_att'];?></td>
    <!-- <td><?php echo $row['change_int'];?></td> -->
    <td><a href="uploads/<?php echo $row['file']; ?>" download>Download file</a></td>
  </tr>
  <?php }
} else {
    echo "0 results";
} ?>
</table>
</tbody>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#table_data').DataTable( {
        "scrollX": true
    } );
} );
    </script>
</body>
</html> 
