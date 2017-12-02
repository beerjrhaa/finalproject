<?php
include_once("dbMysqli.php");

    echo "<pre>";
    print_r($_POST);


if($_POST){

	$equipID = $_POST['equipId'];
	$equipNum = $_POST['equipNum'];
	$place_equip = $_POST['place_equip'];


	if(count($equipID) > 0) {

		$sql = "INSERT INTO `inviequip_tb`(`inviequip_date`, `inviequip_place`, `inviequip_num`, `mem_id`, `equip_id`) VALUES ";


		for($i = 0; $i < count($equipID); $i++) {
			$sql .= " (NOW(), '".$place_equip."', '".$equipNum[$i]."', NULL, ".$equipID[$i].")";
			if($i < count($equipID) - 1) {
				$sql .= ",";
			}
		}

		$result = mysqli_query($link, $sql);

        if($result){
            echo "ได้นะไอสัส";
            echo "<script>window.location = 'cfe_index.php';</script>";

        }
        else{
            echo "ไม่ได้ไอสัส";
        }
	}

}
?>
