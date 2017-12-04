<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[100, 200, 254, -1], [100, 200, 254, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    } );
} );
</script>
<?php
    if (!empty($_SESSION['user_id'])):
    $columns = array('mem_name','mem_tel','mem_add','invimonk_date','invimonk_nummonk');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();

    $result = "SELECT * FROM `invimonk_tb` as im JOIN member_tb as m ON im.mem_id = m.mem_id ";
	$rs = mysqli_query($link, $result);
       echo "<div class='col-md-12'>"."<h2>ตารางแสดงข้อมูลการนิมนต์พระ</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'invimonk_id';
			$grid->header = array('<b><center>ชื่อผู้จอง</center></b>','<b><center>เบอร์โทรติดต่อ</center></b>','<b><center>ที่อยู่</center></b>','<b><center>วันที่นิมนต์</center></b>','<b><center>จำนวนที่นิมนต์</center></b>','<b><center>#</center></b>','<b><center>#</center></b>');
			$grid->width = array('10%','10%','30%','10%','5%','5%','5%');
			$grid->name = 'table';
			$grid->delete = 'admin_index.php?url=admin_cf_index.php&url2=cf_status.php';
			$grid->deletetxt ='ลบ';
			$grid->edit = 'admin_index.php?url=admin_cf_index.php&url2=cf_status.php';
			$grid->edittxt ='แก้ไข';

			$grid->renderFromDB($columns,$rs);
			endif;

		?>
