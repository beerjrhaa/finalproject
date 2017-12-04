<?

	$id = $_GET['pav_id'];
	$sql = "SELECT * FROM pav_tb as p JOIN pavalbum_tb as pa ON p.pav_id = pa.pav_id WHERE p.pav_id = :id AND pa.pav_id =:id ";
 		$stmt = $db2->prepare($sql);
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
		<div class='col-md-4'>
<!-- 		 <img class='w-100 mt-2' src="image/picture/albumpav/<?=$pav['pavalbum_name'];?>"> -->

			<?php while( $pav=$stmt->fetch()) { ?>
				<center>
					<a class="imagepopup" href="images/picture/albumpav/<?=$pav['pavalbum_name']?>">
						<img class='w-75 mt-2' src="images/picture/albumpav/<?=$pav['pavalbum_name']?>" />
					</a>
				</center>
			<?php  } ?>
		</div>
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
