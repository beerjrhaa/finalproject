<?
	session_start();
	ob_start();
	error_reporting(1);

	try{
		include 'database/database.php';
		$user = $_POST['username'];
		$pass = $_POST['password'];



		$sql = "SELECT * FROM user_tb WHERE user_user=:user and user_pass=:pass";
		$stmt=$db->prepare($sql);
		$param[':user'] = $user;
		$param[':pass'] = $pass;
		$stmt->execute($param);

		$data=$stmt->fetch();

			if($data['user_per'] == 2){

 		header('location:index.php');

 		echo "<script>alert('HEllo admin')</script>" ;


			}
			elseif($data['user_per'] == 3){
				header('location:index.php');
				echo "<script>alert('HEllo user')</script>" ;


// 			echo "<meta http-equiv='refresh' content='3; url=index.php'>";

			}
	}catch (PDOException $ex) {
    	echo $ex->getMessage();
	  }


?>
