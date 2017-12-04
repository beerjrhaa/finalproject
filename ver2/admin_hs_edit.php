<?
 		$sql = "SELECT * FROM his_tb WHERE his_id = :id";
 		$stmt = $db2->prepare($sql);
 		$stmt->bindValue(':id',$_GET["his_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();
 ?>

<form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">หัวข้อประวัติวัด <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic"  name="histopic" required="required" class="form-control"
                          value="<?=$data['his_topic']?>">
                        </div>
                      </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                 <div class="col-md-6">
                  <textarea class="form-control" name ="detail"><?=$data['his_detail']?></textarea>

                  <br />
                                  </div>
                <div class="form-group">
                <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file" name="pichis">
                </div>
                <div class="form-group">
	            <label class="control-label col-md-3" for="his-topic">วันที่ลงข้อมูล <span class="required">*</span></label>
	             <div class="col-md-6">
				<input class="form-control" type="date" name="dateadd" value="<?=$data['his_date']?>">
	             </div>
                              </div>
                 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 ">
                        <button  type="submit" class="btn btn-success" >Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>

                    </form>
                    <?if($_POST){
					$id = $_GET['his_id'];
					$histopic = $_POST['histopic'];
					$detail = $_POST['detail'];
					$date = $_POST['dateadd'];
					$picture="";
					if($_FILES['pichis']['type']=="image/jpeg"){

					$picture=$id.'.jpg';

					rename($_FILES['pichis']['tmp_name'], 'images/picture/his/'.$picture);

					}

					$sql = "UPDATE his_tb SET
						   his_topic = :histopic,
						   his_detail = :detail,
						   his_date = :date,
						   his_pic = :pichis
						   WHERE his_id = :id";
				    $stmt=$db2->prepare($sql);
				    $param[':id']=$id;
				    $param[':histopic']=$histopic;
				    $param[':detail']=$detail;
				    $param[':date']=$date;
				    $param[':pichis']=$picture;
				    $stmt->execute($param);
					if($stmt){
						echo "<script>window.location = 'admin_index.php?url=admin_hs_index.php';</script>";
						echo "เสร็จละอีดอก";
					}

				}
			?>
