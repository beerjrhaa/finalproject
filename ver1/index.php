	<?

		include 'head.php';


		$sql = "SELECT * FROM his_tb";
		$stmt=$db->prepare($sql);
		$stmt->execute();
		$rows = $stmt->rowCount();

		if($rows ==0){
			echo "ไม่มีข้อมูล";
	  	}

	?>
	<body>

	<div class="fh5co-loader"></div>
	<div id="page">
		<?
			require_once 'menu.php';
		?>
		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/home.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay">		</div>
	</header>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/dumbbell.svg" alt=""></span>
						<h3>ศาลา</h3>
						<p>ศาลา ภายในวัดสุคันธาราม มีศาลาทั้งหมด 5 ศาลา</p>
						<p><a href="pav.php" class="btn btn-primary btn-outline btn-sm">ดูรายละเอียดเพิ่มเติม <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/exercise.svg" alt=""></span>
						<h3>พระ</h3>
						<p>พระในวัดสุคันธาราม มีพระจำพรรษาทั้งหมดจำนวน 40 รูป</p>
						<p><a href="monk.php" class="btn btn-primary btn-outline btn-sm">ดูรายละเอียดเพิ่มเติม <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
						<span><img class="img-responsive" src="images/yoga-carpet.svg" alt=""></span>
						<h3>อุปกรณ์</h3>
						<p>อุปกรณ์ภายในวัดสุคันธารามมีหลายจำพวก เช่น หม้อ ฉาม กระทะ เป็นต้น</p>
						<p><a href="equip.php" class="btn btn-primary btn-outline btn-sm">ดูรายละเอียดเพิ่มเติม <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>ประวัติและสิ่งสำคัญภายในวัด</h2>
					<p>วัดสุคันธารามก่อตั้งมาแล้ว 110 ปี ทำให้มีประวัติและสิ่งสำคัญภายในวัดมากมาย  </p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<?
		           $data=$stmt->fetchAll();
		           foreach($data as $his){
				?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="admin/picture/his/<?=$his['his_pic']?>" alt="" style="width:350px; height:300px;"></a>
						<div class="blog-text">
							<h3><a href=""#><?=$his['his_topic']?></a></h3>
							<span class="posted_on"><?=$his['his_date']?></span>
							<p><?=$his['his_detail']?></p>
							<a href="#" class="btn btn-primary">อ่านต่อ</a>
						</div>
					</div>
				</div>
				<?
					}
				?>
			</div>
		</div>
	</div>
		 <?
			 require_once 'footer.php';
			 require_once 'linkjs.php';
		 ?>
	</body>
</html>

