<?php
	$form = new form();
	$status = new textfield('die','','form-control','','');
	$name = new textfield('name','','form-control','','');
	$tel = new textfield('tel','','form-control','','');
	$namedie = new textfield('namedie','','form-control','','');
	$statusdie = new textfield('statusdie','','form-control','','');
	$email = new textfield('email','','form-control','','');
	$lbadd = new label('ที่อยู่ :');
	$lbemail = new label('e-mail :');
	$lbnamedie = new label('ชื่อผู้ตาย :');
	$lbdate = new label('วันเริ่มจอง :');
	$lbdate2 = new label('วันสิ้นสุดจอง :');
	$lbstatus = new label('เกี่ยวข้องกับผู้ตาย :');
    $lbs = new label('สถานะหลังสวดเสร็จ :');
    $lbname = new label('ชื่อผู้จอง : ');
    $lbtel = new label('เบอร์โทรศัพท์ : ');
    $texttwoday = new textfieldcalendarreadonly('datefirst','datepicker1','','form-control','input-group-addon btn calen','datepicker1');
    $texttwoday2 = new textfieldcalendarreadonly('dateend','datepicker2','','form-control','input-group-addon btn calen','datepicker2');
	$button = new buttonok('บันทึก','btnSubmit','btn btn-success col-md-12','');

	$pav_id = $_GET['pav_id'];
	?>
    <div class='col-md-12'>
        <div class="row">
	        <div class='col-md-12'>
				<h2><?php echo 'ศาลาสามัคคีราชวัตรสวัสดี'?></h2>
			</div>
			<div class='col-md-12'>
				<div class="row">
					<div class='col-md-6'>
						<div class='row'>
							<div class='col-md-12 picbackground'>
								<div id='myCarousel' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/test/first.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/test/second.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/test/third.jpg' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-md-6'>
<?php echo $form->open('form_reg','frmMain','','cf_insertday.php',''); ?>
						<div class='row'>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbname; ?></div>
									<div class='col-md-8'><?php echo $name; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbnamedie; ?></div>
									<div class='col-md-8'><?php echo $namedie; ?></div>
								</div>
							</div>
										   <div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbstatus; ?></div>
									<div class='col-md-8'><?php echo $status; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"<?php echo $lbdate; ?></div>
									<div class='date-form dayinbox col-md-8 form-horizontal control-group controls input-group'><?php echo $texttwoday; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbdate2 ?></div>
									<div class='date-form dayinbox col-md-8 form-horizontal control-group controls input-group'><?php echo $texttwoday2; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"></div>
									<div class='col-md-8'><div id="msg" class="col-md-12 form-group" style="text-align:center;padding-top:10px;"></div></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbs; ?></div>
									<div class='col-md-8'><?php echo $statusdie; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbtel; ?></div>
									<div class='col-md-8'><?php echo $tel; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbadd; ?></div>
									<div class='col-md-8'><textarea class='form-control' name='add'></textarea></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbemail; ?></div>
									<div class='col-md-8'><?php echo $email;?></div>
								</div>
							</div>

							<input type='hidden' name='statuspav' value='N'/>
							<input type="hidden" id ='idPav' name="idPav" value="<?=$pav_id;?>">
							<div class='col-md-12'>
									<div class='row'>
										<div class='col-md-8'></div>
										<div class='col-md-2'>
											<?php echo $button; ?>
										</div>
										<div class='col-md-2'>
											<button type="button" class="btn btn-danger col-md-12" data-dismiss="modal">ยกเลิก</button>
										</div>
									</div>
							</div>
<?php 	echo $form->close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>

	$('#datepicker1').datepicker({
	  format:'yyyy-mm-dd',
	}).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#datepicker2').datepicker('setStartDate', minDate);
    });

	 $('#datepicker2').datepicker({
	  format:'yyyy-mm-dd',
	  	 }).on('changeDate', function (selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#datepicker1').datepicker('setEndDate', minDate);
        });
	function checkdate(){
		 $("#msg").html();
		 $('#msg').hide();
		$.ajax({
            url: "cf_getday.php",
            data: {datestart : $('#datepicker1').val() , dateend : $('#datepicker2').val(), idPav : $('#idPav').val()},
            type: "POST",
            success: function(data) {
	           	$('#msg').show();
                if(data > '0') {
                    $("#btnSubmit").attr("disabled", true);
                     $("#msg").html('<span class="text-danger">วันที่นี้ถูกจองแล้ว</span>');


                } else {
	                $("#msg").html('<span class="text-success">วันที่นี้สามารถจองได้</span>');
                    $("#btnSubmit").attr("disabled", false);
                }
            }
        });

	}
	$("#btnSubmit").attr("disabled", true);
	$("#datepicker1").on('change',function(){
		checkdate();
		$(this).datepicker('hide');
	});
	$("#datepicker2").on('change',function(){
		checkdate();
		$(this).datepicker('hide');
	});
	$(document).ready(function() {
	$("#confer_idtf").on("change",function(e) {

		console.log($("confer_idtf").val());
	});
});

  //ทำการเช็คค่า2 ช่องเพื่อ ให้ AJAX ไปเช็คในฐานข้อมูลแล้วส่งค่ากลับมาว่ามี หรือป่าว ถ้ามี ให้ขึ้นทึบและกด Submit ไม่ได้ ตรวจวันแรก วันที่สอง และในช่วงของวันแรกและวัันที่สอง
 </script>
