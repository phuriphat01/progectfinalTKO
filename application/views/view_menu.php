<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>
<table  border="1"> 
<table  border="1"> 
	<table align="center" border="1">
  <tr>
    <td rowspan="2">ขบวน</td>
   <td colspan="2"><center> ต้นทาง</center></td>
   <td colspan="2"><center> ห้วยราช</center></td>
   <td colspan="2"><center> ปลายทาง</center></td>
   <td rowspan="2">หมายเหตุ</td>
  </tr> 
  <tr>
    <td>สถานี</td>
	<td>เวลาออก</td>
	<td>ถึง</td>
	<td>ออก</td>
	<td>สถานี</td>
	<td>ถึงเวลา</td>
  </tr>
  
  
  
<?php
	foreach($menus->result_array() as $menu){

		echo "<tr align=\"center\">";
			echo"<td>".$menu['T_id'];
			echo"<td>".$menu['station']."</td>";
			echo"<td>".$menu['time_out']."</td>";
			echo"<td>".$menu['to']."</td>";
			echo"<td>".$menu['out']."</td>";
			echo"<td>".$menu['station_destination']."</td>";
			echo"<td>".$menu['to_time']."</td>";
			echo"<td>".$menu['note']."</td>";
			}
?>
		</table>
		<a href="http://localhost/finaltko/index.php/manage_menu">ไปหน้าเพิ่มเมนู</a>
	</div>

	
</div>

</body>
</html>