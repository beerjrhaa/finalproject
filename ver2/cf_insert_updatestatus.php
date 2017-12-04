<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>ระบบคอมพิวเตอร์เซอรวิส(New)</title>
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
	if(!empty($_POST['invipav_id'])){

				$data['invi_status'] = $_POST['invi_status'];
				$rsfix = $db->update('invipav_tb',$data,'invipav_id',$_POST['invipav_id']);
   	}else{
    	echo("ไม่มี");
	}
		if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "admin_index.php?url=admin_cf_index.php&url2=cf_showroomAll.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
