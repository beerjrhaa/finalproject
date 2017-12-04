<!-- <div class="content"> -->


<?php
	$url = $_GET['url'];

	if(empty($_SESSION['user_id'])){
		include_once 'login.php';
// 		echo "ล็อคอินพลาด";
		}
	if(!empty($url)){
		include_once $url;
}else{
    include_once 'admin_mainmenu.php';
}

?>
<!-- </div> -->
