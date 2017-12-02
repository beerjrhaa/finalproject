 <?
	  require_once 'head.php';
	  require_once 'menu.php';
		?>
 <?
 		$sql = "SELECT * FROM equip_tb WHERE equip_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["equip_id"],PDO::PARAM_STR);
 		$stmt->execute();
 		$data=$stmt->fetch();
 ?>


	      <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ชื่อศาลา<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="import-name" name="equipname" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?=$data['equip_name']?>">
                        </div>
                      </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name ="equipdetail"><?=$data['equip_detail']?></textarea>

                  <br />
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ราคา <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="import-area" name="equipnum" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?=$data['equip_num']?>">
                        </div>
                      </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">รูปภาพ <span class="required">*</span></label>
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
                  </div>
                </div>
              </div>
            </div>
         </div>
              <?
	               require_once 'footer.php';
               ?>
           </div>
        </div>
        </div>

        <?
	        if($_POST){
				try{
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
				    $stmt=$db->prepare($sql);
				    $param[':id']=$id;
				    $param[':equipname']=$equipname;
				    $param[':equipdetail']=$equipdetail;
				    $param[':equipnum']=$equipnum;
				    $param[':picture']=$picture;
				    $stmt->execute($param);
					echo "<meta http-equiv='refresh' content='3; url=menequip.php'>";
					}
					catch(PDOException $e)
    {
        echo $e->getMessage();
    }


				}
			?>

			<?
				require_once 'linkjs.php';
			?>
  </body>
</html>
