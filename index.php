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
<?php $sql = "SELECT * FROM verdentum ORDER BY id DESC limit 5";  
    $result = $conn->query($sql);
    $sql1="SELECT count(*) AS id FROM verdentum";
    $result1=$conn ->query($sql1);
    $sql5="SELECT  id FROM verdentum";
    $result5=$conn ->query($sql5);
    $cnt1=mysqli_num_rows($result5);
    $sql2="SELECT  count(*) AS id FROM verdentum WHERE DATE(interview_date) = CURRENT_DATE() ";
    $result2=$conn ->query($sql2);
    $sql3="SELECT  * FROM verdentum WHERE DATE(interview_date) = CURRENT_DATE() limit 10";
    $result3=$conn ->query($sql3); 
    $sql4="SELECT  * FROM verdentum WHERE  interview_att = 'Attended'";
    $result4=$conn ->query($sql4);
    $cnt=mysqli_num_rows($result4); ?>
<?php
 
$dataPoints = array(
  array("label"=> " Scheduled", "y"=>$cnt1),
  array("label"=> " Attended", "y"=>$cnt),
);
  
?>


<!DOCTYPE html>
<html>
  <title>VERDENTUM</title> 
  <link rel="icon" href="images.png" type="image" sizes="10x10">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</meta>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      * {
        box-sizing: border-box;
      }

      /* Add a gray background color with some padding */
      body {
        font-family: Arial;
        padding: 20px;
        background: #f1f1f1;
      }

      /* Header/Blog Title */
      .header {
        padding: 1px;
        font-size: 2px;
        text-align: center;
        background: white;
      }
      .h3 {color: #0000A0}

      /* Create two unequal columns that floats next to each other */
      /* Left column */
      .leftcolumn {   
        float: left;
        width: 75%;
      }

      /* Right column */
      .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
      }

      /* Fake image */
      .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
      }

      /* Add a card effect for articles */
      .card {
         background-color: white;
         padding: 20px;
         margin-top: 20px;
         max-height: 465px;
         overflow-y: scroll;

      }
     /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      .error {color: #0000FF;}
      .visual {color:   #800083;}
      /* Footer */
      .footer {
        padding: -10px;
        text-align: center;
        background: white;
        margin-top: 20px;
        height: 70px;
      }
      .p {font-size: 80%; line-height:100%; padding: 4px }
      p.serif{
        font-family:"Times New Roman",Times,serif;
        font-size: 125%;

      }

      /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {   
          width: 100%;
          padding: 0;
        }
      }
      .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        cursor: pointer;
        width: 220px;
      }
      .header-image {
    width: auto;
    max-width: 20%;
    margin: 0 auto;
    display: block;
    }
    </style>
  </head>
  <body>
    <div class="header" style="padding: -10px;" > 
      <img src="download.png" class="header-image" alt="verdentum"  style="vertical-align: middle;">
    </div>
  <div class="card-group" >
  <div class="card">
    <img  class="card-img-top" >
    <div  class="card-body"  >
     <center><a href="go.php" class="button" style=" text-decoration: none"><strong>CREATE NEW INTERVIEW</strong></a></center>
     <br>
      <br>
      <br>
   <center> <a href="update.php" class="button" style=" text-decoration: none"><strong>RESCHEDULE / MODIFY</strong></a></center>
     <br>
      <br>
      <br>
      <!-- <h5>LIST OF INTERVIEW SCHEDULED</h5> -->
    <center><a href="go1.php" class="button" style=" text-decoration: none"><strong>SCHEDULED LIST</strong></a></center>
    <br></br>
    <center> <h3><span class="h3"><b><i>Attendees Summary</i></b></h3></center>
      <?php if ($result->num_rows > 0) {
            // output data of each row
            while($row5 = $result4->fetch_assoc()) { ?>
              <p class="serif"><b>Name</b>&emsp;&emsp;&nbsp;&emsp;&emsp;             :<span class="error"> <?php echo $row5['name']; ?>  </span></p>
              <p class="serif"><b>Interview Date</b>&nbsp;&nbsp;:<span class="error">  <?php echo $row5['interview_date'];?></span></p>
              <p class="serif"><b>Profile</b>&emsp;&emsp;&nbsp;&emsp;&ensp;        :<span class="error"> <?php echo $row5['profile'];?> </span> </p>
              <p class="serif"><b>Status</b>&emsp;&emsp;&nbsp;&emsp;&ensp;&nbsp;  :<span class="error"> <?php echo $row5['status'];?> </span></p>
              <p class="serif"><b>Result</b>&emsp;&emsp;&nbsp;&emsp;&ensp;&nbsp;  :<span class="error"> <?php echo $row5['result'];?> </span></p>
              <center><p class="serif"> * * * * * * *</p></center>    
            <?php }
          } else {
            echo "Sorry, no more recently updated";
          } ?>
    </div>
  </div>
    <div class="card">
    <img class="card-img-top" >
    <div class="card-body">
     <center> <h3><span class="h3"><b><i>Recently Updated</i></b></h3></center>
      <!-- <p class="card-text"> <h3><span class="h3"><b><i>Recently Updated</i></b></h3> -->
          <?php if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { ?>
              <p class="serif"><b>Name</b>&emsp;&emsp;&nbsp;&emsp;&emsp;             :<span class="error"> <?php echo $row['name']; ?>  </span></p>
              <p class="serif"><b>Interview Date</b>&nbsp;&nbsp;:<span class="error">  <?php echo $row['interview_date'];?></span></p>
              <p class="serif"><b>Profile</b>&emsp;&emsp;&nbsp;&emsp;&ensp;        :<span class="error"> <?php echo $row['profile'];?> </span> </p>
              <p class="serif"><b>Phone Number</b>&nbsp;  :<span class="error"> <?php echo $row['phone_number'];?> </span></p>
              <center><p class="serif"> * * * * * * *</p></center>    
            <?php }
          } else {
            echo "Sorry, no more recently updated";
          } ?></p>
    </div>
  </div>
  <div class="card">
    <img  class="card-img-top" >
    <div class="card-body">
      <center><h3><span class="h3"><b><i>List of Interviews Today</i></b></h3></center>
          <?php if ($result3->num_rows > 0) {
            // output data of each row
            while($row3 = $result3->fetch_assoc()) { ?>  
              <p class="serif"><b>Name</b>&emsp;&emsp;&emsp;&emsp;               :<span class="error"> <?php echo $row3['name'];  ?>  </span></p>
              <p class="serif"><b>Interview Date</b>&nbsp;&nbsp;:<span class="error">  <?php echo $row3['interview_date'];?></span></p>
              <p class="serif"><b>Time</b>&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;              :<span class="error">  <?php echo $row3['time_hh'];?></span></p>
              <p class="serif"><b>Profile</b>&emsp;&emsp;&emsp;&ensp;&nbsp;         :<span class="error"> <?php echo $row3['profile'];?> </span> </p>
              <p class="serif"><b>Phone Number</b>&nbsp;       :<span class="error"> <?php echo $row3['phone_number'];?> </span></p>
             <center><p class="serif"> * * * * * * *</p></center> 
            <?php }
          } else {
            echo "Sorry, no interviews today";
          } ?>
    </div>   
    </div>     
<div class="card">
    <img  class="card-img-top">
    <div class="card-body">
    <!-- <marquee>  <h5 ><span class="h3"class="card-title" >VERDENTUM INTERNAL WORKS </h5> </span></marquee> -->
               <?php if ($result1->num_rows > 0) {
            // output data of each row
            while($row1 = $result1->fetch_assoc()) { ?>
              <p class="serif"><b>Total interviews scheduled&nbsp;&nbsp;&nbsp;&nbsp;:<span class="error"> <?php echo $row1['id'];?></b></span></p> 
            <?php }
          } else {
            echo "0 results";
          }
          ?>
          <p class="serif"><b>Total interviews attended &emsp;&nbsp;:<span class="error"> <?php echo $cnt;?></b></span></p>
         <?php if ($result2->num_rows > 0) {
            // output data of each row
            while($row2 = $result2->fetch_assoc()) { ?>
              <p class="serif"><b>Today interviews scheduled&nbsp;&nbsp;:<span class="error"> <?php echo $row2['id'];?></b></span></p>
            <?php }
          } else {
            echo "0 results";
          } ?>
          
          <!-- <div id="chartContainer_pie" style="height: 240px; width: 100%;"></div> -->
          <!-- <script src="graph.js"></script> -->
          <!-- <a href="month.php">click</a> -->
          <?php include 'pie.php';?> 
    </div>
  </div>
</div>
<div class="card-group" >
  <div class="card">
    <img  class="card-img-top" >
    <div  class="card-body"  >
    <?php include 'month.php';?> 
    </div>
  </div>
</div>
      <footer class="footer footer-static footer-light navbar-border navbar-shadow" style="margin-left: 0px;position: fixed; left: 0; bottom: 0; width: 100%; margin-bottom: -20px;">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block"><img style="height: 35px; width:auto; padding-left: 20px; padding-right: 40px;"> <img src="download.png" style="height: 35px; width:auto;"></span>
      </footer> 
  </body>
</html>
