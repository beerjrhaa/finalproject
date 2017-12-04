<?php
	$sql="DELETE FROM import_tb WHERE import_id=:id";
	if($_GET['import_id']!=''){

		$id=$_GET['import_id'];
		$stmt=$db2->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);
		if($stmt){
			echo "DELETE key_his=$id Success";
			echo "<meta http-equiv='refresh' content='3; url=admin_index.php?url=admin_hs_index.php'>";
			}

}
?>

