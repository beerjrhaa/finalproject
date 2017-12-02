		<?
		require_once 'head.php';
		require_once 'menu.php';

		$sql = "SELECT * FROM inviequip_tb JOIN member_tb ON inviequip_tb.mem_id = member_tb.mem_id
	  		 JOIN equip_tb ON inviequip_tb.equip_id = equip_tb.equip_id";
	  	$stmt=$db->prepare($sql);
	  	$stmt->execute();
	  	$rows = $stmt->rowCount();

	  if($rows ==0){
		echo "ไม่มีข้อมูล";
	  }

		?>
		 <div class="right_col" role="main">
          <div class=""> </div>
            <br />
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ตารางแสดงข้อมูลประวัติวัด</h2>
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
				  <button type="button" class="btn btn-round btn-primary">เพิ่มข้อมูล</button>
                  <div class="x_content">
				  	<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">รูป </th>
                            <th class="column-title">ชื่ออุปกรณ์ </th>
                            <th class="column-title">วันที่ยืม </th>
                            <th class="column-title">จำนวนที่ยืม </th>
                            <th class="column-title">ชื่อ-นามสกุล </th>
                            <th class="column-title">เบอร์โทรศัพท์ </th>
                            <th class="column-title no-link last" colspan="2"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
	                         <?
		                        $data=$stmt->fetchAll();
		                        foreach($data as $invequip){
	                        ?>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><img src="picture/equip//<?=$invequip['equip_pic']?>" style="width: 150px; height: 100px;"></td>
                            <td class=" "><?=$invequip['equip_name']?></td>
                            <td class=" "><?=$invequip['inviequip_date']?></td>
                            <td class=" "><?=$invequip['inviequip_num']?></td>
                            <td class=" "><?=$invequip['mem_name']?></td>
                            <td class=" "><?=$invequip['mem_tel']?></td>
                            <td class=" last"><a href="editequip.php?inviequip_id=<?=$invequip['inviequip_id']?>">Confirm</a>
                            <td class=" last"><a href="reportequip.php?inviequip_id=<?=$invequip['inviequip_id']?>">Print</a>

                            </td>
                          </tr>
                          <?
	                          }
                          ?>

                        </tbody>
                      </table>
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
				require_once 'linkjs.php';
			?>
  </body>
</html>
