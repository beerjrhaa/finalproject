<?php
	session_start();
	ob_start();
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Y-m-d H:i");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>ระบบบริหารจัดการวัดสุคันธาราม</title>
	</head>
<?php
	include_once 'database/db_tools.php';
	include_once 'connect.php';

	$db->findByAttributes('user_tb',array(
		'user_user =' => $_POST['user_user'],
		'user_pass =' => $_POST['user_pass']
		));
	$rs = $db->executeRow();


	if($rs){
/*
    	$_SESSION['user_id'] = $rs['user_id'];
		$_SESSION['user_name'] = $rs['user_name'];
		$_SESSION['user_last'] = $rs['user_last'];
		$_SESSION['user_drive_allow'] = $rs['user_drive_allow'];
		$_SESSION['user_news_allow'] = $rs['user_news_allow'];
		$_SESSION['user_service_allow'] = $rs['user_service_allow'];
		$_SESSION['user_confer_allow'] = $rs['user_confer_allow'];
		$_SESSION['user_admin_allow'] = $rs['user_admin_allow'];
		$_SESSION['user_touristreport_allow'] = $rs['user_touristreport_allow'];
		$_SESSION['subzoo_zoo_zoo_id'] = $rs['subzoo_zoo_zoo_id'];
*/

		$_SESSION['user_id'] = $rs['user_id'];
		$_SESSION['user_user'] = $rs['user_user'];
		header('location: admin_index.php');
/*
		$log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
		 //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipshow = gethostbyaddr($ip);
        $log = $db->insert('log',array(
    	'log_system' => 'เข้าระบบ',
    	'log_action' => 'Login',
    	'log_action_date' => $date,
    	'log_action_by' => $log_user,
    	'log_ip' => $ipshow
    	));
*/
	}else{
		echo "<div class='loginwrong'>ไอดีหรือรหัสผิดพลาด กรุณาลองใหม่</div>";
	}

?>
</html>
