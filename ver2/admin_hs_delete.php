<?php
	$sql="DELETE FROM his_tb WHERE his_id=:id";
	if($_GET['his_id']!=''){

		$id=$_GET['his_id'];
		$stmt=$db2->prepare($sql);
		$param[":id"]=$id;
		$stmt->execute($param);
		if($stmt){
			echo "DELETE his_id=$id Success";
			echo "<meta http-equiv='refresh' content='3; url=admin_index.php?url=admin_im_index.php'>";
			}
	}
?>

