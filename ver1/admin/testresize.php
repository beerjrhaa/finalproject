<?php

	$filename="1.jpg";
$size = getimagesize($filename);
$fp = fopen($filename, "rb");
if ($size && $fp) {
    header("Content-type: {$size['mime']}");
    fpassthru($fp);
    echo"<pre>";
    print_r($fp);
    exit;
} else {
    // error
}
?>
