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
					<h2>ค้นหาศาลาที่ถูกจองแล้ว</h2>
					</div>
			  </div>
			<form method="post">
				<label>วันที่เริ่มจอง</label> <input type="date" name="firstday">

				<label>วันที่สิ้นสุดการจอง</label> <input type="date" name="lastday">
				<input type="submit" value="Submit"><input type="reset" value="Reset">
		  </form>
		</div>
	</div>
	<?php
		if($_POST){

			$phpdate1 = strtotime($_POST['firstday']);
			$firstday = date( 'Y-m-d', $phpdate1 );

// 			echo $firstday;


			$sql = "SELECT * FROM invipav_tb JOIN pav_tb ON invipav_tb.pav_id = pav_tb.pav_id WHERE invipav_tb.invi_status != 1 AND invipav_tb.invipav_datefirst ='$firstday'";

			$stmt=$db->prepare($sql);
			$stmt->execute();

			$data=$stmt->fetchAll();
			foreach($data as $invipav){

/*
			$phpdate1 = strtotime($_POST['firstday']);
			$firstday = date( 'Y-m-d', $phpdate1 );
			$phpdate2 = strtotime($_POST['lastday']);
			$lastday = date( 'Y-m-d', $phpdate2 );
			//สร้างตัวแปรมา count วันที่จองวันแรก กะวันสุดท้ายว่ากี่วันแล้วค่อยนำตัวแปรวันแรกกับตัวแปรcount มาเปรียบเทียบในตาราง
			$sql = "SELECT * FROM invipav_tb JOIN pav_tb ON invipav_tb.pav_id = pav_tb.pav_id WHERE invipav_tb.invi_status = 1 AND 								(invipav_tb.invipav_datefirst >= '$firstday') AND (invipav_tb.invipav_datelast <='$lastday')";
			$stmt=$db->prepare($sql);
			$stmt->execute();

			$data=$stmt->fetchAll();
			foreach($data as $invipav){
*/

		echo $invipav['pav_name'];

		echo $invipav['pav_price'];

		} }
	?>
	</div>
		<?
			 require_once 'footer.php';
			 require_once 'linkjs.php';
		 ?>
	</body>
</html>

