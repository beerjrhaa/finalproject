<?php
include_once("dbMysqli.php");

$sql3 = "SELECT * FROM user_tb JOIN member_tb
 			ON user_tb.mem_id = member_tb.mem_id ";
 	$result_product3 = mysqli_query($link, $sql3);
    $count_produc3 = mysqli_fetch_assoc($result_product3);

if($_POST){

	if(!empty($_POST['wat'])){
		$name = $_POST['name'];
		$tel = $_POST['tel'];
		$add = $_POST['add'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$nummonk = $_POST['nummonk'];
		$place = $_POST['wat'];

		$sql2 = "INSERT INTO `member_tb` (mem_name,mem_tel,mem_add,mem_email) "
             . "VALUES ('$name', '$tel', '$add','$email')";
		$result2 = mysqli_query($link, $sql2);

		$last_id = mysqli_insert_id($link);

		$sql ="INSERT INTO `invimonk_tb`(`invimonk_date`, `invimonk_place`, `invimonk_nummonk`,`mem_id`)"
		."VALUES ('$date','$place','$nummonk','$last_id')";
		$result = mysqli_query($link, $sql);
		if($result && $result2){
		echo "ได้นะไอสัส";
		echo "<script>window.location = 'cfm_index.php';</script>";

		}
		else{

			echo "ไม่ได้ไอสัส";
		}
		echo $place."<br>";

	}


	else{
		$name = $_POST['name'];
		$tel = $_POST['tel'];
		$add = $_POST['add'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$nummonk = $_POST['nummonk'];
		$place = $_POST['outwat'];

		$sql2 = "INSERT INTO `member_tb` (mem_name,mem_tel,mem_add,mem_email) "
             . "VALUES ('$name', '$tel', '$add','$email')";
		$result2 = mysqli_query($link, $sql2);

		$last_id = mysqli_insert_id($link);

		$sql ="INSERT INTO `invimonk_tb`(`invimonk_date`, `invimonk_place`, `invimonk_nummonk`,`mem_id`)"
		."VALUES ('$date','$place','$nummonk','$last_id')";
		$result = mysqli_query($link, $sql);

		if($result && $result2){
		echo "ได้นะไอสัส";
		echo "<script>window.location = 'cfm_index.php';</script>";

		}
		else{

			echo "ไม่ได้ไอสัส";
		}

		echo $place."<br>";

	}

/*
		echo $name."<br>";
		echo $tel."<br>";
		echo $add."<br>";
		echo $email."<br>";
		echo $date."<br>";
		echo $nummonk."<br>";
*/


/*
	$sql = "INSERT INTO `invipav_tb` (invipav_datefirst,invipav_datelast,invipav_namedie,invipav_deal,invipav_statusdie,invi_status,pav_id) "
                . "VALUES ('$fistday', '$lastday', '$namedie','$dealdie','$status','$statuspav','9')";
            $result = mysqli_query($link, $sql);



    $sql2 = "INSERT INTO `member_tb` (mem_name,mem_tel,mem_add,mem_email) "
             . "VALUES ('$name', '$tel', '$add','$email')";
    $result2 = mysqli_query($link, $sql2);

	if($result && $result2){
		echo "ได้นะไอสัส";
		echo "<script>window.location = 'cf_index.php';</script>";

	}
	else{

		echo "ไม่ได้ไอสัส";
	}
*/

}
?>
