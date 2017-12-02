<?php
	require_once 'head.php';

	$id = $_GET['import_id'];
	$sql = "SELECT * FROM import_tb WHERE import_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["import_id"],PDO::PARAM_STR);
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
			<center><h1><?=$data['import_name']?></h1></center>
				</div>
				<div class="col-md-6">
			<img class="img-responsive" src="admin/picture/key/<?=$data['import_pic']?>" alt="" style="width:500px; height:500px;">
				</div>
				<div class="col-md-6">
					<center><h3 >รายละเอียดสิ่งสำคัญ:</h3></center><p><?=$data['import_detail']?></p>
					<center><h3 >บริเวณที่ตั้งภายในวัด:</h3></center><p><?=$data['import_area']?></p>
					<center><h3 >ผู้ให้ข้อมูล: </h3></center><p><?=$data['import_ref']?></p>

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
