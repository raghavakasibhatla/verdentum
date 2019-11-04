<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("3.231.238.205", "raghava", "raghava1,", "sudhakar");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'profile', 'Relevant experience in years','What domains have you worked on?','Whats your notice period?','Why do you want to leave your current role/company?','name', 'Gender', 'email', 'Phone_number','Experience','current CTC','Expected CTC','First Contact Status','mode of interview','skype id','interview date','time','comments','file','status','result','interview attendance','reason to change interview','assignedto'));  
      $query = "SELECT * FROM verdentum ORDER BY id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>