<?
	$sql = "SELECT * FROM monk_tb";
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
					foreach($data as $monk){
				?>
				<div class='col-md-6 border border-dark'>
					<div class='row'>
						<div class='col-md-12'>
							<div class='row'>
								<div class='col-md-4' style="padding-top: 10px;padding-bottom: 10px;">
									<center><img class='w-75'src="images/picture/monk//<?=$monk['monk_pic'];?>"></center>
								</div>
								<div class='col-md-8'>
									<div class='row'>
										<div class='col-md-12' style="margin-top: 10px;">
											<h4 class='card-title'><?=$monk['monk_rank'] . " " ; echo $monk['monk_name']  . " " ; echo $monk['monk_nick'];?></h4>
										</div>
										<div class='col-md-12'>
											<div class='row'>
												<div class="col-md-5"></div>
												<div class="btn col-md-7">
													<button type="button" class="btn btn-info col-md-12">
													<a class="btn btn-info col-md-12" href="cfm_index.php?url2=cfm_addmonk.php&monk_id=<?=$monk['monk_id'];?>">
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

