<?

	$id = $_GET['monk_id'];
	$sql = "SELECT * FROM monk_tb WHERE monk_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["monk_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$monk=$stmt->fetch();

	?>

<div class='col-md-12' style='margin-bottom: 16px;'>
	<div class='row'>
		<div class='col-md-2'></div>
		<div class='col-md-6'>
			<div class='row'>
				<center>
					<h2><?=$monk['monk_name'];?></h2>
					<img class='w-100 mt-2'src="images/picture/monk/<?=$monk['monk_pic'];?>">
				</center>
				<div class='col-md-6'><h4 class='mt-2'>ยศ :<?=$monk['monk_rank'];?></h4></div>
				<div class='col-md-6'><h4 class='mt-2'>ฉายา :<?=$monk['monk_nick'];?></h4></div>
				<div class='col-md-12'><h4 class='mt-2'>จำนวนพรรษา :<?=$monk['monk_season'];?></h4></div>
				<div class='col-md-12'><h4 class='mt-2'>ตำแหน่งภายในวัด :<?=$monk['monk_pos'];?></h4></div>
			</div>
		</div>
		<div class='col-md-4'></div>
	</div>
</div>
