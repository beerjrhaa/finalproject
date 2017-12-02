	<?
		require_once 'head.php';
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
		  <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
			  <div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>ค้นหาพระในวัดที่ถูกนิมนต์แล้ว</h2>
					</div>
			  </div>
			<form method="post">
				<label>วันที่เริ่มจอง</label> <input type="date" name="date">
				<input type="submit" value="Submit"><input type="reset" value="Reset">
		  </form>
		</div>
	</div>
	<?php
		if($_POST){
			$phpdate1 = strtotime($_POST['date']);
			$date = date( 'Y-m-d', $phpdate1 );
			//สร้างตัวแปรมา count วันที่จองวันแรก กะวันสุดท้ายว่ากี่วันแล้วค่อยนำตัวแปรวันแรกกับตัวแปรcount มาเปรียบเทียบในตาราง
			$sql = "SELECT * FROM invimonk_tb JOIN monk_tb ON invimonk_tb.monk_id = monk_tb.monk_id WHERE invimonk_tb.monk_status = 1 AND 								(invimonk_tb.invimonk_date >= '$date')";
			$stmt=$db->prepare($sql);
			$stmt->execute();

			$data=$stmt->fetchAll();
			foreach($data as $invimonk){

		}?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="admin/picture/monk/<?=$invimonk['monk_pic']?>" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#><?=$invimonk['monk_name']?></a></h3>
						</div>
					</div>
				</div>		<?
		}
	?>
	</div>
		<?
			 require_once 'footer.php';
			 require_once 'linkjs.php';
		 ?>
	</body>
</html>

