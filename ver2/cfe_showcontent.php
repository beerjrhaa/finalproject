<?
	$sql = "SELECT * FROM equip_tb ";
		$stmt=$db2->prepare($sql);
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
					foreach($data as $equip){
				?>
				<div class='col-md-6 border border-dark'>
					<div class='row'>
						<div class='col-md-12'>
							<div class='row'>
								<div class='col-md-4' style="padding-top: 10px;padding-bottom: 10px;">
									<center><img class='w-100'src="images/picture/equip/<?=$equip['equip_pic'];?>"></center>
								</div>
								<div class='col-md-8'>
									<div class='row'>
										<div class='col-md-12' style="margin-top: 10px;">
											<h4 class='card-title'><?=$equip['equip_name']?></h4>
										</div>
										<div class='col-md-12'>
											<p class='card-text'><?=$equip['equip_num']?></p>
										</div>
										<div class='col-md-12'>
											<div class='row'>
												<div class="col-md-5"></div>
												<div class="btn col-md-7">
													<a class="btn btn-info col-md-12" href="cfe_index.php?url2=cfe_showequipdetail.php&equip_id=<?=$equip['equip_id'];?>">
													คลิกเพื่อดูรายละเอียดอุปกรณ์
													</a>
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

