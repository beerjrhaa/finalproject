<?php
    $form = new form();
    $name = new textfield('eventconfer_namers', '', 'form-control', '', '');
    $tel = new textfield('eventconfer_tel', '', 'form-control', '', '');
    $uname = new textfield('eventconfer_uname', '', 'form-control', '', '');
    $uclass = new textfield('eventconfer_uclass', '', 'form-control', '', '');
    $join = new textfield('eventconfer_join', '', 'form-control', '', '');
    $patanname = new textfield('eventconfer_patanname', '', 'form-control', '', '');
    $place = new textfield('place_equip', '', 'form-control', '', '');
    $search = new textfield('searchequip', '', 'form-control', '', '');
    $num_monk = new label('จำนวนพระที่นิมนต์');
    $lbsearch = new label('กรุณากรอกชื่ออุปกรณ์ที่ต้องการจอง');
    $lbplace = new label('สถานที่ที่ยืมอุปกรณ์');
    $lbdate = new label('วันและเวลาที่นิมนต์พระ');
    $lbpatan = new label('ที่อยู่');
    $lboffice = new label('สังกัด/ฝ่าย');
    $lbjoin = new label('ที่อยู่');
    $lbstatus = new label('สถานะหลังสวดพระอภิธรรม');
    $lbtel = new label('เบอร์โทรศัพท์ : ');
    $lblocation = new label('สถานที่');
    $texttwoday = new textfieldcalendarreadonly('eventconfer_start', 'date_picker_1', '', 'form-control', 'input-group-addon btn calen', 'date_picker_1');
    $button = new buttonok('บันทึก', '', 'btn btn-success col-md-12', '');
    ?>
    <div class='col-md-12'>
        <div class="row">
            <div class='col-md-12'>
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
<?php echo $form->open('form_reg', 'frmMain', '', 'cfe_insertday.php', ''); ?>
                        <div class='row'>
                            <div class='col-md-12' style="margin-bottom: 8px;">
                                <div class='row'>
                                    <div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbsearch; ?></div>
                                    <div class='col-md-5'><?php echo $search; ?></div>
                                    <div class='col-md-3'>
                                        <button type="button" id="searchEquip">Search</button>
                                        <button type='button' id="showEquip">ShowAll</button>
                                    </div>
                                </div>
                            </div>
                            <div id="outputEquip" class='col-md-12' style="margin-bottom: 8px;">
                                <!-- list -->
                                <div class="row last">

                                </div>
                            </div>
                            <div class='col-md-12' style="margin-bottom: 8px;">
                                <div class='row'>
                                    <div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbplace; ?></div>
                                    <div class='col-md-8'><?php echo $place; ?></div>
                                 </div>
                            </div>

                            <?=$button?>

<?php   echo $form->close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>

function findEquipName(name) {
    var equip_name = $(".equip_name");
    for(var i = 0; i < equip_name.length; i ++) {
        console.log($(equip_name[i]).html(), name);
        if($(equip_name[i]).html() == name) {
            return true;
        }
    }
    return false;
}

$(document).ready(function(){

    $('#searchEquip').click(function() {
        var txt = $('input[name=searchequip]').val();
        if(txt != '') {

            $.post('process/searchEquip.php', {
                data: txt
            }, function(response) {
                if(response != 'null'){
                    console.log(response);
                    var name = JSON.parse(response);

                    if(!findEquipName(name.equip_name)) {
                        $('#outputEquip').find('.last').append('<div class="col-md-4 equip_name" style="padding-right: 0;padding-left: 0;padding-top:7px;">'+name.equip_name+'</div><div class="col-md-8"><input type="hidden" name="equipId[]" value="'+name.equip_id+'"><input class="form-control"type="number" name="equipNum[]" value="0" /></div>');
                    }

                }
            });
        }
    });

    $('#showEquip').click(function() {
            $.post('process/searchEquip.php', {
                data: '-',
                fiter: 'all'
            }, function(response) {
                if(response != 'null'){
                    // console.log(response);
                    var name = JSON.parse(response);

                    for(i =0; i < name.length; i ++ ){
                        if(!findEquipName(name[i].equip_name)) {
                            $('#outputEquip').find('.last').append('<div class="col-md-4 equip_name" style="padding-right: 0;padding-left: 0;padding-top:7px;">'+name[i].equip_name+'</div><div class="col-md-8"><input type="hidden" name="equipId[]" value="'+name[i].equip_id+'"><input class="form-control"type="number" name="equipNum[]" value="0" /></div>');
                        }
                    }

                }
            });
    });


    $("#date_picker_1").datetimepicker({
        format: "Y-m-d - H:i",
        todayBtn:  1,
        autoclose: true,
        lang: 'th',
    });

 });
</script>
