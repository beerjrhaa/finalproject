<?php
	require_once 'head.php';

	$id = $_GET['pav_id'];
	$sql = "SELECT * FROM pav_tb WHERE pav_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["pav_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();


 	$sql2 = "SELECT * FROM user_tb JOIN member_tb
 			ON user_tb.mem_id = member_tb.mem_id ";
 	$stmt2 = $db->prepare($sql2);
 	$stmt2 ->execute();
 	$data2=$stmt2->fetch();



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
					<form method="post" action="insert_order.php" enctype="multipart/form-data">
						<div><label>วันแรกที่เริ่มจอง : </label><input type="date" name="fistday"></div>
						<div><label>วันสุดท้ายที่จอง : </label><input type="date" name="lastday"></div>
						<div><label>ชื่อ-นามสกุล : </label><?=$data2['mem_name'];?></div>
						<div><label>เบอร์โทรศัพท์ : </label><?=$data2['mem_tel']?></div>
						<div><label>ที่อยู่ : </label><?=$data2['mem_add']?></div>
						<div><label>อีเมล : </label><?=$data2['mem_email']?></div>
						<div><input type="submit"> <input type="reset"></div>
						<input type="hidden" name="idPav" value="<?= $id ?>">
					</form>
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