<?
 		$sql = "SELECT * FROM import_tb WHERE import_id = :id";
 		$stmt = $db2->prepare($sql);
 		$stmt->bindValue(':id',$_GET["import_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();
 ?>
 <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" >

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">สิ่งสำคัญในวัด <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic"  name="keyname" required="required" class="form-control"
                          value="<?=$data['import_name']?>">
                        </div>
                      </div>
                  <label class="control-label col-md-3" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                 <div class="col-md-6">
                  <textarea class="form-control" name ="detail"><?=$data['import_detail']?></textarea>

                  <br />
                                  </div>
                <div class="form-group">
                <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file" name="pickey" value="picture/key/<?=$data['import_pic']?>">
                </div>
                 <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">บริเวณที่ตั้ง <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="import-area" name="importarea" required="required" class="form-control"
                          value="<?=$data['import_area']?>">
                        </div>
                      </div>
                <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ผู้ให้ข้อมูล <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="import-ref"  name="importref" required="required" class="form-control"
                          value="<?=$data['import_ref']?>">
                        </div>
                <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9">
                        <button  type="submit" class="btn btn-success" >Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>

                    </form>
                    <?
	        if($_POST){
					$id = $_GET['import_id'];
					$keyname = $_POST['keyname'];
					$detail = $_POST['detail'];
					$keyarea = $_POST['importarea'];
					$keyref = $_POST['importref'];

					$picture="";
					if($_FILES['pickey']['type']=="image/jpeg"){

					$picture=$id.'.jpg';

					rename($_FILES['pickey']['tmp_name'], 'picture/key/'.$picture);

					}

					$sql = "UPDATE import_tb SET
						   import_name = :keyname,
						   import_detail = :detail,
						   import_pic = :picture,
						   import_area = :keyarea,
						   import_ref = :keyref
						   WHERE import_id = :id";
				    $stmt=$db2->prepare($sql);
				    $param[':id']=$id;
				    $param[':keyname']=$keyname;
				    $param[':detail']=$detail;
				    $param[':picture']=$picture;
				    $param[':keyarea']=$keyarea;
				    $param[':keyref']=$keyref;
				    $stmt->execute($param);

					if($stmt){
						echo "<script>window.location = 'admin_index.php?url=admin_im_index.php';</script>";
					}
				}
			?>

