		<?
		require_once 'head.php';
		require_once 'menu.php';
		$sql='SELECT * FROM monk_tb';
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
				  <a href="addmonk.php"><button type="button" class="btn btn-round btn-primary">เพิ่มข้อมูล</button></a>
                  <div class="x_content">
				  	<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">รูปพระ </th>
                            <th class="column-title">รหัสพระ </th>
                            <th class="column-title">ชื่อพระ </th>
                            <th class="column-title">ฉายา </th>
                            <th class="column-title">พระยศ </th>
                            <th class="column-title">พรรษา </th>
                            <th class="column-title">ตำแหน่ง </th>
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
		                        foreach($data as $monk){
	                        ?>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><img src="picture/monk/<?=$monk['monk_pic']?>" style="width: 150px; height:150px;"></td>
                            <td class=" "><?=$monk['monk_id']?></td>
                            <td class=" "><?=$monk['monk_name']?></td>
                            <td class=" "><?=$monk['monk_rank']?></td>
                            <td class=" "><?=$monk['monk_nick']?></td>
                            <td class=" "><?=$monk['monk_season']?></td>
                            <td class=" "><?=$monk['monk_pos']?></td>
                            <td class=" last"><a href="editmonk.php?monk_id=<?=$monk['monk_id']?>">Edit</a></td>
                            <td class=" last"><a href="deletemonk.php?monk_id=<?=$monk['monk_id']?>">Delete</a></td>
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
