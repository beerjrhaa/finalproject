<?php
	require_once '../database/database.php';
	$sql="DELETE FROM monk_tb WHERE monk_id=:id";
	if($_GET['monk_id']!=''){

		$id=$_GET['monk_id'];
		$stmt=$db->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);

		echo "DELETE Monk_id=$id Success";
		echo "<meta http-equiv='refresh' content='3; url=menmonk.php'>";
}
?>
