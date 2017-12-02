<?php
	require_once '../database/database.php';
	$sql="DELETE FROM equip_tb WHERE equip_id=:id";
	if($_GET['equip_id']!=''){

		$id=$_GET['equip_id'];
		$stmt=$db->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);

		echo "DELETE equip_id=$id Success";
		echo "<meta http-equiv='refresh' content='3; url=menequip.php'>";
}
?>

