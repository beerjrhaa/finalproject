 <?php
	  require_once 'head.php';
	  require_once 'menu.php';
 ?>
 <?php


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
                    <form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="addhistem.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">หัวข้อประวัติวัด <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="his-topic"  name="histopic" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">รายละเอียด<span class="required">*</span>
                        </label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name ="detail"></textarea>

                  <br />
                                  </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">รูปภาพ <span class="required">*</span></label>
                <input type="file" name="pichis">
                </div>
                <div class="form-group">
	            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">วันที่ลงข้อมูล <span class="required">*</span></label>
				<input type="date" name="dateadd">
                              </div>
 </div>
                              </div>
                            </div>


                      </div>

                </div>
                 <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button  type="submit" class="btn btn-success" >Submit</button>
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
              <?php
	               require_once 'footer.php';
               ?>
           </div>
        </div>
        </div>

			<?php //เปิด tag php เต็ม
				require_once 'linkjs.php';

				if($_POST){
		 try{

		$sql1="SELECT MAX(his_id) FROM his_tb ";

		$stmt=$db->prepare($sql1);
		$stmt->execute();
		$data=$stmt->fetch();
		$id=$data[0];
		if($id=$data[0]){
			$id+++1;
		}


		echo('<pre>');
		print_r($_POST);
		print_r($_POST['pichis']);
		print_r($_FILES);




		  $name = $_POST['histopic'];
		  $detail = $_POST['detail'];
		  $date = $_POST['dateadd'];
 		  $picture="";
			if($_FILES['pichis']['type']=="image/jpeg"){


				$picture=$id.'.jpg';

				rename($_FILES['pichis']['tmp_name'], 'picture/his/'.$picture);

			}

			else{
				$picture=$data.".jpg";
				@unlink("picture/his/".$picture);
				$picture="";
			}
		    			$sql = 'INSERT INTO his_tb (his_topic,his_detail,his_date,his_pic)
					VALUES (:histopic,:detail,:dateadd,:pichis)';
			$stmt=$db->prepare($sql);
			$param[':histopic'] = $name;
			$param[':detail'] = $detail;
			$param[':dateadd'] = $date;
			$param[':pichis'] = $picture;
			$stmt->execute($param);

			echo "<meta http-equiv='refresh' content='3; url=histem.php'>";
			}
		catch(PDOException $e)
    {
        echo $e->getMessage();
    }

	exit;
}


 ?>


  </body>

</html>
