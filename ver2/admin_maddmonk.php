<form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ชื่อพระ <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="name"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 " for="his-topic">ยศ <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="rank" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ฉายา <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="nick" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                              <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">พรรษา <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="season"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ตำแหน่ง <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="pos" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
					  <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
					  <input type="file" name="monkpic">
                 	</div>
                 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 ">
                          <button type="submit" class="btn btn-success">Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>
                    </form>
                    	<?php

				function generateRandomString($length = 10) {
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				    $charactersLength = strlen($characters);
				    $randomString = '';
				    for ($i = 0; $i < $length; $i++) {
				        $randomString .= $characters[rand(0, $charactersLength - 1)];
				    }
				    return $randomString;
				}


				if($_POST){

		$sql1="SELECT MAX(monk_id) FROM monk_tb ";

		$stmt=$db2->prepare($sql1);
		$stmt->execute();
		$data=$stmt->fetch();
		$id=$data[0];
		if($id=$data[0]){
			$id+++1;
		}

		  $monkname = $_POST['name'];
		  $monkrank = $_POST['rank'];
		  $monknick = $_POST['nick'];
		  $monkseason = $_POST['season'];
		  $monkpos = $_POST['pos'];
		  $target_dir = 'images/picture/temp/';
		  $target_file = $target_dir.basename($_FILES['monkpic']['name']);

		  $img_new_name = generateRandomString(10);
		  $target_dir_save = 'images/picture/monk/'.$img_new_name.'.jpg';
		  if (move_uploaded_file($_FILES['monkpic']['tmp_name'], $target_file)) {
		  	$magicianObj = new imageLib($target_file);
		  	$magicianObj->resizeImage(700, 700, 'auto', true);
		  	$magicianObj->saveImage($target_dir_save, 100);
		  	unlink($target_file);
    	  }
			$sql = 'INSERT INTO monk_tb (monk_name,monk_rank,monk_nick,monk_season,monk_pos,monk_pic)
					VALUES (:name,:rank,:nick,:season,:pos,:img_new_name)';
			$stmt = $db2->prepare($sql);
			$param[':name'] = $monkname;
			$param[':rank'] = $monkrank;
			$param[':nick'] = $monknick;
			$param[':season'] = $monkseason;
			$param[':pos'] = $monkpos;
			$param[':img_new_name'] = $img_new_name;
			$stmt->execute($param);

			if($stmt){
			echo "<script>window.location = 'admin_index.php?url=admin_m_index.php';</script>";
			}

}

			?>
