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
 $sqloct="SELECT id FROM verdentum WHERE month( interview_date)='10'";
    $resultoct=$conn ->query($sqloct);
    $cntoct=mysqli_num_rows($resultoct);
    $sqloct1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='10' ";
    $resultoct1=$conn ->query($sqloct1);
    $cntoct1=mysqli_num_rows($resultoct1); 
    $sqlnov="SELECT id FROM verdentum WHERE month( interview_date)='11'";
    $resultnov=$conn ->query($sqlnov);
    $cntnov=mysqli_num_rows($resultnov);
    $sqlnov1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='11' ";
    $resultnov1=$conn ->query($sqlnov1);
    $cntnov1=mysqli_num_rows($resultnov1); 
    $sqldec="SELECT id FROM verdentum WHERE month( interview_date)='12'";
    $resultdec=$conn ->query($sqldec);
    $cntdec=mysqli_num_rows($resultdec);
    $sqldec1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='12' ";
    $resultdec1=$conn ->query($sqldec1);
    $cntdec1=mysqli_num_rows($resultdec1); 
    $sqljan="SELECT id FROM verdentum WHERE month( interview_date)='1'";
    $resultjan=$conn ->query($sqljan);
    $cntjan=mysqli_num_rows($resultjan);
    $sqljan1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='1' ";
    $resultjan1=$conn ->query($sqljan1);
    $cntjan1=mysqli_num_rows($resultjan1);
    $sqlfeb="SELECT id FROM verdentum WHERE month( interview_date)='2'";
    $resultfeb=$conn ->query($sqlfeb);
    $cntfeb=mysqli_num_rows($resultfeb);
    $sqlfeb1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='2' ";
    $resultfeb1=$conn ->query($sqlfeb1);
    $cntfeb1=mysqli_num_rows($resultfeb1);
    $sqlmar="SELECT id FROM verdentum WHERE month( interview_date)='3'";
    $resultmar=$conn ->query($sqlmar);
    $cntmar=mysqli_num_rows($resultmar);
    $sqlmar1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='3' ";
    $resultmar1=$conn ->query($sqlmar1);
    $cntmar1=mysqli_num_rows($resultmar1);
    $sqlapril="SELECT id FROM verdentum WHERE month( interview_date)='4'";
    $resultapril=$conn ->query($sqlapril);
    $cntapril=mysqli_num_rows($resultapril);
    $sqlapril1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='4' ";
    $resultapril1=$conn ->query($sqlapril1);
    $cntapril1=mysqli_num_rows($resultapril1);
    $sqlmay="SELECT id FROM verdentum WHERE month( interview_date)='5'";
    $resultmay=$conn ->query($sqlmay);
    $cntmay=mysqli_num_rows($resultmay);
    $sqlmay1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='5' ";
    $resultmay1=$conn ->query($sqlmay1);
    $cntmay1=mysqli_num_rows($resultmay1); 
     $sqljune="SELECT id FROM verdentum WHERE month( interview_date)='6'";
    $resultjune=$conn ->query($sqljune);
    $cntjune=mysqli_num_rows($resultjune);
    $sqljune1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='6' ";
    $resultjune1=$conn ->query($sqljune1);
    $cntjune1=mysqli_num_rows($resultjune1);  
    $sqljuly="SELECT id FROM verdentum WHERE month( interview_date)='7'";
    $resultjuly=$conn ->query($sqljuly);
    $cntjuly=mysqli_num_rows($resultjuly);
    $sqljuly1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='7' ";
    $resultjuly1=$conn ->query($sqljuly1);
    $cntjuly1=mysqli_num_rows($resultjuly1); 
    $sqlaug="SELECT id FROM verdentum WHERE month( interview_date)='8'";
    $resultaug=$conn ->query($sqlaug);
    $cntaug=mysqli_num_rows($resultaug);
    $sqlaug1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='8' ";
    $resultaug1=$conn ->query($sqlaug1);
    $cntaug1=mysqli_num_rows($resultaug1);
    $sqlsep="SELECT id FROM verdentum WHERE month( interview_date)='9'";
    $resultsep=$conn ->query($sqlsep);
    $cntsep=mysqli_num_rows($resultsep);
    $sqlsep1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='9' ";
    $resultsep1=$conn ->query($sqlsep1);
    $cntsep1=mysqli_num_rows($resultsep1);    

?>
<?php
  $dataPoints11 = array(
    array("label"=> "October", "y"=> $cntoct),
    array("label"=> "November", "y"=>$cntnov),
    array("label"=> "December", "y"=>$cntdec),
    array("label"=> "January", "y"=>$cntjan),
    array("label"=> "February", "y"=>$cntfeb),
    array("label"=> "March", "y"=>$cntmar),
    array("label"=> "April", "y"=>$cntapril),
    array("label"=> "May", "y"=>$cntmay),
    array("label"=> "June", "y"=>$cntjune),
    array("label"=> "July", "y"=>$cntjuly),
    array("label"=> "August", "y"=>$cntaug),
    array("label"=> "September", "y"=>$cntsep)
    );
    $dataPoints21 = array(
    array("label"=> "october", "y"=> $cntoct1),
    array("label"=> "November", "y"=> $cntnov1),
    array("label"=> "December", "y"=> $cntdec1),
    array("label"=> "January", "y"=> $cntjan1),
    array("label"=> "February", "y"=> $cntfeb1),
    array("label"=> "March", "y"=> $cntmar1),
    array("label"=> "April", "y"=> $cntapril1),
    array("label"=> "May", "y"=> $cntmay1),
    array("label"=> "June", "y"=> $cntjune1),
    array("label"=> "July", "y"=> $cntjuly1),
    array("label"=> "August", "y"=> $cntaug1),
    array("label"=> "September", "y"=> $cntsep1)

    );   
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer_bar", {
  animationEnabled: true,
  theme: "light2",
  title:{
  text:"graffiti",  
  text: " "
  },
  legend:{
    cursor: "pointer",
    verticalAlign: "center",
    horizontalAlign: "right",
    itemclick: toggleDataSeries
  },
  data: [{
    type: "column",
    name: "Total scheduled",
    indexLabel: "{y}",
    yValueFormatString: "#0.##",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints11, JSON_NUMERIC_CHECK); ?>
  },{
    type: "column",
    name: "Attended",
    indexLabel: "{y}",
    yValueFormatString: "#0.##",
    showInLegend: true,
    dataPoints: <?php echo json_encode($dataPoints21, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render(); 
function toggleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else{
    e.dataSeries.visible = true;
  }
  chart.render();
}
}
</script>
</head>
<body>
  <center> <h3><span class="h3"><b><i>Total Number of Interviews Scheduled And Attended Month Wise Chart</i></b></h3></center>
<div id="chartContainer_bar" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>     