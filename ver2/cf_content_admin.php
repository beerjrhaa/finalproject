<?php
	$url = isset($_GET['url2']) ? $_GET['url2'] : '';

	if(!empty($url)){
            include_once $url;
}else{
    include_once 'cf_showroomAll.php';
    }
    
?>
