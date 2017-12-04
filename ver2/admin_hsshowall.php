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
    $columns = array('his_id','his_topic','his_detail','his_date');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();

    $result = "SELECT * FROM his_tb";
	$rs = mysqli_query($link, $result);
       echo "<div class='col-md-12'>"."<h2>ตารางแสดงข้อมูลประวัติวัด</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'his_id';
			$grid->header = array('<b><center>ลำดับที่</center></b>','<b><center>ชื่อหัวข้อ</center></b>','<b><center>รายละเอียดของหัวข้อ</center></b>','<b><center>วันที่เพิ่มข่าวสาร</center></b>','<b><center>#</center></b>','<b><center>#</center></b>');
			$grid->width = array('5%','15%','30%','10%','5%','5%');
			$grid->name = 'table';
			$grid->delete = 'admin_index.php?url=admin_cf_index.php&url2=cf_status.php';
			$grid->deletetxt ='ลบ';
			$grid->edit = 'admin_index.php?url=admin_cf_index.php&url2=cf_status.php';
			$grid->edittxt ='แก้ไข';

			$grid->renderFromDB($columns,$rs);
			endif;

		?>