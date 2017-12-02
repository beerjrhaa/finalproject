<?php
	require_once '../database/database.php';
	$sql="DELETE FROM import_tb WHERE import_id=:id";
	if($_GET['import_id']!=''){

		$id=$_GET['import_id'];
		$stmt=$db->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);

		echo "DELETE key_his=$id Success";
		echo "<meta http-equiv='refresh' content='3; url=keytem.php'>";
}
?>

