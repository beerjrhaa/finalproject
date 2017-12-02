<?php
	        ob_start();
        include '../database/database.php';
        include '../mpdf/mpdf.php';


?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <div class="text-center">
        </div>
          <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
              <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="label label-primary"></span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
              <?php
                    $sql = "SELECT * FROM invipav_tb JOIN member_tb ON invipav_tb.mem_id = member_tb.mem_id 																	JOIN pav_tb ON invipav_tb.pav_id = pav_tb.pav_id WHERE invipav_id = :id";
                    $stmt=$db->prepare($sql);
                    $stmt->bindValue(':id',$_GET["invipav_id"],PDO::PARAM_STR);
					$stmt->execute();
					$data=$stmt->fetch();

              ?>
              <table class="table table-bordered">
                  <tr>
                      <th>รหัสการจอง</th>
                      <th>ชื่อ-สกุล</th>
                      <th>ชื่อศาลา</th>
                      <th>วันที่เริ่มจอง</th>
                      <th>วันที่สิ้นสุด</th>

                  </tr>
                  <tr>
                      <td>
                          <center><?=  $data['invipav_id']; ?></center>
                      </td>
                      <td>
                          <?=  $data['mem_name']; ?>
                      </td>
                      <td>
                          <?=  $data['pav_name']; ?>
                      </td>
                      <td>
                          <?=  $data['invipav_datefirst']; ?>
                      </td>
                      <td>
                          <?=  $data['invipav_datelast']; ?>
                      </td>

                  </tr>
              </table>

            </div><!-- /.box-body -->
            <div class="box-footer">
				<br><br><div style="float:right; width: 28%">ลงชื่อ: (..................................................................)<br>
			     <h4 style="text-align: center;"><?=  $data['mem_name']; ?></h4></div>
            </div><!-- box-footer -->
          </div><!-- /.box -->


        </section><!-- /.content -->

        <?php
            $html = ob_get_contents();
            ob_end_clean();

            $mpdf=new mPDF('utf-8');
            $mpdf->margin_header = 9;
            $mpdf->SetHeader('รายงานโดย เว็บไซต์บริหารจัดการวัดสุคันธาราม | รายงานการจองศาลา | ออกรายงานเมื่อ: '.date('d/m/Y H:i:s'));
            $mpdf->margin_footer = 9;
            $mpdf->SetFooter('หน้าที่ {PAGENO}');
            // Define a Landscape page size/format by name
            //$mpdf=new mPDF('utf-8', 'A4-L');
            // Define a page size/format by array - page will be 190mm wide x 236mm height
            //$mpdf=new mPDF('utf-8', array(190,236));
            $stylesheet = file_get_contents('css/printpdf.css');
            //$mpdf->SetDisplayMode('fullpage');
            $mpdf->WriteHTML($stylesheet,1);
            $mpdf->WriteHTML($html,2);
            //$mpdf->Output();
            $mpdf->Output(time(),'I');


            exit;
        ?>



    </body>
</html>


