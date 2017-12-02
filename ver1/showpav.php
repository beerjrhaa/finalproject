<?php
	require_once 'head.php';

	$id = $_GET['pav_id'];
	$sql = "SELECT * FROM pav_tb WHERE pav_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["pav_id"],PDO::PARAM_STR);
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
			<center><h1><?=$data['pav_name']?></h1></center>
				</div>
				<div class="col-md-6">
			<img class="img-responsive" src="admin/picture/pav/<?=$data['pav_pic']?>" alt="" style="width:500px; height:500px;">
				</div>
				<div class="col-md-6">
					<center><h3 >รายละเอียดของศาลา:</h3</center><br><br><p><?=$data['pav_detail']?></p>
					<center><h3 >ราคาศาลา:</h3></center> <p><?=$data['pav_price']?></p>
					<a href="form_pav.php?pav_id=<?=$data['pav_id']?>">จอง</a>

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
