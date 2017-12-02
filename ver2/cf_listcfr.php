<?
	$sql = "SELECT * FROM pav_tb ORDER BY pav_id LIMIT 5";
		$stmt=$db->prepare($sql);
		$stmt->execute();
		$rows = $stmt->rowCount();

		if($rows ==0){
			echo "ไม่มีข้อมูล";
	  	}

	?>

<div class='col-md-12' style='margin-bottom: 16px;'>
	<div class='row'>
			<?
					$data=$stmt->fetchAll();
					foreach($data as $pav){
				?>
				<div class='col-md-6 border border-dark'>
					<div class='row'>
						<div class='col-md-12'>
							<div class='row'>
								<div class='col-md-4' style="padding-top: 10px;padding-bottom: 10px;">
									<center><img class='w-75'src="images/picture/pav/<?=$pav['pav_pic'];?>"></center>
								</div>
								<div class='col-md-8'>
									<div class='row'>
										<div class='col-md-12' style="margin-top: 10px;">
											<h4 class='card-title'><?=$pav['pav_name']?></h4>
										</div>
										<div class='col-md-12'>
											<p class='card-text'><?=$pav['pav_detail']?></p>
										</div>
										<div class='col-md-12'>
											<div class='row'>
												<div class="col-md-5"></div>
												<div class="btn col-md-7">
													<button type="button" class="btn btn-info col-md-12">
													<a class="btn btn-info col-md-12" href="cf_index.php?url2=cf_calendar.php&pav_id=<?=$pav['pav_id'];?>">
													คลิกเพื่อจองห้องประชุม
													</a>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?
			}
		?>
	</div>
</div>

