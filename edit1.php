<?php
$servername = "localhost";
$username = "root";
$password = "";
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
<title>VERDENTUM</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

<style>
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}
</style>
</head>
<body>

<div class="card">
 <form action="index.php" method="POST">
  <center>
  <a href="index.php" class="button">BACK TO HOME PAGE</a>
 </center><br></br>
  </form>
<?php 
 if (isset($_GET['id']) ){
            $user_id=$_GET['id'];
            // echo ($user_id);die();
            // $name_edit = $_POST['name1'];
            $query = "SELECT * FROM sudhakar_1 WHERE id ='".$user_id."'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_array($result); 
 } 
?>
<CENTER>
 <form name="edit" action="edit.php" method="post">
  <label>NAME :</label>
      <input type="hidden" class="input-group" name="id" value="<?php if(!empty($data)){echo $data['id'];} ?>">
      <input name="up_name" class="input-group" required="required" type="text" readonly value= "<?php if(!empty($data)){ echo $data['name'];}?> <?php if(!empty($data)){ echo $data['last_name'];}?>"> 
  <label>DATE OF INTERVIEW:</label>
      <input name="up_date" class="input-group" required="required" type="text"  readonly value= "<?php if(!empty($data)){echo $data['age']; } ?>">
  <label>UPDATES:</label>      
      <input name="remarks" class="input-group" required="required" placeholder="UPDATES" type="text" value= "<?php if(!empty($data)){echo $data['remarks']; } ?>">
      <br></br>
      <input name="stdupdate" type="submit" value="Update" />  
      </CENTER>
 </form>
     <?php if ( isset($_POST['stdupdate'])){      
        $user_id=$_POST['id'];
        $up_name=$_POST['up_name'];
        $up_date=$_POST['up_date'];
        $remarks=$_POST['remarks'];
        // echo $remarks;die();
        //$sql = "INSERT INTO sudhakar_1 (remarks)VALUES('".$_POST['remarks']."')";
        $query = "UPDATE sudhakar_1 SET age='$up_date', name='$up_name', remarks='$remarks' WHERE id ='".$user_id."'";
        // echo $query;die();
        $res = mysqli_query($conn, $query);
        if($res){
          echo "data updated";
        }      
        }?>
<?php  mysqli_close($conn); ?>
 
</div>
</form>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format : 'yyyy-mm-dd'
  }).datepicker('update', new Date());
});
  $(function () {
  $("#datepicker1").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format : 'yyyy-mm-dd'
  }).datepicker('update', new Date());
}); 
</script>
</html> 
