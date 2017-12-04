<?

	$id = $_GET['his_id'];
	$sql = "SELECT * FROM his_tb as h WHERE h.his_id =:id ";
 		$stmt = $db2->prepare($sql);
 		$stmt->bindValue(':id',$_GET["his_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$his=$stmt->fetch();
	?>

<div class='col-md-12' style='margin-bottom: 16px;'>
	<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-6'>
			<div class='row'>
				<center>
					<h2>หัวข้อ : <?=$his['his_topic'];?></h2>
					<img class='w-100 mt-2'src="images/picture/his/<?=$his['his_pic'];?>">
				</center>
				<h4 class='mt-2'>รายละเอียด : <?=$his['his_detail'];?></h4>
				<h4 class='mt-2'>วันที่เพิ่มข้อมูล : <?=$his['his_date'];?></h4>
			</div>
		</div>
		<div class='col-md-4'></div>
	</div>
</div>
<script>
	$(document).ready(function() {
	  $('.imagepopup').magnificPopup({
	  type: 'image'
	  // other options
	});
});
</script>
