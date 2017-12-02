<?php
	$form = new form();
	$name = new textfield('name','','form-control','','');
	$tel = new textfield('tel','','form-control','','');
	$email = new textfield('email','','form-control','','');
	$lbemail = new label('e-mail :');
	$num_monk = new label('จำนวนพระที่นิมนต์');
	$lbname = new label('ชื่อ-นามสกุลผู้นิมนต์');
	$lbdate = new label('วันและเวลาที่นิมนต์พระ');
	$lbadd = new label('ที่อยู่');
    $lbtel = new label('เบอร์โทรศัพท์ : ');
    $lblocation = new label('สถานที่');
    $texttwoday = new textfieldcalendarreadonly('date','date_picker_1','','form-control','input-group-addon btn calen','date_picker_1');
//      $datests = new textfield('event_start','','some_class form-control','','เริ่ม');
//      $datests->id = 'date_timepicker_start';
//      $dateend = new textfield('event_end','','some_class form-control','','เสร็จสิ้น');
//      $dateend->id = 'date_timepicker_end';
	$button = new buttonok('บันทึก','','btn btn-success col-md-12','');?>
    <div class='col-md-12'>
        <div class="row">
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
<?php echo $form->open('form_reg','frmMain','','cfm_insertday.php',''); ?>
						<div class='row'>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbname; ?></div>
									<div class='col-md-8'><?php echo $name; ?></div>
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
									<div class='col-md-4'style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbadd; ?></div>
									<div class='col-md-8'><textarea class='form-control' name='add'></textarea></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbemail; ?></div>
									<div class='col-md-8'><?php echo $email; ?></div>
								</div>
							</div>
						   <div class='col-md-12' style="margin-bottom: 8px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $num_monk; ?></div>
									<div class='col-md-8'>
										<select class='form-control' id='nummonk' name='nummonk'>
											<option value="">โปรดระบุจำนวนพระ</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
										</select>
									</div>
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
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lblocation; ?></div>
									<div class='col-md-8'>
										<select class='form-control' name='loca' id='loca'>
											<option value="">โปรดระบุสถานที่</option>
											<option value="1">ภายในวัด</option>
											<option value="2">นอกวัด</option>
										</select>
									</div>
							   </div>
						   </div>
						   <div class='col-md-12' style="margin-bottom: 8px;">
							   <div class='row'>
								   <div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"></div>
								   <div class='col-md-8'>
								   	<input class='inwat' type='radio' name="wat" value ="1"><label class='inwat'>ศาลา1</label>
								   	<input class='inwat' type='radio' name="wat" value ="2"><label class='inwat'>ศาลา2</label>
								   	<input class='inwat' type='radio' name="wat" value ="3"><label class='inwat'>ศาลา3</label>
								   	<input class='inwat' type='radio' name="wat" value ="4"><label class='inwat'>ศาลา4</label>
								   	<input class='inwat' type='radio' name="wat" value ="5"><label class='inwat'>ศาลา5</label>
 								   	<input class='outwat form-control' type="text" name="outwat" placeholder="กรุณาระบุสถานที่นอกวัด">
								   </div>
							   </div>
							</div>
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
$(document).ready(function(){

    $("#date_picker_1").datetimepicker({
        format: "Y-m-d - H:i",
        todayBtn:  1,
        autoclose: true,
        lang: 'th',
 	});
 	$('.inwat').on("click", function() {
		 	  console.log($('input[name=wat]:checked').val());
	 	 });

 		 $('.inwat').hide();
	 	 $('.outwat').hide();
	 	 	 	 console.log($('.inwat').val());
 	 $('#loca').on("change", function() {
	 	 var location1 = $('#loca').val();
//	 	 console.log( $('#loca').val());
 	  if(location1 == 1){
	 	 $('.outwat').hide();
	 	 $('.inwat').animate({height: 'toggle'});
 	 }
 	 else if(location1 == 2){
	 	 $('.inwat').hide();
	 	 $('.outwat').animate({height: 'toggle'});
 	 }
 	 });
 	 $('#nummonk').on('change', function() {

	 	console.log($('#nummonk').val());
 	});

 });

</script>
