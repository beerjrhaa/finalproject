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
    $id = $_GET['pav_id'];
    $cfrs = $db->findByPK('pav_tb','pav_id',$id)->executeAssoc();
    $pav_name = $cfrs['pav_name'];
    if (!empty($_SESSION['user_id'])):
    echo $id;
    $columns = array('mem_name','invipav_namedie','invipav_datefirst','invipav_datelast','pav_name');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
//     $rs = $db->findByPK33('invipav_tb','pav_tb','member_tb','pav_id','pav_id','pav_id',$id,'mem_id','mem_id')->execute();
    $result = "SELECT * FROM `invipav_tb` as ip JOIN pav_tb as p ON ip.pav_id = p.pav_id  JOIN member_tb as m ON ip.mem_id = m.mem_id WHERE ip.pav_id = $id";
    $rs = mysqli_query($link, $result);
    $rs2=mysqli_fetch_object($rs);
            echo "<div class='col-md-12'>"."<h2>".$pav_name."</h2>".$rowend;

			$grid = new gridView();
			$grid->pr = 'invipav_id';
			$grid->header = array('<b><center>ชื่อผู้จองศาลา</center></b>','<b><center>ชื่อผู้ตาย</center></b>','<b><center>วันที่เริ่มจองศาลา</center></b>','<b><center>วันที่สิ้นสุดการจอง</center></b>','<b><center>ชื่อศาลาที่จอง</center></b>','<b><center>สั่งprint</center></b>','<b><center>#</center></b>');
			$grid->width = array('10%','20%','10%','10%','14%','5%','5%');
			$grid->edit = 'admin_index.php?url=admin_cf_index.php&url2=cf_status.php';
			$grid->name = 'table';
			$grid->edittxt ='สถานะ';
			$grid->view = 'admin_index.php?url=admin_cf_index.php&url2=reportpav.php';
			$grid->viewtxt ='print';
			$grid->renderFromDB($columns,$rs);
			endif;

		?>
