<?
 		$sql = "SELECT * FROM pav_tb WHERE pav_id = :id";
 		$stmt = $db2->prepare($sql);
 		$stmt->bindValue(':id',$_GET["pav_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();
/*
 		echo("<pre>");
 		print_r($data);
 		echo("</pre>");
*/
 ?>
<form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ชื่อศาลา<span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="import-name" name="pavname" required="required" class="form-control"
                          value="<?=$data['pav_name']?>">
                        </div>
                      </div>
                  <label class="control-label col-md-3" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                  <div class="col-md-6">
                  <textarea class='form-control' name ="pavdetail"><?=$data['pav_detail']?></textarea>

                  <br />
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ราคา <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="import-area" name="pavprice" required="required" class="form-control"
                          value="<?=$data['pav_price']?>">
                        </div>
                      </div>
                <div class="form-group">
                <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file"  name="pavpic" value="<?$data['pav_pic']?>">
                 </div>
                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9">
	                        <button type="submit" class="btn btn-success">Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>


                        </div>
                      </div>
                </div>

                    </form>

        <?
	        if($_POST){

					$id = $_GET['pav_id'];
					$pavname = $_POST['pavname'];
					$detail = $_POST['pavdetail'];
					$pavprice = $_POST['pavprice'];

					$picture="";
					if($_FILES['pavpic']['type']=="image/jpeg"){

					$picture=$id.'.jpg';

					rename($_FILES['pavpic']['tmp_name'], 'picture/pav/'.$picture);

					}

					$sql = "UPDATE pav_tb SET
						   pav_name = :pavname,
						   pav_detail = :pavdetail,
						   pav_pic = :picture,
						   pav_price = :pavprice
						   WHERE pav_id = :id";
				    $stmt=$db2->prepare($sql);
				    $param[':id']=$id;
				    $param[':pavname']=$pavname;
				    $param[':pavdetail']=$detail;
				    $param[':pavprice']=$pavprice;
				    $param[':picture']=$picture;
				    $stmt->execute($param);
					if($stmt){
						echo "<script>window.location = 'admin_index.php?url=admin_cf_index.php';</script>";
					}
}
?>
