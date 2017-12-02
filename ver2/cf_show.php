<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/bootstrap.css"/>
<link rel="stylesheet" href="CSS/fullcalendar.css"/>
<link rel="stylesheet" href="CSS/jquery.datetimepicker.css"/ >
<link rel="stylesheet" href="CSS/main.css"/>
</head>
<?php
if(!empty($_GET['id'])){
	include_once('database/db_tools.php');
	include_once('connect.php');

	$id = $_GET['id'];
	//$r = $db->findByPK('event_confer','event_id',$id)->executeRow();
	$r = $db->findByPK2('invipav_tb','member_tb','invipav_id',$id,'mem_id','mem_id')->executeRow();
	}
?>
<body >
<div class="wrapper">
    <div class="show">
        <table class="table table-hover">
        <thead>
        <tr>
            <th>รายละเอียดการจอง</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>ชื่อผู้จอง</td>
            <td><?php echo $r['mem_name'];?></td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์</td>
            <td><?php echo $r['mem_tel'];?></td>
        </tr>
        <tr>
            <td>ที่อยู่</td>
            <td><?php echo $r['mem_add'];?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?php echo $r['mem_email'];?></td>
        </tr>
        <tr>
            <td>ชื่อผู้ตาย</td>
            <td><?php echo $r['invipav_namedie'];?></td>
        </tr>
        <tr class="success">
            <td>เวลาเริ่มประชุม</td>
            <td><?php echo $r['invipav_datefirst'];?></td>
        </tr>
        <tr class="danger">
            <td>เวลาเลิกประชุม</td>
            <td><?php echo $r['invipav_datelast'];?></td>
        </tr>
        <tr>
            <td>สถานะหลังสวด</td>
            <td><?php echo $r['invipav_deal'];?></td>
        </tr>
        </tbody>
        </table>

            </div>
          </div>
        </div>
    </div>
</div>
</body>
</html>
