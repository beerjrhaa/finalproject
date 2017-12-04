<?

	$id = $_GET['equip_id'];
	$sql = "SELECT * FROM equip_tb WHERE equip_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["equip_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$equip=$stmt->fetch();

	?>

<div class='col-md-12' style='margin-bottom: 16px;'>
	<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-6'>
			<div class='row'>
				<center>
					<h2><?=$equip['equip_name'];?></h2>
					<img class='w-100 mt-2'src="images/picture/equip/<?=$equip['equip_pic'];?>">
				</center>
				<div class='col-md-12'><h4 class='mt-2'>รายละเอียดอุปกรณ์ :<?=$equip['equip_detail'];?></h4></div>
				<div class='col-md-12'><h4 class='mt-2'>จำนวนที่มีในคลัง :<?=$equip['equip_num'];?></h4></div>
			</div>
		</div>
		<div class='col-md-4'></div>
	</div>
</div>
