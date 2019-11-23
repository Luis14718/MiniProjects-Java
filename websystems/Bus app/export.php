<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "busapp");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM usertp";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>IDemployee</th>  
                         <th>Time</th>  
       <th>Date</th>
       <th>Driver</th>
	    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["ID"].'</td>  
                         <td>'.$row["IDemployee"].'</td>  
                         <td>'.$row["Time"].'</td>  
       <td>'.$row["Date"].'</td>  
       <td>'.$row["Driver"].'</td>
	 
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=DailyReport.xls');
  echo $output;
 }
}
?>