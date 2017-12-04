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
    $columns = array('mem_name','mem_tel','mem_add','equip_name','inviequip_num','inviequip_date');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();

    $result = "SELECT * FROM `inviequip_tb` as ie JOIN member_tb as m ON ie.mem_id = m.mem_id JOIN equip_tb as e ON ie.equip_id = e.equip_id";
	$rs = mysqli_query($link, $result);
       echo "<div class='col-md-12'>"."<h2>ตารางแสดงข้อมูลศาลา</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'pav_id';
			$grid->header = array('<b><center>ชื่อผู้จอง</center></b>','<b><center>เบอร์ติดต่อ</center></b>','<b><center>ที่อยู่</center></b>','<b><center>ชื่ออุปรกณ์</center></b>','<b><center>จำนวนที่ยืม</center></b>','<b><center>วันที่ยืม</center></b>','<b><center>#</center></b>','<b><center>#</center></b>');
			$grid->width = array('5%','15%','20%','10%','10%','10%','5%','5%');
			$grid->name = 'table';
			$grid->delete = 'admin_index.php?url=admin_cf_index.php&url2=cf_status.php';
			$grid->deletetxt ='ลบ';
			$grid->edit = 'admin_index.php?url=admin_cf_index.php&url2=cf_status.php';
			$grid->edittxt ='แก้ไข';

			$grid->renderFromDB($columns,$rs);
			endif;

		?>
