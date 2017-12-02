<?
 if($_POST){
		  $name = $_POST['his-topic'];
		  $detail = $_POST['detail'];
		  $date = $_POST['dateadd'];
		  $picture="";
			if($_FILES['picture']['type']=="image/jpeg"){


				$picture=$id.'.jpg';

				rename($_FILES['picture']['tmp_name'], 'picture'.$picture);

			}

			else{
				$picture=$data.".jpg";
				@unlink("picture/".$picture);
				$picture="";
			}

			$sql = 'INSERT INTO his_tb (his_topic,his_detail,his_pic,his_date)
					VALUES (:his-topic,:detail,:picture,:dateadd)';
			$stmt = $db->prepare($sql);
			$param[':name'] = $name;
			$param[':detail'] = $detail;
			$param[':picture'] = $picture;
			$param[':dateadd'] = $date;
			$stmt->execute();

			echo "เสร็จละอีดอก";
}

 ?>
