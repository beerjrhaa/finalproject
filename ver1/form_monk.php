<?php
	require_once 'head.php';

	$id = $_GET['monk_id'];
	$sql = "SELECT * FROM monk_tb WHERE monk_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["monk_id"],PDO::PARAM_STR);
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
					<center><h1><?=$data['monk_name']?></h1></center>
				</div>
				<div class="col-md-6">
			<img class="img-responsive" src="admin/picture/monk/<?=$data['monk_pic']?>" alt="" style="width:500px; height:500px;">
				</div>
				<div class="col-md-6">
					<form method="post" action="insert_order_monk.php" enctype="multipart/form-data">
						<div><label>วันที่นิมนต์ : </label><input type="date" name="date"></div>
						<div><label>สถานที่นิมนต์ : </label><input type="text" name="place"></div>
						<div><label>ชื่อ-นามสกุล : </label><?=$data2['mem_name']?></div>
						<div><label>เบอร์โทรศัพท์ : </label><?=$data2['mem_tel']?></div>
						<div><label>ที่อยู่ : </label><?=$data2['mem_add']?></div>
						<div><label>อีเมล : </label><?=$data2['mem_email']?></div>
						<div><input type="submit"> <input type="reset"></div>
						<input type="hidden" name="idmonk" value="<?= $id ?>">
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
