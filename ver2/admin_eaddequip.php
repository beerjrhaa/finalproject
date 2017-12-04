<form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ชื่ออุปกรณ์ <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="equipname" required="required" class="form-control">
                        </div>
                      </div>
                  <label class="control-label col-md-3" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                  <div class="col-md-6">
                  <textarea class='form-control' name ="equipdetail"></textarea>

                  <br />
                  </div>

                  <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">จำนวน <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="equipnum" required="required" class="form-control">
                        </div>
                      </div>
                <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file" name="equippic">
                 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9">
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

		  $equipname = $_POST['equipname'];
		  $equipdetail = $_POST['equipdetail'];
		  $equipnum = $_POST['equipnum'];
		  $target_dir = 'images/picture/temp/';
		  $target_file = $target_dir.basename($_FILES['equippic']['name']);

		  $img_new_name = generateRandomString(10);
		  $target_dir_save = 'images/picture/equip/'.$img_new_name.'.jpg';
		  if (move_uploaded_file($_FILES['equippic']['tmp_name'], $target_file)) {
		  	$magicianObj = new imageLib($target_file);
		  	$magicianObj->resizeImage(700, 700, 'auto', true);
		  	$magicianObj->saveImage($target_dir_save, 100);
		  	unlink($target_file);
    	  }

    	 $sql = 'INSERT INTO equip_tb (equip_name,equip_detail,equip_num,equip_pic)
					VALUES (:equipname,:equipdetail,:equipnum,:img_new_name)';
			$stmt = $db2->prepare($sql);
			$param[':equipname'] = $equipname;
			$param[':equipdetail'] = $equipdetail;
			$param[':equipnum'] = $equipnum;
			$param[':img_new_name'] = $img_new_name;
			$stmt->execute($param);

			if($stmt){
			echo "<script>window.location = 'admin_index.php?url=admin_e_index.php';</script>";
			}

		}

			?>
