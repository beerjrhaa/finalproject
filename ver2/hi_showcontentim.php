<?
	$sql = "SELECT * FROM import_tb";
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
					foreach($data as $import){
				?>
				<div class='col-md-6 border border-dark'>
					<div class='row'>
						<div class='col-md-12'>
							<div class='row'>
								<div class='col-md-4' style="padding-top: 10px;padding-bottom: 10px;">
									<center><img class='w-75'src="images/picture/key/<?=$import['import_pic'];?>"></center>
								</div>
								<div class='col-md-8'>
									<div class='row'>
										<div class='col-md-12' style="margin-top: 10px;">
											<h4 class='card-title'><?=$import['import_name']?></h4>
										</div>
										<div class='col-md-12'>
											<p class='card-text'><?=$import['import_ref']?></p>
										</div>
										<div class='col-md-12'>
											<div class='row'>
												<div class="col-md-5"></div>
												<div class="btn col-md-7">
													<button type="button" class="btn btn-info col-md-12">
													<a class="btn btn-info col-md-12" href="hi_index.php?url2=hi_showdetailim.php&import_id=<?=$import['import_id'];?>">
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

