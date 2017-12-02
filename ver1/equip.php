	<?
		require_once 'head.php';

		$sql = "SELECT * FROM equip_tb ORDER BY equip_id LIMIT 5";
		$stmt=$db->prepare($sql);
		$stmt->execute();
		$rows = $stmt->rowCount();

		if($rows ==0){
			echo "ไม่มีข้อมูล";
	  	}

	?>

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
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>ข้อมูลพระภายในวัดสุคันธาราม</h2>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<?
				$data=$stmt->fetchAll();
				foreach($data as $equip){
					?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="showequip.php?equip_id=<?=$equip['equip_id']?>"><img class="img-responsive" src="admin/picture/monk/<?=$equip['equip_pic']?>" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#><?=$equip['equip_name']?></a></h3>
							<a href="showequip.php?equip_id=<?=$equip['equip_id']?>" class="btn btn-primary">อ่านต่อ</a>
						</div>
					</div>
				</div>
				<?
					}
				?>
			</div>
		</div>
		<?
			 require_once 'footer.php';
			 require_once 'linkjs.php';
		 ?>
	</body>
</html>

