<?

	$id = $_GET['import_id'];
	$sql = "SELECT * FROM import_tb as im WHERE im.import_id =:id ";
 		$stmt = $db2->prepare($sql);
 		$stmt->bindValue(':id',$_GET["import_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$import=$stmt->fetch();
	?>

<div class='col-md-12' style='margin-bottom: 16px;'>
	<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-6'>
			<div class='row'>
				<center>
					<h2><?=$import['import_name'];?></h2>
					<img class='w-100 mt-2'src="images/picture/key/<?=$import['import_pic'];?>">
				</center>
				<h4 class='mt-2'>รายละเอียด : <?=$import['import_detail'];?></h4>
				<h4 class='mt-2'>สถานที่ตั้ง : <?=$import['import_area'];?></h4>
				<h4 class='mt-2'>ผู้ให้ข้อมูลห : <?=$import['import_ref'];?></h4>
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
