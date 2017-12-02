 <?
	  require_once 'head.php';
	  require_once 'menu.php';
		?>
 <?
 		$sql = "SELECT * FROM invipav_tb JOIN pav_tb ON invipav_tb.pav_id = pav_tb.pav_id
 			   JOIN member_tb ON invipav_tb.mem_id = member_tb.mem_id WHERE invipav_id = :id";
 		$stmt = $db->prepare($sql);
 		$stmt->bindValue(':id',$_GET["invipav_id"],PDO::PARAM_STR);
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">ชื่อศาลา :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <span><?=$data['pav_name']?></span>
                        </div>
                      </div>
                      <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อ-นามสกุล:</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                  <span><?=$data['mem_name']?></span>

                  <br />
                  </div>
                  </div>
                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">วันที่แรกจอง:</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <span><?=$data['invipav_datefirst']?></span>
                        </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">วันสุดท้ายที่จอง:</label>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                          <span><?=$data['invipav_datelast']?></span>
                        </div>
                      </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">เบอร์โทรศัพท์:</label>
				<span><?=$data['mem_tel']?></span>
                 </div>
                <div class="form-group">
                	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="his-topic">สถานะ :</label>
					<select name="status">
					<option value="0">ยกเลิกการจอง</option>
					<option value="1">รอการยืนยัน</option>
					<option value="2">ยืนยันการจอง</option>
					</select>
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
	        $id = $_GET['invipav_id'];
	        $status = $_POST['status'];

	        $sql = "UPDATE invipav_tb SET invi_status = :status WHERE invipav_id = :id";
	      	$stmt=$db->prepare($sql);
		  	$param[':id']=$id;
			$param[':status'] = $status;
			$stmt->execute($param);
			}

	       	require_once 'linkjs.php';
			?>
  </body>
</html>
