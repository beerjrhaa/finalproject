<form id="demo-form2" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label class="control-label col-md-3" for="his-topic">หัวข้อประวัติวัด <span class="required">*</span>
        </label>
        <div class="col-md-6">
            <input type="text" id="his-topic" name="histopic" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group">
	    <label class="control-label col-md-3" for="first-name">รายละเอียด<span class="required">*</span></label>
	    <div class="col-md-6">
	        <textarea class='form-control' name="detail"></textarea>
	    </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3" for="his-topic">รูปภาพ <span class="required">*</span></label>
        <div class="col-md-6">
        	<input type="file" name="pichis">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3" for="his-topic">วันที่ลงข้อมูล <span class="required">*</span></label>
        <div class="col-md-6">
        	<input class='form-control' type="date" name="dateadd">
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-9">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="button" class="btn btn-primary">Cancel</button>
        </div>
    </div>

</form>
<?php //เปิด tag php เต็ม

	if($_POST){

		$sql1="SELECT MAX(his_id) FROM his_tb ";

		$stmt=$db2->prepare($sql1);
		$stmt->execute();
		$data=$stmt->fetch();
		$id=$data[0];
		if($id=$data[0]){
			$id+++1;
		}


		echo('<pre>');
		print_r($_POST);
		print_r($_POST['pichis']);
		print_r($_FILES);




		  $name = $_POST['histopic'];
		  $detail = $_POST['detail'];
		  $date = $_POST['dateadd'];
 		  $picture="";
			if($_FILES['pichis']['type']=="image/jpeg"){


				$picture=$id.'.jpg';

				rename($_FILES['pichis']['tmp_name'], 'images/picture/his/'.$picture);

			}

			else{
				$picture=$data.".jpg";
				@unlink("images/picture/his/".$picture);
				$picture="";
			}
		    			$sql = 'INSERT INTO his_tb (his_topic,his_detail,his_date,his_pic)
					VALUES (:histopic,:detail,:dateadd,:pichis)';
			$stmt=$db2->prepare($sql);
			$param[':histopic'] = $name;
			$param[':detail'] = $detail;
			$param[':dateadd'] = $date;
			$param[':pichis'] = $picture;
			$stmt->execute($param);


			if($stmt){
			echo "<script>window.location = 'admin_index.php?url=admin_hs_index.php';</script>";
			echo "เสร็จละอีดอก";
			}

	}



 ?>
