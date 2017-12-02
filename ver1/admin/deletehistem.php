<?php
	require_once '../database/database.php';
	$sql="DELETE FROM his_tb WHERE his_id=:id";
	if($_GET['his_id']!=''){

		$id=$_GET['his_id'];
		$stmt=$db->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);

		echo "DELETE his_id=$id Success";
		echo "<meta http-equiv='refresh' content='3; url=histem.php'>";
}
?>

