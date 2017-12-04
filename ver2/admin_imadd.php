<form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ชื่อสิ่งสำคัญภายในวัด<span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="import-name" name="importname" required="required" class="form-control">
                        </div>
                      </div>
                  <label class="control-label col-md-3 " for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                  <div class="col-md-6">
                  <textarea class="form-control" name ="importdetail"></textarea>

                  <br />
                  </div>
                <div class="form-group">

                <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file"  name="importpic">
                 </div>

                <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">บริเวณที่ตั้ง <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="import-area" name="importarea" required="required" class="form-control">
                        </div>
                      </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ผู้ให้ข้อมูล <span class="required">*</span></label>
                        <div class="col-md-6 ">
                          <input type="text" id="import-ref"  name="importref" required="required" class="form-control">
                        </div>
                      </div>

                 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 ">
	                        <button type="submit" class="btn btn-success">Submit</button>
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

		$sql1="SELECT MAX(import_id) FROM import_tb ";

		$stmt=$db2->prepare($sql1);
		$stmt->execute();
		$data=$stmt->fetch();
		$id=$data[0];
		if($id=$data[0]){
			$id+++1;
		}

		  $name = $_POST['importname'];
		  $detail = $_POST['importdetail'];
		  $area = $_POST['importarea'];
		  $ref = $_POST['importref'];
		  $target_dir = 'picture/temp/';
		  $target_file = $target_dir.basename($_FILES['importpic']['name']);

		  $img_new_name = generateRandomString(10);
		  $target_dir_save = 'picture/key/'.$img_new_name.'.jpg';
		  if (move_uploaded_file($_FILES['importpic']['tmp_name'], $target_file)) {
		  	$magicianObj = new imageLib($target_file);
		  	$magicianObj->resizeImage(700, 700, 'auto', true);
		  	$magicianObj->saveImage($target_dir_save, 100);
		  	unlink($target_file);
    	  }
			$sql = 'INSERT INTO import_tb (import_name,import_detail,import_pic,import_area,import_ref)
					VALUES (:importname,:importdetail,:img_new_name,:importarea,:importref)';
			$stmt = $db2->prepare($sql);
			$param[':importname'] = $name;
			$param[':importdetail'] = $detail;
			$param[':img_new_name'] = $img_new_name;
			$param[':importarea'] = $area;
			$param[':importref'] = $ref;
			$stmt->execute($param);

			if($stmt){
			echo "<script>window.location = 'admin_index.php?url=admin_im_index.php';</script>";
			echo "เสร็จละอีดอก";
			}


	}

?>

