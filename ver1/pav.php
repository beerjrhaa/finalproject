	<?
		require_once 'head.php';

		$sql = "SELECT * FROM pav_tb ORDER BY pav_id LIMIT 5";
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
		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
	</header>


	<div id="fh5co-trainer">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>ศาลาภายในวัดสุคันธาราม</h2>
				</div>
			</div>
			<div class="row">
				<?
					$data=$stmt->fetchAll();
					foreach($data as $pav){
				?>
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="showpav.php?pav_id=<?=$pav['pav_id']?>"><img class="img-responsive" src="admin/picture/pav/<?=$pav['pav_pic']?>" alt=""></a>
						<div class="title">
							<h3><a href="showpav.php?pav_id=<?=$pav['pav_id']?>"><?=$pav['pav_name']?> </a></h3>
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

