<?
	 $sql = "SELECT * FROM equip_tb WHERE equip_id = :id";
 		$stmt = $db2->prepare($sql);
 		$stmt->bindValue(':id',$_GET["equip_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();

?>
<form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ชื่อศาลา<span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="import-name" name="equipname" required="required" class="form-control"
                          value="<?=$data['equip_name']?>">
                        </div>
                      </div>
                  <label class="control-label col-md-3" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                  <div class="col-md-6">
                  <textarea class="form-control" name ="equipdetail"><?=$data['equip_detail']?></textarea>

                  <br />
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">จำนวน <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="import-area" name="equipnum" required="required" class="form-control"
                          value="<?=$data['equip_num']?>">
                        </div>
                      </div>
                <div class="form-group">
                <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file"  name="equippic" value="picture/equip/<?$data['equip_pic']?>">
                 </div>
                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
	                        <button type="submit" class="btn btn-success">Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>


                        </div>
                      </div>
                </div>

                    </form>
<?
	        if($_POST){
					$id = $_GET['equip_id'];
					$equipname = $_POST['equipname'];
					$equipdetail = $_POST['equipdetail'];
					$equipnum = $_POST['equipnum'];

					$picture="";
					if($_FILES['equippic']['type']=="image/jpeg"){

					$picture=$id.'.jpg';

					rename($_FILES['equippic']['tmp_name'], 'picture/equip/'.$picture);

					}

					$sql = "UPDATE equip_tb SET
						   equip_name = :equipname,
						   equip_detail = :equipdetail,
						   equip_num = :equipnum,
						   equip_pic = :picture
						   WHERE equip_id = :id";
				    $stmt=$db2->prepare($sql);
				    $param[':id']=$id;
				    $param[':equipname']=$equipname;
				    $param[':equipdetail']=$equipdetail;
				    $param[':equipnum']=$equipnum;
				    $param[':picture']=$picture;
				    $stmt->execute($param);
					if($stmt){
						echo "<script>window.location = 'admin_index.php?url=admin_e_index.php';</script>";
					}
				}
			?>
