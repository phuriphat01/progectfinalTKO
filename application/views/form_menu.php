<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<br>
<br>

<div id="container"  align="center">
	<form action="Manage_menu/reg_train" method="post">
	
	<div class="alert alert-primary" role="alert">
	<h1>เพิ่มข้อมูลรถไฟ</h1>
</div>

	<div class="card">
  <div class="card-body">
  
 
	<div id="body"  align="center">
		<form action="" method="post">
		<table style="width:50%" border="0">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<tr>
	
	
		<td>ขบวน </td>
		<td>
			<input type="text" name="T_id" placeholder="เลขขบวน">
		</td>
	</tr>
	<tr>
		<td>สถานี</td>
		<td>
			<input type="text" name="station" placeholder="ชื่อสถานีต้นทาง">
		</td>
	</tr>
	<tr>
		<td>เวลาออก</td>
		<td>
			<input type="text" name="time_out" placeholder="เวลาออกจากต้นทาง">
		</td>
	</tr>
	<tr>
		<td>ถึง</td>
		<td>
			<input type="text" name="to" placeholder="ถึงห้วยราช">
		</td>
	</tr>
	<tr>
		<td>ออก</td>
		<td>
			<input type="text" name="out" placeholder="เวลาออกจากห้วยราช">
		</td>
	</tr>
	<tr>
		<td>สถานี</td>
		<td>
			<input type="text" name="station_destination" placeholder="ชื่อสถานีปลายทาง">
		</td>
	</tr>
	<tr>
		<td>ถึงเวลา</td>
		<td>
			<input type="text" name="to_time" placeholder="ถึงปลายทาง">
		</td>
	</tr>
	<tr>
		<td>หมายเหตุ</td>
		<td>
			<input type="text" name="note" placeholder="ประเภทรถไฟ">
		</td>
	</tr>
	<tr>
		<td> 
			
		</td>
		<td>
		  <input type="submit" value="เพิ่มเมนู">
		  
		</td>
		
	</tr>	
	</table>
	</form>
	<a href="http://localhost/finaltko/index.php/manage_menu/showall">แสดงเมนูทั้งหมด</a>
	
	</div>
	</div>
</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>