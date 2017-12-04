<?php
	$sql="DELETE FROM equip_tb WHERE equip_id=:id";
	if($_GET['equip_id']!=''){

		$id=$_GET['equip_id'];
		$stmt=$db2->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);


		if($stmt){
		echo "DELETE equip_id=$id Success";
		echo "<meta http-equiv='refresh' content='3; url=admin_index.php?url=admin_e_index.php'>";
		}
}
?>

