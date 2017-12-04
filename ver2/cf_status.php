<?php
    if (!empty($_SESSION['user_id'])):
    $zoo = $_SESSION['subzoo_zoo_zoo_id'];
    date_default_timezone_set('Asia/Bangkok');
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $lbuname = new label('ชื่อผู้ขอใช้ห้องประชุม');
    $lbtel = new label('เบอร์ติดต่อ');
    $lbadd = new label('ที่อยู่');
    $lbstart = new label('วันและเวลาเริ่มประชุม');
    $lbend = new label('วันและเวลาเลิกประชุม');
    $lbnamedie = new label('ชื่อผู้ตาย');
    $lbpsname = new label('ประธานที่ประชุม (โปรดระบุชื่อ - สกุล)');
    $lbpsclass = new label('ตำแหน่ง');
    $lbjoin = new label('ผู้เข้าร่วมประชุม (โปรดระบุจำนวน)');
    $lbnamers = new label('ชื่อผู้จอง');
    $lbtel = new label('เบอร์โทรศัพท์');

    $txtnotclear = new textfield('problem_notclear','','form-control css-require','','');
    $txttime = new textfield('problem_dateend','datetimepicker','form-control css-require','','');
    $txtorder = new textfield('problem_dateorder','datetimepicker2','form-control css-require','','');
    $txtserialNo = new textfield('problem_serial','','form-control css-require','','');
    $txtplace = new textfield('problem_place','','form-control css-require','','');
    $txtserialorganize = new textfield('problem_serialorganize','','form-control css-require','','');
    $txtcompletedetail = new textarea('problem_detailcomplete','form-control','','');
    $txtcompletedetail->rows = 5;
    $txtnocompletedetail = new textarea('problem_detailwaitcomplete','form-control','','');
    $txtnocompletedetail->rows = 5;
    $button = new buttonok('เปลี่ยนสถานะ','','btn btn-success','');
    if(!empty($_GET['id'])){
		$id = $_GET['id'];
// 		$r = $db->findByPK33('invipav_tb','pav_tb','mem_tb','pav_id','pav_id','mem_id','mem_id','invipav_id',$id)->executeRow();
	 	$result = "SELECT * FROM `invipav_tb` as ip JOIN pav_tb as p ON ip.pav_id = p.pav_id  JOIN member_tb as m ON ip.mem_id = m.mem_id WHERE ip.invipav_id = $id";
	 	$rs = mysqli_query($link, $result);
	 	$r=mysqli_fetch_assoc($rs);
		 $year = date("Y")+543;
          $md = date("m-d");
          $time = date("H:i");
		  echo $row."<legend></legend>".$rowend;
		  echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbuname.$rowend."<div class='col-md-3  m-3'>".$r['mem_name'].$rowend.$rowend;
          echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbtel.$rowend."<div class='col-md-3  m-3'>".$r['mem_tel'].$rowend.$rowend;
          echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbadd.$rowend."<div class='col-md-3  m-3'>".$r['mem_add'].$rowend.$rowend;
		   echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbstart.$rowend."<div class='col-md-3  m-3'>".$r['invipav_datefirst'].$rowend.$rowend;
           echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbend.$rowend."<div class='col-md-3  m-3'>".$r['invipav_datelast'].$rowend.$rowend;
		echo $row."<div class='col-md-3 font-weight-bold text-center m-3'>".$lbnamedie.$rowend."<div class='col-md-3  m-3'>".$r['invipav_namedie'].$rowend.$rowend;
		}
		 		echo $form->open("form_reg","form","","cf_insert_updatestatus.php","");
		 ?>
		 <div class="col-md-8 m-3"><hr>
		<div class="col-md-12 m-3">
	          <div class="row m-3">
			        <div class="btn-group " data-toggle="buttons">
			            <label class="btn btn-success active">
			              <input type="radio" name="invi_status" value="Y" id="complete" autocomplete="off"  checked> อนุมัติ
			            </label>
			            <label class="btn btn-danger">
			              <input type="radio" name="invi_status" value="N" id="nocomplete" autocomplete="off"> ไม่อนุมัติ
			            </label>
			        </div>
			        <input type='hidden' name='invipav_id' value='<?=$id;?>'>
            	</div>
            </div>
<?php
    echo $button;
     echo $form->close();
	endif;
?>
</div>
