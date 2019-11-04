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
<div class="card">
  <center><img src="download.png"   alt="verdentum"  style="width:20%"></center>
  <div class="container">   
    <h4><b>CONTACT FORM </b></h4> 
    <a href="index.php" class="button">BACK</a>
    <br></br>
    <form action="form.php" method="POST" enctype="multipart/form-data">
 Profile <span class="error">*  </span> <br>
 <select name="profile_user" size="1" required="required">
                <option value="SELECT A VALUE">SELECT A VALUE </option>
                <option value="UI Developer">UI Developer </option>
                <option value="Front End developer">Front End developer </option>
                <option value="Mobile App Dev">Mobile App Dev </option>
                <option value="Testing">Testing </option>
                <option value="IONIC">IONIC </option>
                <option value="UI Developer">UI Developer </option>
                <option value="POWER BI">POWERBI </option>
                <option value="Backend developer">Backend developer </option>
                <option value="DATA SCIENCE">DATA SCIENCE </option>
                <option value="AI">AI</option>
                <option value="Full Stack developer">Full Stack developer </option>
                <option value="PHP Development">PHP Development </option>
                <option value="Operations">Operations</option>
                <option value="Andriod">Andriod</option>
                <option value="AWS">AWS</option>
                <option value="OTHERS">OTHERS</option>
                </select><br>
Relevant experience in years<br>
<input type="text"  name="relevant" placeholder="Enter value" ><br>
What domains have you worked on?<br>
<input type="text"  name="domains" placeholder="Enter domains" ><br>
Whats your notice period?<br>
<input type="text"  name="notice" placeholder="Enter value" ><br>
Why do you want to leave your current role/company?<br>
<input type="text"  name="leave" placeholder="Enter text" ><br>
Name<span class="error">*  </span> <br>
<input type="text"  name="name" placeholder="Enter Name" required="required"><br>
Gender<span class="error">*  </span> <br>
<input type="radio" name="sex" value="Male" required="required">Male<br>
<input type="radio" name="sex" value="Female" required="required">Female<br>
E-mail id<span class="error">*  </span> <br>
<input type="text" name="email" placeholder="Enter email" required="required"><br>
Phone number<span class="error">*  </span> <br>
<input type="text" name="phone" placeholder="Enter Phone number" required="required"><br>
Experience in years<span class="error">*  </span> <br>
<select name="exp" size="1" required="required">
                <option value="SELECT A VALUE">SELECT A VALUE </option>
                 <option value="FRESHER">FRESHER</option>
                <option value="1">1 </option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4 </option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="between 6-9">6-9</option>
                <option value="ABOVE 9">Above 9</option>            
                </select><br>
Current CTC<span class="error">*  </span> <br>
<input type="text"  name="current_ctc" placeholder="Enter current ctc" required="required"><br>
Expected CTC<span class="error">*  </span> <br>
<input type="text"  name="expected_ctc" placeholder="Enter expected ctc" required="required"><br>
First Contact Status<span class="error">*  </span> <br>
<input type="text"  name="contact" placeholder="Enter status" required="required"><br>
Mode of interview<span class="error">*  </span> <br>
<input type="radio" name="mode" value="In-person" required="required">In person<br>
<input type="radio" name="mode" value="Skype" required="required">Skype<br>
Skype I'd
<input type="text"  name="skype" placeholder="Enter skype id"><br>
Interview Date<span class="error">*  </span> <br>
<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text" name="int_date" readonly />
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>
Time <span class="error">*  </span> <br>
<input type="text"  name="time_sec" placeholder="HH:MM AM" required="required"><br>
Comments
<input type="text"  name="comments" placeholder="Enter comments"><br>

    Upload resume
    <input type="file" name="fileupload" id="fileToUpload" >
<input type="hidden" name="remarks" value="null">
<br></br>
<input type="submit"  name="login" ><br>
<p><span class="error">* Required field</span></p> 
  </div>
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
