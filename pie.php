<?php  
 $conn = mysqli_connect("3.231.238.205", "raghava", "raghava1,", "sudhakar");  
    $sql5="SELECT  id FROM verdentum";
    $result5=$conn ->query($sql5);
    $cnt1=mysqli_num_rows($result5);
    // echo "$cnt1";
    $sql4="SELECT  * FROM verdentum WHERE  interview_att = 'Attended' ";
    $result4=$conn ->query($sql4);
    $cnt=mysqli_num_rows($result4); 
    // echo "$cnt";
 ?>  
 <!DOCTYPE html>  
 <html> 
 <head>

      
      </head>  
      <body>  
         <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
     <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script type="text/javascript">
       Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Interviews status'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
      }
    }
  },
  series: [{
    name: ' ',
    colorByPoint: true,
    data: [{
      name: 'Sheduled',
      y: <?php echo "$cnt1"; ?>,
      sliced: true,
      selected: true
    }, {
      name: 'Attended',
      y: <?php echo "$cnt"; ?>
    }]
  }]
});
      </script>
 </html>  