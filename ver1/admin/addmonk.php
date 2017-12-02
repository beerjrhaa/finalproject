 <?
	  require_once 'head.php';
	  require_once 'menu.php';
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
                          <input type="text" id="his-topic" name="name"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ยศ <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="rank" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ฉายา <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="nick" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">พรรษา <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="season"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ตำแหน่ง <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic" name="pos" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
					  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">รูปภาพ <span class="required">*</span></label>
					  <input type="file" name="monkpic">
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

		$sql1="SELECT MAX(import_id) FROM import_tb ";

		$stmt=$db->prepare($sql1);
		$stmt->execute();
		$data=$stmt->fetch();
		$id=$data[0];
		if($id=$data[0]){
			$id+++1;
		}

		  $monkname = $_POST['name'];
		  $monkrank = $_POST['rank'];
		  $monknick = $_POST['nick'];
		  $monkseason = $_POST['season'];
		  $monkpos = $_POST['pos'];
		  $target_dir = 'picture/temp/';
		  $target_file = $target_dir.basename($_FILES['monkpic']['name']);

		  $img_new_name = generateRandomString(10);
		  $target_dir_save = 'picture/monk/'.$img_new_name.'.jpg';
		  if (move_uploaded_file($_FILES['monkpic']['tmp_name'], $target_file)) {
		  	$magicianObj = new imageLib($target_file);
		  	$magicianObj->resizeImage(700, 700, 'auto', true);
		  	$magicianObj->saveImage($target_dir_save, 100);
		  	unlink($target_file);
    	  }
			$sql = 'INSERT INTO monk_tb (monk_name,monk_rank,monk_nick,monk_season,monk_pos,monk_pic)
					VALUES (:name,:rank,:nick,:season,:pos,:img_new_name)';
			$stmt = $db->prepare($sql);
			$param[':name'] = $monkname;
			$param[':rank'] = $monkrank;
			$param[':nick'] = $monknick;
			$param[':season'] = $monkseason;
			$param[':pos'] = $monkpos;
			$param[':img_new_name'] = $img_new_name;
			$stmt->execute($param);

			echo "<meta http-equiv='refresh' content='3; url=menmonk.php'>";

}


			require_once 'linkjs.php';

			?>
  </body>
</html>
