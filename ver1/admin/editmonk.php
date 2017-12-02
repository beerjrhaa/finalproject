 <?
	  require_once 'head.php';
	  require_once 'menu.php';
		?>
 <?
 		$sql = "SELECT * FROM monk_tb WHERE monk_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["monk_id"],PDO::PARAM_STR);
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ชื่อพระ <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="monkname"required="required" class="form-control col-md-7 col-xs-12"
                          value="<?=$data['monk_name']?>">
                        </div>
                      </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ยศ <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="rank" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?=$data['monk_rank']?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ฉายา <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="nick" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?=$data['monk_nick']?>">
                        </div>
                      </div>
                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">พรรษา <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="season"required="required" class="form-control col-md-7 col-xs-12"
                          value="<?=$data['monk_season']?>">
                        </div>
                      </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ตำแหน่ง <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="pos" required="required" class="form-control col-md-7 col-xs-12"
                          value="<?=$data['monk_pos']?>">
                        </div>
                      </div>
					  <div class="form-group">
					  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">รูปภาพ <span class="required">*</span></label>
					  <input type="file" name="monkpic" value="<?=$data['monk_pic']?>">
                 	</div>
                 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
	                         <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="button" class="btn btn-primary">Cancel</button>
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
				require_once 'linkjs.php';

				if($_POST){
				try{
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
				    $stmt=$db->prepare($sql);
				    $param[':id']=$id;
				    $param[':monkname']=$monkname;
				    $param[':monkrank']=$monkrank;
				    $param[':monknick']=$monknick;
				    $param[':monkseason']=$monkseason;
				    $param[':monkpos']=$monkpos;
				    $param[':picture']=$picture;
				    $stmt->execute($param);
					echo "<meta http-equiv='refresh' content='3; url=menmonk.php'>";
					}
					catch(PDOException $e)
    {
        echo $e->getMessage();
    }


				}


			?>
  </body>
</html>
