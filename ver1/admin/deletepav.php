<?php
	require_once '../database/database.php';
	$sql="DELETE FROM pav_tb WHERE pav_id=:id";
	if($_GET['pav_id']!=''){

		$id=$_GET['pav_id'];
		$stmt=$db->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);

		echo "DELETE pav_id=$id Success";
		echo "<meta http-equiv='refresh' content='3; url=menpav.php'>";
}
?>

