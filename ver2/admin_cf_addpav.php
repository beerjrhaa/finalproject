<form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ชื่อศาลา<span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="import-name" name="pavname" required="required" class="form-control">
                        </div>
                      </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                  <div class="col-md-6">
                  <textarea class='form-control' name ="pavdetail"></textarea>

                  <br />
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ราคา <span class="required">*</span></label>
                        <div class="col-md-6 ">
                          <input type="text" id="import-area" name="pavprice" required="required" class="form-control">
                        </div>
                      </div>
                <div class="form-group">
                <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file"  name="pavpic">
                 </div>
                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6">
	                        <button type="submit" class="btn btn-success ">Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>


                        </div>
                      </div>
                </div>

                    </form>
        <?
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

		$sql1="SELECT MAX(pav_id) FROM pav_tb ";

		$stmt=$db2->prepare($sql1);
		$stmt->execute();
		$data=$stmt->fetch();
		$id=$data[0];
		if($id=$data[0]){
			$id+++1;
		}

		  $pavname = $_POST['pavname'];
		  $detail = $_POST['pavdetail'];
		  $price = $_POST['pavprice'];
		  $picture="";
		  $target_dir = 'images/picture/temp/';
		  $target_file = $target_dir.basename($_FILES['pavpic']['name']);

		  $img_new_name = generateRandomString(10);
		  $target_dir_save = 'images/picture/pav/'.$img_new_name.'.jpg';
		  if (move_uploaded_file($_FILES['pavpic']['tmp_name'], $target_file)) {
		  	$magicianObj = new imageLib($target_file);
		  	$magicianObj->resizeImage(700, 700, 'auto', true);
		  	$magicianObj->saveImage($target_dir_save, 100);
		  	unlink($target_file);
    	  }

			$sql = 'INSERT INTO pav_tb (pav_name,pav_detail,pav_price,pav_pic)
					VALUES (:pavname,:pavdetail,:pavprice,:img_new_name)';
			$stmt = $db2->prepare($sql);
			$param[':pavname'] = $pavname;
			$param[':pavdetail'] = $detail;
			$param[':img_new_name'] = $img_new_name;
			$param[':pavprice'] = $price;
			$stmt->execute($param);

			if($stmt){
			echo "<script>window.location = 'admin_index.php?url=admin_cf_index.php';</script>";
			echo "เสร็จละอีดอก";
			}

}

        ?>
