<?php
include_once("dbMysqli.php");

if($_POST){

	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$add = $_POST['add'];
	$email = $_POST['email'];
	$fistday = $_POST['datefirst'];
	$lastday = $_POST['dateend'];
	$status = $_POST['statusdie'];
	$namedie = $_POST['namedie'];
	$dealdie = $_POST['die'];
	$statuspav = $_POST['statuspav'];
	$idPav = $_POST['idPav'];

	echo $name."<br>";
	echo $tel."<br>";
	echo $add."<br>";
	echo $email."<br>";
	echo $fistday."<br>";
	echo $lastday."<br>";
	echo $status."<br>";
	echo $namedie."<br>";
	echo $dealdie."<br>";
	echo $statuspav."<br>";

	 $sql2 = "INSERT INTO `member_tb` (mem_name,mem_tel,mem_add,mem_email) "
             . "VALUES ('$name', '$tel', '$add','$email')";
    $result2 = mysqli_query($link, $sql2);

	$last_id = mysqli_insert_id($link);

	$sql = "INSERT INTO `invipav_tb` (invipav_datefirst,invipav_datelast,invipav_namedie,invipav_deal,invipav_statusdie,invi_status,pav_id,mem_id) "
                . "VALUES ('$fistday', '$lastday', '$namedie','$dealdie','$status','$statuspav','$idPav','$last_id')";
            $result = mysqli_query($link, $sql);

	if($result && $result2){
		echo "ได้นะไอสัส";
		echo "<script>window.location = 'cf_index.php';</script>";

	}
	else{

		echo "ไม่ได้ไอสัส";
	}

}
?>
