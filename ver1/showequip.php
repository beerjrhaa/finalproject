<?php
	require_once 'head.php';

	$id = $_GET['equip_id'];
	$sql = "SELECT * FROM equip_tb WHERE equip_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["equip_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();

?>
<body>

	<div class="fh5co-loader"></div>
	<div id="page">
		<?
			require_once 'menu.php';
		?>
		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay">		</div>
	</header>
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
			<center><h1><?=$data['equip_name']?></h1></center>
				</div>
				<div class="col-md-6">
			<img class="img-responsive" src="admin/picture/equip/<?=$data['equip_pic']?>" alt="" style="width:500px; height:500px;">
				</div>
				<div class="col-md-6">
					<center><h3 >รายละเอียดอุปรกรณ์:</h3</center><br><br><p><?=$data['equip_detail']?></p>
					<center><h3 >จำนวนของอุปกรณ์:</h3</center><br><br><p><?=$data['equip_num']?></p>
					<a href="form_equip.php?equip_id=<?=$data['equip_id']?>">จอง</a>

				</div>
			</div>
		</div>
	</div>
	</div>
	<?
			 require_once 'footer.php';
			 require_once 'linkjs.php';
		 ?>

	</body>
</html>
