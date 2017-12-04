<?
 		$sql = "SELECT * FROM monk_tb WHERE monk_id = :id";
 		$stmt = $db2->prepare($sql);
 		$stmt->bindValue(':id',$_GET["monk_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();
 ?>
<form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ชื่อพระ <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="monkname"required="required" class="form-control"
                          value="<?=$data['monk_name']?>">
                        </div>
                      </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 " for="his-topic">ยศ <span class="required">*</span>
                        </label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="rank" required="required" class="form-control "
                          value="<?=$data['monk_rank']?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">ฉายา <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="nick" required="required" class="form-control"
                          value="<?=$data['monk_nick']?>">
                        </div>
                      </div>
                              <div class="form-group">
                        <label class="control-label col-md-3" for="his-topic">พรรษา <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="season"required="required" class="form-control"
                          value="<?=$data['monk_season']?>">
                        </div>
                      </div>
                <div class="form-group">
                        <label class="control-label" for="his-topic">ตำแหน่ง <span class="required">*</span></label>
                        <div class="col-md-6">
                          <input type="text" id="his-topic" name="pos" required="required" class="form-control"
                          value="<?=$data['monk_pos']?>">
                        </div>
                      </div>
					  <div class="form-group">
					  <label class="control-label" for="his-topic">รูปภาพ <span class="required">*</span></label>
					  <input type="file" name="monkpic" value="<?=$data['monk_pic']?>">
                 	</div>
                 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9">
                          <button type="submit" class="btn btn-success">Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>

                    </form>
                    <?

				if($_POST){
					$id = $_GET['monk_id'];
					$monkname = $_POST['monkname'];
					$monkrank = $_POST['rank'];
					$monknick = $_POST['nick'];
					$monkseason = $_POST['season'];
					$monkpos = $_POST['pos'];

					$picture="";
					if($_FILES['monkpic']['type']=="image/jpeg"){

					$picture=$id.'.jpg';

					rename($_FILES['monkpic']['tmp_name'], 'picture/monk/'.$picture);

					}

					$sql = "UPDATE monk_tb SET
						   monk_name = :monkname,
						   monk_rank = :monkrank,
						   monk_nick = :monknick,
						   monk_season = :monkseason,
						   monk_pos = :monkpos,
						   monk_pic = :picture
						   WHERE monk_id = :id";
				    $stmt=$db2->prepare($sql);
				    $param[':id']=$id;
				    $param[':monkname']=$monkname;
				    $param[':monkrank']=$monkrank;
				    $param[':monknick']=$monknick;
				    $param[':monkseason']=$monkseason;
				    $param[':monkpos']=$monkpos;
				    $param[':picture']=$picture;
				    $stmt->execute($param);
					if($stmt){
						echo "<script>window.location = 'admin_index.php?url=admin_m_index.php';</script>";
					}

				}


			?>

