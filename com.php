<?php  
 $conn = mysqli_connect("localhost", "root", "", "sudhakar");  
    $sql5="SELECT  id FROM verdentum";
    $result5=$conn ->query($sql5);
    $cnt1=mysqli_num_rows($result5);
    // echo "$cnt1";
    $sql4="SELECT  * FROM verdentum WHERE  interview_att ='Attended' ";
    $result4=$conn ->query($sql4);
    $cnt=mysqli_num_rows($result4); 
    // echo "$cnt";

    $sqlres="SELECT  * FROM verdentum WHERE  result='Selected' ";
    $resultres=$conn ->query($sqlres);
    $cntres=mysqli_num_rows($resultres); 
    // echo "$cnt";

    $sqloct="SELECT id FROM verdentum WHERE month( interview_date)='10' ";
    $resultoct=$conn ->query($sqloct);
    $cntoct=mysqli_num_rows($resultoct);
    $sqloct1="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' AND month( interview_date)='10' ";
    $resultoct1=$conn ->query($sqloct1);
    $cntoct1=mysqli_num_rows($resultoct1);
 ?>  
 <!DOCTYPE html>  
 <html> 
 <head>
      </head>  
      <body>  
         <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script type="text/javascript">
     Highcharts.chart('container', {
  title: {
    text: 'Combination chart'
  },
  xAxis: {
    categories: ['Apples', 'Oranges', 'Pears', 'Bananas', 'Plums']
  },
  labels: {
    items: [{
      html: 'Total Interviews status',
      style: {
        left: '50px',
        top: '18px',
        color: ( // theme
          Highcharts.defaultOptions.title.style &&
          Highcharts.defaultOptions.title.style.color
        ) || 'black'
      }
    }]
  },
  series: [{
    type: 'column',
    name: 'Jane',
    data: [<?php echo "$cntoct"; ?>,0 ,0]  
  }, {
    type: 'column',
    name: 'John',
    data: [2, <?php echo "$cntoct1"; ?>,  6]
  }, {
    type: 'column',
    name: 'Joe',
    data: [4, 3,  <?php echo "$cntoct1"; ?>]
  }, {
    marker: {
      lineWidth: 2,
      lineColor: Highcharts.getOptions().colors[3],
      fillColor: 'white'
    }
  }, {
    type: 'pie',
    name: 'Total Persons',
    data: [{
      name: 'Sheduled',
      y: <?php echo "$cnt1"; ?>,
      color: Highcharts.getOptions().colors[0] // Jane's color
    }, {
      name: 'Attended',
      y: <?php echo "$cnt"; ?>,
      color: Highcharts.getOptions().colors[1] // John's color
    }, {
      name: 'Selected',
      y: <?php echo "$cntres"; ?>,
      color: Highcharts.getOptions().colors[2] // Joe's color
    }],
    center: [100, 80],
    size: 100,
    showInLegend: false,
    dataLabels: {
      enabled: false
    }
  }]
});

      </script>
 </html>  