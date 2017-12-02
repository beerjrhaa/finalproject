<?php
	require_once 'head.php';

	$id = $_GET['monk_id'];
	$sql = "SELECT * FROM monk_tb WHERE monk_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["monk_id"],PDO::PARAM_STR);
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
			<center><h1><?=$data['monk_name']?> <?=$data['monk_nick']?></h1></center>
				</div>
				<div class="col-md-6">
			<img class="img-responsive" src="admin/picture/pav/<?=$data['monk_pic']?>" alt="" style="width:500px; height:500px;">
				</div>
				<div class="col-md-6">
					<center><h3 >ตำแหน่งภายในวัด:</h3</center><br><br><p><?=$data['monk_pos']?></p>
					<center><h3 >พระยศ:</h3></center> <p><?=$data['monk_rank']?></p>
					<center><h3 >จำนวนพรรษา:</h3></center> <p><?=$data['monk_season']?></p>
					<a href="form_monk.php?monk_id=<?=$data['monk_id']?>">จอง</a>

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
