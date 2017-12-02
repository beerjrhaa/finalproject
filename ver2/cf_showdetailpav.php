<?

	$id = $_GET['pav_id'];
	$sql = "SELECT * FROM pav_tb WHERE pav_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["pav_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$pav=$stmt->fetch();

	?>

<div class='col-md-12' style='margin-bottom: 16px;'>
	<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-6'>
			<div class='row'>
				<center>
					<h2>ศาลา<?=$pav['pav_name'];?></h2>
					<img class='w-100 mt-2'src="images/picture/pav/<?=$pav['pav_pic'];?>">
				</center>
				<h4 class='mt-2'><?=$pav['pav_detail'];?></h4>
			</div>
		</div>
		<div class='col-md-4'></div>
	</div>
</div>
